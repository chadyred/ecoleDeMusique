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
        return array (  110 => 49,  90 => 38,  23 => 3,  192 => 79,  190 => 78,  174 => 71,  170 => 70,  156 => 62,  148 => 60,  140 => 58,  128 => 55,  124 => 57,  77 => 29,  40 => 12,  69 => 26,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 78,  204 => 66,  198 => 63,  185 => 61,  183 => 73,  177 => 58,  160 => 63,  109 => 41,  103 => 34,  82 => 33,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 45,  125 => 44,  117 => 42,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  91 => 20,  84 => 19,  44 => 19,  25 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 62,  127 => 49,  121 => 45,  118 => 54,  114 => 43,  104 => 46,  100 => 43,  78 => 24,  75 => 23,  71 => 19,  34 => 11,  105 => 24,  93 => 20,  76 => 30,  72 => 14,  68 => 25,  58 => 12,  27 => 4,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 5,  26 => 6,  21 => 1,  24 => 2,  19 => 1,  70 => 20,  63 => 24,  46 => 9,  22 => 2,  163 => 63,  155 => 50,  152 => 61,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 41,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 21,  52 => 15,  50 => 10,  43 => 6,  41 => 7,  37 => 7,  35 => 5,  32 => 4,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 65,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 34,  95 => 41,  92 => 28,  89 => 19,  85 => 24,  81 => 30,  73 => 28,  64 => 23,  60 => 23,  57 => 22,  54 => 10,  51 => 9,  48 => 23,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
