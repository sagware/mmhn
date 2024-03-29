<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Submit Innovation Story | Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
		
	<script src="https://cdn.tiny.cloud/1/tja9n4a99gszjfhet7x3lm2p9drj9zzd9ucky3l3e61a8s81/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	

	<!-- ================== END BASE CSS STYLE ================== -->
    <style>
	.overlay{
	
	background: url('/assets/plain.png');
	height:300px;
	width: 300px;
	opacity: 1;
	}
	.icon{
	font-size:3em;
	color: black;
	}
	
	
	</style>
	<!-- overlay 2-->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	
	<!-- ================== END BASE JS ================== -->
	@include("admin.analytics")
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- SummerNote Javascript Library -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
    <script>
        $(document).ready(function () {
            /** Initialize SummerNote Javscript For Textarea */
            $('#message').summernote({
               placeholder: 'Enter the post body',
                height: '300px',
				styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'H2', 'H3', 'H4', 'Heading5', 'Heading6'
	],
  
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
				  ['insert', ['link', 'picture']],
				  ['view', ['codeview', 'help']],
				  ['somegroup', ['style.H2', 'style.H3','style.Heading4','style.Heading5','style.Heading6' ]]
                ]
           
            });
        });
    </script>
	
	
	<script src="https://cdn.tiny.cloud/1/tja9n4a99gszjfhet7x3lm2p9drj9zzd9ucky3l3e61a8s81/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
      selector: 'textarea', 
	  
	   // change this value according to your HTML
	 plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
	paste_data_images: true,
	  a_plugin_option: true,
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
	  a_configuration_option: 400,
  
  menu: {
    file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | file image media| insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
    help: { title: 'Help', items: 'help' }
  }
      });
    </script>
	
	
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		
		<script src="/assets/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="/assets/jquery.tagsinput-revisited.css" />
		
		<style>
			* {
				box-sizing: border-box;
			}
		
			html {
				height: 100%;
				margin: 0;
			}
			
			body {
				min-height: 100%;
				font-family: sans-serif;
				padding: 20px;
				margin: 0;
			}
			
			label {
				display: block;
				padding: 20px 0 5px 0;
			}
		</style>
	
</head>
<body style="padding:0px !important; min-height: 100%;
    font-family: sans-serif;
    margin: 0;">
@include("admin.analytics")
@if(Session::has('ms1'))
			<script type="text/javascript">
			alert("Form Submitted Successfully, admin will check this before posting onto site");
			</script>
			@endif
	<!-- begin #page-loader -->
	
            @include("admin.header")
			
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>		

	
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			 <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
			<div class="row">
						<div style="padding:1.5em;">
						<h1>Submit Innovation Story</h1> <br/>
						 We are keen to share success stories of collaboration, met challenges, and new innovations from within the Network. Please complete the following fields to submit a News Story for our website, which will be reviewed by the Materials and Manufacturing in Healthcare Innovation Network team and subsequently publicly visible.
						</div></div>
                        <div class="panel-body panel-form">
                            <form  action="/add/public_stories" enctype="multipart/form-data" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="title">Post Title <span class="text-danger">*</span> :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" id="title" type="text"  name="title" value="{{ old('title') }}"  data-parsley-required="true" required/>
										<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="cat">Post Category <span class="text-danger">*</span></label>
									<div class="col-md-6 col-sm-6">
										<select  class="form-control" id="cat"  value="{{ old('category') }}"  name="category" >
											<option value="news">News</option>
											<option value="event">Events</option>
											<option value="grant">Grants</option>
											
										</select>
										
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="cover">Cover Picture</label> 
									<div class="col-md-6 col-sm-6">
										<input type="file" id="cover" class="form-control" value="{{ old('pic') }}" name="pic"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="sum">Post in Summary (text only and max. number of characters: 500) <span class="text-danger">*</span></label> 
									<div class="col-md-6 col-sm-6">
										<input name="summary" class="textarea form-control" maxlength="500" id="sum" placeholder="Enter text ..." rows="12" value="{{ old('summary') }}">
									</div>
								</div>
								
								
								
								
															
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="image-tools">Post in Detail <span class="text-danger">*</span> <p></p>
<p align=left> To add images from your personal device, you can add by copying (Ctrl+C) and pasting (Ctrl+V) into the textbox. After pasting this you can click on the image and then the three dots to add alt text to this image. This text is a short description of the image which is presented to screen-reader users (such as people with visual disabilities) enabling them to understand this image.  </p>
<p align=left> To add videos, this must be from a web source (such as YouTube). You can embed this by clicking "Insert" and then "Media" on the navigation ribbon above the textbox. This will open a pop-up. Click on the ‘Embed’ tab in this popup. You can then insert the embed code into this, which you can generate using the service on which the media is hosted (eg: Youtube). Many video providers allow you to create private videos so that your video will not be accessible. </p> 
<p align=left>To enhance your post further, feel free to explore other features provided in the navigation ribbon of the textbox. </p> </label> 


									<div class="col-md-6 col-sm-6">
										  
