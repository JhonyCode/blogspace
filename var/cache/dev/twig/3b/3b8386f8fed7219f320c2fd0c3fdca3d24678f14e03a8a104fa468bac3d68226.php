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

/* admin/_menu.html.twig */
class __TwigTemplate_ac1450466a354f4667c90bd1faa58c56f37da1b268797eaa64eb21be27bf2d16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_menu.html.twig"));

        // line 1
        echo "<div class=\"position-sticky pt-3\">
    <ul class=\"nav flex-column\">
        ";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERADMIN")) {
            // line 4
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_espacio_index");
            echo "\">
                <span data-feather=\"file\"></span>
                Espacios
            </a>
        </li>
        ";
        }
        // line 11
        echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categoria_index");
        echo "\">
                <span data-feather=\"shopping-cart\"></span>
                Categorías
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_entrada_index");
        echo "\">
                <span data-feather=\"aperture\"></span>
                Entradas
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_etiqueta_index");
        echo "\">
                <span data-feather=\"award\"></span>
                Etiquetas
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_comentario_index");
        echo "\">
                <span data-feather=\"check-circle\"></span>
                Comentarios
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_usuario_index");
        echo "\">
                <span data-feather=\"filter\"></span>
                Usuarios
            </a>
        </li>
    </ul>

 </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  91 => 30,  82 => 24,  73 => 18,  64 => 12,  61 => 11,  52 => 5,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"position-sticky pt-3\">
    <ul class=\"nav flex-column\">
        {% if is_granted('ROLE_SUPERADMIN') %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_espacio_index') }}\">
                <span data-feather=\"file\"></span>
                Espacios
            </a>
        </li>
        {% endif %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_categoria_index') }}\">
                <span data-feather=\"shopping-cart\"></span>
                Categorías
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_entrada_index') }}\">
                <span data-feather=\"aperture\"></span>
                Entradas
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_etiqueta_index') }}\">
                <span data-feather=\"award\"></span>
                Etiquetas
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_comentario_index') }}\">
                <span data-feather=\"check-circle\"></span>
                Comentarios
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_admin_usuario_index') }}\">
                <span data-feather=\"filter\"></span>
                Usuarios
            </a>
        </li>
    </ul>

 </div>", "admin/_menu.html.twig", "/var/www/html/symfony/blog/templates/admin/_menu.html.twig");
    }
}
