<?php

/* LineasTelefonicasPoliciaERBundle:Default:editUser.html.twig */
class __TwigTemplate_27f67f5db3f92b3a1166d4f5d7d621bb5fdb99edaa8d07da84a6ca4a17d0da66 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listUser");
        echo "\" data-validate=\"parsley\">
    
         <h2>Modificando Usuario ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioNombre"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioApellido"), "html", null, true);
        echo "</h2>

\t    <label>Id de usuario</label> <input type=\"text\" id=\"usuarioId\" name=\"usuarioId\" class=\"input-xlarge\" readonly value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioId"), "html", null, true);
        echo "\">
        
        <label>Nombre</label>
        <input type=\"text\" id=\"usuarioNombre\" name=\"usuarioNombre\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioNombre"), "html", null, true);
        echo "\">
        
        <label>Apellido</label>
        <input type=\"text\" id=\"usuarioApellido\" name=\"usuarioApellido\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioApellido"), "html", null, true);
        echo "\">
        
        <label>Mail</label>
        <input type=\"text\" id=\"usuarioMail\" name=\"usuarioMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioMail"), "html", null, true);
        echo "\">
        
        <label>Usuario</label>
        <input type=\"text\" id=\"usuarioUsername\" name=\"usuarioUsername\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioUsername"), "html", null, true);
        echo "\">
        
        <label>password</label>
        <input type=\"password\" id=\"usuarioPass\" name=\"usuarioPass\" class=\"input-xlarge\" data-trigger=\"change\">
        
        <label>Rol</label>
        <select type=\"text\" name=\"usuarioRol\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioRol"), "html", null, true);
        echo "\">
        \t\t\t<option value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioRol"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioRol"), "html", null, true);
        echo "</option>
        \t";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 31
            echo "        \t\t";
            if (((($this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre") != "SUPER_ADMIN") && ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioRol") != "SUPER_ADMIN")) && ($this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre") != $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "usuarioRol")))) {
                // line 32
                echo "   \t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolNombre"), "html", null, true);
                echo "</option>
      \t\t\t";
            }
            // line 34
            echo "      \t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return "LineasTelefonicasPoliciaERBundle:Default:editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  106 => 34,  98 => 32,  95 => 31,  91 => 30,  85 => 29,  81 => 28,  72 => 22,  66 => 19,  60 => 16,  54 => 13,  48 => 10,  41 => 8,  36 => 6,  31 => 3,  28 => 2,);
    }
}
