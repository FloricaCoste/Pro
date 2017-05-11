<?php

/* basket/index.html.twig */
class __TwigTemplate_51e42c7b0b6928dbaf17a0b4acc229d62be90fec9d64fbf63ddfd26c1a7f7457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "basket/index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e73055b77c6df6a3b35014ae09e8eb93c44fc617d39ece0ea1ce8521c5e97d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73055b77c6df6a3b35014ae09e8eb93c44fc617d39ece0ea1ce8521c5e97d4a->enter($__internal_e73055b77c6df6a3b35014ae09e8eb93c44fc617d39ece0ea1ce8521c5e97d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $__internal_696fc276104e54269e681fba87c75b7a93d65f10637a3ad25e691d7e2c9840e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696fc276104e54269e681fba87c75b7a93d65f10637a3ad25e691d7e2c9840e3->enter($__internal_696fc276104e54269e681fba87c75b7a93d65f10637a3ad25e691d7e2c9840e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basket/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73055b77c6df6a3b35014ae09e8eb93c44fc617d39ece0ea1ce8521c5e97d4a->leave($__internal_e73055b77c6df6a3b35014ae09e8eb93c44fc617d39ece0ea1ce8521c5e97d4a_prof);

        
        $__internal_696fc276104e54269e681fba87c75b7a93d65f10637a3ad25e691d7e2c9840e3->leave($__internal_696fc276104e54269e681fba87c75b7a93d65f10637a3ad25e691d7e2c9840e3_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        $__internal_1a2e7f6d8346a8a3c343cf158f86105475e66964dee395ed15cb0db58ad6eb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2e7f6d8346a8a3c343cf158f86105475e66964dee395ed15cb0db58ad6eb9c->enter($__internal_1a2e7f6d8346a8a3c343cf158f86105475e66964dee395ed15cb0db58ad6eb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_2fa25ad6bc5b87a9a188f2e8d25356c7b6503bb3807dd49cba68b8c19ed1334a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa25ad6bc5b87a9a188f2e8d25356c7b6503bb3807dd49cba68b8c19ed1334a->enter($__internal_2fa25ad6bc5b87a9a188f2e8d25356c7b6503bb3807dd49cba68b8c19ed1334a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "List of Quote";
        
        $__internal_2fa25ad6bc5b87a9a188f2e8d25356c7b6503bb3807dd49cba68b8c19ed1334a->leave($__internal_2fa25ad6bc5b87a9a188f2e8d25356c7b6503bb3807dd49cba68b8c19ed1334a_prof);

        
        $__internal_1a2e7f6d8346a8a3c343cf158f86105475e66964dee395ed15cb0db58ad6eb9c->leave($__internal_1a2e7f6d8346a8a3c343cf158f86105475e66964dee395ed15cb0db58ad6eb9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee028d89a3b88d66c9046b8547eb60a0f1860b7ee5e9249c5da170f3cda6f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee028d89a3b88d66c9046b8547eb60a0f1860b7ee5e9249c5da170f3cda6f12->enter($__internal_cee028d89a3b88d66c9046b8547eb60a0f1860b7ee5e9249c5da170f3cda6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a543f5d686a2a422a0ce689d250004e6cf1d53c5faba97e19b3c03205aa6c308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a543f5d686a2a422a0ce689d250004e6cf1d53c5faba97e19b3c03205aa6c308->enter($__internal_a543f5d686a2a422a0ce689d250004e6cf1d53c5faba97e19b3c03205aa6c308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context["basket_suppliers_detail"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "basket"), "method");
        // line 8
        echo "
    ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "basket"), "method"));
        echo "

    <h1>List of suppliers in basket</h1>

    ";
        // line 13
        if ((null === ($context["basket_suppliers_detail"] ?? $this->getContext($context, "basket_suppliers_detail")))) {
            // line 14
            echo "        <p>
            You have no suppliers in your basket!!!
        </p>
    ";
        } else {
            // line 18
            echo "        <ul>
            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["basket_suppliers_detail"] ?? $this->getContext($context, "basket_suppliers_detail")));
            foreach ($context['_seq'] as $context["_key"] => $context["suppliers_details"]) {
                // line 20
                echo "                <li>
                    <hr>
                    suppliers_id = ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_details"], "suppliersId", array()), "html", null, true);
                echo "
                    <br>
                    susuppliers_Name = ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_details"], "susuppliersName", array()), "html", null, true);
                echo "
                    <br>
                    suppliers_business_type = ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_details"], "suppliersBusinessType", array()), "html", null, true);
                echo "
                    <br>
                    suppliers_web = ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_details"], "suppliersWeb", array()), "html", null, true);
                echo "

                    <br>
                    <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_basket_delete", array("id" => $this->getAttribute($context["suppliers_details"], "id", array()))), "html", null, true);
                echo "\">(remove)</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suppliers_details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </ul>
    ";
        }
        // line 36
        echo "

    <p>
        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_basket_clear");
        echo "\">Clear all items in basket</a>
    </p>

";
        
        $__internal_a543f5d686a2a422a0ce689d250004e6cf1d53c5faba97e19b3c03205aa6c308->leave($__internal_a543f5d686a2a422a0ce689d250004e6cf1d53c5faba97e19b3c03205aa6c308_prof);

        
        $__internal_cee028d89a3b88d66c9046b8547eb60a0f1860b7ee5e9249c5da170f3cda6f12->leave($__internal_cee028d89a3b88d66c9046b8547eb60a0f1860b7ee5e9249c5da170f3cda6f12_prof);

    }

    public function getTemplateName()
    {
        return "basket/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  136 => 36,  132 => 34,  123 => 31,  117 => 28,  112 => 26,  107 => 24,  102 => 22,  98 => 20,  94 => 19,  91 => 18,  85 => 14,  83 => 13,  76 => 9,  73 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block pageTitle %}List of Quote{% endblock %}

{% block body %}

    {% set basket_suppliers_detail = app.session.get('basket') %}

    {{ dump(app.session.get('basket')) }}

    <h1>List of suppliers in basket</h1>

    {% if basket_suppliers_detail is null %}
        <p>
            You have no suppliers in your basket!!!
        </p>
    {% else %}
        <ul>
            {% for suppliers_details in basket_suppliers_detail %}
                <li>
                    <hr>
                    suppliers_id = {{ suppliers_details.suppliersId }}
                    <br>
                    susuppliers_Name = {{ suppliers_details.susuppliersName  }}
                    <br>
                    suppliers_business_type = {{ suppliers_details.suppliersBusinessType }}
                    <br>
                    suppliers_web = {{ suppliers_details.suppliersWeb }}

                    <br>
                    <a href=\"{{ path('suppliers_details_basket_delete', { 'id': suppliers_details.id }) }}\">(remove)</a>
                </li>
            {% endfor %}
        </ul>
    {% endif %}


    <p>
        <a href=\"{{ path('suppliers_details_basket_clear') }}\">Clear all items in basket</a>
    </p>

{% endblock %}

", "basket/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\basket\\index.html.twig");
    }
}
