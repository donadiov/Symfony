<?php

/* MateriawebMateriaBundle:Default:editCompany.html.twig */
class __TwigTemplate_10bb28e67ffdd27e9baac6dcc13e8a39f682127b70ff26c221f928d7c2640518 extends Twig_Template
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
        echo "<div class=\"container\" >

";
        // line 5
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            // line 6
            echo "    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_listCompany");
            echo "\" data-validate=\"parsley\">
";
        } else {
            // line 8
            echo "\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materiaweb_materia_editMyCompany");
            echo "\" data-validate=\"parsley\">
";
        }
        // line 10
        echo "         <h2>Modificando Empresa ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
        echo "</h2>
";
        // line 11
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            echo "         
        <input type=\"text\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" readonly value=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "\">
";
        } else {
            // line 14
            echo "\t\t<input type=\"Hidden\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" readonly value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
            echo "\">
";
        }
        // line 16
        echo "        <label>Razon Social</label>
        <input type=\"text\" id=\"companyRazonSocial\" name=\"companyRazonSocial\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyRazonSocial"), "html", null, true);
        echo "\">
        
        <label>Nombre de Fantasia</label>
        <input type=\"text\" id=\"companyNombreFantasia\" name=\"companyNombreFantasia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
        echo "\">
        
        <label>Clave de empresa</label>
        <input type=\"text\" id=\"companyClave\" name=\"companyClave\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyClave"), "html", null, true);
        echo "\">
        
        <label>Direccion (calle)</label>
        <input type=\"text\" id=\"companyCalle\" name=\"companyCalle\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalle"), "html", null, true);
        echo "\">
        
        <label>Direccoin (Numero)</label>
        <input type=\"text\" id=\"companyCalleNro\" name=\"companyCalleNro\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalleNro"), "html", null, true);
        echo "\">
        
        <label>Ciudad</label>
        <input type=\"text\" id=\"companyLocalidad\" name=\"companyLocalidad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyLocalidad"), "html", null, true);
        echo "\">
        
        <label>Provincia</label>
        <input type=\"text\" id=\"companyProvincia\" name=\"companyProvincia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyProvincia"), "html", null, true);
        echo "\">
        
        <label>Pais</label>
        <input type=\"text\" id=\"companyPais\" name=\"companyPais\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPais"), "html", null, true);
        echo "\">
        
        <label>Codigo Postal</label>
        <input type=\"text\" id=\"companyCp\" name=\"companyCp\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCp"), "html", null, true);
        echo "\">
        
        <label>Cuit</label>
        <input type=\"text\" id=\"companyCuit\" name=\"companyCuit\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCuit"), "html", null, true);
        echo "\">
        
        <label>Perfil Fiscal</label>
        <input type=\"text\" id=\"companyPerFiscal\" name=\"companyPerFiscal\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPerFiscal"), "html", null, true);
        echo "\">
        
        <label>Condicion Ingresos brutos</label>
        <input type=\"text\" id=\"companyCondiibb\" name=\"companyCondiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCondiibb"), "html", null, true);
        echo "\">
        
        <label>Numero Ingresos Brutos</label>
        <input type=\"text\" id=\"companyNiibb\" name=\"companyNiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNiibb"), "html", null, true);
        echo "\">
        
        <label>Actividad</label>
        <input type=\"text\" id=\"companyActividad\" name=\"companyActividad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActividad"), "html", null, true);
        echo "\">
        
        <label>Observaciones</label>
        <textarea type=\"text\" id=\"companyObservaciones\" name=\"companyObservaciones\" class=\"input-xlarge\" data-trigger=\"change\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyObservaciones"), "html", null, true);
        echo "</textarea>
        
        <label>Nombre del Titular</label>
        <input type=\"text\" id=\"companyNombreTitular\" name=\"companyNombreTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreTitular"), "html", null, true);
        echo "\">
        
        <label>Apellido del Titular</label>
        <input type=\"text\" id=\"companyApellidoTitular\" name=\"companyApellidoTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyApellidoTitular"), "html", null, true);
        echo "\">
        
        <label>Mail del Titular</label>
        <input type=\"text\" id=\"companyMail\" name=\"companyMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyMail"), "html", null, true);
        echo "\">
        
        <label>Usuario Titular</label>
        <input type=\"text\" id=\"companyUsuarioTitular\" name=\"companyUsuarioTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyUsuarioTitular"), "html", null, true);
        echo "\">
        
        <label>Password</label>
        <input type=\"password\" id=\"companyPasswordTitular\" name=\"companyPasswordTitular\" class=\"input-xlarge\" data-trigger=\"change\">

";
        // line 76
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            echo "        
        <label>Activa</label>
        <input type=\"number\" min=\"0\" max=\"1\" id=\"companyActive\" name=\"companyActive\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive"), "html", null, true);
            echo "\">
";
        } else {
            // line 80
            echo "\t\t<label>El estado de su empresa es: <bold>ACTIVA</bold></label>
        <input readonly type=\"Hidden\" min=\"0\" max=\"1\" id=\"companyActive\" name=\"companyActive\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive"), "html", null, true);
            echo "\">
";
        }
        // line 82
        echo "        
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
        </div>
    </form>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:editCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 82,  198 => 80,  188 => 76,  180 => 71,  174 => 68,  150 => 56,  126 => 44,  114 => 38,  90 => 26,  84 => 23,  58 => 12,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 20,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 81,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 9,  40 => 2,  37 => 6,  22 => 21,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 41,  115 => 43,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 29,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 26,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 78,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 65,  164 => 59,  162 => 62,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 11,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
