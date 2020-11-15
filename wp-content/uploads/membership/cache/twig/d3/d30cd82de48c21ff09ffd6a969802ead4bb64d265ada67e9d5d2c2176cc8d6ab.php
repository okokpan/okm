<?php

/* @base/macros/options.twig */
class __TwigTemplate_05530fc0ac482e82b221038242b48e65a09f80f09cdc230aa36ddc1338ca2465 extends Twig_SupTwg_Template
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
        // line 40
        echo "
";
        // line 98
        echo "
";
        // line 122
        echo "
";
        // line 165
        echo "
";
        // line 186
        echo "
";
        // line 194
        echo "
";
        // line 199
        echo "
";
        // line 204
        echo "
";
        // line 209
        echo "
";
        // line 214
        echo "
";
        // line 219
        echo "
";
        // line 230
        echo "
";
        // line 241
        echo "
";
        // line 248
        echo "
";
        // line 253
        echo "
";
        // line 258
        echo "
";
        // line 263
        echo "
";
        // line 268
        echo "
";
        // line 273
        echo "
";
        // line 278
        echo "
";
        // line 283
        echo "
";
        // line 288
        echo "
";
        // line 293
        echo "
";
        // line 298
        echo "
";
        // line 318
        echo "
";
        // line 337
        echo "
";
        // line 343
        echo "
";
        // line 347
        echo "
";
        // line 353
        echo "
";
        // line 359
        echo "
";
        // line 365
        echo "
";
        // line 371
        echo "
";
        // line 388
        echo "
";
        // line 404
        echo "
";
        // line 439
        echo "
";
        // line 461
        echo "
";
        // line 469
        echo "
";
        // line 477
        echo "
";
        // line 485
        echo "
";
        // line 498
        echo "
";
        // line 505
        echo "
";
        // line 534
        echo "
";
    }

    // line 1
    public function getrow($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 2);
            // line 3
            echo "\t";
            $context["options"] = $this;
            // line 4
            echo "\t<div class=\"mp-option\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
