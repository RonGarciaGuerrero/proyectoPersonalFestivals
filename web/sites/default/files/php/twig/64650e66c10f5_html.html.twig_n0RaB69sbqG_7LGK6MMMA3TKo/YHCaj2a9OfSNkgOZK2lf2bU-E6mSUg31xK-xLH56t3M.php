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

/* themes/contrib/da_vinci/templates/layout/html.html.twig */
class __TwigTemplate_3ceebee846ec6a39727ea0d25df71c92 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 29, $this->source))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 30, $this->source)))) : ("")), 3 => ((        // line 31
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 34
        echo "<!DOCTYPE html>
<html";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 35, $this->source), "html", null, true);
        echo ">
  <head>
    ";
        // line 37
        if ((($context["responsive"] ?? null) - ($context["project"] ?? null))) {
            // line 38
            echo "      <!-- 
        ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
        ░░░░░░░░░░▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄░░░░░░░░░
        ░░░░░░░░▄▀░░░░░░░░░░░░▄░░░░░░░▀▄░░░░░░░
        ░░░░░░░░█░░▄░░░░▄░░░░░░░░░░░░░░█░░░░░░░
        ░░░░░░░░█░░░░░░░░░░░░▄█▄▄░░▄░░░█░▄▄▄░░░
        ░▄▄▄▄▄░░█░░░░░░▀░░░░▀█░░▀▄░░░░░█▀▀░██░░
        ░██▄▀██▄█░░░▄░░░░░░░██░░░░▀▀▀▀▀░░░░██░░
        ░░▀██▄▀██░░░░░░░░▀░██▀░░░░░░░░░░░░░▀██░
        ░░░░▀████░▀░░░░▄░░░██░░░▄█░░░░▄░▄█░░██░
        ░░░░░░░▀█░░░░▄░░░░░██░░░░▄░░░▄░░▄░░░██░
        ░░░░░░░▄█▄░░░░░░░░░░░▀▄░░▀▀▀▀▀▀▀▀░░▄▀░░
        ░░░░░░█▀▀█████████▀▀▀▀████████████▀░░░░
        ░░░░░░████▀░░███▀░░░░░░▀███░░▀██▀░░░░░░
        ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ 
-->
    ";
        }
        // line 55
        echo "    <head-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 55, $this->source), "html", null, true);
        echo "\">
    <title>";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 56, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 57, $this->source), "html", null, true);
        echo "\">
    <js-placeholder token=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
    ";
        // line 59
        if (($context["styling_code"] ?? null)) {
            // line 60
            echo "      <style>
        ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["styling_code"] ?? null), 61, $this->source));
            echo "
      </style>
    ";
        }
        // line 64
        echo "  </head>
  <body";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">
    ";
        // line 70
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 73, $this->source), "html", null, true);
        echo "
    ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 74, $this->source), "html", null, true);
        echo "
    ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 75, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 76, $this->source), "html", null, true);
        echo "\">
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/da_vinci/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 76,  125 => 75,  121 => 74,  117 => 73,  112 => 71,  109 => 70,  105 => 65,  102 => 64,  96 => 61,  93 => 60,  91 => 59,  87 => 58,  83 => 57,  79 => 56,  74 => 55,  55 => 38,  53 => 37,  48 => 35,  45 => 34,  43 => 31,  42 => 30,  41 => 29,  40 => 28,  39 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/da_vinci/templates/layout/html.html.twig", "/var/www/html/web/themes/contrib/da_vinci/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 27, "if" => 37);
        static $filters = array("clean_class" => 29, "escape" => 35, "safe_join" => 56, "raw" => 61, "t" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'safe_join', 'raw', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
