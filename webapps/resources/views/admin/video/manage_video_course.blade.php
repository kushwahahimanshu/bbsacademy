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
                Manage Video Course Categories</h3>
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
            
            <form method="post" action="{{ url('add-category-submit') }}">
              {{ csrf_field() }}
              <div class="box-body">
              <div class="form-group">
                <label>Video Course Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label>Description</label><br>
                  <section class="content">
                          <div class="row"> 
                              <div class="box-body pad"> 
                                  <textarea rows="4" cols="60" name="description" placeholder="Enter Content" id="editor1" required></textarea>
                              </div>
                          </div><!-- ./row -->
                      </section>
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Video Course Categories</h3>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $count = 1;
                  @endphp
                  @foreach($categories as $r)
                  <tr>
                    <td>{{ $count++ }}</td>
                    <td>{{ $r->name }}</td>
                    <td><a href="{{ url('delete-video-course-category/'.$r->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>S.No.</th>
                    <th>Category Name</th>
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