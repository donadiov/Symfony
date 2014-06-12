<?php

/* LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig */
class __TwigTemplate_d70925fc31f1c8cc643681b48591f515f499ac5218670d73b13d67f52e59c0b7 extends Twig_Template
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


<h2>Lineas Telefonicas</h2>

<script>
\$(document).ready(function() {
    // Setup - add a text input to each footer cell
    \$('#lineas tfoot th').each( function () {
        var title = \$('#lineas thead th').eq( \$(this).index() ).text();
        \$(this).html( '<input type=\"text\" placeholder=\"'+title+'\" />' );
    } );
 
    // DataTable
    var table = \$('#lineas').DataTable();
 
    // Apply the filter
    table.columns().eq( 0 ).each( function ( colIdx ) {
        \$( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
            table
                .column( colIdx )
                .search( this.value )
                .draw();
        } );
    } );
} );
</script>

\t<table id=\"lineas\" class=\"display\" cellspacing=\"0\" width=\"100%\">
   \t\t<caption>Lista de Lineas Telefonicas</caption>
   \t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t <th>Numero</th>
\t\t\t\t\t <th>Empresa</th>
\t\t\t\t\t <th>Plan</th>
\t\t\t\t\t <th>Destino</th>
\t\t\t\t\t <th>Cargo</th>
\t\t\t\t\t <th>Marca</th>
\t\t\t\t\t <th>Modelo</th>
\t\t\t\t\t <th>Ult. Cambio</th>
\t\t\t\t\t <th>Accion</th>
\t\t      \t\t</tr>
   \t\t\t</thead>
   \t\t\t<tfoot>
\t\t\t\t<tr>
\t\t\t\t\t <th>Numero</th>
\t\t\t\t\t <th>Empresa</th>
\t\t\t\t\t <th>Plan</th>
\t\t\t\t\t <th>Destino</th>
\t\t\t\t\t <th>Cargo</th>
\t\t\t\t\t <th>Marca</th>
\t\t\t\t\t <th>Modelo</th>
\t\t\t\t\t <th>Ult. Cambio</th>
\t\t\t\t\t <th>Accion</th>
\t\t      \t\t</tr>
   \t\t\t</tfoot>
   \t\t\t<tbody>
\t\t    \t\t";
        // line 63
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
            // line 64
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo " visible\"  style=\"display: table-row;\">
\t\t      \t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaPlan"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaCargo"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaMarca"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaModelo"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>
\t\t\t      \t\t\t\t<table>
\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t      \t\t\t\t\t<a class=\"btn btnDetalles\" id=\"btnPopUpDetalles";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\"><img style=\"width:20px;\" src=\"/bundles/LineasTelefonicasPoliciaER/images/detalles.png\"/></a>
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btneliminar\" id=\"btnPopUpElimina";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\"><img style=\"width:20px;\" src=\"/bundles/LineasTelefonicasPoliciaER/images/cancel.png\"/></a>
\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t\t\t\$(\"#btnPopUpDetalles";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\t\t\$('.detallesObjeto";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\$(\".detallesObjeto";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle();
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\$(\"#btnCloseDetalles";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t\t\t\t\$(\".detallesObjeto";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\t\t\$(\"#btnPopUpElimina";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\t\$('.eliminaObjeto";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\$(\".eliminaObjeto";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\$(\"#btnCloseElimina";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t\t\t\$(\".eliminaObjeto";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t      \t\t\t\t</tr>
\t\t\t      \t\t\t\t</table>
\t\t      \t\t\t\t</td>
\t\t\t\t\t</tr>
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
        // line 113
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<button class=\"btn btn-primary\" id=\"btnPopUpLinea\">Nueva Linea</button>
\t\t
\t\t";
        // line 117
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineas"]) ? $context["lineas"] : $this->getContext($context, "lineas")));
        foreach ($context['_seq'] as $context["_key"] => $context["linea"]) {
            // line 118
            echo "\t\t\t<div class=\"detallesObjeto";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\" id=\"detallesObjeto\" hidden>
\t\t\t<div>
\t\t\t\t<label><span>Numero:</span> ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Empresa:</span> ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaEmpresa"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Plan:</span>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaPlan"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Destino:</span> ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDestino"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Cargo:</span> ";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaCargo"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>IMEI:</span> ";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaIMEI"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Marca:</span> ";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaMarca"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Modelo:</span> ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaModelo"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Ultimo Cambio:</span> ";
            // line 136
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Voz:</span> \$ ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaVoz"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>SMS:</span> \$ ";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaSms"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>GPRS:</span> \$ ";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaGprs"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Datos:</span> ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaDatos"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>BlackBerry:</span> ";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaBlackberry"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Roaming:</span> ";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaRoaming"), "html", null, true);
            echo "</label>

\t\t\t\t<label><span>Observaciones:</span> ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaObservaciones"), "html", null, true);
            echo "</label>

\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_editLineas");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t<input type=\"Hidden\" id=\"lineaId\" name=\"lineaId\" class=\"input-xlarge\" readonly value=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">
\t\t\t\t\t<span style=\"float:right;\" class=\"btn\" id=\"btnCloseDetalles";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Cerrar</span>
\t\t\t\t\t<button type=\"submit\" class=\"btn\" id=\"btnCloseDetalles";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Editar</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"eliminaObjeto";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>
\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 160
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deleteLineas");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t<span>Esta seguro que desea eliminar la Linea ";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaNumero"), "html", null, true);
            echo "</span>
\t\t\t\t\t<input type=\"Hidden\" id=\"lineaId\" name=\"lineaId\" class=\"input-xlarge\" readonly value=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">
\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t<span class=\"btn\" id=\"btnCloseElimina";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["linea"]) ? $context["linea"] : $this->getContext($context, "linea")), "lineaId"), "html", null, true);
            echo "\">Cancelar</span>
\t\t\t\t</form>
\t\t\t</div>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
 </div> 
";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listLineas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 169,  372 => 164,  367 => 162,  363 => 161,  359 => 160,  355 => 159,  348 => 155,  344 => 154,  340 => 153,  336 => 152,  331 => 150,  326 => 148,  321 => 146,  316 => 144,  311 => 142,  306 => 140,  301 => 138,  296 => 136,  291 => 134,  286 => 132,  281 => 130,  276 => 128,  271 => 126,  266 => 124,  261 => 122,  256 => 120,  250 => 118,  246 => 117,  240 => 113,  217 => 104,  213 => 103,  208 => 101,  201 => 97,  196 => 95,  187 => 89,  183 => 88,  178 => 86,  171 => 82,  166 => 80,  160 => 77,  156 => 76,  149 => 72,  145 => 71,  141 => 70,  137 => 69,  133 => 68,  129 => 67,  125 => 66,  121 => 65,  116 => 64,  99 => 63,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
