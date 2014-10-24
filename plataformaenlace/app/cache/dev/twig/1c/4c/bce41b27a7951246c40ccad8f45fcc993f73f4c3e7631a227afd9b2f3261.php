<?php

/* ItoAdminBundle:HotelFoto:imagenAula.html.twig */
class __TwigTemplate_1c4cbce41b27a7951246c40ccad8f45fcc993f73f4c3e7631a227afd9b2f3261 extends Twig_Template
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
        echo "<td class=\"sonata-ba-list-field sonata-ba-list-field-text\" objectid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto")) {
            // line 3
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/aulas/" . $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto"))), "html", null, true);
            echo "\" alt=\"\" width=\"100px\"/>
    ";
        }
        // line 5
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:imagenAula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 3,  24 => 2,  19 => 1,);
    }
}
