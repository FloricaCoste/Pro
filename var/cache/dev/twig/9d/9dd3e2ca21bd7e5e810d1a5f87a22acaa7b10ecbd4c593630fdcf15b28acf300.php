<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_88188db39f63e208071346179174c4a4ac69756fb7498615e4114a3c3556e73a extends Twig_Template
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
        $__internal_3bcf7b1c5bc69824426fbfcf854c1f56e8c1aee4190cc6cf34665394a5f7eb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcf7b1c5bc69824426fbfcf854c1f56e8c1aee4190cc6cf34665394a5f7eb41->enter($__internal_3bcf7b1c5bc69824426fbfcf854c1f56e8c1aee4190cc6cf34665394a5f7eb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b45e559cb0e969e094f8132b540b0f47bd436e94fdd257d300be682bf5b2f46f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45e559cb0e969e094f8132b540b0f47bd436e94fdd257d300be682bf5b2f46f->enter($__internal_b45e559cb0e969e094f8132b540b0f47bd436e94fdd257d300be682bf5b2f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bcf7b1c5bc69824426fbfcf854c1f56e8c1aee4190cc6cf34665394a5f7eb41->leave($__internal_3bcf7b1c5bc69824426fbfcf854c1f56e8c1aee4190cc6cf34665394a5f7eb41_prof);

        
        $__internal_b45e559cb0e969e094f8132b540b0f47bd436e94fdd257d300be682bf5b2f46f->leave($__internal_b45e559cb0e969e094f8132b540b0f47bd436e94fdd257d300be682bf5b2f46f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38d30b3702da8f23f016b7280c94fdd1c274de4ed76393b43f55d6499aee5246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d30b3702da8f23f016b7280c94fdd1c274de4ed76393b43f55d6499aee5246->enter($__internal_38d30b3702da8f23f016b7280c94fdd1c274de4ed76393b43f55d6499aee5246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba13617405940deaa7330a0c397f1df210328f7be9015c358c4a5ba890e78f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba13617405940deaa7330a0c397f1df210328f7be9015c358c4a5ba890e78f55->enter($__internal_ba13617405940deaa7330a0c397f1df210328f7be9015c358c4a5ba890e78f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba13617405940deaa7330a0c397f1df210328f7be9015c358c4a5ba890e78f55->leave($__internal_ba13617405940deaa7330a0c397f1df210328f7be9015c358c4a5ba890e78f55_prof);

        
        $__internal_38d30b3702da8f23f016b7280c94fdd1c274de4ed76393b43f55d6499aee5246->leave($__internal_38d30b3702da8f23f016b7280c94fdd1c274de4ed76393b43f55d6499aee5246_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_344980606ea82ec537f4e60fa8ebf7b79225b47ee6f130fc717bf9da74e3e676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344980606ea82ec537f4e60fa8ebf7b79225b47ee6f130fc717bf9da74e3e676->enter($__internal_344980606ea82ec537f4e60fa8ebf7b79225b47ee6f130fc717bf9da74e3e676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c9ee1b77310f84e3ba3ff03d4e45327f6e7e62599f6c53d9341cb67422cc742d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ee1b77310f84e3ba3ff03d4e45327f6e7e62599f6c53d9341cb67422cc742d->enter($__internal_c9ee1b77310f84e3ba3ff03d4e45327f6e7e62599f6c53d9341cb67422cc742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c9ee1b77310f84e3ba3ff03d4e45327f6e7e62599f6c53d9341cb67422cc742d->leave($__internal_c9ee1b77310f84e3ba3ff03d4e45327f6e7e62599f6c53d9341cb67422cc742d_prof);

        
        $__internal_344980606ea82ec537f4e60fa8ebf7b79225b47ee6f130fc717bf9da74e3e676->leave($__internal_344980606ea82ec537f4e60fa8ebf7b79225b47ee6f130fc717bf9da74e3e676_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3918ca6dcdef59de60059ccb738669e9faaf5f578add442a3b89595d0633525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3918ca6dcdef59de60059ccb738669e9faaf5f578add442a3b89595d0633525->enter($__internal_d3918ca6dcdef59de60059ccb738669e9faaf5f578add442a3b89595d0633525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7963bcb26494c3acff8c202430ed17536877d0d9876f95988f6ce7ce0540261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7963bcb26494c3acff8c202430ed17536877d0d9876f95988f6ce7ce0540261->enter($__internal_f7963bcb26494c3acff8c202430ed17536877d0d9876f95988f6ce7ce0540261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f7963bcb26494c3acff8c202430ed17536877d0d9876f95988f6ce7ce0540261->leave($__internal_f7963bcb26494c3acff8c202430ed17536877d0d9876f95988f6ce7ce0540261_prof);

        
        $__internal_d3918ca6dcdef59de60059ccb738669e9faaf5f578add442a3b89595d0633525->leave($__internal_d3918ca6dcdef59de60059ccb738669e9faaf5f578add442a3b89595d0633525_prof);

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
