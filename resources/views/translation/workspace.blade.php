<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hapësira e Përkthimit - {{ $translation->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/kfgqpc-hafs-uthmanic-script" rel="stylesheet">
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <style>
        body {
            background: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .workspace-container {
            display: flex;
            height: 100vh;
            padding: 0;
        }

        .albanian-panel {
            flex: 1;
            background: white;
            border-right: 2px solid #ddd;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .arabic-panel {
            flex: 1;
            background: white;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .panel-header {
            background: #f8f9fa;
            padding: 8px 15px;
            border-bottom: 2px solid #ddd;
            font-weight: bold;
            color: #f88922;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .panel-content {
            flex: 1;
            padding: 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .panel-content.albanian-editor {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .panel-content.albanian-editor textarea {
            display: none;
        }

        .cke_chrome {
            flex: 1;
            display: flex !important;
            flex-direction: column !important;
            height: 100% !important;
        }

        .cke_inner {
            flex: 1;
            display: flex !important;
            flex-direction: column !important;
            height: 100% !important;
        }

        .cke_contents {
            flex: 1 !important;
            height: auto !important;
            min-height: 0 !important;
        }

        .cke_top {
            flex-shrink: 0;
        }

        .arabic-viewer {
            width: 100%;
            height: 100%;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            overflow: hidden;
        }

        .arabic-viewer iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .no-files-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            text-align: center;
            padding: 40px;
        }

        .no-files-container i {
            font-size: 64px;
            color: #ddd;
            margin-bottom: 20px;
        }

        .save-indicator {
            position: fixed;
            top: 100px;
            right: 30px;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
        }

        .version-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .version-item {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }

        .version-item:hover {
            background: #f0f0f0;
        }

        .version-item.active {
            background: #fff3e0;
            border-left: 3px solid #f88922;
        }

        .upload-area {
            border: 2px dashed #ddd;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: white;
        }

        .upload-area:hover {
            border-color: #f88922;
            background: #fff3e0;
        }

        .upload-area.dragover {
            border-color: #f88922;
            background: #fff3e0;
        }

        .btn-orange {
            background: linear-gradient(135deg, #f88922 0%, #FD794F 100%);
            color: white;
            border: none;
        }

        .btn-orange:hover {
            opacity: 0.9;
            color: white;
        }

        .btn-outline-orange {
            color: #f88922;
            border-color: #f88922;
        }

        .btn-outline-orange:hover {
            background: #f88922;
            color: white;
        }

        .file-list-item {
            padding: 8px 12px;
            margin-bottom: 5px;
            background: #f9f9f9;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .file-list-item:hover {
            background: #fff3e0;
        }

        .file-list-item.active {
            background: #fff3e0;
            border-left: 3px solid #f88922;
        }

        /* Arabic font for CKEditor */
        .cke_editable {
            font-family: 'KFGQPC HAFS Uthmanic Script', sans-serif;
        }
    </style>
</head>

<body>
    <div class="save-indicator" id="saveIndicator">
        <i class="fas fa-check-circle"></i> Ruajtur automatikisht
    </div>

    <div class="workspace-container">
        <!-- Albanian Panel (LEFT) -->
        <div class="albanian-panel">
            <div class="panel-header">
                <span><i class="fas fa-edit"></i> Përkthimi në Shqip</span>
                <div>
                    <button class="btn btn-sm btn-orange me-2" id="manualSaveBtn" onclick="manualSave()">
                        <i class="fas fa-save"></i> Ruaj
                    </button>
                    <span class="me-2" style="font-size: 12px; font-weight: normal;">
                        Versioni: <span
                            id="currentVersion">{{ $versions->first()->version_number ?? 'Fillestare' }}</span>
                    </span>
                    <button class="btn btn-sm btn-outline-orange" data-bs-toggle="modal"
                        data-bs-target="#versionsModal">
                        <i class="fas fa-history"></i> ({{ $translation->versions()->count() }})
                    </button>
                </div>
            </div>

            <div class="panel-content albanian-editor">
                <textarea name="albanian_text" id="albanian_text">{{ $currentText }}</textarea>
            </div>
        </div>

        <!-- Arabic Panel (RIGHT) -->
        <div class="arabic-panel">
            <div class="panel-header">
                <span><i class="fas fa-file-alt"></i> Tekstet në Arabisht</span>
                <button class="btn btn-sm btn-orange" data-bs-toggle="modal" data-bs-target="#filesModal">
                    <i class="fas fa-folder-open"></i> Skedarët
                    @if ($translation->arabic_files && count($translation->arabic_files) > 0)
                        <span class="badge bg-light text-dark ms-1">{{ count($translation->arabic_files) }}</span>
                    @endif
                </button>
            </div>

            <div class="panel-content" style="padding: 0;">
                @if ($translation->arabic_files && count($translation->arabic_files) > 0)
                    <div class="arabic-viewer" style="height: 100%;">
                        <iframe src="/storage/{{ $translation->arabic_files[0] }}" id="arabic_file_frame"></iframe>
                    </div>
                @else
                    <div class="no-files-container">
                        <i class="fas fa-file-upload"></i>
                        <h5>Nuk ka skedarë në Arabisht</h5>
                        <p class="text-muted">Klikoni "Skedarët" për të ngarkuar</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Files Modal -->
    <div class="modal fade" id="filesModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-folder-open"></i> Menaxhimi i Skedarëve</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <button class="btn btn-orange" onclick="document.getElementById('addMoreFilesInput').click()">
                            <i class="fas fa-plus"></i> Ngarko Skedarë të Reja
                        </button>
                        <input type="file" id="addMoreFilesInput" multiple style="display: none;"
                            accept=".pdf,.doc,.docx">
                    </div>

                    <div id="uploadProgress" class="mb-3" style="display: none;">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                style="width: 0%"></div>
                        </div>
                        <p class="text-muted mt-2 small">Duke ngarkuar...</p>
                    </div>

                    <div id="filesList">
                        @if ($translation->arabic_files && count($translation->arabic_files) > 0)
                            @foreach ($translation->arabic_files as $index => $file)
                                <div class="file-list-item {{ $index == 0 ? 'active' : '' }}"
                                    data-file-index="{{ $index }}"
                                    onclick="changeArabicFile({{ $index }})">
                                    <span><i class="fas fa-file-pdf"></i> {{ basename($file) }}</span>
                                    <div>
                                        @if ($index == 0)
                                            <span class="badge bg-success me-2">Aktive</span>
                                        @endif
                                        <i class="fas fa-eye text-muted"></i>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-muted text-center">Nuk ka skedarë të ngarkuar. Klikoni "Ngarko Skedarë të
                                Reja" për të filluar.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Versions Modal -->
    <div class="modal fade" id="versionsModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-history"></i> Historiku i Versioneve</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    @if ($translation->versions()->count() > 8)
                        <div class="alert alert-info mb-3">
                            <small><i class="fas fa-info-circle"></i> Duke shfaqur 8 versionet e fundit nga
                                {{ $translation->versions()->count() }} total.</small>
                        </div>
                    @endif
                    <div class="version-list">
                        @forelse($versions as $version)
                            <div class="version-item" data-version-id="{{ $version->id }}"
                                data-version-number="{{ $version->version_number }}">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>Versioni #{{ $version->version_number }}</strong>
                                        <br>
                                        <small
                                            class="text-muted">{{ $version->created_at->format('d/m/Y H:i:s') }}</small>
                                    </div>
                                    <button class="btn btn-sm btn-orange load-version-btn">
                                        <i class="fas fa-download"></i> Ngarko
                                    </button>
                                </div>
                            </div>
                        @empty
                            <p class="text-muted text-center">Nuk ka versione të ruajtura ende.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let editor;
        let lastContent = '';
        const translationCode = '{{ $translation->code }}';
        const hasFiles = {{ $translation->arabic_files && count($translation->arabic_files) > 0 ? 'true' : 'false' }};

        // Helper function to get plain text length
        function getPlainTextLength(html) {
            return html.replace(/<[^>]*>/g, '').trim().length;
        }

        // Initialize CKEditor with custom config
        CKEDITOR.replace('albanian_text', {
            height: '100%',
            resize_enabled: false,
            removePlugins: 'resize',
            extraPlugins: 'font',
            fontSize_sizes: '8px/8px;9px/9px;10px/10px;11px/11px;12px/12px;14px/14px;16px/16px;18px/18px;20px/20px;22px/22px;24px/24px;26px/26px;28px/28px;36px/36px;48px/48px;72px/72px',
            fontSize_style: {
                element: 'span',
                styles: {
                    'font-size': '#(size)'
                },
                overrides: [{
                    element: 'font',
                    attributes: {
                        'size': null
                    }
                }]
            },
            toolbar: [{
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent']
                },
                {
                    name: 'insert',
                    items: ['Table', 'HorizontalRule']
                },
                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor']
                },
                {
                    name: 'tools',
                    items: ['Maximize']
                }
            ]
        });

        CKEDITOR.instances.albanian_text.on('instanceReady', function() {
            editor = CKEDITOR.instances.albanian_text;

            // Apply Arabic font to editor content
            var editable = editor.editable();
            editable.setStyle('font-family', '\'KFGQPC HAFS Uthmanic Script\', sans-serif');

            lastContent = editor.getData();
            let lastTextLength = getPlainTextLength(lastContent);
            let saveTimeout = null;
            let isSaving = false;
            let lastSaveTime = 0;

            // Listen for period key press (keyCode 190)
            // Use contentDom to ensure editor is fully ready (important when plugins are loaded)
            editor.on('contentDom', function() {
                console.log('contentDom event fired - attaching keydown listener');
                var editable = editor.editable();

                editable.on('keydown', function(evt) {
                    var domEvent = evt.data.$;
                    const keyCode = domEvent.keyCode || domEvent.which;
                    console.log('keydown event - keyCode:', keyCode);

                    // Check if period (.) was pressed
                    if (keyCode === 190) {
                        console.log('Period (.) key detected!');
                        // Clear any existing timeout
                        if (saveTimeout) {
                            clearTimeout(saveTimeout);
                        }

                        // Wait for the period to be inserted, then check and save
                        saveTimeout = setTimeout(function() {
                            console.log('Timeout fired - calling checkAndSave');
                            checkAndSave();
                        }, 200);
                    } else {
                        // Update tracking for other keys
                        setTimeout(function() {
                            const content = editor.getData();
                            lastContent = content;
                            lastTextLength = getPlainTextLength(content);
                        }, 50);
                    }
                });
            });

            // Fallback: Also listen on editor level in case contentDom doesn't fire
            editor.on('key', function(evt) {
                const keyCode = evt.data.keyCode;
                console.log('editor key event - keyCode:', keyCode);

                // Check if period (.) was pressed
                if (keyCode === 190) {
                    console.log('Period (.) key detected in editor key event!');
                    // Clear any existing timeout
                    if (saveTimeout) {
                        clearTimeout(saveTimeout);
                    }

                    // Wait for the period to be inserted, then check and save
                    saveTimeout = setTimeout(function() {
                        console.log('Timeout fired from editor key event - calling checkAndSave');
                        checkAndSave();
                    }, 200);
                }
            });

            // Make CKEditor fill the container
            function resizeEditor() {
                const editorContainer = $('.cke_chrome').first();
                const editorInner = $('.cke_inner').first();
                const editorContents = $('.cke_contents').first();

                if (editorContainer.length) {
                    const panelHeight = $('.albanian-panel').height();
                    const headerHeight = $('.albanian-panel .panel-header').outerHeight();
                    const availableHeight = panelHeight - headerHeight;

                    editorContainer.css({
                        'height': availableHeight + 'px',
                        'display': 'flex',
                        'flex-direction': 'column'
                    });

                    if (editorInner.length) {
                        editorInner.css({
                            'height': '100%',
                            'display': 'flex',
                            'flex-direction': 'column'
                        });
                    }

                    if (editorContents.length) {
                        editorContents.css({
                            'flex': '1',
                            'min-height': '0'
                        });
                    }
                }
            }

            // Initial resize
            setTimeout(resizeEditor, 200);

            // Resize on window resize
            $(window).on('resize', function() {
                resizeEditor();
            });

            // Function to check and save if period was added
            function checkAndSave() {
                console.log('checkAndSave called');
                console.log('isSaving:', isSaving);

                if (isSaving) {
                    console.log('Already saving, skipping...');
                    return; // Prevent duplicate saves
                }

                const content = editor.getData();
                const textContent = content.replace(/<[^>]*>/g, '').trim();
                const currentTextLength = textContent.length;

                console.log('Current text length:', currentTextLength);
                console.log('Last text length:', lastTextLength);
                console.log('Text ends with period:', textContent.slice(-1) === '.');

                // Check if text length increased and ends with period
                if (currentTextLength > lastTextLength && textContent.slice(-1) === '.') {
                    console.log('Conditions met - text increased and ends with period');
                    const now = Date.now();
                    // Prevent saves within 500ms of each other
                    if (now - lastSaveTime > 500) {
                        console.log('Time check passed, calling autoSave');
                        isSaving = true;
                        lastSaveTime = now;

                        autoSave(content);

                        lastTextLength = currentTextLength;
                        lastContent = content;

                        // Reset saving flag after a delay
                        setTimeout(function() {
                            isSaving = false;
                            console.log('isSaving reset to false');
                        }, 600);
                    } else {
                        console.log('Time check failed - too soon since last save');
                    }
                } else {
                    console.log('Conditions not met - updating tracking only');
                    lastTextLength = currentTextLength;
                    lastContent = content;
                }
            }

        });

        // Auto-save function
        function autoSave(content) {
            console.log('autoSave function called with content length:', content.length);
            $.ajax({
                url: `/perkthim/workspace/${translationCode}/auto-save`,
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    albanian_text: content
                },
                success: function(response) {
                    console.log('Auto-save success:', response);
                    if (response.success) {
                        showSaveIndicator();
                        // Update to show current saved version
                        $('#currentVersion').text(response.version_number);

                        // Add to version list in modal
                        prependVersionToModal(response.version_number, response.created_at, response
                            .version_id);
                    }
                },
                error: function(xhr) {
                    console.error('Auto-save failed:', xhr);
                }
            });
        }

        // Manual save function
        function manualSave() {
            if (!editor) {
                alert('Editori nuk është gati ende. Ju lutem prisni pak.');
                return;
            }

            const content = editor.getData();
            const btn = $('#manualSaveBtn');

            // Disable button and show loading state
            btn.prop('disabled', true);
            btn.html('<i class="fas fa-spinner fa-spin"></i> Duke ruajtur...');

            $.ajax({
                url: `/perkthim/workspace/${translationCode}/auto-save`,
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    albanian_text: content
                },
                success: function(response) {
                    if (response.success) {
                        showSaveIndicator();
                        // Update to show current saved version
                        $('#currentVersion').text(response.version_number);

                        // Add to version list in modal
                        prependVersionToModal(response.version_number, response.created_at, response
                            .version_id);

                        // Update last content tracking
                        lastContent = content;
                        lastTextLength = getPlainTextLength(content);
                    }

                    // Re-enable button
                    btn.prop('disabled', false);
                    btn.html('<i class="fas fa-save"></i> Ruaj');
                },
                error: function(xhr) {
                    console.error('Manual save failed:', xhr);
                    alert('Gabim gjatë ruajtjes. Ju lutem provoni përsëri.');

                    // Re-enable button
                    btn.prop('disabled', false);
                    btn.html('<i class="fas fa-save"></i> Ruaj');
                }
            });
        }

        // Show save indicator
        function showSaveIndicator() {
            $('#saveIndicator').fadeIn(300).delay(2000).fadeOut(300);
        }

        // Prepend new version to modal
        function prependVersionToModal(versionNumber, createdAt, versionId) {
            // Check if version already exists
            if ($('.version-item[data-version-number="' + versionNumber + '"]').length > 0) {
                return;
            }

            // Note: New versions won't have an ID until page reload, so we skip the load button for them
            const versionHtml = `
                <div class="version-item" data-version-number="${versionNumber}" ${versionId ? 'data-version-id="' + versionId + '"' : ''}>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>Versioni #${versionNumber}</strong>
                            <br>
                            <small class="text-muted">${createdAt}</small>
                        </div>
                        ${versionId ? '<button class="btn btn-sm btn-orange load-version-btn"><i class="fas fa-download"></i> Ngarko</button>' : '<span class="badge bg-success">Aktuale</span>'}
                    </div>
                </div>
            `;

            if ($('.version-list').find('.text-muted:contains("Nuk ka")').length > 0) {
                $('.version-list').html(versionHtml);
            } else {
                $('.version-list').prepend(versionHtml);
            }
        }

        // Load version
        $(document).on('click', '.load-version-btn', function() {
            const versionItem = $(this).closest('.version-item');
            const versionId = versionItem.data('version-id');
            const versionNumber = versionItem.data('version-number');

            $.ajax({
                url: `/perkthim/workspace/${translationCode}/version/${versionId}`,
                method: 'GET',
                success: function(response) {
                    if (response.success) {
                        // Simply replace the text in CKEditor
                        editor.setData(response.albanian_text);

                        // Update UI to show which version is being viewed
                        $('#currentVersion').text('Shikon: v' + response.version_number);
                        $('#versionsModal').modal('hide');

                        // Update active state in modal
                        $('.version-item').removeClass('active');
                        versionItem.addClass('active');
                    }
                },
                error: function(xhr) {
                    alert('Gabim gjatë ngarkimit të versionit');
                }
            });
        });

        // Change Arabic file
        function changeArabicFile(fileIndex) {
            $('.file-list-item').removeClass('active');
            $('.file-list-item[data-file-index="' + fileIndex + '"]').addClass('active');

            // Update active badge
            $('.file-list-item').find('.badge').remove();
            $('.file-list-item[data-file-index="' + fileIndex + '"]').find('div').prepend(
                '<span class="badge bg-success me-2">Aktive</span>');

            $.ajax({
                url: `/perkthim/workspace/${translationCode}/change-file`,
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    file_index: fileIndex
                },
                success: function(response) {
                    if (response.success) {
                        $('#arabic_file_frame').attr('src', response.file_path);
                        $('#filesModal').modal('hide');
                    }
                },
                error: function(xhr) {
                    console.error('Failed to change file:', xhr);
                }
            });
        }

        // Handle file upload (for adding more files or initial upload)
        function handleFileUpload(files) {
            if (files.length === 0) return;

            const formData = new FormData();
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

            for (let i = 0; i < files.length; i++) {
                formData.append('arabic_files[]', files[i]);
            }

            $('#uploadProgress').show();

            $.ajax({
                url: `/perkthim/workspace/${translationCode}/upload-files`,
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                xhr: function() {
                    const xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            const percentComplete = (evt.loaded / evt.total) * 100;
                            $('.progress-bar').css('width', percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                },
                success: function(response) {
                    if (response.success) {
                        $('#uploadProgress').hide();
                        $('#filesModal').modal('hide');
                        location.reload(); // Reload to show the uploaded files
                    }
                },
                error: function(xhr) {
                    alert('Gabim gjatë ngarkimit të skedarëve');
                    $('#uploadProgress').hide();
                }
            });
        }

        // File input change handlers
        $('#addMoreFilesInput').on('change', function() {
            handleFileUpload(this.files);
        });
    </script>
</body>

</html>
