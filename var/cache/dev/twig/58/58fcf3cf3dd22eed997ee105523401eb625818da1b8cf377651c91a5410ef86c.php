<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_54bb90905ef114f21e7a2fe1e3f2b1845994ae135657bf23f56024a49588ea45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93432636e76df31978d0ec3dd1cda20f661e0ccadaaff1db5f5a0140b734838 = $this->env->getExtension("native_profiler");
        $__internal_c93432636e76df31978d0ec3dd1cda20f661e0ccadaaff1db5f5a0140b734838->enter($__internal_c93432636e76df31978d0ec3dd1cda20f661e0ccadaaff1db5f5a0140b734838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93432636e76df31978d0ec3dd1cda20f661e0ccadaaff1db5f5a0140b734838->leave($__internal_c93432636e76df31978d0ec3dd1cda20f661e0ccadaaff1db5f5a0140b734838_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e2489dd2f3a9b6045f8e5146d3d753d0924470d6d0125bf5b5bc5f333e2a021 = $this->env->getExtension("native_profiler");
        $__internal_3e2489dd2f3a9b6045f8e5146d3d753d0924470d6d0125bf5b5bc5f333e2a021->enter($__internal_3e2489dd2f3a9b6045f8e5146d3d753d0924470d6d0125bf5b5bc5f333e2a021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_3e2489dd2f3a9b6045f8e5146d3d753d0924470d6d0125bf5b5bc5f333e2a021->leave($__internal_3e2489dd2f3a9b6045f8e5146d3d753d0924470d6d0125bf5b5bc5f333e2a021_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
