<?php

/* books/create.html.twig */
class __TwigTemplate_af03e7097fe09d141231fce94ff656f021afbf73270d6e9fc863e0083a0204e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "books/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01baaaa4d3d1c6200230a0725897effd3c2a283aebb1134fc1137f8bfbdc16ef = $this->env->getExtension("native_profiler");
        $__internal_01baaaa4d3d1c6200230a0725897effd3c2a283aebb1134fc1137f8bfbdc16ef->enter($__internal_01baaaa4d3d1c6200230a0725897effd3c2a283aebb1134fc1137f8bfbdc16ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01baaaa4d3d1c6200230a0725897effd3c2a283aebb1134fc1137f8bfbdc16ef->leave($__internal_01baaaa4d3d1c6200230a0725897effd3c2a283aebb1134fc1137f8bfbdc16ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_741e5deab41d696555567ecb73b5536f11f6b1843675fb18093223f04dc4b888 = $this->env->getExtension("native_profiler");
        $__internal_741e5deab41d696555567ecb73b5536f11f6b1843675fb18093223f04dc4b888->enter($__internal_741e5deab41d696555567ecb73b5536f11f6b1843675fb18093223f04dc4b888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"form-horizontal\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("new_book");
        echo "\">
        <div class=\"form-group\">
            <label for=\"title\" class=\"col-sm-2 control-label\">Título</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" name=\"title\" id=\"title\" placeholder=\"Titulo\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"cover\" class=\"col-sm-2 control-label\">Portada</label>
            <div class=\"col-sm-10\">
                <input type=\"url\" class=\"form-control\" id=\"cover\" name=\"cover\" placeholder=\"URL de la portada\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"author\" class=\"col-sm-2 control-label\">Autor</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" class=\"form-control\" id=\"author\" name=\"author\" placeholder=\"Autor\">
            </div>
        </div>
        <div class=\"form-group\">
            <label for=\"price\" class=\"col-sm-2 control-label\">Precio</label>
            <div class=\"col-sm-10\">
                <input type=\"number\" class=\"form-control\" id=\"price\" name=\"price\" placeholder=\"Precio\">
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                <button type=\"submit\" class=\"btn btn-success pull-right\">Crear</button>
            </div>
        </div>
    </form>

";
        
        $__internal_741e5deab41d696555567ecb73b5536f11f6b1843675fb18093223f04dc4b888->leave($__internal_741e5deab41d696555567ecb73b5536f11f6b1843675fb18093223f04dc4b888_prof);

    }

    public function getTemplateName()
    {
        return "books/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <form class="form-horizontal" method="post" action="{{ path('new_book') }}">*/
/*         <div class="form-group">*/
/*             <label for="title" class="col-sm-2 control-label">Título</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" name="title" id="title" placeholder="Titulo">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="cover" class="col-sm-2 control-label">Portada</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="url" class="form-control" id="cover" name="cover" placeholder="URL de la portada">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="author" class="col-sm-2 control-label">Autor</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" class="form-control" id="author" name="author" placeholder="Autor">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label for="price" class="col-sm-2 control-label">Precio</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="number" class="form-control" id="price" name="price" placeholder="Precio">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <div class="col-sm-offset-2 col-sm-10">*/
/*                 <button type="submit" class="btn btn-success pull-right">Crear</button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* */
/* {% endblock %}*/
