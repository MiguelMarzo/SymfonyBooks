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
        $__internal_a534a087f16ff9a31bad155500f79648988cd4b4e2e8774cef2cd7fa53811984 = $this->env->getExtension("native_profiler");
        $__internal_a534a087f16ff9a31bad155500f79648988cd4b4e2e8774cef2cd7fa53811984->enter($__internal_a534a087f16ff9a31bad155500f79648988cd4b4e2e8774cef2cd7fa53811984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <div class=\"navbar-header\">                
                <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Librería 4V</a>
            </div>
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("create_book");
        echo "\">Añadir un libro</a></li>
            </ul>
            <form class=\"navbar-form navbar-right\" role=\"search\" 
                  action=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("search_books");
        echo "\">
                <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Buscar...\" 
                           name=\"searchTerm\" id=\"srch-term\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"submit\">
                            <i class=\"glyphicon glyphicon-search\"></i></button>
                    </div>
                </div>
            </form>
        </nav>

        <!-- Page Content -->
        <div class=\"container\">
            ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "        </div>

    ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "</body>
</html>";
        
        $__internal_a534a087f16ff9a31bad155500f79648988cd4b4e2e8774cef2cd7fa53811984->leave($__internal_a534a087f16ff9a31bad155500f79648988cd4b4e2e8774cef2cd7fa53811984_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1756347fd6eafba93c57b9cae9aaefd0cd97e7c5ea6ac7b7b41f31d550540c4f = $this->env->getExtension("native_profiler");
        $__internal_1756347fd6eafba93c57b9cae9aaefd0cd97e7c5ea6ac7b7b41f31d550540c4f->enter($__internal_1756347fd6eafba93c57b9cae9aaefd0cd97e7c5ea6ac7b7b41f31d550540c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1756347fd6eafba93c57b9cae9aaefd0cd97e7c5ea6ac7b7b41f31d550540c4f->leave($__internal_1756347fd6eafba93c57b9cae9aaefd0cd97e7c5ea6ac7b7b41f31d550540c4f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86686a3e228ee05357005bd9cf776692473101cf683413ca881af17dcd238f6e = $this->env->getExtension("native_profiler");
        $__internal_86686a3e228ee05357005bd9cf776692473101cf683413ca881af17dcd238f6e->enter($__internal_86686a3e228ee05357005bd9cf776692473101cf683413ca881af17dcd238f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_86686a3e228ee05357005bd9cf776692473101cf683413ca881af17dcd238f6e->leave($__internal_86686a3e228ee05357005bd9cf776692473101cf683413ca881af17dcd238f6e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_85bc9649224bac82f93681e2871199e396773e94349badbfc6a2a61bef83943b = $this->env->getExtension("native_profiler");
        $__internal_85bc9649224bac82f93681e2871199e396773e94349badbfc6a2a61bef83943b->enter($__internal_85bc9649224bac82f93681e2871199e396773e94349badbfc6a2a61bef83943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "            ";
        
        $__internal_85bc9649224bac82f93681e2871199e396773e94349badbfc6a2a61bef83943b->leave($__internal_85bc9649224bac82f93681e2871199e396773e94349badbfc6a2a61bef83943b_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f556fd3656a741d96d62d7eaac36214c9c3479d15bb0bd265d02a1e8e4e94737 = $this->env->getExtension("native_profiler");
        $__internal_f556fd3656a741d96d62d7eaac36214c9c3479d15bb0bd265d02a1e8e4e94737->enter($__internal_f556fd3656a741d96d62d7eaac36214c9c3479d15bb0bd265d02a1e8e4e94737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f556fd3656a741d96d62d7eaac36214c9c3479d15bb0bd265d02a1e8e4e94737->leave($__internal_f556fd3656a741d96d62d7eaac36214c9c3479d15bb0bd265d02a1e8e4e94737_prof);

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
        return array (  138 => 40,  131 => 37,  125 => 36,  116 => 8,  111 => 7,  105 => 6,  93 => 5,  85 => 41,  83 => 40,  79 => 38,  77 => 36,  60 => 22,  54 => 19,  48 => 16,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <nav class="navbar navbar-inverse" role="navigation"> */
/*             <div class="navbar-header">                */
/*                 <a class="navbar-brand" href="{{ path('homepage') }}">Librería 4V</a>*/
/*             </div>*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="{{ path('create_book') }}">Añadir un libro</a></li>*/
/*             </ul>*/
/*             <form class="navbar-form navbar-right" role="search" */
/*                   action="{{ path('search_books') }}">*/
/*                 <div class="input-group">*/
/*                     <input type="text" class="form-control" placeholder="Buscar..." */
/*                            name="searchTerm" id="srch-term">*/
/*                     <div class="input-group-btn">*/
/*                         <button class="btn btn-default" type="submit">*/
/*                             <i class="glyphicon glyphicon-search"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </nav>*/
/* */
/*         <!-- Page Content -->*/
/*         <div class="container">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
