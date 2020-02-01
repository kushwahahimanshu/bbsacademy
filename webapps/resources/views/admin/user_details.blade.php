@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Page Content</h3>
            </div>
            <!-- /.box-header -->
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('success')}}
              </div>
            @endif
            <!-- form start -->
            @foreach($info as $data)
            <form role="form" action="{{url('user_update',[$data->id])}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  
                  <label>Teacher</label>
                  <input type="text" name="teacher" class="form-control" placeholder="Give Teacher Details" value="{{$data->teacher}}">
                </div>
                <div class="form-group">
                  <label>Result</label>
                  <input type="text" class="form-control" id="" placeholder=" Give Every Year Result" name="result"
                   value="{{$data->result}}">
                </div>
                <div class="form-group">
                  <label>Courses</label>
                  <input type="text" class="form-control"  placeholder="Add  New Courses" name="course" value="{{$data->course}}">
                </div>
                <div class="form-group">
                  <label>Registered</label>
                  <input type="text" class="form-control"  placeholder="Enter Registered User" name="user" value="{{$data->user}}">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>@endforeach
          </div>
      </div>
  </div>
</section>
    <!-- /.content -->
  </div>   
@endsection