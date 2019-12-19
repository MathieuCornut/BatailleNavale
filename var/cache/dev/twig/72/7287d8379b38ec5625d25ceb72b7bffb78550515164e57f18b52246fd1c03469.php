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

/* profil/profile.html.twig */
class __TwigTemplate_1a1c91ad6aa4df8123a5a4f8d7ce72334da18787053da11c8a34934e25b17b40 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil/profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content\"> 

    ";
        // line 6
        if ((isset($context["info"]) || array_key_exists("info", $context))) {
            // line 7
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7))) {
                // line 8
                echo "            ";
                $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8);
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["user"] = (isset($context["info"]) || array_key_exists("info", $context) ? $context["info"] : (function () { throw new RuntimeError('Variable "info" does not exist.', 10, $this->source); })());
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        ";
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13))) {
                // line 14
                echo "            Vous devez vous connecter <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\"></a>
        ";
            } else {
                // line 16
                echo "            ";
                $context["user"] = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16);
                // line 17
                echo "        ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    <h2><u>Votre profil</u></h2>
    <div class=\"row\">
        <table>
            <tr>
                <th rowspan=\"4\">
                    <img src=\"/images/user.png\" class=\"profile_img\">
                </th>
                <th><p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "pseudo", [], "any", false, false, false, 27), "html", null, true);
        echo "</p></th>
            </tr>
            <tr>
                <td><p>Inscrit le ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "getRegistrationDate", [], "method", false, false, false, 30), "d/m/Y"), "html", null, true);
        echo "</p></td>
            </tr>
            <tr>
                <td><p>Dernière connexion il y a ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "lastLoginStr", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "lastLogin", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "</p></td>
            </tr>
            <tr>
                <td><p>Grade</p></td>
            </tr>
        </table>
    </div>

    <h2><u>Statistiques/Classement</u></h2>
    <h3><u>Statistiques</u></h3>
    <div class=\"row\">
        <div id=\"parties\" class=\"stats\" classement ml-4>
            <span>Parties</span>
            <p>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "countCombat", [], "any", false, false, false, 46), "html", null, true);
        echo "</p>
        </div>
        <div id=\"victoires\" class=\"stats\" classement ml-4>
            <span>Victoires</span>
            <p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "countVictory", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
        </div>
        <div id=\"ratio\" class=\"stats\" classement ml-4>
            <span>% de victoires</span>
            <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "ratio", [0 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "countCombat", [], "any", false, false, false, 54), 1 => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "countVictory", [], "any", false, false, false, 54)], "method", false, false, false, 54), "html", null, true);
        echo "%</p>
        </div>
    </div>

    <h3><u>Classement</u></h3>
    <div class=\"row\">
        <div id=\"classement_top\" class=\"classement ml-6\">
            <label>Top 5</label>
            ";
        if ($this->env->isDebug()) {
            // line 62
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 62, $this->source); })()));
        }
        // line 63
        echo "
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 64, $this->source); })()), 0, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 65
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 65) == twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65))) {
                // line 66
                echo "                    <p><b>#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "pseudo", [], "any", false, false, false, 66), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "count_victory", [], "any", false, false, false, 66), "html", null, true);
                echo " victoires </b></p>                    
                ";
            } else {
                // line 68
                echo "                    <p>#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "pseudo", [], "any", false, false, false, 68), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["player"], "count_victory", [], "any", false, false, false, 68), "html", null, true);
                echo " victoires</p>
                ";
            }
            // line 70
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
        <div id=\"classement_position\" class=\"classement ml-6\">
            <label>Votre position dans le classement</label>
            <p id=\"position\"><b>#";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "position", [0 => (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), 1 => (isset($context["ranking"]) || array_key_exists("ranking", $context) ? $context["ranking"] : (function () { throw new RuntimeError('Variable "ranking" does not exist.', 74, $this->source); })())], "method", false, false, false, 74), "html", null, true);
        echo "</b></p>
            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ranking");
        echo "\">Tableau du classement</a>
        </div>
    </div>

    <h2><u>Historique de partie</u></h2>
    <div class=\"row\">
        <p>// TODO, Objet Combat, boucle for de tous les combat ou joueur 1 ou 2 = id du joueur</p>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 75,  239 => 74,  234 => 71,  220 => 70,  210 => 68,  200 => 66,  197 => 65,  180 => 64,  177 => 63,  174 => 62,  162 => 54,  155 => 50,  148 => 46,  132 => 33,  126 => 30,  120 => 27,  110 => 19,  107 => 18,  104 => 17,  101 => 16,  95 => 14,  92 => 13,  89 => 12,  86 => 11,  83 => 10,  80 => 9,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"page-content\"> 

    {% if info is defined %}
        {% if info.id == app.user.id %}
            {% set user = app.user %}
        {% else %}
            {% set user = info %}
        {% endif %}
    {% else %}
        {% if app.user is null %}
            Vous devez vous connecter <a href=\"{{path(\"app_login\")}}\"></a>
        {% else %}
            {% set user = app.user %}
        {% endif %}
    {% endif %}

    <h2><u>Votre profil</u></h2>
    <div class=\"row\">
        <table>
            <tr>
                <th rowspan=\"4\">
                    <img src=\"/images/user.png\" class=\"profile_img\">
                </th>
                <th><p>{{ user.pseudo }}</p></th>
            </tr>
            <tr>
                <td><p>Inscrit le {{ user.getRegistrationDate()|date(\"d/m/Y\") }}</p></td>
            </tr>
            <tr>
                <td><p>Dernière connexion il y a {{user.lastLoginStr(user.lastLogin)}}</p></td>
            </tr>
            <tr>
                <td><p>Grade</p></td>
            </tr>
        </table>
    </div>

    <h2><u>Statistiques/Classement</u></h2>
    <h3><u>Statistiques</u></h3>
    <div class=\"row\">
        <div id=\"parties\" class=\"stats\" classement ml-4>
            <span>Parties</span>
            <p>{{ user.countCombat }}</p>
        </div>
        <div id=\"victoires\" class=\"stats\" classement ml-4>
            <span>Victoires</span>
            <p>{{ user.countVictory }}</p>
        </div>
        <div id=\"ratio\" class=\"stats\" classement ml-4>
            <span>% de victoires</span>
            <p>{{ user.ratio(user.countCombat,user.countVictory) }}%</p>
        </div>
    </div>

    <h3><u>Classement</u></h3>
    <div class=\"row\">
        <div id=\"classement_top\" class=\"classement ml-6\">
            <label>Top 5</label>
            {% dump(ranking) %}

            {% for player in ranking |slice(0, 5)%}
                {% if player.id == user.id %}
                    <p><b>#{{loop.index}} - {{player.pseudo}} : {{player.count_victory}} victoires </b></p>                    
                {% else %}
                    <p>#{{loop.index}} - {{player.pseudo}} : {{player.count_victory}} victoires</p>
                {% endif %}
            {% endfor %}
        </div>
        <div id=\"classement_position\" class=\"classement ml-6\">
            <label>Votre position dans le classement</label>
            <p id=\"position\"><b>#{{ user.position(user,ranking) }}</b></p>
            <a href=\"{{ path(\"ranking\") }}\">Tableau du classement</a>
        </div>
    </div>

    <h2><u>Historique de partie</u></h2>
    <div class=\"row\">
        <p>// TODO, Objet Combat, boucle for de tous les combat ou joueur 1 ou 2 = id du joueur</p>
    </div>
</div>
{% endblock %}", "profil/profile.html.twig", "/Users/mathieucornut/Documents/BatailleNavale/templates/profil/profile.html.twig");
    }
}
