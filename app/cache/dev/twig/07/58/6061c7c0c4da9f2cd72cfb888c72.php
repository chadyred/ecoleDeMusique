<?php

/* ::base.html.twig */
class __TwigTemplate_07586061c7c0c4da9f2cd72cfb888c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1170 => 330,  1164 => 329,  1158 => 328,  1152 => 327,  1146 => 326,  1134 => 324,  1112 => 317,  1105 => 316,  1077 => 310,  1052 => 309,  1050 => 308,  1047 => 307,  1035 => 302,  1025 => 299,  1016 => 293,  1010 => 291,  1007 => 290,  1002 => 289,  1000 => 288,  990 => 282,  983 => 280,  980 => 276,  973 => 274,  970 => 273,  965 => 271,  957 => 267,  952 => 265,  934 => 254,  930 => 253,  921 => 250,  918 => 249,  910 => 245,  906 => 240,  903 => 239,  882 => 233,  876 => 231,  870 => 229,  864 => 227,  861 => 226,  858 => 225,  855 => 224,  850 => 222,  842 => 216,  839 => 215,  837 => 214,  834 => 213,  823 => 208,  821 => 207,  818 => 206,  810 => 202,  807 => 201,  794 => 195,  791 => 194,  789 => 193,  786 => 192,  778 => 188,  773 => 186,  770 => 185,  762 => 181,  759 => 180,  757 => 179,  754 => 178,  746 => 174,  741 => 172,  733 => 168,  728 => 166,  725 => 165,  717 => 161,  714 => 160,  712 => 159,  710 => 158,  700 => 152,  687 => 150,  676 => 146,  673 => 145,  655 => 134,  649 => 132,  641 => 129,  628 => 122,  620 => 120,  601 => 114,  585 => 110,  580 => 108,  564 => 104,  562 => 103,  530 => 96,  495 => 89,  493 => 88,  478 => 81,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  448 => 71,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  407 => 59,  393 => 52,  353 => 36,  290 => 14,  278 => 8,  272 => 6,  250 => 326,  248 => 325,  246 => 324,  236 => 314,  260 => 331,  257 => 234,  20 => 1,  776 => 466,  768 => 463,  726 => 456,  690 => 453,  686 => 451,  682 => 450,  678 => 147,  674 => 448,  670 => 447,  666 => 446,  663 => 138,  661 => 136,  633 => 442,  613 => 435,  609 => 117,  606 => 116,  604 => 115,  590 => 431,  540 => 398,  520 => 396,  518 => 395,  513 => 90,  508 => 391,  385 => 159,  379 => 47,  377 => 157,  354 => 150,  342 => 32,  311 => 20,  308 => 129,  240 => 219,  356 => 37,  343 => 159,  335 => 157,  323 => 24,  309 => 141,  302 => 137,  56 => 12,  349 => 140,  333 => 141,  314 => 21,  303 => 114,  286 => 112,  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 331,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 325,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 314,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 301,  1018 => 398,  1006 => 397,  999 => 396,  997 => 287,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 260,  942 => 259,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 251,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 223,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 209,  820 => 340,  812 => 339,  805 => 200,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 469,  787 => 468,  781 => 331,  775 => 187,  767 => 327,  758 => 325,  755 => 462,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 167,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 151,  689 => 304,  683 => 303,  677 => 300,  662 => 137,  660 => 135,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 130,  638 => 291,  632 => 123,  624 => 121,  617 => 286,  615 => 119,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 401,  556 => 270,  551 => 267,  548 => 266,  542 => 98,  536 => 262,  528 => 261,  521 => 92,  519 => 259,  516 => 91,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 48,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 151,  351 => 210,  330 => 140,  320 => 135,  318 => 124,  271 => 190,  417 => 233,  387 => 50,  367 => 42,  350 => 35,  345 => 33,  341 => 147,  339 => 145,  327 => 139,  310 => 134,  306 => 128,  294 => 123,  279 => 192,  275 => 111,  235 => 103,  107 => 37,  141 => 171,  161 => 198,  285 => 136,  281 => 125,  267 => 4,  256 => 329,  226 => 299,  218 => 287,  213 => 271,  207 => 95,  203 => 77,  187 => 238,  175 => 66,  135 => 47,  86 => 46,  283 => 177,  277 => 174,  258 => 330,  253 => 161,  233 => 313,  217 => 83,  214 => 82,  210 => 270,  206 => 78,  199 => 88,  195 => 249,  168 => 130,  69 => 11,  238 => 320,  228 => 306,  208 => 265,  173 => 85,  146 => 177,  134 => 157,  113 => 40,  99 => 68,  181 => 87,  126 => 144,  243 => 106,  223 => 298,  209 => 77,  166 => 205,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 323,  1116 => 425,  1109 => 421,  1103 => 315,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 300,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 275,  968 => 272,  961 => 380,  955 => 266,  951 => 377,  939 => 376,  931 => 373,  926 => 252,  914 => 362,  908 => 241,  902 => 365,  898 => 358,  886 => 357,  879 => 232,  873 => 230,  867 => 228,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 199,  796 => 331,  792 => 330,  780 => 329,  772 => 465,  766 => 323,  760 => 326,  756 => 320,  744 => 173,  736 => 319,  729 => 457,  723 => 310,  719 => 309,  707 => 157,  699 => 310,  688 => 297,  681 => 148,  675 => 292,  669 => 299,  665 => 139,  653 => 288,  646 => 131,  640 => 283,  634 => 281,  630 => 280,  618 => 437,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 109,  575 => 275,  569 => 264,  563 => 272,  559 => 102,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 93,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  440 => 70,  434 => 237,  430 => 218,  418 => 217,  405 => 58,  395 => 209,  370 => 156,  360 => 152,  348 => 199,  340 => 158,  334 => 27,  328 => 204,  324 => 190,  304 => 184,  288 => 129,  255 => 99,  251 => 98,  239 => 105,  231 => 307,  224 => 152,  219 => 84,  188 => 66,  167 => 64,  110 => 38,  524 => 309,  506 => 255,  500 => 294,  490 => 87,  477 => 282,  465 => 273,  450 => 72,  438 => 69,  432 => 254,  426 => 250,  412 => 60,  408 => 243,  402 => 57,  398 => 239,  390 => 219,  384 => 49,  378 => 229,  372 => 226,  366 => 155,  331 => 203,  325 => 138,  316 => 22,  307 => 188,  298 => 183,  280 => 114,  274 => 121,  261 => 108,  254 => 328,  241 => 322,  234 => 89,  227 => 141,  202 => 262,  193 => 68,  179 => 221,  90 => 27,  53 => 5,  49 => 15,  62 => 14,  192 => 248,  190 => 239,  174 => 213,  170 => 60,  156 => 191,  148 => 74,  140 => 42,  128 => 45,  124 => 129,  77 => 21,  496 => 243,  481 => 82,  475 => 80,  468 => 238,  463 => 235,  461 => 243,  458 => 242,  451 => 229,  446 => 238,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 167,  399 => 210,  396 => 222,  388 => 160,  383 => 164,  381 => 190,  376 => 204,  369 => 43,  364 => 41,  362 => 153,  359 => 219,  352 => 149,  347 => 34,  344 => 147,  337 => 206,  332 => 163,  329 => 26,  321 => 23,  315 => 200,  312 => 199,  305 => 150,  300 => 195,  297 => 144,  284 => 136,  269 => 5,  264 => 3,  262 => 236,  259 => 109,  252 => 327,  247 => 97,  244 => 323,  237 => 86,  232 => 107,  229 => 154,  221 => 83,  200 => 259,  197 => 258,  182 => 222,  176 => 219,  169 => 206,  164 => 199,  137 => 60,  97 => 23,  40 => 8,  23 => 1,  301 => 125,  295 => 16,  292 => 15,  289 => 119,  287 => 13,  282 => 115,  276 => 248,  273 => 110,  270 => 101,  268 => 107,  263 => 123,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 296,  215 => 286,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  109 => 102,  103 => 25,  82 => 26,  65 => 17,  38 => 5,  158 => 56,  150 => 75,  144 => 172,  142 => 72,  129 => 145,  125 => 44,  117 => 44,  112 => 39,  87 => 26,  67 => 16,  61 => 2,  47 => 12,  105 => 41,  93 => 28,  76 => 31,  72 => 18,  68 => 30,  91 => 56,  84 => 41,  28 => 3,  24 => 2,  94 => 57,  88 => 30,  79 => 32,  59 => 6,  44 => 11,  31 => 5,  27 => 5,  25 => 29,  21 => 1,  225 => 88,  216 => 150,  212 => 78,  205 => 264,  201 => 83,  196 => 92,  194 => 149,  191 => 70,  189 => 78,  186 => 103,  180 => 134,  172 => 64,  159 => 192,  154 => 185,  147 => 58,  132 => 47,  127 => 52,  121 => 128,  118 => 29,  114 => 108,  104 => 87,  100 => 36,  78 => 25,  75 => 24,  71 => 19,  58 => 14,  34 => 5,  26 => 3,  19 => 1,  70 => 20,  63 => 16,  46 => 10,  22 => 2,  163 => 81,  155 => 94,  152 => 63,  149 => 178,  145 => 57,  139 => 165,  131 => 156,  123 => 35,  120 => 50,  115 => 40,  106 => 101,  101 => 86,  96 => 67,  83 => 24,  80 => 32,  74 => 20,  66 => 12,  55 => 13,  52 => 13,  50 => 12,  43 => 7,  41 => 7,  37 => 7,  35 => 7,  32 => 4,  29 => 5,  184 => 236,  178 => 86,  171 => 212,  165 => 54,  162 => 53,  157 => 64,  153 => 62,  151 => 184,  143 => 43,  138 => 55,  136 => 164,  133 => 31,  130 => 39,  122 => 51,  119 => 114,  116 => 113,  111 => 107,  108 => 33,  102 => 30,  98 => 29,  95 => 30,  92 => 31,  89 => 47,  85 => 29,  81 => 40,  73 => 20,  64 => 10,  60 => 20,  57 => 14,  54 => 13,  51 => 11,  48 => 11,  45 => 8,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
