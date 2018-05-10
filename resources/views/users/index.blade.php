@extends('master/app')
@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Users Table
            <span class="float-right">
            <a href="{{route('UserForm')}}" <button class="btn btn-success btn-fw"><i class="fa fa-plus"></i> Users</button></a>
            </span>
          </h4>
          <div class="row">
            <div class="col-md-12">
              <div id="overlay"><img src="{{URL::asset('custom/loading.gif')}}" alt="Loading"></div>
              <div id="nepuzz-table" data-url="{{url()->current()}}" class="dataTables_wrapper form-inline dt-bootstrap no-footer">    
            </div> 

            </div>
          </div>
        </div>
      </div>
</div>

@endsection