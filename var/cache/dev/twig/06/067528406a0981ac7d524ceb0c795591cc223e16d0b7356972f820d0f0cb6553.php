<?php

/* suppliers_bank/index.html.twig */
class __TwigTemplate_e6ef9145477725e4e3a9bf99873f9953ddf62b4310a49af35baa33050bb3ff33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_bank/index.html.twig", 1);
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
        $__internal_360699bae5882aebc950f53ae737ceda04960351b6e596f22db1c2c92ed6f82a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360699bae5882aebc950f53ae737ceda04960351b6e596f22db1c2c92ed6f82a->enter($__internal_360699bae5882aebc950f53ae737ceda04960351b6e596f22db1c2c92ed6f82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_bank/index.html.twig"));

        $__internal_aeb74c0936fa60358e8534ddc50b098b8e303b4dcc73bbfcfc6ec56b90aa2637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb74c0936fa60358e8534ddc50b098b8e303b4dcc73bbfcfc6ec56b90aa2637->enter($__internal_aeb74c0936fa60358e8534ddc50b098b8e303b4dcc73bbfcfc6ec56b90aa2637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_bank/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_360699bae5882aebc950f53ae737ceda04960351b6e596f22db1c2c92ed6f82a->leave($__internal_360699bae5882aebc950f53ae737ceda04960351b6e596f22db1c2c92ed6f82a_prof);

        
        $__internal_aeb74c0936fa60358e8534ddc50b098b8e303b4dcc73bbfcfc6ec56b90aa2637->leave($__internal_aeb74c0936fa60358e8534ddc50b098b8e303b4dcc73bbfcfc6ec56b90aa2637_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80f914f221cf356d36f17116e5ac4c75881c0794db9caec1f1beb7d5fe7f81bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f914f221cf356d36f17116e5ac4c75881c0794db9caec1f1beb7d5fe7f81bc->enter($__internal_80f914f221cf356d36f17116e5ac4c75881c0794db9caec1f1beb7d5fe7f81bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fade61b5c096b2bda76296f30b42ac8f03af84455e6ba258bd52345e656dfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fade61b5c096b2bda76296f30b42ac8f03af84455e6ba258bd52345e656dfb0->enter($__internal_6fade61b5c096b2bda76296f30b42ac8f03af84455e6ba258bd52345e656dfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppliers_banks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Suppliersbankname</th>
                <th>Suppliersaccno</th>
                <th>Suppliersiban</th>
                <th>Suppliersbic</th>
                <th>Supplierscountry</th>
                <th>Suppliersbankaddress</th>
                <th>Uppliersswift</th>
                <th>Suppliersroutingcod</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers_banks"] ?? $this->getContext($context, "suppliers_banks")));
        foreach ($context['_seq'] as $context["_key"] => $context["suppliers_bank"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_bank_show", array("id" => $this->getAttribute($context["suppliers_bank"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersBankName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersAccNo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersIBAN", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersBIC", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersCountry", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersBankAddress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "uppliersSwift", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_bank"], "suppliersRoutingCod", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_bank_show", array("id" => $this->getAttribute($context["suppliers_bank"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_bank_edit", array("id" => $this->getAttribute($context["suppliers_bank"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suppliers_bank'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_bank_new");
        echo "\">Create a new suppliers_bank</a>
        </li>
    </ul>
";
        
        $__internal_6fade61b5c096b2bda76296f30b42ac8f03af84455e6ba258bd52345e656dfb0->leave($__internal_6fade61b5c096b2bda76296f30b42ac8f03af84455e6ba258bd52345e656dfb0_prof);

        
        $__internal_80f914f221cf356d36f17116e5ac4c75881c0794db9caec1f1beb7d5fe7f81bc->leave($__internal_80f914f221cf356d36f17116e5ac4c75881c0794db9caec1f1beb7d5fe7f81bc_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_bank/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  140 => 47,  128 => 41,  122 => 38,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Suppliers_banks list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Suppliersbankname</th>
                <th>Suppliersaccno</th>
                <th>Suppliersiban</th>
                <th>Suppliersbic</th>
                <th>Supplierscountry</th>
                <th>Suppliersbankaddress</th>
                <th>Uppliersswift</th>
                <th>Suppliersroutingcod</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for suppliers_bank in suppliers_banks %}
            <tr>
                <td><a href=\"{{ path('suppliers_bank_show', { 'id': suppliers_bank.id }) }}\">{{ suppliers_bank.id }}</a></td>
                <td>{{ suppliers_bank.suppliersId }}</td>
                <td>{{ suppliers_bank.suppliersBankName }}</td>
                <td>{{ suppliers_bank.suppliersAccNo }}</td>
                <td>{{ suppliers_bank.suppliersIBAN }}</td>
                <td>{{ suppliers_bank.suppliersBIC }}</td>
                <td>{{ suppliers_bank.suppliersCountry }}</td>
                <td>{{ suppliers_bank.suppliersBankAddress }}</td>
                <td>{{ suppliers_bank.uppliersSwift }}</td>
                <td>{{ suppliers_bank.suppliersRoutingCod }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('suppliers_bank_show', { 'id': suppliers_bank.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('suppliers_bank_edit', { 'id': suppliers_bank.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('suppliers_bank_new') }}\">Create a new suppliers_bank</a>
        </li>
    </ul>
{% endblock %}
", "suppliers_bank/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_bank\\index.html.twig");
    }
}
