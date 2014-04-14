<?php

/* EcoleDeMusiqueWelcomeBundle:Cours:newCollectif.html.twig */
class __TwigTemplate_119823ebe82104ca8a431754a340aae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EcoleDeMusiqueWelcomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "        Planning
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo " 
        
        
              <div id=\"header\">
                        <div id=\"nompage\">
                                <h1>Cours</h1>
                        </div>
        </div>
          
             <div id=\"page\">
           <div>
                  <div class=\"post\">
                       <h2>Saisir une séance collective</h2>
                       <p>Cette rubrique vous permettra de placer dans le planning de tout les élèves, des profs et de la salle, l'activité collectivte choisie  </p>
                             <div class=\"entry\">
        
        
        
                         <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_create_collectif"), "html", null, true);
        echo "\" method=\"post\" >
                                            <table> 
                                           <tr>
                                                    
                                                    <td>
                                                        <label for=\"ecoledemusique_welcomebundle_courstype_jour\" class=\"required\">Jour</label>
                                                    </td>
                                                    <td>
                                                        <select id=\"ecoledemusique_welcomebundle_courstype_jour\" name=\"ecoledemusique_welcomebundle_courstype[jour]\" required=\"required\">
                                                            <option value=\"10\" ";
        // line 34
        if ((10 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Lundi</option>
                                                            <option value=\"11\" ";
        // line 35
        if ((11 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Mardi</option>
                                                            <option value=\"12\" ";
        // line 36
        if ((12 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Mecredi</option>
                                                            <option value=\"13\" ";
        // line 37
        if ((13 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Jeudi</option>
                                                            <option value=\"14\" ";
        // line 38
        if ((14 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Vendredi</option>
                                                            <option value=\"15\" ";
        // line 39
        if ((15 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Samedi</option>
                                                            <option value=\"16\" ";
        // line 40
        if ((16 == $this->getAttribute($this->getContext($context, "control"), "jour"))) {
            echo " selected";
        }
        echo ">Dimanche</option>
                                                        </select>  
                                                   </td>
           
                                               </tr>
                                               <tr>
                                                    
                                                    <td>
                                                        <label class=\"required\">Heure</label>
                                                    </td>
                                                    <td>
                                                        <div id=\"ecoledemusique_welcomebundle_courstype_heure\">
                                                            <select id=\"ecoledemusique_welcomebundle_courstype_heure_hour\" name=\"ecoledemusique_welcomebundle_courstype[heure][hour]\" required=\"required\"    size=\"1\">
                                                              
                                                               ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(8, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 55
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" ";
            if (($this->getContext($context, "i") == $this->getAttribute($this->getAttribute($this->getContext($context, "control"), "heure"), "hour"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 57
        echo "                                                                
                                                          
             
                                                            </select>:
                                                            <select id=\"ecoledemusique_welcomebundle_courstype_heure_minute\" name=\"ecoledemusique_welcomebundle_courstype[heure][minute]\" required=\"required\"    size=\"1\">
                                                            
                                                                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 64
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" ";
            if (($this->getContext($context, "i") == $this->getAttribute($this->getAttribute($this->getContext($context, "control"), "heure"), "minute"))) {
                echo " selected";
            }
            echo ">";
            if (($this->getContext($context, "i") < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 66
        echo "                  
                                                            </select></div>  
                                                   </td>
           
                                               </tr>
                                                <tr>
                                                   <td>
                                                      <label class=\"required\">Durée</label>
                                                    </td>
                                                    <td>
                                                      <div id=\"ecoledemusique_welcomebundle_courstype_duree\">
                                                          <select id=\"ecoledemusique_welcomebundle_courstype_duree_hour\" name=\"ecoledemusique_welcomebundle_courstype[duree][hour]\" required=\"required\"    size=\"1\">
                                                              ";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 79
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" ";
            if (($this->getContext($context, "i") == $this->getAttribute($this->getAttribute($this->getContext($context, "control"), "duree"), "hour"))) {
                echo " selected";
            }
            echo ">";
            if (($this->getContext($context, "i") < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
        echo "                                                         </select>:
                                                         <select id=\"ecoledemusique_welcomebundle_courstype_duree_minute\" name=\"ecoledemusique_welcomebundle_courstype[duree][minute]\" required=\"required\"    size=\"1\">
                                                              ";
        // line 83
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 84
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "\" ";
            if (($this->getContext($context, "i") == $this->getAttribute($this->getAttribute($this->getContext($context, "control"), "duree"), "minute"))) {
                echo " selected";
            }
            echo ">";
            if (($this->getContext($context, "i") < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 86
        echo "                                                           
                                                         </select>
                                                     </div>  
                                                    </td>
                                               </tr>
                                                    <tr>
                                                   <td>
                                                      <label for=\"ecoledemusique_welcomebundle_courstype_salle\">Salle</label>
                                                   </td>
                                                    <td>
                                                      <select id=\"ecoledemusique_welcomebundle_courstype_salle\" name=\"ecoledemusique_welcomebundle_courstype[salle]\">

                                                        ";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeSalle"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeSalle"]) {
            // line 99
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeSalle"), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "listeSalle"), "id") == $this->getAttribute($this->getContext($context, "control"), "salle"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeSalle"), "nom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeSalle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 101
        echo "                                                            
                                                      </select>
                                                    </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                      <label for=\"ecoledemusique_welcomebundle_courstype_prof\" class=\"required\">Prof</label>
                                                   </td>
                                                    <td>
                                                      <select id=\"ecoledemusique_welcomebundle_courstype_prof\" name=\"ecoledemusique_welcomebundle_courstype[prof]\" required=\"required\">
                                                         ";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeProf"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeProf"]) {
            // line 112
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeProf"), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "listeProf"), "id") == $this->getAttribute($this->getContext($context, "control"), "prof"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeProf"), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeProf"), "prenom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeProf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "                                                      </select>  
                                                    </td>
                                               </tr>
                                                <tr>
                                                   <td>
                                                      <label for=\"ecoledemusique_welcomebundle_courstype_activite\">Activite</label>
                                                    </td>
                                                    <td>
                                                      <select id=\"ecoledemusique_welcomebundle_courstype_activite\" name=\"ecoledemusique_welcomebundle_courstype[activite]\">
                                                       ";
        // line 123
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listeActivite"));
        foreach ($context['_seq'] as $context["_key"] => $context["listeActivite"]) {
            // line 124
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeActivite"), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "listeActivite"), "id") == $this->getAttribute($this->getContext($context, "control"), "activite"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listeActivite"), "nom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeActivite'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 126
        echo "                                                      </select>  
                                                    </td>
                                               </tr>
                               </table>
                                 
                                 
                                 
                                   <p>
                                           <button type=\"submit\">Créer</button>
                                   </p>
                             </form>
                                 
                                     <ul class=\"record_actions\">
                                            <li>
                                                <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours"), "html", null, true);
        echo "\">
                                                   Retour au planning
                                                </a>
                                            </li>
                                        </ul>
                            </div>   
                       </div>   
               </div>   
         </div>
        
      ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Cours:newCollectif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 140,  333 => 126,  318 => 124,  314 => 123,  303 => 114,  286 => 112,  237 => 86,  175 => 66,  126 => 54,  417 => 178,  404 => 167,  387 => 165,  367 => 152,  350 => 150,  345 => 149,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 133,  294 => 123,  279 => 121,  275 => 120,  243 => 106,  235 => 103,  217 => 101,  213 => 100,  199 => 88,  181 => 86,  113 => 59,  107 => 40,  137 => 60,  86 => 37,  99 => 43,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  446 => 222,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  411 => 213,  405 => 212,  399 => 210,  395 => 209,  383 => 164,  376 => 204,  370 => 153,  364 => 201,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  312 => 189,  304 => 184,  288 => 180,  255 => 99,  251 => 98,  239 => 105,  231 => 165,  224 => 161,  219 => 84,  197 => 150,  188 => 148,  176 => 143,  167 => 141,  524 => 309,  506 => 297,  500 => 294,  496 => 243,  490 => 241,  477 => 282,  465 => 273,  461 => 272,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  420 => 248,  414 => 246,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  396 => 238,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 113,  169 => 79,  110 => 49,  90 => 38,  23 => 3,  192 => 79,  190 => 78,  174 => 111,  170 => 142,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 35,  40 => 12,  69 => 32,  301 => 100,  295 => 96,  292 => 181,  289 => 94,  287 => 174,  282 => 111,  276 => 179,  273 => 85,  270 => 101,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 83,  211 => 81,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 85,  160 => 63,  109 => 51,  103 => 34,  82 => 33,  65 => 31,  38 => 6,  158 => 58,  150 => 76,  144 => 59,  142 => 50,  129 => 62,  125 => 61,  117 => 48,  112 => 42,  87 => 28,  67 => 19,  61 => 21,  47 => 9,  28 => 3,  91 => 20,  84 => 36,  44 => 18,  25 => 3,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 78,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 77,  147 => 53,  132 => 62,  127 => 49,  121 => 45,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 44,  75 => 23,  71 => 34,  34 => 11,  105 => 24,  93 => 39,  76 => 34,  72 => 33,  68 => 25,  58 => 26,  27 => 7,  94 => 39,  88 => 27,  79 => 35,  59 => 25,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 22,  46 => 9,  22 => 2,  163 => 140,  155 => 50,  152 => 105,  149 => 51,  145 => 57,  139 => 45,  131 => 62,  123 => 59,  120 => 46,  115 => 54,  106 => 44,  101 => 39,  96 => 41,  83 => 36,  80 => 35,  74 => 54,  66 => 48,  55 => 20,  52 => 18,  50 => 10,  43 => 6,  41 => 7,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 108,  162 => 57,  157 => 64,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 55,  122 => 37,  119 => 60,  116 => 35,  111 => 45,  108 => 37,  102 => 41,  98 => 40,  95 => 38,  92 => 28,  89 => 37,  85 => 36,  81 => 30,  73 => 28,  64 => 29,  60 => 28,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
