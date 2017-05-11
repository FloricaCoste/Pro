<?php

/* quotation/index.html.twig */
class __TwigTemplate_08d4ba6206b4bd19711b4ea99b58b6e1f7fb62378a004d05ddab49cc72241814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quotation/index.html.twig", 1);
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
        $__internal_48b4c44aff44672aa27c061e51757ee42acce594a5adf6091dc625761facdcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b4c44aff44672aa27c061e51757ee42acce594a5adf6091dc625761facdcce->enter($__internal_48b4c44aff44672aa27c061e51757ee42acce594a5adf6091dc625761facdcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/index.html.twig"));

        $__internal_980774c1a4dddc659b64ee12c92758e938cfe738284d0e391ec551e7ba394d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980774c1a4dddc659b64ee12c92758e938cfe738284d0e391ec551e7ba394d99->enter($__internal_980774c1a4dddc659b64ee12c92758e938cfe738284d0e391ec551e7ba394d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b4c44aff44672aa27c061e51757ee42acce594a5adf6091dc625761facdcce->leave($__internal_48b4c44aff44672aa27c061e51757ee42acce594a5adf6091dc625761facdcce_prof);

        
        $__internal_980774c1a4dddc659b64ee12c92758e938cfe738284d0e391ec551e7ba394d99->leave($__internal_980774c1a4dddc659b64ee12c92758e938cfe738284d0e391ec551e7ba394d99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53c2ca83cf5648dba21addcd0e5541f1e52c0940cb021518c2ff3ffe390c7471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53c2ca83cf5648dba21addcd0e5541f1e52c0940cb021518c2ff3ffe390c7471->enter($__internal_53c2ca83cf5648dba21addcd0e5541f1e52c0940cb021518c2ff3ffe390c7471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_957266466cd4e39a08544f8110cfd1d45af38aea9f930bf2900c0af507a5416a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957266466cd4e39a08544f8110cfd1d45af38aea9f930bf2900c0af507a5416a->enter($__internal_957266466cd4e39a08544f8110cfd1d45af38aea9f930bf2900c0af507a5416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quotations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Quotation no</th>
                <th>User id</th>
                <th>Suppliers id</th>
                <th>Product name</th>
                <th>Product description</th>
                <th>Request on</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["quotations"] ?? $this->getContext($context, "quotations")));
        foreach ($context['_seq'] as $context["_key"] => $context["quotation"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_show", array("id" => $this->getAttribute($context["quotation"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "quotationNo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "productName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "productDescription", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["quotation"], "requestOn", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_show", array("id" => $this->getAttribute($context["quotation"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_edit", array("id" => $this->getAttribute($context["quotation"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quotation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_new");
        echo "\">Create a new quotation</a>
        </li>
    </ul>
";
        
        $__internal_957266466cd4e39a08544f8110cfd1d45af38aea9f930bf2900c0af507a5416a->leave($__internal_957266466cd4e39a08544f8110cfd1d45af38aea9f930bf2900c0af507a5416a_prof);

        
        $__internal_53c2ca83cf5648dba21addcd0e5541f1e52c0940cb021518c2ff3ffe390c7471->leave($__internal_53c2ca83cf5648dba21addcd0e5541f1e52c0940cb021518c2ff3ffe390c7471_prof);

    }

    public function getTemplateName()
    {
        return "quotation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 46,  125 => 41,  113 => 35,  107 => 32,  100 => 28,  96 => 27,  92 => 26,  88 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Quotations list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Quotation no</th>
                <th>User id</th>
                <th>Suppliers id</th>
                <th>Product name</th>
                <th>Product description</th>
                <th>Request on</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for quotation in quotations %}
            <tr>
                <td><a href=\"{{ path('quotation_show', { 'id': quotation.id }) }}\">{{ quotation.id }}</a></td>
                <td>{{ quotation.quotationNo }}</td>
                <td>{{ quotation.userId }}</td>
                <td>{{ quotation.suppliersId }}</td>
                <td>{{ quotation.productName }}</td>
                <td>{{ quotation.productDescription }}</td>
                <td>{{ quotation.requestOn }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('quotation_show', { 'id': quotation.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('quotation_edit', { 'id': quotation.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quotation_new') }}\">Create a new quotation</a>
        </li>
    </ul>
{% endblock %}
", "quotation/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\quotation\\index.html.twig");
    }
}
