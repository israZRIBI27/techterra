<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_95e904ab9c244b57c151ee3b26189e32 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 35
        echo "</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\"
     class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
";
        // line 49
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "<!-- Navbar End -->





<div style=\"min-height:500px;\" class=\"container\">
<div class=\"container-fluid py-5\">
    ";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 670
        echo "</div>
</div>

<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-white-50 footer pt-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.1s\">
                <a href=\"index.html\" class=\"d-inline-block mb-3\">
                    <h1 class=\"text-white\">AI<span class=\"text-primary\">.</span>Tech</h1>
                </a>
                <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                    clita duo justo et tempor</p>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.3s\">
                <h5 class=\"text-white mb-4\">Get In Touch</h5>
                <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.5s\">
                <h5 class=\"text-white mb-4\">Popular Link</h5>
                <a class=\"btn btn-link\" href=\"\">About Us</a>
                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">Career</a>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.7s\">
                <h5 class=\"text-white mb-4\">Our Services</h5>
                <a class=\"btn btn-link\" href=\"\">Robotic Automation</a>
                <a class=\"btn btn-link\" href=\"\">Machine learning</a>
                <a class=\"btn btn-link\" href=\"\">Predictive Analysis</a>
                <a class=\"btn btn-link\" href=\"\">Data Science</a>
                <a class=\"btn btn-link\" href=\"\">Robot Technology</a>
            </div>
        </div>
    </div>
    <div class=\"container wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top pt-2\"><i class=\"bi bi-arrow-up\"></i></a>


