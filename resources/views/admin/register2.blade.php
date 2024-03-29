<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]--><head>
	<meta charset="utf-8" />
	<title>   Membership Registration|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
		<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	
	
	
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
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
      selector: 'textarea',  // change this value according to your HTML
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
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
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
@include("admin.analytics")
@include("admin.cookiebanner")
@include("admin.header")
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('msg_interest'))
						<script type="text/javascript">
						alert('Interest form submitted successfully. You will be contacted via email as soon as possible');
						</script>
						@elseif(Session::has('mismatch'))
						<script type="text/javascript">
						alert('Passwords mismatched');
						</script>
						@elseif(Session::has('miskey'))
						<script type="text/javascript">
						alert('Please select at least one entry from the defined list of keywords  or custom keywords');
						</script>
						@elseif(Session::has('msg_interest2'))
						<script type="text/javascript">
						alert('Registration completed successfully, click Login/Register to access your account');
						</script>
						@elseif(Session::has('msg2'))
						<script type="text/javascript">
						alert('User with that email already exist please use a diffrent email address...');
						</script>
						@elseif(Session::has('uplerror'))
						<script type="text/javascript">
						alert('Invalid profile picture format, use only png,jpeg,jpg');
						</script>
						@elseif(Session::has('err'))
						<small>Invalid Username or Password...</small>
						
						@else(msg == "" or msg==NULL)
							<!--<small>Your files are with you everywhere you go...</small>-->
						@endif
                        
	@include("admin.header")
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed 
            <div class="news-feed">
                <div class="news-image">
                    <img src="/assets/img/login-bg/bg-8.jpg" alt="bgcolour" />
                </div>
                <div class="news-caption">
                    
                </div>
            </div>
			-->
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div >
                <!-- begin register-header -->
				
                <h1 align="center">
				<br/><br/>
				<p style="padding:1.5em;">
                   Membership Registration
                  </p> 
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/register/new_complete" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
					
					<label class="control-label" for="fname">First Name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="fname" class="form-control"  value="{{$u->first_name}}" name="first_name"  required readonly />
                            </div>
                        </div>
						
						
						<label class="control-label" for="lname">Last Name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="lname" class="form-control"  value="{{$u->last_name}}" name="last_name"  required readonly />
                            </div>
                        </div>
						
						
                      
						
						 <label class="control-label" for="org">Organisation </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="org" class="form-control" placeholder="Organisation e.g., University College London" name="institution"  value="{{$u->institution}}"   readonly/>
                            </div>
                        </div>
						
						<label class="control-label" for="why">How does this network align with your interests?(maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="why" name="reason" class="form-control"   maxlength="200"  value="{{$u->joining_reason}}"  readonly/> 
                            </div>
                        </div>
						
						 <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" id="email" class="form-control" placeholder="Email address" name="email"  value="{{$u->email}}"  required readonly/>
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
						
						
						<label class="control-label" for="role">Role Title </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="role" class="form-control" placeholder="e.g., Professor" name="designation" value="{{$u->designation}}"  readonly/>
                            </div>
                        </div>
						
						
						
						
						<div class="dropdown" scroll>
										<button class="btn btn-primary" type="button" 
										id="sampleDropdownMenu" data-toggle="dropdown" aria-haspopup='true' aria-expanded='false' onClick="ariaChange('sampleDropdownMenu')>
										<label for="key">Select Research Interest & Keywords </label>
										</button> or Add Other Keyworrds  <input  type="checkbox"  name="other" value="{{ old('other') }}" id="ck" value="other" onClick="OtherField()"  /> <label for="ck"></label>
										<div class="dropdown-menu" style="overflow-y: scroll; height:250px; padding:0.5em 1em;">
										@foreach($kw as $k)
										
										<label for="{{$k->id}}"> </span> <input id="{{$k->id}}"  name="keywords[]" value="{{$k->id}}" type="checkbox"  />&nbsp; {{$k->name}}</label>
										
										
										 @endforeach
	
										</div>
										</div>
										
										
										<div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
							<br/>
							<label for="form-tags-3">Other Keywords (comma-separated)</label>
                                <input type="text" id="form-tags-3" class="form-control" placeholder="If other is selected, type in the keywords" name="other" value="{{ old('other') }}"  />
								
                            </div>
                        </div>
						
						<br/>
						
						<label class="control-label" for="biog">Brief Bio/Background<span class="text-danger">*</span> <ul>Your bio will let other Partners know your expertise and interest. 
When Challenges are being submitted, our matchmaking system cross-references your profile (including your bio and keywords) with the Challenge post. This will let the posting Partner know how relevant you are to their healthcare innovation idea, problem or project.</ul>   </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <textarea type="text" id="biog" name="bio"  class="form-control" required > {{ old('bio') }} </textarea>
                            </div>
                        </div>
						
						
						
						
						<label class="control-label" for="link">LinkedIn (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="link" name="linkedin" value="{{ old('linkedin') }}" class="form-control"   /> 
                            </div>
                        </div>
						
						<label class="control-label" for="twitter">Twitter (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="twitter" name="twitter" value="{{ old('twitter') }}" class="form-control"  /> 
                            </div>
                        </div>
						
						<label class="control-label" for="webpage">Webpage (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="webpage" name="webpage" value="{{ old('webpage') }}" class="form-control"  /> 
                            </div>
                        </div>
						
						
                       
						
						<label class="control-label" for="pic">Profile Picture </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="file" id="pic" class="form-control" value="{{ old('pic') }}"  name="pic"   />
								
                            </div>
                        </div>
						
						
						
						
						
                      
						
						<label class="control-label" for="pass">Password (minimum of 8 characters) <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password" name="password" minlength="8"   required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
                       
					   <label class="control-label" for="cpass">Confirm Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="cpass" name="cpassword" minlength="8"  required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			
                            </div>
                        </div>
                       
						<meter max="4" id="password-strength"></meter>
        <p id="password-strength-text"></p>
		
		<script type="text/javascript">
var strength = {
    0: "Weakest",
    1: "Weak",
    2: "OK",
    3: "Good",
    4: "Strong"
}

var password = document.getElementById('password');
var meter = document.getElementById('password-strength');
var text = document.getElementById('password-strength-text');
 
password.addEventListener('input', function() {
    var val = password.value;
    var result = zxcvbn(val);
 
    // This updates the password strength meter
    meter.value = result.score;
 
    // This updates the password meter text
    if (val !== "") {
        text.innerHTML = "Password Strength: " + strength[result.score]; 
    } else {
        text.innerHTML = "";
    }
});
</script>
						
                        <div class="checkbox m-b-30">
                             <label for="tm">
                                <input type="checkbox" name="tm" value="{{ old('tm') }}" id="tm" required />  By clicking register button, you agree to our <a href="/termsandcondition" title="Terms and Condition" target="_blank">Terms of Use</a> and that you have read our <a href="https://www.ucl.ac.uk/privacy/" title="Data Policy" target="_blank">Data Policy</a>
                            </label>
                        </div>
						
						
						
						<div class="checkbox m-b-30">
                            <label for="not">
                                <input type="checkbox" id="not" name="news_email" value="{{ old('news_email') }}" /> Click to receive notifications when new public story is posted.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            <label for="notp">
                                <input type="checkbox" name="matching_email" id="notp"  value="{{ old('matching_email') }}"/> Click to receive a notification when you are selected as partner.
                            </label>
                        </div>
						
						
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/login">Login</a> to sign in.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Materials and Manufacturing in Healthcare Network <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<style type="text/css">
   	  #oth{display:none;}
	  
   </style>
   
   
   
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
					'maxChars': 50,
					'limit': 50,
					
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
			
			
			function changeAria(button_id) {

					let button_el = document.getElementById(button_id);
				
					let expanded_val = button_el.getAttribute("aria-expanded");
				
					if(expanded_val === 'true') {
				
						button_el.setAttribute('aria-expanded', 'false');
				
					} else {
				
						button_el.setAttribute('aria-expanded', 'true');
				
					}
				
				}
		</script>
		
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
