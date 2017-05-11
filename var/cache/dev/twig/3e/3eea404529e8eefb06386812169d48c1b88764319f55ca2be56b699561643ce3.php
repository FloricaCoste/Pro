<?php

/* default/index.html.twig */
class __TwigTemplate_61ca70f4dbd8814ff20ddce5107fe05963d2d73cd1f6817b55e675fa8e36e758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_0435d685c78cf2b05f3a47df29831c1aa9f1aedb7776f89477ac702736bf4e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0435d685c78cf2b05f3a47df29831c1aa9f1aedb7776f89477ac702736bf4e62->enter($__internal_0435d685c78cf2b05f3a47df29831c1aa9f1aedb7776f89477ac702736bf4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_27581b3fc1c6d85f300a239a36a439b7c46ed452e293594e4b41a918ee48e90e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27581b3fc1c6d85f300a239a36a439b7c46ed452e293594e4b41a918ee48e90e->enter($__internal_27581b3fc1c6d85f300a239a36a439b7c46ed452e293594e4b41a918ee48e90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0435d685c78cf2b05f3a47df29831c1aa9f1aedb7776f89477ac702736bf4e62->leave($__internal_0435d685c78cf2b05f3a47df29831c1aa9f1aedb7776f89477ac702736bf4e62_prof);

        
        $__internal_27581b3fc1c6d85f300a239a36a439b7c46ed452e293594e4b41a918ee48e90e->leave($__internal_27581b3fc1c6d85f300a239a36a439b7c46ed452e293594e4b41a918ee48e90e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_525be70b1709156a821d0c4824c9a6b431aabb90a4de39654910ee40cf5aee0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525be70b1709156a821d0c4824c9a6b431aabb90a4de39654910ee40cf5aee0d->enter($__internal_525be70b1709156a821d0c4824c9a6b431aabb90a4de39654910ee40cf5aee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1943102af475879415a347d0376e15db50ac593713992987968b479c044d350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1943102af475879415a347d0376e15db50ac593713992987968b479c044d350->enter($__internal_a1943102af475879415a347d0376e15db50ac593713992987968b479c044d350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Welcome to Hotel Material Control</h1> <p>

    <p>This WEB Application it is created for the hotel. The application will aloud all user to access suppliers’ details and products information;
    </p>
    <p>
    Each user from the hotel can see the same information about different products and the suppliers which provide a product
    </p>
    <p>
    “Manager user’s will be able to create a data tracking for stock on hand, order proposal, stocking requirement, submit a purchase order
    </p>
    <p>
    On the same time a “Manager user” can generate a plan stock base on forecast for: the rooms sold versus guest in house and compare price between supplier which provides the same product;
    </p>
    <p>
    All the information about suppliers and products are created/update by the “Manager user”, so everyone will be able to access the correct information.
    </p>
    <p>
    If anyone request quotes for different items from suppliers and log the event, will be able to follow up on and avoid that that more than one user send out the same request
    </p>
    <p>
    “Manager user” will be able follow up on the delivery.
    </p>
    <p>
    To avoid a time waste between passing an order from a user to the others (“Manager user”, “General Manager” and “Account Manager”) will be create a order list, so once a PO it is approved and send out it move on the follow up list.
    </p>
    <p>
    Once the items arrive become part of on hand sock and the Order will be assign for a payment.
    </p>
    <p>
    “Account Manager” will be able to complete the payment process.

</p>
";
        
        $__internal_a1943102af475879415a347d0376e15db50ac593713992987968b479c044d350->leave($__internal_a1943102af475879415a347d0376e15db50ac593713992987968b479c044d350_prof);

        
        $__internal_525be70b1709156a821d0c4824c9a6b431aabb90a4de39654910ee40cf5aee0d->leave($__internal_525be70b1709156a821d0c4824c9a6b431aabb90a4de39654910ee40cf5aee0d_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
    <h1>Welcome to Hotel Material Control</h1> <p>

    <p>This WEB Application it is created for the hotel. The application will aloud all user to access suppliers’ details and products information;
    </p>
    <p>
    Each user from the hotel can see the same information about different products and the suppliers which provide a product
    </p>
    <p>
    “Manager user’s will be able to create a data tracking for stock on hand, order proposal, stocking requirement, submit a purchase order
    </p>
    <p>
    On the same time a “Manager user” can generate a plan stock base on forecast for: the rooms sold versus guest in house and compare price between supplier which provides the same product;
    </p>
    <p>
    All the information about suppliers and products are created/update by the “Manager user”, so everyone will be able to access the correct information.
    </p>
    <p>
    If anyone request quotes for different items from suppliers and log the event, will be able to follow up on and avoid that that more than one user send out the same request
    </p>
    <p>
    “Manager user” will be able follow up on the delivery.
    </p>
    <p>
    To avoid a time waste between passing an order from a user to the others (“Manager user”, “General Manager” and “Account Manager”) will be create a order list, so once a PO it is approved and send out it move on the follow up list.
    </p>
    <p>
    Once the items arrive become part of on hand sock and the Order will be assign for a payment.
    </p>
    <p>
    “Account Manager” will be able to complete the payment process.

</p>
{% endblock %}", "default/index.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\default\\index.html.twig");
    }
}
