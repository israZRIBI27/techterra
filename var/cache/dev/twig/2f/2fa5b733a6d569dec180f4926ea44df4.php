<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* backendbase.html.twig */
class __TwigTemplate_401d1264a5410f1821c59bfc1169bb9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backendbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backendbase.html.twig"));

        // line 1
        yield "
<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 10
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./images/favicon.png\">

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 20
        yield "
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"sk-three-bounce\">
        <div class=\"sk-child sk-bounce1\"></div>
        <div class=\"sk-child sk-bounce2\"></div>
        <div class=\"sk-child sk-bounce3\"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"";
        // line 50
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"\">
            <img class=\"logo-compact\" src=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"\">
            <img class=\"brand-title\" src=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        yield "\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-css\"></div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-user\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-image\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                </ul>
                                <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"./page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->
    ";
        // line 173
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 301
        yield "
    <!--**********************************
        Content body start
    ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            ";
        // line 307
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 912
        yield "
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by <a href=\"#\" target=\"_blank\">Quixkit</a> 2019</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

";
        // line 950
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 969
        yield "
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        yield "        <link href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/pg-calendar/css/pignose.calendar.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chartist/css/chartist.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styleback.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 173
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 174
        yield "
    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Main Menu</li>
                <!-- <li><a href=\"index.html\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                </li> -->
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./index.html\">Dashboard 1</a></li>
                        <li><a href=\"./index2.html\">Dashboard 2</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Apps</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./app-profile.html\">Profile</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Email</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"./email-compose.html\">Compose</a></li>
                                <li><a href=\"./email-inbox.html\">Inbox</a></li>
                                <li><a href=\"./email-read.html\">Read</a></li>
                            </ul>
                        </li>
                        <li><a href=\"./app-calender.html\">Calendar</a></li>
                    </ul>
                </li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-chart-bar-33\"></i><span class=\"nav-text\">Charts</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./chart-flot.html\">Flot</a></li>
                        <li><a href=\"./chart-morris.html\">Morris</a></li>
                        <li><a href=\"./chart-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"./chart-chartist.html\">Chartist</a></li>
                        <li><a href=\"./chart-sparkline.html\">Sparkline</a></li>
                        <li><a href=\"./chart-peity.html\">Peity</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Components</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./ui-accordion.html\">Accordion</a></li>
                        <li><a href=\"./ui-alert.html\">Alert</a></li>
                        <li><a href=\"./ui-badge.html\">Badge</a></li>
                        <li><a href=\"./ui-button.html\">Button</a></li>
                        <li><a href=\"./ui-modal.html\">Modal</a></li>
                        <li><a href=\"./ui-button-group.html\">Button Group</a></li>
                        <li><a href=\"./ui-list-group.html\">List Group</a></li>
                        <li><a href=\"./ui-media-object mr-3.html\">Media Object</a></li>
                        <li><a href=\"./ui-card.html\">Cards</a></li>
                        <li><a href=\"./ui-carousel.html\">Carousel</a></li>
                        <li><a href=\"./ui-dropdown.html\">Dropdown</a></li>
                        <li><a href=\"./ui-popover.html\">Popover</a></li>
                        <li><a href=\"./ui-progressbar.html\">Progressbar</a></li>
                        <li><a href=\"./ui-tab.html\">Tab</a></li>
                        <li><a href=\"./ui-typography.html\">Typography</a></li>
                        <li><a href=\"./ui-pagination.html\">Pagination</a></li>
                        <li><a href=\"./ui-grid.html\">Grid</a></li>

                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./uc-select2.html\">Select 2</a></li>
                        <li><a href=\"./uc-nestable.html\">Nestedable</a></li>
                        <li><a href=\"./uc-noui-slider.html\">Noui Slider</a></li>
                        <li><a href=\"./uc-sweetalert.html\">Sweet Alert</a></li>
                        <li><a href=\"./uc-toastr.html\">Toastr</a></li>
                        <li><a href=\"./map-jqvmap.html\">Jqv Map</a></li>
                    </ul>
                </li>
                <li><a href=\"widget-basic.html\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                <li class=\"nav-label\">Forms</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./form-element.html\">Form Elements</a></li>
                        <li><a href=\"./form-wizard.html\">Wizard</a></li>
                        <li><a href=\"./form-editor-summernote.html\">Summernote</a></li>
                        <li><a href=\"form-pickers.html\">Pickers</a></li>
                        <li><a href=\"form-validation-jquery.html\">Jquery Validate</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Table</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"table-bootstrap-basic.html\">Bootstrap</a></li>
                        <li><a href=\"table-datatable-basic.html\">Datatable</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Extra</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./page-register.html\">Register</a></li>
                        <li><a href=\"./page-login.html\">Login</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Error</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"./page-error-400.html\">Error 400</a></li>
                                <li><a href=\"./page-error-403.html\">Error 403</a></li>
                                <li><a href=\"./page-error-404.html\">Error 404</a></li>
                                <li><a href=\"./page-error-500.html\">Error 500</a></li>
                                <li><a href=\"./page-error-503.html\">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href=\"./page-lock-screen.html\">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 307
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 308
        yield "
            <div class=\"row page-titles mx-0\">
                <div class=\"col-sm-6 p-md-0\">
                    <div class=\"welcome-text\">
                        <h4>Hi, welcome back!</h4>
                        <p class=\"mb-0\">Your business dashboard template</p>
                    </div>
                </div>
                <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Layout</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Blank</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-money text-success border-success\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-user text-primary border-primary\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-layout-grid2 text-pink border-pink\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-link text-danger border-danger\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Referral</div>
                                <div class=\"stat-digit\">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Fee Collections and Expenses</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"ct-bar-chart mt-5\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"ct-pie-chart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">All Exam Result</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table student-data-table m-t-20\">
                                    <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Grade Point</th>
                                        <th>Percent Form</th>
                                        <th>Percent Upto</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Bangla</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Timeline</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"widget-timeline\">
                                <ul class=\"timeline\">
                                    <li>
                                        <div class=\"timeline-badge primary\"></div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>10 minutes ago</span>
                                            <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge warning\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge danger\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>30 minutes ago</span>
                                            <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge success\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>15 minutes ago</span>
                                            <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge warning\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge dark\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge info\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>30 minutes ago</span>
                                            <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-xxl-6 col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Notice Board</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"recent-comment m-t-15\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/4.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-primary\">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">10 min ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/2.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-success\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">1 hour ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/3.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-danger\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <div class=\"comment-date\">Yesterday</div>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/4.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-primary\">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">10 min ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/2.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-success\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">1 hour ago</p>
                                    </div>
                                </div>
                                <div class=\"media no-border\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/3.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-info\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <div class=\"comment-date\">Yesterday</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Todo</h4>
                        </div>
                        <div class=\"card-body px-0\">
                            <div class=\"todo-list\">
                                <div class=\"tdl-holder\">
                                    <div class=\"tdl-content widget-todo2 mr-4\">
                                        <ul id=\"todo_list\">
                                            <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#'
                                                                                                           class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        </ul>
                                    </div>
                                    <div class=\"px-4\">
                                        <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-facebook\">
                                    <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-linkedin\">
                                    <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-googleplus\">
                                    <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-twitter\">
                                    <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"year-calendar\"></div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">All Expense</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table student-data-table m-t-20\">
                                    <thead>
                                    <tr>
                                        <th>Expense Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-warning\">Pending</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-danger\">Due</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 950
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 951
        yield "
    <!-- Required vendors -->

    <script src=\"";
        // line 954
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/global/global.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 955
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quixnav-init.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 956
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 958
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/chartist/js/chartist.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 960
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/moment/moment.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 961
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/pg-calendar/js/pignose.calendar.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 963
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/dashboard/dashboard-2.js"), "html", null, true);
        yield "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js\" integrity=\"sha512-1M9vud0lqoXACA9QaA8IY8k1VR2dMJ2Qmqzt9pN2AH7eQHWpNsxBpaayV0kKkUsF7FLVQ2sA2SSc8w5VOm7/mg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>


    <!-- Circle progress -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "backendbase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1166 => 963,  1161 => 961,  1157 => 960,  1152 => 958,  1147 => 956,  1143 => 955,  1139 => 954,  1134 => 951,  1124 => 950,  510 => 308,  500 => 307,  363 => 174,  353 => 173,  339 => 17,  335 => 16,  330 => 15,  320 => 14,  301 => 10,  287 => 969,  285 => 950,  245 => 912,  243 => 307,  235 => 301,  233 => 173,  109 => 52,  105 => 51,  101 => 50,  69 => 20,  67 => 14,  60 => 10,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>

