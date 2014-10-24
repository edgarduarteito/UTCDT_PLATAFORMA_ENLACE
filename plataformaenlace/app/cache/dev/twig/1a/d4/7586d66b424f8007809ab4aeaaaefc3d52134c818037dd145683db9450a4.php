<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_1ad47586d66b424f8007809ab4aeaaaefc3d52134c818037dd145683db9450a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 33,  71 => 31,  65 => 29,  62 => 28,  59 => 27,  56 => 26,  52 => 23,  45 => 21,  40 => 20,  37 => 19,  34 => 18,  28 => 17,  26 => 15,  24 => 14,);
    }
}
