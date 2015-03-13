<?php

/* index.twig */
class __TwigTemplate_17b70c66c97304dd6bb323cd5f7f022e3e21579018db37d36c3e91b845010c00 extends Twig_Template
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
        // line 1
        echo "%section.container
  %h1= post.title
  %h2= post.subtitle
  .content
    = post.content";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
