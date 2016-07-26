<?php

/* base.html.twig */
class __TwigTemplate_ca1440fc4603cd1c9a34041bcb01ccbb472a3dff8aaeb2dabd1f33b141ee612d extends Twig_Template
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
        $__internal_f5039a4dc6014b54732b60b065fbeec935ebf2752222127a185e8216b12b062a = $this->env->getExtension("native_profiler");
        $__internal_f5039a4dc6014b54732b60b065fbeec935ebf2752222127a185e8216b12b062a->enter($__internal_f5039a4dc6014b54732b60b065fbeec935ebf2752222127a185e8216b12b062a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f5039a4dc6014b54732b60b065fbeec935ebf2752222127a185e8216b12b062a->leave($__internal_f5039a4dc6014b54732b60b065fbeec935ebf2752222127a185e8216b12b062a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a563534c3706680b0ec4f6525679bb985a59092adb9fb466a0f61dcdc79ac2fb = $this->env->getExtension("native_profiler");
        $__internal_a563534c3706680b0ec4f6525679bb985a59092adb9fb466a0f61dcdc79ac2fb->enter($__internal_a563534c3706680b0ec4f6525679bb985a59092adb9fb466a0f61dcdc79ac2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a563534c3706680b0ec4f6525679bb985a59092adb9fb466a0f61dcdc79ac2fb->leave($__internal_a563534c3706680b0ec4f6525679bb985a59092adb9fb466a0f61dcdc79ac2fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ad1ec6bef46abf75988cd05984c0767cd7aea9ac0e269bd90f22e87818453bb = $this->env->getExtension("native_profiler");
        $__internal_2ad1ec6bef46abf75988cd05984c0767cd7aea9ac0e269bd90f22e87818453bb->enter($__internal_2ad1ec6bef46abf75988cd05984c0767cd7aea9ac0e269bd90f22e87818453bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ad1ec6bef46abf75988cd05984c0767cd7aea9ac0e269bd90f22e87818453bb->leave($__internal_2ad1ec6bef46abf75988cd05984c0767cd7aea9ac0e269bd90f22e87818453bb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c17f4bfefd473c4708f25fcdbb8077d8fb430f3070c4a178c9a25b0b046915f = $this->env->getExtension("native_profiler");
        $__internal_7c17f4bfefd473c4708f25fcdbb8077d8fb430f3070c4a178c9a25b0b046915f->enter($__internal_7c17f4bfefd473c4708f25fcdbb8077d8fb430f3070c4a178c9a25b0b046915f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c17f4bfefd473c4708f25fcdbb8077d8fb430f3070c4a178c9a25b0b046915f->leave($__internal_7c17f4bfefd473c4708f25fcdbb8077d8fb430f3070c4a178c9a25b0b046915f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83e5f61c223cfb1cfea0b2bfcca3de6dbf38efd7b6f77ed49110f5e3b00bce10 = $this->env->getExtension("native_profiler");
        $__internal_83e5f61c223cfb1cfea0b2bfcca3de6dbf38efd7b6f77ed49110f5e3b00bce10->enter($__internal_83e5f61c223cfb1cfea0b2bfcca3de6dbf38efd7b6f77ed49110f5e3b00bce10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83e5f61c223cfb1cfea0b2bfcca3de6dbf38efd7b6f77ed49110f5e3b00bce10->leave($__internal_83e5f61c223cfb1cfea0b2bfcca3de6dbf38efd7b6f77ed49110f5e3b00bce10_prof);

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
