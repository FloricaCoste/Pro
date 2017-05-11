<?php

/* user/index.html.twig */
class __TwigTemplate_92d781405861d2fc91284bdde6893823e1b7181a6d9028ae80c8d4f94a028024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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
        $__internal_25e35d434f7a8ac67514c7b7462bc088ffa1925f02b13687451b340e71db0f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25e35d434f7a8ac67514c7b7462bc088ffa1925f02b13687451b340e71db0f4c->enter($__internal_25e35d434f7a8ac67514c7b7462bc088ffa1925f02b13687451b340e71db0f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_cdfef9f25e354a7ab81585a1a15a441dbe0f35d55170abda7f80c620eb9e10a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdfef9f25e354a7ab81585a1a15a441dbe0f35d55170abda7f80c620eb9e10a5->enter($__internal_cdfef9f25e354a7ab81585a1a15a441dbe0f35d55170abda7f80c620eb9e10a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25e35d434f7a8ac67514c7b7462bc088ffa1925f02b13687451b340e71db0f4c->leave($__internal_25e35d434f7a8ac67514c7b7462bc088ffa1925f02b13687451b340e71db0f4c_prof);

        
        $__internal_cdfef9f25e354a7ab81585a1a15a441dbe0f35d55170abda7f80c620eb9e10a5->leave($__internal_cdfef9f25e354a7ab81585a1a15a441dbe0f35d55170abda7f80c620eb9e10a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15ce63e25517a690a1fa9f6b29c5e061de5a02ad9ea39628d0fd883ea847f075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ce63e25517a690a1fa9f6b29c5e061de5a02ad9ea39628d0fd883ea847f075->enter($__internal_15ce63e25517a690a1fa9f6b29c5e061de5a02ad9ea39628d0fd883ea847f075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_512fc20f10aeb26e02f956ba654a4f24ca91a14081492325e4af92fe867f966d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512fc20f10aeb26e02f956ba654a4f24ca91a14081492325e4af92fe867f966d->enter($__internal_512fc20f10aeb26e02f956ba654a4f24ca91a14081492325e4af92fe867f966d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "password", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["user"], "isActive", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "roles", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_512fc20f10aeb26e02f956ba654a4f24ca91a14081492325e4af92fe867f966d->leave($__internal_512fc20f10aeb26e02f956ba654a4f24ca91a14081492325e4af92fe867f966d_prof);

        
        $__internal_15ce63e25517a690a1fa9f6b29c5e061de5a02ad9ea39628d0fd883ea847f075->leave($__internal_15ce63e25517a690a1fa9f6b29c5e061de5a02ad9ea39628d0fd883ea847f075_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  99 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Isactive</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.username }}</td>
                <td>{{ user.password }}</td>
                <td>{{ user.email }}</td>
                <td>{% if user.isActive %}Yes{% else %}No{% endif %}</td>
                <td>{{ user.roles }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "user/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\user\\index.html.twig");
    }
}
