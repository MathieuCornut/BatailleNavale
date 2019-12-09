<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu.html.twig */
class __TwigTemplate_57490682360605ed36146cde7674d7b2318678680245df904c88c93d9015fb2b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-static-top\">
    <div class=\"container\">

        <div class=\"collapse navbar-collapse text-center\" id=\"welcome\">
            ";
        // line 5
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5))) {
            // line 6
            echo "                <h1>Bienvenue à bord !</h1>
            ";
        } else {
            // line 8
            echo "                <h1>Bienvenue capitaine ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "pseudo", [], "any", false, false, false, 8), "html", null, true);
            echo " !</h1>
            ";
        }
        // line 10
        echo "        </div>

        <div class=\"collapse navbar-collapse text-center\" id=\"menu\">
            <ul class=\"navbar-nav mr-auto list-group-horizontal\">
                <li class=\"nav-item ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "rules")) {
            echo "active";
        }
        echo "\">
                    <h2>
                        <a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rules");
        echo "\">Règles</a>
                    </h2>
                </li>
                ";
        // line 19
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19))) {
            // line 20
            echo "                    <li class=\"nav-item ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "get", [0 => "_route"], "method", false, false, false, 20) == "self_profile")) {
                echo "active";
            }
            echo "\">
                        <h2>
                            <a class=\"nav-link\" href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("self_profile");
            echo "\">Profil</a>
                        </h2>
                    </li>

                    <li class=\"nav-item ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26) == "ranking")) {
                echo "active";
            }
            echo "\">
                        <h2>
                            <a class=\"nav-link\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking");
            echo "\">Classement</a>
                        </h2>
                    </li>

                    <li class=\"nav-item ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", [0 => "_route"], "method", false, false, false, 32) == "game")) {
                echo "active";
            }
            echo "\">
                        <h2>
                            <a class=\"nav-link\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game");
            echo "\">Jouer</a>
                        </h2>
                    </li>
                    ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                        <li class=\"nav-item ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", [0 => "_route"], "method", false, false, false, 38) == "admin")) {
                    echo "active";
                }
                echo "\">
                            <h2>
                                <a class=\"nav-link\" href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administration</a>
                            </h2>
                        </li>  
                    ";
            }
            // line 44
            echo "                ";
        }
        // line 45
        echo "            </ul>
        </div>

        <div class=\"form-inline my-2 my-lg-0  text-center\" id=\"boutons\">
            ";
        // line 49
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49))) {
            // line 50
            echo "                <a class=\"btn btn-danger ml-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
                    Se connecter
                </a>
                <a class=\"btn btn-danger ml-3\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">
                    S'inscrire
                </a>
            ";
        } else {
            // line 57
            echo "                <a class=\"btn btn-danger ml-3\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
                    Se déconnecter
                </a>
            ";
        }
        // line 61
        echo "        </div>      
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 61,  166 => 57,  159 => 53,  152 => 50,  150 => 49,  144 => 45,  141 => 44,  134 => 40,  126 => 38,  124 => 37,  118 => 34,  111 => 32,  104 => 28,  97 => 26,  90 => 22,  82 => 20,  80 => 19,  74 => 16,  67 => 14,  61 => 10,  55 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-static-top\">
    <div class=\"container\">

        <div class=\"collapse navbar-collapse text-center\" id=\"welcome\">
            {% if app.user is null %}
                <h1>Bienvenue à bord !</h1>
            {% else %}
                <h1>Bienvenue capitaine {{ app.user.pseudo }} !</h1>
            {% endif %}
        </div>

        <div class=\"collapse navbar-collapse text-center\" id=\"menu\">
            <ul class=\"navbar-nav mr-auto list-group-horizontal\">
                <li class=\"nav-item {% if app.request.get('_route') == 'rules' %}active{% endif %}\">
                    <h2>
                        <a class=\"nav-link\" href=\"{{ path('rules') }}\">Règles</a>
                    </h2>
                </li>
                {% if app.user is not null %}
                    <li class=\"nav-item {% if app.request.get('_route') == 'self_profile' %}active{% endif %}\">
                        <h2>
                            <a class=\"nav-link\" href=\"{{ path('self_profile') }}\">Profil</a>
                        </h2>
                    </li>

                    <li class=\"nav-item {% if app.request.get('_route') == 'ranking' %}active{% endif %}\">
                        <h2>
                            <a class=\"nav-link\" href=\"{{ path('ranking') }}\">Classement</a>
                        </h2>
                    </li>

                    <li class=\"nav-item {% if app.request.get('_route') == 'game' %}active{% endif %}\">
                        <h2>
                            <a class=\"nav-link\" href=\"{{ path('game') }}\">Jouer</a>
                        </h2>
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item {% if app.request.get('_route') == 'admin' %}active{% endif %}\">
                            <h2>
                                <a class=\"nav-link\" href=\"{{ path('admin') }}\">Administration</a>
                            </h2>
                        </li>  
                    {% endif %}
                {% endif %}
            </ul>
        </div>

        <div class=\"form-inline my-2 my-lg-0  text-center\" id=\"boutons\">
            {% if app.user is null %}
                <a class=\"btn btn-danger ml-3\" href=\"{{ path('app_login') }}\">
                    Se connecter
                </a>
                <a class=\"btn btn-danger ml-3\" href=\"{{ path('app_register') }}\">
                    S'inscrire
                </a>
            {% else %}
                <a class=\"btn btn-danger ml-3\" href=\"{{ path('app_logout') }}\">
                    Se déconnecter
                </a>
            {% endif %}
        </div>      
    </div>
</nav>", "menu.html.twig", "/var/www/html/batailleNavale/templates/menu.html.twig");
    }
}