<!-- JavaScript Libraries -->
";
        // line 745
        $this->displayBlock('js', $context, $blocks);
        // line 757
        echo "</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap\"
          rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/animate/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 50
        echo "<div style=\"background: var(--bs-gray)\" class=\"container-fluid sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
            <a href=\"index.html\" class=\"navbar-brand\">
                <h1 class=\"text-white\">AI<span class=\"text-dark\">.</span>Tech</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler ms-auto me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                    <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                    <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu bg-light mt-2\">
                            <a href=\"feature.html\" class=\"dropdown-item\">Features</a>
                            <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                            <a href=\"faq.html\" class=\"dropdown-item\">FAQs</a>
                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                        </div>
                    </div>
                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <butaton type=\"button\" class=\"btn text-white p-0 d-none d-lg-block\" data-bs-toggle=\"modal\"
                         data-bs-target=\"#searchModal\"><i class=\"fa fa-search\"></i></butaton>
            </div>
        </nav>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "        <!-- Hero Start -->
        <div class=\"container-fluid pt-5 bg-primary hero-header mb-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5 pt-5\">
                    <div class=\"col-lg-6 align-self-center text-center text-lg-start mb-lg-5\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight\">AI.Tech</div>
                        <h1 class=\"display-4 text-white mb-4 animated slideInRight\">Artificial Intelligence for Your Business</h1>
                        <p class=\"text-white mb-4 animated slideInRight\">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                            rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit</p>
                        <a href=\"\" class=\"btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight\">Read More</a>
                        <a href=\"\" class=\"btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight\">Contact Us</a>
                    </div>
                    <div class=\"col-lg-6 align-self-end text-center text-lg-end\">
                        <img class=\"img-fluid\" src=\"img/hero-img.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Full Screen Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content\" style=\"background: rgba(20, 24, 62, 0.7);\">
                    <div class=\"modal-header border-0\">
                        <button type=\"button\" class=\"btn btn-square bg-white btn-close\" data-bs-dismiss=\"modal\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center justify-content-center\">
                        <div class=\"input-group\" style=\"max-width: 600px;\">
                            <input type=\"text\" class=\"form-control bg-transparent border-light p-3\"
                                   placeholder=\"Type search keyword\">
                            <button class=\"btn btn-light px-4\"><i class=\"bi bi-search\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"about-img\">
                            <img class=\"img-fluid\" src=\"img/about-img.jpg\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">About Us</div>
                        <h1 class=\"mb-4\">We Make Your Business Smarter with Artificial Intelligence</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class=\"mb-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                            labore lorem sit. Sanctus clita duo justo et tempor.</p>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-6\">
                                <h6 class=\"mb-3\"><i class=\"fa fa-check text-primary me-2\"></i>Award Winning</h6>
                                <h6 class=\"mb-0\"><i class=\"fa fa-check text-primary me-2\"></i>Professional Staff</h6>
                            </div>
                            <div class=\"col-sm-6\">
                                <h6 class=\"mb-3\"><i class=\"fa fa-check text-primary me-2\"></i>24/7 Support</h6>
                                <h6 class=\"mb-0\"><i class=\"fa fa-check text-primary me-2\"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mt-4\">
                            <a class=\"btn btn-primary rounded-pill px-4 me-3\" href=\"\">Read More</a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class=\"container-fluid bg-light mt-5 py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Our Services</div>
                        <h1 class=\"mb-4\">Our Excellent AI Solutions for Your Business</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.1s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-robot fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Robotic Automation</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-power-off fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Machine learning</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 pt-md-4\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-graduation-cap fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Education & Science</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.7s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-brain fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Predictive Analysis</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class=\"container-fluid bg-primary feature pt-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn\" data-wow-delay=\"0.3s\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3\">Why Choose Us</div>
                        <h1 class=\"text-white mb-4\">We're Best in AI Industry with 10 Years of Experience</h1>
                        <p class=\"text-light mb-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                            stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"row g-4 pt-3\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex rounded p-3\" style=\"background: rgba(256, 256, 256, 0.1);\">
                                    <i class=\"fa fa-users fa-3x text-white\"></i>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-white mb-0\" data-toggle=\"counter-up\">9999</h2>
                                        <p class=\"text-white mb-0\">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex rounded p-3\" style=\"background: rgba(256, 256, 256, 0.1);\">
                                    <i class=\"fa fa-check fa-3x text-white\"></i>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-white mb-0\" data-toggle=\"counter-up\">9999</h2>
                                        <p class=\"text-white mb-0\">Project Complete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 align-self-end text-center text-md-end wow fadeIn\" data-wow-delay=\"0.5s\">
                        <img class=\"img-fluid\" src=\"img/feature.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Case Start -->
        <div class=\"container-fluid bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center wow fadeIn\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                    <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Case Study</div>
                    <h1 class=\"mb-4\">Explore Our Recent AI Case Studies</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-1.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Robotic Automation</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-2.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Machine learning</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.7s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-3.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Predictive Analysis</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Case End -->


        <!-- FAQs Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center wow fadeIn\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                    <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Popular FAQs</div>
                    <h1 class=\"mb-4\">Frequently Asked Questions</h1>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionFAQ1\">
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.1s\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                        How to build a website?
                                    </button>
                                </h2>
                                <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.2s\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        How long will it take to get a new website?
                                    </button>
                                </h2>
                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.3s\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                        Do you only create HTML websites?
                                    </button>
                                </h2>
                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.4s\">
                                <h2 class=\"accordion-header\" id=\"headingFour\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionFAQ2\">
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.5s\">
                                <h2 class=\"accordion-header\" id=\"headingFive\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.6s\">
                                <h2 class=\"accordion-header\" id=\"headingSix\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseSix\" aria-expanded=\"false\" aria-controls=\"collapseSix\">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id=\"collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.7s\">
                                <h2 class=\"accordion-header\" id=\"headingSeven\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseSeven\" aria-expanded=\"false\" aria-controls=\"collapseSeven\">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id=\"collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSeven\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.8s\">
                                <h2 class=\"accordion-header\" id=\"headingEight\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseEight\" aria-expanded=\"false\" aria-controls=\"collapseEight\">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id=\"collapseEight\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingEight\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs Start -->


        <!-- Team Start -->
        <div class=\"container-fluid bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Our Team</div>
                        <h1 class=\"mb-4\">Meet Our Experienced Team Members</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.1s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-1.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Boris Johnson</h5>
                                            <small>Founder & CEO</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-2.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Adam Crew</h5>
                                            <small>Executive Manager</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 pt-md-4\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-3.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Kate Winslet</h5>
                                            <small>Co Founder</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.7s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-4.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Cody Gardner</h5>
                                            <small>Project Manager</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Testimonial</div>
                        <h1 class=\"mb-4\">What Say Our Clients!</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"owl-carousel testimonial-carousel border-start border-primary\">
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-1.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-2.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-3.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
        <div class=\"container-fluid bg-primary newsletter py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn\" data-wow-delay=\"0.3s\">
                        <img class=\"img-fluid\" src=\"img/newsletter.png\" alt=\"\">
                    </div>
                    <div class=\"col-md-7 py-5 newsletter-text wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3\">Newsletter</div>
                        <h1 class=\"text-white mb-4\">Let's subscribe the newsletter</h1>
                        <div class=\"position-relative w-100 mt-3 mb-2\">
                            <input class=\"form-control border-0 rounded-pill w-100 ps-4 pe-5\" type=\"text\"
                                   placeholder=\"Enter Your Email\" style=\"height: 48px;\">
                            <button type=\"button\" class=\"btn shadow-none position-absolute top-0 end-0 mt-1 me-2\"><i
                                        class=\"fa fa-paper-plane text-primary fs-4\"></i></button>
                        </div>
                        <small class=\"text-white-50\">Diam sed sed dolor stet amet eirmod</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 745
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 746
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/wow/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/easing/easing.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/waypoints/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/counterup/counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 752
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/owlcarousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 755
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  942 => 755,  936 => 752,  932 => 751,  928 => 750,  924 => 749,  920 => 748,  916 => 746,  906 => 745,  321 => 94,  311 => 93,  267 => 50,  257 => 49,  245 => 33,  239 => 30,  233 => 27,  229 => 26,  213 => 12,  203 => 11,  185 => 7,  174 => 757,  172 => 745,  95 => 670,  93 => 93,  83 => 85,  81 => 49,  65 => 35,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>{% block title %}{% endblock %}</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">
    {% block css%}
    <!-- Favicon -->
    <link href=\"img/favicon.ico\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap\"
          rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->
    <link href=\"{{ asset('lib/animate/animate.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}\" rel=\"stylesheet\">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}
