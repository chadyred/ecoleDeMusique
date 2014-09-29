<?php

/* EcoleDeMusiqueWelcomeBundle:Eleve:show.html.twig */
class __TwigTemplate_5f6be201a1903dc0ffec1d5b4c63f58b extends Twig_Template
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
        return array (  173 => 87,  146 => 70,  134 => 62,  113 => 50,  99 => 42,  181 => 79,  126 => 54,  243 => 122,  223 => 105,  209 => 97,  166 => 82,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 169,  239 => 168,  231 => 165,  224 => 161,  219 => 104,  188 => 83,  167 => 141,  110 => 49,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 82,  90 => 38,  53 => 20,  49 => 19,  62 => 27,  192 => 84,  190 => 78,  174 => 111,  170 => 74,  156 => 68,  148 => 64,  140 => 61,  128 => 55,  124 => 57,  77 => 29,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 150,  182 => 79,  176 => 143,  169 => 109,  164 => 68,  137 => 59,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 84,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 131,  204 => 95,  198 => 63,  185 => 114,  183 => 83,  177 => 88,  160 => 63,  109 => 45,  103 => 34,  82 => 33,  65 => 23,  38 => 7,  158 => 77,  150 => 72,  144 => 69,  142 => 50,  129 => 50,  125 => 44,  117 => 50,  112 => 40,  87 => 36,  67 => 19,  61 => 22,  47 => 9,  105 => 44,  93 => 20,  76 => 30,  72 => 27,  68 => 26,  91 => 20,  84 => 32,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 31,  59 => 14,  44 => 19,  31 => 2,  27 => 7,  25 => 4,  21 => 1,  225 => 96,  216 => 105,  212 => 157,  205 => 153,  201 => 83,  196 => 90,  194 => 149,  191 => 78,  189 => 83,  186 => 147,  180 => 144,  172 => 67,  159 => 69,  154 => 59,  147 => 59,  132 => 62,  127 => 58,  121 => 51,  118 => 54,  114 => 43,  104 => 44,  100 => 43,  78 => 30,  75 => 29,  71 => 26,  58 => 18,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 19,  46 => 10,  22 => 2,  163 => 140,  155 => 68,  152 => 67,  149 => 51,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 54,  115 => 49,  106 => 46,  101 => 33,  96 => 41,  83 => 18,  80 => 39,  74 => 29,  66 => 48,  55 => 21,  52 => 18,  50 => 10,  43 => 18,  41 => 8,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 58,  130 => 47,  122 => 53,  119 => 36,  116 => 35,  111 => 48,  108 => 37,  102 => 30,  98 => 40,  95 => 41,  92 => 38,  89 => 27,  85 => 34,  81 => 30,  73 => 28,  64 => 25,  60 => 23,  57 => 21,  54 => 10,  51 => 9,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}
