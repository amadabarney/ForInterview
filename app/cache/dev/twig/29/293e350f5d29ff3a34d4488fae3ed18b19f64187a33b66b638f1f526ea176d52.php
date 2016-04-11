<?php

/* admin/login.html.twig */
class __TwigTemplate_57af66b0ede46f78ce2a3854c5a9d35d3fa6b3c2a7761243ee717a1b34023a21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c2c682953a38ee934ff2b48ee54cfd4d80a6836095c6c4da51a59fa710b35c5 = $this->env->getExtension("native_profiler");
        $__internal_0c2c682953a38ee934ff2b48ee54cfd4d80a6836095c6c4da51a59fa710b35c5->enter($__internal_0c2c682953a38ee934ff2b48ee54cfd4d80a6836095c6c4da51a59fa710b35c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        // line 2
        echo " 
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    ";
        // line 15
        echo "    <br/><br/>
    <button type=\"submit\">login</button>
</form>

<form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" method=\"post\">
    <button type=\"submit\">register</button>
</form>

";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 24
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        }
        
        $__internal_0c2c682953a38ee934ff2b48ee54cfd4d80a6836095c6c4da51a59fa710b35c5->leave($__internal_0c2c682953a38ee934ff2b48ee54cfd4d80a6836095c6c4da51a59fa710b35c5_prof);

    }

    public function getTemplateName()
    {
        return "admin/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 24,  51 => 23,  44 => 19,  38 => 15,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/admin/login.html.twig #}*/
/*  */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*  */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*  */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/*     <br/><br/>*/
/*     <button type="submit">login</button>*/
/* </form>*/
/* */
/* <form action="{{ path('register') }}" method="post">*/
/*     <button type="submit">register</button>*/
/* </form>*/
/* */
/* {% if error %}*/
/*     <div>{{ error }}</div>*/
/* {% endif %}*/
