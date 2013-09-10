<?php

/* AcmeRestaurantsBundle:Default:show.html.twig */
class __TwigTemplate_111ab3aab88e1e0fac16b6b7b755805e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeRestaurantsBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>
<script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyDa5Q4aq-rfNjpv-VrUoEVqGZuJW54vz4M&sensor=false\"></script>
<script>
function initialize()
{
    var lat=document.getElementById('Lat').value;
    
    var lng=document.getElementById('Lng').value;
    
    var mapProp = {
      center:new google.maps.LatLng(lat,lng),
      zoom:5,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };
    var map=new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);
    var marker=new google.maps.LatLng(lat,lng);
    
    var marker=new google.maps.Marker({
    position:new google.maps.LatLng(lat,lng)
    });
  marker.setMap(map);
};
</script>
</head>
";
    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placesName"), "html", null, true);
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "<body>
  <article class=\"places\">
     <header>     
        <h2>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placesName"), "html", null, true);
        echo "</h2>
     </header>
 ";
        // line 36
        echo " 
 <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placePhoto"), "html", null, true);
        echo "\"  class=\"large\">
 
 <div class=\"snippet\">
   <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placesAddress"), "html", null, true);
        echo "</p>
   
 <input id=\"Lat\" type=\"hidden\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placesLat"), "html", null, true);
        echo "\">
 <input id=\"Lng\" type=\"hidden\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "placesLng"), "html", null, true);
        echo "\">
 <div id=\"googleMap\" style=\"width:500px;height:380px;\">
    <script>
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
 </div>
 </div>        
  </article>
  <section class=\"comments\" id=\"comments\">
     <section class=\"previous-comments\">
         <h3>Comments</h3>    
     ";
        // line 54
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeRestaurantsBundle:Comment:comments", array("id" => $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "id"))));
        echo "
     </section>
        <h3>Add Comment</h3>
        ";
        // line 57
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeRestaurantsBundle:Comment:create", array("id" => $this->getAttribute((isset($context["places"]) ? $context["places"] : $this->getContext($context, "places")), "id"))));
        echo "
         
      </section>
</body>
";
    }

    public function getTemplateName()
    {
        return "AcmeRestaurantsBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 57,  112 => 54,  98 => 43,  94 => 42,  89 => 40,  83 => 37,  80 => 36,  75 => 34,  70 => 31,  67 => 30,  61 => 29,  33 => 4,  30 => 3,);
    }
}
