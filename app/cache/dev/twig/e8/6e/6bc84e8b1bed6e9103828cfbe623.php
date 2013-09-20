<?php

/* AcmeRestaurantsBundle:Comment:form.html.twig */
class __TwigTemplate_e86e6bc84e8b1bed6e9103828cfbe623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_comment_create", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 5
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
     ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentUser"), 'row');
        echo "
     ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentContent"), 'row');
        echo "
     ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "    
    <p>
        <input type=\"submit\" value=\"Submit\" >
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  37 => 7,  28 => 5,  73 => 10,  57 => 7,  48 => 5,  40 => 3,  22 => 3,  19 => 2,  128 => 60,  122 => 57,  108 => 46,  104 => 45,  99 => 43,  96 => 42,  90 => 40,  85 => 38,  81 => 37,  75 => 34,  70 => 31,  67 => 30,  61 => 29,  33 => 6,  30 => 3,);
    }
}
