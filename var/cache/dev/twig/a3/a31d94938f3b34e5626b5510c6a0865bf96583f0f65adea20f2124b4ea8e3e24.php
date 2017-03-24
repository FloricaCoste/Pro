<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_57455bc33aecfac6544ea92ce7609362e910188355485e171a00baa0113b4cdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1c9b8c63c8024bcd9c8bfa346ad69e6cea23e9e946654c58724afe7180ca1f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9b8c63c8024bcd9c8bfa346ad69e6cea23e9e946654c58724afe7180ca1f0f->enter($__internal_1c9b8c63c8024bcd9c8bfa346ad69e6cea23e9e946654c58724afe7180ca1f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_22d479d96096fe1c5ee4b572610305d11fbb5907518b08e71886e34090e98dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d479d96096fe1c5ee4b572610305d11fbb5907518b08e71886e34090e98dfc->enter($__internal_22d479d96096fe1c5ee4b572610305d11fbb5907518b08e71886e34090e98dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c9b8c63c8024bcd9c8bfa346ad69e6cea23e9e946654c58724afe7180ca1f0f->leave($__internal_1c9b8c63c8024bcd9c8bfa346ad69e6cea23e9e946654c58724afe7180ca1f0f_prof);

        
        $__internal_22d479d96096fe1c5ee4b572610305d11fbb5907518b08e71886e34090e98dfc->leave($__internal_22d479d96096fe1c5ee4b572610305d11fbb5907518b08e71886e34090e98dfc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d97e5871ac0047ae055bfe0e5f71fdb19655d0b1ef91acf3ea2cbedd312d94d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d97e5871ac0047ae055bfe0e5f71fdb19655d0b1ef91acf3ea2cbedd312d94d4->enter($__internal_d97e5871ac0047ae055bfe0e5f71fdb19655d0b1ef91acf3ea2cbedd312d94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_94aa83bb9ff95dbea66f10f03d1a603fe6af9fbc0bedbd1d98691136b084e9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94aa83bb9ff95dbea66f10f03d1a603fe6af9fbc0bedbd1d98691136b084e9a1->enter($__internal_94aa83bb9ff95dbea66f10f03d1a603fe6af9fbc0bedbd1d98691136b084e9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_94aa83bb9ff95dbea66f10f03d1a603fe6af9fbc0bedbd1d98691136b084e9a1->leave($__internal_94aa83bb9ff95dbea66f10f03d1a603fe6af9fbc0bedbd1d98691136b084e9a1_prof);

        
        $__internal_d97e5871ac0047ae055bfe0e5f71fdb19655d0b1ef91acf3ea2cbedd312d94d4->leave($__internal_d97e5871ac0047ae055bfe0e5f71fdb19655d0b1ef91acf3ea2cbedd312d94d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e49dcdc19b0283f748a63d0e0f5452442f0618718f9d0507316370e9185b2c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49dcdc19b0283f748a63d0e0f5452442f0618718f9d0507316370e9185b2c0d->enter($__internal_e49dcdc19b0283f748a63d0e0f5452442f0618718f9d0507316370e9185b2c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d575468ae14a27f0dc84a8f646ea1e6441127e03c0bd0a8a9548ba09134eac90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d575468ae14a27f0dc84a8f646ea1e6441127e03c0bd0a8a9548ba09134eac90->enter($__internal_d575468ae14a27f0dc84a8f646ea1e6441127e03c0bd0a8a9548ba09134eac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d575468ae14a27f0dc84a8f646ea1e6441127e03c0bd0a8a9548ba09134eac90->leave($__internal_d575468ae14a27f0dc84a8f646ea1e6441127e03c0bd0a8a9548ba09134eac90_prof);

        
        $__internal_e49dcdc19b0283f748a63d0e0f5452442f0618718f9d0507316370e9185b2c0d->leave($__internal_e49dcdc19b0283f748a63d0e0f5452442f0618718f9d0507316370e9185b2c0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d60ed659c0fc1234435450b546d683112a611ee74a9566d401f9a4fb89d9de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d60ed659c0fc1234435450b546d683112a611ee74a9566d401f9a4fb89d9de3->enter($__internal_7d60ed659c0fc1234435450b546d683112a611ee74a9566d401f9a4fb89d9de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eaf088f78dfe71671545233fc099b8165231d08f2a91f8de021980ebf1770bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf088f78dfe71671545233fc099b8165231d08f2a91f8de021980ebf1770bbb->enter($__internal_eaf088f78dfe71671545233fc099b8165231d08f2a91f8de021980ebf1770bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eaf088f78dfe71671545233fc099b8165231d08f2a91f8de021980ebf1770bbb->leave($__internal_eaf088f78dfe71671545233fc099b8165231d08f2a91f8de021980ebf1770bbb_prof);

        
        $__internal_7d60ed659c0fc1234435450b546d683112a611ee74a9566d401f9a4fb89d9de3->leave($__internal_7d60ed659c0fc1234435450b546d683112a611ee74a9566d401f9a4fb89d9de3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
