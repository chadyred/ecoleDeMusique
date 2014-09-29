<?php

/* EcoleDeMusiqueWelcomeBundle:Mailing:index.html.twig */
class __TwigTemplate_9ded9c00290a72653244830407af351e extends Twig_Template
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
        echo "        &#65;ccueil
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        &#65;ccueil
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " 
          <div id=\"header\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Mailing</h1>
\t\t</div>
\t</div>
        
        <div id=\"page\">
                       <div id=\"content\">
                            <div class=\"post\">
                                    <div class=\"entry\">
                                        <h3>Nouveau Message</h3>\t\t\t
                                    </div>
                                    <form id=\"form_search\" action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mailing_search"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
                                        ";
        // line 26
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activiteEleve"), 'label', array("label" => "Activité : "));
        echo "
                                        ";
        // line 28
        echo "                                        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activiteEleve"), 'errors');
        echo "
                                        ";
        // line 30
        echo "  \t\t\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "activiteEleve"), 'widget');
        echo "
                                        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
\t\t\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo " 
                                       <input type=\"submit\" value=\"Sélectionner\" />
                                    </form>
                                    <div><h3>Messages envoyés</h3></div>
                                    <div class=\"liste_mailing\">
                                    <table>
                                        <th>Titre</th><th> Messages envoyés</th><th>Activité(s) concernée(s)</th>
                                        <th>Supprimer</th>
                                        ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_mailing"]) ? $context["liste_mailing"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mailing"]) {
            // line 41
            echo "                                        <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailing"]) ? $context["mailing"] : null), "getTitre", array(), "method"), "html", null, true);
            echo "</td> <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailing"]) ? $context["mailing"] : null), "getMessage", array(), "method"), "html", null, true);
            echo "</td>  
                                            ";
            // line 42
            $context["activite_eleves"] = $this->getAttribute((isset($context["mailing"]) ? $context["mailing"] : null), "getActiviteEleves", array(), "method");
            // line 43
            echo "                                                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailing"]) ? $context["mailing"] : null), "getNomActivite", array(), "method"), "html", null, true);
            echo "</td>
                                                <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mailing_delete", array("id" => $this->getAttribute((isset($context["mailing"]) ? $context["mailing"] : null), "getId", array(), "method"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ecoledemusiquewelcome/images/recycle-bin.png"), "html", null, true);
            echo "\"></a></td></tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailing'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "                                    </table>
                                    </div>
                            </div>                                  
                            <div style=\"clear: both;\">&nbsp;</div>
                            
                     </div>
\t\t\t<!-- end #content -->
\t\t\t<div style=\"clear: both;\">&nbsp;</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Mailing:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  139 => 62,  86 => 36,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 151,  214 => 150,  210 => 148,  206 => 146,  199 => 142,  195 => 140,  168 => 130,  101 => 40,  69 => 26,  238 => 155,  228 => 153,  208 => 148,  145 => 65,  173 => 87,  146 => 70,  134 => 60,  113 => 57,  99 => 40,  181 => 79,  155 => 68,  126 => 50,  37 => 6,  243 => 157,  223 => 105,  209 => 97,  166 => 82,  131 => 51,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 160,  239 => 168,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 141,  110 => 42,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 142,  52 => 18,  90 => 30,  53 => 20,  49 => 19,  80 => 39,  62 => 23,  192 => 84,  190 => 144,  174 => 111,  170 => 74,  156 => 68,  148 => 64,  140 => 57,  128 => 51,  124 => 57,  77 => 29,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 154,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 71,  164 => 69,  152 => 63,  137 => 59,  115 => 50,  97 => 35,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 169,  268 => 174,  263 => 80,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 131,  204 => 145,  198 => 63,  185 => 114,  183 => 143,  177 => 88,  160 => 63,  149 => 66,  123 => 47,  120 => 54,  109 => 56,  103 => 41,  82 => 33,  65 => 23,  38 => 6,  158 => 77,  150 => 72,  144 => 58,  142 => 50,  129 => 50,  125 => 44,  117 => 44,  112 => 43,  106 => 42,  87 => 30,  70 => 20,  67 => 25,  61 => 22,  47 => 9,  105 => 44,  96 => 36,  93 => 46,  83 => 39,  76 => 35,  72 => 27,  68 => 26,  50 => 10,  91 => 38,  84 => 31,  74 => 28,  66 => 48,  55 => 23,  28 => 3,  24 => 3,  94 => 36,  88 => 32,  79 => 30,  59 => 14,  43 => 18,  46 => 11,  44 => 19,  31 => 2,  27 => 7,  32 => 4,  25 => 4,  35 => 3,  29 => 3,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 78,  189 => 137,  186 => 147,  180 => 134,  172 => 131,  163 => 140,  159 => 69,  154 => 59,  147 => 112,  132 => 62,  127 => 46,  121 => 48,  118 => 54,  114 => 43,  104 => 39,  100 => 37,  78 => 30,  75 => 27,  71 => 26,  63 => 24,  58 => 18,  41 => 7,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 135,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 53,  130 => 47,  122 => 54,  119 => 36,  116 => 46,  111 => 44,  108 => 31,  102 => 30,  98 => 42,  95 => 41,  92 => 38,  89 => 34,  85 => 34,  81 => 30,  73 => 28,  64 => 25,  60 => 23,  57 => 21,  54 => 20,  51 => 9,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
