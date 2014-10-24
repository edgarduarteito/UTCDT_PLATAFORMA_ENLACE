<?php

/* ItoAdminBundle:HotelFoto:fecha.html.twig */
class __TwigTemplate_083f5b2b9b235a1f9116516f26fecda51afe055f49e0b47a27c81de6a6ad36ce extends Twig_Template
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
        // line 1
        echo "<div class=\"row-fluid\">
    
     <div class=\"col-lg-5\">
<td class=\"table-condensed\" objectid=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    ";
        // line 5
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFecha")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFecha"), "none", "none", "es", null, " dd  'de'  MMMM Y  hh:mm aaa"), "html", null, true);
            echo "  
    ";
        }
        // line 8
        echo "</td>
</div></div>";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:fecha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
