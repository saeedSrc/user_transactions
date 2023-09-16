<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth/login.twig */
class __TwigTemplate_a6f53fdec738e9f129c3fb415bd0cb85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "auth/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("auth/layout.twig", "auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log In";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <section class=\"vh-100 bg-primary bg-gradient\">
        <div class=\"container py-5 h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-12 col-md-8 col-lg-6 col-xl-5\">
                    <div class=\"card bg-light text-white\" style=\"border-radius: 1rem;\">
                        <div class=\"card-body p-5 text-center\">
                            <div class=\"mb-4\">
                                <h2 class=\"fw-bold mb-5 text-uppercase text-primary d-flex justify-content-center align-items-center\">
                                    <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo.png"), "html", null, true);
        echo "\" width=\"64\" height=\"64\"
                                         alt=\"Expennies Logo\" />
                                    Login
                                </h2>
                                <form method=\"post\" action=\"/login\">
                                    <div class=\"form-outline form-white mb-4\">
                                        <input type=\"email\" class=\"form-control form-control-lg\" placeholder=\"Email\"
                                               required />
                                    </div>
                                    <div class=\"form-outline form-white mb-1\">
                                        <input type=\"password\" class=\"form-control form-control-lg\"
                                               placeholder=\"Password\" required />
                                    </div>
                                    <p class=\"mb-4 text-end\"><a class=\"text-secondary fw-semibold\" href=\"#\">Forgot
                                            password?</a></p>
                                    <button class=\"btn btn-primary bg-gradient text-white btn-lg px-5\" type=\"submit\">Log
                                        In
                                    </button>
                                </form>
                            </div>
                            <div>
                                <p class=\"mb-0 text-dark\">Don't have an account?
                                    <a href=\"/register\" class=\"text-primary fw-bold\">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/login.twig", "/var/www/resources/views/auth/login.twig");
    }
}
