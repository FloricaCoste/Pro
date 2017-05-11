<?php

/* base.html.twig */
class __TwigTemplate_a0216a9fdd3ed71c53d5561b09519296abc3ab2e95e5a41955255d2789e73c40 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7177e2018381e2a85a26f25c3c705adc61f7c131d4c7f4f81da168c91d8331c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7177e2018381e2a85a26f25c3c705adc61f7c131d4c7f4f81da168c91d8331c9->enter($__internal_7177e2018381e2a85a26f25c3c705adc61f7c131d4c7f4f81da168c91d8331c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9266f61af9ff1c65928234c20352672960e9851f5409f60195874fddbf9bb28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9266f61af9ff1c65928234c20352672960e9851f5409f60195874fddbf9bb28d->enter($__internal_9266f61af9ff1c65928234c20352672960e9851f5409f60195874fddbf9bb28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        $context["colours"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "colours"), "method");
        // line 2
        if ((null === ($context["colours"] ?? $this->getContext($context, "colours")))) {
            // line 3
            echo "    ";
            $context["colours"] = array("foreground" => "saddlebrown", "background" => "cornsilk");
        }
        // line 9
        echo "
";
        // line 10
        $context["user"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method");
        // line 11
        echo "
    ";
        // line 12
        if ((null === ($context["user"] ?? $this->getContext($context, "user")))) {
            // line 13
            echo "        <p>
            Please login: <a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Login: </a>
        </p>
    ";
        } else {
            // line 17
            echo "        <header>
            You are logged in as: <strong>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</strong>
            <br>
            <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Logout: </a>
        </header>
    ";
        }
        // line 23
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <style>

        .dropbtn {
            background-color: peru;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: burlywood;
        }

        body {
            color: ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "foreground", array(), "array"), "html", null, true);
        echo ";
            background-color: ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["colours"] ?? $this->getContext($context, "colours")), "background", array(), "array"), "html", null, true);
        echo ";
        }
        tr, td {
            border: 0.1rem solid saddlebrown;
            padding: 0.5rem;
        }
        table{
            border: 0.1rem solid chocolate;
            padding: 0.5rem;
        }
        ";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 85
        echo "    </style>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\" />
</head>
<body>


<ul>

    <div class=\"dropdown\">
        <button class=\"dropbtn\">Product</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_details_index");
        echo "\">Product details</a>
            <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_invetory_index");
        echo "\">Product inventory</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Orders</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("po_index");
        echo "\">Create PO</a>
            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_index");
        echo "\">Orders</a>
            <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("orders_detail_index");
        echo "\">Orders details</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Suppliers</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_details_index");
        echo "\">Suppliers details</a>
            <a href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_address_index");
        echo "\">Suppliers address</a>
            <a href=\"";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_contact_index");
        echo "\">Suppliers contact</a>
            <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_bank_index");
        echo "\">Suppliers Bank</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Stock</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stock_index");
        echo "\">Stock</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Quotation</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quotation_index");
        echo "\">Quotation</a>
            <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("suppliers_quotation_index");
        echo "\">Suppliers Quotation</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Users</button>
        <div class=\"dropdown-content\">
            <a href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_details_index");
        echo "\">User details</a>
        </div>
    </div>
</ul>
<hr>


";
        // line 141
        $this->displayBlock('body', $context, $blocks);
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "
<hr>
<div id=\"footer\">
    ";
        // line 147
        $this->displayBlock('footer', $context, $blocks);
        // line 150
        echo "</div>
