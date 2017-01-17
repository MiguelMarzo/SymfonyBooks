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
        $__internal_be0aa7e2f7b47fafdc499bc4b928f545ae655ce2a591a595ed9b4d52606bbd5b = $this->env->getExtension("native_profiler");
        $__internal_be0aa7e2f7b47fafdc499bc4b928f545ae655ce2a591a595ed9b4d52606bbd5b->enter($__internal_be0aa7e2f7b47fafdc499bc4b928f545ae655ce2a591a595ed9b4d52606bbd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0aa7e2f7b47fafdc499bc4b928f545ae655ce2a591a595ed9b4d52606bbd5b->leave($__internal_be0aa7e2f7b47fafdc499bc4b928f545ae655ce2a591a595ed9b4d52606bbd5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee42ff3a599a2753587f7d6cbe862a4e35b3a1c28a568b0b14d752945a345c06 = $this->env->getExtension("native_profiler");
        $__internal_ee42ff3a599a2753587f7d6cbe862a4e35b3a1c28a568b0b14d752945a345c06->enter($__internal_ee42ff3a599a2753587f7d6cbe862a4e35b3a1c28a568b0b14d752945a345c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <td></td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "                        <tr td colspan=\"5\">No se han encontrado libros</td></tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_ee42ff3a599a2753587f7d6cbe862a4e35b3a1c28a568b0b14d752945a345c06->leave($__internal_ee42ff3a599a2753587f7d6cbe862a4e35b3a1c28a568b0b14d752945a345c06_prof);

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
        return array (  91 => 28,  84 => 26,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  60 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
/*                             <td></td>*/
/*                         </tr>*/
/*                     {% else %}*/
/*                         <tr td colspan="5">No se han encontrado libros</td></tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
