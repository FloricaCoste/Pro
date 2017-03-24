<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_71001b70e3e97040e1807b9f9e7701680cb7a243ecef61cf944e913337471340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e9a12c40bcba73d0a4b4488aaf4c08fdc3c11175d248664f8ae913aeed41a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9a12c40bcba73d0a4b4488aaf4c08fdc3c11175d248664f8ae913aeed41a25->enter($__internal_2e9a12c40bcba73d0a4b4488aaf4c08fdc3c11175d248664f8ae913aeed41a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ec653ea1170b747cd5ca590f4c12d125aebcb89844d0e6cd8a4cab0315946d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec653ea1170b747cd5ca590f4c12d125aebcb89844d0e6cd8a4cab0315946d8f->enter($__internal_ec653ea1170b747cd5ca590f4c12d125aebcb89844d0e6cd8a4cab0315946d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9a12c40bcba73d0a4b4488aaf4c08fdc3c11175d248664f8ae913aeed41a25->leave($__internal_2e9a12c40bcba73d0a4b4488aaf4c08fdc3c11175d248664f8ae913aeed41a25_prof);

        
        $__internal_ec653ea1170b747cd5ca590f4c12d125aebcb89844d0e6cd8a4cab0315946d8f->leave($__internal_ec653ea1170b747cd5ca590f4c12d125aebcb89844d0e6cd8a4cab0315946d8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1548566af13274a8c4cdbe570177ab3d921816c5a79d73f98865eb411a3d1572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1548566af13274a8c4cdbe570177ab3d921816c5a79d73f98865eb411a3d1572->enter($__internal_1548566af13274a8c4cdbe570177ab3d921816c5a79d73f98865eb411a3d1572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c530ae45fca950913abc0a1d593697b5aaf589257f580776c21b17ba5754490b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c530ae45fca950913abc0a1d593697b5aaf589257f580776c21b17ba5754490b->enter($__internal_c530ae45fca950913abc0a1d593697b5aaf589257f580776c21b17ba5754490b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c530ae45fca950913abc0a1d593697b5aaf589257f580776c21b17ba5754490b->leave($__internal_c530ae45fca950913abc0a1d593697b5aaf589257f580776c21b17ba5754490b_prof);

        
        $__internal_1548566af13274a8c4cdbe570177ab3d921816c5a79d73f98865eb411a3d1572->leave($__internal_1548566af13274a8c4cdbe570177ab3d921816c5a79d73f98865eb411a3d1572_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
