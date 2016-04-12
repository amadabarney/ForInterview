<?php

/* admin/index.html.twig */
class __TwigTemplate_036290ecdbdb0d6db8806db04531a472428076024c223677294b7f75d923555e extends Twig_Template
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
        $__internal_fe5710b8bb76f80f5ebe55a64cc22c545beb0f46782b187314fec76b4bc5f293 = $this->env->getExtension("native_profiler");
        $__internal_fe5710b8bb76f80f5ebe55a64cc22c545beb0f46782b187314fec76b4bc5f293->enter($__internal_fe5710b8bb76f80f5ebe55a64cc22c545beb0f46782b187314fec76b4bc5f293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        echo "<script src=\"../scripts/jquery-2.2.3.js\"></script>
<script src=\"../scripts/jquery.md5.js\"></script>
";
        // line 4
        echo "
<div style=\"margin-left:auto;margin-right:auto;text-align:center;\">

<table width=”450″ border=”1″ cellspacing=”0″ cellpadding=”2″ bordercolor=”#009900″ style=\"margin:auto\">
<tr>
<td>
Name
</td><td>Email
</td><td>Telphone
</td><td>QQ
</td><td>Gender
</td><td>
</td>
</tr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 19
            echo "<tr>

<input type=\"hidden\" name=\"_id\" id=\"id";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\"/>
<td>
    <input type=\"text\" id=\"username";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" name=\"_username\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "username", array()), "html", null, true);
            echo "\" />
</td><td>
    <input type=\"text\" id=\"email";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" name=\"_email\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
            echo "\" />
</td><td>
    <input type=\"text\" id=\"telphone";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" name=\"_telphone\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "telphone", array()), "html", null, true);
            echo "\" />
</td><td>
    <input type=\"text\" id=\"qq";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\" name=\"_qq\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "qq", array()), "html", null, true);
            echo "\" />
</td><td>
    <select name=\"_gender\" id=\"gender";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">   
    ";
            // line 32
            if (($this->getAttribute($context["row"], "gender", array()) == 1)) {
                // line 33
                echo "        <option value=\"1\" selected=\"selected\">male</option>   
        <option value=\"0\">female</option>   
    ";
            } else {
                // line 36
                echo "        <option value=\"1\">male</option>   
        <option value=\"0\" selected=\"selected\">female</option>  
    ";
            }
            // line 39
            echo "    </select>
</td><td>
    <button type=\"submit\" onclick=\"onClickButton(";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo ")\" id=\"modify";
            echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "id", array()), "html", null, true);
            echo "\">modify</button>
</td>

</tr>
<tr></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
</table>

<br/>

<button type=\"submit\" onclick=\"onClickLogout()\" id=\"logout\">logout</button>
</div>

