<?php

/* FrontBundle:Mail:confirmation-inscription.html.twig */
class __TwigTemplate_f2c594af8f0407e0dd0cec43ecfd4c8920e288257b01724a9b5bfcc2e8ff2b00 extends Twig_Template
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
        $__internal_5a614bba5ff7ce2cd7176f9b06afec661042feb24e66ce85088d6f270b19fde5 = $this->env->getExtension("native_profiler");
        $__internal_5a614bba5ff7ce2cd7176f9b06afec661042feb24e66ce85088d6f270b19fde5->enter($__internal_5a614bba5ff7ce2cd7176f9b06afec661042feb24e66ce85088d6f270b19fde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontBundle:Mail:confirmation-inscription.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/html4/strict.dtd\">
<html>
<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\"/>
    <title>Confirmation Inscription</title>
</head>
<body marginheight=\"0\" topmargin=\"0\" marginwidth=\"0\" leftmargin=\"0\"
      style=\"margin:auto!important; background-color: #fff; bgcolor:#fff;\">

<!--100% body table-->
<table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"600\" align=\"center\" style=\"margin:auto;\">
    <tr valign=\"top\">
        <td>
            <!--container-->
            <table cellspacing=\"0\" border=\"0\" align=\"center\" cellpadding=\"0\" width=\"600\" style=\"margin:auto!important;\">
                <tr>
                    <td>
                        <!--header-->
                        <table cellspacing=\"0\" border=\"0\" id=\"header\" cellpadding=\"0\" width=\"600\" align=\"center\"
                               style=\"position: relative; height: 150px;\">
                            <tr>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!--contenu principal-->


                                    <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"600\" align=\"center\">
                                        <tr>

                                            <td width=\"600\">

                                                <table cellspacing=\"0\" border=\"0\" cellpadding=\"0\" width=\"600\"
                                                       height=\"84\" align=\"center\">

                                                    <tr>
                                                        <td width=\"600\"
                                                            style=\"text-align:center;margin: 0px;background-color:#DDE7F0;bg-color:#DDE7F0;valign:middle;vertical-align:middle;color:#3D7199;font-family: Arial, Helvetica, sans-serif;font-size:18px;font-weight:bold;\">
                                                            Confirmation
                                                            Inscription
                                                        </td>
                                                    </tr>
                                                </table>


                                            </td>
                                        </tr>
                                    </table>
                                    <!-- contenu -->

                                    <table border=\"0\" cellspacing=\"0\" cellpadding=\"5\"
                                           style=\"font-family: Arial, sans-serif;\">

                                        <tr><!-- intro -->
                                            <td colspan=\"2\" width=\"600\">
                                                <p style=\"font-weight:bold;font-size:16px;color:#3D7199;\">Merci pour
                                                    votre inscription sur AddressBook ! </p>

                                                <p style=\"font-weight:normal;font-size:14px;color:#000000;\"> Vous recevez cet email car vous venez de vous inscrire sur AddressBook et nous vous en remercions ! </p><br>

                                                <center>
                                                    <table cellspacing=\"0\" border=\"0\" cellpadding=\"5\" width=\"450\"
                                                           style=\"margin:auto;background-color:#DDE7F0;bg-color:#DDE7F0;\">
                                                        <tr>
                                                            <td valign=\"top\" width=\"450\"
                                                                style=\"font-weight:normal;font-size:14px;color:#000000;font-family: Arial, Helvetica, sans-serif;\">

                                                                Votre identifiant : <span
                                                                        style=\"font-weight:bold;font-size:14px;color:#3D7199;\">";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</span><br>
                                                                Votre mot de passe : <span
                                                                        style=\"font-weight:bold;font-size:14px;color:#3D7199;\">";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : $this->getContext($context, "pass")), "html", null, true);
        echo "</span>

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </center>
                                                <br>

                                                <p style=\"font-weight:normal;font-size:14px;color:#000000;\"></p>

                                                <p style=\"font-weight:normal;font-size:14px;color:#000000;\">A très
                                                    vite,</p>

                                                <p style=\"font-weight:normal;font-size:14px;color:#3D7199;font-style: italic;\">
                                                    L'équipe AddressBook</p>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td colspan=\"2\" style=\"font-family: Arial, Helvetica, sans-serif;\"
                                                valign=\"top\">
                                                <p style=\"font-weight:normal;font-size:12px;color:#3D7199;font-style: italic;\">
                                                    AddressBook est une plateforme quui vous permet de gérer votre carnet d'adresses en ligne.</p>
                                            </td>
                                        </tr>

                                    </table>
                                    <!-- /contenu -->


                                </td>
                            </tr>
                        </table>
                        <!--container-->


                    </td>
                </tr>
            </table>
            <!--container-->

        </td>
    </tr>
