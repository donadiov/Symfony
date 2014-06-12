<?php

/* LineasTelefonicasPoliciaERBundle:Default:listPlanes.html.twig */
class __TwigTemplate_fdba19d97b89c890853ac0860984721b3fd0da3461ef1220d0087b80c2f2a1bb extends Twig_Template
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

<h2>Planes</h2>

\t\t<table>
   \t\t\t<caption>Lista de Planes de servicio</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>Plan</th>
\t\t         <th>Empresa</th>
\t\t         <th>Credito</th>
\t\t         <th>Minutos (voz)</th>
\t\t         <th>Mensajes (SMS)</th>
\t\t         <th>Internet (MB)</th>
\t\t         <th>Costo Total</th>
\t\t         <th>Accion</th>
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planes"]) ? $context["planes"] : $this->getContext($context, "planes")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 26
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
\t\t      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planNombre"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planEmpresa"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planCredito"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planMinutos"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planSMS"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planInternet"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planMonto"), "html", null, true);
            echo "</td>

\t\t      \t\t\t\t<td>
\t\t\t\t\t\t\t\t<a style=\"display: block;\" class=\"btn btneliminar\" id=\"btnPopUp";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUp";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t  \tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\$('.eliminaObjeto";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnClose";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>
\t\t\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deletePlanes");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar el Plan ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planNombre"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"planId\" name=\"planId\" class=\"input-xlarge\" readonly value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"planNombre\" name=\"planNombre\" class=\"input-xlarge\" readonly value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planNombre"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnClose";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plan"]) ? $context["plan"] : $this->getContext($context, "plan")), "planId"), "html", null, true);
            echo "\">Cancelar</span>
\t\t\t\t\t\t\t\t    </form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<button class=\"btn btn-primary\" id=\"btnPopUpPlan\">Nuevo Plan</button>
\t\t
\t\t
\t\t
\t\t<div class=\"agregaObjeto\" id=\"agregaObjeto\" hidden>
\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listPlanes");
        echo "\" data-validate=\"parsley\">
\t\t\t\t<h2>Ingrese los datos del Plan</h2>
\t\t\t\t<label>Nombre de Plan</label>
\t\t\t\t<input type=\"text\" id=\"planNombre\" name=\"planNombre\" class=\"input-xlarge\">

\t\t\t\t<label>Empresa</label>
\t\t        <select type=\"text\" name=\"planEmpresa\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
\t\t        \t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 82
            echo "\t   \t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t</select>
\t\t\t\t<label>Credito</label>
\t\t\t\t<input type=\"text\" id=\"planCredito\" name=\"planCredito\" class=\"input-xlarge\">
\t\t\t\t<label>Minutos</label>
\t\t\t\t<input type=\"text\" id=\"planMinutos\" name=\"planMinutos\" class=\"input-xlarge\">
\t\t\t\t<label>Mensajes</label>
\t\t\t\t<input type=\"text\" id=\"planSMS\" name=\"planSMS\" class=\"input-xlarge\">
\t\t\t\t<label>Internet</label>
\t\t\t\t<input type=\"text\" id=\"planInternet\" name=\"planInternet\" class=\"input-xlarge\">
\t\t\t\t<label>Monto</label>
\t\t\t\t<input type=\"text\" id=\"planMonto\" name=\"planMonto\" class=\"input-xlarge\">
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Agregar</button>
\t\t\t\t<span class=\"btn\" id=\"btnClosePlanForm\">Cancelar</span>
\t\t\t</form>
\t\t</div>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"#btnPopUpPlan\").click(function(){
\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\$('.agregaObjeto').css({
\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t});
\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t\t\$(\"#btnClosePlanForm\").click(function(){
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t});
\t\t</script>
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listPlanes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 84,  214 => 82,  210 => 81,  200 => 74,  191 => 67,  170 => 60,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  149 => 54,  141 => 49,  137 => 48,  131 => 45,  124 => 41,  119 => 39,  113 => 36,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  78 => 26,  61 => 25,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
