<?php

/* MateriawebMateriaBundle:Default:index.html.twig */
class __TwigTemplate_3e31cb1c942f816ca0ec4847e34fbbddc993e5e6b9c03aa454f897aab6b45cca extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materiawebmateria/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
\t</head>

\t<body>
\t\t\t
\t\t\t\t";
        // line 25
        if (array_key_exists("login", $context)) {
            // line 26
            echo "\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 27
            if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
                // line 28
                echo "\t\t\t\t    \t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#s1\">Seguridad</a>
\t\t                    \t\t<span id=\"s1\"></span>
\t\t\t\t                    <ul class=\"subs\">
\t\t\t\t                        <li><a href=\"#\">Usuario</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_listUser");
                echo "\">Ver Todos</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                        <li><a href=\"#\">Empresas</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 40
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_admin_listCompany");
                echo "\">Ver Todas</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                    </ul>
\t\t                \t\t</li>
\t                \t\t\t<li><a href=\"";
                // line 45
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_logout");
                echo "\" >Logout</a></li>
\t                \t\t</ul>
\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "TITULAR")) {
                // line 48
                echo "\t\t\t\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 49
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_logout");
                echo "\" >Logout</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#s1\">Perfil</a>
\t                    \t\t\t<span id=\"s1\"></span>
\t\t\t                    \t<ul class=\"subs\">
\t\t\t\t                        <li><a href=\"#\">Empresa</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_editMyCompany");
                echo "\">Editar</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t\t                        <li><a href=\"#\">Usuarios</a>
\t\t\t\t                            <ul>
\t\t\t\t                                <li><a href=\"";
                // line 61
                echo $this->env->getExtension('routing')->getPath("materiaweb_materia_listCompanyUser");
                echo "\">Ver Todos</a></li>
\t\t\t\t                            </ul>
\t\t\t\t                        </li>
\t\t\t                 \t   </ul>
\t                \t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t</nav>
\t\t\t";
        }
        // line 70
        echo "\t\t\t
\t\t";
        // line 71
        if (array_key_exists("mensaje", $context)) {
            // line 72
            echo "\t\t\t<b><span style=\"color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></b>
\t\t";
        }
        // line 74
        echo "\t\t";
        $this->displayBlock('container', $context, $blocks);
        // line 76
        echo "\t
\t\t";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 79
        echo "\t\t
\t\t";
        // line 80
        $this->displayBlock('footer', $context, $blocks);
        // line 85
        echo "
    </body>
</html>

";
    }

    // line 74
    public function block_container($context, array $blocks = array())
    {
        // line 75
        echo "\t\t";
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        // line 78
        echo "\t\t";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        // line 81
        echo "\t\t<footer>
                &copy; Copyright 2014 by <a href=\"http://materiaweb.dev/app_dev.php/materiaweb/\">Materia Web</a>.
        </footer>
        ";
    }

    public function getTemplateName()
    {
        return "MateriawebMateriaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  181 => 85,  160 => 71,  153 => 68,  113 => 45,  97 => 35,  70 => 20,  206 => 81,  198 => 80,  188 => 76,  180 => 71,  174 => 77,  150 => 56,  126 => 50,  114 => 38,  90 => 26,  84 => 23,  58 => 17,  53 => 13,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 47,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 61,  135 => 56,  119 => 48,  102 => 32,  71 => 19,  67 => 15,  63 => 14,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 28,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 29,  78 => 25,  46 => 7,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 81,  196 => 77,  183 => 82,  171 => 76,  166 => 71,  163 => 62,  158 => 67,  156 => 59,  151 => 63,  142 => 59,  138 => 50,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 18,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 9,  40 => 2,  37 => 11,  22 => 1,  246 => 90,  157 => 70,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 41,  115 => 43,  111 => 37,  108 => 35,  101 => 32,  98 => 31,  96 => 29,  83 => 27,  74 => 14,  66 => 19,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 12,  35 => 5,  32 => 26,  29 => 3,  209 => 82,  203 => 80,  199 => 78,  193 => 78,  189 => 74,  187 => 84,  182 => 66,  176 => 79,  173 => 65,  168 => 74,  164 => 59,  162 => 72,  154 => 58,  149 => 51,  147 => 58,  144 => 53,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 49,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 26,  73 => 19,  64 => 17,  60 => 6,  57 => 11,  54 => 16,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
