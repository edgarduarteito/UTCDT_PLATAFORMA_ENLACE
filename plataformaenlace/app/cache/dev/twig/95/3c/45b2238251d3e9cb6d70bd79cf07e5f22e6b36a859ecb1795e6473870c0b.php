<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_953c45b2238251d3e9cb6d70bd79cf07e5f22e6b36a859ecb1795e6473870c0b extends Twig_Template
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
   <section class=\"row\">

        <section class=\"col-md-12 aplicaciones\">

            <div class=\"box_text_detalle\">
               <div class=\"panel panel-info\">

                                        <div class=\"col-md-12 iniciar-sesion\">  
                       <div class=\"fos_user_user_show\">
    <div class=\"usuario\">
        <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username"), "html", null, true);
        echo "</h2>
        <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "</p>
        <a class=\"btn btn-success pull-left\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editar Perfil</a>
        <a class=\"btn btn-success pull-left\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Editar Contraseña</a>
    </div>
</div>   
                    </div>
                </div>
                              </section>
    </section>

               
    


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  44 => 14,  71 => 22,  68 => 21,  65 => 20,  60 => 18,  51 => 16,  39 => 13,  35 => 12,  25 => 5,  19 => 1,  134 => 33,  129 => 23,  125 => 24,  123 => 23,  118 => 21,  114 => 20,  111 => 19,  108 => 18,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  81 => 9,  73 => 7,  62 => 35,  59 => 34,  53 => 17,  49 => 31,  41 => 25,  38 => 13,  32 => 12,  24 => 1,  90 => 16,  87 => 15,  78 => 8,  76 => 15,  72 => 13,  66 => 12,  57 => 33,  52 => 8,  47 => 15,  43 => 14,  36 => 8,  30 => 2,  31 => 4,  28 => 3,);
    }
}
