<?php

/* LineasTelefonicasPoliciaERBundle:Default:listUser.html.twig */
class __TwigTemplate_16eb49988ab8c7c5c2548af855983ed50ca6b02973be1a27a7f9bebb3f75980b extends Twig_Template
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

<h2>Usuarios</h2>

\t\t<table>
   \t\t\t<caption>Lista de Usuarios</caption>
   \t\t\t<thead>
\t\t      <tr>
\t\t         <th>Nombre y Apellido</th>
\t\t         <th>Nombre de Usuario</th>
\t\t         <th>Mail</th>
\t\t         <th>Rol</th>
\t\t         <th>Accion</th>
\t\t      </tr>
   \t\t\t</thead>
   \t\t\t<tbody>
\t\t    \t";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : $this->getContext($context, "usuarios")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "\t\t      \t\t\t<tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0")), "html", null, true);
            echo "\">
\t\t      \t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioApellido"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioNombre"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioUsername"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioMail"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioRol"), "html", null, true);
            echo "</td>
\t\t      \t\t\t\t<td>
\t\t      \t\t\t\t
\t\t      \t\t\t\t\t<form id=\"form\" method=\"POST\" action=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_editUser");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"usuarioId\" name=\"usuarioId\" class=\"input-xlarge\" readonly value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Editar</button>
\t\t\t\t\t\t\t\t";
            // line 33
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "UsuarioRol") != "SUPER_ADMIN")) {
                // line 34
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btneliminar\" id=\"btnPopUp";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
                echo "\">Eliminar</a>
\t\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t\t</form>
\t\t      \t\t\t\t\t
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t  \$(\"#btnPopUp";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t  var \$body = \$(this.ie6 ? document.body : document);
\t\t\t\t\t\t\t\t\t\t\$('.eliminaObjeto";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "').css({
\t\t\t\t\t\t\t\t\t\t\twidth:  \$body.width(),
\t\t\t\t\t\t\t\t\t\t\theight:  \$body.height()
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t  \$(\"#btnClose";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\").click(function(){
\t\t\t\t\t\t\t\t     \$(\".eliminaObjeto";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\").toggle(); 
\t\t\t\t\t\t\t\t  });
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"eliminaObjeto";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\" id=\"eliminaObjeto\" hidden>
\t\t
\t\t
\t\t\t\t\t\t\t\t\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_deleteUser");
            echo "\" data-validate=\"parsley\">
\t\t\t\t\t\t\t\t\t\t<span>Esta seguro que desea eliminar el Usuario ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioNombre"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioApellido"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"Hidden\" id=\"usuarioId\" name=\"usuarioId\" class=\"input-xlarge\" readonly value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
            echo "\">\t\t\t
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Eliminar</button>
\t\t\t\t\t\t\t\t\t\t<span class=\"btn\" id=\"btnClose";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "usuarioId"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "   \t\t\t</tbody>
\t\t</table>
\t\t<a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_addUser");
        echo "\"><button class=\"btn btn-primary\" >Nuevo Usuario</button></a>
 </div> 
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 72,  196 => 70,  174 => 62,  169 => 60,  163 => 59,  159 => 58,  153 => 55,  145 => 50,  141 => 49,  135 => 46,  128 => 42,  123 => 40,  117 => 36,  111 => 34,  109 => 33,  104 => 31,  100 => 30,  94 => 27,  90 => 26,  86 => 25,  80 => 24,  75 => 23,  58 => 22,  40 => 6,  37 => 5,  32 => 3,  29 => 2,);
    }
}
