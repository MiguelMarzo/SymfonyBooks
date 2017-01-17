<?php

/* base.html.twig */
class __TwigTemplate_daaf2d54afff0d708b6d693c8c82ea11b43f590db2a089a1847d2dab8d6b8f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b8a067835119a5715b6352b00bb634b0c69e5649e13d680364aed005940c27d = $this->env->getExtension("native_profiler");
        $__internal_4b8a067835119a5715b6352b00bb634b0c69e5649e13d680364aed005940c27d->enter($__internal_4b8a067835119a5715b6352b00bb634b0c69e5649e13d680364aed005940c27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <nav class=\"navbar navbar-inverse\" role=\"navigation\">        
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
          ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        </div>

        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
        
        $__internal_4b8a067835119a5715b6352b00bb634b0c69e5649e13d680364aed005940c27d->leave($__internal_4b8a067835119a5715b6352b00bb634b0c69e5649e13d680364aed005940c27d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17ea078673899b4ebaf53cbc75ab0f2ab6fe6fa708d89396bf38ee8937713c56 = $this->env->getExtension("native_profiler");
        $__internal_17ea078673899b4ebaf53cbc75ab0f2ab6fe6fa708d89396bf38ee8937713c56->enter($__internal_17ea078673899b4ebaf53cbc75ab0f2ab6fe6fa708d89396bf38ee8937713c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17ea078673899b4ebaf53cbc75ab0f2ab6fe6fa708d89396bf38ee8937713c56->leave($__internal_17ea078673899b4ebaf53cbc75ab0f2ab6fe6fa708d89396bf38ee8937713c56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2f2c76dac081a09bdf5e05c757ecfcc5980aa4e2bf10d96ef780d2db5260cb7 = $this->env->getExtension("native_profiler");
        $__internal_d2f2c76dac081a09bdf5e05c757ecfcc5980aa4e2bf10d96ef780d2db5260cb7->enter($__internal_d2f2c76dac081a09bdf5e05c757ecfcc5980aa4e2bf10d96ef780d2db5260cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d2f2c76dac081a09bdf5e05c757ecfcc5980aa4e2bf10d96ef780d2db5260cb7->leave($__internal_d2f2c76dac081a09bdf5e05c757ecfcc5980aa4e2bf10d96ef780d2db5260cb7_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_9db4d571837d61ca557d2fd974d25fc9c566afd0055cd9e654a842d5932efaef = $this->env->getExtension("native_profiler");
        $__internal_9db4d571837d61ca557d2fd974d25fc9c566afd0055cd9e654a842d5932efaef->enter($__internal_9db4d571837d61ca557d2fd974d25fc9c566afd0055cd9e654a842d5932efaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "          ";
        
        $__internal_9db4d571837d61ca557d2fd974d25fc9c566afd0055cd9e654a842d5932efaef->leave($__internal_9db4d571837d61ca557d2fd974d25fc9c566afd0055cd9e654a842d5932efaef_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_142c1c1245341207caa876299cdb0e2b57c76c611bb53cbca7d31d330dc3b281 = $this->env->getExtension("native_profiler");
        $__internal_142c1c1245341207caa876299cdb0e2b57c76c611bb53cbca7d31d330dc3b281->enter($__internal_142c1c1245341207caa876299cdb0e2b57c76c611bb53cbca7d31d330dc3b281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_142c1c1245341207caa876299cdb0e2b57c76c611bb53cbca7d31d330dc3b281->leave($__internal_142c1c1245341207caa876299cdb0e2b57c76c611bb53cbca7d31d330dc3b281_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 23,  105 => 20,  99 => 19,  90 => 8,  85 => 7,  79 => 6,  67 => 5,  59 => 24,  57 => 23,  53 => 21,  51 => 19,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <nav class="navbar navbar-inverse" role="navigation">        */
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/*           {% block body %}*/
/*           {% endblock %}*/
/*         </div>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
