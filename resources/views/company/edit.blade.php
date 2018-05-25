@extends('master/app')
@section('content')
<div class="content-wrapper">
        <div class="col-12 grid-margin">
            @include('master.message')
                <div class="card">
                  <div class="card-body">
                    <a href="{{route('ViewCompany')}}" class="pull-right"> <button class="btn btn-success btn-fw"><i class="fa fa-list"></i> List</button></a>
                    <h4 class="card-title">Company Form</h4>
                  <form class="form-sample" method="POST" action="{{url('/admin/company/create')}}">
                    {!! csrf_field() !!}
                      <h4 class="card-description">
                        Company General Information
                      </h4>
                      <br/>
                      <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{($errors->has('title')) ? 'errorInput': ''}}" name="title" value="{{$data['title']}}"  />
                                    @if($errors->has('title'))
                                        <span class="help-block">
                                        <p class="errorText">{{$errors->first('title')}}</p>
                                        </span>
                                    @endif
                                </div>
                                
                              </div>
                              
                            </div>
                            <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label"> Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control {{($errors->has('name')) ? 'errorInput': ''}}" name="name" value="{{$data['name']}}"  />
                                @if($errors->has('name'))
                                    <span class="help-block">
                                    <p class="errorText">{{$errors->first('name')}}</p>
                                    </span>
                                @endif
                            </div>
                            
                            </div>
                          
                        </div>
                            
                          </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Email </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control {{($errors->has('email')) ? 'errorInput': ''}} " name="email" value="{{$data['email']}}"/>
                                    @if($errors->has('email'))
                                    <span class="help-block">
                                    <p class="errorText">{{$errors->first('email')}}</p>
                                    </span>
                                @endif
                                  </div>
                                  
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email (Optional)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control {{($errors->has('email1')) ? 'errorInput': ''}} " name="email1" value="{{$data['email1']}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Phone (Mobile)</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control {{($errors->has('phone')) ? 'errorInput': ''}} " name="phone" value="{{$data['phone']}}"/>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone (Telephone)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control {{($errors->has('phone1')) ? 'errorInput': ''}} " name="phone1" value="{{$data['phone1']}}"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Address</label>
                            <div class="col-sm-9">
                                    <textarea class="form-control {{($errors->has('addr1')) ? 'errorInput': ''}}" rows="5" name="addr1" >{{$data['addr1']}}</textarea>
                                    @if($errors->has('addr1'))
                                        <span class="help-block">
                                        <p class="errorText">{{$errors->first('addr1')}}</p>
                                        </span>
                                    @endif
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                 <label class="col-sm-3 col-form-label">Logo Image</label>
                                    <div class="col-sm-9">
                                        <input type="file"  class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" placeholder="Upload Image" id="nepuzzimg" name="logo" value="{{$data['logo']}}">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-info" type="button" onclick="openKCFinder(this)">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                      </div>
                      <h4 class="card-description">
                          Company SEO Information
                        </h4><br/>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Meta Title</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control file-upload-info"  placeholder=""   name="meta_title" value="{{$data['meta_title']}}">
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Meta Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control file-upload-info"  placeholder=""   name="meta_keywords" value="{{$data['meta_keywords']}}">
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Meta Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control file-upload-info"  placeholder=""   name="meta_description" value="{{$data['meta_description']}}">
                                </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Meta  Image</label>
                                      <div class="col-sm-9">
                                          <input type="file"  class="file-upload-default">
                                          <div class="input-group col-xs-12">
                                              <input type="text" class="form-control file-upload-info" placeholder="Upload Image" id="nepuzzimg" name="meta_logo" value="{{$data['meta_logo']}}">
                                              <span class="input-group-append">
                                                  <button class="file-upload-browse btn btn-info" type="button" onclick="openKCFinder(this)">Upload</button>
                                              </span>
                                          </div>
                                      </div>
                              </div>
                          </div>
                          
                      </div>
                      
                      <h4 class="card-description">
                        Company Technical Information
                      </h4><br/>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Subscription Expiry Date</label>
                            <div class="col-sm-9 " >
                                <div class="input-group col-xs-12" >
                                <input type="text" class="form-control file-upload-info" id="fdatepicker" placeholder=""   name="subscription_expiry" value="{{$data['subscription_expiry']}}">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-info fdatepickerbutton" type="button" ><i class=" fa fa-calendar"></i></button>
                                    </span>
                                    @if($errors->has('subscription_expiry'))
                                    <span class="help-block">
                                    <p class="errorText">{{$errors->first('subscription_expiry')}}</p>
                                    </span>
                                    @endif
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Google Map Token</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control file-upload-info" id="fdatepicker" placeholder=""   name="gmap_token" value="{{$data['gmap_token']}}">
                              @if($errors->has('gmap_token'))
                                    <span class="help-block">
                                    <p class="errorText">{{$errors->first('gmap_token')}}</p>
                                    </span>
                                @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Site_Token</label>
                              <div class="col-sm-9">
                                  <input type="text" class="form-control file-upload-info" id="fdatepicker" placeholder=""   name="site_token" value="{{$data['site_token']}}" disabled>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Status</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="status">
                                <option value="1" {{$data['status'] ? 'selected' : ''}}>Active</option>
                                  <option value="0" {{$data['status'] ? '' : 'selected'}}>Inactive</option>
                                
                                  
                                </select>
                              </div>
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

@endsection