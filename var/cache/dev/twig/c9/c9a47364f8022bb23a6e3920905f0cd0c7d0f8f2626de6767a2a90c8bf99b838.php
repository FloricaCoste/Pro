<?php

/* suppliers_details/new.html.twig */
class __TwigTemplate_f215ceda48e87a79fa4ebb761c6c84dd4c72b6e52814891e2bc357c088c833fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_details/new.html.twig", 1);
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
        $__internal_b63a6dfc68a111d8bd10cb8fb21271d6b9f7e4a6e74849b46db7298a9adbb0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63a6dfc68a111d8bd10cb8fb21271d6b9f7e4a6e74849b46db7298a9adbb0b7->enter($__internal_b63a6dfc68a111d8bd10cb8fb21271d6b9f7e4a6e74849b46db7298a9adbb0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/new.html.twig"));

        $__internal_c3509507896af93c1c863e140c1455022ba7639cbf0ef24f41e582dbe3de12b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3509507896af93c1c863e140c1455022ba7639cbf0ef24f41e582dbe3de12b2->enter($__internal_c3509507896af93c1c863e140c1455022ba7639cbf0ef24f41e582dbe3de12b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_details/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b63a6dfc68a111d8bd10cb8fb21271d6b9f7e4a6e74849b46db7298a9adbb0b7->leave($__internal_b63a6dfc68a111d8bd10cb8fb21271d6b9f7e4a6e74849b46db7298a9adbb0b7_prof);

        
        $__internal_c3509507896af93c1c863e140c1455022ba7639cbf0ef24f41e582dbe3de12b2->leave($__internal_c3509507896af93c1c863e140c1455022ba7639cbf0ef24f41e582dbe3de12b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_efe53b084ca81daf84400b8f0a4105f57a1efca3c5109df76d0a1d54851afdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe53b084ca81daf84400b8f0a4105f57a1efca3c5109df76d0a1d54851afdff->enter($__internal_efe53b084ca81daf84400b8f0a4105f57a1efca3c5109df76d0a1d54851afdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0df992c92dd42bd874e6ab964fb20466428fd82d58710828940a5cf38254048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0df992c92dd42bd874e6ab964fb20466428fd82d58710828940a5cf38254048->enter($__internal_b0df992c92dd42bd874e6ab964fb20466428fd82d58710828940a5cf38254048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>New suppliers</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b0df992c92dd42bd874e6ab964fb20466428fd82d58710828940a5cf38254048->leave($__internal_b0df992c92dd42bd874e6ab964fb20466428fd82d58710828940a5cf38254048_prof);

        
        $__internal_efe53b084ca81daf84400b8f0a4105f57a1efca3c5109df76d0a1d54851afdff->leave($__internal_efe53b084ca81daf84400b8f0a4105f57a1efca3c5109df76d0a1d54851afdff_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_details/new.html.twig";
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
    <h1>New suppliers</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Save\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('suppliers_details_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "suppliers_details/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_details\\new.html.twig");
    }
}
