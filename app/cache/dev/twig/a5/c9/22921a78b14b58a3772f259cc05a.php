<?php

/* EcoleDeMusiqueWelcomeBundle:Security:login.html.twig */
class __TwigTemplate_a5c922921a78b14b58a3772f259cc05a extends Twig_Template
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
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                                        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        return array (  69 => 26,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 57,  109 => 41,  103 => 34,  82 => 24,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 50,  142 => 50,  129 => 45,  125 => 44,  117 => 42,  112 => 42,  87 => 28,  67 => 19,  61 => 16,  47 => 9,  28 => 3,  91 => 20,  84 => 19,  44 => 12,  25 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 53,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  34 => 11,  105 => 24,  93 => 20,  76 => 22,  72 => 14,  68 => 12,  58 => 12,  27 => 4,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  31 => 5,  26 => 6,  21 => 2,  24 => 2,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 49,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 39,  106 => 35,  101 => 33,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 21,  52 => 15,  50 => 10,  43 => 6,  41 => 5,  37 => 7,  35 => 5,  32 => 4,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 50,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 38,  108 => 37,  102 => 30,  98 => 34,  95 => 33,  92 => 28,  89 => 19,  85 => 24,  81 => 25,  73 => 19,  64 => 17,  60 => 23,  57 => 22,  54 => 10,  51 => 9,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
