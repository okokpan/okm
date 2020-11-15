<?php

/* @membership/backend/index.twig */
class __TwigTemplate_f22fb68b4ba6f745099f881c558f88c6853a58f812f7b39ba732c915f7ffa6e2 extends Twig_SupTwg_Template
{
    public function __construct(Twig_SupTwg_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@membership/backend/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@membership/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-cog\"></i>";
        // line 7
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"pages\">
\t\t\t<i class=\"fa fa-file-text-o\"></i>";
        // line 10
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pages")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"security\">
\t\t\t<i class=\"fa fa-lock\"></i>";
        // line 13
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Security")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"uploads\">
\t\t\t<i class=\"fa fa-upload\"></i>";
        // line 16
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Uploads")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"seo\">
\t\t\t<i class=\"fa fa-search\"></i>";
        // line 19
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"import\">
\t\t\t<i class=\"fa fa-download\"></i>";
        // line 22
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Data")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"groups\">
\t\t\t<i class=\"fa fa-object-group\"></i> ";
        // line 25
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"reports\">
\t\t\t<i class=\"fa fa-flag\"></i>";
        // line 28
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
        echo "
\t\t</a>
        ";
        // line 30
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentTab"), "method"), "html", null, true);
        echo "

\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 34
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 39
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 40
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 41
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</h2>
\t</div>
";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        // line 46
        echo "
\t<div class=\"sc-tab-content active\" data-tab=\"main\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 52
        echo $context["options"]->getemailRowWithButton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Admin Email")),         // line 54
$context["options"]->getbutton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test Email")), "admin-email-button", "tooltip"), "main[admin-email]", $this->getAttribute($this->getAttribute(        // line 60
($context["settings"] ?? null), "main", array()), "admin-email", array(), "array"), "admin-email", null, null, array("mbsThinCol" => 1));
        // line 63
        echo "

\t\t\t\t\t";
        // line 65
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[messages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 71
($context["settings"] ?? null), "main", array()), "messages", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[messages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 77
($context["settings"] ?? null), "main", array()), "messages", array()) == "false"))), "messages", null, null, array("mbsThinCol" => 1));
        // line 81
        echo "

\t\t\t\t\t";
        // line 83
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[groups]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 89
($context["settings"] ?? null), "main", array()), "groups", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[groups]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 95
($context["settings"] ?? null), "main", array()), "groups", array()) == "false"))), "groups", null, null, array("mbsThinCol" => 1));
        // line 99
        echo "

\t\t\t\t\t";
        // line 101
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[friends]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 107
($context["settings"] ?? null), "main", array()), "friends", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[friends]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 113
($context["settings"] ?? null), "main", array()), "friends", array()) == "false"))), "friends", null, null, array("mbsThinCol" => 1));
        // line 117
        echo "

\t\t\t\t\t";
        // line 119
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[activity]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 125
($context["settings"] ?? null), "main", array()), "activity", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[activity]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 131
($context["settings"] ?? null), "main", array()), "activity", array()) == "false"))), "activity", null, null, array("mbsThinCol" => 1));
        // line 135
        echo "

\t\t\t\t\t";
        // line 137
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 143
($context["settings"] ?? null), "main", array()), "followers", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 149
($context["settings"] ?? null), "main", array()), "followers", array()) == "false"))), "followers", null, null, array("mbsThinCol" => 1));
        // line 153
        echo "

\t\t\t\t \t";
        // line 155
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Favorites")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[favorites]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 161
($context["settings"] ?? null), "main", array()), "favorites", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[favorites]", "value" => "false", "checked" => ( !$this->getAttribute($this->getAttribute(        // line 167
($context["settings"] ?? null), "main", array(), "any", false, true), "favorites", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "favorites", array()) == "false")))), "favorites", null, null, array("mbsThinCol" => 1));
        // line 171
        echo "
                    ";
        // line 172
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[posts]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 178
($context["settings"] ?? null), "main", array()), "posts", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[posts]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 184
($context["settings"] ?? null), "main", array()), "posts", array()) == "false"))), "posts", null, null, array("mbsThinCol" => 1));
        // line 188
        echo "

                    ";
        // line 190
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[comments]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 196
($context["settings"] ?? null), "main", array()), "comments", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[comments]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 202
($context["settings"] ?? null), "main", array()), "comments", array()) == "false"))), "comments", null, null, array("mbsThinCol" => 1));
        // line 206
        echo "

                    ";
        // line 208
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "adminMainSettingsOptions"), "method"), "html", null, true);
        echo "

