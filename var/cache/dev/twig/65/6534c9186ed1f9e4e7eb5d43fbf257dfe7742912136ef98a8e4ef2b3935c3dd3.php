<?php

/* base.html.twig */
class __TwigTemplate_e461d95e1d2892cdd0d1b7cffb9be3b485dee7efde8f1ac74c8c1d941ca29aa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44348801d14c66d08cf9f84d10f411202952c4e53e4241ee95df9e45a6a85701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44348801d14c66d08cf9f84d10f411202952c4e53e4241ee95df9e45a6a85701->enter($__internal_44348801d14c66d08cf9f84d10f411202952c4e53e4241ee95df9e45a6a85701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_971e5786308484347b70b0afee300aad3b74d952534930f6d189bc19c1bbf76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971e5786308484347b70b0afee300aad3b74d952534930f6d189bc19c1bbf76b->enter($__internal_971e5786308484347b70b0afee300aad3b74d952534930f6d189bc19c1bbf76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_44348801d14c66d08cf9f84d10f411202952c4e53e4241ee95df9e45a6a85701->leave($__internal_44348801d14c66d08cf9f84d10f411202952c4e53e4241ee95df9e45a6a85701_prof);

        
        $__internal_971e5786308484347b70b0afee300aad3b74d952534930f6d189bc19c1bbf76b->leave($__internal_971e5786308484347b70b0afee300aad3b74d952534930f6d189bc19c1bbf76b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_749e2772aa0a199e60030494e6fe521670af78edcfd0fe6060c71063d71e694e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749e2772aa0a199e60030494e6fe521670af78edcfd0fe6060c71063d71e694e->enter($__internal_749e2772aa0a199e60030494e6fe521670af78edcfd0fe6060c71063d71e694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e33698ebde3fc7b1a901417e44e44382e2c916953cc1280c10717bd6d85fbf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33698ebde3fc7b1a901417e44e44382e2c916953cc1280c10717bd6d85fbf48->enter($__internal_e33698ebde3fc7b1a901417e44e44382e2c916953cc1280c10717bd6d85fbf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel";
        
        $__internal_e33698ebde3fc7b1a901417e44e44382e2c916953cc1280c10717bd6d85fbf48->leave($__internal_e33698ebde3fc7b1a901417e44e44382e2c916953cc1280c10717bd6d85fbf48_prof);

        
        $__internal_749e2772aa0a199e60030494e6fe521670af78edcfd0fe6060c71063d71e694e->leave($__internal_749e2772aa0a199e60030494e6fe521670af78edcfd0fe6060c71063d71e694e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d17946681cca463b5b95557b5391a96061f87d37c072e2c52b1da9f076bb0bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d17946681cca463b5b95557b5391a96061f87d37c072e2c52b1da9f076bb0bf->enter($__internal_0d17946681cca463b5b95557b5391a96061f87d37c072e2c52b1da9f076bb0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_358eb1da32a82e32eea2c32f330e161a8dbf746ecd87a3b685ea1aca5660739a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358eb1da32a82e32eea2c32f330e161a8dbf746ecd87a3b685ea1aca5660739a->enter($__internal_358eb1da32a82e32eea2c32f330e161a8dbf746ecd87a3b685ea1aca5660739a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_358eb1da32a82e32eea2c32f330e161a8dbf746ecd87a3b685ea1aca5660739a->leave($__internal_358eb1da32a82e32eea2c32f330e161a8dbf746ecd87a3b685ea1aca5660739a_prof);

        
        $__internal_0d17946681cca463b5b95557b5391a96061f87d37c072e2c52b1da9f076bb0bf->leave($__internal_0d17946681cca463b5b95557b5391a96061f87d37c072e2c52b1da9f076bb0bf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_28dcf39eb804db1e4c98411ae4ae3d2ce4e166e26facf006efbcee2822255ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dcf39eb804db1e4c98411ae4ae3d2ce4e166e26facf006efbcee2822255ffb->enter($__internal_28dcf39eb804db1e4c98411ae4ae3d2ce4e166e26facf006efbcee2822255ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7303d265e8dff10b067e81ff5344265a2b9fea573cf98623aec86093a03a8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7303d265e8dff10b067e81ff5344265a2b9fea573cf98623aec86093a03a8bd->enter($__internal_d7303d265e8dff10b067e81ff5344265a2b9fea573cf98623aec86093a03a8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7303d265e8dff10b067e81ff5344265a2b9fea573cf98623aec86093a03a8bd->leave($__internal_d7303d265e8dff10b067e81ff5344265a2b9fea573cf98623aec86093a03a8bd_prof);

        
        $__internal_28dcf39eb804db1e4c98411ae4ae3d2ce4e166e26facf006efbcee2822255ffb->leave($__internal_28dcf39eb804db1e4c98411ae4ae3d2ce4e166e26facf006efbcee2822255ffb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_285bbbf1810bf9eec9f776681e891fb130b4e6a00c6872337a762ca03c43346c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285bbbf1810bf9eec9f776681e891fb130b4e6a00c6872337a762ca03c43346c->enter($__internal_285bbbf1810bf9eec9f776681e891fb130b4e6a00c6872337a762ca03c43346c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56840de7979bc69c741fa263468e9acadcf48b27fcc7e1259fce9bad4f42207a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56840de7979bc69c741fa263468e9acadcf48b27fcc7e1259fce9bad4f42207a->enter($__internal_56840de7979bc69c741fa263468e9acadcf48b27fcc7e1259fce9bad4f42207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56840de7979bc69c741fa263468e9acadcf48b27fcc7e1259fce9bad4f42207a->leave($__internal_56840de7979bc69c741fa263468e9acadcf48b27fcc7e1259fce9bad4f42207a_prof);

        
        $__internal_285bbbf1810bf9eec9f776681e891fb130b4e6a00c6872337a762ca03c43346c->leave($__internal_285bbbf1810bf9eec9f776681e891fb130b4e6a00c6872337a762ca03c43346c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Hotel{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\base.html.twig");
    }
}
