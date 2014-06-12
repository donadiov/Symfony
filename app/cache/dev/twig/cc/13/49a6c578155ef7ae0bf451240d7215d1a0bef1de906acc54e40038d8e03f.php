<?php

/* MateriaSqlBundle:Default:form-company.html.twig */
class __TwigTemplate_cc1349a6c578155ef7ae0bf451240d7215d1a0bef1de906acc54e40038d8e03f extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<div class=\"container\" >

    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("materia_sql_new_company");
        echo "\" data-validate=\"parsley\">

        <h2>Cree su empresa</h2>
<table>
\t<tr>
\t<td colspan=4>
\t\t<legend>Datos de la Empresa</legend>
\t</td>\t
\t</tr>
\t<tr>
\t\t<td>\t\t\t      
\t        <label>Razon Social</label>
\t        <input type=\"text\" id=\"companyRazonSocial\" name=\"companyRazonSocial\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t    <td>    
\t        <label>Nombre de Fantasia</label>
\t        <input type=\"text\" id=\"companyNombreFantasia\" name=\"companyNombreFantasia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t    <td>
\t        <label>Clave de empresa</label>
\t        <input type=\"text\" id=\"companyClave\" name=\"companyClave\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
\t\t\t<small style=\"display:none;\">La clave de empresa se compnoe de 10 caracteres consecutivos. </small>
\t    </td>
\t    <td>
\t        <label>Direccion (calle)</label>
\t        <input type=\"text\" id=\"companyCalle\" name=\"companyCalle\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t</tr>
\t<tr>
\t    <td>
\t        <label>Direccoin (Numero)</label>
\t        <input type=\"text\" id=\"companyCalleNro\" name=\"companyCalleNro\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t    <td>\t        
\t        <label>Ciudad</label>
\t        <input type=\"text\" id=\"companyLocalidad\" name=\"companyLocalidad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t    <td>
\t\t\t<label>Provincia</label>
\t        <input type=\"text\" id=\"companyProvincia\" name=\"companyProvincia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t    <td>
\t        <label>Pais</label>
\t        <input type=\"text\" id=\"companyPais\" name=\"companyPais\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t</tr>
\t<tr>
\t   <td>
\t        <label>Codigo Postal</label>
\t        <input type=\"text\" id=\"companyCp\" name=\"companyCp\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t   </td>
\t   <td>     
\t        <label>Cuit</label>
\t        <input type=\"text\" id=\"companyCuit\" name=\"companyCuit\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t   </td>
\t   <td>\t        
\t        <label>Perfil Fiscal</label>
\t        <input type=\"text\" id=\"companyPerFiscal\" name=\"companyPerFiscal\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t   </td>
\t   <td>\t        
\t        <label>Condicion Ingresos brutos</label>
\t        <input type=\"text\" id=\"companyCondiibb\" name=\"companyCondiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t   </td>
\t</tr>
\t<tr>
\t   <td>\t        
\t        <label>Numero Ingresos Brutos</label>
\t        <input type=\"text\" id=\"companyNiibb\" name=\"companyNiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t</td>
\t\t<td>
\t        <label>Actividad</label>
\t        <input type=\"text\" id=\"companyActividad\" name=\"companyActividad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t</td>
\t\t<td colspan=\"2\">\t       \t\t
\t        <label>Observaciones</label>
\t        <textarea type=\"text\" id=\"companyObservaciones\" name=\"companyObservaciones\" class=\"input-xlarge\" data-trigger=\"change\"></textarea>
\t\t</td>
\t</tr>
\t<tr>
\t<td colspan=4>
\t\t<legend>Datos de Usuario Titular</legend>\t
\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Nombre del Titular</label>
\t        <input type=\"text\" id=\"companyNombretitular\" name=\"companyNombretitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t</td>
\t\t<td>
\t        <label>Apellido del Titular</label>
\t        <input type=\"text\" id=\"companyApellidoTitular\" name=\"companyApellidoTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t</td>
\t\t<td>
\t        <label>Mail del Titular</label>
\t        <input type=\"text\" id=\"companyMail\" name=\"companyMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
\t\t</td>
\t</tr>
\t<tr>
\t\t<td>
\t        <label>Usuario Titular</label>
\t        <input type=\"text\" id=\"companyUsuarioTitular\" name=\"companyUsuarioTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t</td>
\t\t<td>\t        
\t        <label>Password</label>
\t        <input type=\"password\" id=\"companyPasswordTitular\" name=\"companyPasswordTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t    </td>
\t\t<td>   
\t        <div>
\t         <button class=\"btn btn-primary\" type=\"submit\" >crear Empresa</button>
\t        </div>
\t\t</td>
\t</tr>
</table>


    </form>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Default:form-company.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  244 => 124,  236 => 121,  231 => 119,  124 => 51,  245 => 83,  211 => 70,  205 => 102,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 83,  165 => 53,  146 => 45,  76 => 1,  104 => 32,  100 => 41,  34 => 5,  207 => 76,  184 => 87,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 106,  210 => 68,  197 => 66,  170 => 79,  161 => 73,  155 => 49,  134 => 41,  129 => 39,  110 => 43,  77 => 19,  127 => 41,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 38,  97 => 30,  70 => 20,  206 => 81,  198 => 98,  188 => 68,  180 => 86,  174 => 84,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 12,  53 => 12,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 123,  229 => 97,  220 => 70,  214 => 71,  177 => 83,  169 => 82,  140 => 45,  132 => 43,  128 => 49,  107 => 31,  61 => 14,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 112,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 61,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 24,  67 => 16,  63 => 14,  59 => 13,  38 => 6,  94 => 33,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 29,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 6,  44 => 11,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 48,  142 => 52,  138 => 42,  136 => 42,  121 => 38,  117 => 39,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 18,  69 => 16,  47 => 17,  40 => 6,  37 => 6,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 55,  123 => 40,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 37,  98 => 29,  96 => 34,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 8,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 67,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 69,  149 => 51,  147 => 47,  144 => 53,  141 => 48,  133 => 52,  130 => 42,  125 => 38,  122 => 37,  116 => 36,  112 => 43,  109 => 47,  106 => 36,  103 => 37,  99 => 29,  95 => 39,  92 => 26,  86 => 23,  82 => 21,  80 => 25,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 11,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
