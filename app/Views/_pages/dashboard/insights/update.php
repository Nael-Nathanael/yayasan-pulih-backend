<?= $this->extend("_layouts/base_layout"); ?>

<?= $this->section("head"); ?>
<style>
    .material-form-control {
        border-right: 0;
        border-radius: 0;
        border-left: 0;
        border-top: 0;
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-bottom: 0 !important;
    }

    .form-floating > label {
        padding-left: 0;
    }

    .material-form-control:focus {
        outline: none;
        border-color: black;
        box-shadow: none;
    }

    .ck-toolbar {
        border: none !important;
        background-color: transparent !important;
        padding: 0 !important;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
<div class="container-fluid">
    <section>
        <form action="<?= route_to("object.insights.update", $article->slug) ?>" method="post" id="articleForm"
              enctype="multipart/form-data">
            <input type="hidden" name="content" id="content" value="<?= $article->content ?>">

            <div class="row" style="min-height: 600px">
                <div class="col-lg-9 border-end">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control material-form-control" id="title" name="title"
                               placeholder="title" value="<?= $article->title ?>" required>
                        <label for="title">Title</label>
                    </div>
                    <div class="row mb-3">
                        <div class="document-editor__toolbar border-0"></div>
                    </div>
                    <div class="container bg-light py-4">
                        <div class="editor border shadow-none bg-white" style="min-height: 700px">
                            <?= $article->content ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex align-items-end flex-column">
                    <div class="my-2">
                        <button type="submit" class="btn btn-outline-primary">
                            Publish
                        </button>
                    </div>
                    <hr/>
                    <div class="w-100">
                        <div class="card shadow-sm mb-2">
                            <div class="card-header">
                                Post Settings
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="topic">Topic</label>
                                    <input type="text" name="topic" id="topic" class="form-control"
                                           placeholder="Article Topic" value="<?= $article->topic ?>" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="tag">Industry</label>
                                    <input type="text" name="tag" id="tag" class="form-control" value="<?= $article->tag ?>" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="service">Service</label>
                                    <input type="text" name="service" id="service" class="form-control" value="<?= $article->service ?>" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="coverImage">Cover Image</label>
                                    <input type="file" name="coverImage" id="coverImage" class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="short_description">Short Description</label>
                                    <textarea required id="short_description" name="short_description"
                                              class="form-control" rows="5"><?= $article->short_description ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm mb-2">
                            <div class="card-header">
                                Advance Settings
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="keywords">Keywords</label>
                                    <input type="text" name="keywords" id="keywords" class="form-control"
                                           placeholder="Keywords" value="<?= $article->keywords ?>" required>
                                </div>


                                <div class="form-group mb-3">
                                    <label for="meta_title">Meta Title</label>
                                    <input type="text" name="meta_title" id="meta_title" class="form-control"
                                           placeholder="Meta Title" value="<?= $article->meta_title ?>" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="meta_description">Meta Description</label>
                                    <textarea required id="meta_description" name="meta_description"
                                              class="form-control" rows="5"><?= $article->meta_description ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?= $this->endSection(); ?>

<?= $this->section("javascript") ?>

<script src="<?= base_url("/js/ckeditor/ckeditor.js") ?>"></script>
<script>
    class MyUploadAdapter {
        constructor(loader) {
            // The file loader instance to use during the upload.
            this.loader = loader;
        }

        // Starts the upload process.
        upload() {
            return this.loader.file
                .then(file => new Promise((resolve, reject) => {
                    this._initRequest();
                    this._initListeners(resolve, reject, file);
                    this._sendRequest(file);
                }));
        }

        // Aborts the upload process.
        abort() {
            if (this.xhr) {
                this.xhr.abort();
            }
        }

        // Initializes the XMLHttpRequest object using the URL passed to the constructor.
        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();

            // Note that your request may look different. It is up to you and your editor
            // integration to choose the right communication channel. This example uses
            // a POST request with JSON as a data structure but your configuration
            // could be different.
            xhr.open('POST', '<?= route_to("object.lines.dumpUpload")?>', true);
            xhr.responseType = 'json';
        }

        // Initializes XMLHttpRequest listeners.
        _initListeners(resolve, reject, file) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = `Couldn't upload file: ${file.name}.`;

            xhr.addEventListener('error', () => reject(genericErrorText));
            xhr.addEventListener('abort', () => reject());
            xhr.addEventListener('load', () => {
                const response = xhr.response;

                // This example assumes the XHR server's "response" object will come with
                // an "error" which has its own "message" that can be passed to reject()
                // in the upload promise.
                //
                // Your integration may handle upload errors in a different way so make sure
                // it is done properly. The reject() function must be called when the upload fails.
                if (!response || response.error) {
                    return reject(response && response.error ? response.error.message : genericErrorText);
                }

                // If the upload is successful, resolve the upload promise with an object containing
                // at least the "default" URL, pointing to the image on the server.
                // This URL will be used to display the image in the content. Learn more in the
                // UploadAdapter#upload documentation.
                resolve({
                    default: response.url
                });
            });

            // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
            // properties which are used e.g. to display the upload progress bar in the editor
            // user interface.
            if (xhr.upload) {
                xhr.upload.addEventListener('progress', evt => {
                    if (evt.lengthComputable) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                });
            }
        }

        // Prepares the data and sends the request.
        _sendRequest(file) {
            // Prepare the form data.
            const data = new FormData();

            data.append('upload', file);

            // Important note: This is the right place to implement security mechanisms
            // like authentication and CSRF protection. For instance, you can use
            // XMLHttpRequest.setRequestHeader() to set the request headers containing
            // the CSRF token generated earlier by your application.

            // Send the request.
            this.xhr.send(data);
        }
    }

    function MyCustomUploadAdapterPlugin(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
            return new MyUploadAdapter(loader);
        };
    }

    DecoupledDocumentEditor
        .create(document.querySelector('.editor'), {
            extraPlugins: [MyCustomUploadAdapterPlugin],
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'fontSize',
                    'fontFamily',
                    '|',
                    'fontColor',
                    'fontBackgroundColor',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    '|',
                    'alignment',
                    '|',
                    'numberedList',
                    'bulletedList',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'todoList',
                    'link',
                    'blockQuote',
                    'imageUpload',
                    'insertTable',
                    'mediaEmbed',
                    '|',
                    'undo',
                    'redo',
                    'imageInsert'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:inline',
                    'imageStyle:block',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            window.editor = editor;

            editor.model.document.on('change', () => {
                document.getElementById("content").value = editor.getData();
            });

            // Set a custom container for the toolbar.
            document.querySelector('.document-editor__toolbar').appendChild(editor.ui.view.toolbar.element);
            document.querySelector('.ck-toolbar').classList.add('ck-reset_all');
        })
</script>
<?= $this->endSection(); ?>
