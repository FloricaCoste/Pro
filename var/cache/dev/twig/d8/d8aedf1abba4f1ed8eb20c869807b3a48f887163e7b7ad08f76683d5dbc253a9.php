<?php

/* orders/new.html.twig */
class __TwigTemplate_0b96d43ff0ebd712e52172606dda6313122a65a843834a2f3c0c765450437331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "orders/new.html.twig", 1);
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
        $__internal_d06735189e58038a33903a1179c442ced4a9d8430e1acb872e110120896f7eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06735189e58038a33903a1179c442ced4a9d8430e1acb872e110120896f7eac->enter($__internal_d06735189e58038a33903a1179c442ced4a9d8430e1acb872e110120896f7eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/new.html.twig"));

        $__internal_b8bd68354c16baf8a2b967e898224427188af630c1cda4f59cbb0461e4e8a505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bd68354c16baf8a2b967e898224427188af630c1cda4f59cbb0461e4e8a505->enter($__internal_b8bd68354c16baf8a2b967e898224427188af630c1cda4f59cbb0461e4e8a505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "orders/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d06735189e58038a33903a1179c442ced4a9d8430e1acb872e110120896f7eac->leave($__internal_d06735189e58038a33903a1179c442ced4a9d8430e1acb872e110120896f7eac_prof);

        
        $__internal_b8bd68354c16baf8a2b967e898224427188af630c1cda4f59cbb0461e4e8a505->leave($__internal_b8bd68354c16baf8a2b967e898224427188af630c1cda4f59cbb0461e4e8a505_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29b488682e9eb4c6cc1f26f3f3e32595a72991f76e34dbac3f619e5eb6c64399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b488682e9eb4c6cc1f26f3f3e32595a72991f76e34dbac3f619e5eb6c64399->enter($__internal_29b488682e9eb4c6cc1f26f3f3e32595a72991f76e34dbac3f619e5eb6c64399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0ce106b3ea3b9df8ab4583b73f9036bb855cc1f9dbca8b42b6cabd29fb4040c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ce106b3ea3b9df8ab4583b73f9036bb855cc1f9dbca8b42b6cabd29fb4040c->enter($__internal_a0ce106b3ea3b9df8ab4583b73f9036bb855cc1f9dbca8b42b6cabd29fb4040c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a0ce106b3ea3b9df8ab4583b73f9036bb855cc1f9dbca8b42b6cabd29fb4040c->leave($__internal_a0ce106b3ea3b9df8ab4583b73f9036bb855cc1f9dbca8b42b6cabd29fb4040c_prof);

        
        $__internal_29b488682e9eb4c6cc1f26f3f3e32595a72991f76e34dbac3f619e5eb6c64399->leave($__internal_29b488682e9eb4c6cc1f26f3f3e32595a72991f76e34dbac3f619e5eb6c64399_prof);

    }

    public function getTemplateName()
    {
        return "orders/new.html.twig";
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
    <h1>Order creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('orders_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "orders/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\orders\\new.html.twig");
    }
}
