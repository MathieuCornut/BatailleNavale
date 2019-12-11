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

/* game/fight.html.twig */
class __TwigTemplate_c76f908c159e7eb8ad3807a800492fe10ddb4f71524da02a43bc2bcebbb08b82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/fight.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/fight.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/fight.html.twig", 1);
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

        echo "Combat !";
        
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
";
        if ($this->env->isDebug()) {
            // line 7
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 7, $this->source); })()));
        }
        if ($this->env->isDebug()) {
            // line 8
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["boatsJ1"]) || array_key_exists("boatsJ1", $context) ? $context["boatsJ1"] : (function () { throw new RuntimeError('Variable "boatsJ1" does not exist.', 8, $this->source); })()));
        }
        if ($this->env->isDebug()) {
            // line 9
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["boatsJ2"]) || array_key_exists("boatsJ2", $context) ? $context["boatsJ2"] : (function () { throw new RuntimeError('Variable "boatsJ2" does not exist.', 9, $this->source); })()));
        }
        // line 10
        echo "
<div class=\"page-content\">
    <div class=\"row board\">
        <div id=\"you\" class=\"board-part\">
            <label>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "pseudo", [], "any", false, false, false, 14), "html", null, true);
        echo "</label>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boatsJ1"]) || array_key_exists("boatsJ1", $context) ? $context["boatsJ1"] : (function () { throw new RuntimeError('Variable "boatsJ1" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["boat"]) {
            // line 16
            echo "                <a class=\"boat-area\">
                    <img src=";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprite.png"), "html", null, true);
            echo " class=\"boat boat";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boat"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                    <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boat"], "hp", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </div>
        <div id=\"opponent\" class=\"board-part\">
            <label>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 24, $this->source); })()), "joueur2", [], "any", false, false, false, 24), "html", null, true);
        echo "</label>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boatsJ2"]) || array_key_exists("boatsJ2", $context) ? $context["boatsJ2"] : (function () { throw new RuntimeError('Variable "boatsJ2" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["boat"]) {
            // line 26
            echo "                <a ";
            if ((twig_get_attribute($this->env, $this->source, $context["boat"], "hp", [], "any", false, false, false, 26) > 1)) {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("attack", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["game"]) || array_key_exists("game", $context) ? $context["game"] : (function () { throw new RuntimeError('Variable "game" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "target" => twig_get_attribute($this->env, $this->source, $context["boat"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\" ";
            }
            echo "class=\"boat-area\">
                    <img src=   ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, $context["boat"], "hp", [], "any", false, false, false, 27) > 1)) {
                // line 28
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/sprite.png"), "html", null, true);
                echo "
                                ";
            } else {
                // line 30
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dead_sprite.png"), "html", null, true);
                echo "
                                ";
            }
            // line 31
            echo " 
                    class=\"boat boat";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boat"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">
                    <p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["boat"], "hp", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['boat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
        <div id=\"logs\">
            <ul>
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 40
            echo "                    <li>";
            echo twig_escape_filter($this->env, $context["log"], "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            <ul>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "game/fight.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 42,  196 => 40,  192 => 39,  187 => 36,  178 => 33,  174 => 32,  171 => 31,  165 => 30,  159 => 28,  157 => 27,  148 => 26,  144 => 25,  140 => 24,  135 => 21,  126 => 18,  120 => 17,  117 => 16,  113 => 15,  109 => 14,  103 => 10,  100 => 9,  96 => 8,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Combat !{% endblock %}

{% block body %}

{% dump(game) %}
{% dump(boatsJ1) %}
{% dump(boatsJ2) %}

<div class=\"page-content\">
    <div class=\"row board\">
        <div id=\"you\" class=\"board-part\">
            <label>{{app.user.pseudo}}</label>
            {% for boat in boatsJ1 %}
                <a class=\"boat-area\">
                    <img src={{asset('images/sprite.png')}} class=\"boat boat{{boat.id}}\">
                    <p>{{boat.hp}}</p>
                </a>
            {% endfor %}

        </div>
        <div id=\"opponent\" class=\"board-part\">
            <label>{{game.joueur2}}</label>
            {% for boat in boatsJ2 %}
                <a {% if boat.hp > 1 %} href=\"{{path(\"attack\", {id: game.id, target: boat.id})}}\" {% endif %}class=\"boat-area\">
                    <img src=   {% if boat.hp > 1 %}
                                    {{asset('images/sprite.png')}}
                                {% else %}
                                    {{asset('images/dead_sprite.png')}}
                                {% endif %} 
                    class=\"boat boat{{boat.id}}\">
                    <p>{{boat.hp}}</p>
                </a>
            {% endfor %}
        </div>
        <div id=\"logs\">
            <ul>
                {% for log in logs %}
                    <li>{{log}}</li>
                {% endfor %}
            <ul>
        </div>
    </div>
</div>

{% endblock %}", "game/fight.html.twig", "/var/www/html/batailleNavale/templates/game/fight.html.twig");
    }
}
