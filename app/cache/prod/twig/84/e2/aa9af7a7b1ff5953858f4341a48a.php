<?php

/* EcoleDeMusiqueWelcomeBundle:Cours:index.html.twig */
class __TwigTemplate_84e2aa9af7a7b1ff5953858f4341a48a extends Twig_Template
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            echo " selected";
        }
        echo ">Individuel</option>
                      <option value=\"salle\"";
        // line 85
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            echo " selected";
        }
        echo ">Salle</option>
                      <option value=\"prof\" ";
        // line 86
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            echo " selected";
        }
        echo " >Prof</option>
                  </select>
                   <select class=\"select\" name=\"name\" id=\"name\">
                        ";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listselect"]) ? $context["listselect"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["listselect"]) {
            // line 90
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listselect"]) ? $context["listselect"] : null), "id"), "html", null, true);
            echo "\"";
            if (((isset($context["name"]) ? $context["name"] : null) == $this->getAttribute((isset($context["listselect"]) ? $context["listselect"] : null), "id"))) {
                echo " selected ";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listselect"]) ? $context["listselect"] : null), "nom"), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["listselect"]) ? $context["listselect"] : null), "prenom", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listselect"]) ? $context["listselect"] : null), "prenom"), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 190
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 191
                echo "                                                     
                                                                ";
                // line 192
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Mon")) {
                    // line 193
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                            <a href=\"";
                    // line 195
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 202
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 203
                echo "
                                                                           ";
                // line 204
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Mon")) {
                    // line 205
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 206
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 214
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 215
                echo "
                                                                                    ";
                // line 216
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Mon")) {
                    // line 217
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 218
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 219
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 233
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 234
                echo "                                                     
                                                                ";
                // line 235
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Tue")) {
                    // line 236
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 237
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                     <a href=\"";
                    // line 238
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 245
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 246
                echo "
                                                                           ";
                // line 247
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Tue")) {
                    // line 248
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 249
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 250
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 257
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 258
                echo "
                                                                                    ";
                // line 259
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Tue")) {
                    // line 260
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 261
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 262
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 271
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 272
                echo "                                                     
                                                                ";
                // line 273
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Wed")) {
                    // line 274
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 275
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                      <a href=\"";
                    // line 276
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 283
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 284
                echo "
                                                                           ";
                // line 285
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Wed")) {
                    // line 286
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 287
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 288
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 295
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 296
                echo "
                                                                                    ";
                // line 297
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Wed")) {
                    // line 298
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 299
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                               <a href=\"";
                    // line 300
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 311
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 312
                echo "                                                     
                                                                ";
                // line 313
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Thu")) {
                    // line 314
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 315
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                        <a href=\"";
                    // line 316
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 323
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 324
                echo "
                                                                           ";
                // line 325
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Thu")) {
                    // line 326
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 327
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 328
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 335
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 336
                echo "
                                                                                    ";
                // line 337
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Thu")) {
                    // line 338
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 339
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 340
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 350
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 351
                echo "                                                     
                                                                ";
                // line 352
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Fri")) {
                    // line 353
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 354
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                       <a href=\"";
                    // line 355
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 362
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 363
                echo "
                                                                           ";
                // line 364
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Fri")) {
                    // line 365
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 366
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 367
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 374
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 375
                echo "
                                                                                    ";
                // line 376
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Fri")) {
                    // line 377
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 378
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                            <a href=\"";
                    // line 379
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 393
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 394
                echo "                                                     
                                                                ";
                // line 395
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Sat")) {
                    // line 396
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 397
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                        <a href=\"";
                    // line 398
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 405
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 406
                echo "
                                                                           ";
                // line 407
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Sat")) {
                    // line 408
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 409
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 410
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 417
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 418
                echo "
                                                                                    ";
                // line 419
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Sat")) {
                    // line 420
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 421
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                             <a href=\"";
                    // line 422
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "individuel")) {
            // line 433
            echo "                                                              ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 434
                echo "                                                     
                                                                ";
                // line 435
                if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "D") == "Sun")) {
                    // line 436
                    echo "                                                                     <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                        <strong>";
                    // line 437
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "activite"), "nom"), "html", null, true);
                    echo "</strong> - ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "salle"), "nom"), "html", null, true);
                    echo "- Mr  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "prof"), "nom"), "html", null, true);
                    echo " - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                          <a href=\"";
                    // line 438
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cours"), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "eleve"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "salle")) {
            // line 445
            echo "                                                                         ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 446
                echo "
                                                                           ";
                // line 447
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Sun")) {
                    // line 448
                    echo "                                                                                <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                   <strong>";
                    // line 449
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "activite"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                    <a href=\"";
                    // line 450
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "id"))), "html", null, true);
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
        if (((isset($context["mode"]) ? $context["mode"] : null) == "prof")) {
            // line 457
            echo "                                                                                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 458
                echo "
                                                                                    ";
                // line 459
                if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "D") == "Sun")) {
                    // line 460
                    echo "                                                                                         <div class=\"cours\" style=\"margin-top: ";
                    echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i")), "html", null, true);
                    echo "px;height: ";
                    echo twig_escape_filter($this->env, ((((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "i")) - (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H") - 8) * 60) + twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "i"))), "html", null, true);
                    echo "px;\">
                                                                                            <strong>";
                    // line 461
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "salle"), "nom"), "html", null, true);
                    echo "</strong> - <i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateDeb"), "H:i"), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dateFin"), "H:i"), "html", null, true);
                    echo "</i>
                                                                                            <a href=\"";
                    // line 462
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cours_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "mode" => (isset($context["mode"]) ? $context["mode"] : null), "name" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "prof"), "id"))), "html", null, true);
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
        return array (  1266 => 467,  1263 => 466,  1257 => 465,  1251 => 462,  1243 => 461,  1236 => 460,  1234 => 459,  1226 => 457,  1224 => 456,  1221 => 455,  1218 => 454,  1212 => 453,  1206 => 450,  1198 => 449,  1189 => 447,  1186 => 446,  1181 => 445,  1176 => 443,  1173 => 442,  1167 => 441,  1161 => 438,  1149 => 437,  1142 => 436,  1140 => 435,  1137 => 434,  1130 => 432,  1123 => 427,  1120 => 426,  1114 => 425,  1108 => 422,  1100 => 421,  1091 => 419,  1088 => 418,  1083 => 417,  1078 => 415,  1075 => 414,  1069 => 413,  1063 => 410,  1055 => 409,  1046 => 407,  1043 => 406,  1038 => 405,  1036 => 404,  1033 => 403,  1030 => 402,  1018 => 398,  1006 => 397,  999 => 396,  997 => 395,  994 => 394,  989 => 393,  987 => 392,  977 => 384,  974 => 383,  962 => 379,  954 => 378,  947 => 377,  945 => 376,  942 => 375,  937 => 374,  935 => 373,  932 => 372,  929 => 371,  923 => 370,  917 => 367,  909 => 366,  900 => 364,  897 => 363,  892 => 362,  890 => 361,  887 => 360,  884 => 359,  878 => 358,  872 => 355,  860 => 354,  853 => 353,  848 => 351,  843 => 350,  841 => 349,  835 => 345,  826 => 343,  820 => 340,  812 => 339,  805 => 338,  803 => 337,  800 => 336,  795 => 335,  793 => 334,  790 => 333,  787 => 332,  781 => 331,  775 => 328,  767 => 327,  758 => 325,  755 => 324,  750 => 323,  748 => 322,  745 => 321,  742 => 320,  730 => 316,  718 => 315,  711 => 314,  709 => 313,  706 => 312,  701 => 311,  692 => 305,  689 => 304,  683 => 303,  677 => 300,  662 => 298,  660 => 297,  657 => 296,  652 => 295,  650 => 294,  647 => 293,  644 => 292,  638 => 291,  632 => 288,  624 => 287,  617 => 286,  615 => 285,  612 => 284,  607 => 283,  602 => 281,  593 => 279,  587 => 276,  568 => 274,  566 => 273,  558 => 271,  556 => 270,  551 => 267,  548 => 266,  542 => 265,  536 => 262,  528 => 261,  521 => 260,  519 => 259,  516 => 258,  509 => 256,  497 => 253,  491 => 250,  483 => 249,  476 => 248,  471 => 246,  464 => 244,  452 => 241,  427 => 236,  425 => 235,  422 => 234,  415 => 232,  382 => 218,  375 => 217,  373 => 216,  365 => 214,  363 => 213,  357 => 211,  351 => 210,  330 => 205,  320 => 202,  318 => 201,  271 => 190,  417 => 233,  387 => 165,  367 => 152,  350 => 150,  345 => 207,  341 => 147,  339 => 146,  327 => 136,  310 => 134,  306 => 198,  294 => 123,  279 => 192,  275 => 120,  235 => 103,  107 => 58,  141 => 89,  161 => 73,  285 => 136,  281 => 193,  267 => 124,  256 => 119,  226 => 139,  218 => 136,  213 => 100,  207 => 133,  203 => 90,  187 => 128,  175 => 125,  135 => 90,  139 => 62,  86 => 35,  283 => 177,  277 => 174,  258 => 163,  253 => 161,  233 => 155,  217 => 101,  214 => 95,  210 => 94,  206 => 146,  199 => 88,  195 => 130,  168 => 130,  101 => 57,  69 => 32,  238 => 155,  228 => 106,  208 => 148,  145 => 90,  173 => 87,  146 => 60,  134 => 60,  113 => 59,  99 => 43,  181 => 86,  155 => 94,  126 => 50,  37 => 7,  243 => 106,  223 => 105,  209 => 97,  166 => 92,  131 => 62,  1342 => 25,  1336 => 22,  1330 => 19,  1326 => 18,  1322 => 16,  1319 => 15,  1311 => 528,  1290 => 513,  1284 => 510,  1280 => 509,  1265 => 497,  1259 => 494,  1255 => 493,  1249 => 492,  1231 => 458,  1227 => 476,  1215 => 466,  1203 => 460,  1197 => 457,  1191 => 448,  1185 => 451,  1179 => 444,  1177 => 448,  1172 => 445,  1166 => 443,  1162 => 441,  1160 => 440,  1150 => 433,  1144 => 430,  1138 => 429,  1132 => 433,  1128 => 426,  1116 => 425,  1109 => 421,  1103 => 420,  1097 => 418,  1093 => 420,  1081 => 416,  1074 => 412,  1070 => 411,  1064 => 409,  1060 => 408,  1048 => 408,  1040 => 402,  1034 => 401,  1028 => 399,  1024 => 401,  1012 => 397,  1004 => 392,  998 => 391,  992 => 389,  988 => 388,  976 => 387,  968 => 382,  961 => 380,  955 => 378,  951 => 377,  939 => 376,  931 => 373,  926 => 371,  914 => 362,  908 => 361,  902 => 365,  898 => 358,  886 => 357,  879 => 353,  873 => 352,  867 => 350,  863 => 349,  851 => 352,  844 => 344,  838 => 343,  832 => 344,  828 => 340,  816 => 339,  808 => 334,  802 => 333,  796 => 331,  792 => 330,  780 => 329,  772 => 324,  766 => 323,  760 => 326,  756 => 320,  744 => 319,  736 => 319,  729 => 312,  723 => 310,  719 => 309,  707 => 308,  699 => 310,  688 => 297,  681 => 293,  675 => 292,  669 => 299,  665 => 289,  653 => 288,  646 => 284,  640 => 283,  634 => 281,  630 => 280,  618 => 279,  611 => 275,  605 => 282,  599 => 280,  595 => 271,  583 => 270,  575 => 275,  569 => 264,  563 => 272,  559 => 261,  547 => 260,  539 => 255,  533 => 254,  527 => 252,  523 => 251,  511 => 257,  503 => 254,  486 => 240,  474 => 247,  466 => 245,  460 => 233,  440 => 221,  434 => 237,  430 => 218,  418 => 217,  405 => 224,  395 => 209,  370 => 215,  360 => 212,  348 => 199,  340 => 194,  334 => 193,  328 => 204,  324 => 190,  304 => 184,  288 => 194,  255 => 170,  251 => 160,  239 => 105,  231 => 165,  224 => 152,  219 => 104,  188 => 83,  167 => 97,  110 => 50,  524 => 309,  506 => 255,  500 => 294,  490 => 241,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 223,  398 => 239,  390 => 219,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 203,  316 => 194,  307 => 188,  298 => 183,  280 => 170,  274 => 167,  261 => 108,  254 => 156,  241 => 157,  234 => 145,  227 => 141,  202 => 152,  193 => 119,  179 => 126,  52 => 23,  90 => 40,  53 => 20,  49 => 19,  80 => 30,  62 => 27,  192 => 106,  190 => 144,  174 => 76,  170 => 94,  156 => 68,  148 => 64,  140 => 61,  128 => 88,  124 => 56,  77 => 35,  496 => 243,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 243,  458 => 242,  451 => 229,  446 => 238,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 213,  404 => 167,  399 => 210,  396 => 222,  388 => 194,  383 => 164,  381 => 190,  376 => 204,  369 => 183,  364 => 201,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 200,  312 => 199,  305 => 150,  300 => 195,  297 => 144,  284 => 136,  269 => 189,  264 => 165,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 156,  232 => 107,  229 => 154,  221 => 152,  200 => 146,  197 => 150,  182 => 79,  176 => 133,  169 => 79,  164 => 69,  152 => 63,  137 => 60,  115 => 81,  97 => 38,  40 => 12,  23 => 3,  301 => 149,  295 => 96,  292 => 181,  289 => 139,  287 => 174,  282 => 135,  276 => 191,  273 => 85,  270 => 169,  268 => 174,  263 => 123,  249 => 79,  245 => 158,  230 => 75,  222 => 73,  220 => 151,  215 => 97,  211 => 117,  204 => 112,  198 => 63,  185 => 81,  183 => 127,  177 => 99,  160 => 80,  149 => 93,  123 => 46,  120 => 54,  109 => 49,  103 => 46,  82 => 37,  65 => 31,  38 => 7,  158 => 66,  150 => 76,  144 => 58,  142 => 72,  129 => 62,  125 => 61,  117 => 48,  112 => 47,  106 => 49,  87 => 44,  70 => 24,  67 => 32,  61 => 20,  47 => 17,  105 => 40,  96 => 37,  93 => 46,  83 => 38,  76 => 35,  72 => 25,  68 => 24,  50 => 10,  91 => 45,  84 => 33,  74 => 30,  66 => 20,  55 => 23,  28 => 3,  24 => 3,  94 => 46,  88 => 32,  79 => 35,  59 => 27,  43 => 18,  46 => 10,  44 => 18,  31 => 11,  27 => 7,  32 => 4,  25 => 4,  35 => 12,  29 => 3,  21 => 1,  225 => 153,  216 => 150,  212 => 149,  205 => 153,  201 => 83,  196 => 145,  194 => 149,  191 => 129,  189 => 82,  186 => 103,  180 => 134,  172 => 131,  163 => 96,  159 => 95,  154 => 77,  147 => 112,  132 => 89,  127 => 85,  121 => 84,  118 => 64,  114 => 43,  104 => 53,  100 => 43,  78 => 44,  75 => 33,  71 => 33,  63 => 25,  58 => 19,  41 => 15,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 135,  178 => 77,  171 => 98,  165 => 123,  162 => 67,  157 => 65,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 60,  133 => 86,  130 => 59,  122 => 65,  119 => 60,  116 => 48,  111 => 45,  108 => 62,  102 => 44,  98 => 47,  95 => 56,  92 => 36,  89 => 41,  85 => 32,  81 => 30,  73 => 34,  64 => 29,  60 => 28,  57 => 25,  54 => 20,  51 => 22,  48 => 17,  45 => 19,  42 => 5,  39 => 7,  36 => 16,  33 => 5,  30 => 4,);
    }
}
