<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_506faeb19c7b4db37a9e5bdca6d3de0523f64d7094677e46bf1502723454c872 extends Twig_Template
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
        echo "<div class=\"col-md-12 imagem-top\">

    <div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"panel panel-info\">

                    <div class=\"panel-heading\">
                        <h2 class=\"panel-title\">Actualizar Perfil</h2>
                    </div>
                    <div class=\"col-md-12 iniciar-sesion\">  
                        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-6 sesion\">

                            <label for=\"username\" class=\"col-sm-4 control-label\">Usuario</label>
                            ";
        // line 15
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors')))) {
            // line 16
            echo "                                <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'errors');
            echo "</div>
                            ";
        }
        // line 18
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <label for=\"username\" class=\"col-sm-4 control-label\">Email</label>
                            ";
        // line 20
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors')))) {
            // line 21
            echo "                                <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'errors');
            echo "</div>
                            ";
        }
        // line 23
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            <label for=\"username\" class=\"col-sm-4 control-label\">Contraseña Actual</label>
                            ";
        // line 25
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors')))) {
            // line 26
            echo "                                <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors');
            echo "</div>
                            ";
        }
        // line 28
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"btn-sesion\">
                                <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
                            </div>
                        </form>
                    </div>
                </div>
                            
            </div>
                            </div>
                            </div>
                            </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  81 => 29,  76 => 28,  70 => 26,  68 => 25,  62 => 23,  56 => 21,  54 => 20,  48 => 18,  42 => 16,  40 => 15,  32 => 12,  19 => 1,  31 => 4,  28 => 3,);
    }
}
