<?php

/* MateriawebMateriaBundle:Default:listUser.html.twig */
class __TwigTemplate_c64f09feb0dfdbb24bcb92d18b44f4779903c05ac2b153568b52cbbb42b5f7c7 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
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
      \t\t\t\t";
            // line 41
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") == "SUPER_ADMIN")) {
                // line 42
                echo "      \t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_editUser", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"))), "html", null, true);
                echo "\">Editar</a>
\t\t\t\t\t";
            } else {
                // line 43
                echo "      \t\t\t\t\t
      \t\t\t\t\t<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaweb_materia_editCompanyUser", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"))), "html", null, true);
                echo "\">Editar</a>
      \t\t\t\t";
            }
            // line 45
            echo "\t
\t\t\t\t\t\t";
            // line 46
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != "TITULAR")) {
                // line 47
                echo "\t\t\t\t\t\t - <button id=\"btnPopUp";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
                echo "\">Eliminar</button>
\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t<script>
\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t  \$(\"#btnPopUp";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t  });
\t\t\t\t\t\t  
\t\t\t\t\t\t  \$(\"#btnClose";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>

\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("materia_sql_deleteCompanyUser");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar el Usuario ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span>que es actual miembro de la empresa 
\t\t\t\t\t\t\t\t\t";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
            foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                echo "\t
\t\t\t\t\t\t\t\t\t\t";
                // line 68
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userCompanyId") == $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"))) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"userId\" name=\"userId\" class=\"input-xlarge\" readonly value=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnClose";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
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
        // line 83
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("materiaweb_materia_signup");
        echo "\">Nuevo Usuario</a>

 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 47,  134 => 41,  129 => 39,  110 => 34,  77 => 25,  127 => 49,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 45,  97 => 30,  70 => 20,  206 => 81,  198 => 80,  188 => 62,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 28,  84 => 23,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 80,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 19,  67 => 19,  63 => 14,  59 => 14,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 62,  158 => 67,  156 => 59,  151 => 61,  142 => 43,  138 => 50,  136 => 42,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 17,  69 => 16,  47 => 9,  40 => 6,  37 => 5,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 32,  98 => 30,  96 => 29,  83 => 27,  74 => 14,  66 => 19,  55 => 13,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 78,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 33,  106 => 36,  103 => 37,  99 => 31,  95 => 28,  92 => 21,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 17,  60 => 24,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 10,  30 => 7,);
    }
}
