<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fefec2b74720f717f370fed7c4b7579a202903f78ac3c9469af5506445235130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbbdc64cdc59af23e1f5f61080dc7e627dea55e752ceb1efe03600f96a4520c2 = $this->env->getExtension("native_profiler");
        $__internal_dbbdc64cdc59af23e1f5f61080dc7e627dea55e752ceb1efe03600f96a4520c2->enter($__internal_dbbdc64cdc59af23e1f5f61080dc7e627dea55e752ceb1efe03600f96a4520c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbbdc64cdc59af23e1f5f61080dc7e627dea55e752ceb1efe03600f96a4520c2->leave($__internal_dbbdc64cdc59af23e1f5f61080dc7e627dea55e752ceb1efe03600f96a4520c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bce2ede7c3bf7918acdb5d7871f47f9d6b241494c12a6e3fbe5351489bc62a9 = $this->env->getExtension("native_profiler");
        $__internal_2bce2ede7c3bf7918acdb5d7871f47f9d6b241494c12a6e3fbe5351489bc62a9->enter($__internal_2bce2ede7c3bf7918acdb5d7871f47f9d6b241494c12a6e3fbe5351489bc62a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bce2ede7c3bf7918acdb5d7871f47f9d6b241494c12a6e3fbe5351489bc62a9->leave($__internal_2bce2ede7c3bf7918acdb5d7871f47f9d6b241494c12a6e3fbe5351489bc62a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8a42a14a8e371ff804b7d09f928636efadc8cb60598b8245fa3609e79e1657c = $this->env->getExtension("native_profiler");
        $__internal_c8a42a14a8e371ff804b7d09f928636efadc8cb60598b8245fa3609e79e1657c->enter($__internal_c8a42a14a8e371ff804b7d09f928636efadc8cb60598b8245fa3609e79e1657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8a42a14a8e371ff804b7d09f928636efadc8cb60598b8245fa3609e79e1657c->leave($__internal_c8a42a14a8e371ff804b7d09f928636efadc8cb60598b8245fa3609e79e1657c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ab3dee0a190f316c634f6365bddbc638c40c4258d56572dfaf29c563adf2e2d = $this->env->getExtension("native_profiler");
        $__internal_4ab3dee0a190f316c634f6365bddbc638c40c4258d56572dfaf29c563adf2e2d->enter($__internal_4ab3dee0a190f316c634f6365bddbc638c40c4258d56572dfaf29c563adf2e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ab3dee0a190f316c634f6365bddbc638c40c4258d56572dfaf29c563adf2e2d->leave($__internal_4ab3dee0a190f316c634f6365bddbc638c40c4258d56572dfaf29c563adf2e2d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
