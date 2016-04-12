<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_71491cfdcad2e743b897aab21bc256b58db855015bd2283956c8d3c975dd0c74 extends Twig_Template
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
        $__internal_88a8a89a28b6333ac34fc8a01ef0e7b0e54ad9f6196527ef6a88c5d23eef5bf1 = $this->env->getExtension("native_profiler");
        $__internal_88a8a89a28b6333ac34fc8a01ef0e7b0e54ad9f6196527ef6a88c5d23eef5bf1->enter($__internal_88a8a89a28b6333ac34fc8a01ef0e7b0e54ad9f6196527ef6a88c5d23eef5bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88a8a89a28b6333ac34fc8a01ef0e7b0e54ad9f6196527ef6a88c5d23eef5bf1->leave($__internal_88a8a89a28b6333ac34fc8a01ef0e7b0e54ad9f6196527ef6a88c5d23eef5bf1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ad8cdd82bc4b886d7c4ea508f83d2aa2b1a54561d26fe3c89a09ffc095a5646 = $this->env->getExtension("native_profiler");
        $__internal_2ad8cdd82bc4b886d7c4ea508f83d2aa2b1a54561d26fe3c89a09ffc095a5646->enter($__internal_2ad8cdd82bc4b886d7c4ea508f83d2aa2b1a54561d26fe3c89a09ffc095a5646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ad8cdd82bc4b886d7c4ea508f83d2aa2b1a54561d26fe3c89a09ffc095a5646->leave($__internal_2ad8cdd82bc4b886d7c4ea508f83d2aa2b1a54561d26fe3c89a09ffc095a5646_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2e572e2f30936f5bc3d2660f7c5e5b0500d2e8869e9a4e1f2b90aa033ef117f = $this->env->getExtension("native_profiler");
        $__internal_b2e572e2f30936f5bc3d2660f7c5e5b0500d2e8869e9a4e1f2b90aa033ef117f->enter($__internal_b2e572e2f30936f5bc3d2660f7c5e5b0500d2e8869e9a4e1f2b90aa033ef117f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b2e572e2f30936f5bc3d2660f7c5e5b0500d2e8869e9a4e1f2b90aa033ef117f->leave($__internal_b2e572e2f30936f5bc3d2660f7c5e5b0500d2e8869e9a4e1f2b90aa033ef117f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02f4a1016636bb2030d044cc7e86d0f1e7de191eb93d0d35b16294661a44603a = $this->env->getExtension("native_profiler");
        $__internal_02f4a1016636bb2030d044cc7e86d0f1e7de191eb93d0d35b16294661a44603a->enter($__internal_02f4a1016636bb2030d044cc7e86d0f1e7de191eb93d0d35b16294661a44603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02f4a1016636bb2030d044cc7e86d0f1e7de191eb93d0d35b16294661a44603a->leave($__internal_02f4a1016636bb2030d044cc7e86d0f1e7de191eb93d0d35b16294661a44603a_prof);

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
