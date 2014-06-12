<?php

/* MateriaSqlBundle:Default:editCompany.html.twig */
class __TwigTemplate_afb9b23690abe22058ba6341838fa3f5d3975fc69c9c902f960c015bfaf9e671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriaSqlBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\" >

";
        // line 5
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            // line 6
            echo "    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materia_sql_admin_listCompany");
            echo "\" data-validate=\"parsley\">
";
        } else {
            // line 8
            echo "\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_sql_editMyCompany", array("companyId" => $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginCompanyId"))), "html", null, true);
            echo "\" data-validate=\"parsley\">
";
        }
        // line 10
        echo "         <h2>Modificando Empresa ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombrefantasia"), "html", null, true);
        echo "</h2>
";
        // line 11
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            echo "         
        <label>ID de Empresa<input type=\"text\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" readonly value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "\"></label>
";
        } else {
            // line 14
            echo "\t\t<input type=\"Hidden\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" readonly value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "\">
";
        }
        // line 16
        echo "<table id=\"editCompany\">
\t<tr>
\t<td colspan=4>
\t\t<legend>Datos de la Empresa</legend>
\t</td>\t
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Razon Social</label>
\t        <input type=\"text\" id=\"companyRazonSocial\" name=\"companyRazonSocial\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyRazonSocial"), "html", null, true);
        echo "\">
\t    </td>
\t    <td> \t        
\t        <label>Nombre de Fantasia</label>
\t        <input type=\"text\" id=\"companyNombrefantasia\" name=\"companyNombrefantasia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombrefantasia"), "html", null, true);
        echo "\">
\t    </td>
\t    <td> \t        
\t        <label>Clave de empresa</label>
\t        <input type=\"text\" id=\"companyClave\" name=\"companyClave\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyClave"), "html", null, true);
        echo "\">
\t    </td>
\t    <td> \t        
\t        <label>Direccion (calle)</label>
\t        <input type=\"text\" id=\"companyCalle\" name=\"companyCalle\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalle"), "html", null, true);
        echo "\">
\t    </td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Direccoin (Numero)</label>
\t        <input type=\"text\" id=\"companyCalleNro\" name=\"companyCalleNro\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalleNro"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Ciudad</label>
\t        <input type=\"text\" id=\"companyLocalidad\" name=\"companyLocalidad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyLocalidad"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Provincia</label>
\t        <input type=\"text\" id=\"companyProvincia\" name=\"companyProvincia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyProvincia"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Pais</label>
\t        <input type=\"text\" id=\"companyPais\" name=\"companyPais\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPais"), "html", null, true);
        echo "\">
\t    </td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Codigo Postal</label>
\t        <input type=\"text\" id=\"companyCp\" name=\"companyCp\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCp"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Cuit</label>
\t        <input type=\"text\" id=\"companyCuit\" name=\"companyCuit\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCuit"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Perfil Fiscal</label>
\t        <input type=\"text\" id=\"companyPerFiscal\" name=\"companyPerFiscal\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPerFiscal"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Condicion Ingresos brutos</label>
\t        <input type=\"text\" id=\"companyCondiibb\" name=\"companyCondiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCondiibb"), "html", null, true);
        echo "\">
\t    </td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Numero Ingresos Brutos</label>
\t        <input type=\"text\" id=\"companyNiibb\" name=\"companyNiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNiibb"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Actividad</label>
\t        <input type=\"text\" id=\"companyActividad\" name=\"companyActividad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActividad"), "html", null, true);
        echo "\">
\t    </td>
\t    <td colspan=2>
\t        <label>Observaciones</label>
\t        <textarea type=\"text\" id=\"companyObservaciones\" name=\"companyObservaciones\" class=\"input-xlarge\" data-trigger=\"change\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyObservaciones"), "html", null, true);
        echo "</textarea>
\t    </td>
\t</tr>
\t<tr>
\t<td colspan=4>
\t        <legend>Datos de Usuario Titular</legend>
\t</td>
\t</tr>
\t<tr>
\t    <td>
\t        <label>Nombre del Titular</label>
\t        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreTitular"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Apellido del Titular</label>
\t        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyApellidoTitular"), "html", null, true);
        echo "\">
\t    </td>
\t    <td>
\t        <label>Mail del Titular</label>
\t        <input type=\"text\" id=\"userMail\" name=\"userMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyMail"), "html", null, true);
        echo "\">
\t    </td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Usuario Titular</label>
\t        <input type=\"text\" id=\"userName\" name=\"userName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyUsuarioTitular"), "html", null, true);
        echo "\">
\t\t</td>
\t\t<td>
\t        <label>Password</label>
\t        <input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\">
\t\t</td>
\t\t<td colspan=2>
";
        // line 119
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            echo "        
        <label>Activa</label>
        <input type=\"number\" min=\"0\" max=\"1\" id=\"companyActive\" name=\"companyActive\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive"), "html", null, true);
            echo "\">
";
        } else {
            // line 123
            echo "\t\t<label id=\"companyStatus\">El estado de su empresa es: <bold>ACTIVA</bold></label>
        <input readonly type=\"Hidden\" min=\"0\" max=\"1\" id=\"companyActive\" name=\"companyActive\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive"), "html", null, true);
            echo "\">
";
        }
        // line 125
        echo "  
\t\t</td>
\t</tr>
\t<tr>
\t\t<td colspan=4>
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
        </div>
        </td>
\t</tr>
</table>
    </form>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Default:editCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  244 => 124,  236 => 121,  231 => 119,  124 => 51,  245 => 83,  211 => 70,  205 => 102,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 83,  165 => 53,  146 => 45,  76 => 1,  104 => 2,  100 => 41,  34 => 5,  207 => 76,  184 => 87,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 106,  210 => 68,  197 => 66,  170 => 79,  161 => 73,  155 => 49,  134 => 41,  129 => 39,  110 => 43,  77 => 25,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 20,  206 => 81,  198 => 98,  188 => 68,  180 => 86,  174 => 84,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 12,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 123,  229 => 97,  220 => 70,  214 => 71,  177 => 83,  169 => 82,  140 => 61,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 112,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 61,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 24,  67 => 19,  63 => 14,  59 => 17,  38 => 6,  94 => 33,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 29,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 6,  44 => 11,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 48,  142 => 52,  138 => 42,  136 => 42,  121 => 38,  117 => 47,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 24,  69 => 16,  47 => 17,  40 => 6,  37 => 6,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 55,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 37,  98 => 30,  96 => 34,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 8,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 67,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 69,  149 => 51,  147 => 65,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 43,  109 => 47,  106 => 36,  103 => 37,  99 => 29,  95 => 39,  92 => 38,  86 => 27,  82 => 26,  80 => 25,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 11,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
