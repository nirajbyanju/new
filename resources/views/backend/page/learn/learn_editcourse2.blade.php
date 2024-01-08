<div class="learnings-add-section">
    <div class="learnings-add-sectioning">
        <div class="learns-posting-container" >
            <div class="learns-add-title">
                <h5>Add new lesson</h5>
                <div class="close-buttons">
                    <a href=""><i class="far fa-times"></i></a>
                </div>
            </div>
            
                <div class="learningss-input-cat main-menu-course">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Preparation:
                                <p> Plan, Create, Engage, Organize, and Optimize.</p>
                            </span>
                        </div>
                            <div class="select-lesson-notice">
                                <div class="header-select-lesson-notice">
                                    <label for="">Select lesson type</label>
                                </div>
                                <div class="custom-radio-select">
                                    <input type="radio" value="youtube" name="lesson_type" id="youtube">
                                    <label for="youtube">Video url</label>
                                </div>
                            
                                <div class="custom-radio-select">
                                    <input type="radio" value="videofile" name="lesson_type" id="videofile">
                                    <label for="videofile">Video file</label>
                                 </div>
                                <div class="custom-radio-select">
                                    <input type="radio" value="text" name="lesson_type" id="text">
                                    <label for="text">TEXT</label>
                                </div>
                                <div class="custom-radio-select">
                                    <input type="radio" value="document" name="lesson_type" id="imagefile">
                                    <label for="imagefile">Document File</label>
                                </div>
                                <div class="custom-radio-select">
                                    <input type="radio" value="iframe" name="lesson_type" id="iframe">
                                    <label for="iframe">Iframe embed</label>
                                </div>
                            </div>
                        <div class="learningss-addbutton">
                            <a type="button" class="nextbutton">Next</a>
                        </div>
                    </div>
                    
                </div>


                <div class="learningss-input-cat youtube">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Lesson type : 
                                <p>Video url <a href="" class="back-main">Change</a></p>
                            </span>
                        </div>
                        <form action="/adding_learn_lesson" method="POST">
                            @csrf
                            <div class="main-contain-courseadd">
                                <input type="text" hidden name="course_id" value="{{$course->id}}">
                                <input type="text" hidden name="lesson_type" value="video-url">
                                <div class="inner-label">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="section">Section</label>
                                    
                                    <select class="form-control" name="section_id" id="">
                                        @foreach ($section as $section1)
                                            <option value="{{$section1->id}}">{{$section1->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="inner-label">
                                    <label for="text">video url</label>
                                    <input id="text" value="" name="video_url" placeholder="This video will be shown on web application" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="duration">Duration</label>
                                    <input id="duration" name="duration" value="00:00:00" placeholder=" 00:00:00" type="text" pattern="[0-9:]*" title="Please enter numbers and colons only" oninput="validateTimeFormat(this)">
                                </div>
                                <div class="inner-label">
                                    <label for="summary">summary</label>
                                    <textarea name="summary" id="editor3" class="form-control"></textarea>
                                </div>
                                <div class="outer-secondary">
                                    <label for="">Do you want to keep it free as a preview lesson?</label><br>
                                    <input type="checkbox" value="1" name="is_free" id="free_lesson">
                                    <label for="free_lesson">Mark as free lesson</label>
                                </div>
                                <div class="submiting-button">
                                    <button type="submit"> Add Lesson</button>
                                </div>

                            </div>
                        </form>
                        <div class="learningss-addbutton">
                            
                        </div>
                    </div>
                </div>
                
                <div class="learningss-input-cat videofile">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Lesson type : 
                                <p> Video file. <a href="" class="back-main">Change</a></p>
                            </span>
                        </div>
                        <form action="/adding_learn_lesson" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="main-contain-courseadd">
                                <input type="text" hidden name="course_id" value="{{$course->id}}">
                                <input type="text" hidden name="lesson_type" value="video_file">
                                <div class="inner-label">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section_id" id="">
                                        @foreach ($section as $section3)
                                            <option value="{{$section3->id}}">{{$section3->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="inner-label">
                                    <label for="text">Upload system video file</label>
                                    <input id="text"  class="uploadfilecousre" value="" name="video_file" placeholder="This video will be shown on web application" type="file">
                                </div>
                                <div class="inner-label">
                                    <label for="duration">Duration</label>
                                    <input type="text" class="form-control" name="duration"  value="00:00:00" >
                                </div>
                                <div class="inner-label">
                                    <label for="summary">summary</label>
                                    <textarea name="summary" id="editor5" class="form-control"></textarea>
                                </div>
                                <div class="outer-secondary">
                                    <label for="">Do you want to keep it free as a preview lesson?</label><br>
                                    <input type="checkbox" value="1" name="is_free" id="free_lesson">
                                    <label for="free_lesson">Mark as free lesson</label>
                                </div>
                                <div class="submiting-button">
                                    <button type="submit"> Add Lesson</button>
                                </div>

                            </div>
                        </form>
                        <div class="learningss-addbutton">
                            
                        </div>
                    </div>
                </div>
                <div class="learningss-input-cat text">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Lesson type : 
                                <p> Text. <a href="" class="back-main">Change</a></p>
                            </span>
                        </div>
                        <form action="/adding_learn_lesson" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="main-contain-courseadd">
                                <input type="text" hidden name="course_id" value="{{$course->id}}">
                                <input type="text" hidden name="lesson_type" value="text">
                                <div class="inner-label">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section_id" id="">
                                        @foreach ($section as $section3)
                                            <option value="{{$section3->id}}">{{$section3->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="inner-label">
                                    <label for="summary">summary</label>
                                    <textarea name="summary" id="editor6" class="form-control"></textarea>
                                </div>
                                <div class="outer-secondary">
                                    <label for="">Do you want to keep it free as a preview lesson?</label><br>
                                    <input type="checkbox" value="1" name="is_free" id="free_lesson">
                                    <label for="free_lesson">Mark as free lesson</label>
                                </div>
                                <div class="submiting-button">
                                    <button type="submit"> Add Lesson</button>
                                </div>

                            </div>
                        </form>
                        <div class="learningss-addbutton">
                            
                        </div>
                    </div>
                </div>
                
            
                <div class="learningss-input-cat document">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Lesson type : 
                                <p> Document. <a href="" class="back-main">Change</a></p>
                            </span>
                        </div>
                        <form action="/adding_learn_lesson" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="main-contain-courseadd">
                                <input type="text" hidden name="course_id" value="{{$course->id}}">
                                <input type="text" hidden name="lesson_type" value="document_type">
                                <div class="inner-label">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section_id" id="">
                                        @foreach ($section as $section3)
                                            <option value="{{$section3->id}}">{{$section3->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="inner-label">
                                    <label for="document_type">Document type</label>
                                    <select name="document_type" class="form-control" id="document_type">
                                        <option >Select type of document</option>
                                        <option value="text_file">Text file</option>
                                        <option value="pdf_file">Pdf file</option>
                                    </select>
                                </div>
                                <div class="inner-label">
                                    <label for="text">Upload Document type</label>
                                    <input id="text" class="uploadfilecousre" name="document_upload" value="" placeholder="Attachment" type="file">
                                </div>
                                
                                <div class="inner-label">
                                    <label for="editor7">summary</label>
                                    <textarea name="summary" id="editor7" class="form-control"></textarea>
                                </div>
                                <div class="outer-secondary">
                                    <label for="">Do you want to keep it free as a preview lesson?</label><br>
                                    <input type="checkbox" value="1" name="is_free" id="free_lesson">
                                    <label for="free_lesson">Mark as free lesson</label>
                                </div>
                                <div class="submiting-button">
                                    <button type="submit"> Add Lesson</button>
                                </div>

                            </div>
                        </form>
                        <div class="learningss-addbutton">
                            
                        </div>
                    </div>
                </div>
                <div class="learningss-input-cat iframe">
                    <div class="learningss-name">
                        <div class="add-lesson-notice">
                            <span>Lesson type : 
                                <p> Document. <a href="" class="back-main">Change</a></p>
                            </span>
                        </div>
                        <form action="/adding_learn_lesson" method="POST">
                            @csrf
                            <div class="main-contain-courseadd">
                                <input type="text" hidden name="course_id" value="{{$course->id}}">
                                <input type="text" hidden name="lesson_type" value="iframe_embed">
                                <div class="inner-label">
                                    <label for="title">Title</label>
                                    <input id="title" name="title" type="text">
                                </div>
                                <div class="inner-label">
                                    <label for="section">Section</label>
                                    <select class="form-control" name="section_id" id="">
                                        @foreach ($section as $section3)
                                            <option value="{{$section3->id}}">{{$section3->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="inner-label">
                                    <label for="text">Iframe source (Provide the source only)</label>
                                    <input id="text"  value="" name="iframe_upload" placeholder="Provide the source only" type="text">
                                </div>
                                
                                <div class="inner-label">
                                    <label for="editor8">summary</label>
                                    <textarea name="summary" id="editor8" class="form-control"></textarea>
                                </div>
                                <div class="outer-secondary">
                                    <label for="">Do you want to keep it free as a preview lesson?</label><br>
                                    <input type="checkbox" value="1" name="is_free" id="free_lesson">
                                    <label for="free_lesson">Mark as free lesson</label>
                                </div>
                                <div class="submiting-button">
                                    <button type="submit"> Add Lesson</button>
                                </div>

                            </div>
                        </form>
                        <div class="learningss-addbutton">
                            
                        </div>
                    </div>
    </div>            
</div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
<script src="https://cdn.ckbox.io/CKBox/1.2.1/ckbox.js"></script>
            <script>
            ['editor2', 'editor3', 'editor4', 'editor5', 'editor6', 'editor7', 'editor8', 'editor9'].forEach(function(editorId) {
    CKEDITOR.ClassicEditor.create(document.getElementById(editorId), {
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
                  ]});
              });
          </script>
          
    
          



          