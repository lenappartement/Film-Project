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

/* detail.html.twig */
class __TwigTemplate_5bb15c7c3b5d6314279f3ece8c7d8f0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail.html.twig"));

        // line 1
        $this->loadTemplate("header.html", "detail.html.twig", 1)->display($context);
        // line 2
        echo "<!DOCTYPE html>
<html>
<body>
<div class=\"nav-bg\">
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
<div>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 7, $this->source); })()), "password", [], "any", false, false, false, 7), 'row');
        echo "</div>
<div>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 8, $this->source); })()), "submitForm", [], "any", false, false, false, 8), 'row');
        echo "</div>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 9, $this->source); })()), 'form_end');
        echo "
</div>
<div class=\"detail\">
<h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 12, $this->source); })()), "getName", [], "method", false, false, false, 12), "html", null, true);
        echo "</h1>
<p>Note : </p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 13, $this->source); })()), "getScore", [], "method", false, false, false, 13), "html", null, true);
        echo "
<p>Description : </p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 14, $this->source); })()), "getDescription", [], "method", false, false, false, 14), "html", null, true);
        echo "
</div>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  70 => 13,  66 => 12,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'header.html' %}
<!DOCTYPE html>
<html>
<body>
<div class=\"nav-bg\">
{{ form_start(deleteFilm) }}
<div>{{form_row(deleteFilm.password)}}</div>
<div>{{form_row(deleteFilm.submitForm)}}</div>
{{ form_end(deleteFilm) }}
</div>
<div class=\"detail\">
<h1>{{ film.getName() }}</h1>
<p>Note : </p>{{ film.getScore() }}
<p>Description : </p>{{ film.getDescription() }}
</div>
</body>
</html>", "detail.html.twig", "/Users/lenaiglesis/Desktop/programmation/Symfony/projetFilm/templates/detail.html.twig");
    }
}
