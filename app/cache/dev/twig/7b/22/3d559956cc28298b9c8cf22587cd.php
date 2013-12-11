<?php

/* EcoleDeMusiqueWelcomeBundle:Archive:index.html.twig */
class __TwigTemplate_7b223d559956cc28298b9c8cf22587cd extends Twig_Template
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
        echo "      Archives 
";
    }

    // line 7
    public function block_titlePage($context, array $blocks = array())
    {
        // line 8
        echo "          Archives
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo " 
          <style>
        .colonneId
        {
                width:30px;
        }
       
        .colonneNom
        {
            width:140px;
        }
        
        .colonnePrenom
        {
          width:143px;
        }
              
         .colonneDatedenaissance
        {
            width:130px;
        }     
              
        .colonneCycleparcours
        {
             width:50px;
        }   
       
        .colonneIntru1
        {
            width:140px;
        }
        
        .colonneIntru2
        {
            width:140px;
        }
            
        .colonneActivite
        {
           width:200px; 
        }
       
              </style>
          
          
         <div id=\"header\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Archives</h1>
\t\t</div>
\t</div>
          <div id=\"page\">
                 <h2 class=\"title\">Liste des élèves archivés </h2>
                   <div class=\"post\" style=\"min-height:500px;\">
                        
                             <div class=\"entry\">
                               
                            <p>Liste des élèves Archivés</p>
                            <br />
          
          

                    <table class=\"records_list\">
                     
                            <tr>
                                <th class=\"colonneId\">Id</th>
                                <th class=\"colonneNom\">Nom</th>
                                <th class=\"colonnePrenom\">Prenom</th>
                                <th class=\"colonneDatedenaissance\">Datedenaissance</th>
                                <th class=\"colonneCycleparcours\">Cycle</th>
                                <th class=\"colonneIntru1\">Instru1</th>
                                <th class=\"colonneIntru2\">Instru2</th>
                                <th class=\"colonneActivite\">Anneeactivite</th>
                                <th>Interuptioncourannee</th>
                             <!--   <th>Actions</th> -->
                            </tr>
                    </table>
                    <div style=\"max-height:800px;overflow-y: scroll;\">
                    <table>
                        ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 89
            echo "                            <tr>
                                <td class=\"colonneId\"><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                                <td class=\"colonneNom\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
            echo "</td>
                                <td class=\"colonnePrenom\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
            echo "</td>
                                <td class=\"colonneDatedenaissance\">";
            // line 93
            if ($this->getAttribute($this->getContext($context, "entity"), "dateDeNaissance")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeNaissance"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                <td class=\"colonneCycleparcours\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cycle"), "html", null, true);
            echo "</td>
                                <td class=\"colonneIntru1\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "instru1"), "html", null, true);
            echo "</td>
                                <td class=\"colonneIntru2\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "instru2"), "html", null, true);
            echo "</td>
                                <td  class=\"colonneActivite\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "anneeActivite"), "html", null, true);
            echo "</td>
                                <td>";
            // line 98
            if ($this->getAttribute($this->getContext($context, "entity"), "interuptionCourannee")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "interuptionCourannee"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                <td><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes vous sur de vouloir supprimer cette archive ?')\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/recycle-bin.png"), "html", null, true);
            echo "\"/></a></td>
                               <!-- <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td> -->
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 112
        echo "        
                    </table>

                    <ul>
                        <li>
                            <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_new"), "html", null, true);
        echo "\">
                                Archiver un nouvel élève
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
        return "EcoleDeMusiqueWelcomeBundle:Archive:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  238 => 155,  228 => 153,  208 => 148,  173 => 87,  146 => 70,  134 => 62,  223 => 105,  209 => 97,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  388 => 194,  381 => 190,  369 => 183,  362 => 179,  347 => 171,  332 => 163,  329 => 162,  321 => 157,  305 => 148,  297 => 144,  284 => 136,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  244 => 114,  232 => 154,  229 => 106,  221 => 101,  200 => 146,  182 => 79,  164 => 68,  97 => 32,  53 => 20,  49 => 19,  135 => 90,  62 => 27,  1263 => 466,  1257 => 465,  1243 => 461,  1236 => 460,  1234 => 459,  1231 => 458,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1191 => 448,  1186 => 446,  1181 => 445,  1179 => 444,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  506 => 255,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 233,  452 => 241,  427 => 236,  422 => 234,  415 => 232,  402 => 223,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 153,  300 => 145,  281 => 193,  271 => 190,  269 => 127,  166 => 73,  141 => 91,  349 => 140,  333 => 126,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 110,  175 => 66,  126 => 54,  417 => 233,  404 => 203,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 157,  235 => 103,  217 => 101,  213 => 100,  199 => 88,  181 => 79,  113 => 57,  107 => 40,  137 => 59,  86 => 35,  99 => 42,  1328 => 25,  1322 => 22,  1316 => 19,  1312 => 18,  1308 => 16,  1305 => 15,  1297 => 522,  1276 => 507,  1270 => 504,  1266 => 467,  1251 => 462,  1245 => 488,  1241 => 487,  1235 => 486,  1217 => 471,  1213 => 470,  1201 => 460,  1189 => 447,  1183 => 451,  1176 => 443,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  496 => 258,  490 => 241,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 226,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 207,  405 => 224,  399 => 200,  395 => 209,  383 => 191,  376 => 187,  370 => 215,  364 => 180,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  312 => 152,  304 => 184,  288 => 194,  255 => 99,  251 => 160,  239 => 105,  231 => 165,  224 => 152,  219 => 104,  197 => 88,  188 => 83,  176 => 75,  167 => 97,  479 => 284,  461 => 234,  455 => 269,  451 => 229,  445 => 267,  432 => 257,  425 => 235,  413 => 246,  407 => 243,  400 => 239,  396 => 199,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 178,  352 => 174,  344 => 170,  337 => 166,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 115,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 142,  169 => 71,  110 => 50,  90 => 36,  23 => 3,  192 => 106,  190 => 144,  174 => 111,  170 => 74,  156 => 68,  148 => 64,  140 => 61,  128 => 88,  124 => 56,  77 => 33,  40 => 12,  69 => 31,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 131,  273 => 85,  270 => 101,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 117,  204 => 112,  198 => 63,  185 => 114,  183 => 143,  177 => 99,  160 => 63,  109 => 56,  103 => 41,  82 => 33,  65 => 23,  38 => 7,  158 => 77,  150 => 72,  144 => 63,  142 => 50,  129 => 50,  125 => 61,  117 => 50,  112 => 47,  87 => 44,  67 => 22,  61 => 11,  47 => 9,  28 => 3,  91 => 45,  84 => 32,  44 => 6,  25 => 3,  225 => 96,  216 => 105,  212 => 149,  205 => 92,  201 => 83,  196 => 145,  194 => 149,  191 => 78,  189 => 83,  186 => 103,  180 => 144,  172 => 67,  159 => 95,  154 => 77,  147 => 59,  132 => 89,  127 => 58,  121 => 51,  118 => 54,  114 => 43,  104 => 44,  100 => 43,  78 => 30,  75 => 29,  71 => 26,  34 => 11,  105 => 44,  93 => 46,  76 => 35,  72 => 27,  68 => 26,  58 => 18,  27 => 7,  94 => 46,  88 => 44,  79 => 31,  59 => 24,  31 => 2,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 24,  63 => 25,  46 => 10,  22 => 2,  163 => 96,  155 => 94,  152 => 67,  149 => 93,  145 => 92,  139 => 45,  131 => 55,  123 => 59,  120 => 54,  115 => 49,  106 => 49,  101 => 51,  96 => 41,  83 => 39,  80 => 34,  74 => 29,  66 => 48,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 8,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 80,  178 => 71,  171 => 98,  165 => 108,  162 => 67,  157 => 64,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 60,  133 => 58,  130 => 59,  122 => 53,  119 => 60,  116 => 46,  111 => 48,  108 => 37,  102 => 48,  98 => 47,  95 => 38,  92 => 38,  89 => 27,  85 => 34,  81 => 30,  73 => 32,  64 => 24,  60 => 18,  57 => 21,  54 => 9,  51 => 8,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}