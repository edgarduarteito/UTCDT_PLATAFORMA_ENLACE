<?php

/* ItoAdminBundle:Sonata:standard_layout.html.twig */
class __TwigTemplate_12341993bfae1bea1055a19710d566c62252aedbf1ca099a658fa865ab5232e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        echo "<!DOCTYPE html>
<html ";
        // line 23
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tolitambora.ico"), "html", null, true);
        echo "\" />
        ";
        // line 26
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
        <title>
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 60
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 61
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 63
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 64
                echo "            -
                    ";
                // line 65
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 66
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 67
                        echo "                            ";
                        if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") != 2)) {
                            // line 68
                            echo "            &gt;
                            ";
                        }
                        // line 70
                        echo "
                            ";
                        // line 71
                        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), 50), "html", null, true);
                        echo "
                        ";
                    }
                    // line 73
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "        </title>
        <script>

            (function(\$) {

                \$(document).ready(function() {

                    \$.datepicker.setDefaults(\$.datepicker.regional['es']);

                    \$('body').delegate('.datepicker', 'focusin', function() {
                        \$(this).datepicker({'changeMonth': true, 'changeYear': true, 'dateFormat': 'yy-mm-dd'});
                    });

                });

            })(jQuery);
        </script>   
    </head>
    <body ";
        // line 94
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 95
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 169
        echo "
        ";
        // line 170
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 322
        echo "         ";
        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        echo "
    </body>
