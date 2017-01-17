<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79da95825f515fe18c84c7f92a823e24db98be4f4802e9b754b216b79f390d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_274e32bf15bb9d9b304779673cfe3455e3e9bb579607429ac4763d4d15afdd45 = $this->env->getExtension("native_profiler");
        $__internal_274e32bf15bb9d9b304779673cfe3455e3e9bb579607429ac4763d4d15afdd45->enter($__internal_274e32bf15bb9d9b304779673cfe3455e3e9bb579607429ac4763d4d15afdd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_274e32bf15bb9d9b304779673cfe3455e3e9bb579607429ac4763d4d15afdd45->leave($__internal_274e32bf15bb9d9b304779673cfe3455e3e9bb579607429ac4763d4d15afdd45_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2c2f6116ee2866de8d41aa39b056017499fa864700d3d8f0863463788f0f011c = $this->env->getExtension("native_profiler");
        $__internal_2c2f6116ee2866de8d41aa39b056017499fa864700d3d8f0863463788f0f011c->enter($__internal_2c2f6116ee2866de8d41aa39b056017499fa864700d3d8f0863463788f0f011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2c2f6116ee2866de8d41aa39b056017499fa864700d3d8f0863463788f0f011c->leave($__internal_2c2f6116ee2866de8d41aa39b056017499fa864700d3d8f0863463788f0f011c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72fb5c546cb106ed824acd71b66d7fd27d3d4e7428c0941b87b0946d30db156e = $this->env->getExtension("native_profiler");
        $__internal_72fb5c546cb106ed824acd71b66d7fd27d3d4e7428c0941b87b0946d30db156e->enter($__internal_72fb5c546cb106ed824acd71b66d7fd27d3d4e7428c0941b87b0946d30db156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72fb5c546cb106ed824acd71b66d7fd27d3d4e7428c0941b87b0946d30db156e->leave($__internal_72fb5c546cb106ed824acd71b66d7fd27d3d4e7428c0941b87b0946d30db156e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_181bc336db891b790b55543bb7651a809d764696f1d113d82e8cee569f992120 = $this->env->getExtension("native_profiler");
        $__internal_181bc336db891b790b55543bb7651a809d764696f1d113d82e8cee569f992120->enter($__internal_181bc336db891b790b55543bb7651a809d764696f1d113d82e8cee569f992120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_181bc336db891b790b55543bb7651a809d764696f1d113d82e8cee569f992120->leave($__internal_181bc336db891b790b55543bb7651a809d764696f1d113d82e8cee569f992120_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
