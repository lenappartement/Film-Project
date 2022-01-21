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
class __TwigTemplate_a5251b3e44f7ad7cc3188964c95d99da extends Template
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
        echo "<!DOCTYPE html>
<html>
<body>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
<div>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 5, $this->source); })()), "password", [], "any", false, false, false, 5), 'row');
        echo "</div>
<div>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 6, $this->source); })()), "submitForm", [], "any", false, false, false, 6), 'row');
        echo "</div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteFilm"]) || array_key_exists("deleteFilm", $context) ? $context["deleteFilm"] : (function () { throw new RuntimeError('Variable "deleteFilm" does not exist.', 7, $this->source); })()), 'form_end');
        echo "

<h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 9, $this->source); })()), "getName", [], "method", false, false, false, 9), "html", null, true);
        echo "</h1>
<p>Note : ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 10, $this->source); })()), "getScore", [], "method", false, false, false, 10), "html", null, true);
        echo "</p>
<p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new RuntimeError('Variable "film" does not exist.', 11, $this->source); })()), "getDescription", [], "method", false, false, false, 11), "html", null, true);
        echo "</p>
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
        return array (  70 => 11,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<body>
{{ form_start(deleteFilm) }}
<div>{{form_row(deleteFilm.password)}}</div>
<div>{{form_row(deleteFilm.submitForm)}}</div>
{{ form_end(deleteFilm) }}

<h1>{{ film.getName() }}</h1>
<p>Note : {{ film.getScore() }}</p>
<p>{{ film.getDescription() }}</p>
</body>
</html>", "detail.html.twig", "/Users/lenaiglesis/Desktop/programmation/Symfony/projetFilm/templates/detail.html.twig");
    }
}