</html>
";
    }

    // line 23
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 26
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 27
        echo "        <meta charset=\"UTF-8\">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 32
        echo "
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 34
            echo "        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["stylesheet"]) ? $context["stylesheet"] : $this->getContext($context, "stylesheet"))), "html", null, true);
            echo "\"  />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "        <script>
            window.SONATA_CONFIG = {
                CONFIRM_EXIT: ";
        // line 42
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                                USE_ICHECK: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 45
        echo "                                    };
                                    window.SONATA_TRANSLATIONS = {
                                        CONFIRM_EXIT: '";
        // line 47
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                                    };
        </script>

            ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 52
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["javascript"]) ? $context["javascript"] : $this->getContext($context, "javascript"))), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        ";
    }

    // line 94
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 95
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 96
        echo "        <header class=\"header\">
                ";
        // line 97
        $this->displayBlock('logo', $context, $blocks);
        // line 106
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 167
        echo "        </header>
        ";
    }

    // line 97
    public function block_logo($context, array $blocks = array())
    {
        // line 98
        echo "            <a class=\"logo\" href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\">
                        ";
        // line 99
        if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 100
            echo "                        ";
        }
        // line 101
        echo "                        ";
        if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
            // line 102
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
            echo "
                        ";
        }
        // line 104
        echo "            </a>
                ";
    }

    // line 106
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 107
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 108
            echo "            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>

                <div class=\"navbar-left\">
                                ";
            // line 117
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 142
            echo "                </div>

                            ";
            // line 144
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 164
            echo "            </nav>
                    ";
        }
        // line 166
        echo "                ";
    }

    // line 117
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 118
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 119
            echo "                    <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 120
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 121
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 122
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 123
                        echo "                                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 124
                            echo "                        <li>
                                                                ";
                            // line 125
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 126
                                echo "                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label");
                                echo "</a>
                                                                ";
                            } else {
                                // line 128
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), 50), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 130
                            echo "                        </li>
                                                        ";
                        } else {
                            // line 132
                            echo "                        <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 134
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "                                                ";
                }
                // line 136
                echo "                                            ";
            } else {
                // line 137
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 139
            echo "                    </ol>
                                    ";
        }
        // line 141
        echo "                                ";
    }

    // line 144
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 145
        echo "                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                            </a>
                                            ";
        // line 151
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"));
        $template->display($context);
        // line 152
        echo "                        </li>
                        <li class=\"dropdown user-menu\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                            </a>
                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 158
        $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
        $template->display($context);
        // line 159
        echo "                            </ul>
                        </li>
                    </ul>
                </div>
                            ";
    }

    // line 170
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 171
        echo "        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 172
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 241
        echo "
            <aside class=\"right-side\">
                    ";
        // line 243
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 318
        echo "            </aside>

        </div>
        ";
    }

    // line 172
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 173
        echo "            <aside class=\"left-side sidebar-offcanvas\">
                <section class=\"sidebar\">
                            ";
        // line 175
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 238
        echo "                </section>
            </aside>
                ";
    }

    // line 175
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 176
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 190
        echo "
                                ";
        // line 191
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 192
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 237
        echo "                            ";
    }

    // line 176
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 177
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 178
            echo "                    <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                        <div class=\"input-group custom-search-form\">
                            <input type=\"text\" name=\"q\" value=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-flat\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                                    ";
        }
        // line 189
        echo "                                ";
    }

    // line 191
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 192
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 193
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token")) {
            // line 194
            echo "                    <ul class=\"sidebar-menu\">
                                            ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 196
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 197
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 198
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 199
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "
                                                ";
                // line 202
                echo "                                                ";
                $context["item_count"] = 0;
                // line 203
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 204
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 205
                            echo "                                                        ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 206
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 207
                                echo "                                                        ";
                            }
                            // line 208
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 209
                    echo "                                                ";
                }
                // line 210
                echo "
                                                ";
                // line 211
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 212
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 213
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 214
                        echo "                                                        ";
                        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code")))) {
                            // line 215
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 216
                            echo "                                                        ";
                        }
                        // line 217
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 218
                    echo "                        <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                            <a href=\"#\">
                                                            ";
                    // line 220
                    if ((($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "icon"))) : (""))) {
                        echo $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "icon");
                    }
                    // line 221
                    echo "                                <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo "</span>
                                <i class=\"fa pull-right fa-angle-left\"></i>
                            </a>
                            <ul class=\"treeview-menu";
                    // line 224
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 225
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 226
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 227
                            echo "                                <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 229
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "                            </ul>
                        </li>
                                                ";
                }
                // line 233
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                    </ul>
                                    ";
        }
        // line 236
        echo "                                ";
    }

    // line 243
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 244
        echo "                <section class=\"content-header\">
                            ";
        // line 245
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 277
        echo "                </section>

                <section class=\"content\">
                            ";
        // line 280
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 316
        echo "                </section>
                    ";
    }

    // line 245
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 246
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 275
        echo "
                            ";
    }

    // line 246
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 247
        echo "                                    ";
        if (((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) || (!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))))) {
            // line 248
            echo "                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 249
            if ((!twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"))))) {
                // line 250
                echo "                        <div class=\"navbar-header\">
                            <span class=\"navbar-brand\">";
                // line 251
                echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
                echo "</span>
                        </div>
                                            ";
            }
            // line 254
            echo "                        <div class=\"container-fluid\">
                            <div class=\"navbar-left\">
                                                    ";
            // line 256
            if ((!twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))))) {
                // line 257
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 259
            echo "                            </div>

                                                ";
            // line 261
            if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
                // line 262
                echo "                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"dropdown sonata-actions\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Acciones <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 266
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                    </ul>
                                </li>
                            </ul>
                                                ";
            }
            // line 271
            echo "                        </div>
                    </nav>
                                    ";
        }
        // line 274
        echo "                                ";
    }

    // line 280
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 281
        echo "
                                ";
        // line 282
        $this->displayBlock('notice', $context, $blocks);
        // line 285
        echo "
                                ";
        // line 286
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 287
            echo "                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 289
        echo "
                                ";
        // line 290
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 291
            echo "                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 293
        echo "
                                ";
        // line 294
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 295
            echo "                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 297
        echo "
                                ";
        // line 298
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 299
            echo "                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 301
        echo "
                                ";
        // line 302
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 303
            echo "                    <div class=\"row\">
                        <div class=\"sonata-ba-list ";
            // line 304
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                                            ";
            // line 305
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                        </div>

                                        ";
            // line 308
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 309
                echo "                        <div class=\"sonata-ba-filter col-md-2\">
                                                ";
                // line 310
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                        </div>
                                        ";
            }
            // line 313
            echo "                    </div>
                                ";
        }
        // line 315
        echo "                            ";
    }

    // line 282
    public function block_notice($context, array $blocks = array())
    {
        // line 283
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 284
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "ItoAdminBundle:Sonata:standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  958 => 284,  955 => 283,  952 => 282,  948 => 315,  944 => 313,  938 => 310,  935 => 309,  933 => 308,  927 => 305,  919 => 304,  916 => 303,  914 => 302,  911 => 301,  905 => 299,  903 => 298,  900 => 297,  894 => 295,  892 => 294,  889 => 293,  883 => 291,  881 => 290,  878 => 289,  872 => 287,  870 => 286,  867 => 285,  865 => 282,  862 => 281,  859 => 280,  855 => 274,  850 => 271,  842 => 266,  836 => 262,  834 => 261,  830 => 259,  824 => 257,  822 => 256,  818 => 254,  812 => 251,  809 => 250,  807 => 249,  804 => 248,  801 => 247,  798 => 246,  793 => 275,  790 => 246,  787 => 245,  782 => 316,  780 => 280,  775 => 277,  773 => 245,  770 => 244,  767 => 243,  763 => 236,  759 => 234,  753 => 233,  748 => 230,  742 => 229,  730 => 227,  727 => 226,  723 => 225,  717 => 224,  710 => 221,  706 => 220,  698 => 218,  692 => 217,  689 => 216,  686 => 215,  683 => 214,  678 => 213,  675 => 212,  673 => 211,  670 => 210,  667 => 209,  660 => 208,  657 => 207,  654 => 206,  651 => 205,  645 => 204,  642 => 203,  639 => 202,  636 => 200,  629 => 199,  626 => 198,  620 => 197,  617 => 196,  613 => 195,  610 => 194,  607 => 193,  604 => 192,  598 => 191,  594 => 189,  580 => 180,  574 => 178,  571 => 177,  568 => 176,  564 => 237,  561 => 192,  559 => 191,  556 => 190,  553 => 176,  550 => 175,  544 => 238,  542 => 175,  538 => 173,  535 => 172,  528 => 318,  526 => 243,  522 => 241,  520 => 172,  517 => 171,  514 => 170,  506 => 159,  503 => 158,  495 => 152,  492 => 151,  484 => 145,  481 => 144,  477 => 141,  473 => 139,  467 => 137,  464 => 136,  461 => 135,  447 => 134,  441 => 132,  437 => 130,  431 => 128,  423 => 126,  421 => 125,  418 => 124,  415 => 123,  397 => 122,  394 => 121,  392 => 120,  389 => 119,  386 => 118,  383 => 117,  379 => 166,  375 => 164,  373 => 144,  369 => 142,  367 => 117,  356 => 108,  353 => 107,  350 => 106,  345 => 104,  339 => 102,  336 => 101,  333 => 100,  331 => 99,  326 => 98,  323 => 97,  318 => 167,  315 => 106,  313 => 97,  310 => 96,  307 => 95,  301 => 94,  296 => 54,  287 => 52,  283 => 51,  276 => 47,  272 => 45,  266 => 44,  258 => 43,  250 => 42,  246 => 40,  243 => 39,  238 => 36,  229 => 34,  225 => 33,  222 => 32,  219 => 31,  213 => 27,  210 => 26,  204 => 23,  195 => 322,  193 => 170,  190 => 169,  188 => 95,  184 => 94,  164 => 76,  161 => 75,  158 => 74,  144 => 73,  139 => 71,  136 => 70,  132 => 68,  129 => 67,  126 => 66,  109 => 65,  106 => 64,  103 => 63,  97 => 61,  95 => 60,  90 => 58,  86 => 56,  84 => 39,  79 => 31,  76 => 30,  74 => 26,  70 => 25,  65 => 23,  62 => 22,  58 => 20,  56 => 19,  52 => 17,  50 => 16,  46 => 14,  44 => 13,  42 => 12,  40 => 11,  89 => 37,  81 => 38,  68 => 22,  60 => 21,  54 => 18,  48 => 15,  45 => 10,  39 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 3,);
    }
}
