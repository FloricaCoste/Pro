<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3fbcffa7a264612757880af83cea39c33aa57b300f9a02aeef0875935b4d65f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2c2d1c87affe8fa1be1ff6d72893e0b45976f612661f76606e80f4939ff83bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c2d1c87affe8fa1be1ff6d72893e0b45976f612661f76606e80f4939ff83bc->enter($__internal_c2c2d1c87affe8fa1be1ff6d72893e0b45976f612661f76606e80f4939ff83bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fbc0d75b1098f54d8a5922d0a7d1c00e864adf8ba95f15110a631027cd8303eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc0d75b1098f54d8a5922d0a7d1c00e864adf8ba95f15110a631027cd8303eb->enter($__internal_fbc0d75b1098f54d8a5922d0a7d1c00e864adf8ba95f15110a631027cd8303eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c2d1c87affe8fa1be1ff6d72893e0b45976f612661f76606e80f4939ff83bc->leave($__internal_c2c2d1c87affe8fa1be1ff6d72893e0b45976f612661f76606e80f4939ff83bc_prof);

        
        $__internal_fbc0d75b1098f54d8a5922d0a7d1c00e864adf8ba95f15110a631027cd8303eb->leave($__internal_fbc0d75b1098f54d8a5922d0a7d1c00e864adf8ba95f15110a631027cd8303eb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac4f9781a85bc836dc7682b30d5b4944f3c3cba3cb19417a254aae2f30e661e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4f9781a85bc836dc7682b30d5b4944f3c3cba3cb19417a254aae2f30e661e9->enter($__internal_ac4f9781a85bc836dc7682b30d5b4944f3c3cba3cb19417a254aae2f30e661e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_df934d0a97c1d45da4059e10045c3dd0fcd8071503fbeeed75dfffc7b33dd41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df934d0a97c1d45da4059e10045c3dd0fcd8071503fbeeed75dfffc7b33dd41e->enter($__internal_df934d0a97c1d45da4059e10045c3dd0fcd8071503fbeeed75dfffc7b33dd41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_df934d0a97c1d45da4059e10045c3dd0fcd8071503fbeeed75dfffc7b33dd41e->leave($__internal_df934d0a97c1d45da4059e10045c3dd0fcd8071503fbeeed75dfffc7b33dd41e_prof);

        
        $__internal_ac4f9781a85bc836dc7682b30d5b4944f3c3cba3cb19417a254aae2f30e661e9->leave($__internal_ac4f9781a85bc836dc7682b30d5b4944f3c3cba3cb19417a254aae2f30e661e9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1baa4ff6976775a53b3678382c1a076c3dd421fbaff1894b96e3a848e7468d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1baa4ff6976775a53b3678382c1a076c3dd421fbaff1894b96e3a848e7468d83->enter($__internal_1baa4ff6976775a53b3678382c1a076c3dd421fbaff1894b96e3a848e7468d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84f36faea62d36eae45df19b8f2e9a6d148c6e15c583708b20b83632795aa127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f36faea62d36eae45df19b8f2e9a6d148c6e15c583708b20b83632795aa127->enter($__internal_84f36faea62d36eae45df19b8f2e9a6d148c6e15c583708b20b83632795aa127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_84f36faea62d36eae45df19b8f2e9a6d148c6e15c583708b20b83632795aa127->leave($__internal_84f36faea62d36eae45df19b8f2e9a6d148c6e15c583708b20b83632795aa127_prof);

        
        $__internal_1baa4ff6976775a53b3678382c1a076c3dd421fbaff1894b96e3a848e7468d83->leave($__internal_1baa4ff6976775a53b3678382c1a076c3dd421fbaff1894b96e3a848e7468d83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
