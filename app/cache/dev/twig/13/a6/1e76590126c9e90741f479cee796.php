<?php

/* AcmeRestaurantsBundle:Default:index.html.twig */
class __TwigTemplate_13a61e76590126c9e90741f479cee796 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeRestaurantsBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeRestaurantsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["place"]) {
            // line 5
            echo "    
      <article class=\"places\">
         <header>     
            <h2><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesName"), "html", null, true);
            echo "</a></h2>
         </header>           
         ";
            // line 11
            echo "        
         ";
            // line 12
            if (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto") != "")) {
                echo "     
         <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto"), "html", null, true);
                echo "\">     
         ";
            } elseif (($this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placePhoto") < 10)) {
                // line 15
                echo "         <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AcmeRestaurants/images/food.jpg"), "html", null, true);
                echo "\" />
         ";
            }
            // line 17
            echo "         <div class=\"snippet\">
              <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesAddress"), "html", null, true);
            echo "</p>
              <p class=\"continue\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_show", array("id" => $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "id"))), "html", null, true);
            echo "\">Continue reading...</a></p>
         </div>              
         <footer class=\"meta\">
         <p>Comments: -</p>       
         <p>Rating:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesRating"), "html", null, true);
            echo "</p>
         <p>Tags: <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), "placesTypes"), "html", null, true);
            echo "</span></p>
         </footer>
      </article> 
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "     <p>There are no blog entries for places</p>
     
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['place'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " ";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 31,  94 => 28,  85 => 24,  81 => 23,  74 => 19,  70 => 18,  67 => 17,  61 => 15,  56 => 13,  52 => 12,  49 => 11,  42 => 8,  37 => 5,  31 => 4,  28 => 3,);
    }
}
