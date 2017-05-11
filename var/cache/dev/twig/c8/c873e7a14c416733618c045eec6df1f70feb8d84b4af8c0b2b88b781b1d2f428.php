<?php

/* security/login.html.twig */
class __TwigTemplate_35de2f02cedeef1a0d56a7abc3e965394d6b19fb2ba12fcf68e9dc0c62bdcdf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'pagerTitle' => array($this, 'block_pagerTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f28187e7efdcbd0815f19d6c6a2fb9453131296e356e68d7335c992124cad7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28187e7efdcbd0815f19d6c6a2fb9453131296e356e68d7335c992124cad7c0->enter($__internal_f28187e7efdcbd0815f19d6c6a2fb9453131296e356e68d7335c992124cad7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_f1002aa7e7d40949387b93d83ffa82e0708e43565f082430007a8a476a6e20e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1002aa7e7d40949387b93d83ffa82e0708e43565f082430007a8a476a6e20e4->enter($__internal_f1002aa7e7d40949387b93d83ffa82e0708e43565f082430007a8a476a6e20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f28187e7efdcbd0815f19d6c6a2fb9453131296e356e68d7335c992124cad7c0->leave($__internal_f28187e7efdcbd0815f19d6c6a2fb9453131296e356e68d7335c992124cad7c0_prof);

        
        $__internal_f1002aa7e7d40949387b93d83ffa82e0708e43565f082430007a8a476a6e20e4->leave($__internal_f1002aa7e7d40949387b93d83ffa82e0708e43565f082430007a8a476a6e20e4_prof);

    }

    // line 2
    public function block_pagerTitle($context, array $blocks = array())
    {
        $__internal_1b9f9aa01d2f2932287d7ac58c5c6b63c7f4cccf7058964e082e6322922adfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b9f9aa01d2f2932287d7ac58c5c6b63c7f4cccf7058964e082e6322922adfb9->enter($__internal_1b9f9aa01d2f2932287d7ac58c5c6b63c7f4cccf7058964e082e6322922adfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagerTitle"));

        $__internal_da93794f60a116f3a5bde5a0514882a670277a368c9d59540d5e738b9da153f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da93794f60a116f3a5bde5a0514882a670277a368c9d59540d5e738b9da153f7->enter($__internal_da93794f60a116f3a5bde5a0514882a670277a368c9d59540d5e738b9da153f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagerTitle"));

        echo "login";
        
        $__internal_da93794f60a116f3a5bde5a0514882a670277a368c9d59540d5e738b9da153f7->leave($__internal_da93794f60a116f3a5bde5a0514882a670277a368c9d59540d5e738b9da153f7_prof);

        
        $__internal_1b9f9aa01d2f2932287d7ac58c5c6b63c7f4cccf7058964e082e6322922adfb9->leave($__internal_1b9f9aa01d2f2932287d7ac58c5c6b63c7f4cccf7058964e082e6322922adfb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1a86474f42a7a7123cebb7f402a8d84d99c3be35c2c2e3c6e3a3b1f8cd5988b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a86474f42a7a7123cebb7f402a8d84d99c3be35c2c2e3c6e3a3b1f8cd5988b->enter($__internal_a1a86474f42a7a7123cebb7f402a8d84d99c3be35c2c2e3c6e3a3b1f8cd5988b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62ed27eebbd60a856cdbcf2e0bc958b2d0d225d68ee7e0c2e87d684137f0a7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ed27eebbd60a856cdbcf2e0bc958b2d0d225d68ee7e0c2e87d684137f0a7b0->enter($__internal_62ed27eebbd60a856cdbcf2e0bc958b2d0d225d68ee7e0c2e87d684137f0a7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <h1>Login</h1>
        ";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 8
        echo "        <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\"> <input type=\"hidden\" name=\"_csrf_token\"
                                                                 value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
            >
            <p>
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
            <p>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            <p>
                <button type=\"submit\">login</button> </form>
    ";
        
        $__internal_62ed27eebbd60a856cdbcf2e0bc958b2d0d225d68ee7e0c2e87d684137f0a7b0->leave($__internal_62ed27eebbd60a856cdbcf2e0bc958b2d0d225d68ee7e0c2e87d684137f0a7b0_prof);

        
        $__internal_a1a86474f42a7a7123cebb7f402a8d84d99c3be35c2c2e3c6e3a3b1f8cd5988b->leave($__internal_a1a86474f42a7a7123cebb7f402a8d84d99c3be35c2c2e3c6e3a3b1f8cd5988b_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 13,  84 => 9,  79 => 8,  73 => 6,  71 => 5,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    {% block pagerTitle %}login{% endblock %}
    {% block body %}
        <h1>Login</h1>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}
        <form action=\"{{ path('login') }}\" method=\"post\"> <input type=\"hidden\" name=\"_csrf_token\"
                                                                 value=\"{{ csrf_token('authenticate') }}\"
            >
            <p>
                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />
            <p>
                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"_password\" />
            <p>
                <button type=\"submit\">login</button> </form>
    {% endblock %}
", "security/login.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\security\\login.html.twig");
    }
}
