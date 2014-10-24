<?php

/* WebAppFrontendBundle:Aula:aula.html.twig */
class __TwigTemplate_68c9a52d95516db7fc033375c8ec08ab253e6ff4aa143c6384c76dd6951ef3b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::aula.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::aula.html.twig";
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"contenedor\">
            \t
                <div class=\"row\">
                \t<section class=\"col-lg-8\">
                    \t<h1>Aulas Musicales</h1>
                        
                    \t<div class=\"row aulas\">
                            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["aula"]) {
            // line 13
            echo "                        \t<article class=\"col-md-6\">
                                    ";
            // line 14
            $context["contador"] = 0;
            // line 15
            echo "                    ";
            $context["foto"] = null;
            // line 16
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "getAulaFotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 17
                echo "                        ";
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 18
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                    ";
            if (((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) > 0)) {
                // line 20
                echo "                        ";
                $context["foto"] = twig_random($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "getAulaFotos"));
                // line 21
                echo "                    ";
            }
            // line 22
            echo "                     ";
            if (((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")) != "")) {
                // line 23
                echo "                            <img src=\"http://";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host") . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "viewImage")), "html", null, true);
                echo "\" alt=\"img-noticias\"/> 
                        ";
            } else {
                // line 25
                echo "                            <img src=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
                echo "/bundles/webappfrontend/images/no-hay-foto.png\" alt=\"img-noticias\">

                        ";
            }
            // line 28
            echo "                            \t
                                <h4>";
            // line 29
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "titulo"), 70), "html", null, true);
            echo "</h4>
                                <p class=\"lead\">";
            // line 30
            echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "descripcion"), 100);
            echo "</p>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_app_frontend_detalle_aula", array("slug" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "slug"))), "html", null, true);
            echo "\">Leer más</a>
                            </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aula'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                            
                           
                        </div>
                         <div class=\"btn-toolbar\" role=\"toolbar\">
                                <div class=\"count\">
                    Total resultados: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo "
                </div>
                              <div class=\"btn-group\">
                              \t";
        // line 42
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                              </div>         
                            </div>
                    </section>
                    <section class=\"col-lg-4\">
                    \t<div class=\"filtro\">
                        <form role=\"form\">
                          <div class=\"form-group\">
                            <label for=\"\">Escoge un municipio</label>
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "municipio"), 'widget', array("attr" => array("placeholder" => "Municipio")));
        echo "
                          </div>
                           <div class=\"form-group\">
                            <label for=\"exampleInputPassword1\">Buscar por palabra</label>
                            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo"), 'widget', array("attr" => array("placeholder" => "Buscar")));
        echo "
                          </div>
                          <button type=\"submit\" class=\"btn btn-default\" name=\"submit-filter\">Filtrar</button>
                          <button type=\"submit\" class=\"btn bg-danger\" onClick=\"window.location.href = '";
        // line 58
        echo $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"));
        echo "'\" >Limpiar</button>
                        </form>
                        </div>
                                             
                    </section>
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Aula:aula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  150 => 55,  143 => 51,  131 => 42,  125 => 39,  118 => 34,  109 => 31,  105 => 30,  101 => 29,  98 => 28,  91 => 25,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  67 => 18,  64 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  47 => 12,  35 => 4,  29 => 2,);
    }
}
