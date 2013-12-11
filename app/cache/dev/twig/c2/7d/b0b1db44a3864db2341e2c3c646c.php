<?php

/* EcoleDeMusiqueWelcomeBundle:Cours:index.html.twig */
class __TwigTemplate_c27db0b1db44a3864db2341e2c3c646c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EcoleDeMusiqueWelcomeBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "        Planning
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo " 
        \t<style>
\t\t\t#lundi, #mardi, #mercredi, #jeudi, #vendredi, #samedi, #dimanche 
\t\t\t{
\t\t\t\t
\t\t\t\t
\t\t\t\t\tvertical-align: top;width:191px;
\t\t\t\t
\t\t\t}
\t\t\t

\t\t\ttd
\t\t\t{
\t\t\t\t
\t\t\t\t\t\tborder:1px solid black;
\t\t\t}
\t\t\t#heure
\t\t\t{
\t\t\t\t
\t\t\t\tvertical-align: top;
\t\t\t  
\t\t\t\t\t
\t\t\t}\t
\t\t\t
\t\t\t.tranche
\t\t\t{
\t\t\t\theight: 60px;   
\t\t\t}
\t\t\t
\t\t\tth
\t\t\t{
\t\t\t\t\tfont-size:0.9em;
\t\t\t}
\t\t\t
\t\t\t.cours
\t\t\t{
\t\t\t\tbackground:#CECECE;
                                position:absolute; width:191px;
                            /*   overflow-y: scroll;
                              */ 
                               
                               font-size: 0.95em;
\t\t\t}
                        
\t\t\t
\t</style>
        <script type=\"text/javascript\">
            
             \$(document).ready(function(){
                 
                 
                 \$(function(){\$(\"#mode\").change(function () {
                         
                                \$('#change').val(\"oui\");
                             
                       
                        }); 
                     }); 
                 
                 \$(function(){\$(\".select\").change(function () {
                         document.forms[\"form\"].submit(); 
                        }); 
                     }); 
                 
                 
                 });
            
            
            
        </script>
        
      <div id=\"header\">
          <div id=\"nompage\">
              
              <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours"), "html", null, true);
        echo "\" method=\"get\" name=\"form\">
                  <span style=\"font-size:4.0em;\">Planning </span>
                  <select class=\"select\" name=\"mode\" id=\"mode\">
                      <option value=\"individuel\"";
        // line 84
        if (($this->getContext($context, "mode") == "individuel")) {
            echo " selected";
        }
        echo ">Individuel</option>
                      <option value=\"salle\"";
        // line 85
        if (($this->getContext($context, "mode") == "salle")) {
            echo " selected";
        }
        echo ">Salle</option>
                      <option value=\"prof\" ";
        // line 86
        if (($this->getContext($context, "mode") == "prof")) {
            echo " selected";
        }
        echo " >Prof</option>
                  </select>
                   <select class=\"select\" name=\"name\" id=\"name\">
                        ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "listselect"));
        foreach ($context['_seq'] as $context["_key"] => $context["listselect"]) {
            // line 90
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listselect"), "id"), "html", null, true);
            echo "\"";
            if (($this->getContext($context, "name") == $this->getAttribute($this->getContext($context, "listselect"), "id"))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listselect"), "nom"), "html", null, true);
            echo " ";
            if ($this->getAttribute($this->getContext($context, "listselect", true), "prenom", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "listselect"), "prenom"), "html", null, true);
                echo " ";
            }
            echo "</option>
                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listselect'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "                   </select>
                  <input type=\"submit\" id=\"change\" name=\"change\" value=\"Actualiser\">
             <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_new"), "html", null, true);
        echo "\">Saisir un nouveau cours individuel</a> <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_new_collectif"), "html", null, true);
        echo "\">Saisir un nouveau cours collectif</a>
               </form>   
   ";
        // line 99
        echo "           
           <!-- <h2 class=\"title\">Informations d'Etat Civil</h2>  -->
        </div>
\t</div>
        <div id=\"page\">
                  <div class=\"post\">
            <table cellspacing=\"0\" cellpadding=\"0\" border=\"1\">
                                            
                                        <tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t   </th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tlundi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tmardi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tmercredi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tjeudi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tvendredi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tSamedi
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\tDimanche
\t\t\t\t\t\t\t\t\t\t\t\t</th>
                                        
                                        
                                        </tr>                                                                                            
                                       <tr>

