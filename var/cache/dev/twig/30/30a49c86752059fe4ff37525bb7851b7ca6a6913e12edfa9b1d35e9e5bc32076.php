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

/* ranking/ranking.html.twig */
class __TwigTemplate_c645c7b267bc478a955fb445ec1fab2e423efb2562b55ecfc485acdc377c749d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking/ranking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ranking/ranking.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ranking/ranking.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Classement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"page-content\">
    <h2>Classement</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom du capitaine</th>
                <th scope=\"col\">Nombre de victoires</th>
                <th scope=\"col\">Dernière fois en ligne</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classement"]) || array_key_exists("classement", $context) ? $context["classement"] : (function () { throw new RuntimeError('Variable "classement" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 20
            echo "                <!-- Coloration de la ligne en fonction de la position dans le classement -->
                ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "ranking", [], "any", false, false, false, 21) == 1)) {
                // line 22
                echo "                <tr class=\"first\">
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 23
$context["player"], "ranking", [], "any", false, false, false, 23) == 2)) {
                // line 24
                echo "                <tr class=\"second\">
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 25
$context["player"], "ranking", [], "any", false, false, false, 25) == 3)) {
                // line 26
                echo "                <tr class=\"third\">
                ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 27
$context["player"], "ranking", [], "any", false, false, false, 27) < 11)) {
                // line 28
                echo "                <tr class=\"top-ten\">
                ";
            } else {
                // line 30
                echo "                <tr>
                ";
            }
            // line 32
            echo "
                    <!-- Affichage des informations du joueur -->
                    <td scope=\"col\" class=\"num\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "ranking", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td scope=\"col\" class=\"pseudo\">
                        <a  ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) == twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 36))) {
                echo "id=\"you\" title=\"Access to your profile page\"";
            } else {
                echo "title=\"Access to profile page of ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "pseudo", [], "any", false, false, false, 36), "html", null, true);
                echo " \"";
            }
            echo " 
                            href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "pseudo", [], "any", false, false, false, 37), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td scope=\"col\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "count_victory", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td scope=\"col\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "last_login", [], "any", false, false, false, 41), "d F Y à H:m"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
    <div class=\"pagi\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 48
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 48, $this->source); })()) == 1)) {
            echo " disabled ";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 49, $this->source); })()) - 1)]), "html", null, true);
        echo "\">Prev</a>
            </li>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 51, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 52
            echo "            <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 52, $this->source); })()) == $context["i"])) {
                echo " active ";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking", ["page" => $context["i"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 56, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 56, $this->source); })()))) {
            echo " disabled ";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 57, $this->source); })()) + 1)]), "html", null, true);
        echo "\">Next</a>
            </li>
        </ul>
    </div> 
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ranking/ranking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  214 => 56,  203 => 53,  196 => 52,  192 => 51,  187 => 49,  181 => 48,  175 => 44,  166 => 41,  162 => 40,  154 => 37,  144 => 36,  139 => 34,  135 => 32,  131 => 30,  127 => 28,  125 => 27,  122 => 26,  120 => 25,  117 => 24,  115 => 23,  112 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Classement{% endblock %}

{% block body %}

<div class=\"page-content\">
    <h2>Classement</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom du capitaine</th>
                <th scope=\"col\">Nombre de victoires</th>
                <th scope=\"col\">Dernière fois en ligne</th>
            </tr>
        </thead>
        <tbody>
            {% for player in classement %}
                <!-- Coloration de la ligne en fonction de la position dans le classement -->
                {% if player.ranking == 1 %}
                <tr class=\"first\">
                {% elseif player.ranking == 2 %}
                <tr class=\"second\">
                {% elseif player.ranking == 3 %}
                <tr class=\"third\">
                {% elseif player.ranking < 11 %}
                <tr class=\"top-ten\">
                {% else %}
                <tr>
                {% endif %}

                    <!-- Affichage des informations du joueur -->
                    <td scope=\"col\" class=\"num\">{{player.ranking}}</td>
                    <td scope=\"col\" class=\"pseudo\">
                        <a  {% if app.user.id == player.id %}id=\"you\" title=\"Access to your profile page\"{% else %}title=\"Access to profile page of {{player.pseudo}} \"{% endif %} 
                            href=\"{{ path(\"profile\", {id: player.id}) }}\">{{player.pseudo}}
                        </a>
                    </td>
                    <td scope=\"col\">{{player.count_victory}}</td>
                    <td scope=\"col\">{{ player.last_login|date('d F Y à H:m') }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
    <div class=\"pagi\">
        <ul class=\"pagination\">
            <li class=\"page-item {% if page == 1 %} disabled {% endif %}\">
                <a class=\"page-link\" href=\"{{ path('ranking',{ 'page' : page - 1}) }}\">Prev</a>
            </li>
            {% for i in 1..pages %}
            <li class=\"page-item {% if page == i %} active {% endif %}\">
                <a class=\"page-link\" href=\"{{ path('ranking',{'page': i}) }}\">{{ i }}</a>
            </li>
            {% endfor %}
            <li class=\"page-item {% if page == pages %} disabled {% endif %}\">
                <a class=\"page-link\" href=\"{{ path('ranking',{ 'page' : page + 1}) }}\">Next</a>
            </li>
        </ul>
    </div> 
</div>
{% endblock %}
", "ranking/ranking.html.twig", "/var/www/html/batailleNavaleClean/templates/ranking/ranking.html.twig");
    }
}
