<?php

/* EcoleDeMusiqueWelcomeBundle::layout.html.twig */
class __TwigTemplate_7c08546864433c388ed83be13b575a12 extends Twig_Template
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
        return array (  192 => 79,  190 => 78,  174 => 71,  170 => 70,  156 => 62,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  40 => 18,  69 => 26,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 78,  204 => 66,  198 => 63,  185 => 61,  183 => 73,  177 => 58,  160 => 63,  109 => 41,  103 => 34,  82 => 24,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 45,  125 => 44,  117 => 42,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  91 => 20,  84 => 19,  44 => 19,  25 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 24,  75 => 23,  71 => 19,  34 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 25,  58 => 12,  27 => 4,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 61,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 21,  52 => 15,  50 => 10,  43 => 6,  41 => 5,  37 => 7,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 34,  95 => 41,  92 => 28,  89 => 19,  85 => 24,  81 => 30,  73 => 28,  64 => 17,  60 => 23,  57 => 22,  54 => 10,  51 => 9,  48 => 23,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
