<script>
	//for folder creation
	function createNewFolder(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/new/folder" method="POST"><div class="col-md-12"><input type="text" class="form-control" placeholder="Folder Name" name="name"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></div><br/><br/><br/><button class="btn btn-info">Create Folder</button></form/>';
			
			bootbox.dialog({
				title: 'Create New Folder',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //	folder creation ends here...
	
	function addAgency(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/add/agency" method="POST"><div class="col-md-12"><input type="text" class="form-control" placeholder="Agency Name" name="name" required/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></div><br/><br/><br/><button class="btn btn-info">Add Agency</button></form/>';
			
			bootbox.dialog({
				title: 'Add Agency',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //	folder creation ends here...
	
	
	function addDept(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/add/dept" method="POST"><div class="col-md-12"><input type="text" class="form-control" placeholder="Department Name" name="name"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></select><br/><select class="form-control"s name="dept"><option value="1">Choose Agency</option>@foreach($ag as $a)<option value="{{$a->id}}">{{$a->name}}</option>@endforeach</select><br/></div><br/><br/><button class="btn btn-info">Add Department</button></form/>';
			
			bootbox.dialog({
				title: 'Add a Department',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //	folder creation ends here...
	function assignGroup(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/assign/user" method="POST"><div class="col-md-12"><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><select name="us" class="form-control"><option>Select User</option>@foreach($u as $us)<option value="{{$us->id}}">{{$us->name}}</option>@endforeach</select><br/></select><br/><select class="form-control"s name="agency"><option value="1">Choose Agency</option>@foreach($ag as $a)<option value="{{$a->id}}">{{$a->name}}</option>@endforeach</select><br/><select class="form-control"s name="dept">@foreach($de as $d)<option value="{{$d->id}}">{{$d->name}}</option>@endforeach</select><br/></div><br/><br/><br/><button class="btn btn-info">Add User To Group</button></form/>';
			
			bootbox.dialog({
				title: 'Add User to a Group',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //	folder creation ends here...
	
	// create new file
	
	function createNewFile(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form id="uplform" action="/new/file" method="post" enctype="multipart/form-data"><div id="upldiv" class="col-md-12"><div id="loadr">checking - <img src="/assets/img/ajax.gif" align="absmiddle"/></div><input id="flimg" name="img[]" type="file" class="form-control" placeholder="File Name" onchange="getFoldersOption()" multiple/><div id="ovrw"><input name="ovrw" type="checkbox"  value="ovrw" />Check to confirm overwrite (*)<br/></div><div id="newv"><input type="checkbox" name="newv"  value="newv" />Check to confirm saving as new version(*)</div><br/><input type="hidden" value="" name="folder_id"/><input type="hidden" name="ovr" value="no"/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><div id="ni">Description: <input type="text" id="des" name="des" class="form-control"/><br/>Tag: <input type="text" id="des" name="tag" class="form-control"/><br/><div id="sbt_optn"></div><br/><div id="sub"><select id="file_subfolder_id" class="form-control" name="subfolder_id" ><option>Please select a subfolder</option>@foreach($sub as $sb)<option value="{{$sb->id}}">{{$sb->name}}</option>@endforeach</select></div><br/></div></div><br/><br/><br/><div id="sbt_btn"></div> <div id="sbt_btn_c" align="right"></div></form>';

			
			bootbox.dialog({
				title: 'Upload new File',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //






	function chkBeforeUpload(){
		//alert('checking');
		flv = $('#flimg').val();
		des = $('#des').val();
		// description
		//alert(des);
		
		if(flv){

			//alert(flv + '- xists');

			//check if file exists in database.... 
			$('#upldiv > #loadr').css('display', 'block');
			
			theurl = '/ajax/filecheck?folder_id='+$('#file_folder_id').val()+'&flimg=' + flv;
			//alert(theurl);

			//check the database if the files exist.... 
			$.ajax({
				type:'GET',
				url:theurl,		
				success:function(msg){
				
				//alert(msg);
					//hide loader.... 
					$('#upldiv > #loadr').css('display', 'none');

					//show the submit button or a diff. messavge..
					if(Number(msg) > 0){
						imgx = ':: this file already exists in this folder....'; 
						imgx += '[ <a href="javascript:;" onClick="overw()"><b>Overwrite</b></a> ] '; 
						imgx += '[<a href="javascript:;" onClick="newv()"><b>New Version</b></a> ]';
						
						$('#sbt_btn').html(imgx);
					}else{
						$('#sbt_btn').html('<button class="btn btn-info">Upload</button>  <button type="button" onclick="cancelUpload()" class="btn btn-info">Cancel Upload</button>');
						//$('#sbt_btn_c').html('<button type="button" onclick="cancelUpload()" class="btn btn-info">Cancel</button>');
					}

				}
			});
		}else{
			alert('no file seen');
		}
	}
	
	function cancelUpload(){
	//alert("Alhamdulillah");
	var upload = $find("<%= RadAsyncUpload1.flimg %>");
                upload.deleteAllFileInputs();
	//$("#flimg").remove();
	}
	
	function overw(){
	//alert("Alhamdulillah");
	$('#ovrw').css('display','block');
	$('#sbt_btn').html('<button class="btn btn-info">Upload</button>');
	}
	
	function newv(){
	//alert("Alhamdulillah");
	$('#newv').css('display','block');
	$('#sbt_btn').html('<button class="btn btn-info">Upload</button>');
	}
	
	function share(my_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/share/me/'+ my_id +'" method="POST" enctype="multipart/form-data"><div><input name="s" onClick="email()" type="radio"/>Share with a eDesk user:<br/><input name="s" type="radio" onClick="usersmail()"/>Share to External email address<br/><br/></div><div id="ac" class="col-md-12">Select folder: <br/><select class="form-control" onchange="getFoldersOption()" name="sharemail2"><option value="">Select User:</option>@foreach($u as $um)<option value="{{$um->email}}">{{$um->name}}</option>@endforeach</select><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></div><div id="bc">Receiver\'s email Address:<br/><br/><input class="form-control" name="sharemail" type="text"/><br/></div></div>Attach Message(optional):<br/><br/><input class="form-control" name="message" type="text"/><br/><br/><button class="btn btn-info">Share</button></form/>';
			
			bootbox.dialog({
				title: 'Folders Management',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
	
	function manageFolders(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/manage/folder" method="POST" enctype="multipart/form-data"><div class="col-md-12">Select folder: <br/><select class="form-control" onchange="getFoldersOption()" name="folder_id"><option>Select Folder</option>@foreach($folders as $f)<option value="{{$f->id}}">{{$f->name}}</option>@endforeach</select><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><div id="ni">Action:<br/><input type="radio" name="a" id="d" value="delete"/>Delete Folder <br/> <input name="a" id="r" type="radio" onClick="rename()" value="rename"/>Rename Folder <br/><br/></div><div id="ac">Rename To:<br/><input class="form-control" name="newname" type="text"/><br/></div></div><br/><br/><br/><button class="btn btn-info">Apply Action</button></form/>';
			
			bootbox.dialog({
				title: 'Folders Management',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
	
	function createSubFolders(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/new/subfolder" method="POST" enctype="multipart/form-data"><div class="col-md-12">Select folder: <br/><select class="form-control" onchange="getFoldersOption()" name="folder_id"><option>Select Folder</option>@foreach($folders as $f)<option value="{{$f->id}}">{{$f->name}}</option>@endforeach</select><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><div id="ni">Sub-Folder Name<input  class="form-control" type="text" name="name" id="d" /> <br/> </div><div id="ac">Rename To:<br/><input class="form-control" name="newname" type="text"/><br/></div></div><br/><br/><br/><button class="btn btn-info">Create Sub-Folder</button></form/>';
			
			bootbox.dialog({
				title: 'Create Sub-Folder',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
	function track(){
	$('#yloader').show();
	
			frmstring = '<div id="kryesore" style="overflow-y: scroll;">@foreach($tks as $t) {{$t->message}} @endforeach</div>';
			
			bootbox.alert({
				title: 'Document Movement Tracking',
				size:'large',
				class : "class-with-width",
				message: frmstring
			 });
				
				
			
	} //
	
	function rename(){
	
	$('#ac').css('display','block');
	}
	function email(){
	
	$('#ac').css('display','block');
	$('#bc').css('display','none');
	}
	function usersmail(){
	
	$('#bc').css('display','block');
	$('#ac').css('display','none');
	}
	
	
	function getFoldersOption(){			
		$('#ni').css('display','block');
		$('#sbt_optn').empty().html('<select id="file_folder_id" class="form-control" name="folder_id" onchange="loadSubFolders(this)"><option>Please select a folder</option>@foreach($folders as $f)<option value="{{$f->id}}">{{$f->name}}</option>@endforeach</select><br/>');	
		$('#sbt_btn').html('.........');	
	}
	
	
	function loadSubFolders(obj){
		
		$('#sub').css('display','none');
	
		id = Number($(obj).val()); //retrieve folder id... 
		folder_url = '/folder/'+id+'/sub';
		$.ajax({
			type:'get',
			url:folder_url,
			success:function(msg){
				$('#sub').html(msg);
				$('#sub').css('display','block');
			}			
		});
		
	}
	

	
	function myFunction(){	
		if($('#s').val()== 'rename'){
			$('#ni').css('display','block');
		}
		$('#ac').css('display','block');
	}
	
	function myFunction2(){	
		if($('#s').val()== 'rename'){
			$('#ni').css('display','block');
		}
		$('#ac').css('display','block');
	}

   
		
	
		
		//for data table
		
			$(document).ready(function() {
				App.init();
				TableManageKeyTable.init();
				
			});
			
			
			
			function doThis(obj){
				
			  st = $(obj).val();
			  alert(st);
			  parts = String(st).split('\\');
			  alert(st);
			  
			  console.log(parts.toString());
				
			}	
			
			
				
	</script>