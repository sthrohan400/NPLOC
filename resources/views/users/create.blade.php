@extends('master/app')
@section('content')
<div class="content-wrapper">
        <div class="col-12 grid-margin">
<!--                 @include('master.message') -->
                <div class="card">
                  <div class="card-body">
                    <a href="{{route('ViewUser')}}" class="pull-right"> <button class="btn btn-success btn-fw"><i class="fa fa-list"></i> List</button></a>
                    <h4 class="card-title">User Form</h4>
                  <form class="form-sample" method="POST" action="{{url('/admin/user/create')}}">
                    {!! csrf_field() !!}
                      <h4 class="card-description">
                        Personal Info
                      </h4>
                      <br/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control {{($errors->has('name')) ? 'errorInput': ''}}" name="name" value="{{old('name')}}"  />
                            @if($errors->has('name'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('name')}}</p>
                        </span>
                        @endif
                            </div>
                            
                          </div>
                          
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control {{($errors->has('phone')) ? 'errorInput': ''}} " name="phone" value="{{old('phone')}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select class="form-control {{($errors->has('gender')) ? 'errorInput': ''}}" name="gender" >
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                              </select>
                              @if($errors->has('gender'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('gender')}}</p>
                        </span>
                        @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Address</label>
                            <div class="col-sm-9">
                                    <textarea class="form-control {{($errors->has('address')) ? 'errorInput': ''}}" rows="5" name="address" >{{old('name')}}</textarea>
                                    @if($errors->has('address'))
                        <span class="help-block">
                          <p class="errorText">{{$errors->first('address')}}</p>
                        </span>
                        @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                                <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Profile Image</label>
                                        <div class="col-sm-9">
                                            <input type="file"  class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" placeholder="Upload Image" id="nepuzzimg" name="profile_image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-info" type="button" onclick="openKCFinder(this)">Upload</button>
                                            </span>
                                            </div>
                                        </div>
                                      </div>
                        </div>
                        
                      </div>
                      <h4 class="card-description">
                        User Login Information
                      </h4><br/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control {{($errors->has('username')) ? 'errorInput': ''}}" name="username" value="{{old('username')}}"/>
                              @if($errors->has('username'))
                                <span class="help-block">
                                <p class="errorText">{{$errors->first('username')}}</p>
                                </span>
                                @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control {{($errors->has('email')) ? 'errorInput': ''}}" name="email" value="{{old('email')}}"/>
                              @if($errors->has('email'))
                              <span class="help-block">
                                <p class="errorText">{{$errors->first('email')}}</p>
                              </span>
                              @endif
                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control {{($errors->has('password')) ? 'errorInput': ''}}" name="password" value="{{old('password')}}"/>
                              @if($errors->has('password'))
                              <span class="help-block">
                                <p class="errorText">{{$errors->first('password')}}</p>
                              </span>
                              @endif
                            
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password Confirmation</label>
                            <div class="col-sm-9">
                              <input type="password" class="form-control {{($errors->has('password_confirmation')) ? 'errorInput': ''}}" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                              @if($errors->has('password_confirmation'))
                              <span class="help-block">
                                <p class="errorText">{{$errors->first('password_confirmation')}}</p>
                              </span>
                              @endif
                            
                            </div>
                          </div>
                        </div>
                      </div>
                      <h4 class="card-description">
                            Membership Information
                      </h4>
                      <br/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Expiry Date</label>
                            <div class="col-sm-9 " >
                                <div class="input-group col-xs-12" >
                                <input type="text" class="form-control file-upload-info" id="fdatepicker" placeholder="" >
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info fdatepickerbutton" type="button" ><i class=" fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">MemberShip Type</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="membership_type">
                                <option value="free">Free</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                                
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                              <select class="form-control" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                              
                                
                              </select>
                            </div>
                          </div>
                      </div>
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              <div id="nepuzz-table" data-url="{{url()->current()}}" class="dataTables_wrapper form-inline dt-bootstrap no-footer">    
            </div> 
</div>
{{-- <script type="text/javascript">
  function openKCFinder(div) {
    window.KCFinder = {
        callBack: function(url) {
            window.KCFinder = null;
            //div.innerHTML = '<div style="margin:5px">Loading...</div>';
            var img = new Image();
            img.src = url;
            var inputval = document.getElementById('nepuzzimg');
            inputval.value = img.src;
            // img.onload = function(){
            //   document.getElementById('imgholder').value = img;
            // }
            img.onload = function() {
                //div.innerHTML = '<img id="img" src="' + url + '" />';
                var img = document.getElementById('imgholder');
                img.innerHTML = '<img id="img" src="' + url + '" style="height:200px;width:200px;" class="img img-responsive"/>';
                img.style.visibility = "visible";
            }
        }
    };
    window.open('/kcfinder/browse.php?type=images&dir=images/public',
        'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
}
</script> --}}
@endsection