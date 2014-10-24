<?php

/* ItoAdminBundle:HotelFoto:slide_img.html.twig */
class __TwigTemplate_37dc66a3c54200324143839b0e12469c2392c14c973683265fc953db0a6e1a2c extends Twig_Template
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
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-text\" objectid=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id"), "html", null, true);
        echo "\">
    ";
        // line 3
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto")) {
            // line 4
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/slider/" . $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getFoto"))), "html", null, true);
            echo "\" alt=\"\" width=\"100px\"/>
    ";
        }
        // line 6
        echo "</td>

";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:slide_img.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
