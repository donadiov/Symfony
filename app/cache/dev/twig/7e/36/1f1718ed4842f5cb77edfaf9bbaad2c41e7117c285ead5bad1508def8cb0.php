<?php

/* MateriaSqlBundle:Admin:listCompany.html.twig */
class __TwigTemplate_7e361f1718ed4842f5cb77edfaf9bbaad2c41e7117c285ead5bad1508def8cb0 extends Twig_Template
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

<h2>Empresas</h2>
\t\t<table>
   \t\t\t<caption>Lista de empresas creadas</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>ID</th>
\t\t         <th>Razon Social</th>
\t\t         <th>Nombre de Fantasia</th>
\t\t         <th>Clave</th>
\t\t         <th>Mail</th>
\t\t         <th>Titular</th>
\t\t         <th>Activa</th>
\t\t         <th>Accion</th>
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 25
            echo "      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
      \t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyRazonSocial"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombrefantasia"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyClave"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyMail"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreTitular"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyApellidoTitular"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>
      \t\t\t\t\t";
            // line 33
            if (($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive") == 0)) {
                // line 34
                echo "      \t\t\t\t\t\tNO
      \t\t\t\t\t";
            } else {
                // line 36
                echo "      \t\t\t\t\t\tSI
      \t\t\t\t\t";
            }
            // line 38
            echo "      \t\t\t\t</td>
      \t\t\t\t<td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_sql_editMyCompany", array("companyId" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"))), "html", null, true);
            echo "\">Editar</a></td>
\t\t\t\t</tr>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "   \t\t\t</tbody>
\t\t</table>

 </div> 
 
 ";
        // line 47
        echo twig_var_dump($this->env, $context, (isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")));
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Admin:listCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  76 => 1,  104 => 2,  100 => 40,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 57,  134 => 41,  129 => 39,  110 => 34,  77 => 25,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 26,  206 => 81,  198 => 80,  188 => 68,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 28,  84 => 27,  58 => 20,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 31,  71 => 24,  67 => 19,  63 => 22,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 28,  46 => 7,  27 => 6,  44 => 11,  31 => 4,  28 => 3,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 61,  142 => 52,  138 => 50,  136 => 42,  121 => 38,  117 => 44,  105 => 40,  91 => 31,  62 => 21,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 24,  69 => 11,  47 => 17,  40 => 6,  37 => 5,  22 => 4,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 42,  101 => 1,  98 => 30,  96 => 34,  83 => 27,  74 => 27,  66 => 25,  55 => 16,  52 => 10,  50 => 18,  43 => 16,  41 => 12,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 70,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 62,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 39,  116 => 36,  112 => 43,  109 => 33,  106 => 36,  103 => 37,  99 => 29,  95 => 26,  92 => 25,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 19,  51 => 21,  48 => 13,  45 => 9,  42 => 10,  39 => 7,  36 => 6,  33 => 8,  30 => 3,);
    }
}
