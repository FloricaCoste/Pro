<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5a02cae616a8abc327fabe8e7e2b31ef3590d495b62bce4631e499526df8ed87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c98cc71187997aaaa6693d3b4e67f023991a1c72ae9daf8294058f889bb30bba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98cc71187997aaaa6693d3b4e67f023991a1c72ae9daf8294058f889bb30bba->enter($__internal_c98cc71187997aaaa6693d3b4e67f023991a1c72ae9daf8294058f889bb30bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1e0a8f2034be65b83005cd8d672ecf1160d9fe628eaef2af53dcbebd2a5a6bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0a8f2034be65b83005cd8d672ecf1160d9fe628eaef2af53dcbebd2a5a6bf2->enter($__internal_1e0a8f2034be65b83005cd8d672ecf1160d9fe628eaef2af53dcbebd2a5a6bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c98cc71187997aaaa6693d3b4e67f023991a1c72ae9daf8294058f889bb30bba->leave($__internal_c98cc71187997aaaa6693d3b4e67f023991a1c72ae9daf8294058f889bb30bba_prof);

        
        $__internal_1e0a8f2034be65b83005cd8d672ecf1160d9fe628eaef2af53dcbebd2a5a6bf2->leave($__internal_1e0a8f2034be65b83005cd8d672ecf1160d9fe628eaef2af53dcbebd2a5a6bf2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
