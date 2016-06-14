<?php

/* base.html.twig */
class __TwigTemplate_a1314694c482ddb8299d1f1238fffcf8578f3e91d1b82f32faa196b0a181193e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3390bfcd171399b841227ac7e2aaf78210627b6eaefa93aee0c86e31a76eff4 = $this->env->getExtension("native_profiler");
        $__internal_c3390bfcd171399b841227ac7e2aaf78210627b6eaefa93aee0c86e31a76eff4->enter($__internal_c3390bfcd171399b841227ac7e2aaf78210627b6eaefa93aee0c86e31a76eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c3390bfcd171399b841227ac7e2aaf78210627b6eaefa93aee0c86e31a76eff4->leave($__internal_c3390bfcd171399b841227ac7e2aaf78210627b6eaefa93aee0c86e31a76eff4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fa2ac83650f8f09f4ec32d521e7e7323d0d526390f183fd4e3d4f61cece4968 = $this->env->getExtension("native_profiler");
        $__internal_2fa2ac83650f8f09f4ec32d521e7e7323d0d526390f183fd4e3d4f61cece4968->enter($__internal_2fa2ac83650f8f09f4ec32d521e7e7323d0d526390f183fd4e3d4f61cece4968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2fa2ac83650f8f09f4ec32d521e7e7323d0d526390f183fd4e3d4f61cece4968->leave($__internal_2fa2ac83650f8f09f4ec32d521e7e7323d0d526390f183fd4e3d4f61cece4968_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e7f9f8a3f4140754cd111d380edee12d4572d36becf6499d5c05736d13011e7 = $this->env->getExtension("native_profiler");
        $__internal_9e7f9f8a3f4140754cd111d380edee12d4572d36becf6499d5c05736d13011e7->enter($__internal_9e7f9f8a3f4140754cd111d380edee12d4572d36becf6499d5c05736d13011e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9e7f9f8a3f4140754cd111d380edee12d4572d36becf6499d5c05736d13011e7->leave($__internal_9e7f9f8a3f4140754cd111d380edee12d4572d36becf6499d5c05736d13011e7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef890c0e310c6e363ca0a19b5def40113c17a60c521e27e6ae2863c27d3f4fa = $this->env->getExtension("native_profiler");
        $__internal_fef890c0e310c6e363ca0a19b5def40113c17a60c521e27e6ae2863c27d3f4fa->enter($__internal_fef890c0e310c6e363ca0a19b5def40113c17a60c521e27e6ae2863c27d3f4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fef890c0e310c6e363ca0a19b5def40113c17a60c521e27e6ae2863c27d3f4fa->leave($__internal_fef890c0e310c6e363ca0a19b5def40113c17a60c521e27e6ae2863c27d3f4fa_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a9390c8e7a048f0e2532adc051dc3859a2bbad7a1103a06015a406032450105 = $this->env->getExtension("native_profiler");
        $__internal_6a9390c8e7a048f0e2532adc051dc3859a2bbad7a1103a06015a406032450105->enter($__internal_6a9390c8e7a048f0e2532adc051dc3859a2bbad7a1103a06015a406032450105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a9390c8e7a048f0e2532adc051dc3859a2bbad7a1103a06015a406032450105->leave($__internal_6a9390c8e7a048f0e2532adc051dc3859a2bbad7a1103a06015a406032450105_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
