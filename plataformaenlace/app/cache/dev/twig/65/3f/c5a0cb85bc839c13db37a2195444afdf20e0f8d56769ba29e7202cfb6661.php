<?php

/* StfalconTinymceBundle:Script:init.html.twig */
class __TwigTemplate_653fc5a0cb85bc839c13db37a2195444afdf20e0f8d56769ba29e7202cfb6661 extends Twig_Template
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
        if ((isset($context["include_jquery"]) ? $context["include_jquery"] : $this->getContext($context, "include_jquery"))) {
            // line 2
            echo "    <script src=\"http://code.jquery.com/jquery-1.9.1.min.js\"></script>
";
        }
        // line 4
        if ((isset($context["tinymce_jquery"]) ? $context["tinymce_jquery"] : $this->getContext($context, "tinymce_jquery"))) {
            // line 5
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/jquery.tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.jquery.js")), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 8
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/vendor/tinymce/tinymce.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/ready.min.js")), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\" src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["base_url"]) ? $context["base_url"] : $this->getContext($context, "base_url")) . "bundles/stfalcontinymce/js/init.standard.js")), "html", null, true);
            echo "\"></script>
";
        }
        // line 12
        echo "<script type=\"text/javascript\">
//<![CDATA[
    stfalcon_tinymce_config = ";
        // line 14
        echo (isset($context["tinymce_config"]) ? $context["tinymce_config"] : $this->getContext($context, "tinymce_config"));
        echo ";
    initTinyMCE();
//]]>
</script>
";
    }

    public function getTemplateName()
    {
        return "StfalconTinymceBundle:Script:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 14,  27 => 5,  25 => 4,  21 => 2,  31 => 14,  23 => 12,  19 => 1,  43 => 8,  35 => 5,  217 => 56,  203 => 55,  200 => 54,  196 => 52,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  174 => 42,  168 => 41,  160 => 38,  157 => 37,  154 => 36,  150 => 35,  146 => 34,  143 => 33,  124 => 25,  121 => 24,  118 => 23,  111 => 22,  108 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  87 => 14,  80 => 13,  77 => 12,  71 => 11,  51 => 12,  36 => 6,  20 => 1,  958 => 284,  955 => 283,  952 => 282,  948 => 315,  944 => 313,  938 => 310,  935 => 309,  933 => 308,  927 => 305,  919 => 304,  916 => 303,  914 => 302,  911 => 301,  905 => 299,  903 => 298,  900 => 297,  894 => 295,  892 => 294,  889 => 293,  883 => 291,  881 => 290,  878 => 289,  872 => 287,  870 => 286,  867 => 285,  865 => 282,  862 => 281,  859 => 280,  855 => 274,  850 => 271,  842 => 266,  836 => 262,  834 => 261,  830 => 259,  824 => 257,  822 => 256,  818 => 254,  812 => 251,  809 => 250,  807 => 249,  804 => 248,  801 => 247,  798 => 246,  793 => 275,  790 => 246,  787 => 245,  782 => 316,  780 => 280,  775 => 277,  773 => 245,  770 => 244,  767 => 243,  763 => 236,  759 => 234,  753 => 233,  748 => 230,  742 => 229,  730 => 227,  727 => 226,  723 => 225,  717 => 224,  710 => 221,  706 => 220,  698 => 218,  692 => 217,  689 => 216,  686 => 215,  683 => 214,  678 => 213,  675 => 212,  673 => 211,  670 => 210,  667 => 209,  660 => 208,  657 => 207,  654 => 206,  651 => 205,  645 => 204,  642 => 203,  639 => 202,  636 => 200,  629 => 199,  626 => 198,  620 => 197,  617 => 196,  613 => 195,  610 => 194,  607 => 193,  604 => 192,  598 => 191,  594 => 189,  580 => 180,  574 => 178,  571 => 177,  568 => 176,  564 => 237,  561 => 192,  559 => 191,  556 => 190,  553 => 176,  550 => 175,  544 => 238,  542 => 175,  538 => 173,  535 => 172,  528 => 318,  526 => 243,  522 => 241,  520 => 172,  517 => 171,  514 => 170,  506 => 159,  503 => 158,  495 => 152,  492 => 151,  484 => 145,  481 => 144,  477 => 141,  473 => 139,  467 => 137,  464 => 136,  461 => 135,  447 => 134,  441 => 132,  437 => 130,  431 => 128,  423 => 126,  421 => 125,  418 => 124,  415 => 123,  397 => 122,  394 => 121,  392 => 120,  389 => 119,  386 => 118,  383 => 117,  379 => 166,  375 => 164,  373 => 144,  369 => 142,  367 => 117,  356 => 108,  353 => 107,  350 => 106,  345 => 104,  339 => 102,  336 => 101,  333 => 100,  331 => 99,  326 => 98,  323 => 97,  318 => 167,  315 => 106,  313 => 97,  310 => 96,  307 => 95,  301 => 94,  296 => 54,  287 => 52,  283 => 51,  276 => 47,  272 => 45,  266 => 44,  258 => 43,  250 => 42,  246 => 40,  243 => 39,  238 => 36,  229 => 34,  225 => 33,  222 => 32,  219 => 31,  213 => 27,  210 => 26,  204 => 23,  195 => 322,  193 => 51,  190 => 169,  188 => 48,  184 => 94,  164 => 76,  161 => 75,  158 => 74,  144 => 73,  139 => 71,  136 => 30,  132 => 28,  129 => 27,  126 => 26,  109 => 65,  106 => 64,  103 => 63,  97 => 61,  95 => 60,  90 => 16,  86 => 56,  84 => 39,  79 => 31,  76 => 30,  74 => 26,  70 => 25,  65 => 23,  62 => 22,  58 => 20,  56 => 19,  52 => 17,  50 => 16,  46 => 10,  44 => 13,  42 => 9,  40 => 11,  89 => 37,  81 => 38,  68 => 10,  60 => 21,  54 => 18,  48 => 8,  45 => 10,  39 => 8,  37 => 8,  32 => 6,  29 => 3,  26 => 13,);
    }
}
