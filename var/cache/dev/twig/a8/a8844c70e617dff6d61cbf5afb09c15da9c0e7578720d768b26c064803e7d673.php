<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_06abc2f06373b70bd11c6b7a6e2e6b4b57c6379f760ce4f74b9e8911b4384d71 extends Twig_Template
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
        $__internal_a30871224bb34a93981aa1f3a4d456b84d3bc279c3f30af4b6f99f05839bdaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30871224bb34a93981aa1f3a4d456b84d3bc279c3f30af4b6f99f05839bdaf5->enter($__internal_a30871224bb34a93981aa1f3a4d456b84d3bc279c3f30af4b6f99f05839bdaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_9bea236cac0307b0389df2c850bc32ab13638d996b97c98185de487fea5e7189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bea236cac0307b0389df2c850bc32ab13638d996b97c98185de487fea5e7189->enter($__internal_9bea236cac0307b0389df2c850bc32ab13638d996b97c98185de487fea5e7189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30871224bb34a93981aa1f3a4d456b84d3bc279c3f30af4b6f99f05839bdaf5->leave($__internal_a30871224bb34a93981aa1f3a4d456b84d3bc279c3f30af4b6f99f05839bdaf5_prof);

        
        $__internal_9bea236cac0307b0389df2c850bc32ab13638d996b97c98185de487fea5e7189->leave($__internal_9bea236cac0307b0389df2c850bc32ab13638d996b97c98185de487fea5e7189_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_481383dfda5aae10b0a478953bd1dee8b5fb8a1d4c1409176bc129db65e5db54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481383dfda5aae10b0a478953bd1dee8b5fb8a1d4c1409176bc129db65e5db54->enter($__internal_481383dfda5aae10b0a478953bd1dee8b5fb8a1d4c1409176bc129db65e5db54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2159bacf93197f4443092ff5dc5d07fce6c753c6515b617c7621afdff7c7630e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2159bacf93197f4443092ff5dc5d07fce6c753c6515b617c7621afdff7c7630e->enter($__internal_2159bacf93197f4443092ff5dc5d07fce6c753c6515b617c7621afdff7c7630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2159bacf93197f4443092ff5dc5d07fce6c753c6515b617c7621afdff7c7630e->leave($__internal_2159bacf93197f4443092ff5dc5d07fce6c753c6515b617c7621afdff7c7630e_prof);

        
        $__internal_481383dfda5aae10b0a478953bd1dee8b5fb8a1d4c1409176bc129db65e5db54->leave($__internal_481383dfda5aae10b0a478953bd1dee8b5fb8a1d4c1409176bc129db65e5db54_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6caee4a6ad80890b9d85d938995f0be1b2cef10fee49ba7dce40ae72d0c1870d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6caee4a6ad80890b9d85d938995f0be1b2cef10fee49ba7dce40ae72d0c1870d->enter($__internal_6caee4a6ad80890b9d85d938995f0be1b2cef10fee49ba7dce40ae72d0c1870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5843aec742dfad087dd97409cb6d0db276e4c2527cf5bbc1e591e4e3157fe9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5843aec742dfad087dd97409cb6d0db276e4c2527cf5bbc1e591e4e3157fe9f1->enter($__internal_5843aec742dfad087dd97409cb6d0db276e4c2527cf5bbc1e591e4e3157fe9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5843aec742dfad087dd97409cb6d0db276e4c2527cf5bbc1e591e4e3157fe9f1->leave($__internal_5843aec742dfad087dd97409cb6d0db276e4c2527cf5bbc1e591e4e3157fe9f1_prof);

        
        $__internal_6caee4a6ad80890b9d85d938995f0be1b2cef10fee49ba7dce40ae72d0c1870d->leave($__internal_6caee4a6ad80890b9d85d938995f0be1b2cef10fee49ba7dce40ae72d0c1870d_prof);

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