</head>

<body>
<!-- Spinner Start -->
<div id=\"spinner\"
     class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
{% block header %}
<div style=\"background: var(--bs-gray)\" class=\"container-fluid sticky-top\">
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-dark p-0\">
            <a href=\"index.html\" class=\"navbar-brand\">
                <h1 class=\"text-white\">AI<span class=\"text-dark\">.</span>Tech</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler ms-auto me-0\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"navbar-nav ms-auto\">
                    <a href=\"index.html\" class=\"nav-item nav-link active\">Home</a>
                    <a href=\"about.html\" class=\"nav-item nav-link\">About</a>
                    <a href=\"service.html\" class=\"nav-item nav-link\">Services</a>
                    <a href=\"project.html\" class=\"nav-item nav-link\">Projects</a>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Pages</a>
                        <div class=\"dropdown-menu bg-light mt-2\">
                            <a href=\"feature.html\" class=\"dropdown-item\">Features</a>
                            <a href=\"team.html\" class=\"dropdown-item\">Our Team</a>
                            <a href=\"faq.html\" class=\"dropdown-item\">FAQs</a>
                            <a href=\"testimonial.html\" class=\"dropdown-item\">Testimonial</a>
                            <a href=\"404.html\" class=\"dropdown-item\">404 Page</a>
                        </div>
                    </div>
                    <a href=\"contact.html\" class=\"nav-item nav-link\">Contact</a>
                </div>
                <butaton type=\"button\" class=\"btn text-white p-0 d-none d-lg-block\" data-bs-toggle=\"modal\"
                         data-bs-target=\"#searchModal\"><i class=\"fa fa-search\"></i></butaton>
            </div>
        </nav>
    </div>
