<?php

/* WebAppFrontendBundle:Evento:evento.html.twig */
class __TwigTemplate_ea54e782d9e308a495f583435a3681fea074fc6252dc025ba8202c7ac05dcce4 extends Twig_Template
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
            \t                <div class=\"row\">
                \t<section class=\"col-lg-8\">
                    \t<h1>Eventos</h1>
                        
                    \t<div class=\"row aulas\">
                            ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 12
            echo "                        \t<article class=\"col-md-6\">
                                    ";
            // line 13
            $context["contador"] = 0;
            // line 14
            echo "                    ";
            $context["foto"] = null;
            // line 15
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "getEventoFotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 16
                echo "                        ";
                $context["contador"] = ((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) + 1);
                // line 17
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    ";
            if (((isset($context["contador"]) ? $context["contador"] : $this->getContext($context, "contador")) > 0)) {
                // line 19
                echo "                        ";
                $context["foto"] = twig_random($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "getEventoFotos"));
                // line 20
                echo "                    ";
            }
            // line 21
            echo "                     ";
            if (((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")) != "")) {
                // line 22
                echo "                            <img src=\"http://";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host") . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "viewImage")), "html", null, true);
                echo "\" alt=\"img-evento\"/> 
                        ";
            } else {
                // line 24
                echo "                            <img src=\"http://";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
                echo "/bundles/webappfrontend/images/no-hay-foto.png\" alt=\"img-evento\">

                        ";
            }
            // line 27
            echo "                            \t
                                <h4>";
            // line 28
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "titulo"), 70), "html", null, true);
            echo "</h4>
                                <p class=\"lead\">";
            // line 29
            echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "descripcionCorta"), 100);
            echo "</p>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_app_frontend_detalle_evento", array("slug" => $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "slug"))), "html", null, true);
            echo "\">Leer más</a>
                            </article>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                            
                           
                        </div>
                         <div class=\"btn-toolbar\" role=\"toolbar\">
                                <div class=\"count\">
                    Total resultados: ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo "
                </div>
                              <div class=\"btn-group\">
                              \t";
        // line 41
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                              </div>         
                            </div>
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
        return "WebAppFrontendBundle:Evento:evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  124 => 38,  117 => 33,  108 => 30,  104 => 29,  100 => 28,  97 => 27,  90 => 24,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  66 => 17,  63 => 16,  58 => 15,  55 => 14,  53 => 13,  50 => 12,  46 => 11,  35 => 4,  29 => 2,);
    }
}
