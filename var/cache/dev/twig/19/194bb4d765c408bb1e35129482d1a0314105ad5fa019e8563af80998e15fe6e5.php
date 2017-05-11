<?php

/* po/new.html.twig */
class __TwigTemplate_19ad684ee76d881994772b7f91e543b1bcefa03badaf51f6f0ea1d2f1fc23550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "po/new.html.twig", 1);
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
        $__internal_4d7f637df7367f050c96a914c6535a350f8d285519d96822047f39e175ff6114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7f637df7367f050c96a914c6535a350f8d285519d96822047f39e175ff6114->enter($__internal_4d7f637df7367f050c96a914c6535a350f8d285519d96822047f39e175ff6114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "po/new.html.twig"));

        $__internal_5ffbcc46a7f4e7847445cefb86eec0013fa3ce0ee0657820493b9073db2c308e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffbcc46a7f4e7847445cefb86eec0013fa3ce0ee0657820493b9073db2c308e->enter($__internal_5ffbcc46a7f4e7847445cefb86eec0013fa3ce0ee0657820493b9073db2c308e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "po/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7f637df7367f050c96a914c6535a350f8d285519d96822047f39e175ff6114->leave($__internal_4d7f637df7367f050c96a914c6535a350f8d285519d96822047f39e175ff6114_prof);

        
        $__internal_5ffbcc46a7f4e7847445cefb86eec0013fa3ce0ee0657820493b9073db2c308e->leave($__internal_5ffbcc46a7f4e7847445cefb86eec0013fa3ce0ee0657820493b9073db2c308e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_731b5b32b8c209c3530f7b3d8e2083812b3b26a38e2bedc8d54d71744fad1f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_731b5b32b8c209c3530f7b3d8e2083812b3b26a38e2bedc8d54d71744fad1f46->enter($__internal_731b5b32b8c209c3530f7b3d8e2083812b3b26a38e2bedc8d54d71744fad1f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9767d2b3939374e590e2e11f1c81f84d46bc56382becb30157f917d49f1e128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9767d2b3939374e590e2e11f1c81f84d46bc56382becb30157f917d49f1e128->enter($__internal_a9767d2b3939374e590e2e11f1c81f84d46bc56382becb30157f917d49f1e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Po creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a9767d2b3939374e590e2e11f1c81f84d46bc56382becb30157f917d49f1e128->leave($__internal_a9767d2b3939374e590e2e11f1c81f84d46bc56382becb30157f917d49f1e128_prof);

        
        $__internal_731b5b32b8c209c3530f7b3d8e2083812b3b26a38e2bedc8d54d71744fad1f46->leave($__internal_731b5b32b8c209c3530f7b3d8e2083812b3b26a38e2bedc8d54d71744fad1f46_prof);

    }

    public function getTemplateName()
    {
        return "po/new.html.twig";
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
    <h1>Po creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('po_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "po/new.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\po\\new.html.twig");
    }
}
