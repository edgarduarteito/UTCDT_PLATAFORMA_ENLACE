<?php

/* ::frontendEvento.html.twig */
class __TwigTemplate_284cad0b26c55330cda712ff24c26d7daade3c5577228680739daa519420ab63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'custom_javascripts' => array($this, 'block_custom_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"es\" >
    <head>
        <meta  charset=utf-8\" />
        <meta name=\"viewport\" content=\"user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
    </head>
    <body>


        <div class=\"supercontainer\">
        ";
        // line 31
        echo twig_include($this->env, $context, "WebAppFrontendBundle:Default:menu.html.twig");
        echo "
       
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        $this->env->loadTemplate("WebAppFrontendBundle:Default:footer.html.twig")->display($context);
        // line 35
        echo "    </div>
    
</body>
</html>



";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Contenido Digital";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <script src=\"//code.jquery.com/jquery-1.11.0.min.js\"></script>
              <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/images/iconplataforma.png"), "html", null, true);
        echo "\" />
           <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/css/stile.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.rating.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/css/slide.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.rating.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/slide.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/slide2.js"), "html", null, true);
        echo "\"></script>
                 ";
        // line 23
        $this->displayBlock('custom_javascripts', $context, $blocks);
        // line 24
        echo "    ";
    }

    // line 23
    public function block_custom_javascripts($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontendEvento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  134 => 24,  132 => 23,  128 => 22,  124 => 21,  120 => 20,  116 => 19,  111 => 18,  108 => 17,  102 => 15,  90 => 12,  86 => 11,  82 => 10,  79 => 9,  76 => 8,  70 => 7,  59 => 35,  56 => 34,  54 => 33,  49 => 31,  41 => 25,  38 => 17,  32 => 7,  24 => 1,  299 => 137,  293 => 136,  288 => 133,  283 => 130,  275 => 124,  268 => 119,  262 => 115,  257 => 112,  253 => 110,  249 => 108,  247 => 107,  243 => 106,  239 => 105,  235 => 104,  231 => 102,  228 => 101,  224 => 100,  219 => 98,  215 => 96,  209 => 94,  206 => 93,  201 => 91,  195 => 88,  184 => 80,  174 => 74,  169 => 71,  166 => 70,  164 => 69,  155 => 63,  150 => 61,  146 => 60,  142 => 59,  138 => 23,  131 => 53,  125 => 51,  121 => 49,  112 => 47,  107 => 46,  105 => 45,  98 => 14,  94 => 13,  87 => 36,  57 => 10,  53 => 8,  48 => 6,  44 => 5,  39 => 4,  36 => 8,  30 => 2,);
    }
}
