<?php

/* MateriawebMateriaBundle:Default:Prueba.html.twig */
class __TwigTemplate_3b8bc1478f57f15a058a14e592df98ff1f0cb617c0b638a20efcca7907614565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriawebMateriaBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MateriawebMateriaBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
    <h2>Esta es la prueba para ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "username"), "html", null, true);
        echo "</h2>
    <small>Su rol es ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol"), "html", null, true);
        echo "</small>
    <br>
    <small>Y su Id de empresa es ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginCompanyId"), "html", null, true);
        echo "</small>
 </div> 
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("materiaweb_materia_homepage");
        echo "\" >Volver</a>
    ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:Prueba.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 47,  134 => 41,  129 => 39,  110 => 34,  77 => 25,  127 => 49,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 45,  97 => 30,  70 => 20,  206 => 81,  198 => 80,  188 => 62,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 32,  84 => 29,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 80,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 19,  67 => 19,  63 => 16,  59 => 14,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 62,  158 => 67,  156 => 59,  151 => 61,  142 => 43,  138 => 50,  136 => 42,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 16,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 32,  98 => 30,  96 => 29,  83 => 27,  74 => 14,  66 => 19,  55 => 13,  52 => 10,  50 => 10,  43 => 7,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 78,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 33,  106 => 36,  103 => 37,  99 => 31,  95 => 28,  92 => 21,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 17,  60 => 24,  57 => 12,  54 => 16,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 7,  36 => 5,  33 => 10,  30 => 7,);
    }
}
