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

/* themes/contrib/da_vinci/templates/layout/page.html.twig */
class __TwigTemplate_b95720275e278b73e5cfa7449f0ef39a extends Template
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
        // line 51
        echo "<div class=\"layout-container\">

  <header aria-label=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Header"));
        echo "\">
    ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 54)) {
            // line 55
            echo "      <div class=\"site-top--bar\">
        ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 59
        echo "
    <div class=\"site-header\">
      ";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "
      ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "
    </div>
  </header>

  ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliding_panel", [], "any", false, false, true, 66)) {
            // line 67
            echo "    <nav class=\"site-sliding--panel\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sliding panel"));
            echo "\">
      ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sliding_panel", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
    </nav>
  ";
        }
        // line 71
        echo "
  ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "
  ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "
  ";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
  ";
        // line 75
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
        echo "
  ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "
  ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
        echo "

  <main aria-label=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Main content"));
        echo "\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 81
        echo "
    <div class=\"layout-content site-layout\">
      <div class=\"site-layout__content\">
        ";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "
      </div>

      ";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 87)) {
            // line 88
            echo "        <aside class=\"site-layout__sidebar--first\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sidebar first"));
            echo "\">
          ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 92
        echo "
      ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 93)) {
            // line 94
            echo "        <aside class=\"site-layout__sidebar--second\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Sidebar second"));
            echo "\">
          ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
        </aside>
      ";
        }
        // line 98
        echo "    </div>

  </main>

  ";
        // line 102
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
        echo "

  ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 104) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_info", [], "any", false, false, true, 104))) {
            // line 105
            echo "    <footer aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Footer"));
            echo "\">

      ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 107)) {
                // line 108
                echo "        <div class=\"site-footer\" >
          ";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 112
            echo "
      ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_info", [], "any", false, false, true, 113)) {
                // line 114
                echo "        <div class=\"site-footer__info\">
          ";
                // line 115
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_info", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 118
            echo "
    </footer>
  ";
        }
        // line 121
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/da_vinci/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 121,  202 => 118,  196 => 115,  193 => 114,  191 => 113,  188 => 112,  182 => 109,  179 => 108,  177 => 107,  171 => 105,  169 => 104,  164 => 102,  158 => 98,  152 => 95,  147 => 94,  145 => 93,  142 => 92,  136 => 89,  131 => 88,  129 => 87,  123 => 84,  118 => 81,  114 => 79,  109 => 77,  105 => 76,  101 => 75,  97 => 74,  93 => 73,  89 => 72,  86 => 71,  80 => 68,  75 => 67,  73 => 66,  66 => 62,  62 => 61,  58 => 59,  52 => 56,  49 => 55,  47 => 54,  43 => 53,  39 => 51,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/da_vinci/templates/layout/page.html.twig", "/var/www/html/web/themes/contrib/da_vinci/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 54);
        static $filters = array("t" => 53, "escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