<textarea id="image-tools" name="message" required>
 
 {{ old('message') }}
</textarea>



                   
									</div>
								</div>
								
								
								
								
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" >&nbsp;&nbsp&nbsp&nbsp</label>
									<div class="col-md-6 col-sm-6">
										 <label for="tm"> <input type="checkbox" name="tm"  id="tm" required /> I confirm that I have not added any confidential information as per our privacy notice.<span class="text-danger">*</span></label>
										
									</div>
								</div>
							
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="submit"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" id="submit" class="btn btn-primary">Submit Innovation Story</button>
									</div>
								</div>
                            </form>
							
							 
						 	
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
				
                <!-- end col-12 -->
            </div>
			
            <!-- end row -->
		</div>
		<!-- end #content -->
	</div>
	
    <!-- begin #footer -->
  <!-- begin scroll to top btn -->
		
	</div>
	@include("admin.footer")	
	<!-- end page container -->
	


	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
	
	<?php
	$value = "Hello world!";
	 // 86400 = 1 day
		if(isset($_COOKIE['cookie'])) {
		setcookie("mycookie", $value, time() + 60);
		   
		} 
?>
	</body>
	</html>
	
	
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	
	
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>

	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/plugins/masonry/masonry.min.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
	<style type="text/css">
   	  #oth{display:none;}
	  #pp{display:none;}
	  
   </style>
   
    <script>
        $(document).ready(function() {
            $('textarea#body').summernote({
                /** Default place holder for the WYSIWYG editor */
                placeholder: 'Enter your body',

                /** Height Settings */
                height: '300px',

                /** Toolbar settings */
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
	
	 <script>
   function OtherField(){
			var checkBox = document.getElementById("ck");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   
   			
		
		
		}
</script>
	
	
	<script type="text/javascript">
			$(function() {
				$('#form-tags-1').tagsInput();
				
				$('#form-tags-2').tagsInput({
					'onAddTag': function(input, value) {
						console.log('tag added', input, value);
					},
					'onRemoveTag': function(input, value) {
						console.log('tag removed', input, value);
					},
					'onChange': function(input, value) {
						console.log('change triggered', input, value);
					}
				});
				
				$('#form-tags-3').tagsInput({
					'unique': true,
					'minChars': 2,
					'maxChars': 10,
					'limit': 5,
					'validationPattern': new RegExp('^[a-zA-Z]+$')
				});
				
				$('#form-tags-4').tagsInput({
					'autocomplete': {
						source: [
							'apple',
							'banana',
							'orange',
							'pizza'
						]
					} 
				});
				
				$('#form-tags-5').tagsInput({
					'delimiter': ';' 
				});
				
				$('#form-tags-6').tagsInput({
					'delimiter': [',', ';'] 
				});
			});
		</script>
		
		
	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});
	</script>
	
	
	
</body>
</html>
