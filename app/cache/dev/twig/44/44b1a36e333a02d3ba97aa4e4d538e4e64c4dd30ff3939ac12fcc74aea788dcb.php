<?php

/* FrontBundle:inscription:profil.html.twig */
class __TwigTemplate_3998c37ba7d1e1d0f3bb526dc7d3b2a020eb6d0268378f56429558bb2d85a674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FrontBundle:inscription:profil.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'meta_keywords' => array($this, 'block_meta_keywords'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94d962d616393342931628bdf6d82b1783565e12fad3a8a4fb8ec39473715c58 = $this->env->getExtension("native_profiler");
        $__internal_94d962d616393342931628bdf6d82b1783565e12fad3a8a4fb8ec39473715c58->enter($__internal_94d962d616393342931628bdf6d82b1783565e12fad3a8a4fb8ec39473715c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:inscription:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d962d616393342931628bdf6d82b1783565e12fad3a8a4fb8ec39473715c58->leave($__internal_94d962d616393342931628bdf6d82b1783565e12fad3a8a4fb8ec39473715c58_prof);

    }

    // line 2
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_077f8ff1da4ed46482b6fc8ea538cf60b944074d65a218c68274aee27869a812 = $this->env->getExtension("native_profiler");
        $__internal_077f8ff1da4ed46482b6fc8ea538cf60b944074d65a218c68274aee27869a812->enter($__internal_077f8ff1da4ed46482b6fc8ea538cf60b944074d65a218c68274aee27869a812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "AddressBook - Compléter profil";
        
        $__internal_077f8ff1da4ed46482b6fc8ea538cf60b944074d65a218c68274aee27869a812->leave($__internal_077f8ff1da4ed46482b6fc8ea538cf60b944074d65a218c68274aee27869a812_prof);

    }

    // line 3
    public function block_meta_description($context, array $blocks = array())
    {
        $__internal_ecb2e94096b4fa45351f1f60c5394f35a6c500c2ffa9c559d8e20843f0e8929d = $this->env->getExtension("native_profiler");
        $__internal_ecb2e94096b4fa45351f1f60c5394f35a6c500c2ffa9c559d8e20843f0e8929d->enter($__internal_ecb2e94096b4fa45351f1f60c5394f35a6c500c2ffa9c559d8e20843f0e8929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_description"));

        echo "Compléter profil après inscription.";
        
        $__internal_ecb2e94096b4fa45351f1f60c5394f35a6c500c2ffa9c559d8e20843f0e8929d->leave($__internal_ecb2e94096b4fa45351f1f60c5394f35a6c500c2ffa9c559d8e20843f0e8929d_prof);

    }

    // line 4
    public function block_meta_keywords($context, array $blocks = array())
    {
        $__internal_9ecc7705395495ff5faf8e3198090286ff2730da7c5b9f4cfa5b3ada4e56725b = $this->env->getExtension("native_profiler");
        $__internal_9ecc7705395495ff5faf8e3198090286ff2730da7c5b9f4cfa5b3ada4e56725b->enter($__internal_9ecc7705395495ff5faf8e3198090286ff2730da7c5b9f4cfa5b3ada4e56725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_keywords"));

        echo "carnet adresse, notebook, vcard, addresses online, contact";
        
        $__internal_9ecc7705395495ff5faf8e3198090286ff2730da7c5b9f4cfa5b3ada4e56725b->leave($__internal_9ecc7705395495ff5faf8e3198090286ff2730da7c5b9f4cfa5b3ada4e56725b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_3a2f80022e21da1be482a345ddcd6d2941520afe6797781b3d9b2bf540c54a71 = $this->env->getExtension("native_profiler");
        $__internal_3a2f80022e21da1be482a345ddcd6d2941520afe6797781b3d9b2bf540c54a71->enter($__internal_3a2f80022e21da1be482a345ddcd6d2941520afe6797781b3d9b2bf540c54a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div id=\"inscription\">
        <div class=\"container-fluid content_cam\">
                <div class=\"row\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-3 col-sm-push-2 text-center\" style=\"margin-top:100px\">
                        <div class=\"col-md-12 login-box\">
                            <div class=\"gd_bleu\" style=\"width:100%; text-align:center;margin-bottom:20px;margin-top:40px\">
                                <h1>Dernière étape !</h1>
                                <span>Complétez votre profil</span>
                            </div>
                            <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("front_inscription_profil");
        echo "\" method=\"POST\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
                                      class=\"form-horizontal\" novalidate=\"novalidate\">
                                    <fieldset>
                                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite", array()), 'row');
        echo "
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                                        <br>
                                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                        <div class=\"form-group\">
                                            <div class=\"col-md-12\">
                                                <button type=\"submit\" class=\"btn btn-default btn_inscription\">Valider mon
                                                    compte
                                                </button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
";
        
        $__internal_3a2f80022e21da1be482a345ddcd6d2941520afe6797781b3d9b2bf540c54a71->leave($__internal_3a2f80022e21da1be482a345ddcd6d2941520afe6797781b3d9b2bf540c54a71_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:inscription:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  114 => 23,  110 => 22,  106 => 21,  102 => 20,  98 => 19,  90 => 16,  79 => 7,  73 => 6,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'FrontBundle::layout.html.twig' %}*/
/* {% block page_title %}AddressBook - Compléter profil{% endblock %}*/
/* {% block meta_description %}Compléter profil après inscription.{% endblock %}*/
/* {% block meta_keywords %}carnet adresse, notebook, vcard, addresses online, contact{% endblock %}*/
/* {% trans_default_domain "front" %}*/
/* {% block content %}*/
/*     <div id="inscription">*/
/*         <div class="container-fluid content_cam">*/
/*                 <div class="row">*/
/*                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-3 col-sm-push-2 text-center" style="margin-top:100px">*/
/*                         <div class="col-md-12 login-box">*/
/*                             <div class="gd_bleu" style="width:100%; text-align:center;margin-bottom:20px;margin-top:40px">*/
/*                                 <h1>Dernière étape !</h1>*/
/*                                 <span>Complétez votre profil</span>*/
/*                             </div>*/
/*                             <form action="{{ path("front_inscription_profil") }}" method="POST" {{ form_enctype(form) }}*/
/*                                       class="form-horizontal" novalidate="novalidate">*/
/*                                     <fieldset>*/
/*                                         {{ form_errors(form) }}*/
/*                                         {{ form_row(form.civilite) }}*/
/*                                         {{ form_row(form.nom) }}*/
/*                                         {{ form_row(form.prenom) }}*/
/*                                         {{ form_row(form.telephone) }}*/
/*                                         <br>*/
/*                                         {{ form_rest(form) }}*/
/*                                         <div class="form-group">*/
/*                                             <div class="col-md-12">*/
/*                                                 <button type="submit" class="btn btn-default btn_inscription">Valider mon*/
/*                                                     compte*/
/*                                                 </button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </fieldset>*/
/*                                 </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
