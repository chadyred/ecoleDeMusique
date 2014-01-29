<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:searchResult.html.twig */
class __TwigTemplate_2e297f4bf8ebf8b8fa9b8fe17e83977d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_exportOds", array("requete" => $this->getContext($context, "requete"))), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 106
            echo "                                                <tr>
                                                  <!--  <td><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td> -->
                                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nom"), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prenom"), "html", null, true);
            echo "</td>
                                                    <td>
                                                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "interupt"), "html", null, true);
            echo "
                                                    </td>
                                                    <td>";
            // line 113
            if ($this->getAttribute($this->getContext($context, "entity"), "dateInterupt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateInterupt"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "sommePeriode"), "html", null, true);
            echo "</td>

                                                    
                                                            <td class=\"celluleGrise\">
                                                            
                                                                    ";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "numeraire"), "html", null, true);
            echo "
                                                        
                                                            </td>

                                                            <td class=\"celluleGrise\">
                                                               
                                                                        ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "chequeJeune"), "html", null, true);
            echo "
                                                           
                                                           </td>

                                                            <td class=\"celluleGrise\" >
                                                         
                                                                   ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "chequeVacance"), "html", null, true);
            echo "
                                                      
                                                            </td>
                                                            
                                                            <td class=\"celluleGrise\" >
                                                              
                                                                        ";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "cheque"), "html", null, true);
            echo "
                                                            
                                                           </td>
                                                           <td class=\"celluleGrise\" >
                                                                        ";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                              <td class=\"celluleGrise\" >
                                                              
                                                                        ";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                          
                                                      
                                                           <td class=\"celluleGrise\" >";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode1"), "total"), "html", null, true);
            echo "</td>
                                                    </tbreak>
                                                            <td>
                                                              ";
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "numeraire"), "html", null, true);
            echo " 
                                                            </td>

                                                            <td>
                                                                    ";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "chequeJeune"), "html", null, true);
            echo "
                                                           </td>

                                                            <td>
                                                                        ";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "chequeVacance"), "html", null, true);
            echo "
                                                            </td>
                                                            
                                                            <td>
                                                                     ";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "cheque"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                           <td>
                                                                        ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                           
                                                           <td>
                                                                    ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode2"), "total"), "html", null, true);
            echo "
                                                           </td>
                                                          
                                                    
                                                    
                                                 
                                                    
                                                            <td class=\"celluleGrise\">
                                                                    ";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "numeraire"), "html", null, true);
            echo "
              
                                                            </td>

                                                            <td class=\"celluleGrise\">
                                                              
                                                                        ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "chequeJeune"), "html", null, true);
            echo "
                                                              
                                                           </td>

                                                            <td class=\"celluleGrise\" >
                                                             
                                                                        ";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "chequeVacance"), "html", null, true);
            echo "
                                                               
                                                            </td>
                                                            
                                                            <td class=\"celluleGrise\" >
                                                                
                                                                        ";
            // line 200
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "cheque"), "html", null, true);
            echo "
                                                            </td>
                                                            <td class=\"celluleGrise\" >
                                                                        ";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "cb"), "html", null, true);
            echo "
                                                            </td>
                                                             <td class=\"celluleGrise\" >
                                                                        ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "prelev"), "html", null, true);
            echo "
                                                            </td>
                                             
                                                              <td class=\"celluleGrise\" >
                                                                        ";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode3"), "total"), "html", null, true);
            echo "
                                                              </td>
                                                    
                                                  
                                                            <td>
                                                                    ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "numeraire"), "html", null, true);
            echo "
                                                            </td>

                                                            <td>
                                                                        ";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "chequeJeune"), "html", null, true);
            echo "
                                                           </td>

                                                            <td>
                                                                        ";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "chequeVacance"), "html", null, true);
            echo "
                                                            </td>
                                                             <td>
                                                                        ";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "cheque"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "cb"), "html", null, true);
            echo "
                                                           </td>
                                                            <td>
                                                                        ";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "prelev"), "html", null, true);
            echo "
                                                           </td>
                                                           
                                                           <td>";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "periode4"), "total"), "html", null, true);
            echo "</td>
                                                           
                      
<td class=\"celluleGrise\">";
            // line 238
            if ((sprintf("%.2f", $this->getAttribute($this->getContext($context, "entity"), "totalG")) == (-0))) {
                // line 239
                echo "                                                                                                                                0.00
                                                                                                                                ";
            } else {
                // line 241
                echo "                                                                                                                                    ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute($this->getContext($context, "entity"), "totalG")), "html", null, true);
                echo "
                                                                                                                                ";
            }
            // line 243
            echo "
                                                                                                                            </td>                                                    <td>
                                                                                                                             ";
            // line 245
            if ((sprintf("%.2f", $this->getAttribute($this->getContext($context, "entity"), "sommeToutPaiement")) == (-0))) {
                // line 246
                echo "                                                                                                                                ";
                echo "0.00";
                echo "
                                                                                                                                ";
            } else {
                // line 248
                echo "                                                                                                                                ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute($this->getContext($context, "entity"), "sommeToutPaiement")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                                                            </li>
                                                            <li>
                                                                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "SommeTot"), "html", null, true);
        echo "</td>
                                             <td>";
        // line 273
        echo twig_escape_filter($this->env, $this->getContext($context, "sommePaye"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "                        
                                        <div class=\"box-content\" id=\"boxArchive";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "\" name=\"form\">
                                             <form method=\"get\" action=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_interupt", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" id=\"formarchive\" name=\"formarchive\">
                                   
                                                   <strong>Faire payer à ....</strong><br />
                                                   <input type=\"hidden\" value=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
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
        return array (  524 => 309,  506 => 297,  500 => 294,  496 => 293,  490 => 292,  477 => 282,  465 => 273,  461 => 272,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  420 => 248,  414 => 246,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  396 => 238,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 182,  287 => 174,  280 => 170,  274 => 167,  268 => 164,  261 => 160,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  220 => 137,  211 => 131,  202 => 125,  193 => 119,  185 => 114,  179 => 113,  174 => 111,  169 => 109,  165 => 108,  159 => 107,  156 => 106,  152 => 105,  63 => 19,  59 => 18,  48 => 11,  42 => 8,  39 => 7,  33 => 4,  30 => 3,);
    }
}