</div>
{% endblock %}
<!-- Navbar End -->





<div style=\"min-height:500px;\" class=\"container\">
<div class=\"container-fluid py-5\">
    {% block body %}
        <!-- Hero Start -->
        <div class=\"container-fluid pt-5 bg-primary hero-header mb-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5 pt-5\">
                    <div class=\"col-lg-6 align-self-center text-center text-lg-start mb-lg-5\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight\">AI.Tech</div>
                        <h1 class=\"display-4 text-white mb-4 animated slideInRight\">Artificial Intelligence for Your Business</h1>
                        <p class=\"text-white mb-4 animated slideInRight\">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                            rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit</p>
                        <a href=\"\" class=\"btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight\">Read More</a>
                        <a href=\"\" class=\"btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight\">Contact Us</a>
                    </div>
                    <div class=\"col-lg-6 align-self-end text-center text-lg-end\">
                        <img class=\"img-fluid\" src=\"img/hero-img.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Full Screen Search Start -->
        <div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\">
            <div class=\"modal-dialog modal-fullscreen\">
                <div class=\"modal-content\" style=\"background: rgba(20, 24, 62, 0.7);\">
                    <div class=\"modal-header border-0\">
                        <button type=\"button\" class=\"btn btn-square bg-white btn-close\" data-bs-dismiss=\"modal\"
                                aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body d-flex align-items-center justify-content-center\">
                        <div class=\"input-group\" style=\"max-width: 600px;\">
                            <input type=\"text\" class=\"form-control bg-transparent border-light p-3\"
                                   placeholder=\"Type search keyword\">
                            <button class=\"btn btn-light px-4\"><i class=\"bi bi-search\"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"about-img\">
                            <img class=\"img-fluid\" src=\"img/about-img.jpg\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">About Us</div>
                        <h1 class=\"mb-4\">We Make Your Business Smarter with Artificial Intelligence</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <p class=\"mb-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                            labore lorem sit. Sanctus clita duo justo et tempor.</p>
                        <div class=\"row g-3\">
                            <div class=\"col-sm-6\">
                                <h6 class=\"mb-3\"><i class=\"fa fa-check text-primary me-2\"></i>Award Winning</h6>
                                <h6 class=\"mb-0\"><i class=\"fa fa-check text-primary me-2\"></i>Professional Staff</h6>
                            </div>
                            <div class=\"col-sm-6\">
                                <h6 class=\"mb-3\"><i class=\"fa fa-check text-primary me-2\"></i>24/7 Support</h6>
                                <h6 class=\"mb-0\"><i class=\"fa fa-check text-primary me-2\"></i>Fair Prices</h6>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mt-4\">
                            <a class=\"btn btn-primary rounded-pill px-4 me-3\" href=\"\">Read More</a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square me-3\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                            <a class=\"btn btn-outline-primary btn-square\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class=\"container-fluid bg-light mt-5 py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Our Services</div>
                        <h1 class=\"mb-4\">Our Excellent AI Solutions for Your Business</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.1s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-robot fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Robotic Automation</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-power-off fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Machine learning</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 pt-md-4\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-graduation-cap fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Education & Science</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.7s\">
                                        <div class=\"service-item d-flex flex-column justify-content-center text-center rounded\">
                                            <div class=\"service-icon btn-square\">
                                                <i class=\"fa fa-brain fa-2x\"></i>
                                            </div>
                                            <h5 class=\"mb-3\">Predictive Analysis</h5>
                                            <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                                diam sed stet lorem.</p>
                                            <a class=\"btn px-3 mt-auto mx-auto\" href=\"\">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Feature Start -->
        <div class=\"container-fluid bg-primary feature pt-5\">
            <div class=\"container pt-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn\" data-wow-delay=\"0.3s\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3\">Why Choose Us</div>
                        <h1 class=\"text-white mb-4\">We're Best in AI Industry with 10 Years of Experience</h1>
                        <p class=\"text-light mb-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                            stet no labore lorem sit. Sanctus clita duo justo et tempor</p>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"d-flex align-items-center text-white mb-3\">
                            <div class=\"btn-sm-square bg-white text-primary rounded-circle me-3\">
                                <i class=\"fa fa-check\"></i>
                            </div>
                            <span>Diam dolor diam ipsum et tempor sit</span>
                        </div>
                        <div class=\"row g-4 pt-3\">
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex rounded p-3\" style=\"background: rgba(256, 256, 256, 0.1);\">
                                    <i class=\"fa fa-users fa-3x text-white\"></i>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-white mb-0\" data-toggle=\"counter-up\">9999</h2>
                                        <p class=\"text-white mb-0\">Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"d-flex rounded p-3\" style=\"background: rgba(256, 256, 256, 0.1);\">
                                    <i class=\"fa fa-check fa-3x text-white\"></i>
                                    <div class=\"ms-3\">
                                        <h2 class=\"text-white mb-0\" data-toggle=\"counter-up\">9999</h2>
                                        <p class=\"text-white mb-0\">Project Complete</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 align-self-end text-center text-md-end wow fadeIn\" data-wow-delay=\"0.5s\">
                        <img class=\"img-fluid\" src=\"img/feature.png\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Case Start -->
        <div class=\"container-fluid bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center wow fadeIn\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                    <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Case Study</div>
                    <h1 class=\"mb-4\">Explore Our Recent AI Case Studies</h1>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.3s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-1.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Robotic Automation</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-2.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Machine learning</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 wow fadeIn\" data-wow-delay=\"0.7s\">
                        <div class=\"case-item position-relative overflow-hidden rounded mb-2\">
                            <img class=\"img-fluid\" src=\"img/project-3.jpg\" alt=\"\">
                            <a class=\"case-overlay text-decoration-none\" href=\"\">
                                <small>Predictive Analysis</small>
                                <h5 class=\"lh-base text-white mb-3\">Lorem elitr magna stet eirmod labore amet labore clita
                                </h5>
                                <span class=\"btn btn-square btn-primary\"><i class=\"fa fa-arrow-right\"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Case End -->


        <!-- FAQs Start -->
        <div class=\"container-fluid py-5\">
            <div class=\"container py-5\">
                <div class=\"mx-auto text-center wow fadeIn\" data-wow-delay=\"0.1s\" style=\"max-width: 500px;\">
                    <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Popular FAQs</div>
                    <h1 class=\"mb-4\">Frequently Asked Questions</h1>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionFAQ1\">
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.1s\">
                                <h2 class=\"accordion-header\" id=\"headingOne\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
                                        How to build a website?
                                    </button>
                                </h2>
                                <div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.2s\">
                                <h2 class=\"accordion-header\" id=\"headingTwo\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        How long will it take to get a new website?
                                    </button>
                                </h2>
                                <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.3s\">
                                <h2 class=\"accordion-header\" id=\"headingThree\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                        Do you only create HTML websites?
                                    </button>
                                </h2>
                                <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.4s\">
                                <h2 class=\"accordion-header\" id=\"headingFour\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseFour\" aria-expanded=\"true\" aria-controls=\"collapseFour\">
                                        Will my website be mobile-friendly?
                                    </button>
                                </h2>
                                <div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\"
                                     data-bs-parent=\"#accordionFAQ1\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"accordion\" id=\"accordionFAQ2\">
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.5s\">
                                <h2 class=\"accordion-header\" id=\"headingFive\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.6s\">
                                <h2 class=\"accordion-header\" id=\"headingSix\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseSix\" aria-expanded=\"false\" aria-controls=\"collapseSix\">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id=\"collapseSix\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.7s\">
                                <h2 class=\"accordion-header\" id=\"headingSeven\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseSeven\" aria-expanded=\"false\" aria-controls=\"collapseSeven\">
                                        Will you maintain my site for me?
                                    </button>
                                </h2>
                                <div id=\"collapseSeven\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSeven\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                            <div class=\"accordion-item wow fadeIn\" data-wow-delay=\"0.8s\">
                                <h2 class=\"accordion-header\" id=\"headingEight\">
                                    <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                            data-bs-target=\"#collapseEight\" aria-expanded=\"false\" aria-controls=\"collapseEight\">
                                        I’m on a strict budget. Do you have any low cost options?
                                    </button>
                                </h2>
                                <div id=\"collapseEight\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingEight\"
                                     data-bs-parent=\"#accordionFAQ2\">
                                    <div class=\"accordion-body\">
                                        Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs Start -->


        <!-- Team Start -->
        <div class=\"container-fluid bg-light py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Our Team</div>
                        <h1 class=\"mb-4\">Meet Our Experienced Team Members</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"row g-4\">
                            <div class=\"col-md-6\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.1s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-1.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Boris Johnson</h5>
                                            <small>Founder & CEO</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.5s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-2.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Adam Crew</h5>
                                            <small>Executive Manager</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 pt-md-4\">
                                <div class=\"row g-4\">
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.3s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-3.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Kate Winslet</h5>
                                            <small>Co Founder</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-12 wow fadeIn\" data-wow-delay=\"0.7s\">
                                        <div class=\"team-item bg-white text-center rounded p-4 pt-0\">
                                            <img class=\"img-fluid rounded-circle p-4\" src=\"img/team-4.jpg\" alt=\"\">
                                            <h5 class=\"mb-0\">Cody Gardner</h5>
                                            <small>Project Manager</small>
                                            <div class=\"d-flex justify-content-center mt-3\">
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-facebook-f\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-twitter\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-instagram\"></i></a>
                                                <a class=\"btn btn-square btn-primary m-1\" href=\"\"><i
                                                            class=\"fab fa-linkedin-in\"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class=\"container-xxl py-5\">
            <div class=\"container py-5\">
                <div class=\"row g-5\">
                    <div class=\"col-lg-5 wow fadeIn\" data-wow-delay=\"0.1s\">
                        <div class=\"btn btn-sm border rounded-pill text-primary px-3 mb-3\">Testimonial</div>
                        <h1 class=\"mb-4\">What Say Our Clients!</h1>
                        <p class=\"mb-4\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                            amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                            clita duo justo et tempor eirmod magna dolore erat amet</p>
                        <a class=\"btn btn-primary rounded-pill px-4\" href=\"\">Read More</a>
                    </div>
                    <div class=\"col-lg-7 wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"owl-carousel testimonial-carousel border-start border-primary\">
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-1.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-2.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"testimonial-item ps-5\">
                                <i class=\"fa fa-quote-left fa-2x text-primary mb-3\"></i>
                                <p class=\"fs-4\">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                                <div class=\"d-flex align-items-center\">
                                    <img class=\"img-fluid flex-shrink-0 rounded-circle\" src=\"img/testimonial-3.jpg\"
                                         style=\"width: 60px; height: 60px;\">
                                    <div class=\"ps-3\">
                                        <h5 class=\"mb-1\">Client Name</h5>
                                        <span>Profession</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Newsletter Start -->
        <div class=\"container-fluid bg-primary newsletter py-5\">
            <div class=\"container\">
                <div class=\"row g-5 align-items-center\">
                    <div class=\"col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn\" data-wow-delay=\"0.3s\">
                        <img class=\"img-fluid\" src=\"img/newsletter.png\" alt=\"\">
                    </div>
                    <div class=\"col-md-7 py-5 newsletter-text wow fadeIn\" data-wow-delay=\"0.5s\">
                        <div class=\"btn btn-sm border rounded-pill text-white px-3 mb-3\">Newsletter</div>
                        <h1 class=\"text-white mb-4\">Let's subscribe the newsletter</h1>
                        <div class=\"position-relative w-100 mt-3 mb-2\">
                            <input class=\"form-control border-0 rounded-pill w-100 ps-4 pe-5\" type=\"text\"
                                   placeholder=\"Enter Your Email\" style=\"height: 48px;\">
                            <button type=\"button\" class=\"btn shadow-none position-absolute top-0 end-0 mt-1 me-2\"><i
                                        class=\"fa fa-paper-plane text-primary fs-4\"></i></button>
                        </div>
                        <small class=\"text-white-50\">Diam sed sed dolor stet amet eirmod</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


    {% endblock %}
