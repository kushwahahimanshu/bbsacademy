@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">  
          <!-- breadcumm -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $course->name }}</h3>
              <p>Course: {{ $course->category }}</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- add videos -->
            <div class="box-header with-border">
              <h3 class="box-title">Fill Details</h3>
               @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('success')}}
              </div>
                @endif
            </div><!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="post" action="{{ url('add-video-submit') }}">
              {{ csrf_field() }}
              <input type="hidden" name="course" value="{{ $course->id }}">
              <input type="hidden" name="category" value="{{ $course->name }}">
             <!-- <input type="hidden" name="video_name" id="video_name">-->             
            <div class="box-body">
              <div class="form-group">
                <label>Video Title</label>
                <input type="text" class="form-control" name="title" required>
              </div>
              <div class="form-group">
                <label>Select Video File</label>
                <input type="file" name="video" id="video" required>
              </div>
              <div class="form-group">
                <label>Video Order/Serial Number</label>
                <input type="number" min="1" value="1" class="form-control" name="order_no" required>
              </div>
              <div class="form-group">
                <label style="display: block;">Mark as Demo</label>
                <input type="radio" name="demo" value="0" id="demo-no" checked> 
                <label for="demo-no" style="margin-right: 20px;"> No</label>
                <input type="radio" name="demo" value="1" id="demo-yes"> 
                <label for="demo-yes"> Yes</label>
              </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <p id="msg"></p>
              <button type="submit" class="btn btn-primary" id="submit">Submit</button>
              </div>
            </form>
          </div><!-- /.box -->
        </div>
        <!-- show categories -->
        <div class="col-md-6">
          <!-- list of videos -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Video Courses</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>title</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $count = 1;
                  @endphp
                  @foreach($videos as $r)
                  <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $r->title }}</td>
                    <td>
                      <a href="{{ url('delete-video/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>title</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->


        </div>
      </div>
  
</section>
    <!-- /.content -->
  </div>   
@endsection