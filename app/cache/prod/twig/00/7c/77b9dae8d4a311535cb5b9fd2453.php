<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:searchResult.html.twig */
class __TwigTemplate_007c77b9dae8d4a311535cb5b9fd2453 extends Twig_Template
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
        echo "       Paiements
       
";
    }

    // line 7
    public function block_titlePage($context, array $blocks = array())
    {
        // line 8
        echo "          Paiements<h2 class=\"title\">Information sur les paiements</h2>
          
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        echo " 

      <div style=\"margin-left:340px; width:900px;\">
                     <div id=\"nompage\">
                                  <h1>Paiements</h1>
                        </div>
                         <p> Ici sont affichées les resultats de la recherche, Vous pouvez aussi faire ..<br />
                             <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_search"), "html", null, true);
        echo "\">Une Nouvelle Recherche</a>,<br />
                             <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_exportOds", array("requete" => (isset($context["requete"]) ? $context["requete"] : null))), "html", null, true);
        echo "\">Un export des résultats</a><br />

                         </p>
                         <br />
       </div>
           
                  <div class=\"post\" style=\"min-height:500px;\">
                 
                             <div class=\"entry\">

                                        <table class=\"records_list\" cellpadding=0 cellspacing=0>
                                              <thead>
                                                
                                                <tr>
                                                    <th  COLSPAN=\"5\">
                                                 
                                                    
                                                    
                                                    </th>
                                                     <th COLSPAN=\"7\" style=\"text-align:center; \" class=\"celluleGrise\">
                                                                                        Periode 1

                                                    </th>
                                                      <th COLSPAN=\"7\" style=\"text-align:center; \">
                                                                                        Periode 2
                                                    
                                                    
                                                    </th>
                                                      <th COLSPAN=\"7\" style=\"text-align:center; \" class=\"celluleGrise\">
                                                                                        Periode 3
                                                    
                                                    
                                                    </th>
                                                      <th COLSPAN=\"7\" style=\"text-align:center; \">
                                                                                        Periode 4
                                                    
                                                    
                                                    </th>
                                                    </th>
                                                      <th COLSPAN=\"2\" style=\"text-align:center;\" class=\"celluleGrise\">Général</th>   
                                                      
                                                
                                                </tr>
                                                <tr>
                                             <!--       <th>Id</th> -->
                                                    <th>Nom</th>
                                                    <th>Prenom </th>
                                                    <th>Interupt</th>
                                                    <th>Date<br />interupt</th>
                                                    <th>Par 4</th>
                                                    <th class=\"celluleGrise\">Num</th>
                                                    <th class=\"celluleGrise\">CheqJ</th>
                                                    <th class=\"celluleGrise\">CheqV</th>
                                                    <th class=\"celluleGrise\">Cheq</th>
                                                    <th class=\"celluleGrise\">CB</th>
                                                    <th class=\"celluleGrise\">PrelV</th>
                                                    <th class=\"celluleGrise\">Total</th>
                                                    <th>Num</th>
                                                    <th>CheqJ</th>
                                                    <th>CheqV</th>
                                                    <th>cheq</th>
                                                    <th>CB</th>
                                                    <th>PrelV</th>
                                                    <th>Total</th>
                                                     <th class=\"celluleGrise\">Num</th>
                                                    <th class=\"celluleGrise\">CheqJ</th>
                                                    <th class=\"celluleGrise\">CheqV</th>
                                                    <th class=\"celluleGrise\">Cheq</th>
                                                    <th class=\"celluleGrise\">CB</th>
                                                    <th class=\"celluleGrise\">PrelV</th>
                                                    <th class=\"celluleGrise\">Total</th>
                                                     <th>Num</th>
                                                    <th>CheqJ</th>
                                                    <th>CheqV</th>
                                                    <th>Cheq</th>
                                                    <th>CB</th>
                                                    <th>PrelV</th>
                                                    <th>Total</th>
                                                    <th class=\"celluleGrise\" style=\"text-align:center; \">Total</th>
                                                    <th class=\"celluleGrise\">Reste</th>
                                                 
                                                 
                                              <!--      <th>Actions</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 105
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 106
            echo "                                                <tr>
                                                  <!--  <td><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td> -->
                                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nom"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prenom"), "html", null, true);
            echo "</td>
                                                    <td>
                                                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "interupt"), "html", null, true);
            echo "
                                                    </td>
                                                    <td>";
            // line 113
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInterupt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInterupt"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommePeriode"), "html", null, true);
            echo "</td>

                                                    
                                                            <td class=\"celluleGrise\">
                                                            
                                                                    ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "numeraire"), "html", null, true);
            echo "
                                                        
                                                            </td>

                                                            <td class=\"celluleGrise\">
                                                               
                                                                        ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeJeune"), "html", null, true);
            echo "
                                                           
                                                           </td>

                                                            <td class=\"celluleGrise\" >
                                                         
                                                                   ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeVacance"), "html", null, true);
            echo "
                                                      
                                                            </td>
                                                            
                                                            <td class=\"celluleGrise\" >
                                                              
                                                                        ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cheque"), "html", null, true);
            echo "
                                                            
                                                           </td>
                                                           <td class=\"celluleGrise\" >
                                                                        ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                              <td class=\"celluleGrise\" >
                                                              
                                                                        ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                          
                                                      
                                                           <td class=\"celluleGrise\" >";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "total"), "html", null, true);
            echo "</td>
                                                    </tbreak>
                                                            <td>
                                                              ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "numeraire"), "html", null, true);
            echo " 
                                                            </td>

                                                            <td>
                                                                    ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeJeune"), "html", null, true);
            echo "
                                                           </td>

                                                            <td>
                                                                        ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeVacance"), "html", null, true);
            echo "
                                                            </td>
                                                            
                                                            <td>
                                                                     ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cheque"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                           <td>
                                                                        ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                           
                                                           <td>
                                                                    ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "total"), "html", null, true);
            echo "
                                                           </td>
                                                          
                                                    
                                                    
                                                 
                                                    
                                                            <td class=\"celluleGrise\">
                                                                    ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "numeraire"), "html", null, true);
            echo "
              
                                                            </td>

                                                            <td class=\"celluleGrise\">
                                                              
                                                                        ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeJeune"), "html", null, true);
            echo "
                                                              
                                                           </td>

                                                            <td class=\"celluleGrise\" >
                                                             
                                                                        ";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeVacance"), "html", null, true);
            echo "
                                                               
                                                            </td>
                                                            
                                                            <td class=\"celluleGrise\" >
                                                                
                                                                        ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cheque"), "html", null, true);
            echo "
                                                            </td>
                                                            <td class=\"celluleGrise\" >
                                                                        ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cb"), "html", null, true);
            echo "
                                                            </td>
                                                             <td class=\"celluleGrise\" >
                                                                        ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "prelev"), "html", null, true);
            echo "
                                                            </td>
                                             
                                                              <td class=\"celluleGrise\" >
                                                                        ";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "total"), "html", null, true);
            echo "
                                                              </td>
                                                    
                                                  
                                                            <td>
                                                                    ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "numeraire"), "html", null, true);
            echo "
                                                            </td>

                                                            <td>
                                                                        ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeJeune"), "html", null, true);
            echo "
                                                           </td>

                                                            <td>
                                                                        ";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeVacance"), "html", null, true);
            echo "
                                                            </td>
                                                             <td>
                                                                        ";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cheque"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                           
                                                           <td>";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "total"), "html", null, true);
            echo "</td>
                                                           
                      
