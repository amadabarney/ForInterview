<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_40c3317d780f2ff7ffa760b8a685fbb79da7c0d53efb6a2633af9f263084767d extends Twig_Template
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
        $__internal_aadbaf1de3ea4461a2375b33b2634c62659bcd85b5b3d9cd6a2a4e40eca4dca2 = $this->env->getExtension("native_profiler");
        $__internal_aadbaf1de3ea4461a2375b33b2634c62659bcd85b5b3d9cd6a2a4e40eca4dca2->enter($__internal_aadbaf1de3ea4461a2375b33b2634c62659bcd85b5b3d9cd6a2a4e40eca4dca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aadbaf1de3ea4461a2375b33b2634c62659bcd85b5b3d9cd6a2a4e40eca4dca2->leave($__internal_aadbaf1de3ea4461a2375b33b2634c62659bcd85b5b3d9cd6a2a4e40eca4dca2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76ec948370304eb3610020f51d89cd0c10d96dd192c4d665c49a6315553abc2c = $this->env->getExtension("native_profiler");
        $__internal_76ec948370304eb3610020f51d89cd0c10d96dd192c4d665c49a6315553abc2c->enter($__internal_76ec948370304eb3610020f51d89cd0c10d96dd192c4d665c49a6315553abc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_76ec948370304eb3610020f51d89cd0c10d96dd192c4d665c49a6315553abc2c->leave($__internal_76ec948370304eb3610020f51d89cd0c10d96dd192c4d665c49a6315553abc2c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ad0aae17b19ddbe84be5e77ac58bcfd71649aa698a2229c4948c04ed8943cbf = $this->env->getExtension("native_profiler");
        $__internal_2ad0aae17b19ddbe84be5e77ac58bcfd71649aa698a2229c4948c04ed8943cbf->enter($__internal_2ad0aae17b19ddbe84be5e77ac58bcfd71649aa698a2229c4948c04ed8943cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ad0aae17b19ddbe84be5e77ac58bcfd71649aa698a2229c4948c04ed8943cbf->leave($__internal_2ad0aae17b19ddbe84be5e77ac58bcfd71649aa698a2229c4948c04ed8943cbf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f668171e58fd186ff09a7b36e1e53c7be28e3c34ea27d32eb4825651168c54bb = $this->env->getExtension("native_profiler");
        $__internal_f668171e58fd186ff09a7b36e1e53c7be28e3c34ea27d32eb4825651168c54bb->enter($__internal_f668171e58fd186ff09a7b36e1e53c7be28e3c34ea27d32eb4825651168c54bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f668171e58fd186ff09a7b36e1e53c7be28e3c34ea27d32eb4825651168c54bb->leave($__internal_f668171e58fd186ff09a7b36e1e53c7be28e3c34ea27d32eb4825651168c54bb_prof);

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
