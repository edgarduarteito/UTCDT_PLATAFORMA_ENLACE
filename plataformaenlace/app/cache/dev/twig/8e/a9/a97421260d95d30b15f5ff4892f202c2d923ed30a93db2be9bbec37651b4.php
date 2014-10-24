<?php

/* WebAppFrontendBundle:Default:slide.html.twig */
class __TwigTemplate_8ea9a97421260d95d30b15f5ff4892f202c2d923ed30a93db2be9bbec37651b4 extends Twig_Template
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
        // line 2
        echo "<div class=\"slider\">
    <div class=\"slider_container\"> 
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slide"]) ? $context["slide"] : $this->getContext($context, "slide")));
        foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
            // line 5
            echo "            ";
            if ($this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "foto")) {
                // line 6
                echo "                <div class=\"rotador\" data-background=\"http://";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host") . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "viewImage")), "html", null, true);
                echo "\"></div>
            ";
            } else {
                // line 8
                echo "                <div class=\"rotador\" data-background=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
                echo "/bundles/webappfrontend/images/no-hay-foto.png\"></div>  
            ";
            }
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <button class=\"left\">&lt;</button>
        <button class=\"right\">&gt;</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 10,  27 => 5,  23 => 4,  103 => 39,  81 => 33,  77 => 32,  69 => 29,  62 => 25,  57 => 23,  50 => 19,  30 => 6,  25 => 5,  19 => 2,  155 => 39,  146 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  121 => 22,  110 => 17,  106 => 40,  97 => 13,  93 => 12,  89 => 35,  74 => 7,  63 => 41,  60 => 40,  58 => 39,  49 => 36,  41 => 13,  38 => 12,  36 => 8,  32 => 8,  24 => 1,  173 => 72,  156 => 58,  150 => 28,  143 => 51,  131 => 42,  125 => 39,  118 => 21,  109 => 41,  105 => 30,  101 => 14,  98 => 37,  91 => 36,  85 => 34,  82 => 9,  79 => 8,  76 => 20,  73 => 31,  67 => 18,  64 => 17,  59 => 16,  56 => 15,  54 => 38,  51 => 13,  47 => 12,  35 => 4,  29 => 2,);
    }
}
