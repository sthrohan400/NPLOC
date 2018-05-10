@extends('master/app')
@section('content')
        <div class="span12">

          <div class="widget widget-nopad">
            <div class="widget-header"> 
                <i class="icon-list-alt"></i>
              <h3> Companies </h3>
              <h3 ><button class="btn ">Add Company</button></h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content ">
              <div class="widget big-stats-container">
                <div class="widget-content">
                    <br/>
                    <form id="edit-profile" class="form-horizontal" method="POST" action="{{url('/admin/user')}}">
                        {{ csrf_field() }}
						<fieldset>
										<div class="control-group">											
											<label class="control-label" for="name">Site Title</label>
											<div class="controls">
                        <input type="text" name="name" class="span4 {{$errors->has('title') ? ' errorClass' : ''}}" id="name" value="" placeholder="Title">
                        @if($errors->has('title'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('title')}}</p>
                        </span>
                        @endif	
                      </div> <!-- /controls -->		
                      	
                    </div> <!-- /control-group -->
                    
                                        
										<div class="control-group">											
											<label class="control-label" for="name">Company Name</label>
											<div class="controls">
												<input type="text" name="name" class="span4 {{$errors->has('name') ? ' errorClass' : ''}}" id="username" value="" placeholder="Company Name">
                        @if($errors->has('name'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('name')}}</p>
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
											<label class="control-label" for="phone1">Phone Number </label>
											<div class="controls">
												<input type="text" name="phone1" class="span4 {{$errors->has('phone1') ? ' errorClass' : ''}}" id="email" value="" placeholder="Email Address">
                        @if($errors->has('phone1'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('phone1')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="phone2">Phone Number</label>
											<div class="controls">
												<input type="text" name="phone2" class="span4 {{$errors->has('phone2') ? ' errorClass' : ''}}" id="email" value="" placeholder="Email Address">
                        @if($errors->has('phone2'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('phone2')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="addr1">Address </label>
											<div class="controls">
                      <textarea name="addr1" rows="10" cols="50"> </textarea> 
                        @if($errors->has('addr1'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('addr1')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="addr2">Address (Optional) </label>
											<div class="controls">
												<textarea name="addr2" rows="10" cols="50"> </textarea> 
                        @if($errors->has('addr2'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('addr2')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		

                      		
                    </div> <!-- /control-group -->
										<div class="control-group">											
											<label class="control-label" for="radiobtns">Company Logo </label>
											
                                            <div class="controls">
                                               <div class="input-append">
                                                  <input class="span4 m-wrap " id="img" type="text"  name="logo">
                                                  <button class="btn" type="button" onclick='openKCFinder(this)'>Upload Image</button>
                                                </div>
                                                
                                              </div>	<!-- /controls -->			
                    </div>
                    <div class="control-group">											
											<label class="control-label" for="radiobtns">Company Logo ( Application ) </label>
											
                                            <div class="controls">
                                               <div class="input-append">
                                                  <input class="span4 m-wrap " id="img" type="text"  name="logo">
                                                  <button class="btn" type="button" onclick='openKCFinder(this)'>Upload Image</button>
                                                </div>
                                                
                                              </div>	<!-- /controls -->			
                    </div>
                  
                  
                    <div class="control-group">											
											<label class="control-label" for="descr1">Description</label>
											<div class="controls">
                        <!-- <input type="text" name="email" class="span4 {{$errors->has('descr1') ? ' errorClass' : ''}}" id="descr1" value="" placeholder="Email Address"> -->
                        <textarea name="descr1"  cols="50" rows="10"></textarea>
                        @if($errors->has('descr1'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('descr1')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="descr1">Description (Optional) </label>
											<div class="controls">
                        <!-- <input type="text" name="email" class="span4 {{$errors->has('descr1') ? ' errorClass' : ''}}" id="descr1" value="" placeholder="Email Address"> -->
                        <textarea name="descr2"  cols="50" rows="10"></textarea>
                        @if($errors->has('descr2'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('descr2')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    <div class="control-group">											
											<label class="control-label" for="descr3">Description (Optional) </label>
											<div class="controls">
                        <!-- <input type="text" name="email" class="span4 {{$errors->has('descr1') ? ' errorClass' : ''}}" id="descr1" value="" placeholder="Email Address"> -->
                        <textarea name="descr3"  cols="50" rows="10"></textarea>
                        @if($errors->has('descr3'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('descr3')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
                    </div> <!-- /control-group -->
                    
                
								
                <!-- /widget-content --> 
        <!-- <div class="widget widget-nopad">
              <div class="widget-header">
                <h3> Preview Images </h3>
              </div>
              <div class="widget-content">
                    <div id = "imgholder" style="padding:20px;">

                    </div>
</div>
              </div>
        </div> -->
        <div class="widget widget-nopad">
              <div class="widget-header">
                <h3> SEO Information </h3>
              </div>
              <div class="widget-content">
                <br/>
              <div class="control-group">											
											<label class="control-label" for="metatitle">Meta Title</label>
											<div class="controls">
												<input type="text" name="meta_title" class="span4 {{$errors->has('meta_title') ? ' errorClass' : ''}}" id="metatitle" value="" placeholder="Meta Title">
                        @if($errors->has('meta_title'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('meta_title')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
										</div> <!-- /control-group -->
  
              </div>
              <div class="control-group">											
											<label class="control-label" for="metatitle">Meta Keywords</label>
											<div class="controls">
												<input type="text" name="meta_keywords" class="span4 {{$errors->has('meta_keywords') ? ' errorClass' : ''}}" id="meta_keywords" value="" placeholder="Meta Title">
                        @if($errors->has('meta_keywords'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('meta_keywords')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
										</div> <!-- /control-group -->
              <div class="control-group">											
											<label class="control-label" for="metadescr">Meta Description</label>
											<div class="controls">
												<input type="text" name="meta_description" class="span4 {{$errors->has('meta_description') ? ' errorClass' : ''}}" id="metadescr" value="" placeholder="Meta Description">
                        @if($errors->has('meta_description'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('meta_description')}}</p>
                        </span>
                        @endif
                      </div> <!-- /controls -->		
                      		
										</div> <!-- /control-group -->
  
              </div>
       
        <div class="widget widget-nopad">
          <div class="widget-header">
            <h3> Plugin Information </h3>
          </div>
          <div class="widget-content">
            <br/>
            <div class="control-group">											
              <label class="control-label" for="gmap_token">Google Map Token</label>
              <div class="controls">
                <input type="text" name="gmap_token" class="span4 {{$errors->has('gmap_token') ? ' errorClass' : ''}}" id="gmap_token" value="" placeholder="Google Map Token">
                @if($errors->has('gmap_token'))
                <span class="help-block">
                  <p class="errorText">{{$errors->first('gmap_token')}}</p>
                </span>
                @endif
              </div> <!-- /controls -->		
                  
            </div> <!-- /control-group -->

      </div>
          </div>
        </div>
      </div>
        <div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
				</div> <!-- /form-actions -->
                
        </fieldset>
								</form>
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