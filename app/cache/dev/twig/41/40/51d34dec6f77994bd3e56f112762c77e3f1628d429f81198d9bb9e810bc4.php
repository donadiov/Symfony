<?php

/* LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig */
class __TwigTemplate_414051d34dec6f77994bd3e56f112762c77e3f1628d429f81198d9bb9e810bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LineasTelefonicasPoliciaERBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LineasTelefonicasPoliciaERBundle:Default:index.html.twig";
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
    <h2>Bienvenido ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginNombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginApellido"), "html", null, true);
        echo "<small> - Rol: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "Rol"), "html", null, true);
        echo "</small></h2>
    \t<form id=\"form\" class=\"well2\" style=\"float:left;\" method=\"POST\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_buscaLineaNro");
        echo "\" data-validate=\"parsley\">
\t\t\t<label>Buscar Nro. de Linea: 
\t\t\t\t<input type=\"text\" id=\"lineaNumero\" name=\"lineaNumero\" class=\"input-xlarge\"/>
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Buscar</button>
\t\t\t</label>
\t    </form>
\t    
\t    
\t    <form id=\"well\" class=\"well2\" method=\"POST\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_buscaLineaDestino");
        echo "\" data-validate=\"parsley\">
\t\t\t<label>ver Lineas por destino: 
\t\t\t\t<select type=\"text\" name=\"lineaDestino\" id=\"lineaDestino\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" >
\t\t        \t\t<option>Seleccione</option>
\t\t        \t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinos"]) ? $context["destinos"] : $this->getContext($context, "destinos")));
        foreach ($context['_seq'] as $context["_key"] => $context["destino"]) {
            // line 21
            echo "   \t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t</select>
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Buscar</button>
\t\t\t</label>
\t    </form>

\t    <table class=\"botonera\">
\t    \t<tr>
\t    \t\t<td>
\t    \t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listLineas");
        echo "\"><button class=\"btn btn-primary\">Ver todas las Lineas</button></a>
\t    \t\t</td>
\t    \t\t<td>
\t    \t\t\t<button class=\"btn btn-primary\" id=\"btnPopUpLinea\">Nueva Linea</button>
\t    \t\t</td>
\t    \t</tr>
\t    </table>

\t    <script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"#btnPopUpLinea\").click(function(){
\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\$('.agregaObjeto').css({
\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t});
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\$(\"#btnCloseLineaForm\").click(function(){
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t});
\t\t</script>
\t    
\t    <div class=\"agregaObjeto\" id=\"agregaObjeto\" hidden >
\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_addLineas");
        echo "\" data-validate=\"parsley\">
\t\t\t\t<h2>Ingrese los datos de la Linea</h2>

\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Numero</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaNumero\" name=\"lineaNumero\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Empresa</label>
\t\t\t\t\t        <select type=\"text\" name=\"lineaEmpresa\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 70
            echo "\t\t\t\t\t   \t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Plan</label>
\t\t\t\t\t        <input type=\"text\" id=\"lineaPlan\" name=\"lineaPlan\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Destino</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaDestino\" id=\"lineaDestino\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" >
\t\t\t\t\t        \t";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinos"]) ? $context["destinos"] : $this->getContext($context, "destinos")));
        foreach ($context['_seq'] as $context["_key"] => $context["destino"]) {
            // line 84
            echo "\t\t\t   \t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Cargo</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaCargo\" name=\"lineaCargo\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>IMEI</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaIMEI\" name=\"lineaIMEI\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaMarca\" name=\"lineaMarca\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Modelo</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaModelo\" name=\"lineaModelo\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Ultimo Cambio</label>
\t\t\t\t\t\t\t<input type=\"date\" id=\"lineaUltimoCambio\" name=\"lineaUltimoCambio\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Voz (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaVoz\" name=\"lineaVoz\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>SMS (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaSms\" name=\"lineaSms\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>GPRS (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaGprs\" name=\"lineaGprs\" class=\"input-xlarge\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Datos</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaDatos\" id=\"lineaDatos\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 134
            echo "\t\t\t\t\t   \t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t<label>BlackBerry</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaBlackberry\" id=\"lineaBlackberry\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 141
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 142
            echo "\t\t\t\t\t   \t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Roaming</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaRoaming\" id=\"lineaRoaming\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 151
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 152
            echo "\t\t\t\t\t   \t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t\t<textarea id=\"lineaObservaciones\" name=\"lineaObservaciones\"></textarea>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<table>

\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Agregar</button>
\t\t\t\t<span class=\"btn\" id=\"btnCloseLineaForm\">Cancelar</span>
\t\t\t</form>
\t\t</div>
    
    
    
 </div>
 
 ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 154,  280 => 152,  276 => 151,  267 => 144,  256 => 142,  252 => 141,  245 => 136,  234 => 134,  230 => 133,  181 => 86,  170 => 84,  166 => 83,  153 => 72,  142 => 70,  138 => 69,  123 => 57,  94 => 31,  84 => 23,  73 => 21,  69 => 20,  62 => 16,  51 => 8,  43 => 7,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
