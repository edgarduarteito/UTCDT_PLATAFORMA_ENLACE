<?php

/* ItoAdminBundle:HotelFoto:show_aula_img.html.twig */
class __TwigTemplate_717e2970ec11c7b315ec0e17000b0c780bc2221f72e4c61191d8990e147a0218 extends Twig_Template
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
        echo "<td class=\"sonata-ba-list-field sonata-ba-list-field-text\" >
    <strong>Imagen</strong>  
</td>
<td class=\"sonata-ba-list-field sonata-ba-list-field-text\" objectid=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    ";
        // line 5
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto")) {
            // line 6
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/aulas/" . $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto"))), "html", null, true);
            echo "\" alt=\"\" width=\"100px\"/>
    ";
        }
        // line 8
        echo "</td>

";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:show_aula_img.html.twig";
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
