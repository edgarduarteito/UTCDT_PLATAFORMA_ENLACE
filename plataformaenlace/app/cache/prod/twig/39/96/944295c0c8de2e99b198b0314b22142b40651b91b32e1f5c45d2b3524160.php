<?php

/* WebAppFrontendBundle:Default:footer.html.twig */
class __TwigTemplate_3996944295c0c8de2e99b198b0314b22142b40651b91b32e1f5c45d2b3524160 extends Twig_Template
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
        echo "        <footer>
                <div class=\"logo-tolima\">
                    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/images/TVD.png"), "html", null, true);
        echo "\" alt=\"logo tolima digital\"/>
                </div>
                <div class=\"contador\">
                ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('visitas_extension')->totalVisitas(), "html", null, true);
        echo "
                </div>
            </footer>
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  71 => 22,  68 => 21,  65 => 20,  60 => 18,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  25 => 5,  19 => 1,  134 => 33,  129 => 23,  125 => 24,  123 => 23,  118 => 21,  114 => 20,  111 => 19,  108 => 18,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  81 => 9,  78 => 8,  73 => 7,  62 => 35,  59 => 34,  57 => 33,  53 => 17,  49 => 31,  41 => 25,  38 => 18,  36 => 8,  32 => 7,  24 => 1,  35 => 12,  29 => 6,);
    }
}