\t\t\t\t\t";
        // line 210
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after registration to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-registration-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 216
($context["settings"] ?? null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-registration-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 222
($context["settings"] ?? null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-url"))), "after-registration-action", "",         // line 226
$context["options"]->gettextInput("main[after-registration-redirect-url]", $this->getAttribute($this->getAttribute(        // line 228
($context["settings"] ?? null), "main", array()), "after-registration-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 231
        echo "

\t\t\t\t\t";
        // line 233
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after login to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-login-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 239
($context["settings"] ?? null), "main", array()), "after-login-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Previous page")), "name" => "main[after-login-action]", "value" => "redirect-to-previous", "checked" => ($this->getAttribute($this->getAttribute(        // line 245
($context["settings"] ?? null), "main", array()), "after-login-action", array(), "array") == "redirect-to-previous")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-login-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 251
($context["settings"] ?? null), "main", array()), "after-login-action", array(), "array") == "redirect-to-url"))), "after-login-action", "",         // line 255
$context["options"]->gettextInput("main[after-login-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 257
($context["settings"] ?? null), "main", array()), "after-login-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 260
        echo "

\t\t\t\t\t";
        // line 262
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after logout to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-logout-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 268
($context["settings"] ?? null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-logout-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 274
($context["settings"] ?? null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-url"))), "after-logout-action", "",         // line 278
$context["options"]->gettextInput("main[after-logout-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 280
($context["settings"] ?? null), "main", array()), "after-logout-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 283
        echo "

\t\t\t\t\t";
        // line 285
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after account is deleted to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 291
($context["settings"] ?? null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 297
($context["settings"] ?? null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-url"))), "after-delete-account-action", "",         // line 301
$context["options"]->gettextInput("main[after-delete-account-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 303
($context["settings"] ?? null), "main", array()), "after-delete-account-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 306
        echo "

\t\t\t\t\t";
        // line 308
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Badges")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[badges]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 314
($context["settings"] ?? null), "main", array()), "badges", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[badges]", "value" => "false", "checked" => ( !$this->getAttribute($this->getAttribute(        // line 320
($context["settings"] ?? null), "main", array(), "any", false, true), "badges", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "badges", array()) == "false")))), "badges", null, null, array("mbsThinCol" => 1));
        // line 324
        echo "

\t\t\t\t\t";
        // line 326
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable global Notification Icon")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[global-notification]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 332
($context["settings"] ?? null), "main", array()), "global-notification", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[global-notification]", "value" => "false", "checked" => ( !$this->getAttribute($this->getAttribute(        // line 338
($context["settings"] ?? null), "main", array(), "any", false, true), "global-notification", array(), "array", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "global-notification", array(), "array") == "false")))), "global-notification", null, null, array("mbsThinCol" => 1));
        // line 342
        echo "

\t\t\t\t\t";
        // line 344
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use in Global Search")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[global-search]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 350
($context["settings"] ?? null), "main", array()), "global-search", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[global-search]", "value" => "false", "checked" => ( !$this->getAttribute($this->getAttribute(        // line 356
($context["settings"] ?? null), "main", array(), "any", false, true), "global-search", array(), "array", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "global-search", array(), "array") == "false")))), "global-search", null, null, array("mbsThinCol" => 1));
        // line 360
        echo "

