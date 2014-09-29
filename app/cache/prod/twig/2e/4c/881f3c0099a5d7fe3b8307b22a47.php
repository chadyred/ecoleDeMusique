<?php

/* EcoleDeMusiqueWelcomeBundle:Archive:new.html.twig */
class __TwigTemplate_2e4c881f3c0099a5d7fe3b8307b22a47 extends Twig_Template
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
       <div id=\"header\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Archives</h1>
\t\t</div>
\t</div>
            <div id=\"page\">
                 <h2 class=\"title\">Liste des élèves pouvant être archivés </h2>
                   <div class=\"post\" style=\"min-height:500px;\">
                        
                             <div class=\"entry\">
                               
                            <p>Vous pouvez archiver ici l'élève de votre choix en cliquant sur le bouton \"Archiver\"
                            <br />
                            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_create_all"), "html", null, true);
        echo "\">Archiver tous avec Renouvellement</a>
                            
                            
                            </p>
                            <br />
                                <table class=\"records_list\" cellpadding=0 cellspacing=0>
                                    
                                    
                                    <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Année Interompue</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    
                                    
                                    
                                    ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                                                                      <tr>
                                                                          <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idEleve"), "html", null, true);
            echo "</td>
                                                                          <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nom"), "html", null, true);
            echo "</td>
                                                                          <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prenom"), "html", null, true);
            echo "</td>
                                                                          <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "interupt"), "html", null, true);
            echo "</td>
                                                                          <td><a href=\"#box";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idEleve"), "html", null, true);
            echo "\" rel=\"superbox[content]\">Archiver</a></td>
                                                                      </tr>
                                           
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "                                </table>
                            <br />
                            <strong><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive"), "html", null, true);
        echo "\">Afficher la liste des élèves archivés</a></strong>
                           
                                 
                                 ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "                        
                                        <div class=\"box-content\" id=\"box";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idEleve"), "html", null, true);
            echo "\" name=\"form\">
                                             <form action=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archive_create"), "html", null, true);
            echo "\" method=\"post\" >
                                   <strong> Renouvellement de l'inscription pour l'année suivant ?</strong><br />
                                                 <input type=\"radio\" name=\"re\" value=\"oui\">oui<br>
                                                 <input type=\"radio\" name=\"re\" value=\"non\">non<br>
                                                 
                                                 
                                                  <input type=\"hidden\" name=\"idEleve\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "idEleve"), "html", null, true);
            echo "\">
                                                  <button type=\"submit\">Archiver !</button>        
                                         </form>

                                       </div>    
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 73
        echo "                                  </div>
                             </div>
                       </div>
            
      ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Archive:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 73,  285 => 136,  281 => 135,  267 => 124,  256 => 119,  226 => 139,  218 => 136,  213 => 134,  207 => 133,  203 => 90,  187 => 128,  175 => 125,  135 => 52,  139 => 62,  86 => 35,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 151,  214 => 95,  210 => 94,  206 => 146,  199 => 89,  195 => 130,  168 => 130,  101 => 39,  69 => 25,  238 => 155,  228 => 106,  208 => 148,  145 => 65,  173 => 87,  146 => 60,  134 => 60,  113 => 57,  99 => 43,  181 => 79,  155 => 68,  126 => 50,  37 => 6,  243 => 112,  223 => 105,  209 => 97,  166 => 82,  131 => 58,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 160,  239 => 111,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 141,  110 => 50,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 126,  52 => 18,  90 => 36,  53 => 20,  49 => 19,  80 => 30,  62 => 23,  192 => 84,  190 => 144,  174 => 76,  170 => 74,  156 => 68,  148 => 64,  140 => 61,  128 => 54,  124 => 56,  77 => 33,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 150,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 71,  164 => 69,  152 => 63,  137 => 60,  115 => 54,  97 => 38,  40 => 12,  23 => 3,  301 => 149,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 169,  268 => 174,  263 => 123,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 131,  204 => 145,  198 => 63,  185 => 81,  183 => 127,  177 => 88,  160 => 80,  149 => 67,  123 => 46,  120 => 54,  109 => 44,  103 => 46,  82 => 33,  65 => 26,  38 => 7,  158 => 66,  150 => 61,  144 => 58,  142 => 72,  129 => 62,  125 => 44,  117 => 48,  112 => 47,  106 => 49,  87 => 44,  70 => 24,  67 => 22,  61 => 20,  47 => 17,  105 => 40,  96 => 37,  93 => 39,  83 => 33,  76 => 34,  72 => 25,  68 => 24,  50 => 10,  91 => 45,  84 => 33,  74 => 30,  66 => 20,  55 => 21,  28 => 3,  24 => 3,  94 => 46,  88 => 32,  79 => 35,  59 => 20,  43 => 18,  46 => 10,  44 => 18,  31 => 11,  27 => 7,  32 => 4,  25 => 4,  35 => 12,  29 => 4,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 129,  189 => 82,  186 => 147,  180 => 134,  172 => 131,  163 => 140,  159 => 69,  154 => 76,  147 => 112,  132 => 98,  127 => 46,  121 => 50,  118 => 64,  114 => 43,  104 => 42,  100 => 43,  78 => 31,  75 => 26,  71 => 27,  63 => 25,  58 => 18,  41 => 8,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 135,  178 => 77,  171 => 124,  165 => 123,  162 => 67,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 60,  133 => 56,  130 => 59,  122 => 65,  119 => 45,  116 => 48,  111 => 45,  108 => 62,  102 => 48,  98 => 47,  95 => 40,  92 => 36,  89 => 34,  85 => 32,  81 => 30,  73 => 32,  64 => 24,  60 => 18,  57 => 25,  54 => 20,  51 => 9,  48 => 17,  45 => 19,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}
