<?php

/* LineasTelefonicasPoliciaERBundle:Default:listCompany.html.twig */
class __TwigTemplate_a41ff3897c678f562bf72c6eab15944c6939676911aa7caa05914ca7df496060 extends Twig_Template
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

<h2>Empresas</h2>

\t\t<table>
   \t\t\t<caption>Lista de Empresas Prestadoras de servicio</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>Nombre de Empresa</th>
\t\t         <th>Accion</th>
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) ? $context["empresas"] : $this->getContext($context, "empresas")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 20
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
\t\t      \t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>
\t\t\t\t\t\t\t\t<a style=\"display: block;\" class=\"btn btneliminar\" id=\"btnPopUp";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\">Eliminar</a>
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUp";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnClose";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>
\t\t\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deleteCompany");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar la Empresa ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaNombre"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"empresaId\" name=\"empresaId\" class=\"input-xlarge\" readonly value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnClose";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["empresa"]) ? $context["empresa"] : $this->getContext($context, "empresa")), "empresaId"), "html", null, true);
            echo "\">Cancelar</span>
\t\t\t\t\t\t\t\t    </form>
\t\t
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<button class=\"btn btn-primary\" id=\"btnPopUpEmpresa\">Nueva Empresa</button>
\t\t
\t\t
\t\t
\t\t<div class=\"agregaObjeto\" id=\"agregaObjeto\" hidden>
\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listCompany");
        echo "\" data-validate=\"parsley\">
\t\t\t\t<span>Ingrese el nombre de la Empresa</span>
\t\t\t\t<input type=\"text\" id=\"empresaNombre\" name=\"empresaNombre\" class=\"input-xlarge\">\t\t\t
\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Agregar</button>
\t\t\t\t<span class=\"btn\" id=\"btnCloseEmpresaForm\">Cancelar</span>
\t\t\t</form>
\t\t</div>
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"#btnPopUpEmpresa\").click(function(){
\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\$('.agregaObjeto').css({
\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\theight:  \$body.height()
\t\t\t\t});
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\$(\"#btnCloseEmpresaForm\").click(function(){
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t});
\t\t</script>
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listCompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 56,  149 => 49,  127 => 41,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  102 => 31,  98 => 30,  92 => 27,  88 => 26,  82 => 23,  77 => 21,  72 => 20,  55 => 19,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
