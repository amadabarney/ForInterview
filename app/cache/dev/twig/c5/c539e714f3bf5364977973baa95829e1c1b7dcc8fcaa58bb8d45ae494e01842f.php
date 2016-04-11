<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b90dc9934e062b9b12cd1ad0001b7c6752e5e90cfa9119577102806c6c0f477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c8cb72369736f6d56a6c3ac5d6552bfa45c5810db2417ee31b34a7f79c9d32 = $this->env->getExtension("native_profiler");
        $__internal_55c8cb72369736f6d56a6c3ac5d6552bfa45c5810db2417ee31b34a7f79c9d32->enter($__internal_55c8cb72369736f6d56a6c3ac5d6552bfa45c5810db2417ee31b34a7f79c9d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55c8cb72369736f6d56a6c3ac5d6552bfa45c5810db2417ee31b34a7f79c9d32->leave($__internal_55c8cb72369736f6d56a6c3ac5d6552bfa45c5810db2417ee31b34a7f79c9d32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f81f3805e983a6fe722065375c6b3e533a409c5b621919be69a649bca938a183 = $this->env->getExtension("native_profiler");
        $__internal_f81f3805e983a6fe722065375c6b3e533a409c5b621919be69a649bca938a183->enter($__internal_f81f3805e983a6fe722065375c6b3e533a409c5b621919be69a649bca938a183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f81f3805e983a6fe722065375c6b3e533a409c5b621919be69a649bca938a183->leave($__internal_f81f3805e983a6fe722065375c6b3e533a409c5b621919be69a649bca938a183_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd3800179a93d7101997a3ce40a3051fded20bea1a85d7adb133620c6c19dbb0 = $this->env->getExtension("native_profiler");
        $__internal_dd3800179a93d7101997a3ce40a3051fded20bea1a85d7adb133620c6c19dbb0->enter($__internal_dd3800179a93d7101997a3ce40a3051fded20bea1a85d7adb133620c6c19dbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd3800179a93d7101997a3ce40a3051fded20bea1a85d7adb133620c6c19dbb0->leave($__internal_dd3800179a93d7101997a3ce40a3051fded20bea1a85d7adb133620c6c19dbb0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a3c5ac45ab0b2e5e55e992bfe0328c7ae7b3a068d1b1b379f70656ff4530b96 = $this->env->getExtension("native_profiler");
        $__internal_0a3c5ac45ab0b2e5e55e992bfe0328c7ae7b3a068d1b1b379f70656ff4530b96->enter($__internal_0a3c5ac45ab0b2e5e55e992bfe0328c7ae7b3a068d1b1b379f70656ff4530b96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a3c5ac45ab0b2e5e55e992bfe0328c7ae7b3a068d1b1b379f70656ff4530b96->leave($__internal_0a3c5ac45ab0b2e5e55e992bfe0328c7ae7b3a068d1b1b379f70656ff4530b96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