<td class=\"celluleGrise\">";
            // line 238
            if ((sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalG")) == (-0))) {
                // line 239
                echo "                                                                                                                                0.00
                                                                                                                                ";
            } else {
                // line 241
                echo "                                                                                                                                    ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalG")), "html", null, true);
                echo "
                                                                                                                                ";
            }
            // line 243
            echo "
                                                                                                                            </td>                                                    <td>
                                                                                                                             ";
            // line 245
            if ((sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommeToutPaiement")) == (-0))) {
                // line 246
                echo "                                                                                                                                ";
                echo "0.00";
                echo "
                                                                                                                                ";
            } else {
                // line 248
                echo "                                                                                                                                ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommeToutPaiement")), "html", null, true);
                echo "
                                                                                                                                ";
            }
            // line 250
            echo "                                                                                                                            </td>
                                                 <!--   <td>
                                                        <ul>
                                                            <li>
                                                                <a href=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
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
        // line 263
        echo "                                            </tbody>
                                        </table>
                                 
                                 <div id=\"sommeTotal\">
                                     <table>
                                         <tr>
                                             <td><strong>Somme totale</strong></td><td><strong>Somme Payée</strong></td> 
                                         </tr>
                                         <tr>
                                             <td>";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["SommeTot"]) ? $context["SommeTot"] : null), "html", null, true);
        echo "</td>
                                             <td>";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["sommePaye"]) ? $context["sommePaye"] : null), "html", null, true);
        echo "</td><td></td>
                                         </tr>
                                     </table>   
                                 </div>



                                     <!--   <ul>
                                            <li>
                                                <a href=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_new"), "html", null, true);
        echo "\">
                                                    Create a new entry
                                                </a>
                                            </li>
                                        </ul>
                                     
                                     -->
                               </div>
                       </div>
  
                             ";
        // line 292
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "                        
                                        <div class=\"box-content\" id=\"boxArchive";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"form\">
                                             <form method=\"get\" action=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_interupt", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" id=\"formarchive\" name=\"formarchive\">
                                   
                                                   <strong>Faire payer à ....</strong><br />
                                                   <input type=\"hidden\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                                                 <input type=\"radio\" name=\"tarif\" value=\"plein\">Plein tarif<br>
                                                 
                                                 <input type=\"radio\" name=\"tarif\" value=\"reduit\">Tarif reduit
                                                 <input type=\"text\" name=\"valeur\" value=\"0\"> Euros
                                                 <br />
                                                 
                                                 <button type=\"submit\">Archiver !</button>    
                                            </form>
                                                      
                                       </div>    
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 309
        echo "
          
          
          
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Paiement:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 309,  506 => 297,  500 => 294,  490 => 292,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 182,  280 => 170,  274 => 167,  261 => 160,  254 => 156,  241 => 149,  234 => 145,  227 => 141,  202 => 125,  193 => 119,  179 => 113,  52 => 18,  90 => 36,  53 => 20,  49 => 19,  80 => 39,  62 => 27,  192 => 79,  190 => 78,  174 => 111,  170 => 70,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  496 => 293,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 207,  404 => 203,  399 => 200,  396 => 238,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 109,  164 => 68,  152 => 105,  137 => 54,  115 => 48,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 174,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 164,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 131,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 58,  160 => 63,  149 => 51,  123 => 47,  120 => 46,  109 => 41,  103 => 34,  82 => 23,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  106 => 44,  87 => 28,  70 => 20,  67 => 19,  61 => 22,  47 => 9,  105 => 36,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 27,  68 => 25,  50 => 10,  91 => 20,  84 => 24,  74 => 16,  66 => 15,  55 => 23,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 23,  59 => 18,  43 => 18,  46 => 7,  44 => 19,  31 => 2,  27 => 7,  32 => 4,  25 => 4,  35 => 5,  29 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 96,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 107,  154 => 59,  147 => 59,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 30,  75 => 21,  71 => 19,  63 => 19,  58 => 12,  41 => 15,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 31,  102 => 30,  98 => 34,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 12,  60 => 23,  57 => 21,  54 => 9,  51 => 8,  48 => 11,  45 => 8,  42 => 8,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
