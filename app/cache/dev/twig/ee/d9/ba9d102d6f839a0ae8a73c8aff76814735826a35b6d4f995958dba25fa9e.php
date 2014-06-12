<?php

/* JazzywebAulasMentorAlimentosBundle:Default:_tablaPropiedadesAlimentos.html.twig */
class __TwigTemplate_eed9ba9d102d6f839a0ae8a73c8aff76814735826a35b6d4f995958dba25fa9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        if (array_key_exists("mensaje", $context)) {
            // line 6
            echo "<b><span style=\"color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></b>
";
        }
        // line 8
        echo "
 <table id=\"lista\">
      <tr>
          <th>Color</th>
          <th>Peso (g)</th>
          <th>Familia</th>
          <th>Foto</th>
      </tr>
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")));
        foreach ($context['_seq'] as $context["_key"] => $context["alimento"]) {
            // line 17
            echo "      <tr>
          <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimentoProp"]) ? $context["alimentoProp"] : $this->getContext($context, "alimentoProp")), "color"), "html", null, true);
            echo "</td>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimentoProp"]) ? $context["alimentoProp"] : $this->getContext($context, "alimentoProp")), "peso"), "html", null, true);
            echo "</td>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimentoProp"]) ? $context["alimentoProp"] : $this->getContext($context, "alimentoProp")), "familia"), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alimentoProp"]) ? $context["alimentoProp"] : $this->getContext($context, "alimentoProp")), "foto"), "html", null, true);
            echo "</td>          \t\t\t\t\t\t\t\t
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alimento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
  </table>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/jazzywebaulasmentoralimentos/css/tablaListar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:_tablaPropiedadesAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 1,  104 => 2,  100 => 40,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 57,  134 => 41,  129 => 39,  110 => 34,  77 => 23,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 26,  206 => 81,  198 => 80,  188 => 68,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 32,  84 => 27,  58 => 20,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 24,  67 => 19,  63 => 22,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 28,  46 => 7,  27 => 6,  44 => 11,  31 => 4,  28 => 3,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 61,  142 => 52,  138 => 50,  136 => 42,  121 => 38,  117 => 44,  105 => 40,  91 => 31,  62 => 21,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 24,  69 => 11,  47 => 17,  40 => 8,  37 => 5,  22 => 4,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 42,  101 => 1,  98 => 30,  96 => 34,  83 => 27,  74 => 27,  66 => 25,  55 => 16,  52 => 10,  50 => 18,  43 => 16,  41 => 12,  35 => 6,  32 => 3,  29 => 5,  209 => 82,  203 => 80,  199 => 70,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 62,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 43,  109 => 33,  106 => 36,  103 => 37,  99 => 29,  95 => 26,  92 => 25,  86 => 30,  82 => 29,  80 => 26,  73 => 22,  64 => 22,  60 => 21,  57 => 12,  54 => 19,  51 => 21,  48 => 13,  45 => 9,  42 => 10,  39 => 7,  36 => 6,  33 => 8,  30 => 3,);
    }
}