\t\t\t\t\t";
        // line 362
        $context["globalSearchUsers"] = array("name" => "main[global-search-users]", "value" => "true");
        // line 366
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "global-search-users", array(), "array") == "true")) {
            // line 367
            echo "\t\t\t\t\t\t";
            $context["globalSearchUsers"] = Twig_SupTwg_array_merge(($context["globalSearchUsers"] ?? null), array("checked" => "checked"));
            // line 368
            echo "\t\t\t\t\t";
        }
        // line 369
        echo "\t\t\t\t\t";
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Users Activities")), array(0 =>         // line 370
($context["globalSearchUsers"] ?? null)), "globalSearchUsers", null, null, null, array("mbsThinCol" => 1));
        // line 376
        echo "

\t\t\t\t\t";
        // line 378
        $context["globalSearchGroups"] = array("name" => "main[global-search-groups]", "value" => "true");
        // line 382
        echo "\t\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "main", array()), "global-search-groups", array(), "array") == "true")) {
            // line 383
            echo "\t\t\t\t\t\t";
            $context["globalSearchGroups"] = Twig_SupTwg_array_merge(($context["globalSearchGroups"] ?? null), array("checked" => "checked"));
            // line 384
            echo "\t\t\t\t\t";
        }
        // line 385
        echo "\t\t\t\t\t";
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups Activities")), array(0 =>         // line 386
($context["globalSearchGroups"] ?? null)), "globalSearchGroups", null, null, null, array("mbsThinCol" => 1));
        // line 392
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"sc-tab-content\" data-tab=\"pages\">
        <div class=\"mp-action-panel\">
            <button class=\"create-pages sc-button icon-button primary\">
                <i class=\"fa fa-plus\"></i>
                <span>";
        // line 402
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create all unassigned pages")), "html", null, true);
        echo "</span>
            </button>
            <button class=\"save-pages sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 406
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Pages")), "html", null, true);
        echo "</span>
            </button>
        </div>
        <div class=\"mp-options\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 412
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["slug"] => $context["page"]) {
            // line 413
            echo "\t\t\t\t\t\t";
            if (($context["slug"] == "contact_form")) {
                // line 414
                echo "\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainPagesTab", 1 => array(0 => $this->getAttribute(($context["settings"] ?? null), "pages", array()))), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 416
                echo "\t\t\t\t\t\t\t<div class=\"mp-option mp-page-option\" data-page-slug=\"";
                echo Twig_SupTwg_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t\t<span title=\"";
                // line 420
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input-with-button\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-button\" ";
                // line 425
                if ($this->getAttribute($context["page"], "id", array())) {
                    echo "style=\"display: none\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"sc-button icon-button create-page-button primary\" data-page-slug=\"";
                // line 426
                echo Twig_SupTwg_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 428
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create page")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-select\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 432
                echo $this->env->getExtension('Membership_Base_Twig')->callFunction("wp_dropdown_pages", array("name" => (("pages[" . $context["slug"]) . "]"), "selected" => $this->getAttribute($context["page"], "id", array()), "class" => "sc-input wp-pages-list", "echo" => false, "show_option_none" => "Select Page", "option_none_value" => "__none"));
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 439
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "
                </div>
            </div>
        </div>

    </div>
\t<div class=\"sc-tab-content\" data-tab=\"security\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 451
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Global Site Access")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Everyone")), "name" => "security[global-site-access]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute(        // line 456
($context["settings"] ?? null), "security", array()), "global-site-access", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Logged In Users")), "name" => "security[global-site-access]", "value" => "logged-in-users", "checked" => ($this->getAttribute($this->getAttribute(        // line 462
($context["settings"] ?? null), "security", array()), "global-site-access", array(), "array") == "logged-in-users"))), "global-site-access", null, null, array("mbsThinCol" => 1));
        // line 466
        echo "

                    ";
        // line 468
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Protect all Pages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[protect-all-pages]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 473
($context["settings"] ?? null), "security", array()), "protect-all-pages", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[protect-all-pages]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 479
($context["settings"] ?? null), "security", array()), "protect-all-pages", array(), "array") == "no"))), "protect-all-pages", null, null, array("mbsThinCol" => 1));
        // line 483
        echo "

\t\t\t\t\t";
        // line 485
        echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect from backend login screen to membership login page")),         // line 486
