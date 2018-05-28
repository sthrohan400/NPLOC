@extends('master/app')
@section('content')
<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Trails Table
            <span class="float-right">
<<<<<<< HEAD
            <a href="{{route('TrailForm')}}"> <button class="btn btn-success btn-fw"><i class="fa fa-plus"></i> Trail</button></a>
=======
            <a href="{{route('FacilitiesForm')}}"> <button class="btn btn-success btn-fw"><i class="fa fa-plus"></i> Facilities</button></a>
>>>>>>> 8d0555b075366451ca69c7fa69f3d817bec83215
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