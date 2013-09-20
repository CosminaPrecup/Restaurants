<?php

/* AcmeRestaurantsBundle:Default:sidebar.html.twig */
class __TwigTemplate_06936ac03388db4bb4f1067c8afb8eba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " 
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "  <section class=\"section\">
    <header>
       <h3>Search by Raiting</h3>
       <br/>
    </header>
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_sidebar");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
     ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
     ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Raiting"), 'row');
        echo "
     ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
     <input type=\"submit\" />
     </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle:Default:sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  36 => 8,  23 => 2,  20 => 1,  195 => 59,  190 => 54,  187 => 53,  183 => 49,  180 => 48,  175 => 45,  169 => 40,  163 => 39,  154 => 31,  150 => 30,  146 => 29,  142 => 28,  137 => 25,  134 => 24,  129 => 17,  122 => 13,  118 => 12,  114 => 10,  111 => 9,  105 => 5,  100 => 60,  98 => 59,  93 => 56,  91 => 53,  86 => 50,  84 => 48,  80 => 46,  78 => 45,  66 => 39,  59 => 24,  51 => 18,  44 => 16,  48 => 6,  43 => 5,  40 => 4,  35 => 5,  32 => 4,  29 => 3,  102 => 31,  94 => 28,  85 => 24,  81 => 23,  74 => 19,  70 => 40,  67 => 17,  61 => 36,  56 => 8,  52 => 7,  49 => 17,  42 => 9,  37 => 5,  31 => 4,  28 => 3,);
    }
}