\t\t\t\t\t\t\t\t\t\t\t\t<td id=\"heure\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t8:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t9:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t10:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t11:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t12:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t13:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t14:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t15:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t16:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t17:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t18:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t19:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t20:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tranche\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t21:00
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t22:00

\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
                                                    <td id=\"lundi\" class=\"body\">
                                                    
                                                       
                                                       ";
        // line 189
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 190
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 191
                echo "                                                     
                                                                ";
                // line 192
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Mon")) {
                    // line 193
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                            <a href=\"";
                    // line 195
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                     </div>
                                                                ";
                }
                // line 198
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 199
            echo "                                                       ";
        }
        // line 200
        echo "                                                        
                                                                    ";
        // line 201
        if (($this->getContext($context, "mode") == "salle")) {
            // line 202
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 203
                echo "
                                                                           ";
                // line 204
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Mon")) {
                    // line 205
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 210
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 211
            echo "                                                                  ";
        }
        // line 212
        echo "
                                                                            ";
        // line 213
        if (($this->getContext($context, "mode") == "prof")) {
            // line 214
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 215
                echo "
                                                                                    ";
                // line 216
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Mon")) {
                    // line 217
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 222
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 223
            echo "                                                                           ";
        }
        // line 224
        echo "                                                        
                                                        
                                                       
                                                    
                                                    
                                                    </td>
                                                    <td id=\"mardi\" class=\"body\"> 
                                                   
                                                       ";
        // line 232
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 233
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 234
                echo "                                                     
                                                                ";
                // line 235
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Tue")) {
                    // line 236
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                     <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                     </div>
                                                                ";
                }
                // line 241
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 242
            echo "                                                       ";
        }
        // line 243
        echo "                                                        
                                                                    ";
        // line 244
        if (($this->getContext($context, "mode") == "salle")) {
            // line 245
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 246
                echo "
                                                                           ";
                // line 247
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Tue")) {
                    // line 248
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 249
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 253
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 254
            echo "                                                                  ";
        }
        // line 255
        echo "
                                                                            ";
        // line 256
        if (($this->getContext($context, "mode") == "prof")) {
            // line 257
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 258
                echo "
                                                                                    ";
                // line 259
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Tue")) {
                    // line 260
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 265
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 266
            echo "                                                                           ";
        }
        // line 267
        echo "          
                                                    </td>
                                                    <td id=\"mercredi\" class=\"body\">                                                    
                                                    ";
        // line 270
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 271
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 272
                echo "                                                     
                                                                ";
                // line 273
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Wed")) {
                    // line 274
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                      <a href=\"";
                    // line 276
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                     </div>
                                                                ";
                }
                // line 279
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 280
            echo "                                                       ";
        }
        // line 281
        echo "                                                        
                                                                    ";
        // line 282
        if (($this->getContext($context, "mode") == "salle")) {
            // line 283
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 284
                echo "
                                                                           ";
                // line 285
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Wed")) {
                    // line 286
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 287
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 288
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 291
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 292
            echo "                                                                  ";
        }
        // line 293
        echo "
                                                                            ";
        // line 294
        if (($this->getContext($context, "mode") == "prof")) {
            // line 295
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 296
                echo "
                                                                                    ";
                // line 297
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Wed")) {
                    // line 298
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 299
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                               <a href=\"";
                    // line 300
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 303
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 304
            echo "                                                                           ";
        }
        // line 305
        echo "                                                        
                                                
                                                    
                                                    </td>
                                                    <td id=\"jeudi\" class=\"body\">
                                                          ";
        // line 310
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 311
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 312
                echo "                                                     
                                                                ";
                // line 313
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Thu")) {
                    // line 314
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 315
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                        <a href=\"";
                    // line 316
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>                             
                                                                     </div>
                                                                ";
                }
                // line 319
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 320
            echo "                                                       ";
        }
        // line 321
        echo "                                                        
                                                                    ";
        // line 322
        if (($this->getContext($context, "mode") == "salle")) {
            // line 323
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 324
                echo "
                                                                           ";
                // line 325
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Thu")) {
                    // line 326
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 327
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 328
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 331
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 332
            echo "                                                                  ";
        }
        // line 333
        echo "
                                                                            ";
        // line 334
        if (($this->getContext($context, "mode") == "prof")) {
            // line 335
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 336
                echo "
                                                                                    ";
                // line 337
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Thu")) {
                    // line 338
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 339
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 340
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 343
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 344
            echo "                                                                           ";
        }
        // line 345
        echo "                                                    
                                                    </td>
                                                   <td id=\"vendredi\" class=\"body\">
                                                       
                                                      ";
        // line 349
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 350
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 351
                echo "                                                     
                                                                ";
                // line 352
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Fri")) {
                    // line 353
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 354
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                       <a href=\"";
                    // line 355
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>                                                                      
                                                                     </div>
                                                                ";
                }
                // line 358
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 359
            echo "                                                       ";
        }
        // line 360
        echo "                                                        
                                                                    ";
        // line 361
        if (($this->getContext($context, "mode") == "salle")) {
            // line 362
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 363
                echo "
                                                                           ";
                // line 364
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Fri")) {
                    // line 365
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 366
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 367
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 370
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 371
            echo "                                                                  ";
        }
        // line 372
        echo "
                                                                            ";
        // line 373
        if (($this->getContext($context, "mode") == "prof")) {
            // line 374
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 375
                echo "
                                                                                    ";
                // line 376
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Fri")) {
                    // line 377
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                            <a href=\"";
                    // line 379
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 382
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 383
            echo "                                                                           ";
        }
        // line 384
        echo "                                         
                                                    </td>
                                                    
                                                    
                                                       <td id=\"samedi\" class=\"body\">
                                                           
                                                           
                                                           
                                                           ";
        // line 392
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 393
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 394
                echo "                                                     
                                                                ";
                // line 395
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Sat")) {
                    // line 396
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 397
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                        <a href=\"";
                    // line 398
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                     </div>
                                                                ";
                }
                // line 401
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 402
            echo "                                                       ";
        }
        // line 403
        echo "                                                        
                                                                    ";
        // line 404
        if (($this->getContext($context, "mode") == "salle")) {
            // line 405
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 406
                echo "
                                                                           ";
                // line 407
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Sat")) {
                    // line 408
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 409
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 410
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 413
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 414
            echo "                                                                  ";
        }
        // line 415
        echo "
                                                                            ";
        // line 416
        if (($this->getContext($context, "mode") == "prof")) {
            // line 417
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 418
                echo "
                                                                                    ";
                // line 419
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Sat")) {
                    // line 420
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 421
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 422
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 425
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 426
            echo "                                                                           ";
        }
        // line 427
        echo "                                                    
                                           
                                                    </td>
                                                        <td id=\"dimanche\" class=\"body\">
                                                            
                                                            ";
        // line 432
        if (($this->getContext($context, "mode") == "individuel")) {
            // line 433
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 434
                echo "                                                     
                                                                ";
                // line 435
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "D") == "Sun")) {
                    // line 436
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 437
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                          <a href=\"";
                    // line 438
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "cours"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "eleve"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                     </div>
                                                                ";
                }
                // line 441
                echo "                                                              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 442
            echo "                                                       ";
        }
        // line 443
        echo "                                                        
                                                                    ";
        // line 444
        if (($this->getContext($context, "mode") == "salle")) {
            // line 445
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 446
                echo "
                                                                           ";
                // line 447
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Sun")) {
                    // line 448
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 449
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 450
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                </div>
                                                                           ";
                }
                // line 453
                echo "                                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 454
            echo "                                                                  ";
        }
        // line 455
        echo "
                                                                            ";
        // line 456
        if (($this->getContext($context, "mode") == "prof")) {
            // line 457
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 458
                echo "
                                                                                    ";
                // line 459
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "D") == "Sun")) {
                    // line 460
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 461
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                            <a href=\"";
                    // line 462
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"), "mode" => $this->getContext($context, "mode"), "name" => $this->getAttribute($this->getAttribute($this->getContext($context, "entity"), "prof"), "id"))), "html", null, true);
                    echo "\">Suppr.</a>
                                                                                         </div>
                                                                                    ";
                }
                // line 465
                echo "                                                                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 466
            echo "                                                                           ";
        }
        // line 467
        echo "                                                    </td>
                                                  </tr>
                                                  
                                                    
                                                    
                                                    
                                                    
