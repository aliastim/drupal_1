<?php

/* themes/icemagic/templates/layout/page--front.html.twig */
class __TwigTemplate_b421361099be3d77853d12eafad2d49155690e698a13c7a73305f81b5c03bc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 65, "block" => 66);
        $filters = array("t" => 75);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'block'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        if (((($this->getAttribute(($context["page"] ?? null), "branding", array()) || $this->getAttribute(($context["page"] ?? null), "navigation", array())) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 66
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 98
        echo "
    ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "home_welcome", array())) {
            // line 100
            echo "      <section class = \"carousel-welcome-slider\">
        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "home_welcome", array()), "html", null, true));
            echo "
      </section>
    ";
        } elseif ($this->getAttribute(        // line 103
($context["snippet"] ?? null), "home_welcome", array())) {
            // line 104
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "home_welcome", array()), "html", null, true));
            echo "
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "content_about", array())) {
            // line 108
            echo "      <section class = \"content-about plugin-content\">
         <div class = \"";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_about", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 113
($context["snippet"] ?? null), "content_about", array())) {
            // line 114
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "content_about", array()), "html", null, true));
            echo "
    ";
        }
        // line 116
        echo "
    ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "content_positive", array())) {
            // line 118
            echo "      <section class = \"content-positive plugin-content\">
         <div class = \"";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_positive", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 123
($context["snippet"] ?? null), "content_positive", array())) {
            // line 124
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "content_positive", array()), "html", null, true));
            echo "
    ";
        }
        // line 126
        echo "
    ";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "content_boxed", array())) {
            // line 128
            echo "      <section class = \"content-boxed plugin-content\">
         <div class = \"";
            // line 129
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
            // line 130
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_boxed", array()), "html", null, true));
            echo "
          </div>
      </section>
    ";
        } elseif ($this->getAttribute(        // line 133
($context["snippet"] ?? null), "content_boxed", array())) {
            // line 134
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "content_boxed", array()), "html", null, true));
            echo "
    ";
        }
        // line 136
        echo "
<div class=\"main-container ";
        // line 137
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">

  <header role=\"banner\" id=\"page-header\">
    ";
        // line 140
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
  </header> <!-- /#page-header -->

  <div class=\"row\">

    ";
        // line 145
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 146
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside>  <!-- End first aside. -->
    ";
        }
        // line 150
        echo "
    <section";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_column_attributes"] ?? null), "html", null, true));
        echo ">
      ";
        // line 152
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 153
            echo "        <div class=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
      ";
        }
        // line 155
        echo "      <a id=\"main-content\"></a>
      ";
        // line 156
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 157
        if (($context["title"] ?? null)) {
            // line 158
            echo "        <h1 class=\"page-header\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
      ";
        }
        // line 160
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

      ";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
        echo "
      ";
        // line 163
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
        echo "
      ";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

      ";
        // line 166
        if (($context["action_links"] ?? null)) {
            // line 167
            echo "        <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
      ";
        }
        // line 169
        echo "
      ";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </section>

    ";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 174
            echo "      <aside class=\"col-sm-3\" role=\"complementary\">
        ";
            // line 175
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside> <!-- End second aside. -->
    ";
        }
        // line 178
        echo "
  </div>
</div>
<footer id = \"footer-wrap\" class = \"footer-section section footer-wrap\">

  ";
        // line 183
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 184
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">  
    ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>    
  </div>
  ";
        } elseif ($this->getAttribute(        // line 189
($context["snippet"] ?? null), "footer", array())) {
            // line 190
            echo "  <div class = \"footer-message text-center\">
    <div class = \"";
            // line 191
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">  
    ";
            // line 192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>    
  </div>
  ";
        }
        // line 196
        echo "  
