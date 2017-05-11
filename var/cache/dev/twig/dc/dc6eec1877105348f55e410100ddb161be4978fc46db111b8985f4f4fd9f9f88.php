<?php

/* user_details/index.html.twig */
class __TwigTemplate_da5808759203171810c941d4091cc3b1b2f03407d1fd253dd72eb1173a63770b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user_details/index.html.twig", 1);
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
        $__internal_431d2c0de836a4c1b2aa4c7af7ceb811bc2bdaa85657d23d94192bcfad9b1542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431d2c0de836a4c1b2aa4c7af7ceb811bc2bdaa85657d23d94192bcfad9b1542->enter($__internal_431d2c0de836a4c1b2aa4c7af7ceb811bc2bdaa85657d23d94192bcfad9b1542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_details/index.html.twig"));

        $__internal_e1968e305de5214ec066ccf74d1dae5c3fc012dd7ba0c4d15a29bbfdca393175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1968e305de5214ec066ccf74d1dae5c3fc012dd7ba0c4d15a29bbfdca393175->enter($__internal_e1968e305de5214ec066ccf74d1dae5c3fc012dd7ba0c4d15a29bbfdca393175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user_details/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431d2c0de836a4c1b2aa4c7af7ceb811bc2bdaa85657d23d94192bcfad9b1542->leave($__internal_431d2c0de836a4c1b2aa4c7af7ceb811bc2bdaa85657d23d94192bcfad9b1542_prof);

        
        $__internal_e1968e305de5214ec066ccf74d1dae5c3fc012dd7ba0c4d15a29bbfdca393175->leave($__internal_e1968e305de5214ec066ccf74d1dae5c3fc012dd7ba0c4d15a29bbfdca393175_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed15718444f161ec9d58e90ddd29b4c483af2a3736e785625870cb91d2a58c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed15718444f161ec9d58e90ddd29b4c483af2a3736e785625870cb91d2a58c9d->enter($__internal_ed15718444f161ec9d58e90ddd29b4c483af2a3736e785625870cb91d2a58c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83c01355ffe1665ff685193b474f6895ec3b79cb6b9d89861b8cf825de64beb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c01355ffe1665ff685193b474f6895ec3b79cb6b9d89861b8cf825de64beb5->enter($__internal_83c01355ffe1665ff685193b474f6895ec3b79cb6b9d89861b8cf825de64beb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User id</th>
                <th>User phone no:</th>
                <th>User land line</th>
                <th>User prefix</th>
                <th>Use alternative email</th>
                <th>User first name</th>
                <th>User second name</th>
                <th>User email</th>
                <th>User validate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_details"] ?? $this->getContext($context, "user_details")));
        foreach ($context['_seq'] as $context["_key"] => $context["user_detail"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_details_show", array("id" => $this->getAttribute($context["user_detail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userDetailsPhone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userDetailsLandline", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userDetailsPrefix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userDetailsEmail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userFirstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userSecondName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user_detail"], "userEMail", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            if ($this->getAttribute($context["user_detail"], "userValidate", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_details_show", array("id" => $this->getAttribute($context["user_detail"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_details_edit", array("id" => $this->getAttribute($context["user_detail"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_details_new");
        echo "\">Create a new user_detail</a>
        </li>
    </ul>
";
        
        $__internal_83c01355ffe1665ff685193b474f6895ec3b79cb6b9d89861b8cf825de64beb5->leave($__internal_83c01355ffe1665ff685193b474f6895ec3b79cb6b9d89861b8cf825de64beb5_prof);

        
        $__internal_ed15718444f161ec9d58e90ddd29b4c483af2a3736e785625870cb91d2a58c9d->leave($__internal_ed15718444f161ec9d58e90ddd29b4c483af2a3736e785625870cb91d2a58c9d_prof);

    }

    public function getTemplateName()
    {
        return "user_details/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 52,  144 => 47,  132 => 41,  126 => 38,  115 => 34,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  77 => 25,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>User details list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>User id</th>
                <th>User phone no:</th>
                <th>User land line</th>
                <th>User prefix</th>
                <th>Use alternative email</th>
                <th>User first name</th>
                <th>User second name</th>
                <th>User email</th>
                <th>User validate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user_detail in user_details %}
            <tr>
                <td><a href=\"{{ path('user_details_show', { 'id': user_detail.id }) }}\">{{ user_detail.id }}</a></td>
                <td>{{ user_detail.userId }}</td>
                <td>{{ user_detail.userDetailsPhone }}</td>
                <td>{{ user_detail.userDetailsLandline }}</td>
                <td>{{ user_detail.userDetailsPrefix }}</td>
                <td>{{ user_detail.userDetailsEmail }}</td>
                <td>{{ user_detail.userFirstName }}</td>
                <td>{{ user_detail.userSecondName }}</td>
                <td>{{ user_detail.userEMail }}</td>
                <td>{% if user_detail.userValidate %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_details_show', { 'id': user_detail.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_details_edit', { 'id': user_detail.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_details_new') }}\">Create a new user_detail</a>
        </li>
    </ul>
{% endblock %}
", "user_details/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\user_details\\index.html.twig");
    }
}
