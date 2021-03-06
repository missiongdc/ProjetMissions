<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_94751393963c95d0a6de5897ca9d35beeeaf7841997bf5ede9a69de4f1b4520c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_16bd53803c52f515fa246d1cf5c9a15b98b3a61a101fcc45373fd0c09851e522 = $this->env->getExtension("native_profiler");
        $__internal_16bd53803c52f515fa246d1cf5c9a15b98b3a61a101fcc45373fd0c09851e522->enter($__internal_16bd53803c52f515fa246d1cf5c9a15b98b3a61a101fcc45373fd0c09851e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bd53803c52f515fa246d1cf5c9a15b98b3a61a101fcc45373fd0c09851e522->leave($__internal_16bd53803c52f515fa246d1cf5c9a15b98b3a61a101fcc45373fd0c09851e522_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_239c9eb36fd6a183d664095da6b1ca92374f4d3fee387ef41daf3918b0414ad2 = $this->env->getExtension("native_profiler");
        $__internal_239c9eb36fd6a183d664095da6b1ca92374f4d3fee387ef41daf3918b0414ad2->enter($__internal_239c9eb36fd6a183d664095da6b1ca92374f4d3fee387ef41daf3918b0414ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_239c9eb36fd6a183d664095da6b1ca92374f4d3fee387ef41daf3918b0414ad2->leave($__internal_239c9eb36fd6a183d664095da6b1ca92374f4d3fee387ef41daf3918b0414ad2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
