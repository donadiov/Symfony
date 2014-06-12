<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_0bc482efb336b31449462c74e08c09cc48ea1c1dbe1330aba97478997624fe15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  175 => 62,  65 => 19,  118 => 41,  190 => 69,  249 => 125,  244 => 124,  236 => 121,  231 => 119,  124 => 41,  245 => 83,  211 => 70,  205 => 102,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 61,  165 => 53,  146 => 45,  76 => 1,  104 => 31,  100 => 30,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 106,  210 => 68,  197 => 66,  170 => 79,  161 => 55,  155 => 54,  134 => 41,  129 => 39,  110 => 43,  77 => 19,  127 => 41,  192 => 67,  181 => 85,  160 => 71,  153 => 60,  113 => 43,  97 => 30,  70 => 20,  206 => 81,  198 => 72,  188 => 65,  180 => 86,  174 => 63,  150 => 45,  126 => 50,  114 => 38,  90 => 26,  84 => 27,  58 => 22,  53 => 16,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 123,  229 => 97,  220 => 80,  214 => 71,  177 => 83,  169 => 61,  140 => 45,  132 => 51,  128 => 50,  107 => 31,  61 => 18,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 82,  221 => 112,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 46,  102 => 40,  71 => 24,  67 => 26,  63 => 15,  59 => 13,  38 => 6,  94 => 27,  89 => 20,  85 => 32,  75 => 23,  68 => 23,  56 => 22,  87 => 28,  21 => 1,  26 => 6,  93 => 35,  88 => 33,  78 => 26,  46 => 7,  27 => 6,  44 => 13,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 57,  163 => 66,  158 => 63,  156 => 61,  151 => 53,  142 => 56,  138 => 54,  136 => 45,  121 => 38,  117 => 36,  105 => 34,  91 => 30,  62 => 18,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 22,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 50,  139 => 42,  131 => 55,  123 => 40,  120 => 41,  115 => 38,  111 => 34,  108 => 42,  101 => 37,  98 => 32,  96 => 36,  83 => 31,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 7,  41 => 8,  35 => 5,  32 => 3,  29 => 3,  209 => 82,  203 => 80,  199 => 67,  193 => 70,  189 => 74,  187 => 84,  182 => 65,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 69,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 44,  130 => 43,  125 => 49,  122 => 37,  116 => 36,  112 => 40,  109 => 33,  106 => 34,  103 => 33,  99 => 29,  95 => 31,  92 => 26,  86 => 25,  82 => 29,  80 => 24,  73 => 22,  64 => 25,  60 => 16,  57 => 12,  54 => 13,  51 => 21,  48 => 9,  45 => 13,  42 => 10,  39 => 7,  36 => 11,  33 => 10,  30 => 3,);
    }
}
