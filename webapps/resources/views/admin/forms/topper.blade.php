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
              <h3 class="box-title">Topper Page Content</h3>
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
            
            <form role="form" action="{{url('topper_update')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Topper Image</label>
                  <input type="file" class="form-control" id="" name="image">
                </div>
                <div class="form-group">
                  <label>Topper Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Topper course</label>
                  <input type="text" class="form-control" name="course">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
      <div class="col-md-6">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Toppers List</h3>
              @if(Session::has('topper'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('topper')}}
              </div>
                @endif
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Course</th>
                  <th>Image</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->name}}</td>
                  <td>{{ $data->course}}</td>                 
                  <td>
                  @php
                   if(!empty($data->image))
                  { @endphp
                    <img src="{{asset($data->image)}}" style="height: 50px; width: 50px;">
                  @php
                    }
                    else
                    {
                  @endphp
                  <h6>No Image Found</h6>
                  @php 
                    } 
                  @endphp
                 </td>
                  <td><a href="{{url('delete_topper/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
                </tr>
                <?php $i++ ?>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
  </div>
</section>
    <!-- /.content -->
  </div>   
@endsection