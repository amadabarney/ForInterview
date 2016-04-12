<?php

/* admin/register.html.twig */
class __TwigTemplate_fd0fcc9a6118ee0871622f2b25e999af26428c91b25b2f8a4434e5c9973505eb extends Twig_Template
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
        $__internal_7dd39e006b6822cd585a61eeca118b99175df9d029aa02d88711674f0a37ca43 = $this->env->getExtension("native_profiler");
        $__internal_7dd39e006b6822cd585a61eeca118b99175df9d029aa02d88711674f0a37ca43->enter($__internal_7dd39e006b6822cd585a61eeca118b99175df9d029aa02d88711674f0a37ca43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/register.html.twig"));

        // line 1
        echo "<script src=\"../scripts/jquery-2.2.3.js\"></script>
<script src=\"../scripts/jquery.md5.js\"></script>
";
        // line 4
        echo "
<div style=\"margin-left:auto;margin-right:auto;text-align:center;\">
<label for=\"username\">Username:</label>
<input type=\"text\" id=\"username\" name=\"_username\" style=\"vertical-align:middle;\" />
<br/><br/>
<label for=\"password\">Password:</label>
<input type=\"password\" id=\"password\" name=\"_password\" style=\"vertical-align:middle;\"/>
<br/><br/>
<label for=\"email\">Email:&#9;</label>
<input type=\"text\" id=\"email\" name=\"_email\" style=\"vertical-align:middle;\"/>
<br/><br/>
<label for=\"telphone\">Telphone:</label>
<input type=\"text\" id=\"telphone\" name=\"_telphone\"/>
<br/><br/>
<label for=\"qq\">QQ:&#9; </label>
<input type=\"text\" id=\"qq\" name=\"_qq\"/>
<br/><br/>
<label for=\"gender\">Gender:&#9;</label>
<select name=\"_gender\" id=\"gender\">   
    <option value=\"1\">male</option>   
    <option value=\"0\">female</option>   
</select>
<br/><br/>
<button type=\"submit\" onclick=\"onClickButton()\" id=\"register\">register</button>

<button type=\"submit\" onclick=\"onClickBack()\" id=\"back\">back</button>
</div>
<!-- ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        }
        // line 33
        echo " -->

<script type=\"text/javascript\">
    function onClickButton()
    {
        \$(\"#register\").attr(\"disabled\",\"disabled\");
        var pa = \$(\"#password\").val() == \"\" ? \$(\"#password\").val():\"none\";
        var user = {
            _username:\$(\"#username\").val(),
            _password:\$.md5(pa),
            _email:\$(\"#email\").val(),
            _telphone:\$(\"#telphone\").val(),
            _qq:\$(\"#qq\").val(),
            _gender:\$(\"#gender\").val(),
        };

        \$.ajax({
            type : 'post',
            url:  \"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("register_check");
        echo "\",
            data:  user,
            dataType: 'json',
            success: function(data) {
                if(data.success)
                {
                    alert(data.msg);
                    onClickBack();
                }
                else
                {
                    alert(data.msg);
                    \$(\"#register\").removeAttr(\"disabled\");
                }

            }
        });

    }
    
    function onClickBack()
    {
        \$(\"#back\").attr(\"disabled\",\"disabled\");
        window.location.href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\";
    }
</script>
";
        
        $__internal_7dd39e006b6822cd585a61eeca118b99175df9d029aa02d88711674f0a37ca43->leave($__internal_7dd39e006b6822cd585a61eeca118b99175df9d029aa02d88711674f0a37ca43_prof);

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
        return array (  109 => 74,  83 => 51,  63 => 33,  57 => 32,  55 => 31,  26 => 4,  22 => 1,);
    }
}
/* <script src="../scripts/jquery-2.2.3.js"></script>*/
/* <script src="../scripts/jquery.md5.js"></script>*/
/* {# app/Resources/views/admin/register.html.twig #}*/
/* */
/* <div style="margin-left:auto;margin-right:auto;text-align:center;">*/
/* <label for="username">Username:</label>*/
/* <input type="text" id="username" name="_username" style="vertical-align:middle;" />*/
/* <br/><br/>*/
/* <label for="password">Password:</label>*/
/* <input type="password" id="password" name="_password" style="vertical-align:middle;"/>*/
/* <br/><br/>*/
/* <label for="email">Email:&#9;</label>*/
/* <input type="text" id="email" name="_email" style="vertical-align:middle;"/>*/
/* <br/><br/>*/
/* <label for="telphone">Telphone:</label>*/
/* <input type="text" id="telphone" name="_telphone"/>*/
/* <br/><br/>*/
/* <label for="qq">QQ:&#9; </label>*/
/* <input type="text" id="qq" name="_qq"/>*/
/* <br/><br/>*/
/* <label for="gender">Gender:&#9;</label>*/
/* <select name="_gender" id="gender">   */
/*     <option value="1">male</option>   */
/*     <option value="0">female</option>   */
/* </select>*/
/* <br/><br/>*/
/* <button type="submit" onclick="onClickButton()" id="register">register</button>*/
/* */
/* <button type="submit" onclick="onClickBack()" id="back">back</button>*/
/* </div>*/
/* <!-- {% if error %}*/
/*     <div>{{ error }}</div>*/
/* {% endif %} -->*/
/* */
/* <script type="text/javascript">*/
/*     function onClickButton()*/
/*     {*/
/*         $("#register").attr("disabled","disabled");*/
/*         var pa = $("#password").val() == "" ? $("#password").val():"none";*/
/*         var user = {*/
/*             _username:$("#username").val(),*/
/*             _password:$.md5(pa),*/
/*             _email:$("#email").val(),*/
/*             _telphone:$("#telphone").val(),*/
/*             _qq:$("#qq").val(),*/
/*             _gender:$("#gender").val(),*/
/*         };*/
/* */
/*         $.ajax({*/
/*             type : 'post',*/
/*             url:  "{{ path('register_check') }}",*/
/*             data:  user,*/
/*             dataType: 'json',*/
/*             success: function(data) {*/
/*                 if(data.success)*/
/*                 {*/
/*                     alert(data.msg);*/
/*                     onClickBack();*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     alert(data.msg);*/
/*                     $("#register").removeAttr("disabled");*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/* */
/*     }*/
/*     */
/*     function onClickBack()*/
/*     {*/
/*         $("#back").attr("disabled","disabled");*/
/*         window.location.href="{{ path('login') }}";*/
/*     }*/
/* </script>*/
/* */
