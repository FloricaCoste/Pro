<?php

/* product_details/new.html.twig */
class __TwigTemplate_b5795690fccad4ed55d78849e4f3c3ad728e241fb4278f098af0b63b84d50053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product_details/new.html.twig", 1);
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
        $__internal_7cf5df47d63480dec185a63a91a7f32771e520f4348427c4203f72e58f060fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf5df47d63480dec185a63a91a7f32771e520f4348427c4203f72e58f060fb3->enter($__internal_7cf5df47d63480dec185a63a91a7f32771e520f4348427c4203f72e58f060fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/new.html.twig"));

        $__internal_da9f1814c0d3df3d0bb01ac8b611b73c1d2aebfe7dcdb38178a991c2b4846190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9f1814c0d3df3d0bb01ac8b611b73c1d2aebfe7dcdb38178a991c2b4846190->enter($__internal_da9f1814c0d3df3d0bb01ac8b611b73c1d2aebfe7dcdb38178a991c2b4846190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product_details/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf5df47d63480dec185a63a91a7f32771e520f4348427c4203f72e58f060fb3->leave($__internal_7cf5df47d63480dec185a63a91a7f32771e520f4348427c4203f72e58f060fb3_prof);

        
        $__internal_da9f1814c0d3df3d0bb01ac8b611b73c1d2aebfe7dcdb38178a991c2b4846190->leave($__internal_da9f1814c0d3df3d0bb01ac8b611b73c1d2aebfe7dcdb38178a991c2b4846190_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df15c9d2ade0e09f76cf72412467a2e47c7f2e1fb6c039f5a9c3e7f47c030bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df15c9d2ade0e09f76cf72412467a2e47c7f2e1fb6c039f5a9c3e7f47c030bfd->enter($__internal_df15c9d2ade0e09f76cf72412467a2e47c7f2e1fb6c039f5a9c3e7f47c030bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fd4856c666024758d58622dc057126249432804488e09fc382a4480ed5ae259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd4856c666024758d58622dc057126249432804488e09fc382a4480ed5ae259->enter($__internal_6fd4856c666024758d58622dc057126249432804488e09fc382a4480ed5ae259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product detail creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Save\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6fd4856c666024758d58622dc057126249432804488e09fc382a4480ed5ae259->leave($__internal_6fd4856c666024758d58622dc057126249432804488e09fc382a4480ed5ae259_prof);

        
        $__internal_df15c9d2ade0e09f76cf72412467a2e47c7f2e1fb6c039f5a9c3e7f47c030bfd->leave($__internal_df15c9d2ade0e09f76cf72412467a2e47c7f2e1fb6c039f5a9c3e7f47c030bfd_prof);

    }

    public function getTemplateName()
    {
        return "product_details/new.html.twig";
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
    <h1>Product detail creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Save\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_details_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product_details/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\product_details\\new.html.twig");
    }
}
