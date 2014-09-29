<?php

/* EcoleDeMusiqueWelcomeBundle:Famille:index.html.twig */
class __TwigTemplate_a64b0a706b6e20e01b2a17ca851ec970 extends Twig_Template
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
        echo "Etat Civil
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "Etat Civil
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo "  
<style>

    table
    {
        border-collapse:collapse;   
    }
    .records_list tr:hover
    {
        background: #DCDCDC;
    }       

    .colonneId
    {
        width: 50px;
    }

    .colonneQf
    {        
        width: 100px; 
    }
</style>



<div id=\"header\">
    <div id=\"nompage\">
        <h1>Familles</h1>
    </div>
</div>

<div id=\"page\">
    <div>
        <div class=\"post\">
            <p>Liste des familles</p>
            <br />
            <div class=\"entry\">

                <table>
                    <thead>
                        <tr>
                            <th class=\"colonneId\">Id</th>
                            <th class=\"colonneQf\">Qf</th>
                            <th class=\"colonneMembre\">Membres de la famille</th>
                            <th class=\"colonneMembre\">Responsable</th>
                            <th class=\"\"></th>
                            <!--  <th>Actions</th> -->
                        </tr>
                </table>
                <div style=\"max-height:750px;overflow-y: scroll;\">
                    <table class=\"records_list\">
                                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["tabeuh"]) {
            // line 61
            echo "                        <tr>
                            <td class=\"colonneId\"><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_membre", array("id" => $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "id"), "html", null, true);
            echo "</a></td>
                            <td class=\"colonneQf\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "qf"), "html", null, true);
            echo "</td>
                            <td class=\"colonneMembre\"> ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "noms"), "html", null, true);
            echo "</td>
                            <td class=\"colonneMembre\"> ";
            // line 65
            if ($this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "nom")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "nom"), "html", null, true);
            }
            echo "</td>
                            <td class=\"colonneMembre\"> ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "prenom"), "html", null, true);
            echo "</td>                                                
                            <td>
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_edit", array("id" => $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/crayon.png"), "html", null, true);
            echo "\"></a>

                            </td>
                            <td>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_delete", array("id" => $this->getAttribute((isset($context["tabeuh"]) ? $context["tabeuh"] : $this->getContext($context, "tabeuh")), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('Êtes vous sur de vouloir supprimer cette famille?')\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/recycle-bin.png"), "html", null, true);
            echo "\"></a>
                            </td>
                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tabeuh'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 76
        echo "                        </tbody>
                    </table>
                </div>

                <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("famille_new"), "html", null, true);
        echo "\">
                    Nouvelle Famille
                </a>

            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Famille:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 139,  218 => 136,  213 => 134,  207 => 133,  203 => 132,  187 => 128,  175 => 125,  135 => 52,  86 => 37,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 151,  214 => 150,  210 => 148,  206 => 146,  199 => 131,  195 => 130,  168 => 130,  69 => 25,  238 => 155,  228 => 153,  208 => 148,  173 => 87,  146 => 70,  134 => 60,  113 => 57,  99 => 43,  181 => 79,  126 => 50,  243 => 157,  223 => 105,  209 => 97,  166 => 82,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 160,  239 => 144,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 141,  110 => 42,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 126,  90 => 38,  53 => 20,  49 => 19,  62 => 23,  192 => 84,  190 => 144,  174 => 111,  170 => 74,  156 => 68,  148 => 64,  140 => 57,  128 => 66,  124 => 57,  77 => 28,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 154,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 71,  164 => 69,  137 => 60,  97 => 35,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 169,  268 => 174,  263 => 80,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 131,  204 => 145,  198 => 63,  185 => 114,  183 => 127,  177 => 88,  160 => 80,  109 => 51,  103 => 46,  82 => 33,  65 => 26,  38 => 6,  158 => 121,  150 => 72,  144 => 58,  142 => 72,  129 => 62,  125 => 44,  117 => 48,  112 => 43,  87 => 35,  67 => 30,  61 => 20,  47 => 17,  105 => 61,  93 => 39,  76 => 34,  72 => 31,  68 => 26,  91 => 38,  84 => 36,  28 => 3,  24 => 3,  94 => 39,  88 => 32,  79 => 35,  59 => 14,  44 => 18,  31 => 11,  27 => 7,  25 => 4,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 129,  189 => 137,  186 => 147,  180 => 134,  172 => 131,  159 => 69,  154 => 76,  147 => 112,  132 => 98,  127 => 46,  121 => 48,  118 => 64,  114 => 63,  104 => 39,  100 => 37,  78 => 30,  75 => 26,  71 => 28,  58 => 18,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 24,  46 => 9,  22 => 2,  163 => 140,  155 => 68,  152 => 63,  149 => 66,  145 => 65,  139 => 62,  131 => 51,  123 => 59,  120 => 54,  115 => 54,  106 => 42,  101 => 60,  96 => 41,  83 => 36,  80 => 35,  74 => 28,  66 => 20,  55 => 21,  52 => 23,  50 => 10,  43 => 18,  41 => 7,  37 => 7,  35 => 12,  32 => 4,  29 => 3,  184 => 135,  178 => 71,  171 => 124,  165 => 123,  162 => 122,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 68,  130 => 55,  122 => 65,  119 => 36,  116 => 46,  111 => 45,  108 => 62,  102 => 41,  98 => 40,  95 => 40,  92 => 38,  89 => 34,  85 => 36,  81 => 30,  73 => 28,  64 => 29,  60 => 28,  57 => 25,  54 => 20,  51 => 9,  48 => 17,  45 => 19,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
