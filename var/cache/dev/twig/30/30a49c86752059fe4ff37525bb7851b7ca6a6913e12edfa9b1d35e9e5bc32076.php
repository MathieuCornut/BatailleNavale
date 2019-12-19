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
            echo "        <tr>
            <td scope=\"col\" class=\"num\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "ranking", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
            <td scope=\"col\"><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile", ["id" => twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "pseudo", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></td>
            <td scope=\"col\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "count_victory", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td scope=\"col\">Il y a ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "last_login", [], "any", false, false, false, 24), "d-m-Y à H:m:s"), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </tbody>
    </table>
    <div class=\"pagi\">
        <ul class=\"pagination\">
            <li class=\"page-item ";
        // line 31
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 31, $this->source); })()) == 1)) {
            echo " disabled ";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 32, $this->source); })()) - 1)]), "html", null, true);
        echo "\">Prev</a>
            </li>
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 34, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 35
            echo "            <li class=\"page-item ";
            if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 35, $this->source); })()) == $context["i"])) {
                echo " active ";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 36
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
        // line 39
        echo "            <li class=\"page-item ";
        if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 39, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 39, $this->source); })()))) {
            echo " disabled ";
        }
        echo "\">
                <a class=\"page-link\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 40, $this->source); })()) + 1)]), "html", null, true);
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
        return array (  179 => 40,  172 => 39,  161 => 36,  154 => 35,  150 => 34,  145 => 32,  139 => 31,  133 => 27,  124 => 24,  120 => 23,  114 => 22,  110 => 21,  107 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <tr>
            <td scope=\"col\" class=\"num\">{{player.ranking}}</td>
            <td scope=\"col\"><a href=\"{{ path(\"profile\", {id: player.id}) }}\">{{player.pseudo}}</a></td>
            <td scope=\"col\">{{player.count_victory}}</td>
            <td scope=\"col\">Il y a {{ player.last_login|date('d-m-Y à H:m:s') }}</td>
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
", "ranking/ranking.html.twig", "/Users/mathieucornut/Documents/BatailleNavale/templates/ranking/ranking.html.twig");
    }
}
