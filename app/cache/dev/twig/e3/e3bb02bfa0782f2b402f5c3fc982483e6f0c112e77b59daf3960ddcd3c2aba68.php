<?php

/* security/login.html.twig */
class __TwigTemplate_67322018bc05212969ef23610b671a548db7bfdb5099962730e847929e839f2c extends Twig_Template
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
        $__internal_aa8ef7e7dcf6a837f9465a53da77770bd13635afe2d143e39f8654e523bc019e = $this->env->getExtension("native_profiler");
        $__internal_aa8ef7e7dcf6a837f9465a53da77770bd13635afe2d143e39f8654e523bc019e->enter($__internal_aa8ef7e7dcf6a837f9465a53da77770bd13635afe2d143e39f8654e523bc019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        echo " 
";
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo " 
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
 
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
 
    ";
        // line 20
        echo " 
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_aa8ef7e7dcf6a837f9465a53da77770bd13635afe2d143e39f8654e523bc019e->leave($__internal_aa8ef7e7dcf6a837f9465a53da77770bd13635afe2d143e39f8654e523bc019e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  41 => 10,  36 => 8,  33 => 7,  27 => 5,  25 => 4,  22 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/*  */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData) }}</div>*/
/* {% endif %}*/
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
/*  */
/*     <button type="submit">login</button>*/
/* </form>*/
