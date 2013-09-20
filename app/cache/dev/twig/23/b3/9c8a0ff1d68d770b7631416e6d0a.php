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
        return array (  195 => 59,  190 => 54,  180 => 48,  175 => 45,  150 => 30,  146 => 29,  137 => 25,  134 => 24,  129 => 17,  118 => 12,  114 => 10,  100 => 60,  70 => 40,  127 => 28,  110 => 22,  90 => 32,  84 => 48,  76 => 17,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 40,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 36,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 24,  38 => 5,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 8,  87 => 25,  21 => 2,  26 => 6,  93 => 56,  88 => 31,  78 => 45,  46 => 7,  27 => 4,  44 => 16,  31 => 5,  28 => 5,  201 => 92,  196 => 90,  183 => 49,  171 => 61,  166 => 71,  163 => 39,  158 => 67,  156 => 66,  151 => 63,  142 => 28,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 5,  91 => 53,  62 => 23,  49 => 17,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 4,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 9,  108 => 19,  101 => 32,  98 => 59,  96 => 31,  83 => 25,  74 => 14,  66 => 39,  55 => 12,  52 => 7,  50 => 10,  43 => 5,  41 => 8,  35 => 5,  32 => 4,  29 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 53,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 31,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 13,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 50,  82 => 28,  80 => 46,  73 => 10,  64 => 13,  60 => 6,  57 => 7,  54 => 10,  51 => 18,  48 => 6,  45 => 10,  42 => 9,  39 => 9,  36 => 4,  33 => 6,  30 => 7,);
    }
}