$context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[backend-login-screen-redirect]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 490
($context["settings"] ?? null), "security", array()), "backend-login-screen-redirect", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[backend-login-screen-redirect]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 496
($context["settings"] ?? null), "security", array()), "backend-login-screen-redirect", array(), "array") == "no")))), "backend-login-screen-redirect", null, null, array("mbsThinCol" => 1));
        // line 500
        echo "

\t\t\t\t\t";
        // line 502
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Blocked IP Addresses")), "security[blocked-ip]", (($this->getAttribute($this->getAttribute(        // line 504
($context["settings"] ?? null), "security", array(), "any", false, true), "blocked-ip", array(), "array", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "security", array(), "any", false, true), "blocked-ip", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "blocked-ip"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "blocked-ip"), "method"))), "blocked-ip", null, null, 6, null, array("mbsThinCol" => 1));
        // line 507
        echo "

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t<span title=\"";
        // line 516
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Roles")), "html", null, true);
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User role can use plugin")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t<div>";
        // line 520
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User roles that can use plugin. Administartor is included by default. Some other plugins can change permissions to the admin panel.")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<select multiple=\"multiple\" name=\"security[access_roles][]\" class=\"chosen-select\" data-placeholder=\"";
        // line 526
        echo "Select avalilable roles to use tables.";
        echo "\">
\t\t\t\t\t\t\t<option value=\"administrator\" disabled=\"disabled\" selected=\"selected\">Administrator</option>
\t\t\t\t\t\t\t";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["wpRoleList"] ?? null));
        foreach ($context['_seq'] as $context["role"] => $context["title"]) {
            // line 529
            echo "\t\t\t\t\t\t\t\t";
            if (($context["role"] != "administrator")) {
                // line 530
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo Twig_SupTwg_escape_filter($this->env, $context["role"], "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t";
                // line 531
                if (Twig_SupTwg_in_filter($context["role"], $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "security", array()), "access_roles", array()))) {
                    // line 532
                    echo "\t\t\t\t\t\t\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 534
                echo "\t\t\t\t\t\t\t\t\t>";
                echo Twig_SupTwg_escape_filter($this->env, $context["title"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
            }
            // line 537
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['role'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 538
        echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"uploads\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mp-option\" id=\"max-image-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t";
        // line 551
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum Image Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 556
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-image-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 560
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-image-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t   class=\"sc-input\"
\t\t\t\t\t\t\t   name=\"uploads[max-file-size]\"
\t\t\t\t\t\t\t   value=\"";
        // line 571
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-file-size", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t   max=\"";
        // line 572
        echo Twig_SupTwg_escape_filter($this->env, ($context["maxFileUpload"] ?? null), "html", null, true);
        echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 576
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum File Size (Mb)")), "uploads[max-file-size-mb]", ($this->getAttribute($this->getAttribute(        // line 579
($context["settings"] ?? null), "uploads", array()), "max-file-size", array(), "array") / (1024 * 1024)), "max-file-size-mb", "", (("max=\"" . (        // line 582
($context["maxFileUpload"] ?? null) / (1024 * 1024))) . "\""), array("mbsThinCol" => 1));
        // line 584
        echo "
\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\" style=\"width: 315px!important;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"mp-option-input-description\">
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<span>";
        // line 590
        echo Twig_SupTwg_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum available file upload size is %d Mb")), (($context["maxFileUpload"] ?? null) / (1024 * 1024))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 595
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Quality")), "uploads[image-quality]", $this->getAttribute($this->getAttribute(        // line 597
($context["settings"] ?? null), "uploads", array()), "image-quality", array(), "array"), "image-quality", null, null, array("mbsThinCol" => 1));
        // line 600
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"seo\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 611
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Title")), "seo[profile-title]", $this->getAttribute($this->getAttribute(        // line 613
($context["settings"] ?? null), "seo", array()), "profile-title", array(), "array"), "profile-title", null, null, array("mbsThinCol" => 1));
        // line 616
        echo "

