<?php

/* @base/layouts/backend.twig */
class __TwigTemplate_6dc2f4fa9a9f09269a4200b5c23c630451decd0d41e01e20db2c6ede665ec631 extends Twig_SupTwg_Template
{
    public function __construct(Twig_SupTwg_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
            'mainFooter' => array($this, 'block_mainFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"sc\">
\t<div class=\"sc-head\">
\t\t";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "\t</div>
\t<div class=\"sc-container\">
\t\t<div class=\"menu-sidebar\">
\t\t\t";
        // line 7
        $context["adminAreaMenus"] = $this->getAttribute(($context["environment"] ?? null), "getAdminAreaMenus", array(), "method");
        // line 8
        echo "\t\t\t";
        if (($context["adminAreaMenus"] ?? null)) {
            // line 9
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["adminAreaMenus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 10
                echo "\t\t\t\t\t";
                $context["active"] = (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == $this->getAttribute($context["menu"], "module", array())) || ($this->getAttribute($context["menu"], "is_main", array()) && (null === $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()))));
                // line 11
                echo "\t\t\t\t\t";
                if ((($this->getAttribute($context["menu"], "action", array()) && ($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "action", array()) != $this->getAttribute($context["menu"], "action", array()))) || ($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "action", array()) && ($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "action", array()) != $this->getAttribute($context["menu"], "action", array()))))) {
                    // line 12
                    echo "\t\t\t\t\t\t";
                    $context["active"] = false;
                    // line 13
                    echo "\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t";
                $context["menuUrl"] = (($this->getAttribute($context["menu"], "action", array())) ? ($this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => $this->getAttribute($context["menu"], "module", array()), 1 => $this->getAttribute($context["menu"], "action", array())), "method")) : ($this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => $this->getAttribute($context["menu"], "module", array())), "method")));
                // line 15
                echo "\t\t\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t\t\t";
                // line 16
                if (($context["active"] ?? null)) {
                    // line 17
                    echo "\t\t\t\t\t\t\tactive
\t\t\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t\t\t";
                if (((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "groups") && ($this->getAttribute($context["menu"], "module", array()) == "groups")) || (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "badges") && ($this->getAttribute($context["menu"], "module", array()) == "badges")))) {
                    // line 20
                    echo "\t\t\t\t\t\t\tactive
\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\">

\t\t\t\t\t\t<a href=\"";
                // line 24
                echo Twig_SupTwg_escape_filter($this->env, ($context["menuUrl"] ?? null), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 25
                if ($this->getAttribute($context["menu"], "fa_icon", array())) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t";
                    if (Twig_SupTwg_test_iterable($this->getAttribute($context["menu"], "fa_icon", array()))) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 28
                        $context['_parent'] = $context;
                        $context['_seq'] = Twig_SupTwg_ensure_traversable($this->getAttribute($context["menu"], "fa_icon", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["fa_icon"]) {
                            // line 29
                            echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa";
                            echo " ";
                            echo Twig_SupTwg_escape_filter($this->env, $context["fa_icon"], "html", null, true);
                            echo "\"></i>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fa_icon'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"fa";
                        echo " ";
                        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["menu"], "fa_icon", array()), "html", null, true);
                        echo "\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t\t\t";
                // line 37
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["menu"], "title", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 39
                if ($this->getAttribute($context["menu"], "is_promo", array())) {
                    // line 40
                    echo "\t\t\t\t\t\t\t<small>Pro</small>
\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 44
                if ((($context["active"] ?? null) && Twig_SupTwg_test_empty($this->getAttribute($context["menu"], "is_main", array())))) {
                    // line 45
                    echo "\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t/*Make sub menu in WP menu be selected for our modules menus too*/
\t\t\t\t\t\t\tjQuery(document).ready(function(){
\t\t\t\t\t\t\t\tvar activeTab = {
\t\t\t\t\t\t\t\t\tmod: '";
                    // line 49
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["menu"], "module", array()), "html", null, true);
                    echo "'
\t\t\t\t\t\t\t\t,\taction: '";
                    // line 50
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["menu"], "action", array()), "html", null, true);
                    echo "'
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\tif(jQuery('#toplevel_page_supsystic-membership').hasClass('wp-has-current-submenu')) {
\t\t\t\t\t\t\t\t\tvar \$subMenus = jQuery('#toplevel_page_supsystic-membership').find('.wp-submenu li');
\t\t\t\t\t\t\t\t\t\$subMenus.removeClass('current').each(function(){
\t\t\t\t\t\t\t\t\t\tvar checkUrl = '&module='+ activeTab.mod+ (activeTab.action ? '&action='+ activeTab.action : '');
\t\t\t\t\t\t\t\t\t\tif(jQuery(this).find('a[href\$=\"'+ checkUrl+ '\"]').size()) {
\t\t\t\t\t\t\t\t\t\t\tjQuery(this).addClass('current');
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t";
        } else {
            // line 66
            echo "\t\t\t<!--Leave this code just for a while - to make sure current users will not take additional problems-->
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
            // line 68
            if ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "membership") || (null === $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array())))) {
                // line 69
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 72
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "membership"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"fa fa-cogs\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 75
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
            // line 80
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "users")) {
                // line 81
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 84
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "users"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t<i class=\"fa fa-file fa-file-stacked\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 90
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
            // line 95
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "roles")) {
                // line 96
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 99
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "roles"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<span class=\"fa-stack\">
\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t<i class=\"fa fa-check-square-o fa-file-stacked\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 105
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Roles")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"menu-sidebar-item
\t\t\t\t";
            // line 110
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "groups")) {
                // line 111
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 114
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "groups"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"fa fa-group\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 117
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
            // line 123
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "messages")) {
                // line 124
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 127
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "messages"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"fa fa-envelope\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 130
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mails")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
            // line 136
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "design")) {
                // line 137
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 140
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "design"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"fa fa-picture-o\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 143
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Design")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"
\t\t\t\tmenu-sidebar-item
\t\t\t\t";
            // line 149
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "reports")) {
                // line 150
                echo "\t\t\t\t\tactive
\t\t\t\t";
            }
            // line 152
            echo "\t\t\t\">
