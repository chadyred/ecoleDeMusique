<?php

/* EcoleDeMusiqueWelcomeBundle:Paiement:show.html.twig */
class __TwigTemplate_cbf7c568ca9aeebc414bd1f8eedcb6b0 extends Twig_Template
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
        echo "<h1>Paiement</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Interupt</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "interupt"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dateinterupt</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateInterupt"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Sommeperiode</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sommePeriode"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiement_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 37
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
        return "EcoleDeMusiqueWelcomeBundle:Paiement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  524 => 309,  506 => 297,  500 => 294,  490 => 292,  477 => 282,  465 => 273,  450 => 263,  438 => 257,  432 => 254,  426 => 250,  412 => 245,  408 => 243,  402 => 241,  398 => 239,  390 => 235,  384 => 232,  378 => 229,  372 => 226,  366 => 223,  331 => 203,  325 => 200,  316 => 194,  307 => 188,  298 => 182,  280 => 170,  274 => 167,  261 => 160,  254 => 156,  241 => 149,  234 => 145,  227 => 141,  202 => 125,  193 => 119,  179 => 113,  90 => 36,  53 => 20,  49 => 19,  62 => 27,  192 => 79,  190 => 78,  174 => 111,  170 => 70,  156 => 106,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  496 => 293,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 272,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 248,  414 => 246,  411 => 207,  404 => 203,  399 => 200,  396 => 238,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 219,  352 => 215,  347 => 171,  344 => 210,  337 => 206,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 152,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 109,  164 => 68,  137 => 54,  97 => 41,  40 => 12,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 174,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 164,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 137,  215 => 97,  211 => 131,  204 => 66,  198 => 63,  185 => 114,  183 => 73,  177 => 58,  160 => 63,  109 => 41,  103 => 34,  82 => 23,  65 => 23,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  87 => 28,  67 => 19,  61 => 22,  47 => 9,  105 => 36,  93 => 20,  76 => 22,  72 => 27,  68 => 25,  91 => 20,  84 => 24,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 23,  59 => 18,  44 => 19,  31 => 2,  27 => 7,  25 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 96,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  159 => 107,  154 => 59,  147 => 59,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 37,  75 => 21,  71 => 19,  58 => 26,  34 => 11,  26 => 6,  19 => 1,  70 => 20,  63 => 19,  46 => 7,  22 => 2,  163 => 63,  155 => 50,  152 => 105,  149 => 51,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 46,  115 => 48,  106 => 44,  101 => 33,  96 => 21,  83 => 18,  80 => 39,  74 => 36,  66 => 31,  55 => 23,  52 => 18,  50 => 10,  43 => 18,  41 => 15,  37 => 8,  35 => 5,  32 => 4,  29 => 4,  184 => 80,  178 => 71,  171 => 62,  165 => 108,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 37,  102 => 30,  98 => 34,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 12,  60 => 23,  57 => 21,  54 => 9,  51 => 8,  48 => 19,  45 => 8,  42 => 8,  39 => 7,  36 => 16,  33 => 4,  30 => 3,);
    }
}
