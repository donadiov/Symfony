<?php

/* MateriaSqlBundle:Default:welcome.html.twig */
class __TwigTemplate_e3ff7adf0d451026d611d56e3231e484c762f5ce4f7bf567240c7461508fe6c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriaSqlBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MateriaSqlBundle:Default:index.html.twig";
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
    <h2>Bienvenido ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "username"), "html", null, true);
        echo "</h2>
    <small>Su rol es ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol"), "html", null, true);
        echo "</small>
    <br>
    <small>Su Id de empresa es ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginCompanyId"), "html", null, true);
        echo "</small>
\t<br>
\t<small>Su ID de Usuario es ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginUserId"), "html", null, true);
        echo "</small>
 </div>
 
 ";
        // line 15
        echo twig_var_dump($this->env, $context, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  190 => 69,  249 => 125,  244 => 124,  236 => 121,  231 => 119,  124 => 41,  245 => 83,  211 => 70,  205 => 102,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 83,  165 => 53,  146 => 45,  76 => 1,  104 => 38,  100 => 41,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 29,  232 => 75,  218 => 71,  212 => 106,  210 => 68,  197 => 66,  170 => 79,  161 => 73,  155 => 53,  134 => 41,  129 => 39,  110 => 43,  77 => 19,  127 => 41,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 38,  97 => 30,  70 => 20,  206 => 81,  198 => 72,  188 => 68,  180 => 86,  174 => 63,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 12,  53 => 12,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 123,  229 => 97,  220 => 80,  214 => 71,  177 => 83,  169 => 61,  140 => 45,  132 => 43,  128 => 42,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 82,  221 => 112,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 61,  159 => 61,  143 => 61,  135 => 56,  119 => 39,  102 => 37,  71 => 24,  67 => 26,  63 => 15,  59 => 13,  38 => 6,  94 => 33,  89 => 20,  85 => 31,  75 => 28,  68 => 23,  56 => 22,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 6,  44 => 11,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 58,  158 => 67,  156 => 59,  151 => 52,  142 => 52,  138 => 42,  136 => 45,  121 => 38,  117 => 39,  105 => 34,  91 => 33,  62 => 18,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 23,  69 => 16,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 49,  139 => 42,  131 => 55,  123 => 40,  120 => 41,  115 => 38,  111 => 36,  108 => 33,  101 => 37,  98 => 29,  96 => 36,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 7,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 67,  193 => 70,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 69,  149 => 51,  147 => 47,  144 => 53,  141 => 48,  133 => 52,  130 => 43,  125 => 38,  122 => 37,  116 => 36,  112 => 40,  109 => 47,  106 => 36,  103 => 33,  99 => 29,  95 => 39,  92 => 26,  86 => 23,  82 => 29,  80 => 28,  73 => 22,  64 => 25,  60 => 24,  57 => 12,  54 => 21,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
