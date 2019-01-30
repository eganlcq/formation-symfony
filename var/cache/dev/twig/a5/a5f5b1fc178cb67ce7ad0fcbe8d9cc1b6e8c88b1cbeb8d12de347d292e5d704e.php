<?php

/* ad/show.html.twig */
class __TwigTemplate_b22cc2f17f00bcee8449e0304879b5b027dfa0a4fea85b61e61265dff7d229f9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ad/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ad/show.html.twig"));

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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 3, $this->source); })()), "title", []), "html", null, true);
        echo " ";
        
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
        echo "    <div class=\"ad-title\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 6, $this->source); })()), "coverImage", []), "html", null, true);
        echo ")\">
        <div class=\"container\">
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 8, $this->source); })()), "title", []), "html", null, true);
        echo "</h1>
            <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 9, $this->source); })()), "introduction", []), "html", null, true);
        echo "</p>
            <p class=\"h2\">
                <strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 11, $this->source); })()), "rooms", []), "html", null, true);
        echo " chambre(s)</strong> pour <strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 11, $this->source); })()), "price", []), 2, ",", " "), "html", null, true);
        echo "&euro;</strong> par nuit
            </p>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("booking_create", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 13, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Réserver</a>
            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", []) && (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "user", []) == twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 14, $this->source); })()), "author", [])))) {
            // line 15
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 15, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ads_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 16, $this->source); })()), "title", []), "html", null, true);
            echo " ?`)\">Supprimer l'annonce</a>
            ";
        }
        // line 18
        echo "        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mb-3\">
                ";
        // line 24
        echo twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 24, $this->source); })()), "content", []);
        echo "

                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 28, $this->source); })()), "images", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 29
            echo "                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", []), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo " class=\"active\" ";
            }
            echo "></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </ol>
                    <div class=\"carousel-inner\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 33, $this->source); })()), "images", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 34
            echo "                            <div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                echo " active ";
            }
            echo "\">
                                <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", []), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 37, $this->source); })()), "title", []), "html", null, true);
            echo "</h5>
                                    <p>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", []), "html", null, true);
            echo "</p>
                                </div>
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
                <hr>

                ";
        // line 54
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 54, $this->source); })()), "comments", [])) > 0)) {
            // line 55
            echo "                    <h2 class=\"mb-3\">Commentaires de nos clients :</h2>
                    <div class=\"alert alert-info\">
                        <h4 class=\"alert-heading text-center\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-md-6\">
                                    Note globale donnée par nos clients
                                </div>
                                <div class=\"col-md-6 mt-2\">
                                    ";
            // line 63
            $this->loadTemplate("common/rating.html.twig", "ad/show.html.twig", 63)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 63, $this->source); })()), "avgRatings", [])]));
            // line 64
            echo "                                    <br>
                                    <small>calculé sur ";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 65, $this->source); })()), "comments", [])), "html", null, true);
            echo " avis</small>
                                </div>
                            </div>
                        </h4>
                    </div>
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 70, $this->source); })()), "comments", []));
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
                // line 71
                echo "                        ";
                $context["author"] = twig_get_attribute($this->env, $this->source, $context["comment"], "author", []);
                // line 72
                echo "                        <div class=\"bg-light rounded mb-3 py-3 px-3\">
                            <strong>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new Twig_Error_Runtime('Variable "author" does not exist.', 73, $this->source); })()), "firstName", []), "html", null, true);
                echo "</strong> a dit :
                            <blockquote>
                                ";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", []), "html", null, true);
                echo "
                            </blockquote>
                            <strong>Note donnée : </strong>
                            ";
                // line 78
                $this->loadTemplate("common/rating.html.twig", "ad/show.html.twig", 78)->display(array_merge($context, ["rating" => twig_get_attribute($this->env, $this->source, $context["comment"], "rating", [])]));
                // line 79
                echo "                        </div>
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
            // line 81
            echo "                ";
        } else {
            // line 82
            echo "                    <h2>Cette annonce n'a pas encore reçu de commentaire</h2>
                ";
        }
        // line 84
        echo "
            </div>
            <div class=\"col\">
            ";
        // line 87
        $context["a"] = twig_get_attribute($this->env, $this->source, (isset($context["ad"]) || array_key_exists("ad", $context) ? $context["ad"] : (function () { throw new Twig_Error_Runtime('Variable "ad" does not exist.', 87, $this->source); })()), "author", []);
        // line 88
        echo "                <div class=\"row mb-3 align-items-center\">
                    <div class=\"col-4\">
                        <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 90, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 91, $this->source); })()), "picture", []), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 91, $this->source); })()), "fullName", []), "html", null, true);
        echo "\">
                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 95, $this->source); })()), "slug", [])]), "html", null, true);
        echo "\">
                            <h3>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 96, $this->source); })()), "fullName", []), "html", null, true);
        echo "</h3>
                        </a>
                        <span class=\"badge badge-primary\">";
        // line 98
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 98, $this->source); })()), "ads", [])), "html", null, true);
        echo " annonces</span>
                    </div>
                </div>
                ";
        // line 101
        echo twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 101, $this->source); })()), "description", []);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 101,  352 => 98,  347 => 96,  343 => 95,  334 => 91,  330 => 90,  326 => 88,  324 => 87,  319 => 84,  315 => 82,  312 => 81,  297 => 79,  295 => 78,  289 => 75,  284 => 73,  281 => 72,  278 => 71,  261 => 70,  253 => 65,  250 => 64,  248 => 63,  238 => 55,  236 => 54,  222 => 42,  204 => 38,  200 => 37,  195 => 35,  188 => 34,  171 => 33,  167 => 31,  146 => 29,  129 => 28,  122 => 24,  114 => 18,  107 => 16,  102 => 15,  100 => 14,  96 => 13,  89 => 11,  84 => 9,  80 => 8,  74 => 6,  65 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} {{ ad.title }} {% endblock %}

