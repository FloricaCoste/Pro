<?php

/* quotation/show.html.twig */
class __TwigTemplate_9804682535476c880062a368c2ae17d5e7c3fc4dbe3080ac74979007f51f2f9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quotation/show.html.twig", 1);
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
        $__internal_6a903f78eacd954c012caed7269b7bec252462183f00f1e9b4410d05583352d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a903f78eacd954c012caed7269b7bec252462183f00f1e9b4410d05583352d2->enter($__internal_6a903f78eacd954c012caed7269b7bec252462183f00f1e9b4410d05583352d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/show.html.twig"));

        $__internal_c45b03c949987c144da2a16ca39ee4825ca57aab36a1f999ece49e6ffb4e390c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45b03c949987c144da2a16ca39ee4825ca57aab36a1f999ece49e6ffb4e390c->enter($__internal_c45b03c949987c144da2a16ca39ee4825ca57aab36a1f999ece49e6ffb4e390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quotation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a903f78eacd954c012caed7269b7bec252462183f00f1e9b4410d05583352d2->leave($__internal_6a903f78eacd954c012caed7269b7bec252462183f00f1e9b4410d05583352d2_prof);

        
        $__internal_c45b03c949987c144da2a16ca39ee4825ca57aab36a1f999ece49e6ffb4e390c->leave($__internal_c45b03c949987c144da2a16ca39ee4825ca57aab36a1f999ece49e6ffb4e390c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a987a255523955febabfbfe733e3513fd8e9de7b03243e26b749c8c700075b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a987a255523955febabfbfe733e3513fd8e9de7b03243e26b749c8c700075b0->enter($__internal_4a987a255523955febabfbfe733e3513fd8e9de7b03243e26b749c8c700075b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cdb18baa078180f47f627c997502698fcab29268020b4df13556f2eceff83d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cdb18baa078180f47f627c997502698fcab29268020b4df13556f2eceff83d3->enter($__internal_3cdb18baa078180f47f627c997502698fcab29268020b4df13556f2eceff83d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quotation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Quotationno</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "quotationNo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "userId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "suppliersId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productname</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "productName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Productdescription</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "productDescription", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Requeston</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "requestOn", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_edit", array("id" => $this->getAttribute(($context["quotation"] ?? $this->getContext($context, "quotation")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3cdb18baa078180f47f627c997502698fcab29268020b4df13556f2eceff83d3->leave($__internal_3cdb18baa078180f47f627c997502698fcab29268020b4df13556f2eceff83d3_prof);

        
        $__internal_4a987a255523955febabfbfe733e3513fd8e9de7b03243e26b749c8c700075b0->leave($__internal_4a987a255523955febabfbfe733e3513fd8e9de7b03243e26b749c8c700075b0_prof);

    }

    public function getTemplateName()
    {
        return "quotation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  121 => 47,  115 => 44,  109 => 41,  99 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Quotation</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ quotation.id }}</td>
            </tr>
            <tr>
                <th>Quotationno</th>
                <td>{{ quotation.quotationNo }}</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>{{ quotation.userId }}</td>
            </tr>
            <tr>
                <th>Suppliersid</th>
                <td>{{ quotation.suppliersId }}</td>
            </tr>
            <tr>
                <th>Productname</th>
                <td>{{ quotation.productName }}</td>
            </tr>
            <tr>
                <th>Productdescription</th>
                <td>{{ quotation.productDescription }}</td>
            </tr>
            <tr>
                <th>Requeston</th>
                <td>{{ quotation.requestOn }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quotation_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('quotation_edit', { 'id': quotation.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "quotation/show.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\quotation\\show.html.twig");
    }
}
