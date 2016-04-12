<?php

/* admin/login.html.twig */
class __TwigTemplate_373083e3eaa9735c5a28a54f8e86c99f509d87c4fa8539baf81ab8460221e827 extends Twig_Template
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
        $__internal_f6d86ec533ff5c8bc2ddbec668f8d78cdcdd2c8495db86e28d73094ab70f15a6 = $this->env->getExtension("native_profiler");
        $__internal_f6d86ec533ff5c8bc2ddbec668f8d78cdcdd2c8495db86e28d73094ab70f15a6->enter($__internal_f6d86ec533ff5c8bc2ddbec668f8d78cdcdd2c8495db86e28d73094ab70f15a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/login.html.twig"));

        // line 1
        echo "<script src=\"../scripts/jquery-2.2.3.js\"></script>
<script src=\"../scripts/jquery.md5.js\"></script>

";
        // line 5
        echo "
<div style=\"margin-left:auto;margin-right:auto;text-align:center;\">
<label for=\"username\">Username:</label>
<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

<label for=\"password\">Password:</label>
<input type=\"password\" id=\"password\" name=\"_password\" />

<br/><br/>
<button type=\"submit\" onclick=\"onClickButton()\" id=\"login\">login</button>


<button type=\"submit\" onclick=\"onClickRegister()\" id=\"register\">register</button>
</div>
<!-- ";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "    <div>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</div>
";
        }
        // line 21
        echo " -->

<script type=\"text/javascript\">
    function onClickButton()
    {
        \$(\"#login\").attr(\"disabled\",\"disabled\");
        var pa = \$(\"#password\").val() == \"\" ? \$(\"#password\").val():\"none\";
        var user = {
            _username:\$(\"#username\").val(),
            _password:\$.md5(pa)
        };

        \$.ajax({
            type : 'post',
            url:  \"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\",
            data:  user,
            dataType: 'json',
            success: function(data) {
                if(data.success)
                {
                    window.location.reload();
                }
                else
                {
                    alert(data.msg);
                    \$(\"#login\").removeAttr(\"disabled\");
                }

            }
        });

    }
    
    function onClickRegister()
    {
        \$(\"#register\").attr(\"disabled\",\"disabled\");
        window.location.href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\";
    }
</script>";
        
        $__internal_f6d86ec533ff5c8bc2ddbec668f8d78cdcdd2c8495db86e28d73094ab70f15a6->leave($__internal_f6d86ec533ff5c8bc2ddbec668f8d78cdcdd2c8495db86e28d73094ab70f15a6_prof);

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
        return array (  95 => 57,  70 => 35,  54 => 21,  48 => 20,  46 => 19,  32 => 8,  27 => 5,  22 => 1,);
    }
}
/* <script src="../scripts/jquery-2.2.3.js"></script>*/
/* <script src="../scripts/jquery.md5.js"></script>*/
/* */
/* {# app/Resources/views/admin/login.html.twig #}*/
/* */
/* <div style="margin-left:auto;margin-right:auto;text-align:center;">*/
/* <label for="username">Username:</label>*/
/* <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/* <label for="password">Password:</label>*/
/* <input type="password" id="password" name="_password" />*/
/* */
/* <br/><br/>*/
/* <button type="submit" onclick="onClickButton()" id="login">login</button>*/
/* */
/* */
/* <button type="submit" onclick="onClickRegister()" id="register">register</button>*/
/* </div>*/
/* <!-- {% if error %}*/
/*     <div>{{ error }}</div>*/
/* {% endif %} -->*/
/* */
/* <script type="text/javascript">*/
/*     function onClickButton()*/
/*     {*/
/*         $("#login").attr("disabled","disabled");*/
/*         var pa = $("#password").val() == "" ? $("#password").val():"none";*/
/*         var user = {*/
/*             _username:$("#username").val(),*/
/*             _password:$.md5(pa)*/
/*         };*/
/* */
/*         $.ajax({*/
/*             type : 'post',*/
/*             url:  "{{ path('login_check') }}",*/
/*             data:  user,*/
/*             dataType: 'json',*/
/*             success: function(data) {*/
/*                 if(data.success)*/
/*                 {*/
/*                     window.location.reload();*/
/*                 }*/
/*                 else*/
/*                 {*/
/*                     alert(data.msg);*/
/*                     $("#login").removeAttr("disabled");*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/* */
/*     }*/
/*     */
/*     function onClickRegister()*/
/*     {*/
/*         $("#register").attr("disabled","disabled");*/
/*         window.location.href="{{ path('register') }}";*/
/*     }*/
/* </script>*/
