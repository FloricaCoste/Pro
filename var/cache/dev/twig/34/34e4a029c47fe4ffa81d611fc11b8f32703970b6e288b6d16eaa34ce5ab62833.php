<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d69a53e4b74858860d7271b8fa047330c508ff6e71f4164011ebb8ff6714ac3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a1f44fabf1a0f0d51ab2fbab429bb4f116354126b6f4401abea87ad56e951e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a1f44fabf1a0f0d51ab2fbab429bb4f116354126b6f4401abea87ad56e951e->enter($__internal_12a1f44fabf1a0f0d51ab2fbab429bb4f116354126b6f4401abea87ad56e951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_efe2ced74cf2d43c1b15d2f6a05a4e2544c78eb8bca45246c8d60405ff1acff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe2ced74cf2d43c1b15d2f6a05a4e2544c78eb8bca45246c8d60405ff1acff5->enter($__internal_efe2ced74cf2d43c1b15d2f6a05a4e2544c78eb8bca45246c8d60405ff1acff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a1f44fabf1a0f0d51ab2fbab429bb4f116354126b6f4401abea87ad56e951e->leave($__internal_12a1f44fabf1a0f0d51ab2fbab429bb4f116354126b6f4401abea87ad56e951e_prof);

        
        $__internal_efe2ced74cf2d43c1b15d2f6a05a4e2544c78eb8bca45246c8d60405ff1acff5->leave($__internal_efe2ced74cf2d43c1b15d2f6a05a4e2544c78eb8bca45246c8d60405ff1acff5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_297595df1a59a39141193af8606f0022c27a4b98154312d608f02932fdaa6325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297595df1a59a39141193af8606f0022c27a4b98154312d608f02932fdaa6325->enter($__internal_297595df1a59a39141193af8606f0022c27a4b98154312d608f02932fdaa6325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dcd136c33d41f40fae91332b95a64babe007fdb6aa951c1d7b6b9f582cb7f119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd136c33d41f40fae91332b95a64babe007fdb6aa951c1d7b6b9f582cb7f119->enter($__internal_dcd136c33d41f40fae91332b95a64babe007fdb6aa951c1d7b6b9f582cb7f119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dcd136c33d41f40fae91332b95a64babe007fdb6aa951c1d7b6b9f582cb7f119->leave($__internal_dcd136c33d41f40fae91332b95a64babe007fdb6aa951c1d7b6b9f582cb7f119_prof);

        
        $__internal_297595df1a59a39141193af8606f0022c27a4b98154312d608f02932fdaa6325->leave($__internal_297595df1a59a39141193af8606f0022c27a4b98154312d608f02932fdaa6325_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4b8133b4825890e57912e6e62f17dce42d4d11eec20c513826e8f9c8e29f7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b8133b4825890e57912e6e62f17dce42d4d11eec20c513826e8f9c8e29f7fe->enter($__internal_c4b8133b4825890e57912e6e62f17dce42d4d11eec20c513826e8f9c8e29f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44a2244fe7798e0e72e30679dfecf4a127c7c65727c89f6065a9253c3ed0ec94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a2244fe7798e0e72e30679dfecf4a127c7c65727c89f6065a9253c3ed0ec94->enter($__internal_44a2244fe7798e0e72e30679dfecf4a127c7c65727c89f6065a9253c3ed0ec94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_44a2244fe7798e0e72e30679dfecf4a127c7c65727c89f6065a9253c3ed0ec94->leave($__internal_44a2244fe7798e0e72e30679dfecf4a127c7c65727c89f6065a9253c3ed0ec94_prof);

        
        $__internal_c4b8133b4825890e57912e6e62f17dce42d4d11eec20c513826e8f9c8e29f7fe->leave($__internal_c4b8133b4825890e57912e6e62f17dce42d4d11eec20c513826e8f9c8e29f7fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8caf4c47dcd39a361a7088d69332d71b2f25ec839eef2174b9fa669534415cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8caf4c47dcd39a361a7088d69332d71b2f25ec839eef2174b9fa669534415cc->enter($__internal_d8caf4c47dcd39a361a7088d69332d71b2f25ec839eef2174b9fa669534415cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fad8f93563b891cc19e4a156a4f9b9af27449b126ec27ff08d276d2d7a9a933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fad8f93563b891cc19e4a156a4f9b9af27449b126ec27ff08d276d2d7a9a933->enter($__internal_3fad8f93563b891cc19e4a156a4f9b9af27449b126ec27ff08d276d2d7a9a933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3fad8f93563b891cc19e4a156a4f9b9af27449b126ec27ff08d276d2d7a9a933->leave($__internal_3fad8f93563b891cc19e4a156a4f9b9af27449b126ec27ff08d276d2d7a9a933_prof);

        
        $__internal_d8caf4c47dcd39a361a7088d69332d71b2f25ec839eef2174b9fa669534415cc->leave($__internal_d8caf4c47dcd39a361a7088d69332d71b2f25ec839eef2174b9fa669534415cc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
