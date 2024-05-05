<?php

namespace App\Controller;

use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChatBotController extends AbstractController
{
    #[Route('/chatbot', name: 'app_chat_bot')]
    public function index(Request $request): Response
    {
        // Get the submitted message from the textarea
        $userMessage = $request->request->get('message');
    
        // If a message is submitted, send it to the chat bot API
        $response = null;
        if ($userMessage) {
            // Check if the message contains bad content
            if ($this->isBadContent($userMessage)) {
                // If bad content is detected, return a warning message
                $response = "Warning: Your message contains inappropriate language. Please refrain from using bad words.";
            } else {
                // If no bad content is detected, proceed with sending the message to the chatbot API
                $response = $this->sendMessageToChatBot($userMessage);
            }
        }
    
        return $this->render('chat_bot/index.html.twig', [
            'controller_name' => 'ChatBotController',
            'response' => $response,
        ]);
    }

    
    private function sendMessageToChatBot(string $message): string
    {
        // Make the API request
        $client = new Client();
        $response = $client->request('POST', 'https://open-ai21.p.rapidapi.com/chatgpt', [
            'body' => '{
            "messages": [
                {
                    "role": "user",
                    "content": "' . $message . '"
                }
            ],
            "web_access": false
        }',
            'headers' => [
                'X-RapidAPI-Host' => 'open-ai21.p.rapidapi.com',
                'X-RapidAPI-Key' => 'f2c3fef997msh536d78acb857cf9p1ecec4jsn54320ab4f3a2',
                'content-type' => 'application/json',
            ],
        ]);
        
        // Decode the JSON response
        $responseData = json_decode($response->getBody(), true);
    
        
        // Extract text from the response
        $text = isset($responseData['result']) ? $responseData['result'] : '';
        
        
        // Return the extracted text
        return $text;
    }
    
        private function isBadContent($content)
    {
        $client = new Client([
            'headers' => [
                'X-RapidAPI-Host' => 'neutrinoapi-bad-word-filter.p.rapidapi.com',
                'X-RapidAPI-Key' => '8433d15735msh2702a52a05e99bdp1e7f6djsn60b6c77343ce',
                'content-type' => 'application/x-www-form-urlencoded',
            ],
        ]);

        $response = $client->request('POST', 'https://neutrinoapi-bad-word-filter.p.rapidapi.com/bad-word-filter', [
            'form_params' => [
                'content' => $content,
                'censor-character' => '*'
            ]
        ]);

        $body = json_decode($response->getBody(), true);

        // Check if the response indicates bad content
        return $body['is-bad'];
    }
    
    
}
