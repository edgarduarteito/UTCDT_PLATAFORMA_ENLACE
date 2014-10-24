<?php

/* ItoAdminBundle:HotelFoto:detalle.html.twig */
class __TwigTemplate_c6bfc5389f0e5294bb0de3f220060f21b17e16962ab428d8c55c339f104fc92b extends Twig_Template
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
    ";
        // line 4
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getDetalle")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getDetalle"), 100), "html", null, true);
            echo "  
    ";
        }
        // line 7
        echo "</td>
</div></div>";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
