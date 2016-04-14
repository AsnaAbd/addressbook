<?php

/* ::base.html.twig */
class __TwigTemplate_34836d49eb1076466dd0752f5fc2f39e7597f19cd90e3c55892dae3febd62f18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'page_title' => array($this, 'block_page_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'javascripts_header' => array($this, 'block_javascripts_header'),
            'stylesheet_head' => array($this, 'block_stylesheet_head'),
            'body_class' => array($this, 'block_body_class'),
            'body_id' => array($this, 'block_body_id'),
            'body_style' => array($this, 'block_body_style'),
            'body' => array($this, 'block_body'),
            'javascripts_footer' => array($this, 'block_javascripts_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d488844c04888359df4028aa06f255c9e86bef2dd57247c1056062c239239a3 = $this->env->getExtension("native_profiler");
        $__internal_1d488844c04888359df4028aa06f255c9e86bef2dd57247c1056062c239239a3->enter($__internal_1d488844c04888359df4028aa06f255c9e86bef2dd57247c1056062c239239a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        $this->displayBlock('meta_keywords', $context, $blocks);
        echo "\">
    ";
        // line 11
        $this->displayBlock('javascripts_header', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('stylesheet_head', $context, $blocks);
        // line 23
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\" rel=\"icon\">

</head>
<body class=\"";
        // line 26
        $this->displayBlock('body_class', $context, $blocks);
        echo "\" id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" style=\"";
        $this->displayBlock('body_style', $context, $blocks);
        echo "\">
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('javascripts_footer', $context, $blocks);
        // line 30
        echo "</body>
</html>
";
        
        $__internal_1d488844c04888359df4028aa06f255c9e86bef2dd57247c1056062c239239a3->leave($__internal_1d488844c04888359df4028aa06f255c9e86bef2dd57247c1056062c239239a3_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e56bf27be7d05e750fa014eb8d4b6124135180c5865ba087dc6d3cbff92d697 = $this->env->getExtension("native_profiler");
        $__internal_7e56bf27be7d05e750fa014eb8d4b6124135180c5865ba087dc6d3cbff92d697->enter($__internal_7e56bf27be7d05e750fa014eb8d4b6124135180c5865ba087dc6d3cbff92d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7e56bf27be7d05e750fa014eb8d4b6124135180c5865ba087dc6d3cbff92d697->leave($__internal_7e56bf27be7d05e750fa014eb8d4b6124135180c5865ba087dc6d3cbff92d697_prof);

    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_215a73e6caf5647f5269ee48deaf8a385ed39adaa52ddff3303118801459e475 = $this->env->getExtension("native_profiler");
        $__internal_215a73e6caf5647f5269ee48deaf8a385ed39adaa52ddff3303118801459e475->enter($__internal_215a73e6caf5647f5269ee48deaf8a385ed39adaa52ddff3303118801459e475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        
        $__internal_215a73e6caf5647f5269ee48deaf8a385ed39adaa52ddff3303118801459e475->leave($__internal_215a73e6caf5647f5269ee48deaf8a385ed39adaa52ddff3303118801459e475_prof);

    }

    // line 9
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_c0ff304d8e84590c4d8443b20104a0a783951ebc9a9422a944e0b1ac2da63f5c = $this->env->getExtension("native_profiler");
        $__internal_c0ff304d8e84590c4d8443b20104a0a783951ebc9a9422a944e0b1ac2da63f5c->enter($__internal_c0ff304d8e84590c4d8443b20104a0a783951ebc9a9422a944e0b1ac2da63f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        
        $__internal_c0ff304d8e84590c4d8443b20104a0a783951ebc9a9422a944e0b1ac2da63f5c->leave($__internal_c0ff304d8e84590c4d8443b20104a0a783951ebc9a9422a944e0b1ac2da63f5c_prof);

    }

    // line 10
    public function block_meta_keywords($context, array $blocks = array())
    {
        $__internal_bf18daa1362a93f0218031090360ca6caedc195185e22ce929d52439cca90c15 = $this->env->getExtension("native_profiler");
        $__internal_bf18daa1362a93f0218031090360ca6caedc195185e22ce929d52439cca90c15->enter($__internal_bf18daa1362a93f0218031090360ca6caedc195185e22ce929d52439cca90c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_keywords"));

        
        $__internal_bf18daa1362a93f0218031090360ca6caedc195185e22ce929d52439cca90c15->leave($__internal_bf18daa1362a93f0218031090360ca6caedc195185e22ce929d52439cca90c15_prof);

    }

    // line 11
    public function block_javascripts_header($context, array $blocks = array())
    {
        $__internal_46cfb1200d832fe8eee3ddc71c24b6bffec3e1df40f3b63997ce7ebc563b7d92 = $this->env->getExtension("native_profiler");
        $__internal_46cfb1200d832fe8eee3ddc71c24b6bffec3e1df40f3b63997ce7ebc563b7d92->enter($__internal_46cfb1200d832fe8eee3ddc71c24b6bffec3e1df40f3b63997ce7ebc563b7d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_header"));

        // line 12
        echo "        ";
        // asset "f0ed0ec"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f0ed0ec") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/f0ed0ec-815697c.js");
        // line 18
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
        ";
        unset($context["asset_url"]);
        // line 20
        echo "
    ";
        
        $__internal_46cfb1200d832fe8eee3ddc71c24b6bffec3e1df40f3b63997ce7ebc563b7d92->leave($__internal_46cfb1200d832fe8eee3ddc71c24b6bffec3e1df40f3b63997ce7ebc563b7d92_prof);

    }

    // line 22
    public function block_stylesheet_head($context, array $blocks = array())
    {
        $__internal_d08228e6f3dd921aec2f8bd14d2e4ea95a8d085a080c018f0c511f5f76097859 = $this->env->getExtension("native_profiler");
        $__internal_d08228e6f3dd921aec2f8bd14d2e4ea95a8d085a080c018f0c511f5f76097859->enter($__internal_d08228e6f3dd921aec2f8bd14d2e4ea95a8d085a080c018f0c511f5f76097859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet_head"));

        echo "";
        
        $__internal_d08228e6f3dd921aec2f8bd14d2e4ea95a8d085a080c018f0c511f5f76097859->leave($__internal_d08228e6f3dd921aec2f8bd14d2e4ea95a8d085a080c018f0c511f5f76097859_prof);

    }

    // line 26
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_068b2fda6fdca8ef448bba5295154ad881ba5e0f0a37177a8815a6731842c61a = $this->env->getExtension("native_profiler");
        $__internal_068b2fda6fdca8ef448bba5295154ad881ba5e0f0a37177a8815a6731842c61a->enter($__internal_068b2fda6fdca8ef448bba5295154ad881ba5e0f0a37177a8815a6731842c61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "";
        
        $__internal_068b2fda6fdca8ef448bba5295154ad881ba5e0f0a37177a8815a6731842c61a->leave($__internal_068b2fda6fdca8ef448bba5295154ad881ba5e0f0a37177a8815a6731842c61a_prof);

    }

    public function block_body_id($context, array $blocks = array())
    {
        $__internal_622054ac13ac33ae6bee819a8b4e795a319bc4e6293a4dca538a2aece86439eb = $this->env->getExtension("native_profiler");
        $__internal_622054ac13ac33ae6bee819a8b4e795a319bc4e6293a4dca538a2aece86439eb->enter($__internal_622054ac13ac33ae6bee819a8b4e795a319bc4e6293a4dca538a2aece86439eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "";
        
        $__internal_622054ac13ac33ae6bee819a8b4e795a319bc4e6293a4dca538a2aece86439eb->leave($__internal_622054ac13ac33ae6bee819a8b4e795a319bc4e6293a4dca538a2aece86439eb_prof);

    }

    public function block_body_style($context, array $blocks = array())
    {
        $__internal_80e72985371df02a310ff7508d7dec74e0378b0e30026e0e9531d1321fb86242 = $this->env->getExtension("native_profiler");
        $__internal_80e72985371df02a310ff7508d7dec74e0378b0e30026e0e9531d1321fb86242->enter($__internal_80e72985371df02a310ff7508d7dec74e0378b0e30026e0e9531d1321fb86242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_style"));

        echo "";
        
        $__internal_80e72985371df02a310ff7508d7dec74e0378b0e30026e0e9531d1321fb86242->leave($__internal_80e72985371df02a310ff7508d7dec74e0378b0e30026e0e9531d1321fb86242_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_d785d1931a7682baa9bf83020fa12cd9d2a0a8b17274cc8ad62c40bf7d8ef2c1 = $this->env->getExtension("native_profiler");
        $__internal_d785d1931a7682baa9bf83020fa12cd9d2a0a8b17274cc8ad62c40bf7d8ef2c1->enter($__internal_d785d1931a7682baa9bf83020fa12cd9d2a0a8b17274cc8ad62c40bf7d8ef2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d785d1931a7682baa9bf83020fa12cd9d2a0a8b17274cc8ad62c40bf7d8ef2c1->leave($__internal_d785d1931a7682baa9bf83020fa12cd9d2a0a8b17274cc8ad62c40bf7d8ef2c1_prof);

    }

    // line 29
    public function block_javascripts_footer($context, array $blocks = array())
    {
        $__internal_7cc3e087e33026ebad83de740a69c3814ed0c3bbc097bc38ebb7686a6a1b4bec = $this->env->getExtension("native_profiler");
        $__internal_7cc3e087e33026ebad83de740a69c3814ed0c3bbc097bc38ebb7686a6a1b4bec->enter($__internal_7cc3e087e33026ebad83de740a69c3814ed0c3bbc097bc38ebb7686a6a1b4bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_footer"));

        echo "";
        
        $__internal_7cc3e087e33026ebad83de740a69c3814ed0c3bbc097bc38ebb7686a6a1b4bec->leave($__internal_7cc3e087e33026ebad83de740a69c3814ed0c3bbc097bc38ebb7686a6a1b4bec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 29,  207 => 27,  173 => 26,  161 => 22,  153 => 20,  147 => 18,  143 => 12,  137 => 11,  126 => 10,  115 => 9,  104 => 6,  93 => 4,  84 => 30,  82 => 29,  79 => 28,  77 => 27,  69 => 26,  62 => 23,  59 => 22,  57 => 11,  53 => 10,  49 => 9,  43 => 6,  40 => 5,  38 => 4,  33 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*     {% block head %}{% endblock %}*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block page_title %}{% endblock %}</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{% block meta_description %}{% endblock %}">*/
/*     <meta name="keywords" content="{% block meta_keywords%}{% endblock %}">*/
/*     {% block javascripts_header %}*/
/*         {% javascripts*/
/*         'assets/vendor/modernizr/modernizr.js'*/
/*         'assets/vendor/yepnope/yepnope.1.5.4-min.js'*/
/*         filter='?uglifyjs2'*/
/*         combine=true*/
/*         %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/* */
/*     {% endblock %}*/
/*     {% block stylesheet_head '' %}*/
/*     <link href="{{ asset('favicon.ico') }}" type="image/x-icon" rel="icon">*/
/* */
/* </head>*/
/* <body class="{% block body_class '' %}" id="{% block body_id '' %}" style="{% block body_style '' %}">*/
/* {% block body %}{% endblock %}*/
/* */
/* {% block javascripts_footer '' %}*/
/* </body>*/
/* </html>*/
/* */
