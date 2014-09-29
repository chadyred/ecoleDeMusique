<?php

/* EcoleDeMusiqueWelcomeBundle::layout.html.twig */
class __TwigTemplate_23cfc4031e18ca8bb4e382859ab953fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Office Memo  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120401

-->
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"description\" content=\"\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
        <title> ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d38e2be_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d38e2be_layoutStyle_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t";
            // asset "d38e2be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d38e2be_jquery.superbox_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t";
        } else {
            // asset "d38e2be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d38e2be.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
        <link href=\"http://fonts.googleapis.com/css?family=Arvo\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://fonts.googleapis.com/css?family=Coda:400,800\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/js/jquery.superbox-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            \$(function() {
                \$.superbox();
            });
            </script>
        </head>
        <body>
            <div id=\"menu-wrapper\">

                <div id=\"logo\">
                    <img id=\"background\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/logo.png"), "html", null, true);
        echo "\"/>

  ";
        // line 43
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo " <span id=\"logOutBox\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("logout"), "html", null, true);
            echo "\">Se Déconnecter</a></span>";
        }
        // line 44
        echo "                </div>
                <div id=\"menu\">
                    <ul>
                        <li class=\"current_page_item\"><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecole_de_musique_welcome_homepage"), "html", null, true);
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("regie"), "html", null, true);
        echo "\">Regie</a>
                            <!--        <ul>
                                            <li><a href=\"#\">Consultation</a></li>
                                            <li><a href=\"#\">Saisie</a></li>
                                    </ul>-->
                        </li>
                        <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecole_de_musique_welcome_formules"), "html", null, true);
        echo "\">Formules</a></li>
                        <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve"), "html", null, true);
        echo "\">Etat Civil</a></li>
                        <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille"), "html", null, true);
        echo "\">Familles</a></li>
                        <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">Paiements</a></li>
                        <li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive"), "html", null, true);
        echo "\">Archives</a></li>
                        <li><a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_sommaire"), "html", null, true);
        echo "\">Activités</a></li>
                        <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prof"), "html", null, true);
        echo "\">Profs</a></li>
                        <li><a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("salle"), "html", null, true);
        echo "\">Salles</a></li>
                        <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours"), "html", null, true);
        echo "\">Plannings</a></li>
                        <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mailing"), "html", null, true);
        echo "\">Mailing</a></li>             
                    </ul>
                </div>
                <!-- end #menu -->
            </div>
            <div id=\"header-wrapper\">
                <div id=\"alert-info\" style=\"background-color:#0193CC;text-align: center;color:white;font-family: 'Arvo', serif;\">
                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 71
            echo "                              ";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "     
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "                    </div>

                </div>
                <div id=\"middle\">

             ";
        // line 78
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
                </div>
                <div id=\"footer\">
                    <p>&copy; 2013 Application Ecole de Musique | Licence GPL | Développé par Florent Paccalet</p>
                </div>
                <!-- end #footer -->


            </body>
        </html>";
    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        echo " Application Ecole de Musique";
    }

    // line 78
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 78,  205 => 18,  192 => 79,  190 => 78,  183 => 73,  174 => 71,  170 => 70,  160 => 63,  156 => 62,  152 => 61,  148 => 60,  144 => 59,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  124 => 54,  115 => 48,  111 => 47,  106 => 44,  100 => 43,  95 => 41,  81 => 30,  77 => 29,  73 => 28,  68 => 25,  48 => 23,  44 => 19,  40 => 18,  21 => 1,  69 => 26,  63 => 24,  57 => 22,  55 => 21,  37 => 7,  32 => 4,  29 => 3,);
    }
}
