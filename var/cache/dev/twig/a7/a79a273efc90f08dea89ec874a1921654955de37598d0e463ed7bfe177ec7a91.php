<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_591c50864fa267d9b17943028a371009f7511878f306f7e63ad3f7582a76c4a8 extends Twig_Template
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
        $__internal_2ae99a18d278ebd4b8d2205ffbed864d229ff202b2fabfe553d527e9db422ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae99a18d278ebd4b8d2205ffbed864d229ff202b2fabfe553d527e9db422ebc->enter($__internal_2ae99a18d278ebd4b8d2205ffbed864d229ff202b2fabfe553d527e9db422ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d63f8943a9c4dac159aaddff979632f3967eb7a0cb41d598d7ead97b9b14552c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63f8943a9c4dac159aaddff979632f3967eb7a0cb41d598d7ead97b9b14552c->enter($__internal_d63f8943a9c4dac159aaddff979632f3967eb7a0cb41d598d7ead97b9b14552c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ae99a18d278ebd4b8d2205ffbed864d229ff202b2fabfe553d527e9db422ebc->leave($__internal_2ae99a18d278ebd4b8d2205ffbed864d229ff202b2fabfe553d527e9db422ebc_prof);

        
        $__internal_d63f8943a9c4dac159aaddff979632f3967eb7a0cb41d598d7ead97b9b14552c->leave($__internal_d63f8943a9c4dac159aaddff979632f3967eb7a0cb41d598d7ead97b9b14552c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b40b6a0a55eb9cf1e9d54dfeac9f0b476f00b795c15fb63e8312f47bf2c52189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40b6a0a55eb9cf1e9d54dfeac9f0b476f00b795c15fb63e8312f47bf2c52189->enter($__internal_b40b6a0a55eb9cf1e9d54dfeac9f0b476f00b795c15fb63e8312f47bf2c52189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79d35010c01d0d6169e14e715e780dd6ae232e40d1e98e02e82f0d0d3a11356f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d35010c01d0d6169e14e715e780dd6ae232e40d1e98e02e82f0d0d3a11356f->enter($__internal_79d35010c01d0d6169e14e715e780dd6ae232e40d1e98e02e82f0d0d3a11356f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_79d35010c01d0d6169e14e715e780dd6ae232e40d1e98e02e82f0d0d3a11356f->leave($__internal_79d35010c01d0d6169e14e715e780dd6ae232e40d1e98e02e82f0d0d3a11356f_prof);

        
        $__internal_b40b6a0a55eb9cf1e9d54dfeac9f0b476f00b795c15fb63e8312f47bf2c52189->leave($__internal_b40b6a0a55eb9cf1e9d54dfeac9f0b476f00b795c15fb63e8312f47bf2c52189_prof);

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
