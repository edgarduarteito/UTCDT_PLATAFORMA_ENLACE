<?php

/* ItoAdminBundle:HotelFoto:comenta.html.twig */
class __TwigTemplate_d602bf7b9291a7bfe24b083b98845da25b3c0a0dc9a15c7c05fd06560239da94 extends Twig_Template
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
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getTexto")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getTexto"), 85), "html", null, true);
            echo "  
    ";
        }
        // line 7
        echo "</td>
</div></div>";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:comenta.html.twig";
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
