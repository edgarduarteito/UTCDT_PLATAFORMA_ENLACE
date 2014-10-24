<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_857a5da6ce39080e6c7e6adc2b7e7ae58a6e8f488905f6a7c71225b3fa3d3423 extends Twig_Template
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
<div class=\"col-md-12 imagem-top\">

    <div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"panel panel-info\">

                    <div class=\"panel-heading\">
                        <h2 class=\"panel-title\">Cambio Contraseña</h2>
                    </div>
                    <div class=\"col-md-12 iniciar-sesion\">  
                        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"col-md-6 sesion\">

                            <label for=\"username\" class=\"col-sm-4 control-label\">Contraseña Actual</label>
                            ";
        // line 16
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors')))) {
            // line 17
            echo "                                <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'errors');
            echo "</div>
                            ";
        }
        // line 19
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password"), 'widget', array("attr" => array("class" => "form-control")));
        echo "

                            ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["passwordField"]) {
            // line 22
            echo "                                ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first") == true)) {
                // line 23
                echo "                                    <label for=\"username\" class=\"col-sm-4 control-label\">Contraseña</label>

                                    ";
                // line 25
                if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors')))) {
                    // line 26
                    echo "                                        <div class=\"bg-danger errores\">";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors');
                    echo "</div>
                                    ";
                }
                // line 28
                echo "                                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail", "placeholder" => "Contraseña")));
                echo "<br>

                                ";
            } else {
                // line 31
                echo "                                    <label for=\"username\" class=\"col-sm-4 control-label\">Repite tu contraseña</label> 

                                    ";
                // line 33
                if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors')))) {
                    // line 34
                    echo "                                        <div class=\"bg-danger errores\">";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'errors');
                    echo "</div>
                                    ";
                }
                // line 36
                echo "                                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["passwordField"]) ? $context["passwordField"] : $this->getContext($context, "passwordField")), 'widget', array("attr" => array("class" => "form-control", "id" => "inputEmail", "placeholder" => "Repite tu contraseña")));
                echo "

                                ";
            }
            // line 39
            echo "                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passwordField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                            <div class=\"btn-sesion\">
                                <input type=\"submit\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
                            </div>
                        </form>
                    </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 42,  127 => 40,  113 => 39,  106 => 36,  100 => 34,  98 => 33,  94 => 31,  87 => 28,  81 => 26,  79 => 25,  75 => 23,  72 => 22,  55 => 21,  49 => 19,  43 => 17,  41 => 16,  33 => 13,  19 => 1,  31 => 4,  28 => 3,);
    }
}
