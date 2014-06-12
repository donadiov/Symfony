<?php

/* LineasTelefonicasPoliciaERBundle:Default:addUser.html.twig */
class __TwigTemplate_c546ab42964fabf14e3f495f5c3a016bdc5d5156915a500253b700e6902e6316 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_addUser");
        echo "\" data-validate=\"parsley\">
    
        <h2>Alta de Usuario</h2>

        <label>Nombre</label>
        <input type=\"text\" id=\"usuarioNombre\" name=\"usuarioNombre\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
        
        <label>Apellido</label>
        <input type=\"text\" id=\"usuarioApellido\" name=\"usuarioApellido\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
        
        <label>Mail</label>
        <input type=\"text\" id=\"usuarioMail\" name=\"usuarioMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" >
        
        <label>Usuario</label>
        <input type=\"text\" id=\"usuarioUsername\" name=\"usuarioUsername\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
        
        <label>password</label>
        <input type=\"password\" id=\"usuarioPass\" name=\"usuarioPass\" class=\"input-xlarge\" data-trigger=\"change\">
        
        <label>Rol</label>
        <select type=\"text\" name=\"usuarioRol\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"Seleccionar...\">
        \t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 28
            echo "        \t\t";
            if (($this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre") != "SUPER_ADMIN")) {
                // line 29
                echo "   \t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre"), "html", null, true);
                echo "</option>
      \t\t\t";
            }
            // line 31
            echo "      \t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t</select>
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >Guardar</button>
        </div>
    </form>
</div>

 ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  75 => 31,  67 => 29,  64 => 28,  60 => 27,  36 => 6,  31 => 3,  28 => 2,);
    }
}
