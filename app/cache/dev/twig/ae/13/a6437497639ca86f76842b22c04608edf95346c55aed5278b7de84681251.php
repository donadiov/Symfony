<?php

/* MateriawebMateriaBundle:Default:editUser.html.twig */
class __TwigTemplate_ae13a6437497639ca86f76842b22c04608edf95346c55aed5278b7de84681251 extends Twig_Template
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

    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_listCompany");
        echo "\" data-validate=\"parsley\">
         <h2>Modificando Empresa ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
        echo "</h2>
         
        <input type=\"text\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" readonly value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
        echo "\">
        <label>Razon Social</label>
        <input type=\"text\" id=\"companyRazonSocial\" name=\"companyRazonSocial\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyRazonSocial"), "html", null, true);
        echo "\">
        
        <label>Nombre de Fantasia</label>
        <input type=\"text\" id=\"companyNombreFantasia\" name=\"companyNombreFantasia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
        echo "\">
        
        <label>Clave de empresa</label>
        <input type=\"text\" id=\"companyClave\" name=\"companyClave\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyClave"), "html", null, true);
        echo "\">
        
        <label>Direccion (calle)</label>
        <input type=\"text\" id=\"companyCalle\" name=\"companyCalle\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalle"), "html", null, true);
        echo "\">
        
        <label>Direccoin (Numero)</label>
        <input type=\"text\" id=\"companyCalleNro\" name=\"companyCalleNro\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCalleNro"), "html", null, true);
        echo "\">
        
        <label>Ciudad</label>
        <input type=\"text\" id=\"companyLocalidad\" name=\"companyLocalidad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyLocalidad"), "html", null, true);
        echo "\">
        
        <label>Provincia</label>
        <input type=\"text\" id=\"companyProvincia\" name=\"companyProvincia\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyProvincia"), "html", null, true);
        echo "\">
        
        <label>Pais</label>
        <input type=\"text\" id=\"companyPais\" name=\"companyPais\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPais"), "html", null, true);
        echo "\">
        
        <label>Codigo Postal</label>
        <input type=\"text\" id=\"companyCp\" name=\"companyCp\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCp"), "html", null, true);
        echo "\">
        
        <label>Cuit</label>
        <input type=\"text\" id=\"companyCuit\" name=\"companyCuit\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCuit"), "html", null, true);
        echo "\">
        
        <label>Perfil Fiscal</label>
        <input type=\"text\" id=\"companyPerFiscal\" name=\"companyPerFiscal\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyPerFiscal"), "html", null, true);
        echo "\">
        
        <label>Condicion Ingresos brutos</label>
        <input type=\"text\" id=\"companyCondiibb\" name=\"companyCondiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyCondiibb"), "html", null, true);
        echo "\">
        
        <label>Numero Ingresos Brutos</label>
        <input type=\"text\" id=\"companyNiibb\" name=\"companyNiibb\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNiibb"), "html", null, true);
        echo "\">
        
        <label>Actividad</label>
        <input type=\"text\" id=\"companyActividad\" name=\"companyActividad\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActividad"), "html", null, true);
        echo "\">
        
        <label>Observaciones</label>
        <textarea type=\"text\" id=\"companyObservaciones\" name=\"companyObservaciones\" class=\"input-xlarge\" data-trigger=\"change\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyObservaciones"), "html", null, true);
        echo "</textarea>
        
        <label>Nombre del Titular</label>
        <input type=\"text\" id=\"companyNombreTitular\" name=\"companyNombreTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreTitular"), "html", null, true);
        echo "\">
        
        <label>Apellido del Titular</label>
        <input type=\"text\" id=\"companyApellidoTitular\" name=\"companyApellidoTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyApellidoTitular"), "html", null, true);
        echo "\">
        
        <label>Mail del Titular</label>
        <input type=\"text\" id=\"companyMail\" name=\"companyMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyMail"), "html", null, true);
        echo "\">
        
        <label>Usuario Titular</label>
        <input type=\"text\" id=\"companyUsuarioTitular\" name=\"companyUsuarioTitular\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyUsuarioTitular"), "html", null, true);
        echo "\">
        
        <label>Password</label>
        <input type=\"password\" id=\"companyPasswordTitular\" name=\"companyPasswordTitular\" class=\"input-xlarge\" data-trigger=\"change\">
        
        <label>Activa</label>
        <input type=\"number\" min=\"0\" max=\"1\" id=\"companyActive\" name=\"companyActive\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyActive"), "html", null, true);
        echo "\">
        
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
        </div>
    </form>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  192 => 75,  181 => 85,  160 => 71,  153 => 68,  113 => 45,  97 => 34,  70 => 20,  206 => 81,  198 => 80,  188 => 76,  180 => 71,  174 => 77,  150 => 56,  126 => 50,  114 => 38,  90 => 26,  84 => 23,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 61,  135 => 56,  119 => 48,  102 => 32,  71 => 19,  67 => 19,  63 => 14,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 29,  78 => 25,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 70,  163 => 62,  158 => 67,  156 => 59,  151 => 61,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 25,  72 => 17,  69 => 16,  47 => 9,  40 => 2,  37 => 11,  22 => 1,  246 => 90,  157 => 64,  145 => 58,  139 => 55,  131 => 52,  123 => 47,  120 => 41,  115 => 43,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 29,  83 => 27,  74 => 14,  66 => 19,  55 => 13,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 5,  32 => 26,  29 => 3,  209 => 82,  203 => 80,  199 => 78,  193 => 78,  189 => 74,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 44,  122 => 49,  116 => 41,  112 => 42,  109 => 40,  106 => 36,  103 => 37,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 26,  73 => 22,  64 => 17,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 10,  30 => 7,);
    }
}
