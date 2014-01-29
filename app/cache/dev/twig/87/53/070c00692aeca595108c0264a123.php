<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:search.html.twig */
class __TwigTemplate_8753070c00692aeca595108c0264a123 extends Twig_Template
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
        echo "        Paiement
";
    }

    // line 6
    public function block_titlePage($context, array $blocks = array())
    {
        // line 7
        echo "        Paiement
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        echo " 
            <div id=\"headerCentre\">
                        <div id=\"nompage\">
                                <h1>Paiements</h1>
                        </div>
                </div>
        <div id=\"page\">
               <div id=\"content\">
                  <div class=\"post\">
                       <h2 class=\"title\">Liste des Paiements </h2>
                             <div class=\"entry\">
                                 <p>Si vous voulez avoir tous les paiements pour un export ne rentrez aucun critère</p>
                                 <br />

                                        <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_searchResult"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
                                            
                                            <table>
                                                                               
                             
                                       <tr>
                                                    <td>
                                                            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("nom :")) ? array() : array("label" => $_label_)));
        echo "
                                                    </td>
                                                    <td>
                                                              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget');
        echo " 
                                                   </td>
                                           </tr>
                                           <tr>
                                                    <td>
                                                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("prénom :")) ? array() : array("label" => $_label_)));
        echo "
                                                    </td>
                                                    <td>
                                                              ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget');
        echo " 
                                                   </td>
                                           </tr>
                                              <tr>
                                                    <td>
                                                            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cycle"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("cycle :")) ? array() : array("label" => $_label_)));
        echo "
                                                    </td>
                                                    <td>
                                                              ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "cycle"), 'widget');
        echo " 
                                                   </td>
                                           </tr>
                                            <tr>
                                                    <td>
                                                            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sommePeriode"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Somme par periode :")) ? array() : array("label" => $_label_)));
        echo "
                                                    </td>
                                                    <td>
                                                              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sommePeriode"), 'widget');
        echo " 
                                                   </td>
                                           </tr>
                                           <tr>
                                                    <td>
                                                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sommeTotal"), 'label', (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Somme Total :")) ? array() : array("label" => $_label_)));
        echo "
                                                    </td>
                                                    <td>
                                                              ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "sommeTotal"), 'widget');
        echo " 
                                                   </td>
                                           </tr>
                                                    
                                                    
                                                    
                                           </table>
                                            <p>
                                                <button type=\"submit\">Recherche</button>
                                            </p>
                                        </form>

                                     
                              </div>
                  </div>
              </div>
         </div>
      ";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Paiement:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 65,  132 => 62,  124 => 57,  118 => 54,  110 => 49,  104 => 46,  96 => 41,  90 => 38,  82 => 33,  76 => 30,  64 => 23,  46 => 9,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
