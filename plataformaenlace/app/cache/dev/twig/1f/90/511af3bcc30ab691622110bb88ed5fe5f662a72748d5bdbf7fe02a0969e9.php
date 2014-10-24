<?php

/* WebAppFrontendBundle:Default:menu.html.twig */
class __TwigTemplate_1f90511af3bcc30ab691622110bb88ed5fe5f662a72748d5bdbf7fe02a0969e9 extends Twig_Template
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
    ";
        // line 7
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 8
            echo "    <div class=\"login\">
        
    </div>
        ";
        } else {
            // line 12
            echo "            <div class=\"login\">
        <form  role=\"form\" action=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
            <div class=\"form-group\">
                <label for=\"username\">Email</label>
                <input type=\"email\" id=\"username\" name=\"_username\"  required=\"required\" placeholder=\"Email\"  class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
                <label for=\"password\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Password\" class=\"form-control\"/>
            </div>
            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn\">Ingresar</button>    
            <a class=\"btn-lg btn-default\" href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Registrarse</a>
            
            <a  class=\"btn btn-default\" href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
            echo "\">Recuperar contraseña</a>
        </form>
    </div>
                ";
        }
        // line 29
        echo "    <nav class=\"menu\">
        <ul>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_homepage");
        echo "\">Inicio</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_evento");
        echo "\">Eventos</a></li>
            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_aula");
        echo "\">Aulas musicales</a></li>
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_contacto");
        echo "\">Contacto</a></li>
                ";
        // line 35
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 36
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "</a></li>
                <li><a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Cerrar Sesión</a></li>
                ";
        } else {
            // line 39
            echo "                ";
        }
        // line 40
        echo "
            <li style=\"text-align-last: right;\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_sitemap");
        echo "\">Mapa del sitio</a></li>
        </ul>

    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  81 => 33,  77 => 32,  69 => 29,  62 => 25,  57 => 23,  50 => 19,  30 => 7,  25 => 5,  19 => 1,  155 => 39,  146 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  121 => 22,  110 => 17,  106 => 40,  97 => 13,  93 => 12,  89 => 35,  74 => 7,  63 => 41,  60 => 40,  58 => 39,  49 => 36,  41 => 13,  38 => 12,  36 => 8,  32 => 8,  24 => 1,  173 => 72,  156 => 58,  150 => 28,  143 => 51,  131 => 42,  125 => 39,  118 => 21,  109 => 41,  105 => 30,  101 => 14,  98 => 37,  91 => 36,  85 => 34,  82 => 9,  79 => 8,  76 => 20,  73 => 31,  67 => 18,  64 => 17,  59 => 16,  56 => 15,  54 => 38,  51 => 13,  47 => 12,  35 => 4,  29 => 2,);
    }
}
