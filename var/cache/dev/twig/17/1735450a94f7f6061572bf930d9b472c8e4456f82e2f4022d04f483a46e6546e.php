<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a970d515ab58bf114edbe437d62759e76dd39d6471e671066a875473217e49c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa460bf98f5dd6dcac15c2be1b942a291c0873979460fa0227753c3b673bd90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa460bf98f5dd6dcac15c2be1b942a291c0873979460fa0227753c3b673bd90->enter($__internal_cfa460bf98f5dd6dcac15c2be1b942a291c0873979460fa0227753c3b673bd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_591fa614efe38bac1ec604de97f8f7fa66c314dec8d67859c910262074904ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591fa614efe38bac1ec604de97f8f7fa66c314dec8d67859c910262074904ba1->enter($__internal_591fa614efe38bac1ec604de97f8f7fa66c314dec8d67859c910262074904ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cfa460bf98f5dd6dcac15c2be1b942a291c0873979460fa0227753c3b673bd90->leave($__internal_cfa460bf98f5dd6dcac15c2be1b942a291c0873979460fa0227753c3b673bd90_prof);

        
        $__internal_591fa614efe38bac1ec604de97f8f7fa66c314dec8d67859c910262074904ba1->leave($__internal_591fa614efe38bac1ec604de97f8f7fa66c314dec8d67859c910262074904ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\laragon\\www\\Hotel\\pro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
