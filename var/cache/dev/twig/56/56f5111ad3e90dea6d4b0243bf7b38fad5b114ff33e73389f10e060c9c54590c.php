<?php

/* booking/show.html.twig */
class __TwigTemplate_5835b5b8874003931b645b638ec017f03b47be3bc43ba518129c3780978e7ed2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "booking/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "booking/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Réservation n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 3, $this->source); })()), "id", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        $context["ad"] = twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 7, $this->source); })()), "ad", []);
        // line 8
        echo "    ";
        $context["author"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 8, $this->source); })()), "author", []);
        // line 9
        echo "
    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 11, $this->source); })()), "id", []), "html", null, true);
        echo ")</h1>
        ";
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", []), "query", []), "get", [0 => "withAlert"], "method")) {
            // line 13
            echo "            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Félicitation !</h4>
                <p>
                    Votre réservation auprès de 
                    <strong>
                        <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 18, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 18, $this->source); })()), "fullName", []), "html", null, true);
            echo "</a>
                    </strong>
                    pour l'annonce 
                    <strong>
                        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 22, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 22, $this->source); })()), "title", []), "html", null, true);
            echo "</a>
                    </strong>
                    a bien été prise en compte
                </p>
            </div>
        ";
        }
        // line 28
        echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 34, $this->source); })()), "id", []), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 36, $this->source); })()), "startDate", []), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 38, $this->source); })()), "endDate", []), "d/m/Y"), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 40, $this->source); })()), "duration", []), "html", null, true);
        echo "</dd>
                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 42, $this->source); })()), "amount", []), 2, ",", " "), "html", null, true);
        echo " &euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["booking"] ?? null), "comment", []), "Aucun commentaire")) : ("Aucun commentaire")), "html", null, true);
        echo "</dd>
                    </dl>
                    <hr>
                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-3\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 50, $this->source); })()), "picture", []), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 50, $this->source); })()), "fullName", []), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-9\">
                            <h4>
                                <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 54, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 54, $this->source); })()), "fullName", []), "html", null, true);
        echo "</a>
                            </h4>
                            <span class=\"badge badge-primary\">";
        // line 56
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 56, $this->source); })()), "ads", [])), "html", null, true);
        echo " annonce(s)</span>
                        </div>
                    </div>
                    ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 59, $this->source); })()), "description", []);
        echo "
                    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 60, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'info sur ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 60, $this->source); })()), "firstName", []), "html", null, true);
        echo "</a>
                </div>
                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Donnez votre avis</h2>
                    ";
        // line 64
        if ((twig_date_converter($this->env) > twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 64, $this->source); })()), "endDate", [])))) {
            // line 65
            echo "                        ";
            $context["comment"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new Twig_Error_Runtime('Variable "booking" does not exist.', 65, $this->source); })()), "ad", []), "commentFromAuthor", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "user", [])], "method");
            // line 66
            echo "                        ";
            if ( !(null === (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 66, $this->source); })()))) {
                // line 67
                echo "                            <blockquote>
                                <em>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 68, $this->source); })()), "content", []), "html", null, true);
                echo "</em>
                            </blockquote>
                            <strong>Note : </strong>";
                // line 70
                $this->loadTemplate("common/rating.html.twig", "booking/show.html.twig", 70)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 70, $this->source); })()), "rating", [])]));
                // line 71
                echo "                        ";
            } else {
                // line 72
                echo "                            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), 'form_start');
                echo "

                            ";
                // line 74
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), 'widget');
                echo "
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                            ";
                // line 76
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
                echo "
                        ";
            }
            // line 78
            echo "                    ";
        } else {
            // line 79
            echo "                        <p>Commentez cette annonce une fois votre séjour terminé</p>
                    ";
        }
        // line 81
        echo "                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 87, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 87, $this->source); })()), "title", []), "html", null, true);
        echo "</a>
                    </h4>
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 89, $this->source); })()), "coverImage", []), "html", null, true);
        echo "\" alt=\"Image de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 89, $this->source); })()), "title", []), "html", null, true);
        echo "\" class=\"img-fluid\">
                    ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 90, $this->source); })()), "content", []);
        echo "
                    <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 91, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "booking/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 91,  260 => 90,  254 => 89,  247 => 87,  239 => 81,  235 => 79,  232 => 78,  227 => 76,  222 => 74,  216 => 72,  213 => 71,  211 => 70,  206 => 68,  203 => 67,  200 => 66,  197 => 65,  195 => 64,  186 => 60,  182 => 59,  176 => 56,  169 => 54,  160 => 50,  151 => 44,  146 => 42,  141 => 40,  136 => 38,  131 => 36,  126 => 34,  118 => 28,  107 => 22,  98 => 18,  91 => 13,  89 => 12,  85 => 11,  81 => 9,  78 => 8,  76 => 7,  73 => 6,  64 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Réservation n°{{ booking.id }}{% endblock %}