\t\t\t\t\t";
        // line 618
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Dynamic Meta Description")), "seo[profile-description]", (($this->getAttribute($this->getAttribute(        // line 620
($context["settings"] ?? null), "seo", array(), "any", false, true), "profile-description", array(), "array", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "seo", array(), "any", false, true), "profile-description", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "profile-description"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "profile-description"), "method"))), "profile-description", null, null, 6, null, array("mbsThinCol" => 1));
        // line 623
        echo "

\t\t\t\t\t";
        // line 625
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Title")), "seo[group-title]", $this->getAttribute($this->getAttribute(        // line 627
($context["settings"] ?? null), "seo", array()), "group-title", array(), "array"), "group-title", null, null, array("mbsThinCol" => 1));
        // line 630
        echo "

\t\t\t\t\t";
        // line 632
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Dynamic Meta Description")), "seo[group-description]", (($this->getAttribute($this->getAttribute(        // line 634
($context["settings"] ?? null), "seo", array(), "any", false, true), "group-description", array(), "array", true, true)) ? (_Twig_SupTwg_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "seo", array(), "any", false, true), "group-description", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "group-description"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "group-description"), "method"))), "group-description", null, null, 6, null, array("mbsThinCol" => 1));
        // line 637
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"import\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>";
        // line 647
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity link image preview for Amazon")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 648
        echo $context["options"]->getselectInput2(array(0 => array("value" => 0, "title" => "Default"), 1 => array("value" => 1, "title" => "Extended1")), $this->getAttribute($this->getAttribute(        // line 653
($context["settings"] ?? null), "import", array(), "array"), "amazon-link-img-preview", array(), "array"), array("name" => "import[amazon-link-img-preview]", "class" => "sc-input mbs-act-link-img-preview"), 0);
        // line 659
        echo "
\t
\t\t\t\t\t";
        // line 661
        if (($context["isBuddyPressExists"] ?? null)) {
            // line 662
            echo "\t\t\t\t\t\t<h3 class=\"header\">BuddyPress</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 668
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-groups\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-groups\">";
            // line 675
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Groups")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-friends\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-friends\">";
            // line 682
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Friends")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-activity\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-activity\">";
            // line 689
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Activity")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-buddy-press-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 695
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Buddy Press Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 699
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 700
        if (($context["isUltimateMemberExists"] ?? null)) {
            // line 701
            echo "\t\t\t\t\t\t<h3 class=\"header\">Ultimate Member</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"um-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 707
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-ultimate-member-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 713
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Ultimate Member Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 717
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 718
        if (( !($context["isBuddyPressExists"] ?? null) &&  !($context["isUltimateMemberExists"] ?? null))) {
            // line 719
            echo "\t\t\t\t\t\t";
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No supported plugins found. Currently we support:")), "html", null, true);
            echo " BuddyPress, Ultimate Member.
\t\t\t\t\t";
        }
        // line 721
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"groups\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>";
        // line 730
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Category List")), "html", null, true);
        echo "</h3>
\t\t\t\t\t<div class=\"mbsGroupCategoryWrapper\">
\t\t\t\t\t\t<label id=\"mbsGroupCategoryNameLabel\" for=\"mbsGroupCategoryName\">";
        // line 732
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group category name:")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" value=\"\" id=\"mbsGroupCategoryName\" class=\"sc-input\"/>
\t\t\t\t\t\t<button id=\"mbsSaveNewGroupCategory\" class=\"sc-button icon-button primary\" data-add=\"";
        // line 734
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new")), "html", null, true);
        echo "\" data-update=\"";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Update")), "html", null, true);
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<button id=\"mbsCancelNewGroupCategory\" class=\"sc-button icon-button primary\">";
        // line 735
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<table id=\"mbsGroupCategoryTbl\">
\t\t\t\t\t\t<body>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 744
        if (Twig_SupTwg_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
            // line 745
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["groupCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                // line 746
                echo "\t\t\t\t\t\t\t\t\t<tr id=\"mbsGcTblRow-";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\" data-id=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 747
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 748
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mbsGroupCategoryEdit\">";
                // line 750
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mbsGroupCategoryRemove\">";
                // line 751
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 755
            echo "\t\t\t\t\t\t\t";
        }
        // line 756
        echo "\t\t\t\t\t\t</body>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mp-option\" id=\"admin-email\">
\t\t\t\t\t\t<h4>";
        // line 763
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Joined Groups tab")), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 767
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort Groups by")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 771
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sorts in Descending order")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t";
        // line 778
        echo $context["options"]->getselectInput2(array(0 => array("value" => 0, "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Id"))), 1 => array("value" => 1, "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Recent Post")))), $this->getAttribute($this->getAttribute(        // line 783
($context["settings"] ?? null), "groups", array()), "joined-sort-order", array(), "array"), array("name" => "groups[joined-sort-order]", "class" => "sc-input", "style" => "width: 160px;"));
        // line 785
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" id=\"mbsMsgGroupCategoryRemove\" value=\"";
        // line 792
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this category?")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgErrorOcured-1\" value=\"";
        // line 793
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error Occurred!")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgSavedSuccessfully\" value=\"";
        // line 794
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record saved...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgUpdatedSuccessfully\" value=\"";
        // line 795
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record updated...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgRemoveSuccessfully\" value=\"";
        // line 796
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record removed...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsTxtEdit\" value=\"";
        // line 797
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsTxtRemove\" value=\"";
        // line 798
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
        echo "\"/>
