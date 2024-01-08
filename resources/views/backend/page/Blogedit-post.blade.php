@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
    <link rel="stylesheet" href="{{asset('opcn/backend/css/blog.css')}}">
    <style>

    </style>
@endpush
@push('script')
<script type="text/javascript" src="{{asset('opcn/js/backend/updating.js')}}"></script>
@endpush
@push('maintitle')
    <div class="page-header">
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title"> New Post Blogs</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">New Post Blogs</li>
        </ol>
    </div>
@endpush
    
      <div class="auto-container"> 
        <div class="form-rows">
            <div class="header_blogs">
                <div class="header_main_text">
                    <p>New Post</p>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="/blogsupdating/{{$blogs->post_id}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <input name="publish_date" type="hidden" value="{{ now()->format('Y-m-d') }}">
                        <div class="first-row ">
                            <div class="title-row col-md-6 mb-3">
                                <label for="">Title</label>
                                <input class="inputform" name ="title" value="{{$blogs->title}}" type="text">
                            </div>
                            <div class="entry-row col-md-6 mb-3">
                                <label for="">Entry</label>
                                <input class="inputform" value="{{$blogs->user_id}}" name ="user_id" type="text">
                            </div>
                        </div>
                        <div class="second-row">
                            <div class="author col-md-6 mb-3">
                                <label for="">Author</label>
                                <input class="inputform" name="author" value="{{ $authUser->username }}" type="text">
                            </div>
                            <div class="category col-md-6 mb-3">
                                <label for="">Category</label>
                                <input class="inputform" value="{{$blogs->category}}" name ="category" type="text">
                            </div>
                        </div>
                        <div class="third-row">
                            <div class="status col-md-6 mb-3">
                                <label for="">Status</label>
                                <select name="status" class="inputform" id="">
                                    <option value="pending">Pending</option>
                                    <option value="publish">Publish</option>
                                </select>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-md-6 mb-3">
                                <label for="">Thumbnail</label>
                                <div id="upload-photo">
                                    <input type="file" id="input-file" name="thumbnail" accept="image/*">
                                    <div class="drop-here" id="drop-here">
                                        <figure id="FIGURE_1">
                                            <img src="{{asset('opcn/images/icons/upload.png')}}" alt="" id="IMG_2" /> <a href="{{asset('opcn/images/icons/upload.png')}}" id="A_3"><i id="I_4"></i></a>
                                        </figure>
                                        <h3 class="H3_7" >
                                            Browse photo or drop here
                                        </h3>
                                        <p class="P_8">
                                            A photo larger than 400 pixels work best. Max photo size 5 MB.
                                        </p>
                                    </div>
                                    <img id="preview-photo" class="upload-logo" src="{{ asset('opcn/uploads/blogs/thumbnail/' .$blogs->thumbnail) }}">
                                    <button id="delete-photo-button" type="button" class="delete-photo-button"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="fourth-row">
                            <label for="">Content</label>
                            <textarea value="{{$blogs->content}}" id="editor2" name="content">{{$blogs->content}}</textarea> 
                        </div>
                        <div class="fifth-row media-selects col-md-6 mb-3">
                            <label  for="mediaSelect">Media</label>
                            <select name="mediaSelect" class="inputform" id="mediaSelect">
                                <option value="standard">Standard</option>
                                <option value="video">Video</option>
                            </select>
                            <div class="standard-upload" id="standardUpload">
                                <label class="form-label">Image:</label>
	    					    <input type="file" name="media[]" class="form-control @error('image.*') is-invalid @enderror" multiple>

                                @error('image.*')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="video-standard" style=" display: none;"id="videoStandard">
                                <p>dfdf</p>
                            </div>
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get references to the select and div elements
            const mediaSelect = document.getElementById("mediaSelect");
            const standardUpload = document.getElementById("standardUpload");
            const videoStandard = document.getElementById("videoStandard");

            // Add an event listener to the select element
            mediaSelect.addEventListener("change", function () {
                // Check the selected option's value
                const selectedValue = mediaSelect.value;

                // Disable both divs by default
                standardUpload.style.display = "none";
                videoStandard.style.display = "none";

                // Enable the selected div based on the option
                if (selectedValue === "standard") {
                    standardUpload.style.display = "block";
                } else if (selectedValue === "video") {
                    videoStandard.style.display = "block";
                }
            });

    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
    <script src="https://cdn.ckbox.io/CKBox/1.2.1/ckbox.js"></script>
                <script>
                  // This sample still does not showcase all CKEditor 5 features (!)
                  // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                  CKEDITOR.ClassicEditor.create(document.getElementById("editor2"), {
                      // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                      toolbar: {
                          items: [
                              'exportPDF','exportWord', '|',
                              'findAndReplace', 'selectAll', '|',
                              'heading', '|',
                              'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                              'bulletedList', 'numberedList', 'todoList', '|',
                              'outdent', 'indent', '|',
                              'undo', 'redo',
                              '-',
                              'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                              'alignment', '|',
                              'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                              'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                              'textPartLanguage', '|',
                              'sourceEditing'
                          ],
                          shouldNotGroupWhenFull: true
                      },
                      // Changing the language of the interface requires loading the language file using the <script> tag.
                      // language: 'es',
                      list: {
                          properties: {
                              styles: true,
                              startIndex: true,
                              reversed: true
                          }
                      },
                      // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                      heading: {
                          options: [
                              { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                              { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                              { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                              { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                              { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                              { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                              { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                          ]
                      },
                      // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                      placeholder: 'Welcome to CKEditor 5!',
                      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                      fontFamily: {
                          options: [
                              'default',
                              'Arial, Helvetica, sans-serif',
                              'Courier New, Courier, monospace',
                              'Georgia, serif',
                              'Lucida Sans Unicode, Lucida Grande, sans-serif',
                              'Tahoma, Geneva, sans-serif',
                              'Times New Roman, Times, serif',
                              'Trebuchet MS, Helvetica, sans-serif',
                              'Verdana, Geneva, sans-serif'
                          ],
                          supportAllValues: true
                      },
                      // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                      fontSize: {
                          options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                          supportAllValues: true
                      },
                      // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                      // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                      htmlSupport: {
                          allow: [
                              {
                                  name: /.*/,
                                  attributes: true,
                                  classes: true,
                                  styles: true
                              }
                          ]
                      },
                      // Be careful with enabling previews
                      // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                      htmlEmbed: {
                          showPreviews: true
                      },
                      // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                      link: {
                          decorators: {
                              addTargetToExternalLinks: true,
                              defaultProtocol: 'https://',
                              toggleDownloadable: {
                                  mode: 'manual',
                                  label: 'Downloadable',
                                  attributes: {
                                      download: 'file'
                                  }
                              }
                          }
                      },
                      // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                      mention: {
                          feeds: [
                              {
                                  marker: '@',
                                  feed: [
                                      '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                      '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                      '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                      '@sugar', '@sweet', '@topping', '@wafer'
                                  ],
                                  minimumCharacters: 1
                              }
                          ]
                      },ckfinder: {
                      uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                      },
                      // The "super-build" contains more premium features that require additional configuration, disable them below.
                      // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                      removePlugins: [
                          // These two are commercial, but you can try them out without registering to a trial.
                          // 'ExportPdf',
                          // 'ExportWord',
                          'CKBox',
                          'CKFinder',
                          'EasyImage',
                          // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                          // Storing images as Base64 is usually a very bad idea.
                          // Replace it on production website with other solutions:
                          // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                          // 'Base64UploadAdapter',
                          'RealTimeCollaborativeComments',
                          'RealTimeCollaborativeTrackChanges',
                          'RealTimeCollaborativeRevisionHistory',
                          'PresenceList',
                          'Comments',
                          'TrackChanges',
                          'TrackChangesData',
                          'RevisionHistory',
                          'Pagination',
                          'WProofreader',
                          // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                          // from a local file system (file://) - load this site via HTTP server if you enable MathType
                          'MathType'
                      ]
                  });
              </script>   
   
@endsection