\t\t\t\t<a href=\"";
            // line 153
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "reports"), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t<div class=\"menu-sidebar-item-title\">
\t\t\t\t\t\t";
            // line 156
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        }
        // line 161
        echo "\t\t</div>
\t\t<div class=\"main-container\">
\t\t\t";
        // line 163
        $this->displayBlock('mainHeader', $context, $blocks);
        // line 165
        echo "\t\t\t";
        $this->displayBlock('main', $context, $blocks);
        // line 167
        echo "\t\t\t";
        $this->displayBlock('mainFooter', $context, $blocks);
        // line 169
        echo "\t\t</div>
\t</div>
</div>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
    }

    // line 163
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 164
        echo "\t\t\t";
    }

    // line 165
    public function block_main($context, array $blocks = array())
    {
        // line 166
        echo "\t\t\t";
    }

    // line 167
    public function block_mainFooter($context, array $blocks = array())
    {
        // line 168
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "@base/layouts/backend.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 168,  387 => 167,  383 => 166,  380 => 165,  376 => 164,  373 => 163,  368 => 3,  361 => 169,  358 => 167,  355 => 165,  353 => 163,  349 => 161,  341 => 156,  335 => 153,  332 => 152,  328 => 150,  326 => 149,  317 => 143,  311 => 140,  308 => 139,  304 => 137,  302 => 136,  293 => 130,  287 => 127,  284 => 126,  280 => 124,  278 => 123,  269 => 117,  263 => 114,  260 => 113,  256 => 111,  254 => 110,  246 => 105,  237 => 99,  234 => 98,  230 => 96,  228 => 95,  220 => 90,  211 => 84,  208 => 83,  204 => 81,  202 => 80,  194 => 75,  188 => 72,  185 => 71,  181 => 69,  179 => 68,  175 => 66,  172 => 65,  166 => 64,  149 => 50,  145 => 49,  139 => 45,  137 => 44,  133 => 42,  129 => 40,  127 => 39,  122 => 37,  119 => 36,  116 => 35,  109 => 33,  105 => 31,  95 => 29,  91 => 28,  88 => 27,  85 => 26,  83 => 25,  79 => 24,  75 => 22,  71 => 20,  68 => 19,  64 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  39 => 9,  36 => 8,  34 => 7,  29 => 4,  27 => 3,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwg_Source("", "@base/layouts/backend.twig", "/www/www.wonways.com/wp-content/plugins/membership-by-supsystic/src/Membership/Base/views/layouts/backend.twig");
    }
}
