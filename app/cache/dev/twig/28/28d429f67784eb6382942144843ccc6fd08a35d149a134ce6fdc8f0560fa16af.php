<?php

/* admin/index.html.twig */
class __TwigTemplate_cdd61f78bf53c9f9f976b0906a287165a6f50071347ac0079a3718a58d34c9cf extends Twig_Template
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
        $__internal_49a5bf021c21d1308a0c67f6a7d4e08c61170e45c033e136ef5a924467244b2f = $this->env->getExtension("native_profiler");
        $__internal_49a5bf021c21d1308a0c67f6a7d4e08c61170e45c033e136ef5a924467244b2f->enter($__internal_49a5bf021c21d1308a0c67f6a7d4e08c61170e45c033e136ef5a924467244b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("modify");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" />
    <br/><br/>
    <label for=\"email\">Email:</label>
    <input type=\"text\" id=\"email\" name=\"_email\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" />
    <br/><br/>
    <label for=\"telphone\">Telphone:</label>
    <input type=\"text\" id=\"telphone\" name=\"_telphone\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["telphone"]) ? $context["telphone"] : $this->getContext($context, "telphone")), "html", null, true);
        echo "\" />
    <br/><br/>
    <label for=\"qq\">Email:</label>
    <input type=\"text\" id=\"qq\" name=\"_qq\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["qq"]) ? $context["qq"] : $this->getContext($context, "qq")), "html", null, true);
        echo "\" />
    <br/>
    <br/>
    <label for=\"gender\">Gender:</label>
    <select name=\"_gender\" >   
        <option value=\"1\">male</option>   
        <option value=\"0\">female</option>   
    </select>
    <br/><br/>
    <button type=\"submit\">modify</button>
</form>

<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" method=\"post\">
    <button type=\"submit\">logout</button>
</form>";
        
        $__internal_49a5bf021c21d1308a0c67f6a7d4e08c61170e45c033e136ef5a924467244b2f->leave($__internal_49a5bf021c21d1308a0c67f6a7d4e08c61170e45c033e136ef5a924467244b2f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 26,  48 => 14,  42 => 11,  36 => 8,  30 => 5,  25 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/admin/index.html.twig #}*/
/* */
/* <form action="{{ path('modify') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ name }}" />*/
/*     <br/><br/>*/
/*     <label for="email">Email:</label>*/
/*     <input type="text" id="email" name="_email" value="{{ email }}" />*/
/*     <br/><br/>*/
/*     <label for="telphone">Telphone:</label>*/
/*     <input type="text" id="telphone" name="_telphone" value="{{ telphone }}" />*/
/*     <br/><br/>*/
/*     <label for="qq">Email:</label>*/
/*     <input type="text" id="qq" name="_qq" value="{{ qq }}" />*/
/*     <br/>*/
/*     <br/>*/
/*     <label for="gender">Gender:</label>*/
/*     <select name="_gender" >   */
/*         <option value="1">male</option>   */
/*         <option value="0">female</option>   */
/*     </select>*/
/*     <br/><br/>*/
/*     <button type="submit">modify</button>*/
/* </form>*/
/* */
/* <form action="{{ path('logout') }}" method="post">*/
/*     <button type="submit">logout</button>*/
/* </form>*/
