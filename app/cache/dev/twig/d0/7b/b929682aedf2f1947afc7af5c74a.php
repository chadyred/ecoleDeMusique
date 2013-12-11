<?php

/* EcoleDeMusiqueWelcomeBundle:Default:regie.html.twig */
class __TwigTemplate_d07bb929682aedf2f1947afc7af5c74a extends Twig_Template
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
        echo "      Régie
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        Régie
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " 
        
        <div id=\"page\">
                       <div id=\"content\">
                            <div class=\"post\">
                            <h2 class=\"title\">Permetant de créer une tarification élève</h2>
                                    <div class=\"entry\">
                                       <p> Cette rubrique vous permettra de <strong>calculer un tarfication</strong></p>
                                       <br />
                                          <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ecole_de_musique_welcome_appliquerTarification"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

                                         <div>
                                         
                                                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nom de l'eleve :")) ? array() : array("label" => $_label_)));
        echo "
                                                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo "
                                            <a href=\"\"> Entrer un nouvelle élève</a>
                                        </div>
                                        <div>
                                            
                                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "capv"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Capv :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "capv"), 'widget');
        echo "      
                                        </div>       
                                         <div>
                                            
                                                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ea"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Enfant/Adulte :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;
                                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ea"), 'widget');
        echo "      
                                        </div> 
                                                   <div>
                                            
                                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cycle"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Cycle :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cycle"), 'widget');
        echo "      
                                        </div>   
                                                         <div>
                                            
                                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "instru2"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Instrument 2 :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp; 
                                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "instru2"), 'widget');
        echo "      
                                        </div>   
                                        <div>
                                            
                                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "instru3"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Instrument 3 :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;
                                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "instru3"), 'widget');
        echo "      
                                        </div> 
                                              <div>
                                              <br />
                                                   <input type=\"submit\" id=\"submit\" value=\"Calculer la tarification\" name=\"submit\" style=\"margin-left: 390px\"/>      
                                              </div>
                                    </form>

                            </div>                                  
                            <div style=\"clear: both;\">&nbsp;</div>
                            
                     </div>
\t\t\t<!-- end #content -->
\t\t\t<div style=\"clear: both;\">&nbsp;</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Default:regie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 136,  267 => 124,  256 => 119,  203 => 90,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  214 => 95,  210 => 94,  206 => 146,  195 => 140,  168 => 130,  161 => 73,  238 => 155,  228 => 106,  208 => 148,  173 => 87,  146 => 60,  134 => 60,  223 => 105,  209 => 97,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  388 => 194,  381 => 190,  369 => 183,  362 => 179,  347 => 171,  332 => 163,  329 => 162,  321 => 157,  305 => 150,  297 => 144,  284 => 136,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  244 => 114,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  182 => 79,  164 => 69,  97 => 38,  53 => 20,  49 => 19,  135 => 90,  62 => 27,  1263 => 466,  1257 => 465,  1243 => 461,  1236 => 460,  1234 => 459,  1231 => 458,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1191 => 448,  1186 => 446,  1181 => 445,  1179 => 444,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  506 => 255,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 233,  452 => 241,  427 => 236,  422 => 234,  415 => 232,  402 => 223,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 153,  300 => 145,  281 => 135,  271 => 190,  269 => 127,  166 => 73,  141 => 91,  349 => 140,  333 => 126,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 156,  175 => 66,  126 => 54,  417 => 233,  404 => 203,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 112,  235 => 103,  217 => 151,  213 => 100,  199 => 89,  181 => 79,  113 => 57,  107 => 40,  137 => 59,  86 => 36,  99 => 42,  1328 => 25,  1322 => 22,  1316 => 19,  1312 => 18,  1308 => 16,  1305 => 15,  1297 => 522,  1276 => 507,  1270 => 504,  1266 => 467,  1251 => 462,  1245 => 488,  1241 => 487,  1235 => 486,  1217 => 471,  1213 => 470,  1201 => 460,  1189 => 447,  1183 => 451,  1176 => 443,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  496 => 258,  490 => 241,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 226,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 207,  405 => 224,  399 => 200,  395 => 209,  383 => 191,  376 => 187,  370 => 215,  364 => 180,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  312 => 152,  304 => 184,  288 => 194,  255 => 99,  251 => 160,  239 => 111,  231 => 165,  224 => 152,  219 => 104,  197 => 88,  188 => 83,  176 => 133,  167 => 97,  479 => 284,  461 => 234,  455 => 269,  451 => 229,  445 => 267,  432 => 257,  425 => 235,  413 => 246,  407 => 243,  400 => 239,  396 => 199,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 178,  352 => 174,  344 => 170,  337 => 166,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 115,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 142,  169 => 71,  110 => 42,  90 => 30,  23 => 3,  192 => 106,  190 => 144,  174 => 76,  170 => 74,  156 => 68,  148 => 64,  140 => 57,  128 => 54,  124 => 56,  77 => 33,  40 => 12,  69 => 31,  301 => 149,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 131,  273 => 85,  270 => 169,  268 => 174,  263 => 123,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 117,  204 => 145,  198 => 63,  185 => 81,  183 => 143,  177 => 99,  160 => 63,  109 => 44,  103 => 46,  82 => 33,  65 => 26,  38 => 6,  158 => 66,  150 => 61,  144 => 63,  142 => 50,  129 => 50,  125 => 61,  117 => 50,  112 => 47,  87 => 34,  67 => 30,  61 => 11,  47 => 17,  28 => 3,  91 => 38,  84 => 37,  44 => 18,  25 => 3,  225 => 153,  216 => 105,  212 => 149,  205 => 92,  201 => 83,  196 => 145,  194 => 149,  191 => 78,  189 => 82,  186 => 103,  180 => 134,  172 => 131,  159 => 95,  154 => 77,  147 => 112,  132 => 89,  127 => 56,  121 => 50,  118 => 54,  114 => 43,  104 => 42,  100 => 37,  78 => 31,  75 => 27,  71 => 29,  34 => 11,  105 => 40,  93 => 46,  76 => 34,  72 => 25,  68 => 24,  58 => 18,  27 => 7,  94 => 46,  88 => 44,  79 => 28,  59 => 20,  31 => 11,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 24,  63 => 29,  46 => 11,  22 => 2,  163 => 96,  155 => 94,  152 => 63,  149 => 66,  145 => 59,  139 => 62,  131 => 55,  123 => 46,  120 => 54,  115 => 50,  106 => 49,  101 => 39,  96 => 37,  83 => 33,  80 => 30,  74 => 30,  66 => 48,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 7,  37 => 14,  35 => 12,  32 => 4,  29 => 4,  184 => 135,  178 => 77,  171 => 98,  165 => 108,  162 => 67,  157 => 65,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 56,  133 => 56,  130 => 59,  122 => 54,  119 => 45,  116 => 48,  111 => 45,  108 => 37,  102 => 48,  98 => 42,  95 => 38,  92 => 36,  89 => 27,  85 => 32,  81 => 30,  73 => 28,  64 => 29,  60 => 21,  57 => 25,  54 => 20,  51 => 8,  48 => 17,  45 => 19,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}