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

/* layout-designer-page.twig */
class __TwigTemplate_17eba1450bcedad408992f6370ec9645 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'javaScript' => [$this, 'block_javaScript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 9
        return "authed.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $macros["inline"] = $this->macros["inline"] = $this->loadTemplate("inline.twig", "layout-designer-page.twig", 10)->unwrap();
        // line 14
        $context["hideNavigation"] = "1";
        // line 9
        $this->parent = $this->loadTemplate("authed.twig", "layout-designer-page.twig", 9);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, __("Layout Editor"), "html", null, true);
        echo " | ";
    }

    // line 16
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
    <!-- Editor structure -->
    <div id=\"layout-editor\" data-published-layout-id=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["publishedLayoutId"] ?? null), "html", null, true);
        echo "\" data-layout-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["layout"] ?? null), "layoutId", [], "any", false, false, false, 19), "html", null, true);
        echo "\" data-layout-help=";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "html", null, true);
        echo "></div>

    <div class=\"loading-overlay\">
        <i class=\"fa fa-spinner fa-spin loading-icon\"></i>
    </div>

";
    }

    // line 27
    public function block_javaScript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        $this->loadTemplate("common.twig", "layout-designer-page.twig", 29)->display($context);
        // line 30
        echo "
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 31), "html", null, true);
        echo "dist/layoutEditor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "rootUri", [], "method", false, false, false, 32), "html", null, true);
        echo "dist/playlistEditor.bundle.min.js?v=";
        echo twig_escape_filter($this->env, ($context["version"] ?? null), "html", null, true);
        echo "&rev=";
        echo twig_escape_filter($this->env, ($context["revision"] ?? null), "html", null, true);
        echo "\" nonce=\"";
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" nonce=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">

            ";
        // line 36
        echo "            ";
        // line 37
        echo "                var layoutEditorHelpLink = \"";
        echo twig_escape_filter($this->env, ($context["help"] ?? null), "js", null, true);
        echo "\";
                ";
        // line 39
        echo "                var layoutEditorTrans = {
                    back: \"";
        // line 40
        echo __("Back");
        echo "\",
                    exit: \"";
        // line 41
        echo __("Exit");
        echo "\",
                    toggleFullscreen: \"";
        // line 42
        echo __("Toggle Fullscreen Mode");
        echo "\",
                    layerManager: \"";
        // line 43
        echo __("Layer Manager");
        echo "\",
                    snapToGrid: \"";
        // line 44
        echo __("Snap to Grid");
        echo "\",
                    snapToBorders: \"";
        // line 45
        echo __("Snap to Borders");
        echo "\",
                    snapToElements: \"";
        // line 46
        echo __("Snap to Elements");
        echo "\",
                    newTitle: \"";
        // line 47
        echo __("New");
        echo "\",
                    publishTitle: \"";
        // line 48
        echo __("Publish");
        echo "\",
                    discardTitle: \"";
        // line 49
        echo __("Discard draft");
        echo "\",
                    deleteTitle: \"";
        // line 50
        echo __("Delete");
        echo "\",
                    publishMessage: \"";
        // line 51
        echo __("Are you sure you want to publish this Layout? If it is already in use the update will automatically get pushed.");
        echo "\",
                    checkoutTitle: \"";
        // line 52
        echo __("Checkout");
        echo "\",
                    scheduleTitle: \"";
        // line 53
        echo __("Schedule");
        echo "\",
                    unlockTitle: \"";
        // line 54
        echo __("Unlock");
        echo "\",
                    saveTemplateTitle: \"";
        // line 55
        echo __("Save Template");
        echo "\",
                    readOnlyModeTitle: \"";
        // line 56
        echo __("Read Only");
        echo "\",
                    readOnlyModeMessage: \"";
        // line 57
        echo __("You are viewing this Layout in read only mode, checkout by clicking on this message or from the Options menu above!");
        echo "\",
                    lockedModeTitle: \"";
        // line 58
        echo __("Locked");
        echo "\",
                    lockedModeMessage: \"";
        // line 59
        echo __("This is being locked by another user. Lock expires on: [expiryDate]");
        echo "\",
                    checkoutMessage: \"";
        // line 60
        echo __("Not editable, please checkout!");
        echo "\",
                    unlockMessage: \"";
        // line 61
        echo __("The current layout will be unlocked to other users. You will also be redirected to the Layouts page");
        echo "\",
                    viewModeTitle: \"";
        // line 62
        echo __("View");
        echo "\",
                    actions: \"";
        // line 63
        echo __("Actions");
        echo "\",
                    welcomeModalMessage: \"";
        // line 64
        echo __("This is published and cannot be edited. You can checkout for editing below, or continue to view it in a read only mode.");
        echo "\",
                    showingSampleData:  \"";
        // line 65
        echo __("Showing sample data");
        echo "\",
                    emptyElementData: \"";
        // line 66
        echo __("Has empty data");
        echo "\",
                };

                var viewerTrans = {
                    inlineEditor: \"";
        // line 70
        echo __("Inline Editor");
        echo "\",
                    nextWidget: \"";
        // line 71
        echo __("Next widget");
        echo "\",
                    previousWidget: \"";
        // line 72
        echo __("Previous widget");
        echo "\",
                    addWidget: \"";
        // line 73
        echo __("Add Widget");
        echo "\",
                    editGroup: \"";
        // line 74
        echo __("Edit Group");
        echo "\",
                    editPlaylist: \"";
        // line 75
        echo __("Edit Playlist");
        echo "\",
                    prev: '";
        // line 76
        echo twig_escape_filter($this->env, __("Previous Widget"), "js", null, true);
        echo "',
                    next: '";
        // line 77
        echo twig_escape_filter($this->env, __("Next Widget"), "js", null, true);
        echo "',
                    empty: '";
        // line 78
        echo twig_escape_filter($this->env, __("Empty Playlist"), "js", null, true);
        echo "',
                    invalidRegion: '";
        // line 79
        echo twig_escape_filter($this->env, __("Invalid Region"), "js", null, true);
        echo "',
                    editPlaylistTitle: '";
        // line 80
        echo twig_escape_filter($this->env, __("Edit Playlist"), "js", null, true);
        echo "',
                    dynamicPlaylistTitle: '";
        // line 81
        echo twig_escape_filter($this->env, __("Dynamic Playlist"), "js", null, true);
        echo "',
                };

                var timelineTrans = {
                    zoomIn: \"";
        // line 85
        echo __("Zoom in");
        echo "\",
                    zoomOut: \"";
        // line 86
        echo __("Zoom out");
        echo "\",
                    resetZoom: \"";
        // line 87
        echo __("Reset zoom");
        echo "\",
                    zoomDelta: \"";
        // line 88
        echo __("Visible area time span");
        echo "\",
                    hiddenTimeruler: \"";
        // line 89
        echo __("Zoom out to see timeruler!");
        echo "\",
                    emptyTimeline: \"";
        // line 90
        echo __("No Regions: Add a Region to start creating content by clicking here or the Edit Layout icon below!");
        echo "\",
                    zoomFindSelected: \"";
        // line 91
        echo __("Scroll to selected widget");
        echo "\",
                    startTime: \"";
        // line 92
        echo __("Visible area start time");
        echo "\",
                    endTime: \"";
        // line 93
        echo __("Visible area end time");
        echo "\",
                    layoutName: \"";
        // line 94
        echo __("Layout name");
        echo "\",
                    layoutDuration: \"";
        // line 95
        echo __("Layout duration");
        echo "\",
                    layoutDimensions: \"";
        // line 96
        echo __("Layout dimensions");
        echo "\",
                    addToThisPosition: \"";
        // line 97
        echo __("Add to this position");
        echo "\",
                    hiddenContentInWidget: \"";
        // line 98
        echo __("Zoom in to see more details!");
        echo "\",
                    editRegion: \"";
        // line 99
        echo __("Edit region");
        echo "\",
                    openRegionAsPlaylist: \"";
        // line 100
        echo __("Open as playlist");
        echo "\",
                    widgetActions: \"";
        // line 101
        echo __("Widget Actions:");
        echo "\",
                    regionActions: \"";
        // line 102
        echo __("Region Actions:");
        echo "\"
                };

                var bottombarTrans = {
                    edit: \"";
        // line 106
        echo __("Edit layout regions");
        echo "\",
                    addRegion: \"";
        // line 107
        echo __("Add");
        echo "\",
                    addRegionDesc: \"";
        // line 108
        echo __("Add a new region");
        echo "\",
                    deleteRegion: \"";
        // line 109
        echo __("Delete region");
        echo "\",
                    undo: \"";
        // line 110
        echo __("Undo");
        echo "\",
                    undoDesc: \"";
        // line 111
        echo __("Revert last change");
        echo "\",
                    close: \"";
        // line 112
        echo __("Close");
        echo "\",
                    closeDesc: \"";
        // line 113
        echo __("Return to Layout View");
        echo "\",
                    save: \"";
        // line 114
        echo __("Save");
        echo "\",
                    saveDesc: \"";
        // line 115
        echo __("Save changes");
        echo "\",
                    backToLayout: \"";
        // line 116
        echo __("Go back to Layout view");
        echo "\",
                    saveEditorChanges: \"";
        // line 117
        echo __("Save editor changes");
        echo "\",
                    playPreviewLayout: \"";
        // line 118
        echo __("Play Layout preview");
        echo "\",
                    playPreviewLayoutPOTitle: \"";
        // line 119
        echo __("Preview stopped!");
        echo "\",
                    playPreviewLayoutPOMessage: \"";
        // line 120
        echo __("Click to Play again");
        echo "\",
                    editLayout: \"";
        // line 121
        echo __("Edit Layout");
        echo "\",
                    stopPreviewLayout: \"";
        // line 122
        echo __("Stop Layout preview");
        echo "\",
                    nextWidget: \"";
        // line 123
        echo __("Next widget");
        echo "\",
                    previousWidget: \"";
        // line 124
        echo __("Previous widget");
        echo "\",
                    widgetName: \"";
        // line 125
        echo __("Widget Name");
        echo "\",
                    widgetType: \"";
        // line 126
        echo __("Widget Type");
        echo "\",
                    widgetTemplate: \"";
        // line 127
        echo __("Widget Template Name");
        echo "\",
                    elementName: \"";
        // line 128
        echo __("Element Name");
        echo "\",
                    elementMediaInfoName: \"";
        // line 129
        echo twig_escape_filter($this->env, __("Media Name"), "js", null, true);
        echo "\",
                    elementMediaInfoId: \"";
        // line 130
        echo twig_escape_filter($this->env, __("Media ID"), "js", null, true);
        echo "\",
                    elementGroupName: \"";
        // line 131
        echo __("Element Group Name");
        echo "\",
                    regionName: \"";
        // line 132
        echo __("Region Name");
        echo "\",
                    templateName: \"";
        // line 133
        echo __("Template");
        echo "\",
                    objectType: {
                        layout: \"";
        // line 135
        echo twig_escape_filter($this->env, __("Layout"), "js", null, true);
        echo "\",
                        region: \"";
        // line 136
        echo twig_escape_filter($this->env, __("Region"), "js", null, true);
        echo "\",
                        zone: \"";
        // line 137
        echo twig_escape_filter($this->env, __("Zone"), "js", null, true);
        echo "\",
                        playlist: \"";
        // line 138
        echo twig_escape_filter($this->env, __("Playlist"), "js", null, true);
        echo "\",
                        widget: \"";
        // line 139
        echo twig_escape_filter($this->env, __("Widget"), "js", null, true);
        echo "\",
                        element: \"";
        // line 140
        echo twig_escape_filter($this->env, __("Element"), "js", null, true);
        echo "\",
                        \"element-group\": \"";
        // line 141
        echo twig_escape_filter($this->env, __("Element Group"), "js", null, true);
        echo "\",
                    },
                    tools: {
                        audio: {
                            name: \"";
        // line 145
        echo twig_escape_filter($this->env, __("Audio"), "js", null, true);
        echo "\",
                            description: \"";
        // line 146
        echo twig_escape_filter($this->env, __("Upload Audio files to assign to Widgets"), "js", null, true);
        echo "\"
                        },
                        transitionIn: {
                            name: \"";
        // line 149
        echo twig_escape_filter($this->env, __("Transition In"), "js", null, true);
        echo "\",
                            description: \"";
        // line 150
        echo twig_escape_filter($this->env, __("Apply a Transition type for the start of a media item"), "js", null, true);
        echo "\"
                        },
                        transitionOut: {
                            name: \"";
        // line 153
        echo twig_escape_filter($this->env, __("Transition Out"), "js", null, true);
        echo "\",
                            description: \"";
        // line 154
        echo twig_escape_filter($this->env, __("Apply a Transition type for the end of a media item"), "js", null, true);
        echo "\"
                        },
                        permissions: {
                            name: \"";
        // line 157
        echo twig_escape_filter($this->env, __("Sharing"), "js", null, true);
        echo "\",
                            description: \"";
        // line 158
        echo twig_escape_filter($this->env, __("Set View, Edit and Delete Sharing for Widgets and Playlists"), "js", null, true);
        echo "\"
                        }
                    }
                };
            ";
        // line 163
        echo "        </script>
        <script type=\"text/javascript\" nonce=\"";
        // line 164
        echo twig_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
            /**
             * Setup the background form.
             */
            function backGroundFormSetup(dialog) {
                var \$backgroundImageId = \$('[name=\"backgroundImageId\"]', dialog);
                var notFoundIcon = \$('#bg_not_found_icon', dialog);
                var bgImageFileName = \$('#bg_media_name', dialog);
                var saveButton = \$('button#save', dialog);
                var initialBackgroundImageId = \$backgroundImageId.val();
                var backgroundChanged = false;

                function backgroundImageChange() {
                    // Want to attach an onchange event to the drop down for the bg-image
                    var id = \$backgroundImageId.val();
                    var isNotDefined = [0, ''].indexOf(id) !== -1;

                    // Disable remove button if no image is defined
                    \$('#backgroundRemoveButton').toggleClass('disabled', isNotDefined);

                    // If the image is not defined
                    if (isNotDefined) {
                        // Show not found icon and hide image
                        notFoundIcon.show();
                        bgImageFileName.hide();
                    } else {

                        // Hide not found icon and show image
                        notFoundIcon.hide();
                        bgImageFileName.show();

                        // Auto-submit form
                        if (id !== initialBackgroundImageId) {
                          saveButton.trigger('click');
                        }
                    }

                    if (id !== initialBackgroundImageId) {
                        backgroundChanged = true;
                    }
                }

                function backgroundImageHandleDrop(mediaToAdd, fromProvider) {
                    if(fromProvider) {
                        lD.importFromProvider([mediaToAdd]).then((res) =>  {
                            \$backgroundImageId.val(res[0]).trigger('change');
                        }).catch(function() {
                            toastr.error(errorMessagesTrans.importingMediaFailed);
                        });
                    } else {
                        \$backgroundImageId.val(mediaToAdd).trigger('change');
                    }

                    // Deselect drop zones after adding
                    lD.toolbar.deselectCardsAndDropZones();
                }

                // Handle id change
                \$backgroundImageId.change(backgroundImageChange);

                // Call change on form load
                backgroundImageChange();

                // Bind to the background add and remove button click
                \$('#backgroundUploadButton').on('click', function(e) {
                    layoutEditBackgroundButtonClicked(e, dialog);
                });

                \$('#backgroundRemoveButton').on('click', function(e) {
                    if(!\$(this).hasClass('disabled')) {
                        \$backgroundImageId.val('').trigger('change');
                    }
                });

                // Handle droppable area
                \$('.background-image-add').droppable({
                    greedy: true,
                    tolerance: 'pointer',
                    accept: function(el) {
                        return (\$(el).data('type') === 'media' && \$(el).data('subType') === 'image');
                    },
                    drop: _.debounce(function(event, ui) {
                        var \$draggable = \$(ui.draggable[0]);

                        // Change file name
                        bgImageFileName.html(\$draggable.data('title'));

                        if(\$draggable.hasClass('from-provider')) {
                            backgroundImageHandleDrop(\$draggable.data('providerData'), true);
                        } else {
                            backgroundImageHandleDrop(\$draggable.data('mediaId'));
                        }
                    }, 200)
                });

                // Handle click to add
                \$('.background-image-drop').on('click', function() {
                    var selectedCard = lD.toolbar.selectedCard;
                    var fromProvider = selectedCard.hasClass('from-provider');
                    var cardData = (fromProvider) ? selectedCard.data('providerData') : selectedCard.data('mediaId');

                    // Change file name
                    bgImageFileName.html(selectedCard.data('title'));

                    backgroundImageHandleDrop(cardData, fromProvider);
                });

                // Bind to the layout form submit
                \$(\"#layoutEditForm\").submit(function(e) {
                    e.preventDefault();

                    var form = \$(this);

                    // Submit via ajax - change the background color on success
                    \$.ajax({
                        type: form.attr(\"method\"),
                        url: form.attr(\"action\"),
                        cache: false,
                        dataType: \"json\",
                        data: \$(form).serialize(),
                        success: function(xhr, textStatus, error) {

                            XiboSubmitResponse(xhr, form);

                            if (xhr.success) {
                                var layout = \$(\"div#layout\");

                                if (layout.length > 0) {
                                    var color = form.find(\"#backgroundColor\").val();
                                    layout.data().backgroundColor = color;
                                    layout.css(\"background-color\", color);

                                    if (backgroundChanged)
                                        window.location.reload();
                                } else {
                                    // We assume we're on the layout page - call render
                                    // If we're not, table is a Chrome/Safari/FireBug global function
                                    if (backgroundChanged && typeof(table) !== 'undefined' && table.hasOwnProperty('ajax'))
                                        table.ajax.reload(null, false);
                                }
                            }
                        },
                        error: function(xhr, textStatus, errorThrown) {
                            SystemMessage(xhr.responseText, false);
                        }
                    });
                })
            };

            /**
             * Layout edit background add image button
             * @param e the event
             * @param dialog the dialog
             */
            function layoutEditBackgroundButtonClicked(e, dialog) {
                e.preventDefault();

                // Open an upload form
                openUploadForm({
                    url: \$(e.target).data().addNewBackgroundUrl,
                    title: \"";
        // line 324
        echo __("Add Background Image");
        echo "\",
                    videoImageCovers: false,
                    buttons: {
                        main: {
                            label: \"";
        // line 328
        echo __("Done");
        echo "\",
                            className: \"btn-primary btn-bb-main\",
                            callback: function () {
                                XiboDialogClose();
                            }
                        }
                    },
                    templateOptions: {
                        multi: false,
                        trans: {
                            addFiles: \"";
        // line 338
        echo __("Browse/Add Image");
        echo "\",
                            startUpload: \"";
        // line 339
        echo __("Start Upload");
        echo "\",
                            cancelUpload: \"";
        // line 340
        echo __("Cancel Upload");
        echo "\"
                        },
                        upload: {
                            maxSize: ";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSize", [], "any", false, false, false, 343), "html", null, true);
        echo ",
                            maxSizeMessage: \"";
        // line 344
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "maxSizeMessage", [], "any", false, false, false, 344), "html", null, true);
        echo "\",
                            validExt: \"";
        // line 345
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["libraryUpload"] ?? null), "validImageExt", [], "any", false, false, false, 345), "html", null, true);
        echo "\"
                        }
                    },
                    uploadDoneEvent: function (data) {
                        // Get the mediaId
                        var mediaId = data.result.files[0].mediaId;

                        // Update the form field with the mediaId
                        // or add it if it doesn't exist
                        if (\$(dialog).find('[name=\"backgroundImageId\"]').length === 0) {
                            \$('<input>').attr({
                                type: 'hidden',
                                name: 'backgroundImageId',
                                value: mediaId
                            }).appendTo(dialog);
                        } else {
                            \$('[name=\"backgroundImageId\"]').val(mediaId);
                        }

                        dialog.find(\"#bg_not_found_icon\").hide();

                        // Enable the remove button
                        dialog.find(\"#backgroundRemoveButton\").removeClass(\"disabled\");

                        XiboDialogClose();

                        // Auto-submit form by triggering the input field
                        \$('[name=\"backgroundImageId\"]').trigger('change');
                    }
                });
            }

            function layoutPublishFormOpen() {
            }

            function layoutEditFormSaved() {
              lD.reloadData(lD.layout,
                {
                  refreshEditor: true,
                });
            }
        </script>

        ";
        // line 388
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 389
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 389) != "")) {
                // line 390
                echo "                ";
                $this->loadTemplate((twig_get_attribute($this->env, $this->source, $context["module"], "layoutDesignerJavaScript", [], "method", false, false, false, 390) . ".twig"), "layout-designer-page.twig", 390)->display($context);
                // line 391
                echo "            ";
            }
            // line 392
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "
        ";
        // line 394
        $this->loadTemplate("region-designer-javascript.twig", "layout-designer-page.twig", 394)->display($context);
        // line 395
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout-designer-page.twig";
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
        return array (  852 => 395,  850 => 394,  847 => 393,  833 => 392,  830 => 391,  827 => 390,  824 => 389,  807 => 388,  761 => 345,  757 => 344,  753 => 343,  747 => 340,  743 => 339,  739 => 338,  726 => 328,  719 => 324,  556 => 164,  553 => 163,  546 => 158,  542 => 157,  536 => 154,  532 => 153,  526 => 150,  522 => 149,  516 => 146,  512 => 145,  505 => 141,  501 => 140,  497 => 139,  493 => 138,  489 => 137,  485 => 136,  481 => 135,  476 => 133,  472 => 132,  468 => 131,  464 => 130,  460 => 129,  456 => 128,  452 => 127,  448 => 126,  444 => 125,  440 => 124,  436 => 123,  432 => 122,  428 => 121,  424 => 120,  420 => 119,  416 => 118,  412 => 117,  408 => 116,  404 => 115,  400 => 114,  396 => 113,  392 => 112,  388 => 111,  384 => 110,  380 => 109,  376 => 108,  372 => 107,  368 => 106,  361 => 102,  357 => 101,  353 => 100,  349 => 99,  345 => 98,  341 => 97,  337 => 96,  333 => 95,  329 => 94,  325 => 93,  321 => 92,  317 => 91,  313 => 90,  309 => 89,  305 => 88,  301 => 87,  297 => 86,  293 => 85,  286 => 81,  282 => 80,  278 => 79,  274 => 78,  270 => 77,  266 => 76,  262 => 75,  258 => 74,  254 => 73,  250 => 72,  246 => 71,  242 => 70,  235 => 66,  231 => 65,  227 => 64,  223 => 63,  219 => 62,  215 => 61,  211 => 60,  207 => 59,  203 => 58,  199 => 57,  195 => 56,  191 => 55,  187 => 54,  183 => 53,  179 => 52,  175 => 51,  171 => 50,  167 => 49,  163 => 48,  159 => 47,  155 => 46,  151 => 45,  147 => 44,  143 => 43,  139 => 42,  135 => 41,  131 => 40,  128 => 39,  123 => 37,  121 => 36,  116 => 33,  106 => 32,  96 => 31,  93 => 30,  90 => 29,  88 => 28,  84 => 27,  69 => 19,  65 => 17,  61 => 16,  53 => 12,  48 => 9,  46 => 14,  44 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout-designer-page.twig", "/var/www/html/cms_ubi/views/layout-designer-page.twig");
    }
}
