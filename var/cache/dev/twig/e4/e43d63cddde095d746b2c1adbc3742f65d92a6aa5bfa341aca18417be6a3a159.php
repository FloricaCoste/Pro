<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1cab6bb6f1c8a3169ce403b0d7be2219309d724471a03b9015096cb6a2b83731 extends Twig_Template
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
        $__internal_8857aa8ef5a798221b9516f566bd46f3a62863e99eab506bf7a57d2c4a7b9639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8857aa8ef5a798221b9516f566bd46f3a62863e99eab506bf7a57d2c4a7b9639->enter($__internal_8857aa8ef5a798221b9516f566bd46f3a62863e99eab506bf7a57d2c4a7b9639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_9595ad1393dfca8f4d53864358bc9e8970d3b0777c8b22d22d519b02fa555ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9595ad1393dfca8f4d53864358bc9e8970d3b0777c8b22d22d519b02fa555ded->enter($__internal_9595ad1393dfca8f4d53864358bc9e8970d3b0777c8b22d22d519b02fa555ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_8857aa8ef5a798221b9516f566bd46f3a62863e99eab506bf7a57d2c4a7b9639->leave($__internal_8857aa8ef5a798221b9516f566bd46f3a62863e99eab506bf7a57d2c4a7b9639_prof);

        
        $__internal_9595ad1393dfca8f4d53864358bc9e8970d3b0777c8b22d22d519b02fa555ded->leave($__internal_9595ad1393dfca8f4d53864358bc9e8970d3b0777c8b22d22d519b02fa555ded_prof);

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
