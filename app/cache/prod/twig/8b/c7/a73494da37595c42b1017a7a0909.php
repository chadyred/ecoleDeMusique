<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:index.html.twig */
class __TwigTemplate_8bc7a73494da37595c42b1017a7a0909 extends Twig_Template
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
            'javascript2' => array($this, 'block_javascript2'),
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
        echo "Paiements

";
    }

    // line 9
    public function block_titlePage($context, array $blocks = array())
    {
        // line 10
        echo "Paiements<h2 class=\"title\">Information sur les paiements</h2>   
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        echo " 
";
        // line 15
        $this->displayBlock('javascript2', $context, $blocks);
        // line 48
        echo "    <div style=\"margin-left:320px; width:900px;\">
        <div id=\"nompage\">
            <h1>Paiements</h1>
        </div>
        <p>Vous trouverez ici les paiements des 4 périodes de l'année en cours. 
            Changez de champ pour enregistrer les modifications de paiement
            Vous pouvez également faire <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_search"), "html", null, true);
        echo "\">une recherche filtrée et faire des exports</a>
        </p>
        <br />
    </div>

    <div class=\"post\" style=\"min-height:500px;\">

        <div class=\"entry\">

            <table class=\"records_list\" cellpadding=0 cellspacing=0>
                <thead>

                    <tr>
                        <th  COLSPAN=\"6\">



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
                        <th>Inter.</th>
                        <th>Date Inte.</th>
                        <th>Date P.</th>
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
        // line 140
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 141
            echo "                        <tr>
                          <!--  <td><a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "</a></td> -->
                            <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nom"), "html", null, true);
            echo "</td>
                            <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prenom"), "html", null, true);
            echo "</td>
                            <td>

                                                        ";
            // line 147
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInterupt")) {
                // line 148
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_interupt", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
                echo "\">
                                                        ";
            } else {
                // line 149
                echo "       
                                        <a href=\"#boxArchive";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
                echo "\" rel=\"superbox[content]\">
                                                        ";
            }
            // line 152
            echo "
                                                                        ";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "interupt"), "html", null, true);
            echo "
                                            </a>

                                    </td>
                                    <td>";
            // line 157
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInterupt")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateInterupt"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"))), "html", null, true);
            echo "\">Saisir</a>
                                    </td>
                                    <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommePeriode"), "html", null, true);
            echo "</td>



                            <form name=\"form1";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\" method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"))), "html", null, true);
            echo "\">

                                <td class=\"celluleGrise\">
                                    <span id=\"information";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "NumerairePeriode1\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateNumeraire") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateNumeraire"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                     ";
            // line 169
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "numeraire"))) {
                echo " 0";
            }
            // line 170
            echo "                                                                     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "numeraire"), "html", null, true);
            echo "
                                        </span>
                                        <span id=\"information";
            // line 172
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "NumerairePeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\"> 

                                            <input type=\"text\" size=\"1\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "numeraire"), "html", null, true);
            echo "\" name=\"numeraire\">
                                        </span>
                                    </td>

                                    <td class=\"celluleGrise\">
                                        <span id=\"information";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequejPeriode1\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateChequeJeune") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateChequeJeune"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 180
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeJeune"))) {
                echo " 0";
            }
            // line 181
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeJeune"), "html", null, true);
            echo "
                                            </span>
                                            <span id=\"information";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequejPeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                <input type=\"text\" size=\"1\" value=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeJeune"), "html", null, true);
            echo "\" name=\"jeune\">
                                            </span>    
                                        </td>

                                        <td class=\"celluleGrise\" >
                                            <span id=\"information";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequeVPeriode1\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateChequeVacance") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateChequeVacance"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 190
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeVacance"))) {
                echo " 0";
            }
            // line 191
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeVacance"), "html", null, true);
            echo "
                                                </span>
                                                <span id=\"information";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequeVPeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "chequeVacance"), "html", null, true);
            echo "\" name=\"vacance\">
                                                </span>    
                                            </td>

                                            <td class=\"celluleGrise\" >
                                                <span id=\"information";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequePeriode1\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateCheque") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateCheque"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 200
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cheque"))) {
                echo " 0";
            }
            // line 201
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cheque"), "html", null, true);
            echo "
                                                    </span>
                                                    <span id=\"information";
            // line 203
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "ChequePeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cheque"), "html", null, true);
            echo "\" name=\"cheque\">
                                                    </span>  
                                                </td>
                                                <td class=\"celluleGrise\">
                                                    <span id=\"information";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "CbPeriode1\" class=\"noneInput\"  title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateCb") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "dateCb"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 209
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cb"))) {
                echo " 0";
            }
            // line 210
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cb"), "html", null, true);
            echo "
                                                        </span>
                                                        <span id=\"information";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "CbPeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                            <input type=\"text\" size=\"1\" value=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "cb"), "html", null, true);
            echo "\" name=\"cb\">
                                                        </span> 
                                                    </td>
                                                    <td class=\"celluleGrise\">
                                                        <span id=\"information";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "PrelevPeriode1\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "datePrelev") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "datePrelev"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 218
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "prelev"))) {
                echo " 0";
            }
            // line 219
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "prelev"), "html", null, true);
            echo "
                                                            </span>
                                                            <span id=\"information";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "PrelevPeriode1Input\" class=\"input\" periode=\"1\" form=\"form1";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "id"), "html", null, true);
            echo "\">
                                                                <input type=\"text\" size=\"1\" value=\"";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "prelev"), "html", null, true);
            echo "\" name=\"prelev\">
                                                            </span> 
                                                        </td>


                                                        <input type=\"hidden\" id=\"champ\" name=\"champ\" class=\"champ\" value=\"\">
                                                        <input type=\"hidden\" id=\"champ\" name=\"dernierElem\" value=\"cache\"> 
                                                        <input type=\"hidden\" id=\"scroll\" name=\"scroll\" class=\"scroll\">

                                                    </form>    

                                                    <td class=\"celluleGrise\" >";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode1"), "total"), "html", null, true);
            echo "</td>
                                                    </tbreak>

                                                    <form name=\"form2";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\" method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"))), "html", null, true);
            echo "\">

                                                        <td>
                                                            <span id=\"information";
            // line 239
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "NumerairePeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateNumeraire") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateNumeraire"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                     ";
            // line 240
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "numeraire"))) {
                echo " 0";
            }
            // line 241
            echo "                                                                     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "numeraire"), "html", null, true);
            echo "
                                                                </span>
                                                                <span id=\"information";
            // line 243
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "NumerairePeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\"> 

                                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "numeraire"), "html", null, true);
            echo "\" name=\"numeraire\">
                                                                </span>
                                                            </td>

                                                            <td>
                                                                <span id=\"information";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequejPeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateChequeJeune") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateChequeJeune"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 251
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeJeune"))) {
                echo " 0";
            }
            // line 252
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeJeune"), "html", null, true);
            echo "
                                                                    </span>
                                                                    <span id=\"information";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequejPeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeJeune"), "html", null, true);
            echo "\" name=\"jeune\">
                                                                    </span>    
                                                                </td>

                                                                <td>
                                                                    <span id=\"information";
            // line 260
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequeVPeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateChequeVacance") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateChequeVacance"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 261
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeVacance"))) {
                echo " 0";
            }
            // line 262
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeVacance"), "html", null, true);
            echo "
                                                                        </span>
                                                                        <span id=\"information";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequeVPeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                            <input type=\"text\" size=\"1\" value=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "chequeVacance"), "html", null, true);
            echo "\" name=\"vacance\">
                                                                        </span>    
                                                                    </td>

                                                                    <td>
                                                                        <span id=\"information";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequePeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateCheque") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateCheque"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 271
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cheque"))) {
                echo " 0";
            }
            // line 272
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cheque"), "html", null, true);
            echo "
                                                                            </span>
                                                                            <span id=\"information";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "ChequePeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                                <input type=\"text\" size=\"1\" value=\"";
            // line 275
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cheque"), "html", null, true);
            echo "\" name=\"cheque\">
                                                                            </span>  
                                                                        </td>
                                                                        <td>
                                                                            <span id=\"information";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "CbPeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateCb") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "dateCb"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "'  periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 280
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cb"))) {
                echo " 0";
            }
            // line 281
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cb"), "html", null, true);
            echo "
                                                                                </span>
                                                                                <span id=\"information";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "CbPeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "cb"), "html", null, true);
            echo "\" name=\"cb\">
                                                                                </span> 
                                                                            </td>
                                                                            <td>
                                                                                <span id=\"information";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "PrelevPeriode2\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "datePrelev") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "datePrelev"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 289
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "prelev"))) {
                echo " 0";
            }
            // line 290
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "prelev"), "html", null, true);
            echo "
                                                                                    </span>
                                                                                    <span id=\"information";
            // line 292
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "PrelevPeriode2Input\" class=\"input\" periode=\"2\" form=\"form2";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "id"), "html", null, true);
            echo "\">
                                                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "prelev"), "html", null, true);
            echo "\" name=\"prelev\">
                                                                                    </span> 
                                                                                </td>

                                                                                <td>";
            // line 297
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode2"), "total"), "html", null, true);
            echo "</td>

                                                                                <input type=\"hidden\" id=\"champ\" name=\"champ\" class=\"champ\" value=\"\">
                                                                                <input type=\"hidden\" id=\"champ\" name=\"dernierElem\" value=\"cache\"> 
                                                                                <input type=\"hidden\" id=\"scroll\" name=\"scroll\" class=\"scroll\">
                                                                            </form>  


                                                                            <form name=\"form3";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\" method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"))), "html", null, true);
            echo "\">

                                                                                <td class=\"celluleGrise\">
                                                                                    <span id=\"information";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "NumerairePeriode3\" class=\"noneInput\"  title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateNumeraire") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateNumeraire"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                     ";
            // line 309
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "numeraire"))) {
                echo " 0";
            }
            // line 310
            echo "                                                                     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "numeraire"), "html", null, true);
            echo "
                                                                                        </span>
                                                                                        <span id=\"information";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "NumerairePeriode3Input\" class=\"input\" periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\"> 

                                                                                            <input type=\"text\" size=\"1\" value=\"";
            // line 314
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "numeraire"), "html", null, true);
            echo "\" name=\"numeraire\">
                                                                                        </span>
                                                                                    </td>

                                                                                    <td class=\"celluleGrise\">
                                                                                        <span id=\"information";
            // line 319
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequejPeriode3\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateChequeJeune") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateChequeJeune"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 320
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeJeune"))) {
                echo " 0";
            }
            // line 321
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeJeune"), "html", null, true);
            echo "
                                                                                            </span>
                                                                                            <span id=\"information";
            // line 323
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequejPeriode3Input\" class=\"input\" periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                                                <input type=\"text\" size=\"1\" value=\"";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeJeune"), "html", null, true);
            echo "\" name=\"jeune\">
                                                                                            </span>    
                                                                                        </td>

                                                                                        <td class=\"celluleGrise\" >
                                                                                            <span id=\"information";
            // line 329
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequeVPeriode3\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateChequeVacance") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateChequeVacance"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 330
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeVacance"))) {
                echo " 0";
            }
            // line 331
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeVacance"), "html", null, true);
            echo "
                                                                                                </span>
                                                                                                <span id=\"information";
            // line 333
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequeVPeriode3Input\" class=\"input\" periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "chequeVacance"), "html", null, true);
            echo "\" name=\"vacance\">
                                                                                                </span>    
                                                                                            </td>

                                                                                            <td class=\"celluleGrise\" >
                                                                                                <span id=\"information";
            // line 339
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequePeriode3\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateCheque") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateCheque"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 340
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cheque"))) {
                echo " 0";
            }
            // line 341
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cheque"), "html", null, true);
            echo "
                                                                                                    </span>
                                                                                                    <span id=\"information";
            // line 343
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "ChequePeriode3Input\" class=\"input\" periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 344
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cheque"), "html", null, true);
            echo "\" name=\"cheque\">
                                                                                                    </span>  
                                                                                                </td>
                                                                                                <td class=\"celluleGrise\">
                                                                                                    <span id=\"information";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "CbPeriode3\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateCb") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "dateCb"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 349
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cb"))) {
                echo " 0";
            }
            // line 350
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cb"), "html", null, true);
            echo "
                                                                                                        </span>
                                                                                                        <span id=\"information";
            // line 352
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "CbPeriode3Input\" class=\"input\" periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                                                            <input type=\"text\" size=\"1\" value=\"";
            // line 353
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "cb"), "html", null, true);
            echo "\" name=\"cb\">
                                                                                                        </span> 
                                                                                                    </td>
                                                                                                    <td class=\"celluleGrise\">
                                                                                                        <span id=\"information";
            // line 357
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "PrelevPeriode3\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "datePrelev") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "datePrelev"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"3\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 358
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "prelev"))) {
                echo " 0";
            }
            // line 359
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "prelev"), "html", null, true);
            echo "
                                                                                                            </span>
                                                                                                            <span id=\"information";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "PrelevPeriode3Input\" class=\"input\" periode=\"1\" form=\"form3";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "id"), "html", null, true);
            echo "\">
                                                                                                                <input type=\"text\" size=\"1\" value=\"";
            // line 362
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "prelev"), "html", null, true);
            echo "\" name=\"prelev\">
                                                                                                            </span> 
                                                                                                        </td>

                                                                                                        <input type=\"hidden\" id=\"champ\" name=\"champ\" class=\"champ\" value=\"\">
                                                                                                        <input type=\"hidden\" id=\"champ\" name=\"dernierElem\" value=\"cache\"> 
                                                                                                        <input type=\"hidden\" id=\"scroll\" name=\"scroll\" class=\"scroll\">
                                                                                                    </form>    

                                                                                                    <td class=\"celluleGrise\" >";
            // line 371
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode3"), "total"), "html", null, true);
            echo "</td>

                                                                                                    <form name=\"form4";
            // line 373
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\" method=\"get\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_update", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"))), "html", null, true);
            echo "\">

                                                                                                        <td>
                                                                                                            <span id=\"information";
            // line 376
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "NumerairePeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateNumeraire") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateNumeraire"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "'  periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                     ";
            // line 377
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "numeraire"))) {
                echo " 0";
            }
            // line 378
            echo "                                                                     ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "numeraire"), "html", null, true);
            echo "
                                                                                                                </span>
                                                                                                                <span id=\"information";
            // line 380
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "NumerairePeriode4Input\" class=\"input\" periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\"> 

                                                                                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 382
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "numeraire"), "html", null, true);
            echo "\" name=\"numeraire\">
                                                                                                                </span>
                                                                                                            </td>

                                                                                                            <td>
                                                                                                                <span id=\"information";
            // line 387
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequejPeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateChequeJeune") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateChequeJeune"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 388
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeJeune"))) {
                echo " 0";
            }
            // line 389
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeJeune"), "html", null, true);
            echo "
                                                                                                                    </span>
                                                                                                                    <span id=\"information";
            // line 391
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequejPeriode4Input\" class=\"input\" periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeJeune"), "html", null, true);
            echo "\" name=\"jeune\">
                                                                                                                    </span>    
                                                                                                                </td>

                                                                                                                <td>
                                                                                                                    <span id=\"information";
            // line 397
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequeVPeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateChequeVacance") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateChequeVacance"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 398
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeVacance"))) {
                echo " 0";
            }
            // line 399
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeVacance"), "html", null, true);
            echo "
                                                                                                                        </span>
                                                                                                                        <span id=\"information";
            // line 401
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequeVPeriode4Input\" class=\"input\" periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                                                                            <input type=\"text\" size=\"1\" value=\"";
            // line 402
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "chequeVacance"), "html", null, true);
            echo "\" name=\"vacance\">
                                                                                                                        </span>    
                                                                                                                    </td>

                                                                                                                    <td>
                                                                                                                        <span id=\"information";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequePeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateCheque") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateCheque"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                      ";
            // line 408
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cheque"))) {
                echo " 0";
            }
            // line 409
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cheque"), "html", null, true);
            echo "
                                                                                                                            </span>
                                                                                                                            <span id=\"information";
            // line 411
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "ChequePeriode4Input\" class=\"input\" periode=\"4\">
                                                                                                                                <input type=\"text\" size=\"1\" value=\"";
            // line 412
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cheque"), "html", null, true);
            echo "\" name=\"cheque\">
                                                                                                                            </span>  
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <span id=\"information";
            // line 416
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "CbPeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateCb") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "dateCb"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 417
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cb"))) {
                echo " 0";
            }
            // line 418
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cb"), "html", null, true);
            echo "
                                                                                                                                </span>
                                                                                                                                <span id=\"information";
            // line 420
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "CbPeriode4Input\" class=\"input\" periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                                                                                    <input type=\"text\" size=\"1\" value=\"";
            // line 421
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "cb"), "html", null, true);
            echo "\" name=\"cb\">
                                                                                                                                </span> 
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                                <span id=\"information";
            // line 425
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "PrelevPeriode4\" class=\"noneInput\" title='";
            if (($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "datePrelev") != null)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "datePrelev"), "d/m/Y"), "html", null, true);
                echo " ";
            }
            echo "' periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                        ";
            // line 426
            if ((null === $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "prelev"))) {
                echo " 0";
            }
            // line 427
            echo "                                                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "prelev"), "html", null, true);
            echo "
                                                                                                                                    </span>
                                                                                                                                    <span id=\"information";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "PrelevPeriode4Input\" class=\"input\" periode=\"4\" form=\"form4";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "id"), "html", null, true);
            echo "\">
                                                                                                                                        <input type=\"text\" size=\"1\" value=\"";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "prelev"), "html", null, true);
            echo "\" name=\"prelev\">
                                                                                                                                    </span> 
                                                                                                                                </td>
                                                                                                                                <td>";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "periode4"), "total"), "html", null, true);
            echo "</td>

                                                                                                                                <input type=\"hidden\" id=\"champ\" name=\"champ\" class=\"champ\" value=\"\">
                                                                                                                                <input type=\"hidden\" id=\"champ\" name=\"dernierElem\" value=\"cache\"> 
                                                                                                                                <input type=\"hidden\" id=\"scroll\" name=\"scroll\" class=\"scroll\">
                                                                                                                            </form>  

                                                                                                                            <td class=\"celluleGrise\">";
            // line 440
            if ((sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalG")) == (-0))) {
                // line 441
                echo "                                                                                                                                0.00
                                                                                                                                ";
            } else {
                // line 443
                echo "                                                                                                                                    ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "totalG")), "html", null, true);
                echo "
                                                                                                                                ";
            }
            // line 445
            echo "
                                                                                                                            </td>
                                                                                                                            <td>
                                                                                                                             ";
            // line 448
            if ((sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommeToutPaiement")) == (-0))) {
                // line 449
                echo "                                                                                                                                ";
                echo "0.00";
                echo "
                                                                                                                                ";
            } else {
                // line 451
                echo "                                                                                                                                ";
                echo twig_escape_filter($this->env, sprintf("%.2f", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "sommeToutPaiement")), "html", null, true);
                echo "
                                                                                                                                ";
            }
            // line 453
            echo "                                                                                                                            </td>
                                                                                                                            <!--   <td>
                                                                                                                                   <ul>
                                                                                                                                       <li>
                                                                                                                                           <a href=\"";
            // line 457
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\">show</a>
                                                                                                                                       </li>
                                                                                                                                       <li>
                                                                                                                                           <a href=\"";
            // line 460
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
        // line 466
        echo "                                                                                                                            </tbody>
                                                                                                                        </table>


                                                                                                                        <div id=\"sommeTotal\">
                                                                                                                            <table>
                                                                                                                                <tr>
                                                                                                                                    <td><strong>Somme totale</strong></td><td><strong>Somme Payée</strong></td> 
                                                                                                                                </tr>
                                                                                                                                <tr>
                                                                                                                                    <td>";
        // line 476
        echo twig_escape_filter($this->env, (isset($context["SommeTot"]) ? $context["SommeTot"] : null), "html", null, true);
        echo "</td>
                                                                                                                                    <td>";
        // line 477
        echo twig_escape_filter($this->env, (isset($context["sommePaye"]) ? $context["sommePaye"] : null), "html", null, true);
        echo "</td><td></td>


                                                                                                                                </tr>
                                                                                                                            </table>   



                                                                                                                        </div>



                                                                                                                    </div>
                                                                                                                </div>

                             ";
        // line 492
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            echo "                        
                                                                                                                <div class=\"box-content\" id=\"boxArchive";
            // line 493
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\" name=\"form\">
                                                                                                                    <form method=\"get\" action=\"";
            // line 494
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_interupt", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
            echo "\" id=\"formarchive\" name=\"formarchive\">

                                                                                                                        <strong>Faire payer à ....</strong><br />
                                                                                                                        <input type=\"hidden\" value=\"";
            // line 497
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                                                                                                                        <input type=\"radio\" name=\"tarif\" value=\"plein\">Plein tarif<br>

                                                                                                                        <input type=\"radio\" name=\"tarif\" value=\"reduit\">Tarif reduit
                                                                                                                        <input type=\"text\" name=\"valeur\" value=\"0\"> Euros
                                                                                                                        <br />

                                                                                                                        <button type=\"submit\">Archiver !</button>    
                                                                                                                    </form>

                                                                                                                </div>  

                                                                                                                <div class=\"box-content\" id=\"boxDate";
            // line 509
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
            echo "\">
                                                                                                                    <form action=\"\" method=\"post\" ";
            // line 510
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
            echo ">


                                                  ";
            // line 513
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dateNumeraire"), 'widget');
            echo "   
                                                                                                                        <button type=\"submit\">Appliquer</button>





                                                                                                                    </form>


                                                                                                                </div>



                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 528
        echo "



";
    }

    // line 15
    public function block_javascript2($context, array $blocks = array())
    {
        // line 16
        echo "<script type=\"text/javascript\">

    var champ = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "champ"), "method"), "html", null, true);
        echo "\";
    var position = \"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "scroll"), "method"), "html", null, true);
        echo "\";
    \$(document).ready(function() {
        if (position != \"\") {
            \$('html').scrollTop(";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => "scroll"), "method"), "html", null, true);
        echo ");
        }
        if (champ == \"\") {
            champ = \"information";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["premierId"]) ? $context["premierId"] : null), "html", null, true);
        echo "NumerairePeriode1\";
        }
        \$(\"#\" + champ).css(\"display\", \"none\");
        \$(\"#\" + champ + \"Input\").css(\"display\", \"block\");
    });

    \$(function() {
        \$(\".noneInput\").click(
                function() {
                    //Je met en session le dernier element clique
                    document.getElementById('champ').value = \$(this).attr(\"id\");
                    \$(\".champ\").val(document.getElementById('champ').value);

                    \$(\".scroll\").val(\$('html').scrollTop());

                    document.forms[\$(\"#\" + champ).attr(\"form\")].submit();
                });
    });
    </script>   
            <script type=\"text/javascript\">\$(function() {
                \$.superbox();
            });</script>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Paiement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 477,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 453,  1185 => 451,  1179 => 449,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 427,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 417,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 407,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 398,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 359,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 348,  844 => 344,  838 => 343,  832 => 341,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 321,  756 => 320,  744 => 319,  736 => 314,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 305,  688 => 297,  681 => 293,  675 => 292,  669 => 290,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 274,  599 => 272,  595 => 271,  583 => 270,  575 => 265,  569 => 264,  563 => 262,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 250,  503 => 245,  486 => 240,  474 => 239,  466 => 236,  460 => 233,  440 => 221,  434 => 219,  430 => 218,  418 => 217,  405 => 212,  395 => 209,  370 => 203,  360 => 200,  348 => 199,  340 => 194,  334 => 193,  328 => 191,  324 => 190,  304 => 184,  288 => 180,  255 => 170,  251 => 169,  239 => 168,  231 => 165,  224 => 161,  219 => 159,  188 => 148,  167 => 141,  110 => 49,  524 => 309,  506 => 297,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 172,  254 => 156,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 113,  52 => 18,  90 => 38,  53 => 20,  49 => 19,  80 => 39,  62 => 27,  192 => 79,  190 => 78,  174 => 111,  170 => 142,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 29,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 222,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 203,  399 => 210,  396 => 238,  388 => 194,  383 => 208,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 189,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 150,  182 => 79,  176 => 143,  169 => 109,  164 => 68,  152 => 105,  137 => 54,  115 => 48,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 179,  273 => 85,  270 => 84,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 131,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 58,  160 => 63,  149 => 51,  123 => 47,  120 => 46,  109 => 41,  103 => 34,  82 => 33,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  106 => 44,  87 => 28,  70 => 20,  67 => 19,  61 => 22,  47 => 9,  105 => 36,  96 => 41,  93 => 20,  83 => 18,  76 => 30,  72 => 27,  68 => 25,  50 => 10,  91 => 20,  84 => 24,  74 => 54,  66 => 48,  55 => 23,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 23,  59 => 14,  43 => 18,  46 => 9,  44 => 19,  31 => 2,  27 => 7,  32 => 2,  25 => 4,  35 => 3,  29 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 83,  186 => 147,  180 => 144,  172 => 67,  163 => 140,  159 => 107,  154 => 59,  147 => 59,  132 => 62,  127 => 49,  121 => 45,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 37,  75 => 21,  71 => 19,  63 => 19,  58 => 26,  41 => 7,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 31,  102 => 30,  98 => 34,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 15,  60 => 23,  57 => 21,  54 => 10,  51 => 9,  48 => 19,  45 => 6,  42 => 5,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
