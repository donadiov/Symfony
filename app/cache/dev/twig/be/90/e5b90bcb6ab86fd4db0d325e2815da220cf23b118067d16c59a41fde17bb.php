<?php

/* MateriawebMateriaBundle:Default:signup.html.twig */
class __TwigTemplate_be90e5b90bcb6ab86fd4db0d325e2815da220cf23b118067d16c59a41fde17bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MateriawebMateriaBundle:Default:index.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MateriawebMateriaBundle:Default:index.html.twig";
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
        if (array_key_exists("user", $context)) {
            // line 6
            if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPERADMIN")) {
                // line 7
                echo "    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_listUser");
                echo "\" data-validate=\"parsley\">
";
            } else {
                // line 9
                echo "\t<form id=\"form\" class=\"well\" method=\"POST\" action=\"";
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_listCompanyUser");
                echo "\" data-validate=\"parsley\">
";
            }
            // line 11
            echo "        <h2>Edicion de Usuario</h2>
        <label>ID de usuario</label>
        <input type=\"text\" id=\"userId\" name=\"userId\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userId"), "html", null, true);
            echo "\" readonly>
        <label>Nombre de usuario</label>
        <input type=\"text\" id=\"userName\" name=\"userName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userName"), "html", null, true);
            echo "\">
        <label>Password</label>
        <input type=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\"><small>Ingrese una nueva password si desea cambiar la existente</small>
        <label>e-Mail</label>
        <input type=\"text\" id=\"userMail\" name=\"userMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userMail"), "html", null, true);
            echo "\">
        <label>Nombre</label>
        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname"), "html", null, true);
            echo "\">
        <label>Apellido</label>
        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName"), "html", null, true);
            echo "\">
        <label>Rol</label>
\t\t <select type=\"text\" name=\"userRol\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
            echo "\">
        \t\t\t<option value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol"), "html", null, true);
            echo "</option>
        \t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 28
                echo "        \t\t";
                if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "userRol") != $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"))) {
                    // line 29
                    echo "      \t\t\t\t<option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                    echo "</option>
      \t\t\t";
                }
                // line 31
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t</select>        
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >Guardar Usuario</button>
        </div>
    </form>
";
        } else {
            // line 38
            echo "    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
            echo $this->env->getExtension('routing')->getPath("materiaweb_materia_signup");
            echo "\" data-validate=\"parsley\">

        <h2>Registro<small>";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</small></h2>
        <label>Nombre de usuario</label>
        <input type=\"text\" id=\"userName\" name=\"userName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Password</label>
        <input type=\"password\" name=\"password\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>e-Mail</label>
        <input type=\"text\" id=\"userMail\" name=\"userMail\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
        <label>Nombre</label>
        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        <label>Apellido</label>
        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">

        ";
            // line 52
            if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
                // line 53
                echo "\t        <label>Empresa</label>
\t\t\t\t<select type=\"text\" name=\"companyId\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
\t\t\t\t\t";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
                foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
                    // line 56
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId") != $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginCompanyId"))) {
                        // line 57
                        echo "\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyId"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "companyNombreFantasia"), "html", null, true);
                        echo "</option>
\t\t\t\t\t\t";
                    }
                    // line 59
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t\t\t\t</select>
\t\t";
            } else {
                // line 62
                echo "\t\t\t<input type=\"Hidden\" id=\"companyId\" name=\"companyId\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "LoginCompanyId"), "html", null, true);
                echo "\" readonly>
\t\t";
            }
            // line 64
            echo "
        <label>Rol</label>
\t\t <select type=\"text\" name=\"userRol\" class=\"select-xlarge\" data-trigger=\"change\" data-required=\"true\">
        \t";
            // line 67
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
            foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
                // line 68
                echo "      \t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : $this->getContext($context, "rol")), "rolName"), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t</select>        
        <div>
         <button class=\"btn btn-primary\" type=\"submit\" >crear Usuario</button>
        </div>
    </form>
";
        }
        // line 76
        echo "</div>

 ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 69,  210 => 68,  197 => 65,  170 => 53,  161 => 49,  155 => 57,  134 => 41,  129 => 39,  110 => 34,  77 => 23,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 30,  70 => 20,  206 => 81,  198 => 80,  188 => 68,  180 => 57,  174 => 77,  150 => 45,  126 => 50,  114 => 38,  90 => 32,  84 => 29,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 67,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 32,  71 => 19,  67 => 19,  63 => 16,  59 => 14,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 26,  46 => 7,  27 => 4,  44 => 8,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 61,  142 => 52,  138 => 50,  136 => 42,  121 => 38,  117 => 44,  105 => 40,  91 => 31,  62 => 18,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 16,  47 => 8,  40 => 6,  37 => 6,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 52,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 33,  101 => 32,  98 => 30,  96 => 28,  83 => 27,  74 => 14,  66 => 19,  55 => 13,  52 => 10,  50 => 10,  43 => 7,  41 => 12,  35 => 5,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 70,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 62,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 33,  106 => 36,  103 => 37,  99 => 29,  95 => 28,  92 => 27,  86 => 26,  82 => 25,  80 => 26,  73 => 22,  64 => 17,  60 => 15,  57 => 12,  54 => 16,  51 => 11,  48 => 13,  45 => 9,  42 => 7,  39 => 7,  36 => 5,  33 => 10,  30 => 7,);
    }
}
