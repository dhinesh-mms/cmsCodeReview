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

/* displayprofile-form-edit-javascript.twig */
class __TwigTemplate_112d40e551fbd69c9c4acd602ea5b8d8 extends Template
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
    /**
    * Setup Display Profile setting forms
    */
    function displayProfileFormOpen() {
        // TIMERS
        setupFormFields(
            \$('#timers-container'),
            Handlebars.compile(\$('#template-timers').html()),
            \$('#timers-container').data('values'),
            \$('#timers-container').data('options'),
            timersFormInit,
            timersFormInit
        );

        // PICTURE OPTIONS
        setupFormFields(
            \$('#picture-options-container'),
            Handlebars.compile(\$('#template-picture-options').html()),
            \$('#picture-options-container').data('values'),
            \$('#picture-options-container').data('options'),
            pictureOptionsFormInit,
            pictureOptionsFormUpdate
        );

        // Android location field
        setAndroidDimensions(\$('.tab-pane#location'));

        // Popovers
        \$('[data-toggle=\"popover\"]').popover();
    }

     /**
    * Android dimension field
    * @param {jquery} container
    */
    function setAndroidDimensions(\$container) {
        const \$inputField = \$container.find('#screenDimensions');
        const template = Handlebars.compile(\$('#android-dimension-fields').html());

        // Prevent to run if screen dimensions does not exist
        if(\$inputField.length <= 0){
            return;
        }

        let fieldsTemplate;

        // Hide input
        \$inputField.attr('type', 'hidden');

        // Parse value if exists and assign it to the elements
        if(\$inputField.val() != \"\") {
            let values = \$inputField.val().split(',');

            fieldsTemplate = template({
              top: values[0],
              left: values[1],
              width: values[2],
              height:  values[3]
            });
        } else {
            fieldsTemplate = template();
        }

        // Add fields to parent container
        \$inputField.parent().prepend(fieldsTemplate);

        // Initialise values
        \$container.on('change', '.androidDimensionInput', function() {
            // Get all separated values
            var valueLeft = \$container.find('#dimensionLeft').val();
            var valueTop = \$container.find('#dimensionTop').val();
            var valueWidth = \$container.find('#dimensionWidth').val();
            var valueHeight = \$container.find('#dimensionHeight').val();

            // Set default colour
            \$('.androidDimensionInput').css('background-color', '#fff');

            // Set value to hidden input
            if(valueLeft != '' && valueTop != '' && valueWidth != '' && valueWidth >= 0 && valueHeight != '' && valueHeight >= 0) {
                \$inputField.val([valueLeft, valueTop, valueWidth, valueHeight].toString());
            } else {
                // Invalid value
                \$inputField.val('');

                // If some of the elements aren't empty and it's invalid, show a specific background
                if(valueLeft != '' || valueTop != '' || valueWidth != '' || valueHeight != ''){
                    \$('.androidDimensionInput').css('background-color', '#ffce9c');
                }
            }
        });
    }

    /**
    * Setup form dynamic fields
    * @param {jquery} container
    * @param {hbstemplate} template
    * @param {Object} values - Defined values
    * @param {Object} options - All the options
    */
    function setupFormFields(container, template, values, options, callbackFuncInit, callbackFuncUpdate) {

        // Prevent forms to setup inexisting fields
        if(container.length === 0) {
            return;
        }

        if(Object.keys(values).length == 0) {
            // Add a template row
            var context = {
                options: options,
                index: 1,
                name: \"\",
                values: {},
                buttonGlyph: \"fa-plus\"
            };
            container.append(template(context));
        } else {
            // For each of the existing codes, create form components
            var i = 0;
            \$.each(values, function(index, values) {
                i++;

                var context = {
                    options: options,
                    index: i,
                    name: index,
                    values: values,
                    buttonGlyph: ((i == 1) ? \"fa-plus\" : \"fa-minus\")
                };
                container.append(template(context));
            });
        }

        // Button click handle
        container.on(\"click\", \"button\", function(e) {
            e.preventDefault();

            // find the gylph
            if(\$(this).find(\"i\").hasClass(\"fa-plus\")) {
                
                var context = {
                    options: options,
                    index: container.find('.multiSelect:last').data('index') + 1,
                    name: \"\",
                    values: {},
                    buttonGlyph: \"fa-minus\"
                };
                
                // Append new object to container
                container.append(template(context));

                // Initialize form fields
                callbackFuncUpdate(container, options, values);
            } else {
                // Remove this row
                \$(this).closest(\".form-group\").remove();
            }
        });

        // Initialize form fields
        callbackFuncInit(container, options, values);
    }

    /**
    * Init/Update timePicker fields
    */
    function timersFormInit(container) {
        var customTimeFormat = 'HH:mm';
        container.find('.input-group:not(.timerInit) .timePickerDisplayEditForm').each(function() {
            if(calendarType == 'Jalali') {
                initDatePicker(
                    \$(this),
                    customTimeFormat,
                    customTimeFormat,
                    {
                        onlyTimePicker: true,
                        format: customTimeFormat,
                        timePicker: {
                            second: {
                                enabled: false
                            }
                        },
                        altFieldFormatter: function(unixTime) {
                            var newDate = moment.unix(unixTime / 1000);
                            newDate.set('second', 0);

                            return newDate.format(customTimeFormat);
                        }
                    }
                );
            } else {
                initDatePicker(
                    \$(this),
                    customTimeFormat,
                    customTimeFormat,
                    {
                        enableTime: true,
                        noCalendar: true,
                        time_24hr: true,
                        altFormat: customTimeFormat
                    }
                );
            }

            \$(this).parent().addClass('timerInit');
        });
    }

    /**
    * Initialise all form fields
    */
    function pictureOptionsFormInit(container, options, values) {

        container.find('.multiSelect').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });

        container.on('change', '.multiSelect', function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Update the last added field
    */
    function pictureOptionsFormUpdate(container, options, values) {

        container.find('.multiSelect:last').each(function() {
            pictureOptionsFormChangeInputs(\$(this).val(), \$(this).closest('.row'), options[\$(this).val()], values);
        });
    }

    /**
    * Populate and create the slider
    */
    function pictureOptionsFormChangeInputs(selProperty, row, propertyOptions, values) {
        if(selProperty == undefined || selProperty == '') {
            row.find('.multiSelectInputs').html(Handlebars.compile(\$('#template-picture-options-none').html())());
            return;
        }

        // Add empty template to the container
        var template = Handlebars.compile(\$('#template-picture-options-slider').html());
        row.find('.multiSelectInputs').html(template({
            index: row.find('.multiSelect').data('index')
        }));
        
        var propertyValue = values[selProperty];
        var sliderOptions = propertyOptions.sliderOptions;

        // Find respective index
        if(typeof(propertyValue) == \"string\") {
            for (var index = 0; index < sliderOptions.ticks_labels.length; index++) {
                var label = sliderOptions.ticks_labels[index];
                
                if(label == propertyValue) {
                    propertyValue = index;
                }
            }
        }

        // Set value to the options
        sliderOptions.value = ((propertyValue != undefined) ? propertyValue : 0);

        // Init slider
        row.find('.pictureControlsSlider').bootstrapSlider(sliderOptions); 

        // Refresh on tab switch to fix broken labels
        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function() {
            row.find('.pictureControlsSlider').bootstrapSlider('refresh', { useCurrentValue: true });
        });
    }

    // Equals helper for the templates below
    Handlebars.registerHelper('eq', function(v1, v2, opts) {
        if (v1 === v2) {
            return opts.fn(this);
        } else {
            return opts.inverse(this);
        }
    });
</script>

<style>
    /*
    * Slider width fix
    */
    .slider:not(.scaled-slider) {
        width: 100% !important;
    }
</style>

";
        // line 344
        echo "
    <script type=\"text/x-handlebars-template\" id=\"template-timers\">
        <div class=\"form-group col-sm-12 row form-group-timers\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"timers[{{ index }}][day]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{ id }}\" {{#eq id ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <div class=\"input-group\">
                    <input class=\"form-control timePickerDisplayEditForm timersOn\" type=\"text\" name=\"timers[{{ index }}][on]\" id=\"timersOn{{ index }}\" value=\"{{ values.on }}\" />
                    <span class=\"input-group-addon date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
                </div>
            </div>
            <div class=\"col-sm-3 multiSelectInputs\">
                <div class=\"input-group\">
                    <input class=\"form-control timePickerDisplayEditForm timersOff\" type=\"text\" name=\"timers[{{ index }}][off]\" id=\"timersOff{{ index }}\" value=\"{{ values.off }}\" />
                    <span class=\"input-group-addon date-clear-button d-none\" role=\"button\"><i class=\"fa fa-times\"></i></span>
                </div>
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options\">
            <div class=\"form-group col-sm-12 row form-group-picture-options\">
            <div class=\"col-sm-1\">
                <button type=\"button\" class=\"btn btn-white\"><i class=\"fa {{ buttonGlyph }}\"></i></button>
            </div>
            <div class=\"col-sm-5\">
                <select class=\"form-control multiSelect\" name=\"pictureControls[{{ index }}][property]\" data-index=\"{{ index }}\">
                    <option value=\"\"></option>
                    {{#each options}}
                        <option value=\"{{@key}}\" {{#eq @key ../name}} selected{{/eq}}>{{ name }}</option>
                    {{/each}}
                </select>
            </div>
            <div class=\"col-sm-6 multiSelectInputs\">
                ";
        echo "
                    <p class=\"btn btn-block btn-primary\" disabled>";
        // line 345
        echo __("Select a property to display inputs");
        echo "</p>
                ";
        // line 356
        echo "
            </div>
        </div>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-slider\">
        <input type=\"text\" class=\"pictureControlsSlider\" name=\"pictureControls[{{ index }}][value]\"/>
    </script>

    <script type=\"text/x-handlebars-template\" id=\"template-picture-options-none\">
        ";
        echo "
            <p class=\"btn btn-block btn-primary\" disabled>";
        // line 357
        echo __("Select a property to display inputs");
        echo "</p>
        ";
        // line 363
        echo "
    </script>

    <script type=\"text/x-handlebars-template\" id=\"android-dimension-fields\">
        <div class=\"row\">
            <input type=\"number\" value=\"{{ top }}\" class=\"col-3 form-control androidDimensionInput\" name=\"dimensionTop\" id=\"dimensionTop\" placeholder=\"";
        echo twig_escape_filter($this->env, __("Top"), "html", null, true);
        // line 364
        echo "\"></input>
            <input type=\"number\" value=\"{{ left }}\" class=\"col-3 form-control androidDimensionInput\" name=\"dimensionLeft\" id=\"dimensionLeft\" placeholder=\"";
        echo twig_escape_filter($this->env, __("Left"), "html", null, true);
        // line 365
        echo "\"></input>
            <input type=\"number\" value=\"{{ width }}\" class=\"col-3 form-control androidDimensionInput\" name=\"dimensionWidth\" id=\"dimensionWidth\" placeholder=\"";
        echo twig_escape_filter($this->env, __("Width"), "html", null, true);
        // line 366
        echo "\"></input>
            <input type=\"number\" value=\"{{ height }}\" class=\"col-3 form-control androidDimensionInput\" name=\"dimensionHeight\" id=\"dimensionHeight\" placeholder=\"";
        echo twig_escape_filter($this->env, __("Height"), "html", null, true);
        // line 369
        echo "\"></input>
        </div>
    </script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "displayprofile-form-edit-javascript.twig";
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
        return array (  423 => 369,  419 => 366,  415 => 365,  411 => 364,  403 => 363,  399 => 357,  385 => 356,  381 => 345,  334 => 344,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "displayprofile-form-edit-javascript.twig", "/var/www/html/cms_ubi/views/displayprofile-form-edit-javascript.twig");
    }
}
