<?php

/* FrontBundle::layout.html.twig */
class __TwigTemplate_46ad8656d97089d2fc92ae5d66f4faa0ff701ae3c5627481b42232238f434376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle::layout.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'stylesheet_head' => array($this, 'block_stylesheet_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9a5198ca442e5077589a9b331d64eab2f7a80ae4fd8e9eadeaee683a7ac9097 = $this->env->getExtension("native_profiler");
        $__internal_c9a5198ca442e5077589a9b331d64eab2f7a80ae4fd8e9eadeaee683a7ac9097->enter($__internal_c9a5198ca442e5077589a9b331d64eab2f7a80ae4fd8e9eadeaee683a7ac9097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9a5198ca442e5077589a9b331d64eab2f7a80ae4fd8e9eadeaee683a7ac9097->leave($__internal_c9a5198ca442e5077589a9b331d64eab2f7a80ae4fd8e9eadeaee683a7ac9097_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a1ab259918c2b31e524198761f8b0de20834ec5767b2308d4ecaa3b79dc15403 = $this->env->getExtension("native_profiler");
        $__internal_a1ab259918c2b31e524198761f8b0de20834ec5767b2308d4ecaa3b79dc15403->enter($__internal_a1ab259918c2b31e524198761f8b0de20834ec5767b2308d4ecaa3b79dc15403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_a1ab259918c2b31e524198761f8b0de20834ec5767b2308d4ecaa3b79dc15403->leave($__internal_a1ab259918c2b31e524198761f8b0de20834ec5767b2308d4ecaa3b79dc15403_prof);

    }

    // line 3
    public function block_stylesheet_head($context, array $blocks = array())
    {
        $__internal_f910e94377b91b24f7fa8f316f0e830d66a57e47c69e7a547222e308740ee94d = $this->env->getExtension("native_profiler");
        $__internal_f910e94377b91b24f7fa8f316f0e830d66a57e47c69e7a547222e308740ee94d->enter($__internal_f910e94377b91b24f7fa8f316f0e830d66a57e47c69e7a547222e308740ee94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet_head"));

        // line 4
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8fc72e4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fc72e4_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8fc72e4_main_1-f226a13.css");
            // line 9
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
            // asset "8fc72e4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fc72e4_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8fc72e4_font-awesome_2-f226a13.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
            // asset "8fc72e4_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fc72e4_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8fc72e4_jquery-ui_3-b04a9bd.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "8fc72e4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8fc72e4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/8fc72e4-e6b8b1f.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "    ";
        // asset "6d32c9b"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6d32c9b") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/6d32c9b-818cbc0.js");
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        unset($context["asset_url"]);
        // line 19
        echo "    <script src=\"";
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

";
        
        $__internal_f910e94377b91b24f7fa8f316f0e830d66a57e47c69e7a547222e308740ee94d->leave($__internal_f910e94377b91b24f7fa8f316f0e830d66a57e47c69e7a547222e308740ee94d_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_2972c168f1953464093e25e96c2b9e2dfa021c33c8060ca0809e30e51bed0fc5 = $this->env->getExtension("native_profiler");
        $__internal_2972c168f1953464093e25e96c2b9e2dfa021c33c8060ca0809e30e51bed0fc5->enter($__internal_2972c168f1953464093e25e96c2b9e2dfa021c33c8060ca0809e30e51bed0fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_2972c168f1953464093e25e96c2b9e2dfa021c33c8060ca0809e30e51bed0fc5->leave($__internal_2972c168f1953464093e25e96c2b9e2dfa021c33c8060ca0809e30e51bed0fc5_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_5f7a25a7b7de068e67c5cc72ab2ea41c757670e11fac61d357798d70b0a764ea = $this->env->getExtension("native_profiler");
        $__internal_5f7a25a7b7de068e67c5cc72ab2ea41c757670e11fac61d357798d70b0a764ea->enter($__internal_5f7a25a7b7de068e67c5cc72ab2ea41c757670e11fac61d357798d70b0a764ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_5f7a25a7b7de068e67c5cc72ab2ea41c757670e11fac61d357798d70b0a764ea->leave($__internal_5f7a25a7b7de068e67c5cc72ab2ea41c757670e11fac61d357798d70b0a764ea_prof);

    }

    // line 26
    public function block_javascripts_footer($context, array $blocks = array())
    {
        $__internal_0c9d8f111f9c6e1d25a7423385744cb6dc5d492aa1ae15dc1370fc701941cc99 = $this->env->getExtension("native_profiler");
        $__internal_0c9d8f111f9c6e1d25a7423385744cb6dc5d492aa1ae15dc1370fc701941cc99->enter($__internal_0c9d8f111f9c6e1d25a7423385744cb6dc5d492aa1ae15dc1370fc701941cc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_footer"));

        // line 27
        echo "    ";
        // asset "9b851a7"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9b851a7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9b851a7-63625fc.js");
        // line 33
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        unset($context["asset_url"]);
        
        $__internal_0c9d8f111f9c6e1d25a7423385744cb6dc5d492aa1ae15dc1370fc701941cc99->leave($__internal_0c9d8f111f9c6e1d25a7423385744cb6dc5d492aa1ae15dc1370fc701941cc99_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 33,  138 => 27,  132 => 26,  113 => 23,  107 => 22,  96 => 19,  90 => 17,  86 => 11,  60 => 9,  55 => 4,  49 => 3,  38 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block page_title %}{% endblock %}*/
/* {% block stylesheet_head %}*/
/*     {% stylesheets*/
/*     'assets/front/sass/main.scss'*/
/*     'assets/vendor/font-awesome/css/font-awesome.css'*/
/*     'assets/vendor/jquery-ui/themes/redmond/jquery-ui.css'*/
/*     filter='scss,?uglifycss,cssrewrite' %}*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset_url }}">*/
/*     {% endstylesheets %}*/
/*     {% javascripts*/
/*     'assets/vendor/jquery/dist/jquery.js'*/
/*     'assets/vendor/jquery-ui/jquery-ui.js'*/
/*     'bundles/fosjsrouting/js/router.js'*/
/*     'assets/vendor/moment/moment.js'*/
/*     filter='?uglifyjs2' combine=true %}*/
/*     <script src="{{ asset_url }}" type="text/javascript"></script>*/
/*     {% endjavascripts %}*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/*     {% block content '' %}*/
/* {% endblock %}*/
/* */
/* {% block javascripts_footer %}*/
/*     {% javascripts*/
/*     'assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.js'*/
/*     'assets/front/js/confirm_action.js'*/
/*     'assets/front/js/collection_handler.js'*/
/*     filter='?uglifyjs2'*/
/*     combine=true %}*/
/*     <script src="{{ asset_url }}" type="text/javascript"></script>*/
/*     {% endjavascripts %}*/
/* {% endblock %}*/
/* */
