<?php

/* base.html.twig */
class __TwigTemplate_7c1dc37da0c045099c20fcf60e58b05fa90fba4af26dc9757a8c6a586b68078c extends Twig_Template
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
        $__internal_cd4a8de11cef67e50d5f34a9f83f2593ca22dae0df9246383173ffb692a36d36 = $this->env->getExtension("native_profiler");
        $__internal_cd4a8de11cef67e50d5f34a9f83f2593ca22dae0df9246383173ffb692a36d36->enter($__internal_cd4a8de11cef67e50d5f34a9f83f2593ca22dae0df9246383173ffb692a36d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cd4a8de11cef67e50d5f34a9f83f2593ca22dae0df9246383173ffb692a36d36->leave($__internal_cd4a8de11cef67e50d5f34a9f83f2593ca22dae0df9246383173ffb692a36d36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_15519ee71730f964124bc4f8712da16078a776f44ed04391d790b035416924d0 = $this->env->getExtension("native_profiler");
        $__internal_15519ee71730f964124bc4f8712da16078a776f44ed04391d790b035416924d0->enter($__internal_15519ee71730f964124bc4f8712da16078a776f44ed04391d790b035416924d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_15519ee71730f964124bc4f8712da16078a776f44ed04391d790b035416924d0->leave($__internal_15519ee71730f964124bc4f8712da16078a776f44ed04391d790b035416924d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4353364bc531648391a7c74229e9f13a50c05a0e0cc9f33e92fa04476a1cf3a6 = $this->env->getExtension("native_profiler");
        $__internal_4353364bc531648391a7c74229e9f13a50c05a0e0cc9f33e92fa04476a1cf3a6->enter($__internal_4353364bc531648391a7c74229e9f13a50c05a0e0cc9f33e92fa04476a1cf3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4353364bc531648391a7c74229e9f13a50c05a0e0cc9f33e92fa04476a1cf3a6->leave($__internal_4353364bc531648391a7c74229e9f13a50c05a0e0cc9f33e92fa04476a1cf3a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9c7d9da0c95ba2dae85ea0ce9c07e84dbe49fc6f74c089ee59fcb96af87b5f8 = $this->env->getExtension("native_profiler");
        $__internal_b9c7d9da0c95ba2dae85ea0ce9c07e84dbe49fc6f74c089ee59fcb96af87b5f8->enter($__internal_b9c7d9da0c95ba2dae85ea0ce9c07e84dbe49fc6f74c089ee59fcb96af87b5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9c7d9da0c95ba2dae85ea0ce9c07e84dbe49fc6f74c089ee59fcb96af87b5f8->leave($__internal_b9c7d9da0c95ba2dae85ea0ce9c07e84dbe49fc6f74c089ee59fcb96af87b5f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c068dba63c37ed358945c79ca16358b879bc6b337dcd8da5cb24e3ecf91625e6 = $this->env->getExtension("native_profiler");
        $__internal_c068dba63c37ed358945c79ca16358b879bc6b337dcd8da5cb24e3ecf91625e6->enter($__internal_c068dba63c37ed358945c79ca16358b879bc6b337dcd8da5cb24e3ecf91625e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c068dba63c37ed358945c79ca16358b879bc6b337dcd8da5cb24e3ecf91625e6->leave($__internal_c068dba63c37ed358945c79ca16358b879bc6b337dcd8da5cb24e3ecf91625e6_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
