<?php

/* EcoleDeMusiqueWelcomeBundle:Cours:new.html.twig */
class __TwigTemplate_7ffe72b9847004416f2feaef96772798 extends Twig_Template
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
        
        
        <script type=\"text/javascript\">
            
             \$(document).ready(function(){
                 
                 
                 \$(function(){\$(\"#eleve\").change(function () {
                        document.forms[\"form\"].action=\"rechargeactivite\";
                        document.forms[\"form\"].submit(); 
                        }); 
                     }); 
                 
                 
                 });
            
            
            
        </script>

       
       <div id=\"header\">
                        <div id=\"nompage\">
                                <h1>Cours</h1>
                        </div>
        </div>
          
             <div id=\"page\">
           <div>
                  <div class=\"post\">
                       <h2>Saisir un nouveau cours</h2>
                       <br />
                             <div class=\"entry\">

                                    

                                        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " name=\"form\">
                                            
                                            
                                            
                                            <table> 
                                           <tr>
                                                    
                                                    <td>
                                                        <label for=\"ecoledemusique_welcomebundle_courstype_jour\" class=\"required\">Jour</label>
                                                    </td>
                                                    <td>
                                                        <select id=\"ecoledemusique_welcomebundle_courstype_jour\" name=\"ecoledemusique_welcomebundle_courstype[jour]\" required=\"required\">
                                                            <option value=\"10\" ";
        // line 56
        if ((10 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Lundi</option>
                                                            <option value=\"11\" ";
        // line 57
        if ((11 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Mardi</option>
                                                            <option value=\"12\" ";
        // line 58
        if ((12 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Mecredi</option>
                                                            <option value=\"13\" ";
        // line 59
        if ((13 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Jeudi</option>
                                                            <option value=\"14\" ";
        // line 60
        if ((14 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Vendredi</option>
                                                            <option value=\"15\" ";
        // line 61
        if ((15 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
            echo " selected";
        }
        echo ">Samedi</option>
                                                            <option value=\"16\" ";
        // line 62
        if ((16 == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "jour"))) {
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
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(8, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 77
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute($this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "heure"), "hour"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 79
        echo "                                                                
                                                          
             
                                                            </select>:
                                                            <select id=\"ecoledemusique_welcomebundle_courstype_heure_minute\" name=\"ecoledemusique_welcomebundle_courstype[heure][minute]\" required=\"required\"    size=\"1\">
                                                            
                                                                ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 86
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute($this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "heure"), "minute"))) {
                echo " selected";
            }
            echo ">";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 88
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
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute($this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "duree"), "hour"))) {
                echo " selected";
            }
            echo ">";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 103
        echo "                                                         </select>:
                                                         <select id=\"ecoledemusique_welcomebundle_courstype_duree_minute\" name=\"ecoledemusique_welcomebundle_courstype[duree][minute]\" required=\"required\"    size=\"1\">
                                                              ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 106
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute($this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "duree"), "minute"))) {
                echo " selected";
            }
            echo ">";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) < 10)) {
                echo "0";
            }
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 108
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
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeSalle"]) ? $context["listeSalle"] : $this->getContext($context, "listeSalle")));
        foreach ($context['_seq'] as $context["_key"] => $context["listeSalle"]) {
            // line 121
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeSalle"]) ? $context["listeSalle"] : $this->getContext($context, "listeSalle")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["listeSalle"]) ? $context["listeSalle"] : $this->getContext($context, "listeSalle")), "id") == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "salle"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeSalle"]) ? $context["listeSalle"] : $this->getContext($context, "listeSalle")), "nom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeSalle'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 123
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
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeProf"]) ? $context["listeProf"] : $this->getContext($context, "listeProf")));
        foreach ($context['_seq'] as $context["_key"] => $context["listeProf"]) {
            // line 134
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeProf"]) ? $context["listeProf"] : $this->getContext($context, "listeProf")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["listeProf"]) ? $context["listeProf"] : $this->getContext($context, "listeProf")), "id") == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "prof"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeProf"]) ? $context["listeProf"] : $this->getContext($context, "listeProf")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeProf"]) ? $context["listeProf"] : $this->getContext($context, "listeProf")), "prenom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeProf'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 136
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
        // line 146
        if (twig_test_empty((isset($context["listeActivite"]) ? $context["listeActivite"] : $this->getContext($context, "listeActivite")))) {
            // line 147
            echo "                                                           <option value=\"\"></option>
                                                       ";
        } else {
            // line 149
            echo "                                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeActivite"]) ? $context["listeActivite"] : $this->getContext($context, "listeActivite")));
            foreach ($context['_seq'] as $context["_key"] => $context["listeActivite"]) {
                // line 150
                echo "                                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeActivite"]) ? $context["listeActivite"] : $this->getContext($context, "listeActivite")), "id"), "html", null, true);
                echo "\" ";
                if ($this->getAttribute((isset($context["control"]) ? $context["control"] : null), "activite", array(), "any", true, true)) {
                    if (($this->getAttribute((isset($context["listeActivite"]) ? $context["listeActivite"] : $this->getContext($context, "listeActivite")), "id") == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "activite"))) {
                        echo " selected";
                    }
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeActivite"]) ? $context["listeActivite"] : $this->getContext($context, "listeActivite")), "nom"), "html", null, true);
                echo "</option>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeActivite'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 152
            echo "                                                       ";
        }
        // line 153
        echo "                                                                
                                                                
                                                          </select>  
                                                    </td>
                                               </tr>
                                               <tr>
                                                   <td>
                                                     Eleve
                                                    </td>
                                                    <td>
                                                        <select name=\"eleve\" id=\"eleve\">
                                                           ";
        // line 164
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeEleve"]) ? $context["listeEleve"] : $this->getContext($context, "listeEleve")));
        foreach ($context['_seq'] as $context["_key"] => $context["listeEleve"]) {
            // line 165
            echo "                                                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeEleve"]) ? $context["listeEleve"] : $this->getContext($context, "listeEleve")), "id"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute((isset($context["listeEleve"]) ? $context["listeEleve"] : $this->getContext($context, "listeEleve")), "id") == $this->getAttribute((isset($context["control"]) ? $context["control"] : $this->getContext($context, "control")), "eleve"))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeEleve"]) ? $context["listeEleve"] : $this->getContext($context, "listeEleve")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listeEleve"]) ? $context["listeEleve"] : $this->getContext($context, "listeEleve")), "prenom"), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listeEleve'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 167
        echo "                                                        </select>
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
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours"), "html", null, true);
        echo "\">
                                                   Retour au planning
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
        return "EcoleDeMusiqueWelcomeBundle:Cours:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 178,  387 => 165,  367 => 152,  350 => 150,  345 => 149,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 133,  294 => 123,  279 => 121,  275 => 120,  235 => 103,  107 => 58,  141 => 91,  161 => 73,  285 => 136,  281 => 135,  267 => 124,  256 => 119,  226 => 139,  218 => 136,  213 => 100,  207 => 133,  203 => 90,  187 => 128,  175 => 125,  135 => 90,  86 => 35,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 101,  214 => 95,  210 => 94,  206 => 146,  199 => 88,  195 => 130,  168 => 130,  69 => 32,  238 => 155,  228 => 106,  208 => 148,  173 => 87,  146 => 60,  134 => 60,  113 => 59,  99 => 43,  181 => 86,  126 => 50,  243 => 106,  223 => 105,  209 => 97,  166 => 82,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 153,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 160,  239 => 105,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 97,  110 => 50,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 126,  90 => 40,  53 => 20,  49 => 19,  62 => 27,  192 => 106,  190 => 144,  174 => 76,  170 => 74,  156 => 68,  148 => 64,  140 => 61,  128 => 88,  124 => 56,  77 => 35,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 167,  399 => 210,  396 => 238,  388 => 194,  383 => 164,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 150,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 79,  164 => 69,  137 => 60,  97 => 38,  40 => 12,  23 => 3,  301 => 149,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 169,  268 => 174,  263 => 123,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 117,  204 => 112,  198 => 63,  185 => 81,  183 => 127,  177 => 85,  160 => 80,  109 => 49,  103 => 46,  82 => 37,  65 => 31,  38 => 7,  158 => 66,  150 => 76,  144 => 58,  142 => 72,  129 => 62,  125 => 61,  117 => 48,  112 => 47,  87 => 44,  67 => 32,  61 => 20,  47 => 17,  105 => 40,  93 => 46,  76 => 35,  72 => 25,  68 => 24,  91 => 45,  84 => 33,  28 => 3,  24 => 3,  94 => 46,  88 => 32,  79 => 35,  59 => 27,  44 => 18,  31 => 11,  27 => 7,  25 => 4,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 129,  189 => 82,  186 => 103,  180 => 134,  172 => 131,  159 => 95,  154 => 77,  147 => 112,  132 => 89,  127 => 46,  121 => 50,  118 => 64,  114 => 43,  104 => 53,  100 => 43,  78 => 44,  75 => 33,  71 => 33,  58 => 19,  34 => 11,  26 => 6,  19 => 1,  70 => 24,  63 => 25,  46 => 10,  22 => 2,  163 => 96,  155 => 94,  152 => 63,  149 => 93,  145 => 92,  139 => 62,  131 => 62,  123 => 46,  120 => 54,  115 => 54,  106 => 49,  101 => 57,  96 => 37,  83 => 38,  80 => 30,  74 => 30,  66 => 20,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 15,  37 => 7,  35 => 12,  32 => 4,  29 => 3,  184 => 135,  178 => 77,  171 => 98,  165 => 123,  162 => 67,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 60,  133 => 56,  130 => 59,  122 => 65,  119 => 60,  116 => 48,  111 => 45,  108 => 62,  102 => 44,  98 => 47,  95 => 56,  92 => 36,  89 => 41,  85 => 32,  81 => 30,  73 => 34,  64 => 24,  60 => 18,  57 => 25,  54 => 20,  51 => 22,  48 => 19,  45 => 19,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}