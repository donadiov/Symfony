<?php

/* LineasTelefonicasPoliciaERBundle:Default:listLineasHistorico.html.twig */
class __TwigTemplate_92e330ccf9a88cd47bae7f9692a34401db2445a0a2c7c881a04cdf2785a85f15 extends Twig_Template
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

<h2>Historico Lineas Telefonicas</h2>

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
   \t\t<caption>Lista del historico de Lineas Telefonicas</caption>
\t\t\t<thead>
\t\t      \t<tr>
\t\t         \t<th>Numero</th>
\t\t         \t<th>Empresa</th>
\t\t         \t<th>Plan</th>
\t\t        \t<th>Destino</th>
\t\t         \t<th>Cargo</th>
\t\t         \t<th>Ult. Cambio</th>
\t\t         \t<th>Usuario</th>
\t\t        \t<th>Accion</th>
\t\t        \t<th>Detalles</th>
\t\t    \t</tr>
\t   \t\t</thead>
\t   \t\t<tfoot>
\t            <tr>
\t\t         \t<th>Numero</th>
\t\t         \t<th>Empresa</th>
\t\t         \t<th>Plan</th>
\t\t        \t<th>Destino</th>
\t\t         \t<th>Cargo</th>
\t\t         \t<th>Ult. Cambio</th>
\t\t         \t<th>Usuario</th>
\t\t        \t<th>Accion</th>
\t\t        \t<th>Detalles</th>
\t\t    \t</tr>
        </tfoot>
   \t\t\t<tbody>
\t\t    \t";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historicos"]) ? $context["historicos"] : $this->getContext($context, "historicos")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["historico"]) {
            // line 63
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo " visible\"  style=\"display: table-row;\">
\t\t      \t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoNumero"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoEmpresa"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoPlan"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoDestino"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoCargo"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoUsuario"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoAccion"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>
\t\t\t      \t\t\t\t<table>
\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t      \t\t\t\t\t<a class=\"btn btnDetalles\" id=\"btnPopUpDetalles";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\"><img style=\"width:20px;\" src=\"/bundles/LineasTelefonicasPoliciaER/images/detalles.png\"/></a>
\t\t\t\t      \t\t\t\t</tr>
\t\t\t      \t\t\t\t</table>
\t\t      \t\t\t\t</td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t
\t\t\t\t\t\t\t\t";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historicos"]) ? $context["historicos"] : $this->getContext($context, "historicos")));
        foreach ($context['_seq'] as $context["_key"] => $context["historico"]) {
            // line 85
            echo "\t\t\t\t\t\t\t\t<div class=\"detallesObjeto";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\" id=\"detallesObjeto\" hidden>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<section class=\"detalles1\">
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Numero:</span> ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoNumero"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Empresa:</span> ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoEmpresa"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Plan:</span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoPlan"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Destino:</span> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoDestino"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Cargo:</span> ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoCargo"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>IMEI:</span> ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoIMEI"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Marca:</span> ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoMarca"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Modelo:</span> ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoModelo"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Ultimo Cambio:</span> ";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoUltimoCambio"), "d-m-y"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<section class=\"detalles2\">
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Voz:</span> \$ ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoVoz"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>SMS:</span> \$ ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoSms"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>GPRS:</span> \$ ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoGprs"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Datos:</span> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoDatos"), "html", null, true);
            echo "</label>
\t
\t\t\t\t\t\t\t\t\t\t\t\t<label><span>BlackBerry:</span> ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoBlackberry"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Roaming:</span> ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoRoaming"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Observaciones:</span> ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoObservaciones"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Usuario:</span> ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoUsuario"), "html", null, true);
            echo "</label>

\t\t\t\t\t\t\t\t\t\t\t\t<label><span>Accion:</span> ";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "lineaHistoricoAccion"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnCloseDetalles";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\" style=\"position: relative;margin-left: 80%;\">Cancelar</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUpDetalles";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t  \tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\$('.detallesObjeto";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t     \$(\".detallesObjeto";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnCloseDetalles";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".detallesObjeto";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["historico"]) ? $context["historico"] : $this->getContext($context, "historico")), "HistoricoId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['historico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listLineasHistorico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 147,  314 => 142,  310 => 141,  304 => 138,  297 => 134,  292 => 132,  282 => 125,  277 => 123,  272 => 121,  267 => 119,  262 => 117,  257 => 115,  252 => 113,  247 => 111,  242 => 109,  237 => 107,  231 => 104,  226 => 102,  221 => 100,  216 => 98,  211 => 96,  206 => 94,  201 => 92,  196 => 90,  191 => 88,  184 => 85,  180 => 84,  175 => 81,  155 => 75,  148 => 71,  144 => 70,  140 => 69,  136 => 68,  132 => 67,  128 => 66,  124 => 65,  120 => 64,  115 => 63,  98 => 62,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
