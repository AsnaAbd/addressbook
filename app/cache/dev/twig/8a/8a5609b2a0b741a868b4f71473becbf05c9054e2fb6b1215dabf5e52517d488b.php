<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_cf5180bdac169d70cb9c62dd4bbda71f0ba72234b13717b84d55f0f585d598e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate(((($this->getAttribute($this->getAttribute(        // line 1
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "submitted", array()) == true)) ? ("FrontBundle::layout.html.twig") : ("FOSUserBundle::layout.html.twig")), "FOSUserBundle:Registration:register.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_106eda8b76f43e6f1f62b425b81bfc0e2c58b1e849e96c4c43e578041bd72e44 = $this->env->getExtension("native_profiler");
        $__internal_106eda8b76f43e6f1f62b425b81bfc0e2c58b1e849e96c4c43e578041bd72e44->enter($__internal_106eda8b76f43e6f1f62b425b81bfc0e2c58b1e849e96c4c43e578041bd72e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_106eda8b76f43e6f1f62b425b81bfc0e2c58b1e849e96c4c43e578041bd72e44->leave($__internal_106eda8b76f43e6f1f62b425b81bfc0e2c58b1e849e96c4c43e578041bd72e44_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_19b483bf7f4192a3b9d60e0964e30e377a5a491c91fc58d02a9a44b926c738fd = $this->env->getExtension("native_profiler");
        $__internal_19b483bf7f4192a3b9d60e0964e30e377a5a491c91fc58d02a9a44b926c738fd->enter($__internal_19b483bf7f4192a3b9d60e0964e30e377a5a491c91fc58d02a9a44b926c738fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "submitted", array()) == true)) {
            // line 5
            echo "<div id=\"connexion\">
    <div class=\"container-fluid content_cam\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-3 col-sm-push-2 text-center\" style=\"margin-top:100px\">
";
        }
        // line 10
        echo "                <div class=\"col-md-";
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "submitted", array()) == false)) {
            echo "6";
        } else {
            echo "12";
        }
        echo " register-box\">
                        <div class=\"gd_bleu\">
                        <h1>Vous êtes nouveau par ici ?</h1>
                        <span>Inscrivez-vous dès maintenant</span>
                    </div>
                    <br>
                    <div>
                        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\"
                              class=\"form-horizontal\">
                            <fieldset>
                                    <div class=\"col-sm-12\">
                                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
                                    </div>
                                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <button type=\"submit\" class=\"btn btn-default btn_connexion\">Inscription
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                ";
        // line 35
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "submitted", array()) == true)) {
            // line 36
            echo "            </div>
        </div>
    </div>
</div>
                ";
        }
        
        $__internal_19b483bf7f4192a3b9d60e0964e30e377a5a491c91fc58d02a9a44b926c738fd->leave($__internal_19b483bf7f4192a3b9d60e0964e30e377a5a491c91fc58d02a9a44b926c738fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 36,  95 => 35,  81 => 24,  76 => 22,  72 => 21,  65 => 17,  50 => 10,  43 => 5,  41 => 4,  35 => 3,  28 => 2,  19 => 1,  18 => 2,);
    }
}
/* {% extends form.vars.submitted == true*/
/* ? 'FrontBundle::layout.html.twig' : 'FOSUserBundle::layout.html.twig' %}*/
/* {% block content %}*/
/* {% if form.vars.submitted == true%}*/
/* <div id="connexion">*/
/*     <div class="container-fluid content_cam">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-push-4 col-md-push-3 col-sm-push-2 text-center" style="margin-top:100px">*/
/* {% endif %}*/
/*                 <div class="col-md-{% if form.vars.submitted == false%}6{% else %}12{% endif %} register-box">*/
/*                         <div class="gd_bleu">*/
/*                         <h1>Vous êtes nouveau par ici ?</h1>*/
/*                         <span>Inscrivez-vous dès maintenant</span>*/
/*                     </div>*/
/*                     <br>*/
/*                     <div>*/
/*                         <form action="{{ path("fos_user_registration_register") }}" method="POST"*/
/*                               class="form-horizontal">*/
/*                             <fieldset>*/
/*                                     <div class="col-sm-12">*/
/*                                         {{ form_row(form.email) }}*/
/*                                         {{ form_row(form.plainPassword) }}*/
/*                                     </div>*/
/*                                 {{ form_rest(form) }}*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-12">*/
/*                                         <button type="submit" class="btn btn-default btn_connexion">Inscription*/
/*                                         </button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </fieldset>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if form.vars.submitted == true%}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*                 {% endif %}*/
/* {% endblock %}*/
/* */
