<?php

/* LineasTelefonicasPoliciaERBundle:Default:newLineas.html.twig */
class __TwigTemplate_ace8519fd55504c4da86320d1b523fbaf6ab3fcd92f3e07b6d4d38ecde39a2ac extends Twig_Template
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

<h2>Agregue los datos de la nueva linea</h2>


\t\t
\t\t
\t\t
\t\t<div class=\"agregaObjeto\" id=\"agregaObjeto\" >
\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 15
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
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 28
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
        // line 30
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
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinos"]) ? $context["destinos"] : $this->getContext($context, "destinos")));
        foreach ($context['_seq'] as $context["_key"] => $context["destino"]) {
            // line 42
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
        // line 44
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
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 92
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
        // line 94
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t<label>BlackBerry</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaBlackberry\" id=\"lineaBlackberry\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 100
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
        // line 102
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Roaming</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaRoaming\" id=\"lineaRoaming\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 110
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
        // line 112
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t\t<textarea id=\"lineaObservaciones\" name=\"lineaObservaciones\"></textarea>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<table>

\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Agregar</button>
\t\t\t</form>
\t\t</div>
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:newLineas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 112,  208 => 110,  204 => 109,  195 => 102,  184 => 100,  180 => 99,  173 => 94,  162 => 92,  158 => 91,  109 => 44,  98 => 42,  94 => 41,  81 => 30,  70 => 28,  66 => 27,  51 => 15,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
