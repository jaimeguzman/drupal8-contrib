<?php

/* core/themes/classy/templates/form/form-element.html.twig */
class __TwigTemplate_3a0792d8d26f74bb9afd2783177af007cffac583907a42b0e98beb23141430d0 extends Twig_Template
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
        // line 47
        $context["classes"] = array(0 => "form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 49
(isset($context["type"]) ? $context["type"] : null))), 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 50
(isset($context["type"]) ? $context["type"] : null))), 3 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 51
(isset($context["name"]) ? $context["name"] : null))), 4 => ((!twig_in_filter(        // line 52
(isset($context["title_display"]) ? $context["title_display"] : null), array(0 => "after", 1 => "before"))) ? ("form-no-label") : ("")), 5 => (((        // line 53
(isset($context["disabled"]) ? $context["disabled"] : null) == "disabled")) ? ("form-disabled") : ("")));
        // line 57
        $context["description_classes"] = array(0 => "description", 1 => (((        // line 59
(isset($context["description_display"]) ? $context["description_display"] : null) == "invisible")) ? ("visually-hidden") : ("")));
        // line 62
        echo "<div";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 63
        if (twig_in_filter((isset($context["label_display"]) ? $context["label_display"] : null), array(0 => "before", 1 => "invisible"))) {
            // line 64
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 66
        echo "  ";
        if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : null))) {
            // line 67
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 69
        echo "  ";
        if ((((isset($context["description_display"]) ? $context["description_display"] : null) == "before") && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 70
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "html", null, true);
            echo ">
      ";
            // line 71
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 74
        echo "  ";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 75
        if ( !twig_test_empty((isset($context["suffix"]) ? $context["suffix"] : null))) {
            // line 76
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["suffix"]) ? $context["suffix"] : null), "html", null, true);
            echo "</span>
  ";
        }
        // line 78
        echo "  ";
        if (((isset($context["label_display"]) ? $context["label_display"] : null) == "after")) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "
  ";
        }
        // line 81
        echo "  ";
        if ((twig_in_filter((isset($context["description_display"]) ? $context["description_display"] : null), array(0 => "after", 1 => "invisible")) && $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()))) {
            // line 82
            echo "    <div";
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true);
            echo ">
      ";
            // line 83
            echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 86,  95 => 83,  90 => 82,  87 => 81,  81 => 79,  78 => 78,  72 => 76,  70 => 75,  65 => 74,  59 => 71,  54 => 70,  51 => 69,  45 => 67,  42 => 66,  36 => 64,  34 => 63,  29 => 62,  27 => 59,  26 => 57,  24 => 53,  23 => 52,  22 => 51,  21 => 50,  20 => 49,  19 => 47,);
    }
}
