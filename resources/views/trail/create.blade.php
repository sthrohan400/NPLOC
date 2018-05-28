@extends('master/app')
@section('content')
<div class="content-wrapper">
        <div class="col-12 grid-margin">
            @include('master.message')
                <div class="card">
                  <div class="card-body">
                    <a href="{{route('ViewFacilities')}}" class="pull-right"> <button class="btn btn-success btn-fw"><i class="fa fa-list"></i> List</button></a>
<<<<<<< HEAD
                    <h4 class="card-title">Trail Form</h4>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#trail"><i class="fa fa-map-signs"></i> Trail Info</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#spots"><i class="fa fa-street-view"></i>  Spots</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" data-toggle="tab" href="#facilities"> <i class="fa fa-map-marker"></i> Facilities</a>
                          </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#preview"> <i class="fa fa-search"></i> Preview</a>
                        </li> 
                    </ul>
                    <div class="tab-content">
                        <div id="trail" class="container tab-pane active">
                            <form class="form-sample" method="POST" action="{{url('/admin/trail/create')}}">
                              {!! csrf_field() !!}
                                <br/>
                                <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group row">
                                          <label class="col-sm-3 col-form-label"> Name</label>
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
                                          <label class="col-sm-3 col-form-label"> Short Description</label>
                                          <div class="col-sm-9">
                                              <input type="text" class="form-control {{($errors->has('short_descr')) ? 'errorInput': ''}}" name="short_descr" value="{{old('short_descr')}}"  />
                                              @if($errors->has('short_descr'))
                                                  <span class="help-block">
                                                  <p class="errorText">{{$errors->first('short_descr')}}</p>
                                                  </span>
                                              @endif
                                          </div>
                                          
                                          </div>
                                      </div>  
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control {{($errors->has('descr')) ? 'errorInput': ''}}" rows="5" name="descr" >{{old('descr')}}</textarea>
                                                      @if($errors->has('descr'))
                                                        <span class="help-block">
                                                          <p class="errorText">{{$errors->first('descr')}}</p>
                                                        </span>
                                                      @endif
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control {{($errors->has('descr')) ? 'errorInput': ''}}" rows="5" name="descr" >{{old('descr')}}</textarea>
                                                      @if($errors->has('descr'))
                                                        <span class="help-block">
                                                          <p class="errorText">{{$errors->first('descr')}}</p>
                                                        </span>
                                                      @endif
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Assign to HomeScreen</label>
                                            <div class="col-sm-9">
                                              <select class="form-control" name="is_up">
                                                <option value="1" {{old('is_up') == 1 ? 'selected' : ''}}>Yes</option>
                                                <option value="0" {{old('is_up') != 1 ? 'selected' : ''}}>No</option>
                                              </select>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-9">
                                              <select class="form-control" name="status">
                                                <option value="1" {{old('status') == 1 ? 'selected' : ''}}>Active</option>
                                                <option value="0" {{old('status') != 1 ? 'selected' : ''}}>Inactive</option>
                                              </select>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                        <div id="spots" class="container tab-pane fade"><br>
                          <div id="map" style="position:relative;width:100%;height:400px;"></div>
                          <div id="spotsForm">
                              
                          </div>
                        
                          <script type="text/javascript">
                          </script> 
                        </div>
                        <div id="facilities" class="container tab-pane fade"><br>
                        </div>
                        <div id="preview" class="container tab-pane fade"><br>
                        </div>
                    </div>
                    
                  </div>
                </div>
              </div> 
          </div>             
=======
                    <h4 class="card-title">Facilities Form</h4>
                  <form class="form-sample" method="POST" action="{{url('/admin/facilities/create')}}">
                    {!! csrf_field() !!}
                      <h4 class="card-description">
                        Company General Information
                      </h4>
                      <br/>
                      <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Name</label>
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
                                <label class="col-sm-3 col-form-label"> Short Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control {{($errors->has('short_descr')) ? 'errorInput': ''}}" name="short_descr" value="{{old('short_descr')}}"  />
                                    @if($errors->has('short_descr'))
                                        <span class="help-block">
                                        <p class="errorText">{{$errors->first('short_descr')}}</p>
                                        </span>
                                    @endif
                                </div>
                                
                                </div>
                            </div>
                            
                            
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                              <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Icon</label>
                                      <div class="col-sm-9">
                                          <input type="file"  class="file-upload-default">
                                          <div class="input-group col-xs-12">
                                              <input type="text" class="form-control file-upload-info" placeholder="Upload Image" id="nepuzzimg" name="icon">
                                              <span class="input-group-append">
                                                  <button class="file-upload-browse btn btn-info" type="button" onclick="openKCFinder(this)">Upload</button>
                                              </span>
                                          </div>
                                      </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Status</label>
                                  <div class="col-sm-9">
                                    <select class="form-control" name="status">
                                      <option value="1" {{old('status') == 1 ? 'selected' : ''}}>Active</option>
                                      <option value="0" {{old('status') != 1 ? 'selected' : ''}}>Inactive</option>
                                    
                                      
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
              
>>>>>>> 8d0555b075366451ca69c7fa69f3d817bec83215
</div>

@endsection