{% block body %}

    {% set ad = booking.ad %}
    {% set author = ad.author %}

    <div class=\"container\">
        <h1 class=\"my-5\">Votre réservation (n°{{ booking.id }})</h1>
        {% if app.request.query.get('withAlert') %}
            <div class=\"alert alert-success\">
                <h4 class=\"alert-heading\">Félicitation !</h4>
                <p>
                    Votre réservation auprès de 
                    <strong>
                        <a href=\"{{ path('user_show', {'slug': author.slug}) }}\">{{ author.fullName }}</a>
                    </strong>
                    pour l'annonce 
                    <strong>
                        <a href=\"{{ path('ads_show', {'slug': ad.slug}) }}\">{{ ad.title }}</a>
                    </strong>
                    a bien été prise en compte
                </p>
            </div>
        {% endif %}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"alert alert-light\">
                    <h2>Détails</h2>
                    <dl class=\"row\">
                        <dt class=\"col-md-4\">Numéro</dt>
                        <dd class=\"col-md-8\">{{ booking.id }}</dd>
                        <dt class=\"col-md-4\">Date d'arrivée</dt>
                        <dd class=\"col-md-8\">{{ booking.startDate | date('d/m/Y') }}</dd>
                        <dt class=\"col-md-4\">Date de départ</dt>
                        <dd class=\"col-md-8\">{{ booking.endDate | date('d/m/Y') }}</dd>
                        <dt class=\"col-md-4\">Nombre de nuits</dt>
                        <dd class=\"col-md-8\">{{ booking.duration }}</dd>
                        <dt class=\"col-md-4\">Montant total</dt>
                        <dd class=\"col-md-8\">{{ booking.amount | number_format(2, ',', ' ') }} &euro;</dd>
                        <dt class=\"col-md-4\">Commentaire</dt>
                        <dd class=\"col-md-8\">{{ booking.comment | default('Aucun commentaire') }}</dd>
                    </dl>
                    <hr>
                    <h2 class=\"alert-heading\">Votre hôte</h2>
                    <div class=\"row mb-3\">
                        <div class=\"col-md-3\">
                            <img src=\"{{ author.picture }}\" class=\"avatar avatar-medium\" alt=\"avatar de {{ author.fullName }}\">
                        </div>
                        <div class=\"col-md-9\">
                            <h4>
                                <a href=\"{{ path('user_show', {'slug': author.slug}) }}\">{{ author.fullName }}</a>
                            </h4>
                            <span class=\"badge badge-primary\">{{ author.ads | length }} annonce(s)</span>
                        </div>
                    </div>
                    {{ author.description | raw }}
                    <a href=\"{{ path('user_show', {'slug': author.slug}) }}\" class=\"btn btn-primary\">Plus d'info sur {{ author.firstName }}</a>
                </div>
                <div class=\"alert alert-light\" id=\"comment\">
                    <h2 class=\"alert-heading\">Donnez votre avis</h2>
                    {% if date() > date(booking.endDate) %}
                        {% set comment = booking.ad.commentFromAuthor(app.user) %}
                        {% if comment is not null %}
                            <blockquote>
                                <em>{{ comment.content }}</em>
                            </blockquote>
                            <strong>Note : </strong>{% include 'common/rating.html.twig' with {'rating': comment.rating} %}
                        {% else %}
                            {{ form_start(form) }}

                            {{ form_widget(form) }}
                            <button type=\"submit\" class=\"btn btn-success\">Confirmer</button>
                            {{ form_end(form) }}
                        {% endif %}
                    {% else %}
                        <p>Commentez cette annonce une fois votre séjour terminé</p>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"alert alert-light\">
                    <h2 class=\"alert-heading\">Votre hébergement</h2>
                    <h4>
                        <a href=\"{{ path('ads_show', {'slug': ad.slug}) }}\">{{ ad.title }}</a>
                    </h4>
                    <img src=\"{{ ad.coverImage }}\" alt=\"Image de {{ ad.title }}\" class=\"img-fluid\">
                    {{ ad.content | raw }}
                    <a href=\"{{ path('ads_show', {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Plus d'informations</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "booking/show.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\booking\\show.html.twig");
    }
}
