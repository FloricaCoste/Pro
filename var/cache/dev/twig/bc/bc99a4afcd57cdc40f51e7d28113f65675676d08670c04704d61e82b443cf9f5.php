<?php

/* product_invetory/new.html.twig */
class __TwigTemplate_f0d6f574f79fd8c6ced825a63464954760a3e323133662860c44b5738cc143c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_invetory/new.html.twig", 1);
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
        $__internal_a9a4657f7ea255f7243bd79c67409e51c90b5d975d9982adef88084743158472 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a4657f7ea255f7243bd79c67409e51c90b5d975d9982adef88084743158472->enter($__internal_a9a4657f7ea255f7243bd79c67409e51c90b5d975d9982adef88084743158472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/new.html.twig"));

        $__internal_21cb65a534e5ef7550a8d53ddf70194b256f8793e23993c1c2b331acb2286b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cb65a534e5ef7550a8d53ddf70194b256f8793e23993c1c2b331acb2286b1e->enter($__internal_21cb65a534e5ef7550a8d53ddf70194b256f8793e23993c1c2b331acb2286b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_invetory/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a4657f7ea255f7243bd79c67409e51c90b5d975d9982adef88084743158472->leave($__internal_a9a4657f7ea255f7243bd79c67409e51c90b5d975d9982adef88084743158472_prof);

        
        $__internal_21cb65a534e5ef7550a8d53ddf70194b256f8793e23993c1c2b331acb2286b1e->leave($__internal_21cb65a534e5ef7550a8d53ddf70194b256f8793e23993c1c2b331acb2286b1e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_096879d7abc51a1af561a7c21f4f7ee65258259849f9b57c23f0ffd7d9e002c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_096879d7abc51a1af561a7c21f4f7ee65258259849f9b57c23f0ffd7d9e002c4->enter($__internal_096879d7abc51a1af561a7c21f4f7ee65258259849f9b57c23f0ffd7d9e002c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bc5941c9037e944ecc0d06ef10e4eda2278179574f413d78123d60b294e79a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc5941c9037e944ecc0d06ef10e4eda2278179574f413d78123d60b294e79a5->enter($__internal_1bc5941c9037e944ecc0d06ef10e4eda2278179574f413d78123d60b294e79a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>New product </h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_1bc5941c9037e944ecc0d06ef10e4eda2278179574f413d78123d60b294e79a5->leave($__internal_1bc5941c9037e944ecc0d06ef10e4eda2278179574f413d78123d60b294e79a5_prof);

        
        $__internal_096879d7abc51a1af561a7c21f4f7ee65258259849f9b57c23f0ffd7d9e002c4->leave($__internal_096879d7abc51a1af561a7c21f4f7ee65258259849f9b57c23f0ffd7d9e002c4_prof);

    }

    public function getTemplateName()
    {
        return "product_invetory/new.html.twig";
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
    <h1>New product </h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_invetory_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product_invetory/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_invetory\\new.html.twig");
    }
}
