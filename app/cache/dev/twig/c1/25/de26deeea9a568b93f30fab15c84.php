<?php

/* EcoleDeMusiqueWelcomeBundle:Regie:simulation.html.twig */
class __TwigTemplate_c125de26deeea9a568b93f30fab15c84 extends Twig_Template
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
        echo "      Régie
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        Régie
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " 
        
        <div id=\"headerCentre\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Regie</h1>
\t\t</div>
\t</div>
  <div id=\"page\">
           <div id=\"content\">
                   <div class=\"post\">
                            <h2 class=\"title\">Simulation des tarifs </h2>
                                <p>Cette rubrique vous permet de simuler un tarif en fonction des différents critères influant. </p>
                            
                            
                                <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("regie_simulationApplication"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

                                 
                                        <div>
                                            
                                                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capv"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Capv :")) ? array() : array("label" => $_label_)));
        echo "
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "capv"), 'widget');
        echo "      
                                        </div>       
                                         <div>
                                            
                                                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ea"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Enfant/Adulte :")) ? array() : array("label" => $_label_)));
        echo "
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ea"), 'widget');
        echo "      
                                        </div> 
                                                   <div>
                                            
                                                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cycle"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Cycle :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cycle"), 'widget');
        echo "      
                                        </div>   
                                                         <div>
                                            
                                                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instru2"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Instrument 2 :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instru2"), 'widget');
        echo "      
                                        </div>   
                                        <div>
                                            
                                                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instru3"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Instrument 3 :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "instru3"), 'widget');
        echo "      
                                        </div> 
                                     <div>
                                            
                                                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbeleve"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Nombre d'élève  :")) ? array() : array("label" => $_label_)));
        echo "
                                                     &nbsp;&nbsp;&nbsp;
                                                    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nbeleve"), 'widget');
        echo "      
                                        </div>
                                                <div>
                                                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qf"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Coefficient famillial :")) ? array() : array("label" => $_label_)));
        echo "
                                                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "qf"), 'widget');
        echo "      
                                        </div>
                                              <div>
                                              <br />
                                                   <input type=\"submit\" id=\"submit\" value=\"Enregistrer la tarification\" name=\"submit\" style=\"margin-left: 390px\"/>      
                                              </div>
                                    </form>
                                <br />
                                
                                </div>
                                
                            
            
                        
                   </div>
      </div>
        
        
        
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Regie:simulation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 151,  214 => 150,  210 => 148,  206 => 146,  199 => 142,  195 => 140,  168 => 130,  69 => 31,  238 => 155,  228 => 153,  208 => 148,  173 => 87,  146 => 70,  134 => 60,  113 => 57,  99 => 42,  181 => 79,  126 => 54,  243 => 157,  223 => 105,  209 => 97,  166 => 82,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 160,  239 => 168,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 141,  110 => 48,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 142,  90 => 30,  53 => 20,  49 => 19,  62 => 27,  192 => 84,  190 => 144,  174 => 111,  170 => 74,  156 => 68,  148 => 64,  140 => 57,  128 => 51,  124 => 57,  77 => 29,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 154,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 71,  164 => 69,  137 => 59,  97 => 35,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 169,  268 => 174,  263 => 80,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 131,  204 => 145,  198 => 63,  185 => 114,  183 => 143,  177 => 88,  160 => 63,  109 => 56,  103 => 44,  82 => 33,  65 => 23,  38 => 6,  158 => 77,  150 => 72,  144 => 69,  142 => 50,  129 => 50,  125 => 44,  117 => 50,  112 => 40,  87 => 30,  67 => 25,  61 => 22,  47 => 9,  105 => 44,  93 => 46,  76 => 35,  72 => 27,  68 => 26,  91 => 38,  84 => 32,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 32,  59 => 14,  44 => 19,  31 => 2,  27 => 7,  25 => 4,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 78,  189 => 137,  186 => 147,  180 => 134,  172 => 131,  159 => 69,  154 => 59,  147 => 112,  132 => 62,  127 => 56,  121 => 47,  118 => 54,  114 => 43,  104 => 39,  100 => 37,  78 => 30,  75 => 27,  71 => 26,  58 => 18,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 24,  46 => 11,  22 => 2,  163 => 140,  155 => 68,  152 => 63,  149 => 66,  145 => 65,  139 => 62,  131 => 55,  123 => 47,  120 => 54,  115 => 50,  106 => 46,  101 => 51,  96 => 36,  83 => 39,  80 => 39,  74 => 30,  66 => 48,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 7,  37 => 6,  35 => 3,  32 => 4,  29 => 3,  184 => 135,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 53,  130 => 47,  122 => 54,  119 => 36,  116 => 45,  111 => 45,  108 => 37,  102 => 30,  98 => 42,  95 => 41,  92 => 38,  89 => 27,  85 => 34,  81 => 30,  73 => 28,  64 => 25,  60 => 23,  57 => 21,  54 => 20,  51 => 9,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
