<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route('/feed')]
class RssFeedController extends AbstractController
{
    #[Route('/feed', name: 'feed_feed')]
    public function index(Request $request): Response
    {
        $rssUrls = $request->query->get('rss_url');
    
        if ($rssUrls) {
            if (is_array($rssUrls)) {
                // If $rssUrls is already an array, use it directly
                $rssFeeds = [];
                foreach ($rssUrls as $rssUrl) {
                    $rss = $this->loadRss($rssUrl);
                    if ($rss) {
                        $rssFeeds[] = $rss;
                    }
                }
            } else {
                // If $rssUrls is a string, split it into an array of URLs
                $rssUrls = explode(',', $rssUrls);
                $rssFeeds = [];
                foreach ($rssUrls as $rssUrl) {
                    $rss = $this->loadRss($rssUrl);
                    if ($rss) {
                        $rssFeeds[] = $rss;
                    }
                }
            }
    
            return $this->render('feed/feed.html.twig', [
                'rssFeeds' => $rssFeeds,
            ]);
        } else {
            // Handle the case where no RSS URLs are provided
            return $this->render('feed/feed.html.twig');
        }
    }
    


    private function loadRss($rssUrl)
    {
        return simplexml_load_file($rssUrl);
    }

    private function registerLinks($rss)
    {
        $kernelProjectDir = $this->getParameter('kernel.project_dir');
        $logFilePath = $kernelProjectDir . '/var/log/rss_links.log'; // Path to the log file
        $logContent = '';
    
        foreach ($rss->channel as $item) {
            $link = (string) $item->link;
    
            // Parse the base URL
            $baseUrl = (string) $rss->channel->link;
            $parsedBaseUrl = parse_url($baseUrl);
    
            // If the link is a relative path, resolve it to get the complete URL
            if (!filter_var($link, FILTER_VALIDATE_URL) && isset($parsedBaseUrl['host'])) {
                $link = $parsedBaseUrl['scheme'] . '://' . $parsedBaseUrl['host'] . '/' . ltrim($link, '/');
            }
    
            $logContent .= "$link\n";
        }
    
        // Append the log content to the file
        file_put_contents($logFilePath, $logContent, FILE_APPEND);
    }
    



    #[Route('/check-my-rss-feed', name: 'check_my_rss_feed')]
    public function checkMyRssFeed(Request $request): Response
    {
        // Read the links from rss_links.log file
        $kernelProjectDir = $this->getParameter('kernel.project_dir');
        $logFilePath = $kernelProjectDir . '/var/log/rss_links.log';
        $links = file($logFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        // Generate the URLs with parameters
        $urlsWithParams = [];
        foreach ($links as $link) {
            $urlsWithParams[] = urlencode($link);
        }
    
        // Construct the URL query parameters manually
        $queryParams = http_build_query(['rss_url' => $urlsWithParams]);
    
        // Construct the redirect URL
        $redirectUrl = '/feed?' . $queryParams;
    
        // Redirect the user to the feed page with the generated URLs as parameters
        return new RedirectResponse($redirectUrl);
    }
    
}
