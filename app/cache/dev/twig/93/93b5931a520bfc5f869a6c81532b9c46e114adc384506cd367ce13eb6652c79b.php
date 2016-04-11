<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_75db4bf5b00a3fdd11905c5f712cca33ff82c1ebed289f6f0d65afe9d33c4bbe extends Twig_Template
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
        $__internal_8a0c3a6fb2bfda4766495520d02fd3355e8c2fa54024ec561a9d064c83edd513 = $this->env->getExtension("native_profiler");
        $__internal_8a0c3a6fb2bfda4766495520d02fd3355e8c2fa54024ec561a9d064c83edd513->enter($__internal_8a0c3a6fb2bfda4766495520d02fd3355e8c2fa54024ec561a9d064c83edd513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0c3a6fb2bfda4766495520d02fd3355e8c2fa54024ec561a9d064c83edd513->leave($__internal_8a0c3a6fb2bfda4766495520d02fd3355e8c2fa54024ec561a9d064c83edd513_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ccd9933c803d6ece6efb6b3f23ac2a1d472e203b491a65f3a85da6b7d29bd58e = $this->env->getExtension("native_profiler");
        $__internal_ccd9933c803d6ece6efb6b3f23ac2a1d472e203b491a65f3a85da6b7d29bd58e->enter($__internal_ccd9933c803d6ece6efb6b3f23ac2a1d472e203b491a65f3a85da6b7d29bd58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ccd9933c803d6ece6efb6b3f23ac2a1d472e203b491a65f3a85da6b7d29bd58e->leave($__internal_ccd9933c803d6ece6efb6b3f23ac2a1d472e203b491a65f3a85da6b7d29bd58e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c5ff244117586a2fb5b6f581dd90c193d245ad1e399d3994f440852a575ee00 = $this->env->getExtension("native_profiler");
        $__internal_0c5ff244117586a2fb5b6f581dd90c193d245ad1e399d3994f440852a575ee00->enter($__internal_0c5ff244117586a2fb5b6f581dd90c193d245ad1e399d3994f440852a575ee00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c5ff244117586a2fb5b6f581dd90c193d245ad1e399d3994f440852a575ee00->leave($__internal_0c5ff244117586a2fb5b6f581dd90c193d245ad1e399d3994f440852a575ee00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f78b01c4d70ffd4476d732c14d0afb42e908d3a6b9d0af46672003507f85e5 = $this->env->getExtension("native_profiler");
        $__internal_d5f78b01c4d70ffd4476d732c14d0afb42e908d3a6b9d0af46672003507f85e5->enter($__internal_d5f78b01c4d70ffd4476d732c14d0afb42e908d3a6b9d0af46672003507f85e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d5f78b01c4d70ffd4476d732c14d0afb42e908d3a6b9d0af46672003507f85e5->leave($__internal_d5f78b01c4d70ffd4476d732c14d0afb42e908d3a6b9d0af46672003507f85e5_prof);

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
