@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Media and Event Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">CMS</a></li>
        <li class="active">Media & Events</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Media & events Page  Editing</h3>
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
            
            <form role="form" action="{{url('add_events_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Events Type</label>
                  <select class="form-control" name="events">
                    <option value="">--Select--</option>
                    <option value="academic">Academic</option>
                    <option value="non-academic">Non-Academic</option>
                    <option value="press">Press Coverage</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>image</label>
                  <input type="file" name="image" class="form-control">
                </div>  
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div></div>
          <div class="col-md-6">
            <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Events List</h3>
              @if(Session::has('events'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('events')}}
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
                  <th>News Type</th>
                  <th>Image</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->event_type}}</td>
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
                  <td><a href="{{url('delete_event/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
                </tr>
                <?php $i++ ?>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
    </div>
</section>
    <!-- /.content -->
  </div>   
@endsection