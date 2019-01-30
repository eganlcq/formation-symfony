<?php

/* ad/_ad.html.twig */
class __TwigTemplate_39c6b68fa3ed83084cdb1a98865ffdf68b6f7744b1e12e2b5c811272536da709 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/_ad.html.twig"));

        // line 1
        $context["url"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 1, $this->source); })()), "slug", [])]);
        // line 2
        echo "
<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 6, $this->source); })()), "rooms", []), "html", null, true);
        echo " chambre(s), <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 6, $this->source); })()), "price", []), 2, ",", " "), "html", null, true);
        echo "&euro; / nuit</strong> <br>
            ";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 7, $this->source); })()), "comments", [])) > 0)) {
            // line 8
            echo "                ";
            $this->loadTemplate("common/rating.html.twig", "ad/_ad.html.twig", 8)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 8, $this->source); })()), "avgRatings", [])]));
            // line 9
            echo "            ";
        } else {
            // line 10
            echo "                <small>Pas encore noté</small>
            ";
        }
        // line 12
        echo "        </div>
        <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 14, $this->source); })()), "coverImage", []), "html", null, true);
        echo "\" alt=\"Image de l'appartement\" style=\"width: 100%; display: block\">
        </a>
        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 19, $this->source); })()), "title", []), "html", null, true);
        echo "
                </a>
            </h4>
            <p class=\"card-text\">
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 23, $this->source); })()), "introduction", []), "html", null, true);
        echo "
            </p>
            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary float-right\">En savoir plus</a>
            ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", []) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->source); })()), "user", []) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 26, $this->source); })()), "author", [])))) {
            // line 27
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 27, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            ";
        }
        // line 29
        echo "        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ad/_ad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  91 => 27,  89 => 26,  85 => 25,  80 => 23,  73 => 19,  69 => 18,  62 => 14,  58 => 13,  55 => 12,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set url = path('ads_show', {'slug': ad.slug}) %}

<div class=\"col-md-4\">
    <div class=\"card bg-light mb-3\">
        <div class=\"card-header text-center\">
            {{ ad.rooms }} chambre(s), <strong>{{ ad.price | number_format(2, ',', ' ') }}&euro; / nuit</strong> <br>
            {% if ad.comments | length > 0 %}
                {% include 'common/rating.html.twig' with {'rating': ad.avgRatings} %}
            {% else %}
                <small>Pas encore noté</small>
            {% endif %}
        </div>
        <a href=\"{{ url }}\">
            <img src=\"{{ ad.coverImage }}\" alt=\"Image de l'appartement\" style=\"width: 100%; display: block\">
        </a>
        <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"{{ url }}\">
                    {{ ad.title }}
                </a>
            </h4>
            <p class=\"card-text\">
                {{ ad.introduction }}
            </p>
            <a href=\"{{ url }}\" class=\"btn btn-primary float-right\">En savoir plus</a>
            {% if app.user and app.user == ad.author %}
            <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            {% endif %}
        </div>
    </div>
</div>", "ad/_ad.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\ad\\_ad.html.twig");
    }
}
