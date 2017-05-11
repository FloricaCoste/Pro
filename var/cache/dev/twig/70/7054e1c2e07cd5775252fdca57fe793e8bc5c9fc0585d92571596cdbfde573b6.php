<?php

/* AcmeStoreBundle:Default:index.html.twig */
class __TwigTemplate_550c19854e1f73fb9d3f240cf78d3d40929070415c942b53343d9a0b99ae7ae7 extends Twig_Template
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
        $__internal_1e4ecea3cac88f81ded779fded602be39c56d6c5b6f739448fb9c53b3c8b29fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4ecea3cac88f81ded779fded602be39c56d6c5b6f739448fb9c53b3c8b29fe->enter($__internal_1e4ecea3cac88f81ded779fded602be39c56d6c5b6f739448fb9c53b3c8b29fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeStoreBundle:Default:index.html.twig"));

        $__internal_1238854d49d8b0c021ca6e6bf9c5276aa6a498493902529b3165bfd83ef24c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1238854d49d8b0c021ca6e6bf9c5276aa6a498493902529b3165bfd83ef24c07->enter($__internal_1238854d49d8b0c021ca6e6bf9c5276aa6a498493902529b3165bfd83ef24c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeStoreBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1e4ecea3cac88f81ded779fded602be39c56d6c5b6f739448fb9c53b3c8b29fe->leave($__internal_1e4ecea3cac88f81ded779fded602be39c56d6c5b6f739448fb9c53b3c8b29fe_prof);

        
        $__internal_1238854d49d8b0c021ca6e6bf9c5276aa6a498493902529b3165bfd83ef24c07->leave($__internal_1238854d49d8b0c021ca6e6bf9c5276aa6a498493902529b3165bfd83ef24c07_prof);

    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "AcmeStoreBundle:Default:index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\src\\Acme\\StoreBundle/Resources/views/Default/index.html.twig");
    }
}
