<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_20769d5e4c3b579d3b2cc23f0f2d31f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("WebProfilerBundle:Profiler:header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear_fix\">
                <div id=\"collector_wrapper\">
                    <div id=\"collector_content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Profiler:searchBar", array("token" => ""), array());
        // line 38
        echo "                    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 235,  257 => 234,  20 => 1,  776 => 466,  768 => 463,  726 => 456,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  633 => 442,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  540 => 398,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  385 => 159,  379 => 158,  377 => 157,  354 => 150,  342 => 146,  311 => 130,  308 => 129,  240 => 219,  356 => 163,  343 => 159,  335 => 157,  323 => 149,  309 => 141,  302 => 137,  56 => 39,  349 => 140,  333 => 141,  314 => 131,  303 => 114,  286 => 112,  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 443,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 469,  787 => 468,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 462,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 443,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 401,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 151,  351 => 210,  330 => 140,  320 => 135,  318 => 124,  271 => 190,  417 => 233,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 145,  327 => 139,  310 => 134,  306 => 128,  294 => 123,  279 => 192,  275 => 111,  235 => 103,  107 => 27,  141 => 89,  161 => 80,  285 => 136,  281 => 125,  267 => 124,  256 => 119,  226 => 86,  218 => 136,  213 => 100,  207 => 95,  203 => 77,  187 => 128,  175 => 66,  135 => 47,  86 => 28,  283 => 177,  277 => 174,  258 => 103,  253 => 161,  233 => 155,  217 => 83,  214 => 82,  210 => 94,  206 => 78,  199 => 88,  195 => 130,  168 => 130,  69 => 20,  238 => 218,  228 => 87,  208 => 148,  173 => 85,  146 => 60,  134 => 54,  113 => 40,  99 => 43,  181 => 87,  126 => 61,  243 => 106,  223 => 105,  209 => 77,  166 => 82,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 465,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 457,  723 => 310,  719 => 309,  707 => 454,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 437,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 397,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  405 => 224,  395 => 209,  370 => 156,  360 => 152,  348 => 199,  340 => 158,  334 => 193,  328 => 204,  324 => 190,  304 => 184,  288 => 129,  255 => 99,  251 => 98,  239 => 105,  231 => 88,  224 => 152,  219 => 84,  188 => 66,  167 => 64,  110 => 39,  524 => 309,  506 => 255,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 223,  398 => 239,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 155,  331 => 203,  325 => 138,  316 => 145,  307 => 188,  298 => 183,  280 => 114,  274 => 121,  261 => 108,  254 => 101,  241 => 157,  234 => 89,  227 => 141,  202 => 73,  193 => 68,  179 => 126,  90 => 41,  53 => 38,  49 => 17,  62 => 25,  192 => 72,  190 => 89,  174 => 58,  170 => 60,  156 => 77,  148 => 74,  140 => 42,  128 => 45,  124 => 56,  77 => 18,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 243,  458 => 242,  451 => 229,  446 => 238,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 167,  399 => 210,  396 => 222,  388 => 160,  383 => 164,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 153,  359 => 219,  352 => 149,  347 => 160,  344 => 147,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 200,  312 => 199,  305 => 150,  300 => 195,  297 => 144,  284 => 136,  269 => 189,  264 => 105,  262 => 236,  259 => 109,  252 => 138,  247 => 97,  244 => 114,  237 => 86,  232 => 107,  229 => 154,  221 => 83,  200 => 146,  197 => 150,  182 => 69,  176 => 61,  169 => 56,  164 => 63,  137 => 60,  97 => 23,  40 => 8,  23 => 3,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 101,  268 => 107,  263 => 123,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 151,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  109 => 51,  103 => 25,  82 => 19,  65 => 22,  38 => 6,  158 => 56,  150 => 75,  144 => 73,  142 => 72,  129 => 62,  125 => 44,  117 => 44,  112 => 52,  87 => 33,  67 => 12,  61 => 18,  47 => 15,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  91 => 28,  84 => 23,  28 => 3,  24 => 2,  94 => 33,  88 => 20,  79 => 35,  59 => 21,  44 => 11,  31 => 4,  27 => 4,  25 => 29,  21 => 2,  225 => 88,  216 => 150,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 149,  191 => 70,  189 => 78,  186 => 103,  180 => 134,  172 => 64,  159 => 95,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 43,  104 => 37,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 3,  19 => 1,  70 => 13,  63 => 21,  46 => 34,  22 => 2,  163 => 81,  155 => 94,  152 => 63,  149 => 93,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 49,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 15,  43 => 11,  41 => 12,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 64,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 60,  133 => 31,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 45,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 11,  39 => 10,  36 => 9,  33 => 10,  30 => 7,);
    }
}