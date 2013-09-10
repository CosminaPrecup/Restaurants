<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_0ab62b4feb560af47686d16a16f22f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  20 => 1,  195 => 59,  190 => 54,  180 => 48,  175 => 45,  150 => 30,  146 => 29,  137 => 25,  134 => 24,  129 => 17,  118 => 12,  114 => 58,  100 => 47,  70 => 31,  127 => 28,  110 => 22,  90 => 32,  84 => 48,  76 => 17,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 40,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 29,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 24,  67 => 30,  63 => 14,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 34,  68 => 14,  56 => 14,  87 => 25,  21 => 2,  26 => 9,  93 => 56,  88 => 31,  78 => 28,  46 => 10,  27 => 4,  44 => 16,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 49,  171 => 61,  166 => 71,  163 => 39,  158 => 67,  156 => 66,  151 => 63,  142 => 28,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 5,  91 => 33,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 61,  115 => 43,  111 => 9,  108 => 19,  101 => 32,  98 => 59,  96 => 46,  83 => 25,  74 => 14,  66 => 39,  55 => 12,  52 => 10,  50 => 11,  43 => 7,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 53,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 31,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 13,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 36,  95 => 28,  92 => 21,  86 => 39,  82 => 29,  80 => 36,  73 => 10,  64 => 13,  60 => 6,  57 => 12,  54 => 10,  51 => 18,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