\t</div>

\t<div class=\"sc-tab-content\" data-tab=\"reports\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<form class=\"mp-option\" id=\"search\" action=\"";
        // line 805
        echo Twig_SupTwg_escape_filter($this->env, (($context["reportsUrl"] ?? null) . "#reports"), "html", null, true);
        echo "\" method=\"get\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t";
        // line 808
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"report-filter search\">
\t\t\t\t\t\t\t\t\t<input name=\"page\" type=\"hidden\" value=\"supsystic-membership\"/>
\t\t\t\t\t\t\t\t\t<input name=\"module\" type=\"hidden\" value=\"membership\"/>
\t\t\t\t\t\t\t\t\t<input name=\"order_by\" type=\"hidden\" value=\"";
        // line 814
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order_by"), "method"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t<input name=\"order\" type=\"hidden\" value=\"";
        // line 815
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" name=\"report_comment\" type=\"text\" value=\"";
        // line 816
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "report_comment"), "method"), "html", null, true);
        echo "\" id=\"mbsReportFindField\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"sc-button primary\" value=\"";
        // line 820
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t\t";
        // line 825
        $context["reqTurnedOrder"] = ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"));
        // line 826
        echo "\t\t\t\t\t";
        $context["reqOrderName"] = $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order_by"), "method");
        // line 827
        echo "\t\t\t\t\t";
        $context["report_comment"] = $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "report_comment"), "method");
        // line 828
        echo "\t\t\t\t\t<table class=\"sc-table reports\" data-translate=\"";
        echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_jsonencode_filter(array("Read" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "Unread" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "Mark as read and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as read and close")), "Mark as unread and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as unread and close")), "Close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close")), "User is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User is not found")), "Activity is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity is not found")))));
        // line 836
        echo "\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 838
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">#</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 839
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=content_type&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "content_type")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report type")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 840
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=reporter_id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "reporter_id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reporter")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t";
        // line 842
        echo "\t\t\t\t\t\t\t<th><a href=\"";
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=reported_id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "reported_id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reported")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th>";
        // line 843
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Comment")), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 844
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=date&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "date")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Date")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 845
        echo Twig_SupTwg_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=status&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "status")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Status")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
        // line 849
        $context['_parent'] = $context;
        $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 850
            echo "\t\t\t\t\t\t\t<tr class=\"report\"
