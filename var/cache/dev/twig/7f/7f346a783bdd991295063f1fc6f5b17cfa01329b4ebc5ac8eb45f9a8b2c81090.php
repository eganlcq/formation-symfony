<?php

/* admin/ad/edit.html.twig */
class __TwigTemplate_bb4804f8fe43f5260cfb3680725e11e6d5a76a1848d6e98a40079ecedf68c082 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/ad/edit.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/ad/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/ad/edit.html.twig"));

        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), [0 => "admin/ad/_collection.html.twig"], true);
        // line 1
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

        echo "Modification de l'annonce n°";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 3, $this->source); })()), "id", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container-fluid\">
        <h1 class=\"my-5\">Modification de l'annonce n°";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 9, $this->source); })()), "id", []), "html", null, true);
        echo "</h1>
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Corriger l'annonce</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'widget');
        echo "
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-check\"></i>
                            Enregistrer les modifications
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les réservations</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Utilisateur</th>
                                    <th>Date de réservation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 42, $this->source); })()), "bookings", []));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 43
            echo "                                <tr>
                                    <td class=\"align-middle\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "id", []), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["booking"], "booker", []), "fullName", []), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\">";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["booking"], "createdAt", []), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\" style=\"width: 10%\">
                                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-pen\"></i></a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card bg-light mt-5\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les commentaires</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Utilisateur</th>
                                    <th>Note</th>
                                    <th>Contenu</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 72, $this->source); })()), "comments", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 73
            echo "                                <tr >
                                    <td class=\"align-middle\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "id", []), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", []), "fullName", []), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\" style=\"width: 20%\">";
            // line 76
            $this->loadTemplate("common/rating.html.twig", "admin/ad/edit.html.twig", 76)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [])]));
            echo "</td>
                                    <td class=\"align-middle\" style=\"width: 50%\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
            echo "</td>
                                    <td class=\"align-middle\">
                                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-pen\"></i></a>
                                    </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "<script>
    function handleDeleteButtons() {

        \$('button[data-action=\"delete\"]').click(function() {

            const target = \$(this).data('target');
            \$(target).remove();
        })
    }

    handleDeleteButtons();
</script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/ad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 94,  244 => 93,  231 => 89,  223 => 83,  203 => 77,  199 => 76,  195 => 75,  191 => 74,  188 => 73,  171 => 72,  149 => 52,  137 => 46,  133 => 45,  129 => 44,  126 => 43,  122 => 42,  95 => 18,  84 => 10,  80 => 9,  77 => 8,  68 => 7,  49 => 3,  39 => 1,  37 => 5,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/base.html.twig' %}

{% block title %}Modification de l'annonce n°{{ ad.id }}{% endblock %}

{% form_theme form 'admin/ad/_collection.html.twig' %}

{% block body %}
    <div class=\"container-fluid\">
        <h1 class=\"my-5\">Modification de l'annonce n°{{ ad.id }}</h1>
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Corriger l'annonce</h4>
                    </div>
                    <div class=\"card-body\">
                        {{ form_widget(form) }}
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-check\"></i>
                            Enregistrer les modifications
                        </button>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card bg-light\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les réservations</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Utilisateur</th>
                                    <th>Date de réservation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for booking in ad.bookings %}
                                <tr>
                                    <td class=\"align-middle\">{{ booking.id }}</td>
                                    <td class=\"align-middle\">{{ booking.booker.fullName }}</td>
                                    <td class=\"align-middle\">{{ booking.createdAt | date('d/m/Y H:i') }}</td>
                                    <td class=\"align-middle\" style=\"width: 10%\">
                                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-pen\"></i></a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"card bg-light mt-5\">
                    <div class=\"card-header\">
                        <h4 class=\"card-title\">Les commentaires</h4>
                    </div>
                    <div class=\"card-body\">
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Utilisateur</th>
                                    <th>Note</th>
                                    <th>Contenu</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for comment in ad.comments %}
                                <tr >
                                    <td class=\"align-middle\">{{ comment.id }}</td>
                                    <td class=\"align-middle\">{{ comment.author.fullName }}</td>
                                    <td class=\"align-middle\" style=\"width: 20%\">{% include 'common/rating.html.twig' with {'rating': comment.rating} %}</td>
                                    <td class=\"align-middle\" style=\"width: 50%\">{{ comment.content }}</td>
                                    <td class=\"align-middle\">
                                        <a href=\"#\" class=\"btn btn-primary\"><i class=\"fas fa-pen\"></i></a>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
<script>
    function handleDeleteButtons() {

        \$('button[data-action=\"delete\"]').click(function() {

            const target = \$(this).data('target');
            \$(target).remove();
        })
    }

    handleDeleteButtons();
</script>
 {% endblock %}", "admin/ad/edit.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\admin\\ad\\edit.html.twig");
    }
}
