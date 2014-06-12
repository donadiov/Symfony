<?php

/* LineasTelefonicasPoliciaERBundle:Default:editLinea.html.twig */
class __TwigTemplate_bbd3b14253e823696b1c81288c3a0831ebf81e1ee03534c59cde785f36fa8abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LineasTelefonicasPoliciaERBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\" >


    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listLineas");
        echo "\" data-validate=\"parsley\">
\t\t\t\t<h2>Modificando linea ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
        echo "</h2>

\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"lineaId\" name=\"lineaId\" class=\"input-xlarge\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
        echo " readonly\">
\t\t\t\t\t\t\t<label>Numero</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaNumero\" name=\"lineaNumero\" class=\"input-xlarge\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Empresa</label>
\t\t\t\t\t        <select type=\"text\" name=\"lineaEmpresa\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t\t\t\t\t        \t\t<option value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t        \t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 21
            echo "\t\t\t\t\t\t        \t\t";
            if (($this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre") != $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"))) {
                // line 22
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Plan</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaPlan\" name=\"lineaPlan\" class=\"input-xlarge\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaPlan"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Destino</label>
\t\t\t\t\t\t\t<select type=\"text\" id=\"lineaDestino\" name=\"lineaDestino\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t\t\t\t\t        
\t\t\t\t\t\t        <option value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
        echo "</option>
\t\t\t\t\t\t        \t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["destinos"]) ? $context["destinos"] : $this->getContext($context, "destinos")));
        foreach ($context['_seq'] as $context["_key"] => $context["destino"]) {
            // line 39
            echo "\t\t\t\t\t\t        \t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino") != $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "DestinoNombre"))) {
                // line 40
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "DestinoNombre"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "DestinoNombre"), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destino'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Cargo</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaCargo\" name=\"lineaCargo\" class=\"input-xlarge\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaCargo"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>IMEI</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaIMEI\" name=\"lineaIMEI\" class=\"input-xlarge\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaIMEI"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Marca</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaMarca\" name=\"lineaMarca\" class=\"input-xlarge\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaMarca"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Modelo</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaModelo\" name=\"lineaModelo\" class=\"input-xlarge\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaModelo"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Ultimo Cambio</label>
\t\t\t\t\t\t\t<input type=\"date\" id=\"lineaUltimoCambio\" name=\"lineaUltimoCambio\" class=\"input-xlarge\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "Y-m-d"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Voz (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaVoz\" name=\"lineaVoz\" class=\"input-xlarge\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaVoz"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>SMS (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaSms\" name=\"lineaSms\" class=\"input-xlarge\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaSms"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>GPRS (\$)</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaGprs\" name=\"lineaGprs\" class=\"input-xlarge\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaGprs"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Datos</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaDatos\" id=\"lineaDatos\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" >
\t\t\t\t\t\t        \t";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 92
            echo "\t\t\t\t\t\t        \t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDatos") == $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 93
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDatos"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t\t\t   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 97
            echo "\t\t\t\t\t   \t\t\t\t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDatos") != $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 98
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t<label>BlackBerry</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaBlackberry\" id=\"lineaBlackberry\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t\t\t\t\t        \t";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 107
            echo "\t\t\t\t\t\t        \t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaBlackberry") == $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 108
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaBlackberry"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t\t   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 112
            echo "\t\t\t\t\t   \t\t\t\t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaBlackberry") != $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 113
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Roaming</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaRoaming\" id=\"lineaRoaming\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t\t\t\t\t        \t";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 124
            echo "\t\t\t\t\t\t        \t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaRoaming") == $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 125
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaRoaming"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t\t   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t\t   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 129
            echo "\t\t\t\t\t   \t\t\t\t\t";
            if (($this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaRoaming") != $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"))) {
                // line 130
                echo "\t\t\t\t\t   \t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["opcion"]) ? $context["opcion"] : $this->getContext($context, "opcion")), "opcionesSNValue"), "html", null, true);
                echo "</option>
\t\t\t\t\t   \t\t\t\t\t";
            }
            // line 132
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opcion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Observaciones</label>
\t\t\t\t\t\t\t<textarea id=\"lineaObservaciones\" name=\"lineaObservaciones\" >";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaObservaciones"), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t<table>

\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
\t\t\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:editLinea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 137,  351 => 133,  345 => 132,  337 => 130,  334 => 129,  329 => 128,  323 => 127,  315 => 125,  312 => 124,  308 => 123,  299 => 116,  293 => 115,  285 => 113,  282 => 112,  277 => 111,  271 => 110,  263 => 108,  260 => 107,  256 => 106,  249 => 101,  243 => 100,  235 => 98,  232 => 97,  227 => 96,  221 => 95,  213 => 93,  210 => 92,  206 => 91,  196 => 84,  189 => 80,  180 => 74,  173 => 70,  164 => 64,  157 => 60,  148 => 54,  141 => 50,  132 => 43,  126 => 42,  118 => 40,  115 => 39,  111 => 38,  105 => 37,  96 => 31,  88 => 25,  82 => 24,  74 => 22,  71 => 21,  67 => 20,  61 => 19,  53 => 14,  48 => 12,  40 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
