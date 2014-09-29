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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be_0") : $this->env->getExtension('assets')->getAssetUrl("css/d38e2be_layoutStyle_1.css");
            // line 23
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t";
            // asset "d38e2be_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be_1") : $this->env->getExtension('assets')->getAssetUrl("css/d38e2be_jquery.superbox_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
\t";
        } else {
            // asset "d38e2be"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d38e2be") : $this->env->getExtension('assets')->getAssetUrl("css/d38e2be.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 71
            echo "                              ";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
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
        return array (  192 => 79,  190 => 78,  174 => 71,  170 => 70,  156 => 62,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  496 => 258,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 234,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  411 => 207,  404 => 203,  399 => 200,  396 => 199,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 178,  352 => 174,  347 => 171,  344 => 170,  337 => 166,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 115,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 71,  164 => 68,  152 => 61,  137 => 54,  115 => 48,  97 => 32,  40 => 18,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 93,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 97,  211 => 78,  204 => 66,  198 => 63,  185 => 61,  183 => 73,  177 => 58,  160 => 63,  149 => 51,  123 => 47,  120 => 46,  109 => 41,  103 => 34,  82 => 23,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  106 => 44,  87 => 28,  70 => 20,  67 => 19,  61 => 11,  47 => 9,  105 => 36,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 14,  68 => 25,  50 => 10,  91 => 20,  84 => 24,  74 => 16,  66 => 15,  55 => 15,  28 => 3,  24 => 3,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  43 => 6,  46 => 7,  44 => 19,  31 => 2,  27 => 4,  32 => 4,  25 => 4,  35 => 5,  29 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 96,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 66,  154 => 59,  147 => 59,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 24,  75 => 21,  71 => 19,  63 => 24,  58 => 12,  41 => 5,  34 => 3,  26 => 6,  22 => 2,  19 => 1,  184 => 80,  178 => 71,  171 => 62,  165 => 58,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 31,  102 => 30,  98 => 34,  95 => 41,  92 => 28,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 12,  60 => 23,  57 => 14,  54 => 9,  51 => 8,  48 => 23,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
