<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_c6b42ed8687d7b4384baef1c23467c42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'blog_title' => array($this, 'block_blog_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "    Sidebar content
";
    }

    // line 7
    public function block_blog_title($context, array $blocks = array())
    {
        // line 8
        echo "<a href=\"#\">symblog - custom</a>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