</div>
</div>

<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-white-50 footer pt-5\">
    <div class=\"container py-5\">
        <div class=\"row g-5\">
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.1s\">
                <a href=\"index.html\" class=\"d-inline-block mb-3\">
                    <h1 class=\"text-white\">AI<span class=\"text-primary\">.</span>Tech</h1>
                </a>
                <p class=\"mb-0\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                    clita duo justo et tempor</p>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.3s\">
                <h5 class=\"text-white mb-4\">Get In Touch</h5>
                <p><i class=\"fa fa-map-marker-alt me-3\"></i>123 Street, New York, USA</p>
                <p><i class=\"fa fa-phone-alt me-3\"></i>+012 345 67890</p>
                <p><i class=\"fa fa-envelope me-3\"></i>info@example.com</p>
                <div class=\"d-flex pt-2\">
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-instagram\"></i></a>
                    <a class=\"btn btn-outline-light btn-social\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.5s\">
                <h5 class=\"text-white mb-4\">Popular Link</h5>
                <a class=\"btn btn-link\" href=\"\">About Us</a>
                <a class=\"btn btn-link\" href=\"\">Contact Us</a>
                <a class=\"btn btn-link\" href=\"\">Privacy Policy</a>
                <a class=\"btn btn-link\" href=\"\">Terms & Condition</a>
                <a class=\"btn btn-link\" href=\"\">Career</a>
            </div>
            <div class=\"col-md-6 col-lg-3 wow fadeIn\" data-wow-delay=\"0.7s\">
                <h5 class=\"text-white mb-4\">Our Services</h5>
                <a class=\"btn btn-link\" href=\"\">Robotic Automation</a>
                <a class=\"btn btn-link\" href=\"\">Machine learning</a>
                <a class=\"btn btn-link\" href=\"\">Predictive Analysis</a>
                <a class=\"btn btn-link\" href=\"\">Data Science</a>
                <a class=\"btn btn-link\" href=\"\">Robot Technology</a>
            </div>
        </div>
    </div>
    <div class=\"container wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"copyright\">
            <div class=\"row\">
                <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                    &copy; <a class=\"border-bottom\" href=\"#\">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
                    Designed By <a class=\"border-bottom\" href=\"https://htmlcodex.com\">HTML Codex</a> Distributed By <a class=\"border-bottom\" href=\"https://themewagon.com\">ThemeWagon</a>
                </div>
                <div class=\"col-md-6 text-center text-md-end\">
                    <div class=\"footer-menu\">
                        <a href=\"\">Home</a>
                        <a href=\"\">Cookies</a>
                        <a href=\"\">Help</a>
                        <a href=\"\">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top pt-2\"><i class=\"bi bi-arrow-up\"></i></a>


<!-- JavaScript Libraries -->
{% block js %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('lib/wow/wow.min.js') }}\"></script>
<script src=\"{{ asset('lib/easing/easing.min.js') }}\"></script>
<script src=\"{{ asset('lib/waypoints/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('lib/counterup/counterup.min.js') }}\"></script>
<script src=\"{{ asset('lib/owlcarousel/owl.carousel.min.js') }}\"></script>

<!-- Template Javascript -->
<script src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\Med\\Downloads\\techterra-Gestion-Evenement\\techterra-Gestion-Evenement\\templates\\base.html.twig");
    }
}