\t\t\t\t\t\t\t\t\t\t\t\t
</table>
                      
                      
                      
                      
                                
                  </div>
            
                  </div>
                        ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Cours:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 466,  1257 => 465,  1243 => 461,  1236 => 460,  1234 => 459,  1231 => 458,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1191 => 448,  1186 => 446,  1181 => 445,  1179 => 444,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  506 => 255,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  458 => 242,  452 => 241,  427 => 236,  422 => 234,  415 => 232,  402 => 223,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  315 => 200,  300 => 195,  281 => 193,  271 => 190,  269 => 189,  166 => 92,  141 => 89,  349 => 140,  333 => 126,  318 => 201,  314 => 123,  303 => 114,  286 => 112,  237 => 86,  175 => 66,  126 => 54,  417 => 233,  404 => 167,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  243 => 106,  235 => 103,  217 => 101,  213 => 100,  199 => 88,  181 => 86,  113 => 59,  107 => 40,  137 => 60,  86 => 37,  99 => 43,  1328 => 25,  1322 => 22,  1316 => 19,  1312 => 18,  1308 => 16,  1305 => 15,  1297 => 522,  1276 => 507,  1270 => 504,  1266 => 467,  1251 => 462,  1245 => 488,  1241 => 487,  1235 => 486,  1217 => 471,  1213 => 470,  1201 => 460,  1189 => 447,  1183 => 451,  1176 => 443,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  496 => 243,  490 => 241,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  446 => 238,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  411 => 213,  405 => 224,  399 => 210,  395 => 209,  383 => 164,  376 => 204,  370 => 215,  364 => 201,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  312 => 199,  304 => 184,  288 => 194,  255 => 99,  251 => 98,  239 => 105,  231 => 165,  224 => 161,  219 => 84,  197 => 150,  188 => 148,  176 => 143,  167 => 141,  479 => 284,  461 => 243,  455 => 269,  451 => 268,  445 => 267,  432 => 257,  425 => 235,  413 => 246,  407 => 243,  400 => 239,  396 => 222,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  359 => 219,  352 => 215,  344 => 210,  337 => 206,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  247 => 152,  241 => 149,  234 => 145,  227 => 141,  202 => 152,  193 => 79,  179 => 113,  169 => 79,  110 => 49,  90 => 38,  23 => 3,  192 => 79,  190 => 78,  174 => 111,  170 => 94,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 35,  40 => 12,  69 => 32,  301 => 100,  295 => 96,  292 => 181,  289 => 94,  287 => 174,  282 => 111,  276 => 191,  273 => 85,  270 => 101,  268 => 174,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 83,  211 => 81,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 99,  160 => 63,  109 => 51,  103 => 34,  82 => 33,  65 => 31,  38 => 6,  158 => 58,  150 => 76,  144 => 59,  142 => 50,  129 => 62,  125 => 61,  117 => 48,  112 => 42,  87 => 28,  67 => 19,  61 => 21,  47 => 9,  28 => 3,  91 => 20,  84 => 36,  44 => 18,  25 => 3,  225 => 96,  216 => 90,  212 => 157,  205 => 153,  201 => 83,  196 => 80,  194 => 149,  191 => 78,  189 => 78,  186 => 147,  180 => 144,  172 => 67,  159 => 107,  154 => 77,  147 => 53,  132 => 62,  127 => 85,  121 => 84,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 44,  75 => 23,  71 => 34,  34 => 11,  105 => 24,  93 => 39,  76 => 34,  72 => 33,  68 => 25,  58 => 26,  27 => 7,  94 => 39,  88 => 27,  79 => 35,  59 => 25,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 22,  46 => 9,  22 => 2,  163 => 140,  155 => 50,  152 => 105,  149 => 51,  145 => 90,  139 => 45,  131 => 62,  123 => 59,  120 => 46,  115 => 81,  106 => 44,  101 => 39,  96 => 41,  83 => 36,  80 => 35,  74 => 54,  66 => 48,  55 => 20,  52 => 23,  50 => 10,  43 => 6,  41 => 7,  37 => 7,  35 => 3,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 108,  162 => 57,  157 => 64,  153 => 63,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 86,  130 => 55,  122 => 37,  119 => 60,  116 => 35,  111 => 45,  108 => 37,  102 => 41,  98 => 40,  95 => 38,  92 => 28,  89 => 37,  85 => 36,  81 => 30,  73 => 28,  64 => 29,  60 => 28,  57 => 22,  54 => 10,  51 => 9,  48 => 17,  45 => 6,  42 => 5,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
