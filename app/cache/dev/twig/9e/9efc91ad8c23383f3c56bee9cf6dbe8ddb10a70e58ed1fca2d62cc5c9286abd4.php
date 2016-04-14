<?php

/* CoreBundle:Form:form.html.twig */
class __TwigTemplate_5be3e3ad424186c8a15afbdc18716e8e30ff0e874c5546f3f7800218ff179936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "CoreBundle:Form:form.html.twig", 1);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'form_label' => array($this, 'block_form_label'),
            'form_row' => array($this, 'block_form_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            '_import_email_form_type_emails_entry_row' => array($this, 'block__import_email_form_type_emails_entry_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58338f11a9da06cf4bff47639b15d031f4f6d6a3afcbd119cd49d0996f7465d2 = $this->env->getExtension("native_profiler");
        $__internal_58338f11a9da06cf4bff47639b15d031f4f6d6a3afcbd119cd49d0996f7465d2->enter($__internal_58338f11a9da06cf4bff47639b15d031f4f6d6a3afcbd119cd49d0996f7465d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Form:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58338f11a9da06cf4bff47639b15d031f4f6d6a3afcbd119cd49d0996f7465d2->leave($__internal_58338f11a9da06cf4bff47639b15d031f4f6d6a3afcbd119cd49d0996f7465d2_prof);

    }

    // line 3
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f4c37d974632d7d4cc6bb3831a9dc9e7db5bdaa3b69a07d8c232c1fb7110bd30 = $this->env->getExtension("native_profiler");
        $__internal_f4c37d974632d7d4cc6bb3831a9dc9e7db5bdaa3b69a07d8c232c1fb7110bd30->enter($__internal_f4c37d974632d7d4cc6bb3831a9dc9e7db5bdaa3b69a07d8c232c1fb7110bd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 6
            echo "            <ul class=\"list list-unstyled js-errors errors\">
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 8
                echo "                    <li class=\"item\">
                        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f4c37d974632d7d4cc6bb3831a9dc9e7db5bdaa3b69a07d8c232c1fb7110bd30->leave($__internal_f4c37d974632d7d4cc6bb3831a9dc9e7db5bdaa3b69a07d8c232c1fb7110bd30_prof);

    }

    // line 17
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e21f47e1933cec07d11ee520eea03973321be08108cfc9f3205d3786e9b85181 = $this->env->getExtension("native_profiler");
        $__internal_e21f47e1933cec07d11ee520eea03973321be08108cfc9f3205d3786e9b85181->enter($__internal_e21f47e1933cec07d11ee520eea03973321be08108cfc9f3205d3786e9b85181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 20
            echo "            ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 21
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 22
                echo "            ";
            }
            // line 23
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 24
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 25
                echo "            ";
            }
            // line 26
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 27
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 28
                echo "            ";
            }
            // line 29
            echo "           <div class=\"ft_blue\"> <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label></div>
        ";
        }
        // line 31
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e21f47e1933cec07d11ee520eea03973321be08108cfc9f3205d3786e9b85181->leave($__internal_e21f47e1933cec07d11ee520eea03973321be08108cfc9f3205d3786e9b85181_prof);

    }

    // line 34
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c93c941e2ce928b13640aba61045ae2e081a86473bbdcb56ac0017746bc20562 = $this->env->getExtension("native_profiler");
        $__internal_c93c941e2ce928b13640aba61045ae2e081a86473bbdcb56ac0017746bc20562->enter($__internal_c93c941e2ce928b13640aba61045ae2e081a86473bbdcb56ac0017746bc20562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 35
        echo "    ";
        ob_start();
        // line 36
        echo "        <div class=\"row\">
            <div class=\"form-group";
        // line 37
        if ( !twig_test_empty((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")))) {
            echo " has-errors";
        }
        echo "\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c93c941e2ce928b13640aba61045ae2e081a86473bbdcb56ac0017746bc20562->leave($__internal_c93c941e2ce928b13640aba61045ae2e081a86473bbdcb56ac0017746bc20562_prof);

    }

    // line 45
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_5a32e432df1ef37d24bcc5ce7715ebda63a8730b605afc14d3d829ccc47be63b = $this->env->getExtension("native_profiler");
        $__internal_5a32e432df1ef37d24bcc5ce7715ebda63a8730b605afc14d3d829ccc47be63b->enter($__internal_5a32e432df1ef37d24bcc5ce7715ebda63a8730b605afc14d3d829ccc47be63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 46
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-widget" => "collection"));
        // line 47
        echo "
    ";
        // line 48
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 49
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-collection-allow-add" => (isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))));
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 53
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-collection-allow-delete" => (isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))));
            // line 54
            echo "    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ( !(null === (isset($context["add_button_text"]) ? $context["add_button_text"] : $this->getContext($context, "add_button_text")))) {
            // line 57
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-collection-add-button-text" => $this->env->getExtension('translator')->trans((isset($context["add_button_text"]) ? $context["add_button_text"] : $this->getContext($context, "add_button_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if ( !(null === (isset($context["remove_button_title"]) ? $context["remove_button_title"] : $this->getContext($context, "remove_button_title")))) {
            // line 61
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-collection-remove-button-title" => $this->env->getExtension('translator')->trans((isset($context["remove_button_title"]) ? $context["remove_button_title"] : $this->getContext($context, "remove_button_title")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
            // line 62
            echo "    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (array_key_exists("prototype", $context)) {
            // line 65
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        $this->displayParentBlock("collection_widget", $context, $blocks);
        echo "
";
        
        $__internal_5a32e432df1ef37d24bcc5ce7715ebda63a8730b605afc14d3d829ccc47be63b->leave($__internal_5a32e432df1ef37d24bcc5ce7715ebda63a8730b605afc14d3d829ccc47be63b_prof);

    }

    // line 70
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_54dbcb4c94285c3abf818449c3bf78c1ba2b11696d00efac7f0c658d1154dd5a = $this->env->getExtension("native_profiler");
        $__internal_54dbcb4c94285c3abf818449c3bf78c1ba2b11696d00efac7f0c658d1154dd5a->enter($__internal_54dbcb4c94285c3abf818449c3bf78c1ba2b11696d00efac7f0c658d1154dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 71
        echo "    ";
        ob_start();
        // line 72
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 73
            echo "            <div  ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 75
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </div>
        ";
        } else {
            // line 79
            echo "            <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
                ";
            // line 80
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 81
                echo "                    <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))), "html", null, true);
                echo "</option>
                ";
            }
            // line 83
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 84
                echo "                    ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 85
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                    ";
                // line 86
                if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                    // line 87
                    echo "                        <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                    ";
                }
                // line 89
                echo "                ";
            }
            // line 90
            echo "                ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 91
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
            </select>
        ";
        }
        // line 94
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_54dbcb4c94285c3abf818449c3bf78c1ba2b11696d00efac7f0c658d1154dd5a->leave($__internal_54dbcb4c94285c3abf818449c3bf78c1ba2b11696d00efac7f0c658d1154dd5a_prof);

    }

    // line 97
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a3b7372d9511d78507553ff8287e4008a9433ae6858c12d46d63fb7a23f755cc = $this->env->getExtension("native_profiler");
        $__internal_a3b7372d9511d78507553ff8287e4008a9433ae6858c12d46d63fb7a23f755cc->enter($__internal_a3b7372d9511d78507553ff8287e4008a9433ae6858c12d46d63fb7a23f755cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 98
        echo "    ";
        ob_start();
        // line 99
        echo "          ";
        // line 100
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        echo "<br>
            ";
        // line 102
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a3b7372d9511d78507553ff8287e4008a9433ae6858c12d46d63fb7a23f755cc->leave($__internal_a3b7372d9511d78507553ff8287e4008a9433ae6858c12d46d63fb7a23f755cc_prof);

    }

    // line 107
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7f97b82e7f32737ffc7eff70e77bde31acbe9db6ce66810d4ad7d139782b3a99 = $this->env->getExtension("native_profiler");
        $__internal_7f97b82e7f32737ffc7eff70e77bde31acbe9db6ce66810d4ad7d139782b3a99->enter($__internal_7f97b82e7f32737ffc7eff70e77bde31acbe9db6ce66810d4ad7d139782b3a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 108
        echo "    ";
        ob_start();
        // line 109
        echo "        <label  for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"><input style=\"margin-right: 5px;\" type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "</label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7f97b82e7f32737ffc7eff70e77bde31acbe9db6ce66810d4ad7d139782b3a99->leave($__internal_7f97b82e7f32737ffc7eff70e77bde31acbe9db6ce66810d4ad7d139782b3a99_prof);

    }

    // line 113
    public function block__import_email_form_type_emails_entry_row($context, array $blocks = array())
    {
        $__internal_a14a3357e2d270e709ab7a45c1804c8b3494e9b3277e2d7a79f1ed6d1acfb7f1 = $this->env->getExtension("native_profiler");
        $__internal_a14a3357e2d270e709ab7a45c1804c8b3494e9b3277e2d7a79f1ed6d1acfb7f1->enter($__internal_a14a3357e2d270e709ab7a45c1804c8b3494e9b3277e2d7a79f1ed6d1acfb7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_import_email_form_type_emails_entry_row"));

        // line 114
        echo "    <div class=\"row\">
        <div class=\"col-xs-offset-1 col-xs-5\">
            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
        </div>
        <div class=\"col-xs-5\">
            ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        </div>

    </div>

    ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_a14a3357e2d270e709ab7a45c1804c8b3494e9b3277e2d7a79f1ed6d1acfb7f1->leave($__internal_a14a3357e2d270e709ab7a45c1804c8b3494e9b3277e2d7a79f1ed6d1acfb7f1_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Form:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  444 => 124,  436 => 119,  430 => 116,  426 => 114,  420 => 113,  397 => 109,  394 => 108,  388 => 107,  368 => 102,  361 => 100,  359 => 99,  356 => 98,  350 => 97,  342 => 94,  335 => 91,  332 => 90,  329 => 89,  323 => 87,  321 => 86,  316 => 85,  313 => 84,  310 => 83,  304 => 81,  302 => 80,  294 => 79,  290 => 77,  281 => 75,  277 => 74,  272 => 73,  269 => 72,  266 => 71,  260 => 70,  250 => 67,  247 => 66,  244 => 65,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  231 => 60,  228 => 59,  225 => 58,  222 => 57,  220 => 56,  217 => 55,  214 => 54,  211 => 53,  209 => 52,  206 => 51,  203 => 50,  200 => 49,  198 => 48,  195 => 47,  192 => 46,  186 => 45,  172 => 39,  168 => 38,  162 => 37,  159 => 36,  156 => 35,  150 => 34,  142 => 31,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  111 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  90 => 18,  84 => 17,  76 => 14,  72 => 12,  63 => 9,  60 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  41 => 3,  11 => 1,);
    }
}
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             <ul class="list list-unstyled js-errors errors">*/
/*                 {% for error in errors %}*/
/*                     <li class="item">*/
/*                         {{ error.message }}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block form_label %}*/
/*     {% spaceless %}*/
/*         {% if label is not same as(false) %}*/
/*             {% if not compound %}*/
/*                 {% set label_attr = label_attr|merge({'for': id}) %}*/
/*             {% endif %}*/
/*             {% if required %}*/
/*                 {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*             {% endif %}*/
/*             {% if label is empty %}*/
/*                 {% set label = name|humanize %}*/
/*             {% endif %}*/
/*            <div class="ft_blue"> <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label></div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="row">*/
/*             <div class="form-group{% if errors is not empty %} has-errors{% endif %}">*/
/*                 {{ form_label(form) }}*/
/*                 {{ form_widget(form) }}  {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block collection_widget %}*/
/*     {% set attr = attr|merge({'data-widget': 'collection'}) %}*/
/* */
/*     {% if allow_add %}*/
/*         {% set attr = attr|merge({'data-collection-allow-add': allow_add}) %}*/
/*     {% endif %}*/
/* */
/*     {% if allow_delete %}*/
/*         {% set attr = attr|merge({'data-collection-allow-delete': allow_delete}) %}*/
/*     {% endif %}*/
/* */
/*     {% if add_button_text is not null %}*/
/*         {% set attr = attr|merge({'data-collection-add-button-text': add_button_text|trans({}, translation_domain)}) %}*/
/*     {% endif %}*/
/* */
/*     {% if remove_button_title is not null %}*/
/*         {% set attr = attr|merge({'data-collection-remove-button-title': remove_button_title|trans({}, translation_domain)}) %}*/
/*     {% endif %}*/
/* */
/*     {% if prototype is defined %}*/
/*         {% set attr = attr|merge({'data-prototype-name': prototype.vars.name }) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block choice_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             <div  {{ block('widget_container_attributes') }}>*/
/*                 {% for child in form %}*/
/*                     {{ form_widget(child) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% else %}*/
/*             <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*                 {% if empty_value is not none %}*/
/*                     <option value="">{{ empty_value|trans }}</option>*/
/*                 {% endif %}*/
/*                 {% if preferred_choices|length > 0 %}*/
/*                     {% set options = preferred_choices %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                     {% if choices|length > 0 and separator is not none %}*/
/*                         <option disabled="disabled">{{ separator }}</option>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 {% set options = choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*             </select>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget %}*/
/* */
/* {% block radio_widget %}*/
/*     {% spaceless %}*/
/*           {% autoescape %}*/
/*         <label for="{{ id }}">{{ label|raw }}<br>*/
/*             {% endautoescape %}*/
/*         <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock radio_widget %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         <label  for="{{ id }}"><input style="margin-right: 5px;" type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />{{ label|trans }}</label>*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block _import_email_form_type_emails_entry_row %}*/
/*     <div class="row">*/
/*         <div class="col-xs-offset-1 col-xs-5">*/
/*             {{ form_row(form.nom) }}*/
/*         </div>*/
/*         <div class="col-xs-5">*/
/*             {{ form_row(form.email) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     {{ form_rest(form) }}*/
/* {% endblock %}*/
/* */
/* */