<script type=\"text/javascript\">
    function onClickButton(id)
    {
        \$(\"#modify\"+id).attr(\"disabled\",\"disabled\");
        var user = {
            _id:id,
            _username:\$(\"#username\"+id).val(),
            _email:\$(\"#email\"+id).val(),
            _telphone:\$(\"#telphone\"+id).val(),
            _qq:\$(\"#qq\"+id).val(),
            _gender:\$(\"#gender\"+id).val(),
        };

        \$.ajax({
            type : 'post',
            url:  \"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("modify");
        echo "\",
            data:  user,
            dataType: 'json',
            success: function(data) {
                if(data.success)
                {
                    alert(data.msg);
                    window.location.reload();
                }
                else
                {
                    alert(data.msg);
                    \$(\"#modify\"+id).removeAttr(\"disabled\");
                }

            }
        });

    }
    
    function onClickLogout()
    {
        \$(\"#logout\").attr(\"disabled\",\"disabled\");
        window.location.href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\";
    }
</script>";
        
        $__internal_fe5710b8bb76f80f5ebe55a64cc22c545beb0f46782b187314fec76b4bc5f293->leave($__internal_fe5710b8bb76f80f5ebe55a64cc22c545beb0f46782b187314fec76b4bc5f293_prof);

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
        return array (  170 => 93,  144 => 70,  119 => 47,  105 => 41,  101 => 39,  96 => 36,  91 => 33,  89 => 32,  85 => 31,  78 => 29,  71 => 27,  64 => 25,  57 => 23,  50 => 21,  46 => 19,  42 => 18,  26 => 4,  22 => 1,);
    }
}
/* <script src="../scripts/jquery-2.2.3.js"></script>*/
/* <script src="../scripts/jquery.md5.js"></script>*/
/* {# app/Resources/views/admin/index.html.twig #}*/
/* */
/* <div style="margin-left:auto;margin-right:auto;text-align:center;">*/
/* */
/* <table width=”450″ border=”1″ cellspacing=”0″ cellpadding=”2″ bordercolor=”#009900″ style="margin:auto">*/
/* <tr>*/
/* <td>*/
/* Name*/
/* </td><td>Email*/
/* </td><td>Telphone*/
/* </td><td>QQ*/
/* </td><td>Gender*/
/* </td><td>*/
/* </td>*/
/* </tr>*/
/* {% for row in data %}*/
/* <tr>*/
/* */
/* <input type="hidden" name="_id" id="id{{ row.id }}" value="{{ row.id }}"/>*/
/* <td>*/
/*     <input type="text" id="username{{ row.id }}" name="_username" value="{{ row.username }}" />*/
/* </td><td>*/
/*     <input type="text" id="email{{ row.id }}" name="_email" value="{{ row.email }}" />*/
/* </td><td>*/
/*     <input type="text" id="telphone{{ row.id }}" name="_telphone" value="{{ row.telphone }}" />*/
/* </td><td>*/
/*     <input type="text" id="qq{{ row.id }}" name="_qq" value="{{ row.qq }}" />*/
/* </td><td>*/
/*     <select name="_gender" id="gender{{ row.id }}">   */
/*     {% if row.gender==1 %}*/
/*         <option value="1" selected="selected">male</option>   */
/*         <option value="0">female</option>   */
/*     {% else %}*/
/*         <option value="1">male</option>   */
/*         <option value="0" selected="selected">female</option>  */
/*     {% endif %}*/
/*     </select>*/
/* </td><td>*/
/*     <button type="submit" onclick="onClickButton({{ row.id }})" id="modify{{ row.id }}">modify</button>*/
/* </td>*/
/* */
/* </tr>*/
/* <tr></tr>*/
/* {% endfor %}*/
/* */
/* </table>*/
/* */
/* <br/>*/
/* */
/* <button type="submit" onclick="onClickLogout()" id="logout">logout</button>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     function onClickButton(id)*/
/*     {*/
/*         $("#modify"+id).attr("disabled","disabled");*/
/*         var user = {*/
/*             _id:id,*/
/*             _username:$("#username"+id).val(),*/
/*             _email:$("#email"+id).val(),*/
/*             _telphone:$("#telphone"+id).val(),*/
/*             _qq:$("#qq"+id).val(),*/
/*             _gender:$("#gender"+id).val(),*/
/*         };*/
/* */
/*         $.ajax({*/
/*             type : 'post',*/
/*             url:  "{{ path('modify') }}",*/
/*             data:  user,*/
/*             dataType: 'json',*/
/*             success: function(data) {*/
/*                 if(data.success)*/
/*                 {*/
/*                     alert(data.msg);*/
/*                     window.location.reload();*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     alert(data.msg);*/
/*                     $("#modify"+id).removeAttr("disabled");*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/* */
/*     }*/
/*     */
/*     function onClickLogout()*/
/*     {*/
/*         $("#logout").attr("disabled","disabled");*/
/*         window.location.href="{{ path('logout') }}";*/
/*     }*/
/* </script>*/
