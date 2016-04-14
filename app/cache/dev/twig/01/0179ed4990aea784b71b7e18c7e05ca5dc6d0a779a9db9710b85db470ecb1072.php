<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_ad668e95028b79dffaa9a5548dbc9e49785935250170a37a7bdef0c7ffe231e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7386fe021fae092f6121bec8c6ea3ec424fdc452dbff46fe8620fbf7fa34a565 = $this->env->getExtension("native_profiler");
        $__internal_7386fe021fae092f6121bec8c6ea3ec424fdc452dbff46fe8620fbf7fa34a565->enter($__internal_7386fe021fae092f6121bec8c6ea3ec424fdc452dbff46fe8620fbf7fa34a565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_7386fe021fae092f6121bec8c6ea3ec424fdc452dbff46fe8620fbf7fa34a565->leave($__internal_7386fe021fae092f6121bec8c6ea3ec424fdc452dbff46fe8620fbf7fa34a565_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_3652dbec8fa534e6d7d79e6b725da6232509ec491cda928d57d980e628b61d6c = $this->env->getExtension("native_profiler");
        $__internal_3652dbec8fa534e6d7d79e6b725da6232509ec491cda928d57d980e628b61d6c->enter($__internal_3652dbec8fa534e6d7d79e6b725da6232509ec491cda928d57d980e628b61d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 2
        echo "
";
        
        $__internal_3652dbec8fa534e6d7d79e6b725da6232509ec491cda928d57d980e628b61d6c->leave($__internal_3652dbec8fa534e6d7d79e6b725da6232509ec491cda928d57d980e628b61d6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block content %}*/
/* */
/* {% endblock %}*/
/* */
