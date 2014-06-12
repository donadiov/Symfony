<?php

/* LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig */
class __TwigTemplate_cb414ca79a9b9f3a61aa3497915d0dc80d2be0adba6838883323b1cdb28376c4 extends Twig_Template
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

<h2>Destinos disponibles</h2>

\t\t<table>
\t\t\t<thead>
\t\t      <tr>
\t\t         <th colspan=\"6\" style=\"text-align:center;\" >Destinos</th>
\t\t      </tr>
   \t\t\t</thead>
\t\t\t
\t\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["destinos"]) ? $context["destinos"] : $this->getContext($context, "destinos")), 6));
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
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 18
            echo "\t\t\t  <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
\t\t\t  ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")));
            foreach ($context['_seq'] as $context["_key"] => $context["destino"]) {
                // line 20
                echo "\t\t\t    <td><a href=\"#\" id=\"btnPopUpOpciones";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
                echo "</a>
\t\t\t    
\t\t\t    
\t\t\t    <script>
\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\$(\"#btnPopUpOpciones";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\").click(function(){
\t\t\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\$('.editaObjeto";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "').css({
\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\$(\".editaObjeto";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\").toggle(); 
\t\t\t\t\t});
\t\t\t\t\t\t\$(\"#btnCierraOpciones";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\").click(function(){
\t\t\t\t\t\t\$(\".editaObjeto";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\").toggle(); 
\t\t\t\t\t});
\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t\t<div class=\"editaObjeto";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\" id=\"editaObjeto\" hidden>
\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
                // line 39
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_saveDestinos");
                echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"destinoId\" name=\"destinoId\" class=\"input-xlarge\" readonly value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"destinoNombre\" name=\"destinoNombre\" class=\"input-xlarge\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoNombre"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnCierraOpciones";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\">Cancelar</span>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deleteDestinos");
                echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"destinoId\" name=\"destinoId\" class=\"input-xlarge\" readonly value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destino"]) ? $context["destino"] : $this->getContext($context, "destino")), "destinoId"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<label>Desea eliminar este Destino? <button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button></label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t    
\t\t\t    
\t\t\t    </td>
\t\t\t    
\t\t\t    
\t\t\t    
\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destino'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t  </tr>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t</table>
\t\t
\t\t<button class=\"btn btn-primary\" id=\"btnPopUpDestino\">Nuevo Destino</button>
\t\t
\t\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\t\$(\"#btnPopUpDestino\").click(function(){
\t\t\t\t\tvar \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\$('.agregaObjeto').css({
\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t});
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t\t\t\$(\"#btnCloseAgrega\").click(function(){
\t\t\t\t\t\$(\".agregaObjeto\").toggle(); 
\t\t\t\t});
\t\t\t});
\t\t</script>
\t
\t<div class=\"agregaObjeto\" id=\"agregaObjeto\" hidden>
\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listDestinos");
        echo "\" data-validate=\"parsley\">
\t\t\t<label>Nombre de destino: 
\t\t\t\t<input type=\"text\" id=\"destinoNombre\" name=\"destinoNombre\" class=\"input-xlarge\" >
\t\t\t</label>
\t\t\t
\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Agregar</button>
\t\t\t<span class=\"btn\" id=\"btnCloseAgrega\">Cancelar</span>
\t\t</form>
\t</div>
\t\t
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listDestino.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 81,  177 => 60,  162 => 58,  144 => 46,  140 => 45,  135 => 43,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  111 => 34,  107 => 33,  102 => 31,  95 => 27,  90 => 25,  79 => 20,  75 => 19,  70 => 18,  53 => 17,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
