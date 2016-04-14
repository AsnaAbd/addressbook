<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b37f03b8c493ef9f04cb5672db09cacf4cde86d5eb44f8cfc82c67a95600f98b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6fddf1ad68e7c63dee37a5af73f996ddcff6d1b20532ced47dcfe7c2cde8497 = $this->env->getExtension("native_profiler");
        $__internal_c6fddf1ad68e7c63dee37a5af73f996ddcff6d1b20532ced47dcfe7c2cde8497->enter($__internal_c6fddf1ad68e7c63dee37a5af73f996ddcff6d1b20532ced47dcfe7c2cde8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6fddf1ad68e7c63dee37a5af73f996ddcff6d1b20532ced47dcfe7c2cde8497->leave($__internal_c6fddf1ad68e7c63dee37a5af73f996ddcff6d1b20532ced47dcfe7c2cde8497_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_810ad57a38b8d2e6a9ac8d91cfe241ae554ae585b74a0d6df7eb02e77e8a57e6 = $this->env->getExtension("native_profiler");
        $__internal_810ad57a38b8d2e6a9ac8d91cfe241ae554ae585b74a0d6df7eb02e77e8a57e6->enter($__internal_810ad57a38b8d2e6a9ac8d91cfe241ae554ae585b74a0d6df7eb02e77e8a57e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div id=\"connexion\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\" style=\"text-align:center;margin-left:70px;margin-top:100px\">
                        <div class=\"col-md-6 login-box\">
                            <div class=\"gd_bleu\">
                                <h1>Vous êtes membre ?</h1>
                                <span>Connectez-vous dès maintenant</span>
                            </div>
                            <br>
                            <form class=\"form-horizontal\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"POST\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\"
                                               value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email\" required>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" required>
                                    </div>
                                </div>

                                <br>
                                ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                                    <div class=\"alert alert-danger\">
                                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "Login ou mot de passe incorrect")), "html", null, true);
            echo "
                                    </div>
                                ";
        }
        // line 33
        echo "                                <div class=\"form-group\">
                                    <div class=\"col-sm-12\">
                                        <button type=\"submit\" class=\"btn btn-default btn_connexion\">Connexion</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    ";
        // line 41
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:register"), array());
        // line 42
        echo "                    </div>
                </div>
            </div>
    </div>
";
        
        $__internal_810ad57a38b8d2e6a9ac8d91cfe241ae554ae585b74a0d6df7eb02e77e8a57e6->leave($__internal_810ad57a38b8d2e6a9ac8d91cfe241ae554ae585b74a0d6df7eb02e77e8a57e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  97 => 41,  87 => 33,  81 => 30,  78 => 29,  76 => 28,  63 => 18,  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'FrontBundle::layout.html.twig' %}*/
/* {% block content %}*/
/*     <div id="connexion">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12" style="text-align:center;margin-left:70px;margin-top:100px">*/
/*                         <div class="col-md-6 login-box">*/
/*                             <div class="gd_bleu">*/
/*                                 <h1>Vous êtes membre ?</h1>*/
/*                                 <span>Connectez-vous dès maintenant</span>*/
/*                             </div>*/
/*                             <br>*/
/*                             <form class="form-horizontal" action="{{ path("fos_user_security_check") }}" method="POST">*/
/*                                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-12">*/
/*                                         <input class="form-control" type="text" id="username" name="_username"*/
/*                                                value="{{ last_username }}" placeholder="Email" required>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-12">*/
/*                                         <input class="form-control" type="password" id="password" name="_password" placeholder="Mot de passe" required>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <br>*/
/*                                 {% if error %}*/
/*                                     <div class="alert alert-danger">*/
/*                                         {{ error.message|trans({'Bad credentials': 'Login ou mot de passe incorrect'}) }}*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-12">*/
/*                                         <button type="submit" class="btn btn-default btn_connexion">Connexion</button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/* */
/*                     {% render(controller('FOSUserBundle:Registration:register')) %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
