@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fixed Layout
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Fixed</li>
      </ol>
    </section>
             @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('success')}}
              </div>
            @endif
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php $count=1; ?>
        @foreach($info as $data)
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update {{ ucwords($data->page_name) }} Page Content</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action="{{ url('update',[$data->id]) }}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <input type="hidden" name="id" value="{{ $data->id }}" class="form-control">
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor{{$count++}}" name="content" rows="10" cols="80">{{$data->content}}
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Video Link</label>
                  <input type="text" class="form-control" id="" placeholder=" Give Video Link" name="video_link" value="{{ $data->video_link }}">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" id="" placeholder="Give  Image" name="image" value="{{ $data->image}}">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
            @endforeach
  </div>
</section>
    <!-- /.content -->
  </div>   
@endsection