\t";
        // line 197
        if (($this->getAttribute(($context["page"] ?? null), "footer_menu", array()) || $this->getAttribute(($context["snippet"] ?? null), "footer_menu", array()))) {
            // line 198
            echo "  <div class = \"footer-menus force-menu-hr xs-force-menu-vr xs-text-center\">
  \t<div class = \"";
            // line 199
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
  \t\t<div class = \"row\">
        ";
            // line 201
            if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
                // line 202
                echo "        <div class = \"footer-menus-block xs-text-center col-xs-12\">
          ";
                // line 203
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
                echo "
        </div>
        ";
            } elseif ($this->getAttribute(            // line 205
($context["snippet"] ?? null), "footer_menu", array())) {
                // line 206
                echo "        <div class = \"footer-menus-snippet xs-text-center col-xs-12\">
          ";
                // line 207
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_menu", array()), "html", null, true));
                echo "
        </div>
        ";
            }
            // line 210
            echo "  \t\t</div>
  \t</div>
  </div>
  ";
        }
        // line 213
        echo "  
  
  <div class = \"footer-copyright-social text-center\">
    <div class = \"";
        // line 216
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
      <div class = \"row\">

      ";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "footer_copyright", array())) {
            // line 220
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 221
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_copyright", array()), "html", null, true));
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 223
($context["snippet"] ?? null), "footer_copyright", array())) {
            // line 224
            echo "        <div class = \"col-sm-6 col-xs-12 footer-copyright text-left xs-text-center\">
        ";
            // line 225
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_copyright", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 228
        echo "        
        ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "footer_social", array())) {
            // line 230
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_social", array()), "html", null, true));
            echo "
        </div>
        ";
        } elseif ($this->getAttribute(        // line 233
($context["snippet"] ?? null), "footer_social", array())) {
            // line 234
            echo "        <div class = \"col-sm-6 col-xs-12 footer-social text-right xs-text-center\">
            ";
            // line 235
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["snippet"] ?? null), "footer_social", array()), "html", null, true));
            echo "
        </div>
        ";
        }
        // line 238
        echo "
      </diV>
    </div>
  </div>
</footer>
";
    }

    // line 66
    public function block_navbar($context, array $blocks = array())
    {
        // line 67
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo " id=\"navbar\" role=\"banner\" data-spy=\"affix\"  data-offset-top=\"70\">
    ";
        // line 68
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 69
            echo "      <div class = \"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
    ";
        }
        // line 71
        echo "      <div class=\"navbar-header\">
        ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "branding", array()), "html", null, true));
        echo "
        ";
        // line 74
        echo "        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"sr-only\">";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
        echo "</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
      </div>

      ";
        // line 83
        echo "      ";
        if ((($this->getAttribute(($context["page"] ?? null), "navigation", array()) || ($context["secondary_nav"] ?? null)) || ($context["primary_nav"] ?? null))) {
            // line 84
            echo "        <div class=\"navbar-collapse collapse\">
          <nav role=\"navigation\">
          ";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
            echo "
          ";
            // line 87
            if (($context["secondary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 88
            echo "          ";
            if (($context["primary_nav"] ?? null)) {
                echo " ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["primary_nav"] ?? null), "html", null, true));
                echo " ";
            }
            // line 89
            echo "          </nav>
        </div>
      ";
        }
        // line 92
        echo "      ";
        if ( !($context["navbar_is_default"] ?? null)) {
            // line 93
            echo "        </div>
      ";
        }
        // line 95
        echo "    </header>
  ";
    }

    public function getTemplateName()
    {
        return "themes/icemagic/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 95,  465 => 93,  462 => 92,  457 => 89,  450 => 88,  444 => 87,  440 => 86,  436 => 84,  433 => 83,  423 => 75,  420 => 74,  416 => 72,  413 => 71,  407 => 69,  405 => 68,  400 => 67,  397 => 66,  388 => 238,  382 => 235,  379 => 234,  377 => 233,  372 => 231,  369 => 230,  367 => 229,  364 => 228,  358 => 225,  355 => 224,  353 => 223,  348 => 221,  345 => 220,  343 => 219,  337 => 216,  332 => 213,  326 => 210,  320 => 207,  317 => 206,  315 => 205,  310 => 203,  307 => 202,  305 => 201,  300 => 199,  297 => 198,  295 => 197,  292 => 196,  285 => 192,  281 => 191,  278 => 190,  276 => 189,  270 => 186,  266 => 185,  263 => 184,  261 => 183,  254 => 178,  248 => 175,  245 => 174,  243 => 173,  237 => 170,  234 => 169,  228 => 167,  226 => 166,  221 => 164,  217 => 163,  213 => 162,  207 => 160,  201 => 158,  199 => 157,  195 => 156,  192 => 155,  186 => 153,  184 => 152,  180 => 151,  177 => 150,  171 => 147,  168 => 146,  166 => 145,  158 => 140,  152 => 137,  149 => 136,  143 => 134,  141 => 133,  135 => 130,  131 => 129,  128 => 128,  126 => 127,  123 => 126,  117 => 124,  115 => 123,  109 => 120,  105 => 119,  102 => 118,  100 => 117,  97 => 116,  91 => 114,  89 => 113,  83 => 110,  79 => 109,  76 => 108,  74 => 107,  71 => 106,  65 => 104,  63 => 103,  58 => 101,  55 => 100,  53 => 99,  50 => 98,  46 => 66,  44 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/icemagic/templates/layout/page--front.html.twig", "/Applications/MAMP/htdocs/drupal_1/themes/icemagic/templates/layout/page--front.html.twig");
    }
}
