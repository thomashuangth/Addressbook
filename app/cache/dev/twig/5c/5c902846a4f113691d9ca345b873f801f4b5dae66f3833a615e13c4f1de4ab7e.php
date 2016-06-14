<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e312d3ce663229fb72351f02a73dc5aa30db190ee8d191f735679588d6664770 extends Twig_Template
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
        $__internal_6f8c48a4acf673bf85fde1a8f848f62a112abb35c6421d9306fe55d76363e3cc = $this->env->getExtension("native_profiler");
        $__internal_6f8c48a4acf673bf85fde1a8f848f62a112abb35c6421d9306fe55d76363e3cc->enter($__internal_6f8c48a4acf673bf85fde1a8f848f62a112abb35c6421d9306fe55d76363e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f8c48a4acf673bf85fde1a8f848f62a112abb35c6421d9306fe55d76363e3cc->leave($__internal_6f8c48a4acf673bf85fde1a8f848f62a112abb35c6421d9306fe55d76363e3cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a758dd55e26f8fdce16cb29186f53c9f3750d984eefb8a570f710ddf3e7c4cdc = $this->env->getExtension("native_profiler");
        $__internal_a758dd55e26f8fdce16cb29186f53c9f3750d984eefb8a570f710ddf3e7c4cdc->enter($__internal_a758dd55e26f8fdce16cb29186f53c9f3750d984eefb8a570f710ddf3e7c4cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a758dd55e26f8fdce16cb29186f53c9f3750d984eefb8a570f710ddf3e7c4cdc->leave($__internal_a758dd55e26f8fdce16cb29186f53c9f3750d984eefb8a570f710ddf3e7c4cdc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1715ed13ca8adf95a91c0e97f5afc9b6327769e417112cf3c1dd00af0f40a0f0 = $this->env->getExtension("native_profiler");
        $__internal_1715ed13ca8adf95a91c0e97f5afc9b6327769e417112cf3c1dd00af0f40a0f0->enter($__internal_1715ed13ca8adf95a91c0e97f5afc9b6327769e417112cf3c1dd00af0f40a0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1715ed13ca8adf95a91c0e97f5afc9b6327769e417112cf3c1dd00af0f40a0f0->leave($__internal_1715ed13ca8adf95a91c0e97f5afc9b6327769e417112cf3c1dd00af0f40a0f0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08a21477c9d253d8899eb0e402403e580c8501f189baec1bd4ab7dfbfd49e38a = $this->env->getExtension("native_profiler");
        $__internal_08a21477c9d253d8899eb0e402403e580c8501f189baec1bd4ab7dfbfd49e38a->enter($__internal_08a21477c9d253d8899eb0e402403e580c8501f189baec1bd4ab7dfbfd49e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_08a21477c9d253d8899eb0e402403e580c8501f189baec1bd4ab7dfbfd49e38a->leave($__internal_08a21477c9d253d8899eb0e402403e580c8501f189baec1bd4ab7dfbfd49e38a_prof);

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
