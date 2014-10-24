<?php

/* ::frontend.html.twig */
class __TwigTemplate_35234d3494f41690785f0b21553d7c54fb6d641fd6bf98c8e9cc4ddcbbd8ada8 extends Twig_Template
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
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
    </head>
    <body>


        <div class=\"supercontainer\">
                ";
        // line 31
        echo twig_include($this->env, $context, "WebAppFrontendBundle:Default:menuUsuario.html.twig");
        echo "
                ";
        // line 32
        echo twig_include($this->env, $context, "WebAppFrontendBundle:Default:slideUser.html.twig");
        echo "
                      ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        $this->env->loadTemplate("WebAppFrontendBundle:Default:footer.html.twig")->display($context);
        // line 35
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
        ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "        
       <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webappfrontend/js/bootstrap.min.js"), "html", null, true);
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
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  129 => 23,  125 => 24,  123 => 23,  118 => 21,  114 => 20,  111 => 19,  108 => 18,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  81 => 9,  78 => 8,  73 => 7,  62 => 35,  59 => 34,  57 => 33,  53 => 32,  49 => 31,  41 => 25,  38 => 18,  36 => 8,  32 => 7,  24 => 1,  35 => 3,  29 => 2,);
    }
}
