<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_527647d472014500bed4417091c9f255069d3e417b89a218bae4d8d4ce9f2572 extends Twig_Template
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
        $__internal_d1a7d7470b8699dfc0c54b4fe271bdc1209c7334babb7256ec47b19da31df7c1 = $this->env->getExtension("native_profiler");
        $__internal_d1a7d7470b8699dfc0c54b4fe271bdc1209c7334babb7256ec47b19da31df7c1->enter($__internal_d1a7d7470b8699dfc0c54b4fe271bdc1209c7334babb7256ec47b19da31df7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d1a7d7470b8699dfc0c54b4fe271bdc1209c7334babb7256ec47b19da31df7c1->leave($__internal_d1a7d7470b8699dfc0c54b4fe271bdc1209c7334babb7256ec47b19da31df7c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
