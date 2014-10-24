<?php

/* WebAppFrontendBundle:Evento:detalle_evento.html.twig */
class __TwigTemplate_7e5a713d960cdc7aea8d8b1ecdb55b9b1e24c63dd6f53d39c2671b389a122496 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontendEvento.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontendEvento.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Detalle Eventos";
    }

    // line 3
    public function block_custom_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.MetaData.js"), "html", null, true);
        echo "' type=\"text/javascript\" language=\"javascript\"></script>
    <script src='";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.rating.js"), "html", null, true);
        echo "' type=\"text/javascript\" language=\"javascript\"></script>
    <link href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.rating.css"), "html", null, true);
        echo "' type=\"text/css\" rel=\"stylesheet\"/>

    ";
        // line 8
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")));
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "        <div class=\"contenedor\">
            <section class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"migas-de-pan\">
                        <p>Inicio /</p>
                        <p>detalle</p>
                    </div>
                </div>
                <div class=\"col-md-7 detalle\">
                    <div class=\"facebook\">
                        <div id=\"fb-root\"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id))
                                    return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = \"//connect.facebook.net/es_ES/all.js#xfbml=1&version=v2.0\";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                        <div class=\"fb-share-button\" data-href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("slug" => $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "slug"))), "html", null, true);
        echo "\" data-type=\"button_count\"></div>
                    </div>     
                    <h3>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "titulo"), "html", null, true);
        echo "</h3>
                    <time>";
        // line 33
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "fecha"), "none", "none", "es", null, " dd  'de'  MMMM Y "), "html", null, true);
        echo "</time>
                    <div class=\"slider\">
                        <div class=\"slider_container\">
                            ";
        // line 36
        if ($this->getAttribute($this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "getEventoFotos"), "values")) {
            // line 37
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "getEventoFotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                // line 38
                echo "                                    <div class=\"rotador\" data-background=\"http://";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host") . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "viewImage")), "html", null, true);
                echo "\"></div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "

                            ";
        } else {
            // line 43
            echo "                                <div class=\"rotador\" data-background=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
            echo "/bundles/webappfrontend/images/no-hay-foto.png  \"></div>
                            ";
        }
        // line 45
        echo "                            <button class=\"left\">&lt;</button>
                            <button class=\"right\">&gt;</button>
                        </div>
                    </div>
                    <p class=\"lead\">
                        <strong>Municipio</strong>:";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "municipio"), "html", null, true);
        echo "<br>
                        <strong>Lugar</strong>:";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "lugar"), "html", null, true);
        echo "<br>
                        <strong>Fecha del Evento</strong>:";
        // line 52
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "fecha"), "none", "none", "es", null, " dd  'de'  MMMM Y  hh:mm aaa"), "html", null, true);
        echo "<br>
                        <strong>Descripción</strong>:
                        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["evento"]) ? $context["evento"] : $this->getContext($context, "evento")), "detalle"), "html", null, true);
        echo "  
                    </p>
                </div>
                <div class=\"col-md-5 section-comentarios\">
                    <section class=\"blanco\">
                        ";
        // line 59
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 60
            echo "                            ";
            if ((isset($context["comentado"]) ? $context["comentado"] : $this->getContext($context, "comentado"))) {
                // line 61
                echo "                                <form>Gracias por comentar</form>

                            ";
            } else {
                // line 64
                echo "                                ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), 'form_start');
                echo "
                                <div class=\"estrellas\">
                                    <div class=\"all-estrellas\">
                                        <a class=\"titulo-estrellas\">Calificar</a>


                                        ";
                // line 70
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "estrellas"), 'widget');
                echo "
                                    </div>
                                </div>

                                <form class=\"form-horizontal\" role=\"form\">
                                    <div class=\"form-group\">
                                        <label>Escribe un comentario</label>

                                        ";
                // line 78
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "comentario"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escribe un texto", "row" => "3")));
                echo "
                                        <button type=\"submit\" class=\"btn btn-info\">Enviar</button>
                                    </div>
                                    ";
                // line 81
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), 'form_end');
                echo "
                                ";
            }
            // line 83
            echo "                            ";
        } else {
            // line 84
            echo "                                <form><a class=\"registrate\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Para comentar y calificar, debes iniciar sesión</a></form>
                            ";
        }
        // line 86
        echo "                    </section>

                    <div class=\"todos-comentarios\">
                        <div class=\"n-comentarios\">";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["tcomment"]) ? $context["tcomment"] : $this->getContext($context, "tcomment")), "html", null, true);
        echo " comentarios</div>
                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosComentario"]) ? $context["datosComentario"] : $this->getContext($context, "datosComentario")));
        foreach ($context['_seq'] as $context["_key"] => $context["dcomment"]) {
            // line 91
            echo "                            ";
            if ($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "texto")) {
                // line 92
                echo "                                <div class=\"comentario\">

                                    <p class=\"lead\"><strong>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "User"), "html", null, true);
                echo ":</strong></p>
                                    <p class=\"lead\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "texto"), "html", null, true);
                echo "</p>
                                    <p class=\"lead\"><em>";
                // line 96
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "createdAt"), "none", "none", "es", null, " dd  'de'  MMMM Y "), "html", null, true);
                echo "</em></p>
                                    <p class=\"lead\">";
                // line 97
                if (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 0)) {
                    // line 98
                    echo "                                        Nadie ha calificado
                                    ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 1)) {
                    // line 100
                    echo "                                        <a  data-value=\"1\" >&#9733;</a>
                                    ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 2)) {
                    // line 102
                    echo "                                        <a  data-value=\"1\" >&#9733;</a>
                                        <a  data-value=\"2\" >&#9733;</a>
                                    ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 3)) {
                    // line 105
                    echo "                                        <a  data-value=\"1\" >&#9733;</a>
                                        <a  data-value=\"2\" >&#9733;</a>
                                        <a  data-value=\"3\" >&#9733;</a>
                                    ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 4)) {
                    // line 109
                    echo "                                        <a  data-value=\"1\" >&#9733;</a>
                                        <a  data-value=\"2\" >&#9733;</a>
                                        <a  data-value=\"3\" >&#9733;</a>
                                        <a  data-value=\"4\" >&#9733;</a>
                                    ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 5)) {
                    // line 114
                    echo "                                        <a  data-value=\"1\" >&#9733;</a>
                                        <a  data-value=\"2\" >&#9733;</a>
                                        <a  data-value=\"3\" >&#9733;</a>
                                        <a  data-value=\"4\" >&#9733;</a>
                                        <a  data-value=\"5\" >&#9733;</a>
                                    ";
                }
                // line 120
                echo "                                </p>
                            </div>
                            ";
            } else {
                // line 123
                echo "                                <p class=\"lead\">No hay comentarios</p>

                                ";
            }
            // line 126
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dcomment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                    </div>
                                </div>
                            </section>
                        </div>
                        ";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Evento:detalle_evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 127,  281 => 126,  276 => 123,  271 => 120,  263 => 114,  256 => 109,  250 => 105,  245 => 102,  241 => 100,  237 => 98,  235 => 97,  231 => 96,  227 => 95,  223 => 94,  219 => 92,  216 => 91,  212 => 90,  208 => 89,  203 => 86,  197 => 84,  194 => 83,  189 => 81,  183 => 78,  172 => 70,  162 => 64,  157 => 61,  154 => 60,  152 => 59,  144 => 54,  139 => 52,  135 => 51,  131 => 50,  124 => 45,  118 => 43,  113 => 40,  104 => 38,  99 => 37,  97 => 36,  91 => 33,  87 => 32,  82 => 30,  60 => 10,  57 => 9,  53 => 8,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
