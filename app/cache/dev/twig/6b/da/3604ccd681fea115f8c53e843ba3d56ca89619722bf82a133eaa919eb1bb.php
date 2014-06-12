<?php

/* MateriaSqlBundle:Admin:listUser.html.twig */
class __TwigTemplate_6bda3604ccd681fea115f8c53e843ba3d56ca89619722bf82a133eaa919eb1bb extends Twig_Template
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

<h2>Usuarios</h2>

\t\t<table>
   \t\t\t<caption>Lista de Usuarios</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>ID</th>
\t\t         <th>Nombre y Apellido</th>
\t\t         <th>Nombre de Usuario</th>
\t\t         <th>ID de Empresa</th>
\t\t         <th>Empresa</th>
\t\t         <th>Mail</th>
\t\t         <th>Rol</th>
\t\t         <th>Accion</th>
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCompanyId"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>
      \t\t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                echo "\t
      \t\t\t\t\t";
                // line 33
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCompanyId") == $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"))) {
                    // line 34
                    echo "      \t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombrefantasia"), "html", null, true);
                    echo "
      \t\t\t\t\t";
                }
                // line 36
                echo "      \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      \t\t\t\t</td>
      \t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userMail"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
            echo "</td>
      \t\t\t\t<td>
      \t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_sql_editUser", array("userid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"))), "html", null, true);
            echo "\">Editar</a>
\t\t\t\t\t\t";
            // line 42
            if ((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != "TITULAR") && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != "SUPER_ADMIN"))) {
                // line 43
                echo "\t\t\t\t\t\t - <button id=\"btnPopUp";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
                echo "\">Eliminar</button>
\t\t\t\t\t\t";
            }
            // line 45
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t  \$(\"#btnPopUp";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t  });
\t\t\t\t\t\t  
\t\t\t\t\t\t  \$(\"#btnClose";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>


\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_sql_deleteCompanyUser", array("userid" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"))), "html", null, true);
            echo "\" data-validate=\"parsley\">

\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar el Usuario ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span>que es actual miembro de la empresa 
\t\t\t\t\t\t\t\t\t";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t";
                // line 66
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCompanyId") == $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"))) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombrefantasia"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"userId\" name=\"userId\" class=\"input-xlarge\" readonly value=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnClose";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\">Cancelar</span>
\t\t\t\t\t\t    </form>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
      \t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("materia_sql_newUser");
        echo "\">Nuevo Usuario</a>
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Admin:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 83,  211 => 70,  205 => 69,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 83,  165 => 53,  146 => 45,  76 => 1,  104 => 2,  100 => 41,  34 => 5,  207 => 76,  184 => 63,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 90,  210 => 68,  197 => 66,  170 => 53,  161 => 52,  155 => 49,  134 => 41,  129 => 39,  110 => 34,  77 => 25,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 20,  206 => 81,  198 => 80,  188 => 68,  180 => 86,  174 => 84,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 17,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 81,  229 => 97,  220 => 70,  214 => 71,  177 => 65,  169 => 82,  140 => 43,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 61,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 24,  67 => 19,  63 => 22,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 6,  44 => 11,  31 => 4,  28 => 3,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 48,  142 => 52,  138 => 42,  136 => 42,  121 => 38,  117 => 52,  105 => 40,  91 => 31,  62 => 18,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 24,  69 => 11,  47 => 17,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 60,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 1,  98 => 30,  96 => 34,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 16,  41 => 12,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 67,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 68,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 43,  109 => 47,  106 => 36,  103 => 37,  99 => 29,  95 => 39,  92 => 38,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 16,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
