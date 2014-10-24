<?php

/* WebAppFrontendBundle:Aula:detalle_aula.html.twig */
class __TwigTemplate_5bafe77c9ddea6b7ffe625ef6fc603fb941288a4b54da3603f23594ffeefa376 extends Twig_Template
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
        echo "Plataforma Enlace";
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

    // line 10
    public function block_body($context, array $blocks = array())
    {
        echo " 

        <div class=\"contenedor\">

            <section class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"migas-de-pan\">
                        <p>Inicio /</p>
                        <p>detalle</p>
                    </div>
                </div>


                <div class=\"col-md-7  detalle\">
                    <div class=\"col-md-4\">
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
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("slug" => $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "slug"))), "html", null, true);
        echo "\" data-type=\"button_count\"></div>
                        </div>      
                    </div>
                    <br> <br>    
                    <h3>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "titulo"), "html", null, true);
        echo "</h3>
                    <time>";
        // line 41
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "none", "none", "es", null, " dd  'de'  MMMM Y "), "html", null, true);
        echo "</time>
                    <div class=\"slider\">
                        <div class=\"slider_container\"> 

                            ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "getAulaFotos"), "values")) {
            // line 46
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "getAulaFotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["foto"]) {
                // line 47
                echo "                                    <div class=\"rotador\" data-background=\"http://";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host") . $this->getAttribute((isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "viewImage")), "html", null, true);
                echo "\"></div>    
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['foto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
                            ";
        } else {
            // line 51
            echo "                                <div class=\"rotador\" data-background=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "host"), "html", null, true);
            echo "/bundles/webappfrontend/images/no-hay-foto.png\"></div>  
                            ";
        }
        // line 53
        echo "                            <button class=\"left\">&lt;</button>
                            <button class=\"right\">&gt;</button>
                        </div>
                    </div>
                    <p class=\"lead\">
                        <strong>Componentes</strong>:";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "componente"), "html", null, true);
        echo "<br>
                        <strong>Capacitaciones</strong>:";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "capacitaciones"), "html", null, true);
        echo "<br>
                        <strong>Municipio</strong>:";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "municipio"), "html", null, true);
        echo "<br>
                        <strong>Lugar</strong>:";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "lugar"), "html", null, true);
        echo "<br>
                         <strong>Descripción</strong>
                        ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aula"]) ? $context["aula"] : $this->getContext($context, "aula")), "detalle"), "html", null, true);
        echo "


                    </p>
                </div>
                <div class=\"col-md-5 col-xs-12 section-comentarios\">
                    ";
        // line 69
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user") != null)) {
            // line 70
            echo "                        ";
            if ((isset($context["comentado"]) ? $context["comentado"] : $this->getContext($context, "comentado"))) {
                // line 71
                echo "                            <form>Gracias por comentar</form>

                        ";
            } else {
                // line 74
                echo "                            ";
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), 'form_start');
                echo "
                            <div class=\"estrellas\">
                                <div class=\"all-estrellas\">
                                    <a class=\"titulo-estrellas\">Calificar</a>


                                    ";
                // line 80
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "estrellas"), 'widget');
                echo "
                                </div>
                            </div>

                            <form class=\"form-horizontal\" role=\"form\">
                                <div class=\"form-group\">
                                    <label>Escribe un comentario</label>

                                    ";
                // line 88
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), "comentario"), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Escribe un texto", "row" => "3")));
                echo "
                                    <button type=\"submit\" class=\"btn btn-info\">Enviar</button>
                                </div>
                                ";
                // line 91
                echo                 $this->env->getExtension('form')->renderer->renderBlock((isset($context["comentario"]) ? $context["comentario"] : $this->getContext($context, "comentario")), 'form_end');
                echo "
                            ";
            }
            // line 93
            echo "                        ";
        } else {
            // line 94
            echo "                            <form><a class=\"registrate\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Para comentar y calificar, debes iniciar sesión</a></form>
                        ";
        }
        // line 96
        echo "                        <div class=\"todos-comentarios\">

                            <div class=\"n-comentarios\">";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["tcomment"]) ? $context["tcomment"] : $this->getContext($context, "tcomment")), "html", null, true);
        echo " comentarios</div>

                            ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datosComentario"]) ? $context["datosComentario"] : $this->getContext($context, "datosComentario")));
        foreach ($context['_seq'] as $context["_key"] => $context["dcomment"]) {
            // line 101
            echo "                                ";
            if ($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "texto")) {
                // line 102
                echo "                                    <div class=\"comentario\">

                                        <p class=\"lead\"><strong>";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "User"), "html", null, true);
                echo ":</strong></p>
                                        <p class=\"lead\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "texto"), "html", null, true);
                echo "</p>
                                        <p class=\"lead\"><em>";
                // line 106
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "createdAt"), "none", "none", "es", null, " dd  'de'  MMMM Y "), "html", null, true);
                echo "</em></p>
                                        <p class=\"lead\">";
                // line 107
                if (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 0)) {
                    // line 108
                    echo "                                            Nadie ha calificado
                                        ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 1)) {
                    // line 110
                    echo "                                            <a  data-value=\"1\" >&#9733;</a>
                                        ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 2)) {
                    // line 112
                    echo "                                            <a  data-value=\"1\" >&#9733;</a>
                                            <a  data-value=\"2\" >&#9733;</a>
                                        ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 3)) {
                    // line 115
                    echo "                                            <a  data-value=\"1\" >&#9733;</a>
                                            <a  data-value=\"2\" >&#9733;</a>
                                            <a  data-value=\"3\" >&#9733;</a>
                                        ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 4)) {
                    // line 119
                    echo "                                            <a  data-value=\"1\" >&#9733;</a>
                                            <a  data-value=\"2\" >&#9733;</a>
                                            <a  data-value=\"3\" >&#9733;</a>
                                            <a  data-value=\"4\" >&#9733;</a>
                                        ";
                } elseif (($this->getAttribute((isset($context["dcomment"]) ? $context["dcomment"] : $this->getContext($context, "dcomment")), "calificacion") == 5)) {
                    // line 124
                    echo "                                            <a  data-value=\"1\" >&#9733;</a>
                                            <a  data-value=\"2\" >&#9733;</a>
                                            <a  data-value=\"3\" >&#9733;</a>
                                            <a  data-value=\"4\" >&#9733;</a>
                                            <a  data-value=\"5\" >&#9733;</a>
                                        ";
                }
                // line 130
                echo "                                    </p>
                                </div>
                                ";
            } else {
                // line 133
                echo "                                    <p class=\"lead\">No hay comentarios</p>

                                    ";
            }
            // line 136
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dcomment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "

                                        </div>
                                </div>
                            </section>
                        </div>

                        ";
    }

    public function getTemplateName()
    {
        return "WebAppFrontendBundle:Aula:detalle_aula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 137,  293 => 136,  288 => 133,  283 => 130,  275 => 124,  268 => 119,  262 => 115,  257 => 112,  253 => 110,  249 => 108,  247 => 107,  243 => 106,  239 => 105,  235 => 104,  231 => 102,  228 => 101,  224 => 100,  219 => 98,  215 => 96,  209 => 94,  206 => 93,  201 => 91,  195 => 88,  184 => 80,  174 => 74,  169 => 71,  166 => 70,  164 => 69,  155 => 63,  150 => 61,  146 => 60,  142 => 59,  138 => 58,  131 => 53,  125 => 51,  121 => 49,  112 => 47,  107 => 46,  105 => 45,  98 => 41,  94 => 40,  87 => 36,  57 => 10,  53 => 8,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  30 => 2,);
    }
}
