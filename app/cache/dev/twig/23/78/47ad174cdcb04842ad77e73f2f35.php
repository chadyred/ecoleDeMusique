<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig */
class __TwigTemplate_237847ad174cdcb04842ad77e73f2f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Paiement edit</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_update", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "edit_form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1328 => 25,  1322 => 22,  1316 => 19,  1312 => 18,  1308 => 16,  1305 => 15,  1297 => 522,  1276 => 507,  1270 => 504,  1266 => 503,  1251 => 491,  1245 => 488,  1241 => 487,  1235 => 486,  1217 => 471,  1213 => 470,  1201 => 460,  1189 => 454,  1183 => 451,  1176 => 447,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  496 => 243,  490 => 241,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  446 => 222,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  411 => 213,  405 => 212,  399 => 210,  395 => 209,  383 => 208,  376 => 204,  370 => 203,  364 => 201,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  312 => 189,  304 => 184,  288 => 180,  255 => 170,  251 => 169,  239 => 168,  231 => 165,  224 => 161,  219 => 159,  197 => 150,  188 => 148,  176 => 143,  167 => 141,  479 => 284,  461 => 272,  455 => 269,  451 => 268,  445 => 267,  432 => 257,  425 => 252,  413 => 246,  407 => 243,  400 => 239,  396 => 238,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 113,  169 => 109,  110 => 49,  90 => 38,  23 => 3,  192 => 79,  190 => 78,  174 => 111,  170 => 142,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 29,  40 => 12,  69 => 26,  301 => 100,  295 => 96,  292 => 181,  289 => 94,  287 => 174,  282 => 90,  276 => 179,  273 => 85,  270 => 84,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 70,  211 => 131,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 58,  160 => 63,  109 => 41,  103 => 34,  82 => 33,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 45,  125 => 44,  117 => 42,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  91 => 20,  84 => 19,  44 => 19,  25 => 3,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 77,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 59,  147 => 53,  132 => 62,  127 => 49,  121 => 45,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 37,  75 => 23,  71 => 19,  34 => 11,  105 => 24,  93 => 20,  76 => 30,  72 => 14,  68 => 25,  58 => 26,  27 => 7,  94 => 39,  88 => 27,  79 => 23,  59 => 14,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 19,  46 => 9,  22 => 2,  163 => 140,  155 => 50,  152 => 105,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 41,  83 => 18,  80 => 24,  74 => 54,  66 => 48,  55 => 21,  52 => 18,  50 => 10,  43 => 6,  41 => 15,  37 => 7,  35 => 3,  32 => 2,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 108,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 34,  95 => 41,  92 => 28,  89 => 19,  85 => 24,  81 => 30,  73 => 28,  64 => 15,  60 => 23,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
