<div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <ul class="dropdown-menu">
						
                            <li><a href="/termsandcondition">Terms and Conditions</a></li>
							<li><a href="/datapolicy">Data Policy</a></li>
							<li><a href="/cookie">Cookies Term and Condition</a></li>
							
                        </ul>
                    </li>
					<li><a href="/datasets">Datasets</a></li>
                    <li>
                        <a href="javascript:;" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu">
						@foreach($cat as $ctg)
                            <li><a href="/category/{{$ctg->name}}">{{$ctg->name}}</a></li>
                        @endforeach  
                        </ul>
                    </li>
					<li><a href="/login">Login/Register</a></li>
                    <li><a href="/aboutus">Abou Us</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                   
                </ul>
            </div>