<?php

/* EcoleDeMusiqueWelcomeBundle:PaiementPeriode:edit.html.twig */
class __TwigTemplate_e8af7d8586d7df5302582a65bdd0405f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EcoleDeMusiqueWelcomeBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
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

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "   ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        Paiement de la Periode ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numPeriod"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_titlePage($context, array $blocks = array())
    {
        // line 9
        echo "    Paiement de la Periode ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numPeriod"), "html", null, true);
        echo "
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    
<div id=\"page\">

                       <div id=\"content\">
                       
                            <div class=\"post\">
                                <h2>Date de Paiement</h2>
                                <div class=\"entry\">

                                        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_updateDate"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo " id=\"edit_form\" name=\"edit_form\">
                                            <table>
                                                ";
        // line 23
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeraire") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeraire"))) {
            // line 24
            echo "                                                <tr>
                                                        <td>
                                                            Date Numéraire 1
                                                            ";
            // line 27
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNumeraire1"), 'widget');
            echo "
                                                         
                                                         </td>
                                                </tr>
                                                ";
        }
        // line 32
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chequeJeune") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chequeJeune"))) {
            // line 33
            echo "                                                 <tr>
                                                          <td>
                                                                Date Cheque Jeune 1
                                                                ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeJeune1"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              ";
        }
        // line 40
        echo "                                              ";
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chequeVacance") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chequeVacance"))) {
            // line 41
            echo "                                              
                                               <tr>
                                                          <td>
                                                                Date Cheque Vacance 1
                                                                ";
            // line 45
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeVacance1"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              
                                                  ";
        }
        // line 50
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cheque") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cheque"))) {
            // line 51
            echo "                                               <tr>
                                                          <td>
                                                                Date Cheque Cheque 1
                                                                ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCheque1"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 58
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cb") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cb"))) {
            // line 59
            echo "                                               <tr>
                                                          <td>
                                                                Date Carte Bleau 1
                                                                ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCb1"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 66
        echo "                                                    
                                               ";
        // line 67
        if ((($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prelev") != 0) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prelev"))) {
            // line 68
            echo "                                              <tr>
                                                          <td>
                                                                Date Prelevement 1
                                                                ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datePrelev1"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 75
        echo "                                              
                                              
                                              
                                              <!--Periode 2 -->
                                                ";
        // line 79
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "numeraire") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "numeraire"))) {
            // line 80
            echo "                                                <tr>
                                                        <td>
                                                            Date Numéraire 2
                                                            ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNumeraire2"), 'widget');
            echo "
                                                         
                                                         </td>
                                                </tr>
                                                ";
        }
        // line 88
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "chequeJeune") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "chequeJeune"))) {
            // line 89
            echo "                                                 <tr>
                                                          <td>
                                                                Date Cheque Jeune 2
                                                                ";
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeJeune2"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              ";
        }
        // line 96
        echo "                                              ";
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "chequeVacance") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "chequeVacance"))) {
            // line 97
            echo "                                              
                                               <tr>
                                                          <td>
                                                                Date Cheque Vacance 2
                                                                ";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeVacance2"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              
                                                  ";
        }
        // line 106
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "cheque") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "cheque"))) {
            // line 107
            echo "                                               <tr>
                                                          <td>
                                                                Date Cheque Cheque 2
                                                                ";
            // line 110
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCheque2"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 114
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "cb") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "cb"))) {
            // line 115
            echo "                                               <tr>
                                                          <td>
                                                                Date Carte Bleau 2
                                                                ";
            // line 118
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCb2"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 122
        echo "                                                    
                                               ";
        // line 123
        if ((($this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "prelev") != 0) && $this->getAttribute((isset($context["entity2"]) ? $context["entity2"] : $this->getContext($context, "entity2")), "prelev"))) {
            // line 124
            echo "                                              <tr>
                                                          <td>
                                                                Date Prelevement 2
                                                                ";
            // line 127
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datePrelev2"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 131
        echo "                                              
                                              
                                              
                                              <!-- Periode 3 -->
                                               ";
        // line 135
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "numeraire") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "numeraire"))) {
            // line 136
            echo "                                                <tr>
                                                        <td>
                                                            Date Numéraire 3
                                                            ";
            // line 139
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNumeraire3"), 'widget');
            echo "
                                                         
                                                         </td>
                                                </tr>
                                                ";
        }
        // line 144
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "chequeJeune") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "chequeJeune"))) {
            // line 145
            echo "                                                 <tr>
                                                          <td>
                                                                Date Cheque Jeune 3
                                                                ";
            // line 148
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeJeune3"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              ";
        }
        // line 152
        echo "                                              ";
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "chequeVacance") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "chequeVacance"))) {
            // line 153
            echo "                                              
                                               <tr>
                                                          <td>
                                                                Date Cheque Vacance 3
                                                                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeVacance3"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              
                                                  ";
        }
        // line 162
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "cheque") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "cheque"))) {
            // line 163
            echo "                                               <tr>
                                                          <td>
                                                                Date Cheque Cheque 3
                                                                ";
            // line 166
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCheque3"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 170
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "cb") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "cb"))) {
            // line 171
            echo "                                               <tr>
                                                          <td>
                                                                Date Carte Bleau 3
                                                                ";
            // line 174
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCb3"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 178
        echo "                                                    
                                               ";
        // line 179
        if ((($this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "prelev") != 0) && $this->getAttribute((isset($context["entity3"]) ? $context["entity3"] : $this->getContext($context, "entity3")), "prelev"))) {
            // line 180
            echo "                                              <tr>
                                                          <td>
                                                                Date Prelevement 3
                                                                ";
            // line 183
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datePrelev3"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 187
        echo "                                              
                                              
                                              <!-- Periode 4 -->
                                               ";
        // line 190
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "numeraire") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "numeraire"))) {
            // line 191
            echo "                                                <tr>
                                                        <td>
                                                            Date Numéraire 4
                                                            ";
            // line 194
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateNumeraire4"), 'widget');
            echo "
                                                         
                                                         </td>
                                                </tr>
                                                ";
        }
        // line 199
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "chequeJeune") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "chequeJeune"))) {
            // line 200
            echo "                                                 <tr>
                                                          <td>
                                                                Date Cheque Jeune 4
                                                                ";
            // line 203
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeJeune4"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              ";
        }
        // line 207
        echo "                                              ";
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "chequeVacance") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "chequeVacance"))) {
            // line 208
            echo "                                              
                                               <tr>
                                                          <td>
                                                                Date Cheque Vacance 4
                                                                ";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateChequeVacance4"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                              
                                                  ";
        }
        // line 217
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "cheque") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "cheque"))) {
            // line 218
            echo "                                               <tr>
                                                          <td>
                                                                Date Cheque Cheque 4
                                                                ";
            // line 221
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCheque4"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 225
        echo "                                                ";
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "cb") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "cb"))) {
            // line 226
            echo "                                               <tr>
                                                          <td>
                                                                Date Carte Bleau 4
                                                                ";
            // line 229
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateCb4"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 233
        echo "                                                    
                                               ";
        // line 234
        if ((($this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "prelev") != 0) && $this->getAttribute((isset($context["entity4"]) ? $context["entity4"] : $this->getContext($context, "entity4")), "prelev"))) {
            // line 235
            echo "                                              <tr>
                                                          <td>
                                                                Date Prelevement 4
                                                                ";
            // line 238
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datePrelev4"), 'widget');
            echo "
                                                         </td>
                                              </tr>
                                               ";
        }
        // line 242
        echo "                                              
                                     
                                                
                                              
                                              ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idperiode1"), 'widget');
        echo "
                                              
                                            </table>
                          
                                             
                                                 
                                                 <button type=\"submit\">Appliquer</button>
                                        </form>
                                       
                                    
                                    
                                    <br />
                                                <a href=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">
                                                    Retour aux paiements
                                                </a>
                                      
                                     </div>
                                  </div>
                               </div>
                       </div>
   
                                 
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:PaiementPeriode:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 258,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 234,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  411 => 207,  404 => 203,  399 => 200,  396 => 199,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 178,  352 => 174,  347 => 171,  344 => 170,  337 => 166,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 115,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 71,  164 => 68,  137 => 54,  97 => 32,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 93,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 97,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 23,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 58,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  87 => 28,  67 => 19,  61 => 11,  47 => 9,  105 => 36,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  91 => 20,  84 => 24,  28 => 3,  24 => 3,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  44 => 6,  31 => 2,  27 => 4,  25 => 4,  21 => 2,  225 => 96,  216 => 90,  212 => 96,  205 => 92,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  159 => 66,  154 => 59,  147 => 59,  132 => 51,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 33,  78 => 24,  75 => 21,  71 => 19,  58 => 12,  34 => 3,  26 => 6,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 62,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 41,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 6,  41 => 5,  37 => 8,  35 => 5,  32 => 4,  29 => 4,  184 => 80,  178 => 71,  171 => 62,  165 => 58,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 27,  85 => 24,  81 => 25,  73 => 19,  64 => 12,  60 => 23,  57 => 14,  54 => 9,  51 => 8,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}