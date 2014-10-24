<?php

/* ItoAdminBundle:HotelFoto:show_fecha.html.twig */
class __TwigTemplate_5d210fa4cb6000dbe4d8151bf176dfec6ec05cc513ca49091beb37d37bc126a5 extends Twig_Template
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
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    <strong>Fecha del evento</strong> 
  </td>
     <div class=\"col-lg-5\">
<td class=\"table-condensed\" objectid=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    ";
        // line 8
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFecha")) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFecha"), "none", "none", "es", null, " dd  'de'  MMMM Y  hh:mm aaa"), "html", null, true);
            echo "  
    ";
        }
        // line 11
        echo "</td>
</div></div>";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:show_fecha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  36 => 9,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
