<?php

/* ItoAdminBundle:HotelFoto:fupdate.html.twig */
class __TwigTemplate_621ae2d5ceff6c4089d72e7afee0f4dbad8c50f40514429be345d34f91abdc79 extends Twig_Template
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
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getUpdatedAt")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getUpdatedAt"), "none", "none", "es", null, " dd  'de'  MMMM Y  hh:mm aaa"), "html", null, true);
            echo "  
    ";
        }
        // line 7
        echo "</td>
</div></div>";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:HotelFoto:fupdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 5,  27 => 4,  23 => 3,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
