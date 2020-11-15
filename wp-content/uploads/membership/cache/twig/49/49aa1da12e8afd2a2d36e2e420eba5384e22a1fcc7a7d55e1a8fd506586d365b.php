<?php

/* @gallery/partials/backend.main.content.tab.twig */
class __TwigTemplate_326b4e028a96f1290835609176e46b1769d840fe3fb1ebe1c3a13803e3ebf91d extends Twig_SupTwg_Template
{
    public function __construct(Twig_SupTwg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<a href=\"#\" class=\"tab\" data-target=\"plugins\">
    <i class=\"fa fa-plug\"></i>";
        // line 2
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Content")), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "@gallery/partials/backend.main.content.tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwg_Source("", "@gallery/partials/backend.main.content.tab.twig", "/www/www.wonways.com/wp-content/plugins/membership-by-supsystic/src/Membership/Gallery/views/partials/backend.main.content.tab.twig");
    }
}
