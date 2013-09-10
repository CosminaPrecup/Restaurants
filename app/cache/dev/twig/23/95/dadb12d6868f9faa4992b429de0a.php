<?php

/* AcmeRestaurantsBundle::layout.html.twig */
class __TwigTemplate_2395dadb12d6868f9faa4992b429de0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AcmeRestaurantsBundle:Default:sidebar"), array());
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
     <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/place.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/places.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
     <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />    
    ";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  52 => 7,  48 => 6,  43 => 5,  40 => 4,  32 => 4,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  55 => 12,  51 => 11,  45 => 10,  38 => 5,  35 => 10,  29 => 3,);
    }
}
