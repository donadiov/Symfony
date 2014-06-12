<?php

/* LineasTelefonicasPoliciaERBundle:Default:resultadoBusqueda.html.twig */
class __TwigTemplate_a08b839394fc9dfbd460bae54cecb1ccd6087f7422f045f7b6f38a6ea828d9f5 extends Twig_Template
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

<h2>Resultado de la busqueda</h2>

\t\t<table>
   \t\t\t<caption>Lista de Lineas Telefonicas</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>Numero</th>
\t\t         <th>Empresa</th>
\t\t         <th>Plan</th>
\t\t         <th>Destino</th>
\t\t         <th>Cargo</th>
\t\t         <th>Marca</th>
\t\t         <th>Modelo</th>
\t\t         <th>Ult. Cambio</th>
\t\t         <th>Acction</th>
\t\t         
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineas"]) ? $context["lineas"] : $this->getContext($context, "lineas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 28
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
\t\t      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaPlan"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaCargo"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaMarca"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaModelo"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btneliminar\" id=\"btnPopUpElimina";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUpElimina";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t  \tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\$('.eliminaObjeto";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnCloseElimina";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>
\t\t\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deleteLineas");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar la Linea ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"lineaId\" name=\"lineaId\" class=\"input-xlarge\" readonly value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnCloseElimina";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Cancelar</span>
\t\t\t\t\t\t\t\t    </form>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<a class=\"btn btnDetalles\" id=\"btnPopUpDetalles";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Detalles</a>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUpDetalles";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t  \tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\$('.detallesObjeto";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t     \$(\".detallesObjeto";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnCloseDetalles";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".detallesObjeto";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"detallesObjeto";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\" id=\"detallesObjeto\" hidden>
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Numero:</span> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Empresa:</span> ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Plan:</span>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaPlan"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Destino:</span> ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Cargo:</span> ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaCargo"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>IMEI:</span> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaIMEI"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Marca:</span> ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaMarca"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Modelo:</span> ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaModelo"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Ultimo Cambio:</span> ";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Voz:</span> \$ ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaVoz"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>SMS:</span> \$ ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaSms"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>GPRS:</span> \$ ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaGprs"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Datos:</span> ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDatos"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>BlackBerry:</span> ";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaBlackberry"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Roaming:</span> ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaRoaming"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Observaciones:</span> ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaObservaciones"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_editLineas");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"lineaId\" name=\"lineaId\" class=\"input-xlarge\" readonly value=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"float:right;\" class=\"btn\" id=\"btnCloseDetalles";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Cerrar</span>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn\" id=\"btnCloseDetalles";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Editar</button>
\t\t\t\t\t\t\t\t    \t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<button class=\"btn btn-primary\" id=\"btnPopUpLinea\">Nueva Linea</button>
\t\t
\t\t
\t\t
\t\t<div class=\"agregaObjeto\" id=\"agregaObjeto\" hidden>
\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 171
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
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 184
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
        // line 186
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
\t\t\t\t\t\t\t<input type=\"text\" id=\"lineaDestino\" name=\"lineaDestino\" class=\"input-xlarge\">
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
        // line 243
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 244
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
        // line 246
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>\t
\t\t\t\t\t\t\t<label>BlackBerry</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaBlackberry\" id=\"lineaBlackberry\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 251
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 252
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
        // line 254
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label>Roaming</label>
\t\t\t\t\t\t\t<select type=\"text\" name=\"lineaRoaming\" id=\"lineaRoaming\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t\t\t\t\t        \t";
        // line 261
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["opciones"]) ? $context["opciones"] : $this->getContext($context, "opciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["opcion"]) {
            // line 262
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
        // line 264
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
\t\t<script>
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
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:resultadoBusqueda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 264,  517 => 262,  513 => 261,  504 => 254,  493 => 252,  489 => 251,  482 => 246,  471 => 244,  467 => 243,  408 => 186,  397 => 184,  393 => 183,  378 => 171,  369 => 164,  346 => 155,  342 => 154,  338 => 153,  334 => 152,  326 => 147,  320 => 144,  312 => 139,  306 => 136,  298 => 131,  292 => 128,  284 => 123,  278 => 120,  270 => 115,  264 => 112,  256 => 107,  250 => 104,  242 => 99,  236 => 96,  228 => 91,  222 => 88,  215 => 84,  206 => 78,  202 => 77,  196 => 74,  189 => 70,  184 => 68,  178 => 65,  171 => 61,  166 => 59,  162 => 58,  158 => 57,  154 => 56,  146 => 51,  142 => 50,  136 => 47,  129 => 43,  124 => 41,  118 => 38,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  80 => 28,  63 => 27,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
