<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig */
class __TwigTemplate_9e214c22706062c8cc5e1b07e28fed18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Paiement edit</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <p>
        <button type=\"submit\">Edit</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:Paiement:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  53 => 20,  49 => 19,  62 => 27,  192 => 79,  190 => 78,  174 => 71,  170 => 70,  156 => 62,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  496 => 258,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 234,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  411 => 207,  404 => 203,  399 => 200,  396 => 199,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 178,  352 => 174,  347 => 171,  344 => 170,  337 => 166,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 115,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 71,  164 => 68,  137 => 54,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 93,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 97,  211 => 78,  204 => 66,  198 => 63,  185 => 61,  183 => 73,  177 => 58,  160 => 63,  109 => 41,  103 => 34,  82 => 23,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  87 => 28,  67 => 19,  61 => 22,  47 => 9,  105 => 36,  93 => 20,  76 => 22,  72 => 27,  68 => 25,  91 => 20,  84 => 24,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 23,  59 => 22,  44 => 19,  31 => 2,  27 => 7,  25 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 96,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  159 => 66,  154 => 59,  147 => 59,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 30,  75 => 21,  71 => 19,  58 => 12,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 61,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 21,  83 => 18,  80 => 39,  74 => 16,  66 => 15,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 15,  37 => 8,  35 => 5,  32 => 4,  29 => 4,  184 => 80,  178 => 71,  171 => 62,  165 => 58,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 34,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 12,  60 => 23,  57 => 21,  54 => 9,  51 => 8,  48 => 17,  45 => 8,  42 => 7,  39 => 9,  36 => 16,  33 => 4,  30 => 7,);
    }
}
