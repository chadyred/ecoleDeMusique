<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_057dd46e7c7144bc3292aba880662b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_logout"), "html", null, true);
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 140,  333 => 126,  314 => 123,  303 => 114,  286 => 112,  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 443,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  318 => 124,  271 => 190,  417 => 233,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  235 => 103,  107 => 40,  141 => 89,  161 => 73,  285 => 136,  281 => 193,  267 => 124,  256 => 119,  226 => 139,  218 => 136,  213 => 100,  207 => 133,  203 => 90,  187 => 128,  175 => 66,  135 => 90,  86 => 39,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 101,  214 => 95,  210 => 94,  206 => 146,  199 => 88,  195 => 130,  168 => 130,  69 => 32,  238 => 155,  228 => 106,  208 => 148,  173 => 87,  146 => 60,  134 => 60,  113 => 43,  99 => 43,  181 => 86,  126 => 54,  243 => 106,  223 => 105,  209 => 97,  166 => 92,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  405 => 224,  395 => 209,  370 => 215,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  304 => 184,  288 => 194,  255 => 99,  251 => 98,  239 => 105,  231 => 165,  224 => 152,  219 => 84,  188 => 83,  167 => 97,  110 => 50,  524 => 309,  506 => 255,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 223,  398 => 239,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 126,  90 => 40,  53 => 11,  49 => 13,  62 => 27,  192 => 106,  190 => 144,  174 => 76,  170 => 94,  156 => 68,  148 => 64,  140 => 61,  128 => 88,  124 => 56,  77 => 27,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 243,  458 => 242,  451 => 229,  446 => 238,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 167,  399 => 210,  396 => 222,  388 => 194,  383 => 164,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 200,  312 => 199,  305 => 150,  300 => 195,  297 => 144,  284 => 136,  269 => 189,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 86,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 79,  164 => 69,  137 => 60,  97 => 45,  40 => 6,  23 => 1,  301 => 149,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 111,  276 => 191,  273 => 85,  270 => 101,  268 => 174,  263 => 123,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 83,  211 => 81,  204 => 112,  198 => 63,  185 => 81,  183 => 127,  177 => 99,  160 => 80,  109 => 42,  103 => 46,  82 => 37,  65 => 23,  38 => 6,  158 => 66,  150 => 76,  144 => 58,  142 => 72,  129 => 62,  125 => 61,  117 => 44,  112 => 47,  87 => 44,  67 => 32,  61 => 22,  47 => 17,  105 => 41,  93 => 46,  76 => 35,  72 => 25,  68 => 21,  91 => 45,  84 => 33,  28 => 3,  24 => 3,  94 => 33,  88 => 41,  79 => 26,  59 => 13,  44 => 18,  31 => 4,  27 => 7,  25 => 29,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 129,  189 => 78,  186 => 103,  180 => 134,  172 => 131,  159 => 95,  154 => 77,  147 => 112,  132 => 89,  127 => 85,  121 => 45,  118 => 29,  114 => 43,  104 => 53,  100 => 43,  78 => 44,  75 => 33,  71 => 34,  58 => 17,  34 => 11,  26 => 9,  19 => 1,  70 => 22,  63 => 19,  46 => 10,  22 => 2,  163 => 96,  155 => 94,  152 => 63,  149 => 93,  145 => 57,  139 => 62,  131 => 62,  123 => 33,  120 => 54,  115 => 28,  106 => 49,  101 => 39,  96 => 37,  83 => 36,  80 => 28,  74 => 24,  66 => 20,  55 => 23,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  37 => 5,  35 => 5,  32 => 4,  29 => 5,  184 => 135,  178 => 77,  171 => 98,  165 => 123,  162 => 67,  157 => 64,  153 => 63,  151 => 52,  143 => 40,  138 => 65,  136 => 60,  133 => 31,  130 => 30,  122 => 65,  119 => 60,  116 => 48,  111 => 45,  108 => 62,  102 => 47,  98 => 47,  95 => 38,  92 => 43,  89 => 31,  85 => 29,  81 => 30,  73 => 34,  64 => 29,  60 => 28,  57 => 12,  54 => 20,  51 => 22,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
