<?php

/* EcoleDeMusiqueWelcomeBundle:Mailing:search.html.twig */
class __TwigTemplate_9600c24348f68de2bc1dd2bbe88223fe extends Twig_Template
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
        echo "        &#65;ccueil
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        &#65;ccueil
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " 
          <div id=\"headerCentre\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Mailing</h1>
\t\t</div>
\t</div>
        
        <div id=\"page\">
                       <div id=\"content\">
                            <div class=\"post\">
                                    <div  class=\"entryMail\">
                                        <p>Envoyer un e-mail aux élèves : </p>\t\t\t
                                    <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mailing_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                                        <div class=\"block-left\">
                                        ";
        // line 26
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nomActivite"), 'label', array("label" => "Activité(s) choisie(s): "));
        echo "
                                        ";
        // line 28
        echo "                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nomActivite"), 'errors');
        echo "
                                        ";
        // line 30
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nomActivite"), 'widget');
        echo " <br />
                                        ";
        // line 32
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activiteEleves"), 'label', array("label" => "Elève(s)* : "));
        echo "
                                        ";
        // line 34
        echo "                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activiteEleves"), 'errors');
        echo "
                                        ";
        // line 36
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "activiteEleves"), 'widget');
        echo "   <br />
                                        </div>
                                        <div class=\"block-right\">    
                                        ";
        // line 40
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'label', array("label" => "Titre* : "));
        echo "
                                        ";
        // line 42
        echo "                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'errors');
        echo "
                                        ";
        // line 44
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'widget');
        echo " <br />
                                        ";
        // line 46
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'label', array("label" => "Message : "));
        echo "
                                        ";
        // line 48
        echo "                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'errors');
        echo "
                                        ";
        // line 50
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'widget');
        echo " <br />
  \t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo " \t
                                        <input type=\"submit\" value=\"Envoyer\"/>
                                        </div>
                                    </form>
                                      
                            </div>                                  
                            <div style=\"clear: both;\">&nbsp; <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mailing"), "html", null, true);
        echo "\">Retour</a></div>
                     </div>
\t\t\t<div style=\"clear: both;\">&nbsp; * : Champs obligatoires</div>
                 </div>
            </div>
\t
    

";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Mailing:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  62 => 23,  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 443,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 242,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 200,  300 => 195,  281 => 193,  271 => 190,  269 => 189,  166 => 92,  141 => 89,  349 => 140,  333 => 126,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 86,  175 => 66,  126 => 50,  417 => 233,  404 => 167,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 106,  235 => 103,  217 => 101,  213 => 100,  199 => 88,  181 => 86,  113 => 59,  107 => 40,  137 => 60,  86 => 37,  99 => 43,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 238,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 213,  405 => 224,  399 => 210,  395 => 209,  383 => 164,  376 => 204,  370 => 215,  364 => 201,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  312 => 199,  304 => 184,  288 => 194,  255 => 99,  251 => 98,  239 => 105,  231 => 165,  224 => 161,  219 => 84,  197 => 150,  188 => 148,  176 => 143,  167 => 141,  524 => 309,  506 => 255,  500 => 294,  496 => 243,  490 => 241,  477 => 282,  465 => 273,  461 => 243,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  420 => 248,  414 => 246,  412 => 245,  408 => 243,  402 => 223,  398 => 239,  396 => 222,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 113,  169 => 79,  110 => 49,  90 => 40,  23 => 3,  192 => 79,  190 => 78,  174 => 111,  170 => 94,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 35,  40 => 12,  69 => 26,  301 => 100,  295 => 96,  292 => 181,  289 => 94,  287 => 174,  282 => 111,  276 => 191,  273 => 85,  270 => 101,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 83,  211 => 81,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 99,  160 => 63,  109 => 49,  103 => 34,  82 => 37,  65 => 31,  38 => 6,  158 => 58,  150 => 76,  144 => 58,  142 => 50,  129 => 62,  125 => 61,  117 => 48,  112 => 42,  87 => 28,  67 => 32,  61 => 21,  47 => 9,  28 => 3,  91 => 20,  84 => 32,  44 => 18,  25 => 3,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 78,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 77,  147 => 53,  132 => 62,  127 => 85,  121 => 48,  118 => 54,  114 => 43,  104 => 53,  100 => 43,  78 => 44,  75 => 33,  71 => 33,  34 => 11,  105 => 24,  93 => 39,  76 => 34,  72 => 33,  68 => 25,  58 => 19,  27 => 7,  94 => 36,  88 => 27,  79 => 30,  59 => 27,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 22,  46 => 11,  22 => 2,  163 => 140,  155 => 50,  152 => 105,  149 => 51,  145 => 90,  139 => 45,  131 => 51,  123 => 59,  120 => 46,  115 => 81,  106 => 42,  101 => 40,  96 => 41,  83 => 38,  80 => 35,  74 => 28,  66 => 48,  55 => 20,  52 => 18,  50 => 10,  43 => 6,  41 => 7,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 108,  162 => 57,  157 => 64,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 86,  130 => 55,  122 => 37,  119 => 60,  116 => 46,  111 => 44,  108 => 37,  102 => 44,  98 => 40,  95 => 38,  92 => 28,  89 => 34,  85 => 36,  81 => 30,  73 => 34,  64 => 29,  60 => 28,  57 => 22,  54 => 10,  51 => 22,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
