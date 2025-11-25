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

/* region-designer-javascript.twig */
class __TwigTemplate_fcc656d9ead534e89bc39c484919f4f3 extends Template
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
        // line 8
        echo "<script type=\"text/javascript\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
    // Check if region is inside the layout view area
    // And show/hide respective button
    function checkBringToView(positions, layout, form) {
        const notInView = (
            positions.left > layout.width ||
            (positions.left + positions.width) < 0 ||
            positions.top > layout.height ||
            (positions.top + positions.height) < 0
        );
        \$(form).find('#bringToViewButton')
            .toggleClass('d-none', !notInView);
    }

    // Runs after form opens
    function regionFormEditOpen() {
        // Transition type affects the transition-group visibility
        formHelpers.setupObjectValueInputFields(\$(this).find('form'), '#transitionType', ['.transition-group'], null, true);

        // Handle set region as fullscreen button
        // Get layout object
        var app = lD;
        var layout = lD.layout;
        var form = \$(this).find('form');
        var buttonText = form.find('#setFullScreenButton').html();

        // Check if we should show the bring to view button
        checkBringToView({
            left: form.find('[name=\"left\"]').val(),
            top: form.find('[name=\"top\"]').val(),
            width: form.find('[name=\"width\"]').val(),
            height: form.find('[name=\"height\"]').val(),
        }, layout, form);

        // Replace button text tags
        if(buttonText) {
            form.find('#setFullScreenButton').html(buttonText.replace('[width]', layout.width).replace('[height]', layout.height));
        }

        // Handle set fullscreen
        form.find('#setFullScreenButton').click(function() {
            // Set position values to 0
            form.find('[name=\"top\"]').val(0);
            form.find('[name=\"left\"]').val(0);

            // Set dimensions values to be the same as the layout's
            form.find('[name=\"width\"]').val(layout.width);
            form.find('[name=\"height\"]').val(layout.height);

            formChangesRegion();
        });

        // Handle bring to view
        form.find('#bringToViewButton').click(function() {
            const positions = {
                left: form.find('[name=\"left\"]').val(),
                top: form.find('[name=\"top\"]').val(),
                width: form.find('[name=\"width\"]').val(),
                height: form.find('[name=\"height\"]').val(),
            };

            if (Number(positions.left) > app.layout.width) {
              positions.left = app.layout.width - positions.width;
            }
            if (Number(positions.left) + positions.width < 0) {
              positions.left = 0;
            }
            if (Number(positions.top) > app.layout.height) {
              positions.top = app.layout.height - positions.height;
            }
            if (Number(positions.top) + Number(positions.height) < 0) {
              positions.top = 0;
            }

            // Set position values
            form.find('[name=\"left\"]').val(positions.left);
            form.find('[name=\"top\"]').val(positions.top);
            form.find('[name=\"width\"]').val(positions.width);
            form.find('[name=\"height\"]').val(positions.height);

            formChangesRegion();
        });
        
        form.find('[name=\"top\"], [name=\"left\"], [name=\"width\"], [name=\"height\"], [name=\"zIndex\"]').on('change', _.debounce(function(){
            formChangesRegion();
        }, 200));

        regionChangesForm();

        app.viewer.updateMoveable();
    }

    function formChangesRegion() {
        var app = lD;
        var layout = app.layout;
        var regionId = app.selectedObject.id;
        var form = \$(app.propertiesPanel.DOMObject).find('form');

        // Check if we should show the bring to view button
        checkBringToView({
            left: form.find('[name=\"left\"]').val(),
            top: form.find('[name=\"top\"]').val(),
            width: form.find('[name=\"width\"]').val(),
            height: form.find('[name=\"height\"]').val(),
        }, layout, form);

        layout.regions[regionId].transform({
            'width': form.find('[name=\"width\"]').val(),
            'height': form.find('[name=\"height\"]').val(),
            'top': form.find('[name=\"top\"]').val(),
            'left': form.find('[name=\"left\"]').val(),
            'zIndex': form.find('[name=\"zIndex\"]').val(),
        }, true);

        app.viewer.updateRegion(layout.regions[regionId], true);

        app.viewer.updateMoveable();
    }

    function regionChangesForm() {
        var app = lD;
        var layout = app.layout;
        var form = \$(app.propertiesPanel.DOMObject).find('form')
        
        // If form not loaded, prevent changes
        if(form.length == 0 || app.layout.regions[app.selectedObject.id] == undefined) {
            return;
        }
        
        var regionDimensions = app.layout.regions[app.selectedObject.id].dimensions;

        // Check if we should show the bring to view button
        checkBringToView(regionDimensions, layout, form);

        form.find('[name=\"top\"]').val(parseInt(regionDimensions.top));
        form.find('[name=\"left\"]').val(parseInt(regionDimensions.left));

        // Set dimensions values to be the same as the layout's
        form.find('[name=\"width\"]').val(parseInt(regionDimensions.width));
        form.find('[name=\"height\"]').val(parseInt(regionDimensions.height));
    }
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "region-designer-javascript.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "region-designer-javascript.twig", "/var/www/html/cms_ubi/views/region-designer-javascript.twig");
    }
}
