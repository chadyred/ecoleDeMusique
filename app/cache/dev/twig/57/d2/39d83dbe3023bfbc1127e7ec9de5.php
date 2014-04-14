<?php

/* EcoleDeMusiqueWelcomeBundle:ActiviteEleve:index.html.twig */
class __TwigTemplate_57d239d83dbe3023bfbc1127e7ec9de5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EcoleDeMusiqueWelcomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titlePage' => array($this, 'block_titlePage'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EcoleDeMusiqueWelcomeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "        Activites 
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        Activites 
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
<div id=\"header\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Activités</h1>
\t\t</div>
\t</div>
        
        <div id=\"page\">
                  <div class=\"post\">
                       <h2 class=\"title\">Activité exercé par les élèves</h2>
                             <div class=\"entry\">
                                 <p>Listes des élèves avec les activités qu'ils pratiquent
                                 <br />
                                 <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activiteeleve_search"), "html", null, true);
        echo "\">Faire une recherche</a></p>
                                 <br />
                                            <table class=\"records_list\">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <th>Nom Pratique</th>
                                                        <th>Type</th>
                                                     <!--   <th>Actions</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 36
            echo "                                                    <tr>
                                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "nom"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "prenom"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type"), "html", null, true);
            echo "</td>
                                                        <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activiteeleve_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes vous sur de vouloir supprimer cette combinaison?')\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/recycle-bin.png"), "html", null, true);
            echo "\"/></a></td>
                                                   <!--     <td>
                                                            <ul>
                                                                <li>
                                                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activiteeleve_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                                                </li>
                                                                <li>
                                                                    <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activiteeleve_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                   -->
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 55
        echo "                                                </tbody>
                                            </table>

                                            <ul>
                                                <li>
                                                    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activiteeleve_new"), "html", null, true);
        echo "\">
                                                       Dire qui fait quoi 
                                                    </a>
                                                </li>
                                            </ul>
                                            
                          </div>
                      </div>
               </div>
                                            
                                            
                                            
                                            
                          
                      ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:ActiviteEleve:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 60,  86 => 37,  99 => 43,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  446 => 222,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  411 => 213,  405 => 212,  399 => 210,  395 => 209,  383 => 208,  376 => 204,  370 => 203,  364 => 201,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  312 => 189,  304 => 184,  288 => 180,  255 => 170,  251 => 169,  239 => 168,  231 => 165,  224 => 161,  219 => 159,  197 => 150,  188 => 148,  176 => 143,  167 => 141,  524 => 309,  506 => 297,  500 => 294,  496 => 243,  490 => 241,  477 => 282,  465 => 273,  461 => 272,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  420 => 248,  414 => 246,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  396 => 238,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 113,  169 => 109,  110 => 49,  90 => 38,  23 => 3,  192 => 79,  190 => 78,  174 => 111,  170 => 142,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 29,  40 => 12,  69 => 32,  301 => 100,  295 => 96,  292 => 181,  289 => 94,  287 => 174,  282 => 90,  276 => 179,  273 => 85,  270 => 84,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 70,  211 => 131,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 58,  160 => 63,  109 => 51,  103 => 34,  82 => 33,  65 => 31,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 62,  125 => 44,  117 => 48,  112 => 42,  87 => 28,  67 => 19,  61 => 21,  47 => 9,  28 => 3,  91 => 20,  84 => 36,  44 => 18,  25 => 3,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 77,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 59,  147 => 53,  132 => 62,  127 => 49,  121 => 45,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 37,  75 => 23,  71 => 28,  34 => 11,  105 => 24,  93 => 39,  76 => 34,  72 => 33,  68 => 25,  58 => 26,  27 => 7,  94 => 39,  88 => 27,  79 => 35,  59 => 14,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 22,  46 => 9,  22 => 2,  163 => 140,  155 => 50,  152 => 105,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 59,  120 => 46,  115 => 54,  106 => 44,  101 => 46,  96 => 41,  83 => 36,  80 => 35,  74 => 54,  66 => 48,  55 => 20,  52 => 23,  50 => 10,  43 => 6,  41 => 7,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 108,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 55,  122 => 37,  119 => 36,  116 => 35,  111 => 45,  108 => 37,  102 => 41,  98 => 40,  95 => 43,  92 => 28,  89 => 19,  85 => 36,  81 => 30,  73 => 28,  64 => 29,  60 => 28,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
