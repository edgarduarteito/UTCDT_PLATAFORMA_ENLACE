<?php

/* ::aula.html.twig */
class __TwigTemplate_c47a8d13e151ecf35f0187f2d23051ef4b3331508e08c564472ca26dda9d2e4b extends Twig_Template
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
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "
    </head>
    <body>


        <div class=\"supercontainer\">
        ";
        // line 36
        echo twig_include($this->env, $context, "WebAppFrontendBundle:Default:menu.html.twig");
        echo "
        
        ";
        // line 38
        echo twig_include($this->env, $context, "WebAppFrontendBundle:Default:slide.html.twig");
        echo " 
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->env->loadTemplate("WebAppFrontendBundle:Default:footer.html.twig")->display($context);
        // line 41
        echo "        </div>
    
</body>
</html>



";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/css/slide.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <!-- Estilos del calendario-->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/eventCalendar/css/eventCalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" >
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/eventCalendar/css/eventCalendar_theme_responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"  media=\"all\" >

    <!-- Estilos del calendario-->
        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "        
       <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/slide.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/eventCalendar/js/jquery.eventCalendar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/bootstrap-alert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
          ";
        // line 28
        $this->displayBlock('custom_javascripts', $context, $blocks);
        // line 29
        echo "    ";
    }

    // line 28
    public function block_custom_javascripts($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::aula.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  146 => 29,  144 => 28,  140 => 27,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  121 => 22,  110 => 17,  106 => 16,  97 => 13,  93 => 12,  89 => 11,  74 => 7,  63 => 41,  60 => 40,  58 => 39,  49 => 36,  41 => 30,  38 => 21,  36 => 8,  32 => 7,  24 => 1,  173 => 72,  156 => 58,  150 => 28,  143 => 51,  131 => 42,  125 => 39,  118 => 21,  109 => 31,  105 => 30,  101 => 14,  98 => 28,  91 => 25,  85 => 10,  82 => 9,  79 => 8,  76 => 20,  73 => 19,  67 => 18,  64 => 17,  59 => 16,  56 => 15,  54 => 38,  51 => 13,  47 => 12,  35 => 4,  29 => 2,);
    }
}
