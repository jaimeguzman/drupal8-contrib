<?php

/* core/themes/bartik/templates/page.html.twig */
class __TwigTemplate_55e9917e5bfafe1e71006ce069caf23422362e826ceee1aebe39a97f762318d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 75
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 77
        echo $this->env->getExtension('drupal_core')->renderVar(t("Site header"));
        echo "\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 79
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true);
        echo "
        ";
        // line 80
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 81
            echo "          <a href=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" rel=\"home\" id=\"logo\">
            <img src=\"";
            // line 82
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
            echo "\" />
          </a>
        ";
        }
        // line 85
        echo "        ";
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 86
            echo "          <div id=\"name-and-slogan\"";
            if (((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null) && (isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
            ";
            // line 87
            if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
                // line 88
                echo "              ";
                if ((isset($context["title"]) ? $context["title"] : null)) {
                    // line 89
                    echo "                <div id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
                  <strong>
                    <a href=\"";
                    // line 91
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                    echo "</span></a>
                  </strong>
                </div>
              ";
                    // line 95
                    echo "              ";
                } else {
                    // line 96
                    echo "                <h1 id=\"site-name\"";
                    if ((isset($context["hide_site_name"]) ? $context["hide_site_name"] : null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
                  <a href=\"";
                    // line 97
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('drupal_core')->renderVar(t("Home"));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
                    echo "</span></a>
                </h1>
              ";
                }
                // line 100
                echo "            ";
            }
            // line 101
            echo "            ";
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 102
                echo "              <div id=\"site-slogan\"";
                if ((isset($context["hide_site_slogan"]) ? $context["hide_site_slogan"] : null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
                ";
                // line 103
                echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true);
                echo "
              </div>
            ";
            }
            // line 106
            echo "          </div>
        ";
        }
        // line 108
        echo "        ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true);
        echo "
        ";
        // line 109
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true);
        echo "
      </div>
    </header>
    ";
        // line 112
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true);
        echo "
    ";
        // line 113
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 114
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 116
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 120
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 122
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true);
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 126
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
            ";
        // line 127
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 128
            echo "              <h1 class=\"title\" id=\"page-title\">
                ";
            // line 129
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo "
              </h1>
            ";
        }
        // line 132
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
            ";
        // line 133
        if ((isset($context["tabs"]) ? $context["tabs"] : null)) {
            // line 134
            echo "              <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Tabs"));
            echo "\">
                ";
            // line 135
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true);
            echo "
              </nav>
            ";
        }
        // line 138
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true);
        echo "
            ";
        // line 139
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 140
            echo "              <ul class=\"action-links\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true);
            echo "</ul>
            ";
        }
        // line 142
        echo "            ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true);
        echo "
          </section>
        </main>
        ";
        // line 145
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 146
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 148
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 152
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 153
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 155
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 159
        echo "      </div>
    </div>
    ";
        // line 161
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()))) {
            // line 162
            echo "      <div id=\"featured-bottom-wrapper\">
        <aside id=\"featured-bottom\" class=\"section layout-container clearfix\" role=\"complementary\">
          ";
            // line 164
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true);
            echo "
          ";
            // line 165
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true);
            echo "
          ";
            // line 166
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 170
        echo "    <footer class=\"site-footer\">
      ";
        // line 171
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 172
            echo "        <div class=\"site-footer__top layout-container clearfix\">
          ";
            // line 173
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true);
            echo "
          ";
            // line 174
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true);
            echo "
          ";
            // line 175
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true);
            echo "
          ";
            // line 176
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 179
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 180
            echo "        <div class=\"site-footer__bottom layout-container\" role=\"contentinfo\">
          ";
            // line 181
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 184
        echo "    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 184,  301 => 181,  298 => 180,  295 => 179,  289 => 176,  285 => 175,  281 => 174,  277 => 173,  274 => 172,  272 => 171,  269 => 170,  262 => 166,  258 => 165,  254 => 164,  250 => 162,  248 => 161,  244 => 159,  237 => 155,  233 => 153,  230 => 152,  223 => 148,  219 => 146,  217 => 145,  210 => 142,  204 => 140,  202 => 139,  197 => 138,  191 => 135,  186 => 134,  184 => 133,  179 => 132,  173 => 129,  170 => 128,  168 => 127,  164 => 126,  157 => 122,  153 => 120,  146 => 116,  142 => 114,  140 => 113,  136 => 112,  130 => 109,  125 => 108,  121 => 106,  115 => 103,  108 => 102,  105 => 101,  102 => 100,  92 => 97,  85 => 96,  82 => 95,  72 => 91,  64 => 89,  61 => 88,  59 => 87,  52 => 86,  49 => 85,  41 => 82,  34 => 81,  32 => 80,  28 => 79,  23 => 77,  19 => 75,);
    }
}