<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}{% endblock %}</title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"./images/favicon.png\">

    {% block css %}
        <link href=\"{{ asset('vendor/pg-calendar/css/pignose.calendar.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendor/chartist/css/chartist.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/styleback.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css\" integrity=\"sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
    {% endblock %}

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id=\"preloader\">
    <div class=\"sk-three-bounce\">
        <div class=\"sk-child sk-bounce1\"></div>
        <div class=\"sk-child sk-bounce2\"></div>
        <div class=\"sk-child sk-bounce3\"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id=\"main-wrapper\">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class=\"nav-header\">
        <a href=\"index.html\" class=\"brand-logo\">
            <img class=\"logo-abbr\" src=\"{{ asset('logo.png') }}\" alt=\"\">
            <img class=\"logo-compact\" src=\"{{ asset('logo.png') }}\" alt=\"\">
            <img class=\"brand-title\" src=\"{{ asset('logo.png') }}\" alt=\"\">
        </a>

        <div class=\"nav-control\">
            <div class=\"hamburger\">
                <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class=\"header\">
        <div class=\"header-content\">
            <nav class=\"navbar navbar-expand\">
                <div class=\"collapse navbar-collapse justify-content-between\">
                    <div class=\"header-left\">
                        <div class=\"search_bar dropdown\">
                                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-magnify\"></i>
                                </span>
                            <div class=\"dropdown-menu p-0 m-0\">
                                <form>
                                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class=\"navbar-nav header-right\">
                        <li class=\"nav-item dropdown notification_dropdown\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-bell\"></i>
                                <div class=\"pulse-css\"></div>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <ul class=\"list-unstyled\">
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-user\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                    <li class=\"media dropdown-item\">
                                        <span class=\"success\"><i class=\"ti-image\"></i></span>
                                        <div class=\"media-body\">
                                            <a href=\"#\">
                                                <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                </p>
                                            </a>
                                        </div>
                                        <span class=\"notify-time\">3:20 am</span>
                                    </li>
                                </ul>
                                <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                            </div>
                        </li>
                        <li class=\"nav-item dropdown header-profile\">
                            <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                <i class=\"mdi mdi-account\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                    <i class=\"icon-user\"></i>
                                    <span class=\"ml-2\">Profile </span>
                                </a>
                                <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                    <i class=\"icon-envelope-open\"></i>
                                    <span class=\"ml-2\">Inbox </span>
                                </a>
                                <a href=\"./page-login.html\" class=\"dropdown-item\">
                                    <i class=\"icon-key\"></i>
                                    <span class=\"ml-2\">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->
    {% block header %}

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class=\"quixnav\">
        <div class=\"quixnav-scroll\">
            <ul class=\"metismenu\" id=\"menu\">
                <li class=\"nav-label first\">Main Menu</li>
                <!-- <li><a href=\"index.html\"><i class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                </li> -->
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./index.html\">Dashboard 1</a></li>
                        <li><a href=\"./index2.html\">Dashboard 2</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Apps</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-app-store\"></i><span class=\"nav-text\">Apps</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./app-profile.html\">Profile</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Email</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"./email-compose.html\">Compose</a></li>
                                <li><a href=\"./email-inbox.html\">Inbox</a></li>
                                <li><a href=\"./email-read.html\">Read</a></li>
                            </ul>
                        </li>
                        <li><a href=\"./app-calender.html\">Calendar</a></li>
                    </ul>
                </li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-chart-bar-33\"></i><span class=\"nav-text\">Charts</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./chart-flot.html\">Flot</a></li>
                        <li><a href=\"./chart-morris.html\">Morris</a></li>
                        <li><a href=\"./chart-chartjs.html\">Chartjs</a></li>
                        <li><a href=\"./chart-chartist.html\">Chartist</a></li>
                        <li><a href=\"./chart-sparkline.html\">Sparkline</a></li>
                        <li><a href=\"./chart-peity.html\">Peity</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Components</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-world-2\"></i><span class=\"nav-text\">Bootstrap</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./ui-accordion.html\">Accordion</a></li>
                        <li><a href=\"./ui-alert.html\">Alert</a></li>
                        <li><a href=\"./ui-badge.html\">Badge</a></li>
                        <li><a href=\"./ui-button.html\">Button</a></li>
                        <li><a href=\"./ui-modal.html\">Modal</a></li>
                        <li><a href=\"./ui-button-group.html\">Button Group</a></li>
                        <li><a href=\"./ui-list-group.html\">List Group</a></li>
                        <li><a href=\"./ui-media-object mr-3.html\">Media Object</a></li>
                        <li><a href=\"./ui-card.html\">Cards</a></li>
                        <li><a href=\"./ui-carousel.html\">Carousel</a></li>
                        <li><a href=\"./ui-dropdown.html\">Dropdown</a></li>
                        <li><a href=\"./ui-popover.html\">Popover</a></li>
                        <li><a href=\"./ui-progressbar.html\">Progressbar</a></li>
                        <li><a href=\"./ui-tab.html\">Tab</a></li>
                        <li><a href=\"./ui-typography.html\">Typography</a></li>
                        <li><a href=\"./ui-pagination.html\">Pagination</a></li>
                        <li><a href=\"./ui-grid.html\">Grid</a></li>

                    </ul>
                </li>

                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-plug\"></i><span class=\"nav-text\">Plugins</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./uc-select2.html\">Select 2</a></li>
                        <li><a href=\"./uc-nestable.html\">Nestedable</a></li>
                        <li><a href=\"./uc-noui-slider.html\">Noui Slider</a></li>
                        <li><a href=\"./uc-sweetalert.html\">Sweet Alert</a></li>
                        <li><a href=\"./uc-toastr.html\">Toastr</a></li>
                        <li><a href=\"./map-jqvmap.html\">Jqv Map</a></li>
                    </ul>
                </li>
                <li><a href=\"widget-basic.html\" aria-expanded=\"false\"><i class=\"icon icon-globe-2\"></i><span
                                class=\"nav-text\">Widget</span></a></li>
                <li class=\"nav-label\">Forms</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-form\"></i><span class=\"nav-text\">Forms</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./form-element.html\">Form Elements</a></li>
                        <li><a href=\"./form-wizard.html\">Wizard</a></li>
                        <li><a href=\"./form-editor-summernote.html\">Summernote</a></li>
                        <li><a href=\"form-pickers.html\">Pickers</a></li>
                        <li><a href=\"form-validation-jquery.html\">Jquery Validate</a></li>
                    </ul>
                </li>
                <li class=\"nav-label\">Table</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-layout-25\"></i><span class=\"nav-text\">Table</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"table-bootstrap-basic.html\">Bootstrap</a></li>
                        <li><a href=\"table-datatable-basic.html\">Datatable</a></li>
                    </ul>
                </li>

                <li class=\"nav-label\">Extra</li>
                <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-copy-06\"></i><span class=\"nav-text\">Pages</span></a>
                    <ul aria-expanded=\"false\">
                        <li><a href=\"./page-register.html\">Register</a></li>
                        <li><a href=\"./page-login.html\">Login</a></li>
                        <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">Error</a>
                            <ul aria-expanded=\"false\">
                                <li><a href=\"./page-error-400.html\">Error 400</a></li>
                                <li><a href=\"./page-error-403.html\">Error 403</a></li>
                                <li><a href=\"./page-error-404.html\">Error 404</a></li>
                                <li><a href=\"./page-error-500.html\">Error 500</a></li>
                                <li><a href=\"./page-error-503.html\">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href=\"./page-lock-screen.html\">Lock Screen</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->
    {% endblock %}

    <!--**********************************
        Content body start
    ***********************************-->
    <div class=\"content-body\">
        <div class=\"container-fluid\">
            {% block body %}

            <div class=\"row page-titles mx-0\">
                <div class=\"col-sm-6 p-md-0\">
                    <div class=\"welcome-text\">
                        <h4>Hi, welcome back!</h4>
                        <p class=\"mb-0\">Your business dashboard template</p>
                    </div>
                </div>
                <div class=\"col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"javascript:void(0)\">Layout</a></li>
                        <li class=\"breadcrumb-item active\"><a href=\"javascript:void(0)\">Blank</a></li>
                    </ol>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-money text-success border-success\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Profit</div>
                                <div class=\"stat-digit\">1,012</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-user text-primary border-primary\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Customer</div>
                                <div class=\"stat-digit\">961</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-layout-grid2 text-pink border-pink\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Projects</div>
                                <div class=\"stat-digit\">770</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"card\">
                        <div class=\"stat-widget-one card-body\">
                            <div class=\"stat-icon d-inline-block\">
                                <i class=\"ti-link text-danger border-danger\"></i>
                            </div>
                            <div class=\"stat-content d-inline-block\">
                                <div class=\"stat-text\">Referral</div>
                                <div class=\"stat-digit\">2,781</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Fee Collections and Expenses</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"ct-bar-chart mt-5\"></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"ct-pie-chart\"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">All Exam Result</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table student-data-table m-t-20\">
                                    <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Grade Point</th>
                                        <th>Percent Form</th>
                                        <th>Percent Upto</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Bangla</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>English</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6 col-xl-4 col-xxl-6 col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Timeline</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"widget-timeline\">
                                <ul class=\"timeline\">
                                    <li>
                                        <div class=\"timeline-badge primary\"></div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>10 minutes ago</span>
                                            <h6 class=\"m-t-5\">Youtube, a video-sharing website, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge warning\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge danger\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>30 minutes ago</span>
                                            <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge success\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>15 minutes ago</span>
                                            <h6 class=\"m-t-5\">StumbleUpon is acquired by eBay. </h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge warning\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge dark\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>20 minutes ago</span>
                                            <h6 class=\"m-t-5\">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>

                                    <li>
                                        <div class=\"timeline-badge info\">
                                        </div>
                                        <a class=\"timeline-panel text-muted\" href=\"#\">
                                            <span>30 minutes ago</span>
                                            <h6 class=\"m-t-5\">Google acquires Youtube.</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-lg-6 col-xxl-6 col-md-6\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Notice Board</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"recent-comment m-t-15\">
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/4.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-primary\">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">10 min ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/2.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-success\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">1 hour ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/3.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-danger\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <div class=\"comment-date\">Yesterday</div>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/4.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-primary\">john doe</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">10 min ago</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/2.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-success\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <p class=\"comment-date\">1 hour ago</p>
                                    </div>
                                </div>
                                <div class=\"media no-border\">
                                    <div class=\"media-left\">
                                        <a href=\"#\"><img class=\"media-object mr-3\" src=\"./images/avatar/3.png\" alt=\"...\"></a>
                                    </div>
                                    <div class=\"media-body\">
                                        <h4 class=\"media-heading text-info\">Mr. John</h4>
                                        <p>Cras sit amet nibh libero, in gravida nulla.</p>
                                        <div class=\"comment-date\">Yesterday</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4 col-xxl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">Todo</h4>
                        </div>
                        <div class=\"card-body px-0\">
                            <div class=\"todo-list\">
                                <div class=\"tdl-holder\">
                                    <div class=\"tdl-content widget-todo2 mr-4\">
                                        <ul id=\"todo_list\">
                                            <li><label><input type=\"checkbox\"><i></i><span>Get up</span><a href='#'
                                                                                                           class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Do something
                                                            else</span><a href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\" checked><i></i><span>Stand up</span><a
                                                            href='#' class=\"ti-trash\"></a></label></li>
                                            <li><label><input type=\"checkbox\"><i></i><span>Don't give up the
                                                            fight.</span><a href='#' class=\"ti-trash\"></a></label></li>
                                        </ul>
                                    </div>
                                    <div class=\"px-4\">
                                        <input type=\"text\" class=\"tdl-new form-control\" placeholder=\"Write new item and hit 'Enter'...\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-xl-12 col-xxl-6 col-lg-6 col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-facebook\">
                                    <span class=\"s-icon\"><i class=\"fa fa-facebook\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-linkedin\">
                                    <span class=\"s-icon\"><i class=\"fa fa-linkedin\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-googleplus\">
                                    <span class=\"s-icon\"><i class=\"fa fa-google-plus\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-6 col-sm-6 col-xxl-6 col-md-6\">
                            <div class=\"card\">
                                <div class=\"social-graph-wrapper widget-twitter\">
                                    <span class=\"s-icon\"><i class=\"fa fa-twitter\"></i></span>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-6 border-right\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">89</span> k</h4>
                                            <p class=\"m-0\">Friends</p>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"pt-3 pb-3 pl-0 pr-0 text-center\">
                                            <h4 class=\"m-1\"><span class=\"counter\">119</span> k</h4>
                                            <p class=\"m-0\">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"year-calendar\"></div>
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"card\">
                        <div class=\"card-header\">
                            <h4 class=\"card-title\">All Expense</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive\">
                                <table class=\"table student-data-table m-t-20\">
                                    <thead>
                                    <tr>
                                        <th>Expense Type</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-warning\">Pending</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-danger\">Due</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>
                                            Salary
                                        </td>
                                        <td>
                                            \$2000
                                        </td>
                                        <td>
                                            <span class=\"badge badge-primary\">Paid</span>
                                        </td>
                                        <td>
                                            edumin@gmail.com
                                        </td>
                                        <td>
                                            10/05/2017
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}

        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class=\"footer\">
        <div class=\"copyright\">
            <p>Copyright © Designed &amp; Developed by <a href=\"#\" target=\"_blank\">Quixkit</a> 2019</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

{% block js %}

    <!-- Required vendors -->

    <script src=\"{{ asset('vendor/global/global.min.js') }}\"></script>
    <script src=\"{{ asset('js/quixnav-init.js') }}\"></script>
    <script src=\"{{ asset('js/custom.min.js') }}\"></script>

    <script src=\"{{ asset('vendor/chartist/js/chartist.min.js') }}\"></script>

    <script src=\"{{ asset('vendor/moment/moment.min.js') }}\"></script>
    <script src=\"{{ asset('vendor/pg-calendar/js/pignose.calendar.min.js') }}\"></script>

    <script src=\"{{ asset('js/dashboard/dashboard-2.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js\" integrity=\"sha512-1M9vud0lqoXACA9QaA8IY8k1VR2dMJ2Qmqzt9pN2AH7eQHWpNsxBpaayV0kKkUsF7FLVQ2sA2SSc8w5VOm7/mg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>


    <!-- Circle progress -->
{% endblock %}

</body>

</html>", "backendbase.html.twig", "C:\\Users\\USER\\Desktop\\techterra\\templates\\backendbase.html.twig");
    }
}