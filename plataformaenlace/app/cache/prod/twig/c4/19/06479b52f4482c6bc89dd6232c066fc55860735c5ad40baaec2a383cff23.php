<?php

/* WebAppFrontendBundle:Default:menuUsuario.html.twig */
class __TwigTemplate_c41906479b52f4482c6bc89dd6232c066fc55860735c5ad40baaec2a383cff23 extends Twig_Template
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

<header>
    <div class=\"logo\">
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/images/logoplataformadeenlace.png"), "html", null, true);
        echo "\" alt=\"Logo plaraforma de enlace\"/>
    </div>
    <div class=\"login\">
       
    </div>
    <nav class=\"menu\">
        <ul>
            <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_evento");
        echo "\">Eventos</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_aula");
        echo "\">Aulas musicales</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_contacto");
        echo "\">Contacto</a></li>
                ";
        // line 16
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user")) {
            // line 17
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Cerrar Sesión</a></li>
                ";
        } else {
            // line 20
            echo "                ";
        }
        // line 21
        echo "
            <li style=\"text-align-last: right;\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_sitemap");
        echo "\">Mapa del sitio</a></li>
        </ul>

    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:menuUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  68 => 21,  65 => 20,  60 => 18,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  25 => 5,  19 => 1,  134 => 33,  129 => 23,  125 => 24,  123 => 23,  118 => 21,  114 => 20,  111 => 19,  108 => 18,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  81 => 9,  78 => 8,  73 => 7,  62 => 35,  59 => 34,  57 => 33,  53 => 17,  49 => 31,  41 => 25,  38 => 18,  36 => 8,  32 => 7,  24 => 1,  35 => 12,  29 => 2,);
    }
}