\t\t\t\t\t\t\t\tdata-report-id=\"";
            // line 851
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-report=\"";
            // line 852
            echo Twig_SupTwg_escape_filter($this->env, Twig_SupTwg_jsonencode_filter($context["report"]), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 855
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"content-type\">
\t\t\t\t\t\t\t\t\t\t";
            // line 859
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 860
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity Report")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 861
$context["report"], "content_type", array()) == "user")) {
                // line 862
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Report")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 864
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"reporter\">
\t\t\t\t\t\t\t\t\t\t";
            // line 868
            if ($this->getAttribute($context["report"], "reporter", array())) {
                // line 869
                echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "url", array()), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 870
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "editLink", array()), "html", null, true);
                echo "\"><small>(";
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit profile")), "html", null, true);
                echo ")</small></a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 872
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reporter_id", array())), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 874
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            // line 877
            echo "\t\t\t\t\t\t\t\t";
            // line 878
            echo "\t\t\t\t\t\t\t\t";
            // line 879
            echo "\t\t\t\t\t\t\t\t";
            // line 880
            echo "\t\t\t\t\t\t\t\t";
            // line 881
            echo "\t\t\t\t\t\t\t\t";
            // line 882
            echo "\t\t\t\t\t\t\t\t";
            // line 883
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"reported\">
\t\t\t\t\t\t\t\t\t\t";
            // line 885
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 886
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 887
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "url", array()), "html", null, true);
                    echo "\">";
                    echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 889
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo Twig_SupTwg_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 891
                echo "\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["report"], "content_type", array()) == "user")) {
                // line 892
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 893
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    echo Twig_SupTwg_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($context["report"], "reported", array())), "html", null, true);
                    echo "\">";
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "displayName", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    // line 894
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "editLink", array()), "html", null, true);
                    echo "\"><small>(";
                    echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                    echo ")</small></a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 896
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo Twig_SupTwg_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 898
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 899
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"comment\">";
            // line 902
            echo Twig_SupTwg_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->truncate($this->getAttribute($context["report"], "comment", array()), 80), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"date\">";
            // line 905
            echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["report"], "date", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"status\">
