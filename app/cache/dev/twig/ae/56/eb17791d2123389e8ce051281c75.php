<?php

/* EcoleDeMusiqueWelcomeBundle:Default:index.html.twig */
class __TwigTemplate_ae56eb17791d2123389e8ce051281c75 extends Twig_Template
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
\t\t\t<h1>Acceuil</h1>
\t\t</div>
\t</div>
        
        <div id=\"page\">
                       <div id=\"content\">
                            <div class=\"post\">
                            <h2 class=\"title\">Bienvenue dans l'application Ecole de Musique</h2>
                                    <div class=\"entry\">
                                        <p>L'application <strong>Ecole de Musique </strong>, permet de consulter les <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">Paiements</a> et les <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("activite_sommaire"), "html", null, true);
        echo "\">Activités</a> des élèves de l'école de musique. Vous pouvez naviguer dans l'application grâce au menu ci dessus </p>\t\t\t
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
        return "EcoleDeMusiqueWelcomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 23,  46 => 11,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
