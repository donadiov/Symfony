<?php

/* MateriaSqlBundle:Default:editUser.html.twig */
class __TwigTemplate_6cf5b9f439b4ba89041937c6662ee4efd4e219de4cad5518a8df3d0b1eb94ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriaSqlBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MateriaSqlBundle:Default:index.html.twig";
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

";
        // line 5
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            // line 6
            echo "    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materia_sql_admin_listUser");
            echo "\" data-validate=\"parsley\">
";
        } else {
            // line 8
            echo "\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materia_sql_listCompanyUser");
            echo "\" data-validate=\"parsley\">
";
        }
        // line 10
        echo "
    
         <h2>Modificando Usuario ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "</h2>
         ";
        // line 13
        if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
            // line 14
            echo "\t\t    <label>Id de usuario</label> <input type=\"text\" id=\"userid\" name=\"userid\" class=\"input-xlarge\" readonly value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\">
\t\t    <label>Empresa</label>
        \t<input type=\"text\" id=\"company\" name=\"company\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" readonly value=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "html", null, true);
            echo "\">
\t\t";
        } else {
            // line 18
            echo "\t\t\t<input style=\"display:none;\" type=\"text\" id=\"userid\" name=\"userid\" class=\"input-xlarge\" readonly value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userid"), "html", null, true);
            echo "\">
        \t<input style=\"display:none;\" type=\"text\" id=\"company\" name=\"company\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" readonly value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "html", null, true);
            echo "\">
\t\t";
        }
        // line 21
        echo "        
        <label>Nombre</label>
        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName"), "html", null, true);
        echo "\">
        
        <label>Apellido</label>
        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
        echo "\">
        
        <label>Mail</label>
        <input type=\"text\" id=\"userMail\" name=\"userMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userMail"), "html", null, true);
        echo "\">
        
        <label>Usuario</label>
        <input type=\"text\" id=\"userName\" name=\"userName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
        echo "\">
        
        <label>password</label>
        <input type=\"password\" id=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\">
        
        <label>Rol</label>
        <select type=\"text\" name=\"userRol\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
        echo "\">
        \t\t\t<option value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
        echo "</option>
        \t";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 41
            echo "        \t\t
        \t\t";
            // line 42
            if (((((($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName")) && ($this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName") != "SUPER_ADMIN")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != "TITULAR")) && ($this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName") != "TITULAR")) && ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != "SUPER_ADMIN"))) {
                // line 43
                echo "   \t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                echo "</option>
      \t\t\t";
            }
            // line 45
            echo "      \t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
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
        return "MateriaSqlBundle:Default:editUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 125,  244 => 124,  236 => 121,  231 => 119,  124 => 51,  245 => 83,  211 => 70,  205 => 102,  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 65,  185 => 88,  172 => 83,  165 => 53,  146 => 45,  76 => 1,  104 => 32,  100 => 41,  34 => 5,  207 => 76,  184 => 87,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 106,  210 => 68,  197 => 66,  170 => 79,  161 => 73,  155 => 49,  134 => 41,  129 => 39,  110 => 43,  77 => 19,  127 => 41,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 38,  97 => 30,  70 => 20,  206 => 81,  198 => 98,  188 => 68,  180 => 86,  174 => 84,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 12,  53 => 12,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 123,  229 => 97,  220 => 70,  214 => 71,  177 => 83,  169 => 82,  140 => 45,  132 => 43,  128 => 49,  107 => 31,  61 => 14,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 112,  219 => 73,  217 => 75,  208 => 68,  204 => 101,  179 => 61,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 24,  67 => 16,  63 => 14,  59 => 13,  38 => 6,  94 => 33,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 29,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 6,  44 => 11,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 48,  142 => 52,  138 => 42,  136 => 42,  121 => 38,  117 => 39,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 18,  69 => 16,  47 => 17,  40 => 6,  37 => 6,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 55,  123 => 40,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 37,  98 => 29,  96 => 34,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 8,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 67,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 58,  168 => 74,  164 => 59,  162 => 72,  154 => 69,  149 => 51,  147 => 47,  144 => 53,  141 => 48,  133 => 52,  130 => 42,  125 => 38,  122 => 37,  116 => 36,  112 => 43,  109 => 47,  106 => 36,  103 => 37,  99 => 29,  95 => 39,  92 => 26,  86 => 23,  82 => 21,  80 => 25,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 11,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