\t\t\t\t\t\t\t\t\t\t";
            // line 909
            if (($this->getAttribute($context["report"], "status", array()) != "new")) {
                // line 910
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 912
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 914
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"report-details\">";
            // line 918
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Details")), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 923
        echo "\t\t\t\t\t</table>

\t\t\t\t\t<div class=\"sc-hidden user-report-details-template\">
\t\t\t\t\t\t";
        // line 926
        $this->loadTemplate("@reports/backend/partials/user-report-details.twig", "@membership/backend/index.twig", 926)->display($context);
        // line 927
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sc-hidden activity-report-details-template\">
\t\t\t\t\t\t";
        // line 930
        $this->loadTemplate("@reports/backend/partials/activity-report-details.twig", "@membership/backend/index.twig", 930)->display($context);
        // line 931
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-modal send-message-modal sc-hidden\">
\t\t\t\t\t\t<div class=\"mp-option\" id=\"message\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"user-id\" name=\"user-id\" value=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 939
        echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send message to: ")), "html", null, true);
        echo "</span> <span class=\"message-recipient\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"message-input\" class=\"sc-input\" name=\"\" cols=\"35\" rows=\"10\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mp-result\">
\t\t\t\t\t\t\t\t\t\t<span id=\"message-result\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    ";
        // line 956
        echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentSettings"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@membership/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1265 => 956,  1245 => 939,  1235 => 931,  1233 => 930,  1228 => 927,  1226 => 926,  1221 => 923,  1210 => 918,  1204 => 914,  1198 => 912,  1192 => 910,  1190 => 909,  1183 => 905,  1177 => 902,  1172 => 899,  1169 => 898,  1163 => 896,  1156 => 894,  1149 => 893,  1146 => 892,  1143 => 891,  1137 => 889,  1129 => 887,  1126 => 886,  1124 => 885,  1120 => 883,  1118 => 882,  1116 => 881,  1114 => 880,  1112 => 879,  1110 => 878,  1108 => 877,  1104 => 874,  1098 => 872,  1091 => 870,  1084 => 869,  1082 => 868,  1076 => 864,  1070 => 862,  1068 => 861,  1063 => 860,  1061 => 859,  1054 => 855,  1048 => 852,  1044 => 851,  1041 => 850,  1037 => 849,  1020 => 845,  1006 => 844,  1002 => 843,  987 => 842,  973 => 840,  959 => 839,  947 => 838,  943 => 836,  940 => 828,  937 => 827,  934 => 826,  932 => 825,  924 => 820,  917 => 816,  913 => 815,  909 => 814,  900 => 808,  894 => 805,  884 => 798,  880 => 797,  876 => 796,  872 => 795,  868 => 794,  864 => 793,  860 => 792,  851 => 785,  849 => 783,  848 => 778,  838 => 771,  831 => 767,  824 => 763,  815 => 756,  812 => 755,  802 => 751,  798 => 750,  793 => 748,  789 => 747,  782 => 746,  777 => 745,  775 => 744,  763 => 735,  755 => 734,  750 => 732,  745 => 730,  734 => 721,  728 => 719,  726 => 718,  723 => 717,  716 => 713,  707 => 707,  699 => 701,  697 => 700,  694 => 699,  687 => 695,  678 => 689,  668 => 682,  658 => 675,  648 => 668,  640 => 662,  638 => 661,  634 => 659,  632 => 653,  631 => 648,  627 => 647,  615 => 637,  613 => 634,  612 => 632,  608 => 630,  606 => 627,  605 => 625,  601 => 623,  599 => 620,  598 => 618,  594 => 616,  592 => 613,  591 => 611,  578 => 600,  576 => 597,  575 => 595,  567 => 590,  559 => 584,  557 => 582,  556 => 579,  555 => 576,  548 => 572,  544 => 571,  530 => 560,  523 => 556,  515 => 551,  500 => 538,  494 => 537,  487 => 534,  483 => 532,  481 => 531,  476 => 530,  473 => 529,  469 => 528,  464 => 526,  455 => 520,  446 => 516,  435 => 507,  433 => 504,  432 => 502,  428 => 500,  426 => 496,  425 => 490,  424 => 486,  423 => 485,  419 => 483,  417 => 479,  416 => 473,  415 => 468,  411 => 466,  409 => 462,  408 => 456,  407 => 451,  394 => 440,  388 => 439,  378 => 432,  371 => 428,  366 => 426,  360 => 425,  350 => 420,  342 => 416,  336 => 414,  333 => 413,  329 => 412,  320 => 406,  313 => 402,  301 => 392,  299 => 386,  297 => 385,  294 => 384,  291 => 383,  288 => 382,  286 => 378,  282 => 376,  280 => 370,  278 => 369,  275 => 368,  272 => 367,  269 => 366,  267 => 362,  263 => 360,  261 => 356,  260 => 350,  259 => 344,  255 => 342,  253 => 338,  252 => 332,  251 => 326,  247 => 324,  245 => 320,  244 => 314,  243 => 308,  239 => 306,  237 => 303,  236 => 301,  235 => 297,  234 => 291,  233 => 285,  229 => 283,  227 => 280,  226 => 278,  225 => 274,  224 => 268,  223 => 262,  219 => 260,  217 => 257,  216 => 255,  215 => 251,  214 => 245,  213 => 239,  212 => 233,  208 => 231,  206 => 228,  205 => 226,  204 => 222,  203 => 216,  202 => 210,  197 => 208,  193 => 206,  191 => 202,  190 => 196,  189 => 190,  185 => 188,  183 => 184,  182 => 178,  181 => 172,  178 => 171,  176 => 167,  175 => 161,  174 => 155,  170 => 153,  168 => 149,  167 => 143,  166 => 137,  162 => 135,  160 => 131,  159 => 125,  158 => 119,  154 => 117,  152 => 113,  151 => 107,  150 => 101,  146 => 99,  144 => 95,  143 => 89,  142 => 83,  138 => 81,  136 => 77,  135 => 71,  134 => 65,  130 => 63,  128 => 60,  127 => 54,  126 => 52,  118 => 46,  115 => 45,  108 => 41,  105 => 40,  102 => 39,  94 => 34,  87 => 30,  82 => 28,  76 => 25,  70 => 22,  64 => 19,  58 => 16,  52 => 13,  46 => 10,  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwg_Source("", "@membership/backend/index.twig", "/www/www.wonways.com/wp-content/plugins/membership-by-supsystic/src/Membership/Membership/views/backend/index.twig");
    }
}
