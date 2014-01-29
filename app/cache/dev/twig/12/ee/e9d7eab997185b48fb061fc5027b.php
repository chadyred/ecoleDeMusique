<?php

/* EcoleDeMusiqueWelcomeBundle:Security:login.html.twig */
class __TwigTemplate_12eee9d7eab997185b48fb061fc5027b extends Twig_Template
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
        echo "      Identifiez vous
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        echo "      
           
     \t<div id=\"headerCentre\">
\t\t<div id=\"nompage\">
\t\t\t<h1>Identifiez vous </h1>
\t\t</div>
\t</div>
      
          
        <div id=\"page\">
                       <div id=\"content\">
                            <div class=\"post\">
                                    <div class=\"entry\">
      
                                        ";
        // line 21
        if ($this->getContext($context, "error")) {
            // line 22
            echo "                                        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 24
        echo "                                        <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
                                            <label for=\"username\">Login :</label>
                                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
                                            <label for=\"password\">Mot de passe :</label>
                                            <input type=\"password\" id=\"password\" name=\"_password\" />

                                            <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />

                                            <button type=\"submit\">login</button>
                                        </form>
                                    </div>
                            </div>
                          </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 26,  63 => 24,  57 => 22,  55 => 21,  37 => 7,  32 => 4,  29 => 3,);
    }
}
