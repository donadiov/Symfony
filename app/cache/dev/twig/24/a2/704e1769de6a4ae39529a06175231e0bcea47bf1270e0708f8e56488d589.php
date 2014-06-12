<?php

/* MateriaSqlBundle:Default:index.html.twig */
class __TwigTemplate_24a2704e1769de6a4ae39529a06175231e0bcea47bf1270e0708f8e56488d589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>MateriaWeb &middot; Proyecto</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiasql/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
\t</head>

<script>

\$(document).click(function() {
\t\$(\"#notificaion\").fadeOut(\"slow\");
});

\$(document).click(function() {
\t\$(\"#mensaje\").fadeOut(\"slow\");
});

</script>

\t<body>
\t\t\t
\t\t\t\t";
        // line 37
        if (array_key_exists("login", $context)) {
            // line 38
            echo "\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 39
            if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
                // line 40
                echo "\t\t\t\t    \t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 41
                echo $this->env->getExtension('routing')->getPath("materia_sql_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#s1\">Seguridad</a>
\t\t                    \t\t<span id=\"s1\"></span>
\t\t\t\t                    <ul class=\"subs\">
\t\t\t\t                        <li><a href=\"#\">Usuario</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 47
                echo $this->env->getExtension('routing')->getPath("materia_sql_admin_listUser");
                echo "\">Ver Todos</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                        <li><a href=\"#\">Empresas</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 52
                echo $this->env->getExtension('routing')->getPath("materia_sql_admin_listCompany");
                echo "\">Ver Todas</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                    </ul>
\t\t                \t\t</li>
\t                \t\t\t<li><a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("materia_sql_logout");
                echo "\" >Logout</a></li>
\t                \t\t</ul>
\t\t\t\t\t\t";
            } elseif ((($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "TITULAR") || ($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "ADMIN"))) {
                // line 60
                echo "\t\t\t\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 61
                echo $this->env->getExtension('routing')->getPath("materia_sql_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("materia_sql_logout");
                echo "\" >Logout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#s1\">Perfil</a>
\t                    \t\t\t<span id=\"s1\"></span>
\t\t\t                    \t<ul class=\"subs\">
\t\t\t\t                        <li><a href=\"#\">Empresa</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materia_sql_editMyCompany", array("companyId" => $this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "loginCompanyId"))), "html", null, true);
                echo "\">Editar</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                        <li><a href=\"#\">Usuarios</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 73
                echo $this->env->getExtension('routing')->getPath("materia_sql_listCompanyUser");
                echo "\">Ver Todos</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t                 \t   </ul>
\t                \t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t</nav>
\t\t\t";
        }
        // line 82
        echo "\t\t\t
\t\t";
        // line 83
        if (array_key_exists("mensaje", $context)) {
            // line 84
            echo "\t\t\t<section id=\"mensaje\"><span>";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></section>
\t\t";
        }
        // line 86
        echo "\t\t
\t\t";
        // line 87
        if (array_key_exists("notificacion", $context)) {
            // line 88
            echo "\t\t\t<section id=\"notificaion\" ><span>";
            echo twig_escape_filter($this->env, (isset($context["notificacion"]) ? $context["notificacion"] : $this->getContext($context, "notificacion")), "html", null, true);
            echo "</span></section>
\t\t";
        }
        // line 90
        echo "\t\t";
        $this->displayBlock('container', $context, $blocks);
        // line 92
        echo "\t
\t\t";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "\t\t
\t\t";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 101
        echo "
    </body>
</html>

";
    }

    // line 90
    public function block_container($context, array $blocks = array())
    {
        // line 91
        echo "\t\t";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        // line 94
        echo "\t\t";
    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        // line 97
        echo "\t\t<footer>
                &copy; Copyright 2014 by <a href=\"http://materiaweb.dev/app_dev.php/materiaweb/\">Materia Web</a>.
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "MateriaSqlBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 96,  222 => 94,  215 => 91,  202 => 96,  194 => 92,  191 => 90,  185 => 88,  172 => 83,  165 => 80,  146 => 47,  76 => 1,  104 => 2,  100 => 41,  34 => 5,  207 => 76,  184 => 67,  152 => 56,  148 => 55,  81 => 28,  232 => 75,  218 => 71,  212 => 90,  210 => 68,  197 => 93,  170 => 53,  161 => 49,  155 => 73,  134 => 61,  129 => 39,  110 => 34,  77 => 25,  127 => 40,  192 => 75,  181 => 85,  160 => 71,  153 => 46,  113 => 32,  97 => 40,  70 => 20,  206 => 81,  198 => 80,  188 => 68,  180 => 86,  174 => 84,  150 => 45,  126 => 50,  114 => 38,  90 => 37,  84 => 27,  58 => 17,  53 => 5,  20 => 1,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 85,  252 => 80,  247 => 78,  241 => 77,  229 => 97,  220 => 70,  214 => 69,  177 => 65,  169 => 82,  140 => 55,  132 => 47,  128 => 49,  107 => 31,  61 => 25,  273 => 96,  269 => 94,  254 => 83,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 73,  224 => 72,  221 => 77,  219 => 93,  217 => 75,  208 => 68,  204 => 101,  179 => 64,  159 => 61,  143 => 61,  135 => 56,  119 => 38,  102 => 31,  71 => 24,  67 => 19,  63 => 22,  59 => 17,  38 => 6,  94 => 29,  89 => 20,  85 => 28,  75 => 17,  68 => 23,  56 => 18,  87 => 28,  21 => 2,  26 => 6,  93 => 29,  88 => 29,  78 => 28,  46 => 7,  27 => 6,  44 => 11,  31 => 4,  28 => 3,  201 => 81,  196 => 77,  183 => 87,  171 => 76,  166 => 52,  163 => 59,  158 => 67,  156 => 59,  151 => 61,  142 => 52,  138 => 62,  136 => 42,  121 => 38,  117 => 52,  105 => 40,  91 => 31,  62 => 18,  49 => 14,  24 => 4,  25 => 5,  19 => 1,  79 => 2,  72 => 24,  69 => 11,  47 => 17,  40 => 6,  37 => 11,  22 => 1,  246 => 90,  157 => 64,  145 => 44,  139 => 42,  131 => 60,  123 => 47,  120 => 41,  115 => 36,  111 => 34,  108 => 42,  101 => 1,  98 => 30,  96 => 34,  83 => 27,  74 => 27,  66 => 19,  55 => 16,  52 => 10,  50 => 18,  43 => 16,  41 => 12,  35 => 6,  32 => 3,  29 => 2,  209 => 82,  203 => 80,  199 => 95,  193 => 64,  189 => 74,  187 => 84,  182 => 66,  176 => 56,  173 => 62,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 68,  144 => 53,  141 => 48,  133 => 52,  130 => 41,  125 => 57,  122 => 39,  116 => 36,  112 => 43,  109 => 47,  106 => 36,  103 => 37,  99 => 29,  95 => 39,  92 => 38,  86 => 27,  82 => 26,  80 => 26,  73 => 22,  64 => 22,  60 => 24,  57 => 12,  54 => 16,  51 => 21,  48 => 13,  45 => 13,  42 => 10,  39 => 7,  36 => 6,  33 => 10,  30 => 3,);
    }
}
