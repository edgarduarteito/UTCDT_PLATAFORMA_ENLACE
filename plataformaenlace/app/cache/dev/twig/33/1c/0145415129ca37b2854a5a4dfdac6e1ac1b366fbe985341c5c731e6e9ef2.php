<?php

/* WebAppFrontendBundle:Default:sitemap.html.twig */
class __TwigTemplate_331c0145415129ca37b2854a5a4dfdac6e1ac1b366fbe985341c5c731e6e9ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::eventodetalletwig.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::eventodetalletwig.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["project_name"]) ? $context["project_name"] : $this->getContext($context, "project_name")), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"contenedor\">
            \t
                <div class=\"row\">
                \t<section class=\"col-lg-8\">
                    \t <ul class=\"mapa-sitio\">
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) ? $context["urls"] : $this->getContext($context, "urls")));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 10
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "path"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "nombre"), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
                    </section>
                    <section class=\"col-lg-4\">
                    \t        
                    </section>
                </div>
            </div>
   
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:sitemap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  49 => 10,  45 => 9,  35 => 3,  29 => 2,);
    }
}
