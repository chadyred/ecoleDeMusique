<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_56ec6fd2236b35eb1d88b3d9ab1f1360 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  776 => 466,  768 => 463,  726 => 456,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  633 => 442,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  540 => 398,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  356 => 163,  343 => 159,  335 => 157,  323 => 149,  309 => 141,  302 => 137,  56 => 13,  260 => 235,  257 => 234,  240 => 219,  20 => 1,  226 => 139,  218 => 136,  207 => 95,  187 => 128,  285 => 136,  267 => 124,  256 => 119,  203 => 77,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  214 => 82,  210 => 94,  206 => 78,  195 => 130,  168 => 130,  161 => 80,  238 => 97,  228 => 89,  208 => 148,  173 => 85,  146 => 60,  134 => 54,  223 => 105,  209 => 73,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  388 => 194,  381 => 190,  369 => 183,  362 => 179,  347 => 160,  332 => 163,  329 => 162,  321 => 157,  305 => 150,  297 => 144,  284 => 136,  264 => 165,  262 => 236,  259 => 109,  252 => 138,  244 => 114,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  182 => 64,  164 => 63,  97 => 45,  53 => 38,  49 => 13,  135 => 47,  62 => 27,  1263 => 466,  1257 => 465,  1243 => 461,  1236 => 460,  1234 => 459,  1231 => 458,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1191 => 448,  1186 => 446,  1181 => 445,  1179 => 444,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 469,  787 => 468,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 462,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 443,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 401,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  506 => 255,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 233,  452 => 241,  427 => 236,  422 => 234,  415 => 232,  402 => 223,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 153,  300 => 145,  281 => 125,  271 => 190,  269 => 127,  166 => 82,  141 => 91,  349 => 140,  333 => 156,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 156,  175 => 125,  126 => 61,  417 => 233,  404 => 203,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 112,  235 => 103,  217 => 83,  213 => 134,  199 => 131,  181 => 87,  113 => 40,  107 => 40,  137 => 59,  86 => 29,  99 => 58,  1328 => 25,  1322 => 22,  1316 => 19,  1312 => 18,  1308 => 16,  1305 => 15,  1297 => 522,  1276 => 507,  1270 => 504,  1266 => 467,  1251 => 462,  1245 => 488,  1241 => 487,  1235 => 486,  1217 => 471,  1213 => 470,  1201 => 460,  1189 => 447,  1183 => 451,  1176 => 443,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 465,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 457,  723 => 310,  719 => 309,  707 => 454,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 437,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 397,  511 => 257,  503 => 254,  496 => 258,  490 => 241,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 226,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 207,  405 => 224,  399 => 200,  395 => 209,  383 => 191,  376 => 187,  370 => 215,  364 => 180,  360 => 212,  348 => 199,  340 => 158,  334 => 193,  328 => 204,  324 => 190,  312 => 152,  304 => 184,  288 => 129,  255 => 99,  251 => 160,  239 => 144,  231 => 165,  224 => 152,  219 => 104,  197 => 88,  188 => 69,  176 => 61,  167 => 64,  479 => 284,  461 => 234,  455 => 269,  451 => 229,  445 => 267,  432 => 257,  425 => 235,  413 => 246,  407 => 243,  400 => 239,  396 => 199,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 178,  352 => 174,  344 => 170,  337 => 166,  331 => 203,  325 => 150,  316 => 145,  307 => 188,  298 => 183,  280 => 170,  274 => 121,  261 => 108,  254 => 156,  247 => 115,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 126,  169 => 71,  110 => 42,  90 => 41,  23 => 3,  192 => 72,  190 => 89,  174 => 67,  170 => 60,  156 => 77,  148 => 74,  140 => 49,  128 => 45,  124 => 56,  77 => 24,  40 => 8,  69 => 20,  301 => 149,  295 => 133,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 248,  273 => 85,  270 => 169,  268 => 174,  263 => 123,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 127,  177 => 99,  160 => 59,  109 => 51,  103 => 59,  82 => 37,  65 => 22,  38 => 7,  158 => 56,  150 => 75,  144 => 73,  142 => 72,  129 => 50,  125 => 44,  117 => 44,  112 => 52,  87 => 40,  67 => 23,  61 => 18,  47 => 11,  28 => 3,  91 => 35,  84 => 33,  44 => 10,  25 => 29,  225 => 88,  216 => 105,  212 => 149,  205 => 71,  201 => 83,  196 => 92,  194 => 149,  191 => 70,  189 => 82,  186 => 103,  180 => 134,  172 => 64,  159 => 95,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 43,  104 => 39,  100 => 35,  78 => 26,  75 => 23,  71 => 21,  34 => 5,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  58 => 25,  27 => 3,  94 => 33,  88 => 41,  79 => 35,  59 => 21,  31 => 4,  26 => 3,  21 => 2,  24 => 3,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 94,  152 => 63,  149 => 66,  145 => 57,  139 => 71,  131 => 46,  123 => 33,  120 => 50,  115 => 44,  106 => 60,  101 => 45,  96 => 35,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 24,  52 => 14,  50 => 22,  43 => 11,  41 => 8,  37 => 6,  35 => 6,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 122,  157 => 65,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 56,  133 => 31,  130 => 53,  122 => 51,  119 => 57,  116 => 41,  111 => 45,  108 => 41,  102 => 34,  98 => 32,  95 => 43,  92 => 43,  89 => 29,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 13,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
