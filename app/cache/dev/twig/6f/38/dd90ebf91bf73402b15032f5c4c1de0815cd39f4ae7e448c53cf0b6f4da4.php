<?php

/* LineasTelefonicasPoliciaERBundle:Default:index.html.twig */
class __TwigTemplate_6f38dd90ebf91bf73402b15032f5c4c1de0815cd39f4ae7e448c53cf0b6f4da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <title>Lineas Telefonicas</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/materLineasTelefonicasPoliciaERiasql/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/css/jquery.dataTables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" language=\"javascript\" src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>
\t\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LineasTelefonicasPoliciaER/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
\t\t

\t\t
\t\t<link rel=\"shortcut icon\" href=\"/bundles/LineasTelefonicasPoliciaER/images/icono.ico\" type=\"image/vnd.microsoft.icon\">
\t</head>

<script>
\$(document).click(function() {
\t\$(\"#mensaje\").fadeOut(\"slow\");
});
</script>

\t<body>
\t\t\t
\t\t\t\t";
        // line 38
        if (array_key_exists("login", $context)) {
            // line 39
            echo "\t\t\t\t\t<nav>
\t\t\t\t\t\t";
            // line 40
            if ((($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN") || ($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "ADMIN"))) {
                // line 41
                echo "\t\t\t\t    \t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#s1\">Administracion</a>
\t\t                    \t\t<span id=\"s1\"></span>
\t\t\t\t                    <ul class=\"subs\">
\t\t\t\t                      ";
                // line 46
                if (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "SUPER_ADMIN")) {
                    // line 47
                    echo "\t\t\t\t                        <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listUser");
                    echo "\">Usuarios</a></li>
\t\t\t\t                      ";
                }
                // line 49
                echo "\t\t\t\t                        <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listCompany");
                echo "\">Empresas</a></li>
\t\t\t\t                        <li><a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listDestinos");
                echo "\">Destinos</a></li>
\t\t\t\t                     </ul>
\t\t                \t\t</li>
\t\t                \t\t<li><a href=\"#s1\">Lineas</a>
\t\t                    \t\t<span id=\"s1\"></span>
\t\t\t\t                    <ul class=\"subs\">
\t\t\t\t                        <li><a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_listLineas");
                echo "\">Lineas</a></li>
\t\t\t\t                        <li><a href=\"";
                // line 57
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_lineasHistory");
                echo "\">Historico</a></li>
\t\t\t\t                     </ul>
\t\t                \t\t</li>
\t                \t\t\t<li><a href=\"";
                // line 60
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_logout");
                echo "\" >Logout</a></li>
\t                \t\t
\t\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["login"]) ? $context["login"] : $this->getContext($context, "login")), "rol") == "USUARIO")) {
                // line 63
                echo "\t\t\t\t\t\t\t<ul id=\"nav\">
\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 64
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_homepage");
                echo "\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li><a style=\"float:right;\" href=\"";
                // line 65
                echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_logout");
                echo "\" >Logout</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 68
            echo "\t\t\t\t\t\t<img id=\"logo\" src=\"/bundles/LineasTelefonicasPoliciaER/images/icono.gif\"/>
\t\t\t\t\t\t</ul>
\t\t\t\t\t<a id=\"volver\" href=\"javascript:history.back()\"><button class=\"btn btn-primary\">Volver</button></a>
\t\t\t\t</nav>
\t\t\t";
        }
        // line 73
        echo "\t\t\t
\t\t";
        // line 74
        if (array_key_exists("mensaje", $context)) {
            // line 75
            echo "\t\t\t<section id=\"mensaje\"><span>";
            echo twig_escape_filter($this->env, (isset($context["mensaje"]) ? $context["mensaje"] : $this->getContext($context, "mensaje")), "html", null, true);
            echo "</span></section>
\t\t";
        }
        // line 77
        echo "\t\t
\t\t";
        // line 78
        $this->displayBlock('container', $context, $blocks);
        // line 80
        echo "
\t\t
\t\t";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "\t
    </body>
</html>


";
    }

    // line 78
    public function block_container($context, array $blocks = array())
    {
        // line 79
        echo "\t\t";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 83,  209 => 82,  205 => 79,  202 => 78,  193 => 84,  191 => 82,  187 => 80,  185 => 78,  182 => 77,  176 => 75,  174 => 74,  171 => 73,  164 => 68,  158 => 65,  154 => 64,  151 => 63,  145 => 60,  139 => 57,  135 => 56,  126 => 50,  121 => 49,  115 => 47,  113 => 46,  106 => 42,  103 => 41,  101 => 40,  98 => 39,  96 => 38,  78 => 23,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  32 => 10,  21 => 1,);
    }
}
