<?php

/* ::base.html.twig */
class __TwigTemplate_23b39c8a0ff1d68d770b7631416e6d0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'navigation' => array($this, 'block_navigation'),
            'places_title' => array($this, 'block_places_title'),
            'places_tagline' => array($this, 'block_places_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" ;/>
            <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            ";
        // line 17
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "        </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 36
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 39
        $this->displayBlock('places_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 40
        $this->displayBlock('places_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 48
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "            </div>
        </section>

        ";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "                <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
            ";
    }

    // line 17
    public function block_head($context, array $blocks = array())
    {
    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        // line 25
        echo "                        <nav>
                            <ul class=\"navigation\">
                                
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("_images");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\">Login</a></li>
                                
                            </ul>
                        </nav>
                    ";
    }

    // line 39
    public function block_places_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Restaurants</a>";
    }

    // line 40
    public function block_places_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">Places were your mind and taste stay</a>";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "                ";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "                    Places from Cluj Napoca - created by Precup Ramona
                ";
    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 59,  190 => 54,  187 => 53,  183 => 49,  180 => 48,  175 => 45,  169 => 40,  163 => 39,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  137 => 25,  134 => 24,  129 => 17,  122 => 13,  118 => 12,  114 => 10,  111 => 9,  105 => 5,  100 => 60,  98 => 59,  93 => 56,  91 => 53,  86 => 50,  84 => 48,  80 => 46,  78 => 45,  70 => 40,  66 => 39,  61 => 36,  49 => 17,  44 => 16,  42 => 9,  56 => 8,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  32 => 4,  71 => 16,  67 => 15,  63 => 14,  59 => 24,  55 => 12,  51 => 18,  45 => 10,  38 => 5,  35 => 5,  29 => 1,);
    }
}
