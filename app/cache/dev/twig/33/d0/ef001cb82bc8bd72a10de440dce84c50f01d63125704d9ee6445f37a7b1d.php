<?php

/* LineasTelefonicasPoliciaERBundle:Default:login.html.twig */
class __TwigTemplate_33d0ef001cb82bc8bd72a10de440dce84c50f01d63125704d9ee6445f37a7b1d extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lineastelefonicaspoliciaer/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <div class=\"container\">


        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("lineas_telefonicas_policia_er_homepage");
        echo "\" data-validate=\"parsley\">
            
        <img src=\"/bundles/LineasTelefonicasPoliciaER/images/escudopolicia.jpg\"/>
           \t
            \t<input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Usuario\" data-trigger=\"change\" data-required=\"true\">
            \t<input type=\"password\" id=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
<!--        <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Recordarme
\t\t\t</label>\t\t\t-->
            <button id=\"login\" class=\"btn btn-large btn-primary\" type=\"submit\">Login</button>
        </form>

    </div> 
   
    ";
    }

    public function getTemplateName()
    {
        return "LineasTelefonicasPoliciaERBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  31 => 3,  28 => 2,);
    }
}
