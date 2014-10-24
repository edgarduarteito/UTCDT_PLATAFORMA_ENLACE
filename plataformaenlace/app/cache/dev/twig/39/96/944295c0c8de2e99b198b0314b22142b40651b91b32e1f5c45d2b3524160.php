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
        return array (  114 => 39,  108 => 36,  100 => 33,  94 => 30,  86 => 27,  65 => 20,  55 => 17,  52 => 16,  46 => 13,  43 => 12,  22 => 3,  48 => 11,  42 => 10,  27 => 5,  23 => 3,  103 => 34,  81 => 33,  77 => 32,  69 => 29,  62 => 19,  57 => 23,  50 => 19,  30 => 6,  25 => 5,  19 => 1,  155 => 39,  146 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  121 => 22,  110 => 17,  106 => 40,  97 => 13,  93 => 12,  89 => 28,  74 => 7,  63 => 41,  60 => 40,  58 => 39,  49 => 36,  41 => 11,  38 => 10,  36 => 8,  32 => 7,  24 => 4,  173 => 72,  156 => 58,  150 => 28,  143 => 51,  131 => 42,  125 => 39,  118 => 21,  109 => 41,  105 => 35,  101 => 14,  98 => 37,  91 => 29,  85 => 34,  82 => 9,  79 => 25,  76 => 20,  73 => 23,  67 => 18,  64 => 17,  59 => 18,  56 => 15,  54 => 38,  51 => 13,  47 => 12,  35 => 4,  29 => 6,);
    }
}
