@extends('master/app')
@section('content')

        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> 
                <i class="icon-list-alt"></i>
              <h3> Users</h3>
              <h3 ><button class="btn ">Add User</button></h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content col-md-6">
              <div class="widget big-stats-container">
                <div class="widget-content">
                    <br/>
                    <form id="edit-profile" class="form-horizontal" method="POST" action="{{url('/admin/user')}}">
                        {{ csrf_field() }}
						<fieldset>
                    
										<div class="control-group">											
											<label class="control-label" for="name">Full Name</label>
											<div class="controls">
                        <input type="text" name="name" class="span4 {{$errors->has('name') ? ' errorClass' : ''}}" id="name" value="" placeholder="Full Name">
                        @if($errors->has('name'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('name')}}</p>
                        </span>
                        @endif	
                      </div> <!-- /controls -->		
                      	
                    </div> <!-- /control-group -->
                                        
										<div class="control-group">											
											<label class="control-label" for="name">User Name</label>
											<div class="controls">
												<input type="text" name="username" class="span4 {{$errors->has('username') ? ' errorClass' : ''}}" id="username" value="" placeholder="Username">
                        @if($errors->has('username'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('username')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
										</div> <!-- /control-group -->
										
										<div class="control-group">											
											<label class="control-label" for="email">Email Address</label>
											<div class="controls">
												<input type="text" name="email" class="span4 {{$errors->has('email') ? ' errorClass' : ''}}" id="email" value="" placeholder="Email Address">
                        @if($errors->has('email'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('email')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                                        <div class="control-group">											
											<label class="control-label" for="password1">Password</label>
											<div class="controls">
												<input type="password" name="password" class="span4 {{$errors->has('password') ? ' errorClass' : ''}}" id="password1" value="" placeholder="Password">
                        @if($errors->has('password'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('password')}}</p>
                        </span>
                        @endif	
                      </div> <!-- /controls -->		
                      	
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="password_confirmation"> Confirmation Password </label>
											<div class="controls">
												<input type="password" name="password_confirmation" class="span4 {{$errors->has('password_confirmation') ? ' errorClass' : ''}}" id="password_confirmation" value="" placeholder="Confirm Password">
                      @if($errors->has('password_confirmation'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('password_confirmation')}}</p>
                        </span>
                      @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    
										<div class="control-group">											
											<label class="control-label" for="radiobtns">Profile Image </label>
											
                                            <div class="controls">
                                               <div class="input-append">
                                                  <input class="span4 m-wrap " id="img" type="text" >
                                                  <button class="btn" type="button" onclick='openKCFinder(this)'>Upload Image</button>
                                                </div>
                                                
                                              </div>	<!-- /controls -->			
										</div>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
                </div>
                <!-- /widget-content --> 
        <div class="widget widget-nopad">
              <div class="widget-header">
                <h3> Preview Images </h3>
              </div>
              <div class="widget-content">
                    <div id = "imgholder" style="padding:20px;">

                    </div>
</div>
              </div>
        </div>
                
              </div>
            </div>
          </div>
          <!-- /widget -->
        </div>
        <!-- /span6 -->
        <script type="text/javascript">
function openKCFinder(div) {
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            //div.innerHTML = '<div style="margin:5px">Loading...</div>';
            var img = new Image();
            img.src = url;
            var inputval = document.getElementById('img');
            inputval.value = img.src;
            // img.onload = function(){
            //   document.getElementById('imgholder').value = img;
            // }
            img.onload = function() {
                //div.innerHTML = '<img id="img" src="' + url + '" />';
                var img = document.getElementById('imgholder');
                img.innerHTML = '<img id="img" src="' + url + '" style="height:200px;width:200px;" class="img img-responsive"/>';
                // var o_w = img.offsetWidth;
                // var o_h = img.offsetHeight;
                // var f_w = div.offsetWidth;
                // var f_h = div.offsetHeight;
                // if ((o_w > f_w) || (o_h > f_h)) {
                //     if ((f_w / f_h) > (o_w / o_h))
                //         f_w = parseInt((o_w * f_h) / o_h);
                //     else if ((f_w / f_h) < (o_w / o_h))
                //         f_h = parseInt((o_h * f_w) / o_w);
                //     img.style.width = f_w + "px";
                //     img.style.height = f_h + "px";
                // } else {
                //     f_w = o_w;
                //     f_h = o_h;
                // }
                // img.style.marginLeft = parseInt((div.offsetWidth - f_w) / 2) + 'px';
                // img.style.marginTop = parseInt((div.offsetHeight - f_h) / 2) + 'px';
                img.style.visibility = "visible";
            }
        }
    };
    window.open('/public/kcfinder/browse.php?type=images&dir=images/public',
        'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script>
@endsection