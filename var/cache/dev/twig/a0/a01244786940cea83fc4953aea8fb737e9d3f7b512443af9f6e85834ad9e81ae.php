<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_deb846a6c5eb7acb045d6b53bb458680f15ad7549db7b49c9094b4f30c80b390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_f280355e982de2cfac1690e1933a1df05835d728bb87a1020c8e5caae7359568 = $this->env->getExtension("native_profiler");
        $__internal_f280355e982de2cfac1690e1933a1df05835d728bb87a1020c8e5caae7359568->enter($__internal_f280355e982de2cfac1690e1933a1df05835d728bb87a1020c8e5caae7359568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f280355e982de2cfac1690e1933a1df05835d728bb87a1020c8e5caae7359568->leave($__internal_f280355e982de2cfac1690e1933a1df05835d728bb87a1020c8e5caae7359568_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb5ef73e2c78b879be3fefb885a800c10c5ba61f0156354a5e523152e4a309ff = $this->env->getExtension("native_profiler");
        $__internal_fb5ef73e2c78b879be3fefb885a800c10c5ba61f0156354a5e523152e4a309ff->enter($__internal_fb5ef73e2c78b879be3fefb885a800c10c5ba61f0156354a5e523152e4a309ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_fb5ef73e2c78b879be3fefb885a800c10c5ba61f0156354a5e523152e4a309ff->leave($__internal_fb5ef73e2c78b879be3fefb885a800c10c5ba61f0156354a5e523152e4a309ff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
