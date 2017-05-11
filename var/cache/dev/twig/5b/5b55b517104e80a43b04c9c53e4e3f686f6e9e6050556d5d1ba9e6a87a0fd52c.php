<?php

/* suppliers_address/index.html.twig */
class __TwigTemplate_c9a1e7df8a49fad5c96acf3d9735d067e3dfb5287c5fd5a287e4a61b12383d05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "suppliers_address/index.html.twig", 1);
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
        $__internal_a39ac90f5b83a4ea97c37163956e5af9f7c1b7bad2b57602f41b0678430ee34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39ac90f5b83a4ea97c37163956e5af9f7c1b7bad2b57602f41b0678430ee34d->enter($__internal_a39ac90f5b83a4ea97c37163956e5af9f7c1b7bad2b57602f41b0678430ee34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_address/index.html.twig"));

        $__internal_56f37835db9ef70c0896b6fc663a36b971b93835b19d5c558c86eeea440fa5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f37835db9ef70c0896b6fc663a36b971b93835b19d5c558c86eeea440fa5a7->enter($__internal_56f37835db9ef70c0896b6fc663a36b971b93835b19d5c558c86eeea440fa5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "suppliers_address/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39ac90f5b83a4ea97c37163956e5af9f7c1b7bad2b57602f41b0678430ee34d->leave($__internal_a39ac90f5b83a4ea97c37163956e5af9f7c1b7bad2b57602f41b0678430ee34d_prof);

        
        $__internal_56f37835db9ef70c0896b6fc663a36b971b93835b19d5c558c86eeea440fa5a7->leave($__internal_56f37835db9ef70c0896b6fc663a36b971b93835b19d5c558c86eeea440fa5a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_331e21f20d59762651a74ec4b97bc4f5bc3d9eeddbff9e1a8c4d4a91bcffea2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_331e21f20d59762651a74ec4b97bc4f5bc3d9eeddbff9e1a8c4d4a91bcffea2f->enter($__internal_331e21f20d59762651a74ec4b97bc4f5bc3d9eeddbff9e1a8c4d4a91bcffea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eee94fd31c02aae4931f877b1a9a152d32a7a3a9b3c5425a664f31fefa89530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eee94fd31c02aae4931f877b1a9a152d32a7a3a9b3c5425a664f31fefa89530->enter($__internal_7eee94fd31c02aae4931f877b1a9a152d32a7a3a9b3c5425a664f31fefa89530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Suppliers_addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Suppliersaddress</th>
                <th>Suppliersregion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suppliers_addresses"] ?? $this->getContext($context, "suppliers_addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["suppliers_address"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_address_show", array("id" => $this->getAttribute($context["suppliers_address"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_address"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_address"], "suppliersID", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_address"], "suppliersAddress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["suppliers_address"], "suppliersRegion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_address_show", array("id" => $this->getAttribute($context["suppliers_address"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_address_edit", array("id" => $this->getAttribute($context["suppliers_address"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suppliers_address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_address_new");
        echo "\">Create a new suppliers_address</a>
        </li>
    </ul>
";
        
        $__internal_7eee94fd31c02aae4931f877b1a9a152d32a7a3a9b3c5425a664f31fefa89530->leave($__internal_7eee94fd31c02aae4931f877b1a9a152d32a7a3a9b3c5425a664f31fefa89530_prof);

        
        $__internal_331e21f20d59762651a74ec4b97bc4f5bc3d9eeddbff9e1a8c4d4a91bcffea2f->leave($__internal_331e21f20d59762651a74ec4b97bc4f5bc3d9eeddbff9e1a8c4d4a91bcffea2f_prof);

    }

    public function getTemplateName()
    {
        return "suppliers_address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Suppliers_addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Suppliersid</th>
                <th>Suppliersaddress</th>
                <th>Suppliersregion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for suppliers_address in suppliers_addresses %}
            <tr>
                <td><a href=\"{{ path('suppliers_address_show', { 'id': suppliers_address.id }) }}\">{{ suppliers_address.id }}</a></td>
                <td>{{ suppliers_address.suppliersID }}</td>
                <td>{{ suppliers_address.suppliersAddress }}</td>
                <td>{{ suppliers_address.suppliersRegion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('suppliers_address_show', { 'id': suppliers_address.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('suppliers_address_edit', { 'id': suppliers_address.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('suppliers_address_new') }}\">Create a new suppliers_address</a>
        </li>
    </ul>
{% endblock %}
", "suppliers_address/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\suppliers_address\\index.html.twig");
    }
}
