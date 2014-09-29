<?php

/* EcoleDeMusiqueWelcomeBundle:Eleve:new.html.twig */
class __TwigTemplate_0c252de15a08885067516975713c1156 extends Twig_Template
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
        echo "        Etat Civil
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "          Etat Civil
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo "    
          <div id=\"headerCentre\">
                        <div id=\"nompage\">
                                <h1>Etat Civil</h1>
                        </div>
                </div>
        <div id=\"page\">
           <div id=\"content\">
                  <div class=\"post\">
                
                       <h2 class=\"title\">Ajout d'un nouvel élève</h2>
                             <div class=\"entry\">
                                 <p>Cette rubrique permet de créer un <strong>nouvel élève</strong> dans la base pour l'année en cours</p>
                                 <br />
                                <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                    
                           
                                            <table>
                                                <tr>
                                                    <td>
                                                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "famille"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Famille")) ? array() : array("label" => $_label_)));
        echo " &nbsp; &nbsp; 
                                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "famille"), 'widget');
        echo "
                                                    <br />
                                                    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_new"), "html", null, true);
        echo "\"> Créer une nouvelle famille</a>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                                     ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nom")) ? array() : array("label" => $_label_)));
        echo "&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                     ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget');
        echo "                                               
                                                    </td>
                                                    <td>
                                   
                                                                     ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Prénom")) ? array() : array("label" => $_label_)));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                     ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget');
        echo "
                                                  </td>
                                              </tr>
                                              <tr>
                                                    <td>
                                                                      ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Adresse")) ? array() : array("label" => $_label_)));
        echo "&nbsp;
                                                                     ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget');
        echo "
                                                     </td>
                                                     <td>
                                                                  ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Code Postal")) ? array() : array("label" => $_label_)));
        echo "&nbsp;
                                                                     ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codePostal"), 'widget');
        echo "
                                                     </td>
                                              
                                              </tr>
                                              <tr>
                                                  <td>
                                                         ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Ville")) ? array() : array("label" => $_label_)));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget');
        echo "
                                                  </td>
                                                  
                                                  
                                                  <td>
                                                         ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Civilite")) ? array() : array("label" => $_label_)));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                          ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "civilite"), 'widget');
        echo "
                                                  </td>
                                                  
                                             </tr>
                                              <tr>
                                                  
                                                  <td>
                                                              ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telEleve"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel Élève")) ? array() : array("label" => $_label_)));
        echo "
                                                              ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telEleve"), 'widget');
        echo "
                                                  </td>
   
                                           
                                                  <td>
                                                      
                                                      ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telMere"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel Mère")) ? array() : array("label" => $_label_)));
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telMere"), 'widget');
        echo "
                                                  
                                                  </td>
                                               </tr>
                                              <tr>
                                                  <td>
                                                      ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telPere"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Tel Père")) ? array() : array("label" => $_label_)));
        echo "&nbsp;
                                                      ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telPere"), 'widget');
        echo "
                                                  
                                                  </td>                                            
                                             
                                                  <td>
                                                     ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Mail")) ? array() : array("label" => $_label_)));
        echo "
                                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail"), 'widget');
        echo "

                                                  </td>
                                                </tr>
                                             <tr>
           
                                                   <td>
                                                       ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Date de Naissance")) ? array() : array("label" => $_label_)));
        echo "
                                                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDeNaissance"), 'widget');
        echo "
                                                  </td>
                                           
                                                   <td>
                                             
                                                  </td>
                                                  
                                              </tr>
                                           </table>
                           
                                    <p>
                                        <button type=\"submit\" style=\"width:230px; height:40px;\">Enregistrer</button>
                                    </p>
                                </form>

                                <ul class=\"record_actions\">
                                    <li>
                                        <a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve"), "html", null, true);
        echo "\">
                                           Partie Consultation
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
        return "EcoleDeMusiqueWelcomeBundle:Eleve:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 122,  223 => 105,  209 => 97,  166 => 75,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 169,  239 => 168,  231 => 165,  224 => 161,  219 => 104,  188 => 148,  167 => 141,  110 => 49,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 82,  90 => 38,  53 => 20,  49 => 19,  62 => 27,  192 => 89,  190 => 78,  174 => 111,  170 => 76,  156 => 68,  148 => 60,  140 => 61,  128 => 55,  124 => 57,  77 => 29,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 150,  182 => 79,  176 => 143,  169 => 109,  164 => 68,  137 => 54,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 84,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 131,  204 => 95,  198 => 63,  185 => 114,  183 => 83,  177 => 58,  160 => 63,  109 => 45,  103 => 34,  82 => 33,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 62,  142 => 50,  129 => 50,  125 => 44,  117 => 50,  112 => 40,  87 => 28,  67 => 19,  61 => 22,  47 => 9,  105 => 44,  93 => 20,  76 => 30,  72 => 27,  68 => 25,  91 => 20,  84 => 32,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 30,  59 => 14,  44 => 19,  31 => 2,  27 => 7,  25 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 90,  194 => 149,  191 => 78,  189 => 83,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 59,  147 => 59,  132 => 62,  127 => 54,  121 => 51,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 37,  75 => 29,  71 => 19,  58 => 26,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 19,  46 => 9,  22 => 2,  163 => 140,  155 => 50,  152 => 67,  149 => 51,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 41,  83 => 18,  80 => 39,  74 => 54,  66 => 48,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 7,  37 => 8,  35 => 3,  32 => 2,  29 => 4,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 40,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 23,  60 => 23,  57 => 21,  54 => 10,  51 => 9,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
