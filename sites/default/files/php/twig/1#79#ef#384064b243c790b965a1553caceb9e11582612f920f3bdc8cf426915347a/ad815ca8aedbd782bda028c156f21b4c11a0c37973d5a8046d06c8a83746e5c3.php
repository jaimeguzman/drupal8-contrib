<?php

/* core/themes/classy/templates/form/select.html.twig */
class __TwigTemplate_79ef384064b243c790b965a1553caceb9e11582612f920f3bdc8cf426915347a extends Twig_Template
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
        // line 13
        echo "<select";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo $this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["options"]) ? $context["options"] : null), "html", null, true);
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 13,);
    }
}
