<?php

/* MateriawebMateriaBundle:Default:login.html.twig */
class __TwigTemplate_8e1246301b882e4292839ea65c143bffa7f84b81e453dea5c8cb9271a8afb38e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriawebMateriaBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div class=\"container\">


        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("materiaweb_materia_homepage");
        echo "\" data-validate=\"parsley\">
            
            <h2 class=\"form-signin-heading\">Ingrese sus Datos</h2>
            \t
            \t<select type=\"text\" name=\"companyId\" class=\"input-block-level\" data-trigger=\"change\" data-required=\"true\" autofocus>
\t\t        \t\t<option value=\"0\">Seleccione su Empresa</option>
\t\t        \t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 14
            echo "        \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyClave"), "html", null, true);
            echo "</option>
    \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  \t\t\t\t</select>
            \t<input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Usuario\" data-trigger=\"change\" data-required=\"true\">
            \t<input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
<!--        <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Recordarme
\t\t\t</label>\t\t\t-->
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Login</button>
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("materiaweb_materia_new_company");
        echo "\" >Registro</a>
        </form>

    </div> 
    ";
        // line 27
        if (array_key_exists("name", $context)) {
            // line 28
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 32
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 47,  134 => 41,  129 => 39,  110 => 34,  77 => 25,  127 => 49,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 45,  97 => 30,  70 => 20,  206 => 81,  198 => 80,  188 => 62,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 32,  84 => 29,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 80,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 19,  67 => 19,  63 => 16,  59 => 14,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 62,  158 => 67,  156 => 59,  151 => 61,  142 => 43,  138 => 50,  136 => 42,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 32,  98 => 30,  96 => 29,  83 => 27,  74 => 14,  66 => 19,  55 => 13,  52 => 14,  50 => 10,  43 => 8,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 78,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 33,  106 => 36,  103 => 37,  99 => 31,  95 => 28,  92 => 21,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 17,  60 => 24,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 7,  36 => 5,  33 => 10,  30 => 7,);
    }
}
