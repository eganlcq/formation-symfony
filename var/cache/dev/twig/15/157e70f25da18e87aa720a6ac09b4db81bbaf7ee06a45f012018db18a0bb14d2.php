<?php

/* admin/dashboard/index.html.twig */
class __TwigTemplate_530970cb1b680a956b8d10af661a2ea7d5ce2836bade48285112b43c540e2c36 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

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

        echo "Tableau de bord";
        
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card bg-primary text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new Twig_Error_Runtime('Variable "stats" does not exist.', 16, $this->source); })()), "users", []), "html", null, true);
        echo " utilisateurs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new Twig_Error_Runtime('Variable "stats" does not exist.', 30, $this->source); })()), "ads", []), "html", null, true);
        echo " annonces</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-warning text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new Twig_Error_Runtime('Variable "stats" does not exist.', 44, $this->source); })()), "bookings", []), "html", null, true);
        echo " réservations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-success text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new Twig_Error_Runtime('Variable "stats" does not exist.', 58, $this->source); })()), "comments", []), "html", null, true);
        echo " avis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Propriétaire</th>
                            <th>Note moyenne</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bestAds"]) || array_key_exists("bestAds", $context) ? $context["bestAds"] : (function () { throw new Twig_Error_Runtime('Variable "bestAds" does not exist.', 79, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 80
            echo "                        <tr>
                            <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", []), "html", null, true);
            echo "</td>
                            <td>
                                <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", []), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", []), "html", null, true);
            echo "\" class=\"avatar avatar-mini\">
                                ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", []), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 86
            $this->loadTemplate("common/rating.html.twig", "admin/dashboard/index.html.twig", 86)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["ad"], "note", [])]));
            echo "</td>
                        </tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Les pires annonces</h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Propriétaire</th>
                            <th>Note moyenne</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["worstAds"]) || array_key_exists("worstAds", $context) ? $context["worstAds"] : (function () { throw new Twig_Error_Runtime('Variable "worstAds" does not exist.', 105, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 106
            echo "                        <tr>
                            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "title", []), "html", null, true);
            echo "</td>
                            <td>
                                <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "picture", []), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", []), "html", null, true);
            echo "\" class=\"avatar avatar-mini\">
                                ";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "firstName", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ad"], "lastName", []), "html", null, true);
            echo "
                            </td>
                            <td>";
            // line 112
            $this->loadTemplate("common/rating.html.twig", "admin/dashboard/index.html.twig", 112)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["ad"], "note", [])]));
            echo "</td>
                        </tr>
                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                    </tbody>
                </table>
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
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 115,  274 => 112,  267 => 110,  259 => 109,  254 => 107,  251 => 106,  234 => 105,  216 => 89,  199 => 86,  192 => 84,  184 => 83,  179 => 81,  176 => 80,  159 => 79,  135 => 58,  118 => 44,  101 => 30,  84 => 16,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card bg-primary text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">{{ stats.users }} utilisateurs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-danger text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-hotel fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">{{ stats.ads }} annonces</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-warning text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-folder fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">{{ stats.bookings }} réservations</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card bg-success text-white mb-3 text-center\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-4\">
                            <i class=\"fas fa-comments fa-3x\"></i>
                        </div>
                        <div class=\"col-md-8\">
                            <h4 class=\"card-title mb-0\">{{ stats.comments }} avis</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-up\"></i> Les annonces populaires</h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Propriétaire</th>
                            <th>Note moyenne</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for ad in bestAds %}
                        <tr>
                            <td>{{ ad.title }}</td>
                            <td>
                                <img src=\"{{ ad.picture }}\" alt=\"Avatar de {{ ad.firstName }} {{ ad.lastName }}\" class=\"avatar avatar-mini\">
                                {{ ad.firstName }} {{ ad.lastName }}
                            </td>
                            <td>{% include 'common/rating.html.twig' with {'rating': ad.note} %}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"alert alert-light\">
                <h2 class=\"alert-heading my-3\"><i class=\"fas fa-arrow-down\"></i> Les pires annonces</h2>
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Annonce</th>
                            <th>Propriétaire</th>
                            <th>Note moyenne</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for ad in worstAds %}
                        <tr>
                            <td>{{ ad.title }}</td>
                            <td>
                                <img src=\"{{ ad.picture }}\" alt=\"Avatar de {{ ad.firstName }} {{ ad.lastName }}\" class=\"avatar avatar-mini\">
                                {{ ad.firstName }} {{ ad.lastName }}
                            </td>
                            <td>{% include 'common/rating.html.twig' with {'rating': ad.note} %}</td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/dashboard/index.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\admin\\dashboard\\index.html.twig");
    }
}