\t\t<div class=\"row\">
\t\t\t";
            // line 6
            ob_start();
            // line 7
            echo "\t\t\t\t";
            if (( !($context["withoutHelper"] ?? null) && ($context["id"] ?? null))) {
                // line 8
                echo "\t\t\t\t\t";
                $context["tooltip"] = $context["tooltips"]->getget(($context["id"] ?? null));
                // line 9
                echo "\t\t\t\t\t";
                if (($context["tooltip"] ?? null)) {
                    // line 10
                    echo "\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t<div>";
                    // line 13
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array(($context["tooltip"] ?? null)));
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t";
            }
            // line 18
            echo "\t\t\t";
            $context["toolTipHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
\t\t\t";
            // line 20
            if ((($context["params"] ?? null) && $this->getAttribute(($context["params"] ?? null), "mbsThinCol", array()))) {
                // line 21
                echo "\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t<span title=\"";
                // line 23
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
                // line 24
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
                // line 29
                echo $context["options"]->getlabel(($context["label"] ?? null));
                echo "
\t\t\t\t\t";
                // line 30
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 33
            echo "
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
            // line 35
            echo ($context["input"] ?? null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 41
    public function getsettingRow($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__buttons__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttons" => $__buttons__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 42
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 42);
            // line 43
            echo "    ";
            $context["options"] = $this;
            // line 44
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
        <div class=\"row\">
\t\t\t";
            // line 46
            ob_start();
            // line 47
            echo "\t\t\t\t";
            if (( !($context["withoutHelper"] ?? null) && ($context["id"] ?? null))) {
                // line 48
                echo "\t\t\t\t\t";
                $context["tooltip"] = $context["tooltips"]->getget(($context["id"] ?? null));
                // line 49
                echo "\t\t\t\t\t";
                if (($context["tooltip"] ?? null)) {
                    // line 50
                    echo "\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t<div>";
                    // line 53
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array(($context["tooltip"] ?? null)));
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t";
            }
            // line 58
            echo "\t\t\t";
            $context["toolTipHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
            // line 59
            echo "\t\t\t";
            if ((($context["params"] ?? null) && $this->getAttribute(($context["params"] ?? null), "mbsThinCol", array()))) {
                // line 60
                echo "\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t<span title=\"";
                // line 62
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
                // line 63
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
                // line 68
                echo $context["options"]->getlabel(($context["label"] ?? null));
                echo "
\t\t\t\t\t";
                // line 69
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 72
            echo "            <div class=\"col-md-8\">
                ";
            // line 73
            echo ($context["input"] ?? null);
            echo "
                ";
            // line 74
            if (($context["buttons"] ?? null)) {
                // line 75
                echo "                ";
                if ($this->getAttribute(($context["buttons"] ?? null), "edit", array())) {
                    // line 76
                    echo "                <button class=\"mp-option-setting-edit-button sc-button primary\">
                    <i class=\"fa fa-lg fa-edit\"></i>
                    ";
                    // line 78
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["buttons"] ?? null), "edit", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 81
                echo "                ";
                if ($this->getAttribute(($context["buttons"] ?? null), "send", array())) {
                    // line 82
                    echo "                <button class=\"mp-option-setting-send-button sc-button primary\">
                    <i class=\"fa fa-lg fa-send\"></i>
                    ";
                    // line 84
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["buttons"] ?? null), "send", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 87
                echo "                ";
                if ($this->getAttribute(($context["buttons"] ?? null), "reset", array())) {
                    // line 88
                    echo "                <button class=\"mp-option-setting-reset-button sc-button primary\">
                    <i class=\"fa fa-lg fa-asterisk\"></i>
                    ";
                    // line 90
                    echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["buttons"] ?? null), "reset", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 93
                echo "                ";
            }
            // line 94
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getsettingRowWithSelect($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__select__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "select" => $__select__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 100);
            // line 101
            echo "    ";
            $context["options"] = $this;
            // line 102
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
                ";
            // line 105
            echo $context["options"]->getlabel(($context["label"] ?? null));
            echo "
    \t\t\t";
            // line 106
            if ( !($context["withoutHelper"] ?? null)) {
                // line 107
                echo "\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
                // line 110
                if (($context["id"] ?? null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget(($context["id"] ?? null))));
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
            }
            // line 114
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
                ";
            // line 116
            echo ($context["input"] ?? null);
            echo "
\t\t\t\t";
            // line 117
            echo $context["options"]->getselectInput($this->getAttribute(($context["select"] ?? null), "options", array()), $this->getAttribute(($context["select"] ?? null), "name", array()));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 123
    public function getsettingRowWithInput($__label__ = null, $__input1__ = null, $__id__ = null, $__attributes__ = null, $__input2__ = null, $__withHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input1" => $__input1__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "input2" => $__input2__,
            "withHelper" => $__withHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 124
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 124);
            // line 125
            echo "\t";
            $context["options"] = $this;
            // line 126
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
\t\t<div class=\"row\">
\t\t\t";
            // line 128
            ob_start();
            // line 129
            echo "\t\t\t\t";
            if ((($context["withHelper"] ?? null) == 1)) {
                // line 130
                echo "\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t<div>";
                // line 133
                if (($context["id"] ?? null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget(($context["id"] ?? null))));
                }
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 137
            echo "\t\t\t";
            $context["toolTipHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
            // line 138
            echo "\t\t\t";
            if ((($context["params"] ?? null) && $this->getAttribute(($context["params"] ?? null), "mbsThinCol", array()))) {
                // line 139
                echo "\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t<span title=\"";
                // line 141
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
\t\t\t\t\t\t";
                // line 142
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t";
                // line 147
                echo $context["options"]->getlabel(($context["label"] ?? null));
                echo "
\t\t\t\t\t";
                // line 148
                echo Twig_SupTwg_escape_filter($this->env, ($context["toolTipHtml"] ?? null), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 151
            echo "
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"mbs-check-with-input-block\">
\t\t\t\t\t<div class=\"mbs-cwib-check-block\">
\t\t\t\t\t\t";
            // line 155
            echo ($context["input1"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mbs-cwib-input-block\">
\t\t\t\t\t\t";
            // line 158
            echo ($context["input2"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function getsettingRowWpEditor($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 167
            echo "    ";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 167);
            // line 168
            echo "    ";
            $context["options"] = $this;
            // line 169
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 offset-md-8\">
                ";
            // line 172
            echo $context["options"]->getlabel(($context["label"] ?? null));
            echo "
\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
            // line 176
            if (($context["id"] ?? null)) {
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget(($context["id"] ?? null))));
            }
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
                ";
            // line 181
            echo ($context["input"] ?? null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 187
    public function getlabel($__label__ = null, $__helper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "helper" => $__helper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 188
            echo "\t";
            if (($context["label"] ?? null)) {
                // line 189
                echo "\t\t<div class=\"mp-option-label\">
\t\t\t<span title=\"";
                // line 190
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "\">";
                echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</span>
\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 195
    public function getradioRow($__label__ = null, $__radios__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "radios" => $__radios__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 196
            echo "\t";
            $context["options"] = $this;
            // line 197
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getradioInput(($context["radios"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function getradioRowWithInput($__label__ = null, $__radios__ = null, $__id__ = null, $__attributes__ = null, $__input__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "radios" => $__radios__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "input" => $__input__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 201
            echo "\t";
            $context["options"] = $this;
            // line 202
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getradioWithInput(($context["radios"] ?? null), ($context["input"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 205
    public function getselectRow($__label__ = null, $__options__ = null, $__name__ = null, $__id__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "options" => $__options__,
            "name" => $__name__,
            "id" => $__id__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 206
            echo "\t";
            $context["_options"] = $this;
            // line 207
            echo "\t";
            echo $context["_options"]->getrow(($context["label"] ?? null), $context["_options"]->getselectInput(($context["options"] ?? null), ($context["name"] ?? null)), ($context["id"] ?? null), null, ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 210
    public function getmultipleSelectRow($__label__ = null, $__options__ = null, $__name__ = null, $__id__ = null, $__attributes__ = null, $__selectAttributes__ = null, $__description__ = null, $__withoutHelper__ = null, $__addClasses__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "options" => $__options__,
            "name" => $__name__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "selectAttributes" => $__selectAttributes__,
            "description" => $__description__,
            "withoutHelper" => $__withoutHelper__,
            "addClasses" => $__addClasses__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 211
            echo "\t";
            $context["_options"] = $this;
            // line 212
            echo "\t";
            echo $context["_options"]->getrow(($context["label"] ?? null), $context["_options"]->getmultipleSelectInput(($context["options"] ?? null), ($context["name"] ?? null), ($context["selectAttributes"] ?? null), ($context["description"] ?? null), ($context["addClasses"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 215
    public function getwpEditorRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 216
            echo "\t";
            $context["_options"] = $this;
            // line 217
            echo "\t";
            echo $context["_options"]->getsettingRowWpEditor(($context["label"] ?? null), $context["_options"]->getwpEditor(($context["name"] ?? null), ($context["value"] ?? null)), ($context["id"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 220
    public function getsubmitRow($__label__ = null, $__name__ = null, $__id__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 221
            echo "\t";
            $context["options"] = $this;
            // line 222
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 225
            echo $context["options"]->getsubmit(($context["name"] ?? null), ($context["label"] ?? null), ($context["id"] ?? null));
            echo "
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function getsaveButtonRow($__label__ = null, $__id__ = null, $__attributes__ = null, $__addBtnClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "addBtnClasses" => $__addBtnClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 232
            echo "\t";
            $context["options"] = $this;
            // line 233
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ($context["attributes"] ?? null);
            echo ">
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t";
            // line 236
            echo $context["options"]->getsaveButton(($context["label"] ?? null), ($context["addBtnClasses"] ?? null));
            echo "
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 242
    public function getsaveButton($__label__ = null, $__addBtnClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "addBtnClasses" => $__addBtnClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 243
            echo "\t<button data-save-settings class=\"save-settings sc-button icon-button primary ";
            if (($context["addBtnClasses"] ?? null)) {
                echo Twig_SupTwg_escape_filter($this->env, ($context["addBtnClasses"] ?? null), "html", null, true);
            }
            echo "\">
\t\t<i class=\"fa fa-save\"></i>
\t\t<span>";
            // line 245
            echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</span>
\t</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getinputRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__inputAttributes__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "inputAttributes" => $__inputAttributes__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 250
            echo "\t";
            $context["options"] = $this;
            // line 251
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->gettextInput(($context["name"] ?? null), ($context["value"] ?? null), ($context["inputAttributes"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 254
    public function getemailRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 255
            echo "\t";
            $context["options"] = $this;
            // line 256
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getemailInput(($context["name"] ?? null), ($context["value"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 259
    public function gettextareaRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__cols__ = null, $__rows__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "cols" => $__cols__,
            "rows" => $__rows__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 260
            echo "\t";
            $context["options"] = $this;
            // line 261
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->gettextareaInput(($context["name"] ?? null), ($context["value"] ?? null), ($context["cols"] ?? null), ($context["rows"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 264
    public function getcolorRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 265
            echo "\t";
            $context["options"] = $this;
            // line 266
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getcolorInput(($context["name"] ?? null), ($context["value"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 269
    public function getinputRowWithButton($__label__ = null, $__buttonLabel__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "buttonLabel" => $__buttonLabel__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 270
            echo "\t";
            $context["options"] = $this;
            // line 271
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getinputWithButton(($context["buttonLabel"] ?? null), ($context["name"] ?? null), ($context["value"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 274
    public function getemailRowWithButton($__label__ = null, $__button__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "button" => $__button__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 275
            echo "\t";
            $context["options"] = $this;
            // line 276
            echo "\t";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getemailWithButton(($context["button"] ?? null), ($context["name"] ?? null), ($context["value"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 279
    public function getcheckboxRow($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 280
            echo "    ";
            $context["options"] = $this;
            // line 281
            echo "    ";
            echo $context["options"]->getrow(($context["label"] ?? null), $context["options"]->getcheckboxInput(($context["checkboxes"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["withoutHelper"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 284
    public function getcheckboxSettingRow($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__buttons__ = null, $__withoutHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttons" => $__buttons__,
            "withoutHelper" => $__withoutHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 285
            echo "    ";
            $context["options"] = $this;
            // line 286
            echo "    ";
            echo $context["options"]->getsettingRow(($context["label"] ?? null), $context["options"]->getcheckboxInput(($context["checkboxes"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["buttons"] ?? null), ($context["withoutHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 289
    public function getcheckboxSettingRowWithSelect($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__select__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "select" => $__select__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 290
            echo "    ";
            $context["options"] = $this;
            // line 291
            echo "    ";
            echo $context["options"]->getsettingRowWithSelect(($context["label"] ?? null), $context["options"]->getcheckboxInput(($context["checkboxes"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["select"] ?? null), ($context["withoutHelper"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 294
    public function getcheckboxSettingRowWithInput($__label__ = null, $__checkboxes__ = null, $__input2__ = null, $__id__ = null, $__attributes__ = null, $__withHelper__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "input2" => $__input2__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withHelper" => $__withHelper__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 295
            echo "\t";
            $context["options"] = $this;
            // line 296
            echo "\t";
            echo $context["options"]->getsettingRowWithInput(($context["label"] ?? null), $context["options"]->getcheckboxInput(($context["checkboxes"] ?? null)), ($context["id"] ?? null), ($context["attributes"] ?? null), ($context["input2"] ?? null), ($context["withHelper"] ?? null), ($context["params"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 299
    public function getcheckboxInput($__checkboxes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "checkboxes" => $__checkboxes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 300
            echo "\t<div class=\"mp-option-checkbox\">
\t\t";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["checkboxes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 302
                echo "\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t<input
\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\tname=\"";
                // line 305
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\tvalue=\"";
                // line 306
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 307
                if ($this->getAttribute($context["option"], "checked", array())) {
                    // line 308
                    echo "\t\t\t\t\t\t\tchecked=\"true\"
\t\t\t\t\t\t";
                }
                // line 310
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute($context["option"], "attributes", array());
                echo "
\t\t\t\t>
\t\t\t\t";
                // line 312
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true);
                echo "
\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 319
    public function getradioInput($__radios__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "radios" => $__radios__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 320
            echo "\t<div class=\"mp-option-controls\">
\t\t";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["radios"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["radio"]) {
                // line 322
                echo "\t\t\t<label class=\"sc-radio\">
\t\t\t\t<input 
\t\t\t\t\ttype=\"radio\"
\t\t\t\t\tname=\"";
                // line 325
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["radio"], "name", array()), "html", null, true);
                echo "\"
\t\t\t\t\tvalue=\"";
                // line 326
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["radio"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t";
                // line 327
                if ($this->getAttribute($context["radio"], "checked", array())) {
                    // line 328
                    echo "\t\t\t\t\tchecked
\t\t\t\t\t";
                }
                // line 330
                echo "\t\t\t\t>
\t\t\t\t";
                // line 331
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["radio"], "label", array()), "html", null, true);
                echo "
\t\t\t\t<div class=\"sc-radio-state\"></div>
\t\t\t</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['radio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 338
    public function gettextInput($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 339
            echo "\t<div class=\"mp-option-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 340
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attributes"] ?? null);
            echo ">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 344
    public function gethiddenInput($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 345
            echo "\t<input type=\"hidden\" name=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
            echo ($context["attributes"] ?? null);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 348
    public function getwpEditor($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 349
            echo "\t";
            echo Twig_SupTwg_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->callFunction("wp_editor", ($context["value"] ?? null), ($context["name"] ?? null), array("drag_drop_upload" => 1)), "html", null, true);
            // line 351
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 354
    public function getemailInput($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 355
            echo "\t<div class=\"mp-option-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 356
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" type=\"email\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 360
    public function gettextareaInput($__name__ = null, $__value__ = null, $__cols__ = 35, $__rows__ = 5, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "cols" => $__cols__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 361
            echo "\t<div class=\"mp-option-input\">
\t\t<textarea class=\"sc-input\" name=\"";
            // line 362
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" cols=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
            echo "\">";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "</textarea>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 366
    public function getcolorInput($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 367
            echo "\t<div class=\"mp-option-color-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 368
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 372
    public function getselectInput($__options__ = null, $__name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 373
            echo "\t<div class=\"mp-option-select\">
\t\t<select class=\"sc-input\" name=\"";
            // line 374
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
\t\t\t";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 376
                echo "\t\t\t\t<option value=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t";
                // line 377
                if ($this->getAttribute($context["option"], "selected", array())) {
                    // line 378
                    echo "\t\t\t\t\t\tselected
\t\t\t\t\t";
                }
                // line 379
                echo "\t
\t\t\t\t\t";
                // line 380
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 381
                    echo "\t\t\t\t\t\tdisabled
\t\t\t\t\t";
                }
                // line 383
                echo "\t\t\t\t>";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "\t\t</select>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 389
    public function getcolorInput2($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 390
            echo "\t<div class=\"mp-option-color-input\">
\t\t<input
\t\t\t";
            // line 392
            if (array_key_exists("attributes", $context)) {
                // line 393
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["attributes"] ?? null));
                foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                    // line 394
                    echo "\t\t\t\t\t";
                    if (Twig_SupTwg_test_iterable($context["val"])) {
                        // line 395
                        echo "\t\t\t\t\t\t";
                        echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = Twig_SupTwg_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                            echo Twig_SupTwg_escape_filter($this->env, $context["attr"], "html", null, true);
                            echo ":";
                            echo Twig_SupTwg_escape_filter($this->env, $context["param"], "html", null, true);
                            echo ";";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\"
\t\t\t\t\t";
                    } else {
                        // line 397
                        echo "\t\t\t\t\t\t";
                        echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        echo Twig_SupTwg_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
\t\t\t\t\t";
                    }
                    // line 399
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 400
                echo "\t\t\t";
            }
            // line 401
            echo "\t\t/>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 405
    public function getselectInput2($__optionsList__ = null, $__selectedOption__ = null, $__attributes__ = null, $__useWrapper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "optionsList" => $__optionsList__,
            "selectedOption" => $__selectedOption__,
            "attributes" => $__attributes__,
            "useWrapper" => $__useWrapper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 406
            echo "\t";
            if ((($context["useWrapper"] ?? null) != 0)) {
                // line 407
                echo "\t\t<div class=\"mp-option-select\">
\t";
            }
            // line 409
            echo "\t<select
\t\t";
            // line 410
            if (array_key_exists("attributes", $context)) {
                // line 411
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["attributes"] ?? null));
                foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                    // line 412
                    echo "\t\t\t\t";
                    if (Twig_SupTwg_test_iterable($context["val"])) {
                        // line 413
                        echo "\t\t\t\t\t";
                        echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = Twig_SupTwg_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                            echo Twig_SupTwg_escape_filter($this->env, $context["attr"], "html", null, true);
                            echo ":";
                            echo Twig_SupTwg_escape_filter($this->env, $context["param"], "html", null, true);
                            echo ";";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\"
\t\t\t\t";
                    } else {
                        // line 415
                        echo "\t\t\t\t\t";
                        echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        echo Twig_SupTwg_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
\t\t\t\t";
                    }
                    // line 417
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                echo "\t\t";
            }
            // line 419
            echo "\t\">
\t\t";
            // line 420
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["optionsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 421
                echo "\t\t\t<option value=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t";
                // line 422
                if (Twig_SupTwg_test_iterable(($context["selectedOption"] ?? null))) {
                    // line 423
                    echo "\t\t\t\t\t\t";
                    if (Twig_SupTwg_in_filter($this->getAttribute($context["option"], "value", array()), ($context["selectedOption"] ?? null))) {
                        // line 424
                        echo "\t\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t\t";
                    }
                    // line 426
                    echo "\t\t\t\t\t";
                } elseif (($this->getAttribute($context["option"], "value", array()) == ($context["selectedOption"] ?? null))) {
                    // line 427
                    echo "\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t";
                }
                // line 429
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 430
                    echo "\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t";
                }
                // line 432
                echo "\t\t\t>";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 434
            echo "\t</select>
\t";
            // line 435
            if ((($context["useWrapper"] ?? null) != 0)) {
                // line 436
                echo "\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 440
    public function getmultipleSelectInput($__options__ = null, $__name__ = null, $__attributes__ = null, $__description__ = null, $__addClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "name" => $__name__,
            "attributes" => $__attributes__,
            "description" => $__description__,
            "addClasses" => $__addClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 441
            echo "\t<div class=\"mp-option-select\">
\t\t<select class=\"sc-input ";
            // line 442
            if ( !Twig_SupTwg_test_empty(($context["addClasses"] ?? null))) {
                echo Twig_SupTwg_escape_filter($this->env, ($context["addClasses"] ?? null), "html", null, true);
            }
            echo "\" name=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "[]\" ";
            echo ($context["attributes"] ?? null);
            echo " multiple>
\t\t\t";
            // line 443
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 444
                echo "\t\t\t\t<option value=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t";
                // line 445
                if ($this->getAttribute($context["option"], "selected", array())) {
                    // line 446
                    echo "\t\t\t\t\t\tselected
\t\t\t\t\t";
                }
                // line 447
                echo "\t
\t\t\t\t\t";
                // line 448
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 449
                    echo "\t\t\t\t\t\tdisabled
\t\t\t\t\t";
                }
                // line 451
                echo "\t\t\t\t>";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            echo "\t\t</select>
\t\t";
            // line 454
            if ( !Twig_SupTwg_test_empty(($context["description"] ?? null))) {
                // line 455
                echo "\t\t\t<div class=\"mp-option-select-description\" id=\"";
                echo Twig_SupTwg_escape_filter($this->env, $this->getAttribute(($context["description"] ?? null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t<span>";
                // line 456
                echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute(($context["description"] ?? null), "title", array()))), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t";
            }
            // line 459
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getinputWithButton($__buttonLabel__ = null, $__inputName__ = null, $__inputValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttonLabel" => $__buttonLabel__,
            "inputName" => $__inputName__,
            "inputValue" => $__inputValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 463
            echo "\t";
            $context["options"] = $this;
            // line 464
            echo "\t<div class=\"mp-option-input-with-button\">
\t\t<button class=\"mp-option-button sc-button primary\">";
            // line 465
            echo Twig_SupTwg_escape_filter($this->env, ($context["buttonLabel"] ?? null), "html", null, true);
            echo "</button>
\t\t";
            // line 466
            echo $context["options"]->gettextInput(($context["inputName"] ?? null), ($context["inputValue"] ?? null));
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 470
    public function getemailWithButton($__button__ = null, $__inputName__ = null, $__inputValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "button" => $__button__,
            "inputName" => $__inputName__,
            "inputValue" => $__inputValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 471
            echo "\t";
            $context["options"] = $this;
            // line 472
            echo "\t<div class=\"mp-option-input-with-button\">
\t\t";
            // line 473
            echo Twig_SupTwg_escape_filter($this->env, ($context["button"] ?? null), "html", null, true);
            echo "
\t\t";
            // line 474
            echo $context["options"]->getemailInput(($context["inputName"] ?? null), ($context["inputValue"] ?? null));
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 478
    public function getradioWithInput($__radios__ = null, $__input__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "radios" => $__radios__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 479
            echo "\t";
            $context["options"] = $this;
            // line 480
            echo "\t<div class=\"mp-option-input-with-input\">
\t\t";
            // line 481
            echo $context["options"]->getradioInput(($context["radios"] ?? null));
            echo "
\t\t";
            // line 482
            echo Twig_SupTwg_escape_filter($this->env, ($context["input"] ?? null), "html", null, true);
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 486
    public function getbutton($__label__ = null, $__id__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 487
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 487);
            // line 488
            echo "    <div class=\"tooltip\">
        <button
                class=\"mp-option-button sc-button primary";
            // line 490
            if (($context["class"] ?? null)) {
                echo " ";
                echo Twig_SupTwg_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            }
            echo "\"
                ";
            // line 491
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" title=\"\"";
            }
            // line 492
            echo "        >";
            echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</button>
        <div class=\"tooltip_content\">
            <div>";
            // line 494
            if (($context["id"] ?? null)) {
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget(($context["id"] ?? null))));
            }
            echo "</div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 499
    public function getsubmit($__name__ = null, $__label__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 500
            echo "\t<input type=\"submit\" name=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\"
\t\t\tclass=\"mp-option-button sc-button primary\"
\t\t\t";
            // line 502
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 503
            echo "\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 506
    public function getenablePluginRow($__label__ = null, $__inputName__ = null, $__id__ = null, $__attributes__ = null, $__buttonName__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "inputName" => $__inputName__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttonName" => $__buttonName__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 507
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 507);
            // line 508
            echo "\t";
            $context["options"] = $this;
            // line 509
            echo "
\t<div class=\"row\" ";
            // line 510
            if (($context["id"] ?? null)) {
                echo "id=\"";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t<div class=\"col-xs-4 mpp-mrgn-top-8 mbsThinCol\">
\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t<input type=\"checkbox\" name=\"";
            // line 513
            echo Twig_SupTwg_escape_filter($this->env, ($context["inputName"] ?? null), "html", null, true);
            echo "[enabled]\" value=\"1\" ";
            echo Twig_SupTwg_escape_filter($this->env, (($this->getAttribute(($context["attributes"] ?? null), "input", array(), "any", true, true)) ? ($this->getAttribute(($context["attributes"] ?? null), "input", array())) : (null)), "html", null, true);
            echo ">
\t\t\t\t";
            // line 514
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(($context["label"] ?? null))), "html", null, true);
            echo "
\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t</label>
\t\t\t";
            // line 517
            if ( !($context["withoutHelper"] ?? null)) {
                // line 518
                echo "\t\t\t\t<div class=\"mpp-tooltip tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
                // line 521
                if (($context["id"] ?? null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget(($context["id"] ?? null))));
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 525
            echo "\t\t</div>
\t\t<div class=\"col-xs-8\">
\t\t\t<button class=\"mpp-button sc-button primary\" ";
            // line 527
            if (($context["id"] ?? null)) {
                echo "id=\"button-";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" data-toogle=\"toogle-";
                echo Twig_SupTwg_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t<span>";
            // line 529
            echo Twig_SupTwg_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array(($context["buttonName"] ?? null))), "html", null, true);
            echo "</span>
\t\t\t</button>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    // line 535
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 536
            echo "\t<input type=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo Twig_SupTwg_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
\t\t";
            // line 537
            $context['_parent'] = $context;
            $context['_seq'] = Twig_SupTwg_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 538
                echo "\t\t\t";
                if (Twig_SupTwg_test_iterable($context["val"])) {
                    // line 539
                    echo "\t\t\t\t";
                    echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = Twig_SupTwg_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo Twig_SupTwg_escape_filter($this->env, $context["attr"], "html", null, true);
                        echo ":";
                        echo Twig_SupTwg_escape_filter($this->env, $context["param"], "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
\t\t\t";
                } else {
                    // line 541
                    echo "\t\t\t\t";
                    echo Twig_SupTwg_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo Twig_SupTwg_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 543
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 544
            echo "\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_SupTwg_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@base/macros/options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2603 => 544,  2597 => 543,  2589 => 541,  2571 => 539,  2568 => 538,  2564 => 537,  2555 => 536,  2540 => 535,  2520 => 529,  2509 => 527,  2505 => 525,  2496 => 521,  2491 => 518,  2489 => 517,  2483 => 514,  2477 => 513,  2467 => 510,  2464 => 509,  2461 => 508,  2458 => 507,  2441 => 506,  2425 => 503,  2419 => 502,  2411 => 500,  2397 => 499,  2376 => 494,  2370 => 492,  2364 => 491,  2357 => 490,  2353 => 488,  2350 => 487,  2336 => 486,  2318 => 482,  2314 => 481,  2311 => 480,  2308 => 479,  2295 => 478,  2277 => 474,  2273 => 473,  2270 => 472,  2267 => 471,  2253 => 470,  2235 => 466,  2231 => 465,  2228 => 464,  2225 => 463,  2211 => 462,  2195 => 459,  2189 => 456,  2184 => 455,  2182 => 454,  2179 => 453,  2170 => 451,  2166 => 449,  2164 => 448,  2161 => 447,  2157 => 446,  2155 => 445,  2150 => 444,  2146 => 443,  2136 => 442,  2133 => 441,  2117 => 440,  2100 => 436,  2098 => 435,  2095 => 434,  2086 => 432,  2082 => 430,  2079 => 429,  2075 => 427,  2072 => 426,  2068 => 424,  2065 => 423,  2063 => 422,  2058 => 421,  2054 => 420,  2051 => 419,  2048 => 418,  2042 => 417,  2034 => 415,  2016 => 413,  2013 => 412,  2008 => 411,  2006 => 410,  2003 => 409,  1999 => 407,  1996 => 406,  1981 => 405,  1964 => 401,  1961 => 400,  1955 => 399,  1947 => 397,  1929 => 395,  1926 => 394,  1921 => 393,  1919 => 392,  1915 => 390,  1903 => 389,  1886 => 385,  1877 => 383,  1873 => 381,  1871 => 380,  1868 => 379,  1864 => 378,  1862 => 377,  1857 => 376,  1853 => 375,  1849 => 374,  1846 => 373,  1833 => 372,  1813 => 368,  1810 => 367,  1797 => 366,  1773 => 362,  1770 => 361,  1755 => 360,  1735 => 356,  1732 => 355,  1719 => 354,  1703 => 351,  1700 => 349,  1686 => 348,  1664 => 345,  1650 => 344,  1628 => 340,  1625 => 339,  1611 => 338,  1595 => 335,  1585 => 331,  1582 => 330,  1578 => 328,  1576 => 327,  1572 => 326,  1568 => 325,  1563 => 322,  1559 => 321,  1556 => 320,  1544 => 319,  1528 => 316,  1518 => 312,  1512 => 310,  1508 => 308,  1506 => 307,  1502 => 306,  1498 => 305,  1493 => 302,  1489 => 301,  1486 => 300,  1474 => 299,  1456 => 296,  1453 => 295,  1435 => 294,  1417 => 291,  1414 => 290,  1397 => 289,  1379 => 286,  1376 => 285,  1358 => 284,  1340 => 281,  1337 => 280,  1321 => 279,  1303 => 276,  1300 => 275,  1281 => 274,  1263 => 271,  1260 => 270,  1242 => 269,  1224 => 266,  1221 => 265,  1203 => 264,  1185 => 261,  1182 => 260,  1162 => 259,  1144 => 256,  1141 => 255,  1123 => 254,  1105 => 251,  1102 => 250,  1084 => 249,  1066 => 245,  1058 => 243,  1045 => 242,  1025 => 236,  1013 => 233,  1010 => 232,  995 => 231,  975 => 225,  963 => 222,  960 => 221,  945 => 220,  927 => 217,  924 => 216,  909 => 215,  891 => 212,  888 => 211,  867 => 210,  849 => 207,  846 => 206,  829 => 205,  811 => 202,  808 => 201,  790 => 200,  772 => 197,  769 => 196,  752 => 195,  731 => 190,  728 => 189,  725 => 188,  712 => 187,  692 => 181,  682 => 176,  675 => 172,  663 => 169,  660 => 168,  657 => 167,  642 => 166,  620 => 158,  614 => 155,  608 => 151,  602 => 148,  598 => 147,  595 => 146,  588 => 142,  582 => 141,  578 => 139,  575 => 138,  572 => 137,  563 => 133,  558 => 130,  555 => 129,  553 => 128,  542 => 126,  539 => 125,  536 => 124,  518 => 123,  498 => 117,  494 => 116,  490 => 114,  481 => 110,  476 => 107,  474 => 106,  470 => 105,  458 => 102,  455 => 101,  452 => 100,  435 => 99,  417 => 94,  414 => 93,  408 => 90,  404 => 88,  401 => 87,  395 => 84,  391 => 82,  388 => 81,  382 => 78,  378 => 76,  375 => 75,  373 => 74,  369 => 73,  366 => 72,  360 => 69,  356 => 68,  353 => 67,  346 => 63,  340 => 62,  336 => 60,  333 => 59,  330 => 58,  327 => 57,  320 => 53,  315 => 50,  312 => 49,  309 => 48,  306 => 47,  304 => 46,  293 => 44,  290 => 43,  287 => 42,  269 => 41,  249 => 35,  245 => 33,  239 => 30,  235 => 29,  232 => 28,  225 => 24,  219 => 23,  215 => 21,  213 => 20,  210 => 19,  207 => 18,  204 => 17,  197 => 13,  192 => 10,  189 => 9,  186 => 8,  183 => 7,  181 => 6,  170 => 4,  167 => 3,  164 => 2,  147 => 1,  142 => 534,  139 => 505,  136 => 498,  133 => 485,  130 => 477,  127 => 469,  124 => 461,  121 => 439,  118 => 404,  115 => 388,  112 => 371,  109 => 365,  106 => 359,  103 => 353,  100 => 347,  97 => 343,  94 => 337,  91 => 318,  88 => 298,  85 => 293,  82 => 288,  79 => 283,  76 => 278,  73 => 273,  70 => 268,  67 => 263,  64 => 258,  61 => 253,  58 => 248,  55 => 241,  52 => 230,  49 => 219,  46 => 214,  43 => 209,  40 => 204,  37 => 199,  34 => 194,  31 => 186,  28 => 165,  25 => 122,  22 => 98,  19 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_SupTwg_Source("", "@base/macros/options.twig", "/www/www.wonways.com/wp-content/plugins/membership-by-supsystic/src/Membership/Base/views/macros/options.twig");
    }
}
