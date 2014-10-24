<?php

/* WebAppFrontendBundle:Default:contacto.html.twig */
class __TwigTemplate_254a6adf5e59094f7b95aa150343b424bc94bfc3bd500fb39b349d59b2d1b39a extends Twig_Template
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
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo " 

    <section class=\"row\">

        <section class=\"col-md-12 aplicaciones\">

            <div class=\"box_text_detalle\">
                <br>

                <h2>Contáctenos</h2>
                <div class=\"box_blanco\">
                    <script type=\"text/javascript\" language=\"javascript\">
                        
\$(document).ready(function(){
  \$(\"form\").submit(function() {
    var x = \$(\"#contacto_email\").val();
      if (x!=\"\") {
        alert(\"requerido campo email\");\t\t
        return false;
      } else 
          return true;\t\t\t
    });
});
}
</script>

                    <div class=\"box_formulario\">
                        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("web_app_frontend_contacto");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), 'enctype');
        echo " method=\"POST\" class=\"col-md-6 sesion\" >
                        <label for=\"username\" class=\"col-sm-4 control-label\">Correo Electr&oacute;nico</label>
                        ";
        // line 32
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "email"), 'errors')))) {
            // line 33
            echo "                            <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "email"), 'errors');
            echo "</div>
                        ";
        }
        // line 35
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "email"), 'widget');
        echo "

                        <label for=\"username\" class=\"col-sm-4 control-label\">Asunto</label>
                        ";
        // line 38
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "asunto"), 'errors')))) {
            // line 39
            echo "                            <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "asunto"), 'errors');
            echo "</div>
                        ";
        }
        // line 41
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "asunto"), 'widget');
        echo "     
                        <label for=\"username\" class=\"col-sm-4 control-label\">Comentario</label>
                        ";
        // line 43
        if ((!twig_test_empty($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "mensaje"), 'errors')))) {
            // line 44
            echo "                            <div class=\"bg-danger errores\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "mensaje"), 'errors');
            echo "</div>
                        ";
        }
        // line 46
        echo "                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), "mensaje"), 'widget');
        echo "
                        <div>
                            <button type=\"submit\" class=\"btn btn btn-success\">Enviar</button>
                        </div>

                      
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["contacto"]) ? $context["contacto"] : $this->getContext($context, "contacto")), 'rest');
        echo "
                        </form>
                    </div>
                </div>
                        
                    <div class=\"col-md-6\">
                        ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "sucess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 59
            echo "              
                <div class=\"alert alert-success\" role=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " 
                        
                    </div>
                    
            </div>
            


       
        </section>
    </section>



";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 62,  135 => 60,  132 => 59,  128 => 58,  119 => 52,  109 => 46,  103 => 44,  101 => 43,  95 => 41,  89 => 39,  87 => 38,  80 => 35,  74 => 33,  72 => 32,  65 => 30,  34 => 3,  29 => 2,);
    }
}
