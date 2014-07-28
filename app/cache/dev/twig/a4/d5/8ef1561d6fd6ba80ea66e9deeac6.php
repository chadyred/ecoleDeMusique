<?php

/* EcoleDeMusiqueWelcomeBundle:Eleve:show.html.twig */
class __TwigTemplate_a4d58ef1561d6fd6ba80ea66e9deeac6 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "     Etat Civil 
";
    }

    // line 7
    public function block_titlePage($context, array $blocks = array())
    {
        // line 8
        echo "          Etat Civil 
";
    }

    // line 10
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
             <h2 class=\"title\">Fiche Individuelle de <strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
        echo "</strong></h2>
           <div class=\"post\">
             <div class=\"entry\">
                 <br />
                    <table class=\"record_properties\">
                        <tbody>
                            <tr>
                                <th>Nom</th>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Prenom</th>
                                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenom"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Adresse</th>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresse"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Codepostal</th>
                                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codePostal"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Civilite</th>
                                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "civilite"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Teleleve</th>
                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telEleve"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Telmere</th>
                                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telMere"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Telpere</th>
                                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telPere"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Datedenaissance</th>
                                <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeNaissance"), "d-m-Y"), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Mail</th>
                                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mail"), "html", null, true);
        echo "</td>
                            </tr>
                           <tr>
                               <th>&nbsp;</th>
                               <td>&nbsp;</td>
                            </tr>
                            
                            ";
        // line 69
        if ((!(null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "regie")))) {
            // line 70
            echo "                                    <tr>
                                        <th>remise</th>
                                        <td>";
            // line 72
            echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "regie"), "remise")), "html", null, true);
            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>Somme Total à payer </th>
                                       <td> 
                                               <strong> ";
            // line 77
            echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "regie"), "sommeAvecRemise")), "html", null, true);
            echo "</strong>
                                       </td> 
                                    </tr>
                            
                             ";
        }
        // line 82
        echo "                            
                            
                        </tbody>
                    </table>
                 <br />
                            <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve"), "html", null, true);
        echo "\"> Liste des élèves</a><br />
                     <!--       <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eleve_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\"> Editer ce profil</a> -->
                 </div>
            </div>
             
         </div>
          </div>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Eleve:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 87,  146 => 70,  134 => 62,  223 => 105,  209 => 97,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  451 => 229,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  388 => 194,  381 => 190,  369 => 183,  362 => 179,  347 => 171,  332 => 163,  329 => 162,  321 => 157,  305 => 148,  297 => 144,  284 => 136,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  244 => 114,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  182 => 79,  164 => 68,  97 => 32,  53 => 20,  49 => 19,  135 => 52,  62 => 27,  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 443,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 233,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 153,  300 => 145,  281 => 193,  271 => 190,  269 => 127,  166 => 82,  141 => 89,  349 => 140,  333 => 126,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 110,  175 => 66,  126 => 50,  417 => 233,  404 => 203,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 122,  235 => 103,  217 => 101,  213 => 100,  199 => 88,  181 => 86,  113 => 50,  107 => 40,  137 => 54,  86 => 35,  99 => 42,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 226,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 207,  405 => 224,  399 => 200,  395 => 209,  383 => 191,  376 => 187,  370 => 215,  364 => 180,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  312 => 152,  304 => 184,  288 => 194,  255 => 99,  251 => 98,  239 => 105,  231 => 165,  224 => 161,  219 => 104,  197 => 88,  188 => 148,  176 => 75,  167 => 141,  524 => 309,  506 => 255,  500 => 294,  496 => 258,  490 => 241,  477 => 282,  465 => 273,  461 => 234,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  420 => 212,  414 => 208,  412 => 245,  408 => 243,  402 => 223,  398 => 239,  396 => 199,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 178,  352 => 174,  344 => 170,  337 => 166,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 115,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 82,  169 => 71,  110 => 42,  90 => 36,  23 => 3,  192 => 89,  190 => 78,  174 => 111,  170 => 76,  156 => 68,  148 => 60,  140 => 61,  128 => 55,  124 => 53,  77 => 33,  40 => 12,  69 => 26,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 131,  273 => 85,  270 => 101,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 81,  204 => 95,  198 => 63,  185 => 114,  183 => 83,  177 => 88,  160 => 63,  109 => 45,  103 => 41,  82 => 33,  65 => 23,  38 => 7,  158 => 77,  150 => 72,  144 => 69,  142 => 50,  129 => 50,  125 => 61,  117 => 50,  112 => 47,  87 => 28,  67 => 22,  61 => 11,  47 => 9,  28 => 3,  91 => 20,  84 => 32,  44 => 6,  25 => 3,  225 => 96,  216 => 90,  212 => 96,  205 => 92,  201 => 83,  196 => 90,  194 => 149,  191 => 78,  189 => 83,  186 => 147,  180 => 144,  172 => 67,  159 => 66,  154 => 77,  147 => 59,  132 => 51,  127 => 58,  121 => 51,  118 => 54,  114 => 43,  104 => 44,  100 => 43,  78 => 30,  75 => 29,  71 => 26,  34 => 3,  105 => 44,  93 => 39,  76 => 34,  72 => 27,  68 => 25,  58 => 18,  27 => 7,  94 => 39,  88 => 44,  79 => 30,  59 => 24,  31 => 2,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 24,  63 => 25,  46 => 10,  22 => 2,  163 => 140,  155 => 50,  152 => 67,  149 => 51,  145 => 90,  139 => 45,  131 => 55,  123 => 59,  120 => 54,  115 => 41,  106 => 46,  101 => 40,  96 => 41,  83 => 38,  80 => 34,  74 => 26,  66 => 48,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 8,  37 => 6,  35 => 3,  32 => 4,  29 => 4,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 64,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 86,  130 => 55,  122 => 37,  119 => 60,  116 => 46,  111 => 44,  108 => 37,  102 => 44,  98 => 40,  95 => 38,  92 => 38,  89 => 27,  85 => 34,  81 => 30,  73 => 32,  64 => 23,  60 => 18,  57 => 21,  54 => 9,  51 => 8,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}
