<?php

/* EcoleDeMusiqueWelcomeBundle:PaiementPeriode:show.html.twig */
class __TwigTemplate_ec5ace23ca2dfa39c730c388b691e463 extends Twig_Template
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
        echo "<h1>PaiementPeriode</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numperiod</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numPeriod"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Numeraire</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numeraire"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Chequejeune</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "chequeJeune"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Chequevacance</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "chequeVacance"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cheque</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cheque"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paiementperiode_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EcoleDeMusiqueWelcomeBundle:PaiementPeriode:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 39,  62 => 27,  192 => 79,  190 => 78,  174 => 71,  170 => 70,  156 => 62,  148 => 60,  140 => 58,  128 => 55,  124 => 54,  77 => 29,  496 => 258,  481 => 246,  475 => 242,  468 => 238,  463 => 235,  461 => 234,  458 => 233,  451 => 229,  446 => 226,  443 => 225,  436 => 221,  431 => 218,  428 => 217,  420 => 212,  414 => 208,  411 => 207,  404 => 203,  399 => 200,  396 => 199,  388 => 194,  383 => 191,  381 => 190,  376 => 187,  369 => 183,  364 => 180,  362 => 179,  359 => 178,  352 => 174,  347 => 171,  344 => 170,  337 => 166,  332 => 163,  329 => 162,  321 => 157,  315 => 153,  312 => 152,  305 => 148,  300 => 145,  297 => 144,  284 => 136,  269 => 127,  264 => 124,  262 => 123,  259 => 122,  252 => 118,  247 => 115,  244 => 114,  237 => 110,  232 => 107,  229 => 106,  221 => 101,  200 => 89,  197 => 88,  182 => 79,  176 => 75,  169 => 71,  164 => 68,  152 => 61,  137 => 54,  115 => 48,  97 => 32,  40 => 18,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 139,  287 => 93,  282 => 135,  276 => 131,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 97,  211 => 78,  204 => 66,  198 => 63,  185 => 61,  183 => 73,  177 => 58,  160 => 63,  149 => 51,  123 => 47,  120 => 46,  109 => 41,  103 => 34,  82 => 23,  65 => 16,  38 => 6,  158 => 58,  150 => 55,  144 => 59,  142 => 50,  129 => 50,  125 => 44,  117 => 42,  112 => 40,  106 => 44,  87 => 28,  70 => 20,  67 => 19,  61 => 11,  47 => 9,  105 => 36,  96 => 21,  93 => 20,  83 => 18,  76 => 22,  72 => 34,  68 => 25,  50 => 10,  91 => 20,  84 => 24,  74 => 16,  66 => 15,  55 => 23,  28 => 3,  24 => 3,  94 => 39,  88 => 44,  79 => 23,  59 => 22,  43 => 6,  46 => 7,  44 => 19,  31 => 2,  27 => 7,  32 => 4,  25 => 4,  35 => 5,  29 => 4,  21 => 1,  225 => 96,  216 => 90,  212 => 96,  205 => 18,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 83,  186 => 76,  180 => 72,  172 => 67,  163 => 63,  159 => 66,  154 => 59,  147 => 59,  132 => 56,  127 => 49,  121 => 45,  118 => 44,  114 => 43,  104 => 36,  100 => 43,  78 => 24,  75 => 21,  71 => 19,  63 => 24,  58 => 12,  41 => 15,  34 => 11,  26 => 6,  22 => 2,  19 => 1,  184 => 80,  178 => 71,  171 => 62,  165 => 58,  162 => 67,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 47,  136 => 57,  133 => 43,  130 => 47,  122 => 37,  119 => 36,  116 => 35,  111 => 47,  108 => 31,  102 => 30,  98 => 34,  95 => 41,  92 => 45,  89 => 27,  85 => 24,  81 => 30,  73 => 28,  64 => 12,  60 => 23,  57 => 14,  54 => 9,  51 => 8,  48 => 19,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