</body>
</html>
";
        
        $__internal_7177e2018381e2a85a26f25c3c705adc61f7c131d4c7f4f81da168c91d8331c9->leave($__internal_7177e2018381e2a85a26f25c3c705adc61f7c131d4c7f4f81da168c91d8331c9_prof);

        
        $__internal_9266f61af9ff1c65928234c20352672960e9851f5409f60195874fddbf9bb28d->leave($__internal_9266f61af9ff1c65928234c20352672960e9851f5409f60195874fddbf9bb28d_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce428dbb5ff4badb01395bdbe9ed6c43e43c64637a9db50b4ae641912b79eab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce428dbb5ff4badb01395bdbe9ed6c43e43c64637a9db50b4ae641912b79eab6->enter($__internal_ce428dbb5ff4badb01395bdbe9ed6c43e43c64637a9db50b4ae641912b79eab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34ac94971f698fd340ab569a04ee5d50b65bc488ea496be3d81e2680ecaa5943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ac94971f698fd340ab569a04ee5d50b65bc488ea496be3d81e2680ecaa5943->enter($__internal_34ac94971f698fd340ab569a04ee5d50b65bc488ea496be3d81e2680ecaa5943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hotel";
        
        $__internal_34ac94971f698fd340ab569a04ee5d50b65bc488ea496be3d81e2680ecaa5943->leave($__internal_34ac94971f698fd340ab569a04ee5d50b65bc488ea496be3d81e2680ecaa5943_prof);

        
        $__internal_ce428dbb5ff4badb01395bdbe9ed6c43e43c64637a9db50b4ae641912b79eab6->leave($__internal_ce428dbb5ff4badb01395bdbe9ed6c43e43c64637a9db50b4ae641912b79eab6_prof);

    }

    // line 83
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dc60b0fdb078a057e5cd52559b6e6076dd8c7282a85842cf3391ce06672e081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc60b0fdb078a057e5cd52559b6e6076dd8c7282a85842cf3391ce06672e081->enter($__internal_0dc60b0fdb078a057e5cd52559b6e6076dd8c7282a85842cf3391ce06672e081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b1a6ee0c951c96a7e3d908a3ca3781ee3c5d37a32b5354894b5d14a211399067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1a6ee0c951c96a7e3d908a3ca3781ee3c5d37a32b5354894b5d14a211399067->enter($__internal_b1a6ee0c951c96a7e3d908a3ca3781ee3c5d37a32b5354894b5d14a211399067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 84
        echo "        ";
        
        $__internal_b1a6ee0c951c96a7e3d908a3ca3781ee3c5d37a32b5354894b5d14a211399067->leave($__internal_b1a6ee0c951c96a7e3d908a3ca3781ee3c5d37a32b5354894b5d14a211399067_prof);

        
        $__internal_0dc60b0fdb078a057e5cd52559b6e6076dd8c7282a85842cf3391ce06672e081->leave($__internal_0dc60b0fdb078a057e5cd52559b6e6076dd8c7282a85842cf3391ce06672e081_prof);

    }

    // line 141
    public function block_body($context, array $blocks = array())
    {
        $__internal_c840c28ac3d58170331ea49f836a32206cac1423c417d22f598effbd9ab8e1a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c840c28ac3d58170331ea49f836a32206cac1423c417d22f598effbd9ab8e1a5->enter($__internal_c840c28ac3d58170331ea49f836a32206cac1423c417d22f598effbd9ab8e1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_395df2bf7f454fb71c21eea53ddb71c3d4ac5c6bb13db4866a4051223746d03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395df2bf7f454fb71c21eea53ddb71c3d4ac5c6bb13db4866a4051223746d03f->enter($__internal_395df2bf7f454fb71c21eea53ddb71c3d4ac5c6bb13db4866a4051223746d03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_395df2bf7f454fb71c21eea53ddb71c3d4ac5c6bb13db4866a4051223746d03f->leave($__internal_395df2bf7f454fb71c21eea53ddb71c3d4ac5c6bb13db4866a4051223746d03f_prof);

        
        $__internal_c840c28ac3d58170331ea49f836a32206cac1423c417d22f598effbd9ab8e1a5->leave($__internal_c840c28ac3d58170331ea49f836a32206cac1423c417d22f598effbd9ab8e1a5_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d4921ed3f9bbb0b039e5d27b1ef0b359d119f1cc34327efc20bea5c5cea4d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d4921ed3f9bbb0b039e5d27b1ef0b359d119f1cc34327efc20bea5c5cea4d5e->enter($__internal_7d4921ed3f9bbb0b039e5d27b1ef0b359d119f1cc34327efc20bea5c5cea4d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8afc2a1f1a473281c8a1b8d698b01c285ee09b9f06abe2d0d1faddfbcfa5a04f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8afc2a1f1a473281c8a1b8d698b01c285ee09b9f06abe2d0d1faddfbcfa5a04f->enter($__internal_8afc2a1f1a473281c8a1b8d698b01c285ee09b9f06abe2d0d1faddfbcfa5a04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8afc2a1f1a473281c8a1b8d698b01c285ee09b9f06abe2d0d1faddfbcfa5a04f->leave($__internal_8afc2a1f1a473281c8a1b8d698b01c285ee09b9f06abe2d0d1faddfbcfa5a04f_prof);

        
        $__internal_7d4921ed3f9bbb0b039e5d27b1ef0b359d119f1cc34327efc20bea5c5cea4d5e->leave($__internal_7d4921ed3f9bbb0b039e5d27b1ef0b359d119f1cc34327efc20bea5c5cea4d5e_prof);

    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b8c448b2c7ebec1efac29573ac6e4f2b8bb97a86917ac6c04f6a30eaf9f42255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c448b2c7ebec1efac29573ac6e4f2b8bb97a86917ac6c04f6a30eaf9f42255->enter($__internal_b8c448b2c7ebec1efac29573ac6e4f2b8bb97a86917ac6c04f6a30eaf9f42255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e5821d42804cb2e4ebf1977f3416bb070464512ea68b5f1912ef485ac519a8d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5821d42804cb2e4ebf1977f3416bb070464512ea68b5f1912ef485ac519a8d1->enter($__internal_e5821d42804cb2e4ebf1977f3416bb070464512ea68b5f1912ef485ac519a8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 148
        echo "        &copy; Copyright 2017 by Florica Coste</a>.
    ";
        
        $__internal_e5821d42804cb2e4ebf1977f3416bb070464512ea68b5f1912ef485ac519a8d1->leave($__internal_e5821d42804cb2e4ebf1977f3416bb070464512ea68b5f1912ef485ac519a8d1_prof);

        
        $__internal_b8c448b2c7ebec1efac29573ac6e4f2b8bb97a86917ac6c04f6a30eaf9f42255->leave($__internal_b8c448b2c7ebec1efac29573ac6e4f2b8bb97a86917ac6c04f6a30eaf9f42255_prof);

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
        return array (  351 => 148,  342 => 147,  325 => 143,  308 => 141,  298 => 84,  289 => 83,  271 => 28,  258 => 150,  256 => 147,  251 => 144,  249 => 143,  247 => 141,  237 => 134,  228 => 128,  224 => 127,  215 => 121,  206 => 115,  202 => 114,  198 => 113,  194 => 112,  185 => 106,  181 => 105,  177 => 104,  168 => 98,  164 => 97,  151 => 87,  147 => 86,  144 => 85,  142 => 83,  129 => 73,  125 => 72,  78 => 28,  71 => 23,  65 => 20,  60 => 18,  57 => 17,  51 => 14,  48 => 13,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set colours = app.session.get('colours') %}
{% if colours is null %}
    {% set colours = {
    'foreground': 'saddlebrown',
    'background': 'cornsilk'
    }
    %}
{% endif %}

{% set user = app.session.get('user') %}

    {% if user is null %}
        <p>
            Please login: <a href=\"{{ path('login') }}\">Login: </a>
        </p>
    {% else %}
        <header>
            You are logged in as: <strong>{{ user.username }}</strong>
            <br>
            <a href=\"{{ path('logout') }}\">Logout: </a>
        </header>
    {% endif %}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Hotel{% endblock %}</title>
    <style>

        .dropbtn {
            background-color: peru;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: burlywood;
        }

        body {
            color: {{ colours['foreground'] }};
            background-color: {{ colours['background'] }};
        }
        tr, td {
            border: 0.1rem solid saddlebrown;
            padding: 0.5rem;
        }
        table{
            border: 0.1rem solid chocolate;
            padding: 0.5rem;
        }
        {% block stylesheets %}
        {% endblock %}
    </style>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/table.css') }}\" />
</head>
<body>


<ul>

    <div class=\"dropdown\">
        <button class=\"dropbtn\">Product</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('product_details_index') }}\">Product details</a>
            <a href=\"{{ path('product_invetory_index') }}\">Product inventory</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Orders</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('po_index') }}\">Create PO</a>
            <a href=\"{{ path('orders_index') }}\">Orders</a>
            <a href=\"{{ path('orders_detail_index') }}\">Orders details</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Suppliers</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('suppliers_details_index') }}\">Suppliers details</a>
            <a href=\"{{ path('suppliers_address_index') }}\">Suppliers address</a>
            <a href=\"{{ path('suppliers_contact_index') }}\">Suppliers contact</a>
            <a href=\"{{ path('suppliers_bank_index') }}\">Suppliers Bank</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Stock</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('stock_index') }}\">Stock</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Quotation</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('quotation_index') }}\">Quotation</a>
            <a href=\"{{ path('suppliers_quotation_index') }}\">Suppliers Quotation</a>
        </div>
    </div>
    <div class=\"dropdown\">
        <button class=\"dropbtn\">Users</button>
        <div class=\"dropdown-content\">
            <a href=\"{{ path('user_details_index') }}\">User details</a>
        </div>
    </div>
</ul>
<hr>


{% block body %}
{% endblock %}
{% block javascripts %}{% endblock %}

<hr>
<div id=\"footer\">
    {% block footer %}
        &copy; Copyright 2017 by Florica Coste</a>.
    {% endblock %}
</div>
</body>
</html>
", "base.html.twig", "C:\\laragon\\www\\Hotel\\pro\\app\\Resources\\views\\base.html.twig");
    }
}
