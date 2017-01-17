<?php

/* books/index.html.twig */
class __TwigTemplate_7e500c59d5cf583b38a620b9678eacd97bea07b2fedadca016021ffdaf345fcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "books/index.html.twig", 1);
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
        $__internal_4315f042a7a4b58b8318748525c91fb00042d9caa0d3c746216bb6f7eb21ac9d = $this->env->getExtension("native_profiler");
        $__internal_4315f042a7a4b58b8318748525c91fb00042d9caa0d3c746216bb6f7eb21ac9d->enter($__internal_4315f042a7a4b58b8318748525c91fb00042d9caa0d3c746216bb6f7eb21ac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4315f042a7a4b58b8318748525c91fb00042d9caa0d3c746216bb6f7eb21ac9d->leave($__internal_4315f042a7a4b58b8318748525c91fb00042d9caa0d3c746216bb6f7eb21ac9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e81c1c736835d7de84ba7ca4017dc78051c1ee6bd820f934347fd382afdcd1f = $this->env->getExtension("native_profiler");
        $__internal_0e81c1c736835d7de84ba7ca4017dc78051c1ee6bd820f934347fd382afdcd1f->enter($__internal_0e81c1c736835d7de84ba7ca4017dc78051c1ee6bd820f934347fd382afdcd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1>Listado de libros técnicos de programación</h1>

            <table class=\"table books-table\">
                <thead>
                <th>Portada</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Acciones</th>
                </thead>
                <tbody>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : $this->getContext($context, "books")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 18
            echo "                        <tr>
                            <td><img class=\"img-rounded\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "coverUrl", array()), "html", null, true);
            echo "\"></td>
                            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "price", array()), "html", null, true);
            echo "€</td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_book", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default\">
                                    <span class=\"glyphicon glyphicon-edit\"></span> Editar
                                </a> 
                                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_book", array("id" => $this->getAttribute($context["book"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">
                                    <span class=\"glyphicon glyphicon-trash\"></span> Eliminar
                                </a>                         
                            </td>
                            <td></td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                        <tr td colspan=\"5\">No se han encontrado libros</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>

            </table>
        </div>
    </div>
";
        
        $__internal_0e81c1c736835d7de84ba7ca4017dc78051c1ee6bd820f934347fd382afdcd1f->leave($__internal_0e81c1c736835d7de84ba7ca4017dc78051c1ee6bd820f934347fd382afdcd1f_prof);

    }

    public function getTemplateName()
    {
        return "books/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  98 => 34,  86 => 27,  80 => 24,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1>Listado de libros técnicos de programación</h1>*/
/* */
/*             <table class="table books-table">*/
/*                 <thead>*/
/*                 <th>Portada</th>*/
/*                 <th>Título</th>*/
/*                 <th>Autor</th>*/
/*                 <th>Precio</th>*/
/*                 <th>Acciones</th>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for book in books %}*/
/*                         <tr>*/
/*                             <td><img class="img-rounded" src="{{ book.coverUrl }}"></td>*/
/*                             <td>{{ book.title }}</td>*/
/*                             <td>{{ book.author }}</td>*/
/*                             <td>{{ book.price }}€</td>*/
/*                             <td class="actions">*/
/*                                 <a href="{{ path('edit_book', {'id': book.id}) }}" class="btn btn-sm btn-default">*/
/*                                     <span class="glyphicon glyphicon-edit"></span> Editar*/
/*                                 </a> */
/*                                 <a href="{{ path('delete_book', {'id': book.id}) }}" class="btn btn-sm btn-danger">*/
/*                                     <span class="glyphicon glyphicon-trash"></span> Eliminar*/
/*                                 </a>                         */
/*                             </td>*/
/*                             <td></td>*/
/*                         </tr>*/
/*                     {% else %}*/
/*                         <tr td colspan="5">No se han encontrado libros</td></tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/* */
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
