<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_4bdfc72e1105292694bfa1d1bbde661715b824075898af32c6c581572a8b1122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  181 => 72,  175 => 71,  165 => 68,  159 => 64,  155 => 62,  153 => 61,  147 => 59,  141 => 57,  137 => 55,  126 => 52,  123 => 51,  119 => 50,  114 => 47,  112 => 46,  108 => 44,  104 => 42,  102 => 41,  96 => 39,  93 => 38,  91 => 37,  84 => 33,  80 => 31,  67 => 26,  62 => 24,  49 => 21,  43 => 20,  40 => 19,  36 => 18,  31 => 15,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 69,  167 => 56,  164 => 55,  162 => 54,  157 => 51,  148 => 49,  144 => 58,  136 => 47,  133 => 46,  129 => 44,  120 => 42,  116 => 41,  113 => 40,  111 => 39,  107 => 37,  98 => 35,  94 => 34,  86 => 33,  83 => 32,  81 => 31,  77 => 30,  73 => 29,  64 => 25,  59 => 23,  55 => 22,  52 => 22,  50 => 20,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
