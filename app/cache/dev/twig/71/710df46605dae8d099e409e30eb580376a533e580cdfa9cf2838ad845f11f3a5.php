<?php

/* admin/register.html.twig */
class __TwigTemplate_7d4db796b77fc395edbb64a84f0db07ebbf4bde37bcacfeba77433930d86032d extends Twig_Template
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
        $__internal_6389a52adccdee5df5e67446ae07a0bd7b865f2eb3955c6e6851f0dd8fd1cd1e = $this->env->getExtension("native_profiler");
        $__internal_6389a52adccdee5df5e67446ae07a0bd7b865f2eb3955c6e6851f0dd8fd1cd1e->enter($__internal_6389a52adccdee5df5e67446ae07a0bd7b865f2eb3955c6e6851f0dd8fd1cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/register.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("register_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" />
    <br/><br/>
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" align=\"absmiddle\"/>
    <br/><br/>
    <label for=\"email\">Email:&#9;</label>
    <input type=\"text\" id=\"email\" name=\"_email\" align=\"absmiddle\"/>
    <br/><br/>
    <label for=\"telphone\">Telphone:</label>
    <input type=\"text\" id=\"telphone\" name=\"_telphone\" align=\"absmiddle\"/>
    <br/><br/>
    <label for=\"qq\">QQ:&#9; </label>
    <input type=\"text\" id=\"qq\" name=\"_qq\" align=\"absmiddle\"/>
    <br/><br/>
    <label for=\"gender\">Gender:&#9;</label>
    <select name=\"_gender\" >   
        <option value=\"1\">male</option>   
        <option value=\"0\">female</option>   
    </select>
    <br/><br/>
    <button type=\"submit\">register</button>
</form>
<form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <button type=\"submit\">back</button>
</form>

";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        }
        
        $__internal_6389a52adccdee5df5e67446ae07a0bd7b865f2eb3955c6e6851f0dd8fd1cd1e->leave($__internal_6389a52adccdee5df5e67446ae07a0bd7b865f2eb3955c6e6851f0dd8fd1cd1e_prof);

    }

    public function getTemplateName()
    {
        return "admin/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 32,  59 => 31,  52 => 27,  25 => 3,  22 => 2,);
    }
}
/* {# app/Resources/views/admin/register.html.twig #}*/
/* */
/* <form action="{{ path('register_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" />*/
/*     <br/><br/>*/
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" align="absmiddle"/>*/
/*     <br/><br/>*/
/*     <label for="email">Email:&#9;</label>*/
/*     <input type="text" id="email" name="_email" align="absmiddle"/>*/
/*     <br/><br/>*/
/*     <label for="telphone">Telphone:</label>*/
/*     <input type="text" id="telphone" name="_telphone" align="absmiddle"/>*/
/*     <br/><br/>*/
/*     <label for="qq">QQ:&#9; </label>*/
/*     <input type="text" id="qq" name="_qq" align="absmiddle"/>*/
/*     <br/><br/>*/
/*     <label for="gender">Gender:&#9;</label>*/
/*     <select name="_gender" >   */
/*         <option value="1">male</option>   */
/*         <option value="0">female</option>   */
/*     </select>*/
/*     <br/><br/>*/
/*     <button type="submit">register</button>*/
/* </form>*/
/* <form action="{{ path('login') }}" method="post">*/
/*     <button type="submit">back</button>*/
/* </form>*/
/* */
/* {% if error %}*/
/*     <div>{{ error }}</div>*/
/* {% endif %}*/
/* */