{% block body %}
    <div class=\"ad-title\" style=\"background-image: url({{ ad.coverImage }})\">
        <div class=\"container\">
            <h1>{{ ad.title }}</h1>
            <p>{{ ad.introduction }}</p>
            <p class=\"h2\">
                <strong>{{ ad.rooms }} chambre(s)</strong> pour <strong>{{ ad.price | number_format(2, ',', ' ') }}&euro;</strong> par nuit
            </p>
            <a href=\"{{ path('booking_create', {'slug': ad.slug}) }}\" class=\"btn btn-primary\">Réserver</a>
            {% if app.user and app.user == ad.author %}
            <a href=\"{{ path('ads_edit', {'slug': ad.slug}) }}\" class=\"btn btn-secondary\">Modifier l'annonce</a>
            <a href=\"{{ path('ads_delete', {'slug': ad.slug}) }}\" class=\"btn btn-danger\" onclick=\"return confirm(`Êtes vous sur de vouloir supprimer l'annonce : {{ ad.title }} ?`)\">Supprimer l'annonce</a>
            {% endif %}
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 mb-3\">
                {{ ad.content | raw}}

                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        {% for image in ad.images %}
                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{ loop.index0 }}\" {% if loop.first %} class=\"active\" {% endif %}></li>
                        {% endfor %}
                    </ol>
                    <div class=\"carousel-inner\">
                        {% for image in ad.images %}
                            <div class=\"carousel-item {% if loop.first %} active {% endif %}\">
                                <img src=\"{{ image.url }}\" class=\"d-block w-100\" alt=\"...\">
                                <div class=\"carousel-caption d-none d-md-block\">
                                    <h5>{{ ad.title }}</h5>
                                    <p>{{ image.caption }}</p>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Previous</span>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"sr-only\">Next</span>
                    </a>
                </div>
                <hr>

                {% if ad.comments | length > 0 %}
                    <h2 class=\"mb-3\">Commentaires de nos clients :</h2>
                    <div class=\"alert alert-info\">
                        <h4 class=\"alert-heading text-center\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-md-6\">
                                    Note globale donnée par nos clients
                                </div>
                                <div class=\"col-md-6 mt-2\">
                                    {% include 'common/rating.html.twig' with {'rating': ad.avgRatings} %}
                                    <br>
                                    <small>calculé sur {{ ad.comments | length }} avis</small>
                                </div>
                            </div>
                        </h4>
                    </div>
                    {% for comment in ad.comments %}
                        {% set author = comment.author %}
                        <div class=\"bg-light rounded mb-3 py-3 px-3\">
                            <strong>{{ author.firstName }}</strong> a dit :
                            <blockquote>
                                {{ comment.content }}
                            </blockquote>
                            <strong>Note donnée : </strong>
                            {% include 'common/rating.html.twig' with {'rating': comment.rating} %}
                        </div>
                    {% endfor %}
                {% else %}
                    <h2>Cette annonce n'a pas encore reçu de commentaire</h2>
                {% endif %}

            </div>
            <div class=\"col\">
            {% set a = ad.author %}
                <div class=\"row mb-3 align-items-center\">
                    <div class=\"col-4\">
                        <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                            <img src=\"{{ a.picture }}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{ a.fullName }}\">
                        </a>
                    </div>
                    <div class=\"col\">
                        <a href=\"{{ path('user_show', {'slug': a.slug}) }}\">
                            <h3>{{ a.fullName }}</h3>
                        </a>
                        <span class=\"badge badge-primary\">{{ a.ads | length }} annonces</span>
                    </div>
                </div>
                {{ a.description | raw }}
            </div>
        </div>
    </div>
{% endblock %}", "ad/show.html.twig", "D:\\Udemy\\Symfony\\symbnb\\templates\\ad\\show.html.twig");
    }
}
