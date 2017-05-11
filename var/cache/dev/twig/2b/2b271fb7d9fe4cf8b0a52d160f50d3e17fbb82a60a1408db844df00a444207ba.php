<?php

/* quotation/new.html.twig */
class __TwigTemplate_97fe95421a9e2264395a2a9313a197035acb01156d775e2e0b929461e1488413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quotation/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b18571193367e86e4cab956a8ef000a2622585147b03e8c512dec5a7500aefc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b18571193367e86e4cab956a8ef000a2622585147b03e8c512dec5a7500aefc5->enter($__internal_b18571193367e86e4cab956a8ef000a2622585147b03e8c512dec5a7500aefc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/new.html.twig"));

        $__internal_d70c7d982f89979cb7d52e592f2b7c314be44f7f8e780c5d63b06fcf071306e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70c7d982f89979cb7d52e592f2b7c314be44f7f8e780c5d63b06fcf071306e5->enter($__internal_d70c7d982f89979cb7d52e592f2b7c314be44f7f8e780c5d63b06fcf071306e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18571193367e86e4cab956a8ef000a2622585147b03e8c512dec5a7500aefc5->leave($__internal_b18571193367e86e4cab956a8ef000a2622585147b03e8c512dec5a7500aefc5_prof);

        
        $__internal_d70c7d982f89979cb7d52e592f2b7c314be44f7f8e780c5d63b06fcf071306e5->leave($__internal_d70c7d982f89979cb7d52e592f2b7c314be44f7f8e780c5d63b06fcf071306e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c327c9283cf672fb5848eba52f48d0769f38f4ecc1867d09222ec21ba20d5b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c327c9283cf672fb5848eba52f48d0769f38f4ecc1867d09222ec21ba20d5b8d->enter($__internal_c327c9283cf672fb5848eba52f48d0769f38f4ecc1867d09222ec21ba20d5b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2332a0de532b1e33113cbcdbfb27f4b1727efe2b88a6ba67a298ca453e7fd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2332a0de532b1e33113cbcdbfb27f4b1727efe2b88a6ba67a298ca453e7fd72->enter($__internal_b2332a0de532b1e33113cbcdbfb27f4b1727efe2b88a6ba67a298ca453e7fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quotation creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b2332a0de532b1e33113cbcdbfb27f4b1727efe2b88a6ba67a298ca453e7fd72->leave($__internal_b2332a0de532b1e33113cbcdbfb27f4b1727efe2b88a6ba67a298ca453e7fd72_prof);

        
        $__internal_c327c9283cf672fb5848eba52f48d0769f38f4ecc1867d09222ec21ba20d5b8d->leave($__internal_c327c9283cf672fb5848eba52f48d0769f38f4ecc1867d09222ec21ba20d5b8d_prof);

    }

    public function getTemplateName()
    {
        return "quotation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Quotation creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('quotation_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "quotation/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\quotation\\new.html.twig");
    }
}