</table>
<!--/100% body table-->
</body>
</html>
";
        
        $__internal_5a614bba5ff7ce2cd7176f9b06afec661042feb24e66ce85088d6f270b19fde5->leave($__internal_5a614bba5ff7ce2cd7176f9b06afec661042feb24e66ce85088d6f270b19fde5_prof);

    }

    public function getTemplateName()
    {
        return "FrontBundle:Mail:confirmation-inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 74,  95 => 72,  22 => 1,);
    }
}
/* ﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">*/
/* <html>*/
/* <head>*/
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>*/
/*     <title>Confirmation Inscription</title>*/
/* </head>*/
/* <body marginheight="0" topmargin="0" marginwidth="0" leftmargin="0"*/
/*       style="margin:auto!important; background-color: #fff; bgcolor:#fff;">*/
/* */
/* <!--100% body table-->*/
/* <table cellspacing="0" border="0" cellpadding="0" width="600" align="center" style="margin:auto;">*/
/*     <tr valign="top">*/
/*         <td>*/
/*             <!--container-->*/
/*             <table cellspacing="0" border="0" align="center" cellpadding="0" width="600" style="margin:auto!important;">*/
/*                 <tr>*/
/*                     <td>*/
/*                         <!--header-->*/
/*                         <table cellspacing="0" border="0" id="header" cellpadding="0" width="600" align="center"*/
/*                                style="position: relative; height: 150px;">*/
/*                             <tr>*/
/*                                 <td>*/
/* */
/*                                 </td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>*/
/*                                     <!--contenu principal-->*/
/* */
/* */
/*                                     <table cellspacing="0" border="0" cellpadding="0" width="600" align="center">*/
/*                                         <tr>*/
/* */
/*                                             <td width="600">*/
/* */
/*                                                 <table cellspacing="0" border="0" cellpadding="0" width="600"*/
/*                                                        height="84" align="center">*/
/* */
/*                                                     <tr>*/
/*                                                         <td width="600"*/
/*                                                             style="text-align:center;margin: 0px;background-color:#DDE7F0;bg-color:#DDE7F0;valign:middle;vertical-align:middle;color:#3D7199;font-family: Arial, Helvetica, sans-serif;font-size:18px;font-weight:bold;">*/
/*                                                             Confirmation*/
/*                                                             Inscription*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                 </table>*/
/* */
/* */
/*                                             </td>*/
/*                                         </tr>*/
/*                                     </table>*/
/*                                     <!-- contenu -->*/
/* */
/*                                     <table border="0" cellspacing="0" cellpadding="5"*/
/*                                            style="font-family: Arial, sans-serif;">*/
/* */
/*                                         <tr><!-- intro -->*/
/*                                             <td colspan="2" width="600">*/
/*                                                 <p style="font-weight:bold;font-size:16px;color:#3D7199;">Merci pour*/
/*                                                     votre inscription sur AddressBook ! </p>*/
/* */
/*                                                 <p style="font-weight:normal;font-size:14px;color:#000000;"> Vous recevez cet email car vous venez de vous inscrire sur AddressBook et nous vous en remercions ! </p><br>*/
/* */
/*                                                 <center>*/
/*                                                     <table cellspacing="0" border="0" cellpadding="5" width="450"*/
/*                                                            style="margin:auto;background-color:#DDE7F0;bg-color:#DDE7F0;">*/
/*                                                         <tr>*/
/*                                                             <td valign="top" width="450"*/
/*                                                                 style="font-weight:normal;font-size:14px;color:#000000;font-family: Arial, Helvetica, sans-serif;">*/
/* */
/*                                                                 Votre identifiant : <span*/
/*                                                                         style="font-weight:bold;font-size:14px;color:#3D7199;">{{ email }}</span><br>*/
/*                                                                 Votre mot de passe : <span*/
/*                                                                         style="font-weight:bold;font-size:14px;color:#3D7199;">{{ pass }}</span>*/
/* */
/*                                                             </td>*/
/*                                                         </tr>*/
/*                                                     </table>*/
/*                                                 </center>*/
/*                                                 <br>*/
/* */
/*                                                 <p style="font-weight:normal;font-size:14px;color:#000000;"></p>*/
/* */
/*                                                 <p style="font-weight:normal;font-size:14px;color:#000000;">A très*/
/*                                                     vite,</p>*/
/* */
/*                                                 <p style="font-weight:normal;font-size:14px;color:#3D7199;font-style: italic;">*/
/*                                                     L'équipe AddressBook</p>*/
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                         <tr>*/
/*                                             <td colspan="2" style="font-family: Arial, Helvetica, sans-serif;"*/
/*                                                 valign="top">*/
/*                                                 <p style="font-weight:normal;font-size:12px;color:#3D7199;font-style: italic;">*/
/*                                                     AddressBook est une plateforme quui vous permet de gérer votre carnet d'adresses en ligne.</p>*/
/*                                             </td>*/
/*                                         </tr>*/
/* */
/*                                     </table>*/
/*                                     <!-- /contenu -->*/
/* */
/* */
/*                                 </td>*/
/*                             </tr>*/
/*                         </table>*/
/*                         <!--container-->*/
/* */
/* */
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <!--container-->*/
/* */
/*         </td>*/
/*     </tr>*/
/* </table>*/
/* <!--/100% body table-->*/
/* </body>*/
/* </html>*/
/* */
