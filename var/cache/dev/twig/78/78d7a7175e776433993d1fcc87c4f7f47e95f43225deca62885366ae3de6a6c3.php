<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a610de5d878f1d4623c48d2f3341fffc4842b20e2049b8e073179161c5e4b84d extends Twig_Template
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
        $__internal_1c6f7f04efb9e0c1f9853c1148b1560c45feff3c3deb418d84491ceabbd960f9 = $this->env->getExtension("native_profiler");
        $__internal_1c6f7f04efb9e0c1f9853c1148b1560c45feff3c3deb418d84491ceabbd960f9->enter($__internal_1c6f7f04efb9e0c1f9853c1148b1560c45feff3c3deb418d84491ceabbd960f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1c6f7f04efb9e0c1f9853c1148b1560c45feff3c3deb418d84491ceabbd960f9->leave($__internal_1c6f7f04efb9e0c1f9853c1148b1560c45feff3c3deb418d84491ceabbd960f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
