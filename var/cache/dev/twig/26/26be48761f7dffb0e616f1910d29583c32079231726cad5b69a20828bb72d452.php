<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_52d7a2ec6d36fb7481ce8dd80b75cf7d16b8b3111c9db635285a429fda476f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e126939d4f78d1054d197b126d14b884ea11ee8267be69a16949cdbd75554ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e126939d4f78d1054d197b126d14b884ea11ee8267be69a16949cdbd75554ffc->enter($__internal_e126939d4f78d1054d197b126d14b884ea11ee8267be69a16949cdbd75554ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_507d235c4e22895f9318632ee0a57faff4421963f4fa19f91df4fd20ee169e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507d235c4e22895f9318632ee0a57faff4421963f4fa19f91df4fd20ee169e17->enter($__internal_507d235c4e22895f9318632ee0a57faff4421963f4fa19f91df4fd20ee169e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e126939d4f78d1054d197b126d14b884ea11ee8267be69a16949cdbd75554ffc->leave($__internal_e126939d4f78d1054d197b126d14b884ea11ee8267be69a16949cdbd75554ffc_prof);

        
        $__internal_507d235c4e22895f9318632ee0a57faff4421963f4fa19f91df4fd20ee169e17->leave($__internal_507d235c4e22895f9318632ee0a57faff4421963f4fa19f91df4fd20ee169e17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_762e159033de2c5ebc7abf7ff350390b4a784213c816ccc4dbb4ade460340286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762e159033de2c5ebc7abf7ff350390b4a784213c816ccc4dbb4ade460340286->enter($__internal_762e159033de2c5ebc7abf7ff350390b4a784213c816ccc4dbb4ade460340286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_464be21042d5ca5985248cb848b4a2411e5ef9421a12a001f8a8da4a191478b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464be21042d5ca5985248cb848b4a2411e5ef9421a12a001f8a8da4a191478b1->enter($__internal_464be21042d5ca5985248cb848b4a2411e5ef9421a12a001f8a8da4a191478b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_464be21042d5ca5985248cb848b4a2411e5ef9421a12a001f8a8da4a191478b1->leave($__internal_464be21042d5ca5985248cb848b4a2411e5ef9421a12a001f8a8da4a191478b1_prof);

        
        $__internal_762e159033de2c5ebc7abf7ff350390b4a784213c816ccc4dbb4ade460340286->leave($__internal_762e159033de2c5ebc7abf7ff350390b4a784213c816ccc4dbb4ade460340286_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_555ff35f879405ba51e2e1e7e649fd3226a35352acb00bd9f92fe4249dd896e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555ff35f879405ba51e2e1e7e649fd3226a35352acb00bd9f92fe4249dd896e0->enter($__internal_555ff35f879405ba51e2e1e7e649fd3226a35352acb00bd9f92fe4249dd896e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c53338d13315b82b1c90ac33a6298a9cc923336df5d4fc14ca889aa6781a09ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53338d13315b82b1c90ac33a6298a9cc923336df5d4fc14ca889aa6781a09ca->enter($__internal_c53338d13315b82b1c90ac33a6298a9cc923336df5d4fc14ca889aa6781a09ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c53338d13315b82b1c90ac33a6298a9cc923336df5d4fc14ca889aa6781a09ca->leave($__internal_c53338d13315b82b1c90ac33a6298a9cc923336df5d4fc14ca889aa6781a09ca_prof);

        
        $__internal_555ff35f879405ba51e2e1e7e649fd3226a35352acb00bd9f92fe4249dd896e0->leave($__internal_555ff35f879405ba51e2e1e7e649fd3226a35352acb00bd9f92fe4249dd896e0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e13aa439b9942b3b7544ddc1522ead2ec7a11a41d15402c0eadfd8ea7857f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e13aa439b9942b3b7544ddc1522ead2ec7a11a41d15402c0eadfd8ea7857f11->enter($__internal_3e13aa439b9942b3b7544ddc1522ead2ec7a11a41d15402c0eadfd8ea7857f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3296389eb7f46cdb1831e1621b66d2b7812792f4bcff9d41b0de171026ed4795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3296389eb7f46cdb1831e1621b66d2b7812792f4bcff9d41b0de171026ed4795->enter($__internal_3296389eb7f46cdb1831e1621b66d2b7812792f4bcff9d41b0de171026ed4795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3296389eb7f46cdb1831e1621b66d2b7812792f4bcff9d41b0de171026ed4795->leave($__internal_3296389eb7f46cdb1831e1621b66d2b7812792f4bcff9d41b0de171026ed4795_prof);

        
        $__internal_3e13aa439b9942b3b7544ddc1522ead2ec7a11a41d15402c0eadfd8ea7857f11->leave($__internal_3e13aa439b9942b3b7544ddc1522ead2ec7a11a41d15402c0eadfd8ea7857f11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
