<?php

/* admin/account/login.html.twig */
class __TwigTemplate_e82d45649b01b1531f19ff8ea4a80410215c3160afef47b3bed9111fbb7ab2bc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/account/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Connexion à l'administration</title>
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
    <style>
        body {

            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .card {

            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class=\"col-md-4\">
        <div class=\"card bg-light\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">
                    <i class=\"fas fa-lock\"></i>
                    Connexion à l'administration
                </h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 34
        if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new Twig_Error_Runtime('Variable "hasError" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                    <div class=\"alert alert-warning\">Email ou mot de passe invalide</div>
                ";
        }
        // line 37
        echo "                <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-lock-open\"></i> Connexion</button>
                            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-link\"><i class=\"fas fa-arrow-circle-left\"> Retour au site</i></a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/account/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  75 => 40,  70 => 37,  66 => 35,  64 => 34,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Connexion à l'administration</title>
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
    <style>
        body {

            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .card {

            margin-top: 10%;
        }
    </style>
</head>
<body>
    <div class=\"col-md-4\">
        <div class=\"card bg-light\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">
                    <i class=\"fas fa-lock\"></i>
                    Connexion à l'administration
                </h4>
            </div>
            <div class=\"card-body\">
                {% if hasError %}
                    <div class=\"alert alert-warning\">Email ou mot de passe invalide</div>
                {% endif %}
                <form method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"form-control\" placeholder=\"Adresse email\" value=\"{{ username }}\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Mot de passe</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" placeholder=\"Mot de passe\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fas fa-lock-open\"></i> Connexion</button>
                            <a href=\"{{ path('homepage') }}\" class=\"btn btn-link\"><i class=\"fas fa-arrow-circle-left\"> Retour au site</i></a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>
</html>", "admin/account/login.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\admin\\account\\login.html.twig");
    }
}
