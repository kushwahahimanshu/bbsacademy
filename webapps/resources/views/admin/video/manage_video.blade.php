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
              <h3 class="box-title">
                Manage Video</h3>
                @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('success')}}
              </div>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form method="post" action="{{ url('add-video-course-submit') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
              <div class="form-group">
                <label>Course Topic</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label>Course Category</label>
                <select name="category" class="form-control">
                  @foreach($categories as $r)
                    <option value="{{ $r->name }}">{{ $r->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Author's Name</label>
                <input type="text" class="form-control" name="author" required>
              </div>
              <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" required>
              </div>
              <div class="form-group">
                <label>Cover Image</label>
                <input type="file" class="form-control" name="image" required>
              </div>
              <div class="form-group">
                <label>Topic Description</label>
                <input type="text" class="form-control" name="topic_description">
              </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!-- show categories -->
        <div class="col-md-6">
          <div class="box  box-primary">
            <div class="box-header">
              <h3 class="box-title">Video</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Topic</th> 
                    <th>Course</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $count = 1;
                  @endphp
                  @foreach($courses as $r)
                  <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->category }}</td>
                    <td>
                      <a href="{{ url('add-videos/'.$r->id) }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add Videos</a>
                      <a href="{{ url('delete-video-course/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>Topic</th> 
                    <th>Course</th>
                    <th>Action</th>
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