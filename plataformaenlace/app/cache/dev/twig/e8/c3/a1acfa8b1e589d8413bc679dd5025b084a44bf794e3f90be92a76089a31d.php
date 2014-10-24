<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_e8c3a1acfa8b1e589d8413bc679dd5025b084a44bf794e3f90be92a76089a31d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "

    <div >
        <div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
            ";
        // line 21
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 60
        echo "                </div>
                <div class=\"col-sm-6\">
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 21
    public function block_sonata_user_login($context, array $blocks = array())
    {
        // line 22
        echo "                    <div class=\"panel panel-info\">

                        <div class=\"panel-heading\">
                            <h2 class=\"panel-title\">Inicio Sesión</h2>
                        </div>
                        ";
        // line 27
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 32
        echo "                        <div class=\"col-md-12 iniciar-sesion\">  
                        ";
        // line 33
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 57
        echo "                        </div>
                    </div>
            ";
    }

    // line 27
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 28
        echo "                            ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                                <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                            ";
        }
        // line 31
        echo "                        ";
    }

    // line 33
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        echo "                                          
                            <form action=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"col-md-6 sesion\">
                                <input name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" type=\"hidden\">
                                <label for=\"username\" class=\"col-sm-4 control-label\">Usuario</label>

                                <input class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required type=\"text\">
                                <label for=\"password\" class=\"col-sm-4 control-label\">Contraseña</label>

                                <input class=\"form-control\" id=\"password\" name=\"_password\" required type=\"password\">
                                <div class=\"ayudas-sesion\">
                                    <label for=\"remember_me\">
                                        <input id=\"remember_me\" name=\"_remember_me\" value=\"on\" type=\"checkbox\">
                                        Recordar
                                    </label>

                                    <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Recuperar contraseña</a>

                                </div>
                                <div class=\"btn-sesion\">
                                    <input id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"Entrar\" type=\"submit\">
                                    <a class=\"btn btn-success pull-right\" href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Registrate</a>
                                </div>
                            </form>
                        ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  121 => 48,  108 => 38,  102 => 35,  98 => 34,  93 => 33,  89 => 31,  83 => 29,  80 => 28,  77 => 27,  71 => 57,  69 => 33,  66 => 32,  64 => 27,  57 => 22,  54 => 21,  44 => 60,  42 => 21,  34 => 15,  31 => 14,);
    }
}
