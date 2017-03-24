<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_480e38016fd026d2ec6707f4ec2c252e8e78f923c3be8381de07c74124c926ef extends Twig_Template
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
        $__internal_3a4904e7b8aecfcf5ad422a6ba9f1e22e8e3d99135b4b09c58dbef7bd61cf146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4904e7b8aecfcf5ad422a6ba9f1e22e8e3d99135b4b09c58dbef7bd61cf146->enter($__internal_3a4904e7b8aecfcf5ad422a6ba9f1e22e8e3d99135b4b09c58dbef7bd61cf146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3c7599480d9c944ce39b6ba397fad30da911b3e1a073b9e025b2d0e8fd3ab8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7599480d9c944ce39b6ba397fad30da911b3e1a073b9e025b2d0e8fd3ab8d4->enter($__internal_3c7599480d9c944ce39b6ba397fad30da911b3e1a073b9e025b2d0e8fd3ab8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a4904e7b8aecfcf5ad422a6ba9f1e22e8e3d99135b4b09c58dbef7bd61cf146->leave($__internal_3a4904e7b8aecfcf5ad422a6ba9f1e22e8e3d99135b4b09c58dbef7bd61cf146_prof);

        
        $__internal_3c7599480d9c944ce39b6ba397fad30da911b3e1a073b9e025b2d0e8fd3ab8d4->leave($__internal_3c7599480d9c944ce39b6ba397fad30da911b3e1a073b9e025b2d0e8fd3ab8d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec05f7a7f920c5c3a2b9cd231554019e53ce972e6c56b80343793da80d4fe987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec05f7a7f920c5c3a2b9cd231554019e53ce972e6c56b80343793da80d4fe987->enter($__internal_ec05f7a7f920c5c3a2b9cd231554019e53ce972e6c56b80343793da80d4fe987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e4fe59e62133704887a0d08c4526801ee08ab974e67e8530f257c769d1d2f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4fe59e62133704887a0d08c4526801ee08ab974e67e8530f257c769d1d2f9e->enter($__internal_2e4fe59e62133704887a0d08c4526801ee08ab974e67e8530f257c769d1d2f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2e4fe59e62133704887a0d08c4526801ee08ab974e67e8530f257c769d1d2f9e->leave($__internal_2e4fe59e62133704887a0d08c4526801ee08ab974e67e8530f257c769d1d2f9e_prof);

        
        $__internal_ec05f7a7f920c5c3a2b9cd231554019e53ce972e6c56b80343793da80d4fe987->leave($__internal_ec05f7a7f920c5c3a2b9cd231554019e53ce972e6c56b80343793da80d4fe987_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_02bb3738c99117a66cb70780ed62d6935bdba77796812f761400a3fb15dd7f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02bb3738c99117a66cb70780ed62d6935bdba77796812f761400a3fb15dd7f54->enter($__internal_02bb3738c99117a66cb70780ed62d6935bdba77796812f761400a3fb15dd7f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7de20ac61f9b6e35a4d2a42a9b9676c2057c881115e88d7ea4b92775654c78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7de20ac61f9b6e35a4d2a42a9b9676c2057c881115e88d7ea4b92775654c78e->enter($__internal_a7de20ac61f9b6e35a4d2a42a9b9676c2057c881115e88d7ea4b92775654c78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7de20ac61f9b6e35a4d2a42a9b9676c2057c881115e88d7ea4b92775654c78e->leave($__internal_a7de20ac61f9b6e35a4d2a42a9b9676c2057c881115e88d7ea4b92775654c78e_prof);

        
        $__internal_02bb3738c99117a66cb70780ed62d6935bdba77796812f761400a3fb15dd7f54->leave($__internal_02bb3738c99117a66cb70780ed62d6935bdba77796812f761400a3fb15dd7f54_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_94fac547219a47e88966e61b9fc671d110601d38723d9bd9cf41a96489148b94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fac547219a47e88966e61b9fc671d110601d38723d9bd9cf41a96489148b94->enter($__internal_94fac547219a47e88966e61b9fc671d110601d38723d9bd9cf41a96489148b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3fac5cbed4edc98df2ae95b4a87a90a3cf549ec2020a9a11a99c29a4432030c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fac5cbed4edc98df2ae95b4a87a90a3cf549ec2020a9a11a99c29a4432030c1->enter($__internal_3fac5cbed4edc98df2ae95b4a87a90a3cf549ec2020a9a11a99c29a4432030c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3fac5cbed4edc98df2ae95b4a87a90a3cf549ec2020a9a11a99c29a4432030c1->leave($__internal_3fac5cbed4edc98df2ae95b4a87a90a3cf549ec2020a9a11a99c29a4432030c1_prof);

        
        $__internal_94fac547219a47e88966e61b9fc671d110601d38723d9bd9cf41a96489148b94->leave($__internal_94fac547219a47e88966e61b9fc671d110601d38723d9bd9cf41a96489148b94_prof);

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
