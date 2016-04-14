<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3a978c9b2d04950cba08ab8952ca8b39e2a729660f9b3f30d899f6c975fa2306 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5e27fcf3c12afd69d1706a7e1f76ac709f723024ade3ea0e98d66f6768732aa = $this->env->getExtension("native_profiler");
        $__internal_f5e27fcf3c12afd69d1706a7e1f76ac709f723024ade3ea0e98d66f6768732aa->enter($__internal_f5e27fcf3c12afd69d1706a7e1f76ac709f723024ade3ea0e98d66f6768732aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e27fcf3c12afd69d1706a7e1f76ac709f723024ade3ea0e98d66f6768732aa->leave($__internal_f5e27fcf3c12afd69d1706a7e1f76ac709f723024ade3ea0e98d66f6768732aa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efaa90ac28a4153c491e86819ac14184884e436909b3f4f53989db43aaf7322c = $this->env->getExtension("native_profiler");
        $__internal_efaa90ac28a4153c491e86819ac14184884e436909b3f4f53989db43aaf7322c->enter($__internal_efaa90ac28a4153c491e86819ac14184884e436909b3f4f53989db43aaf7322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_efaa90ac28a4153c491e86819ac14184884e436909b3f4f53989db43aaf7322c->leave($__internal_efaa90ac28a4153c491e86819ac14184884e436909b3f4f53989db43aaf7322c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4efd8e69e3e66a7405ed4fcebfd6d96e72cb18181812512bb7a5c38423e0fd64 = $this->env->getExtension("native_profiler");
        $__internal_4efd8e69e3e66a7405ed4fcebfd6d96e72cb18181812512bb7a5c38423e0fd64->enter($__internal_4efd8e69e3e66a7405ed4fcebfd6d96e72cb18181812512bb7a5c38423e0fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4efd8e69e3e66a7405ed4fcebfd6d96e72cb18181812512bb7a5c38423e0fd64->leave($__internal_4efd8e69e3e66a7405ed4fcebfd6d96e72cb18181812512bb7a5c38423e0fd64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a217f05e690d544a3396deb72fa69bc45f8d4b20417b2c400df8fd2e9e8843ad = $this->env->getExtension("native_profiler");
        $__internal_a217f05e690d544a3396deb72fa69bc45f8d4b20417b2c400df8fd2e9e8843ad->enter($__internal_a217f05e690d544a3396deb72fa69bc45f8d4b20417b2c400df8fd2e9e8843ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a217f05e690d544a3396deb72fa69bc45f8d4b20417b2c400df8fd2e9e8843ad->leave($__internal_a217f05e690d544a3396deb72fa69bc45f8d4b20417b2c400df8fd2e9e8843ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
