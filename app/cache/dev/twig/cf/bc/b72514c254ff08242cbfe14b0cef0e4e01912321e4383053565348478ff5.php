<?php

/* JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig */
class __TwigTemplate_cfbcb72514c254ff08242cbfe14b0cef0e4e01912321e4383053565348478ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("JazzywebAulasMentorAlimentosBundle:Default:layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
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
        echo "<br/>
<form name=\"formInsertar\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("JazzywebAulasMentorAlimentosBundle_insertar");
        echo "\" method=\"POST\">
    <table>
        <tr>
        \t<th>ID</th>
            <th>Nombre</th>
            <th>Energía (Kcal)</th>
            <th>Proteina (g)</th>
            <th>H. de carbono (g)</th>
            <th>Fibra (g)</th>
            <th>Grasa total (g)</th>
        </tr>
        <tr>
            <td><label name=\"id\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</label></td>
            <td><input type=\"text\" name=\"nombre\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"energia\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["energia"]) ? $context["energia"] : $this->getContext($context, "energia")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"proteina\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["proteina"]) ? $context["proteina"] : $this->getContext($context, "proteina")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"hc\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["hc"]) ? $context["hc"] : $this->getContext($context, "hc")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"fibra\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["fibra"]) ? $context["fibra"] : $this->getContext($context, "fibra")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"grasa\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["grasa"]) ? $context["grasa"] : $this->getContext($context, "grasa")), "html", null, true);
        echo "\" /></td>
        </tr>
    </table>
     <table>
        <tr>
            <th>Color</th>
            <th>Peso</th>
            <th>Familia</th>
            <th>Foto</th>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"color\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"peso\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["peso"]) ? $context["peso"] : $this->getContext($context, "peso")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"familia\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["familia"]) ? $context["familia"] : $this->getContext($context, "familia")), "html", null, true);
        echo "\" /></td>
            <td><input type=\"text\" name=\"foto\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["foto"]) ? $context["foto"] : $this->getContext($context, "foto")), "html", null, true);
        echo "\" /></td>
        </tr>
      </table>        
    <input type=\"submit\" value=\"insertar\" name=\"insertar\" />
</form>

";
    }

    public function getTemplateName()
    {
        return "JazzywebAulasMentorAlimentosBundle:Default:formInsertar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  100 => 38,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 57,  134 => 41,  129 => 39,  110 => 34,  77 => 23,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 23,  206 => 81,  198 => 80,  188 => 68,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 32,  84 => 29,  58 => 17,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 20,  67 => 19,  63 => 18,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 20,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 25,  46 => 7,  27 => 4,  44 => 11,  31 => 4,  28 => 3,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 61,  142 => 52,  138 => 50,  136 => 42,  121 => 38,  117 => 44,  105 => 40,  91 => 31,  62 => 22,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 21,  69 => 11,  47 => 12,  40 => 8,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 40,  101 => 32,  98 => 30,  96 => 28,  83 => 27,  74 => 24,  66 => 22,  55 => 16,  52 => 10,  50 => 10,  43 => 9,  41 => 12,  35 => 7,  32 => 3,  29 => 5,  209 => 82,  203 => 80,  199 => 70,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 62,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 41,  109 => 33,  106 => 36,  103 => 37,  99 => 29,  95 => 26,  92 => 25,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 10,  60 => 21,  57 => 12,  54 => 19,  51 => 15,  48 => 13,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 6,  30 => 3,);
    }
}
