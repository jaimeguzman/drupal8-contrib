<?php

/* core/themes/bartik/templates/block--system-menu-block.html.twig */
class __TwigTemplate_5304866ad7cbb892bb1cbe0a818e60957bc3db09d5d216cabd31c5db122229f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/block/block--system-menu-block.html.twig", "core/themes/bartik/templates/block--system-menu-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/block/block--system-menu-block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["show_anchor"] = ("show-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 11
        $context["hide_anchor"] = ("hide-" . \Drupal\Component\Utility\Html::getId($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 15
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true);
            echo ">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 17
            echo "    ";
            // line 18
            echo "    <div class=\"menu-toggle-target menu-toggle-target-show\" id=\"";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\"></div>
    <div class=\"menu-toggle-target\" id=\"";
            // line 19
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\"></div>
    <a class=\"menu-toggle\" href=\"#";
            // line 20
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["show_anchor"]) ? $context["show_anchor"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Menu"));
            echo "</a>
    <a class=\"menu-toggle menu-toggle--hide\" href=\"#";
            // line 21
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["hide_anchor"]) ? $context["hide_anchor"] : null), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('drupal_core')->renderVar(t("Menu"));
            echo "</a>
    ";
            // line 22
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  66 => 21,  60 => 20,  56 => 19,  51 => 18,  49 => 17,  41 => 15,  38 => 14,  36 => 13,  33 => 12,  29 => 1,  27 => 11,  25 => 10,  11 => 1,);
    }
}
