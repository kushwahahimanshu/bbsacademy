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
              <h3 class="box-title">Add New Pages </h3>
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
            
            <form role="form" action="{{url('create-page')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" placeholder="Enter Title" class="form-control">
                </div>
              </div>
              <div class="form-group">
                  <label>Cover Image</label>
                  <input type="file" name="image" class="form-control">
              </div>
              <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor7" name="content" rows="10" cols="80">Write The Notes
                  </textarea>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div></div>
          <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Page List</h3>
              @if(Session::has('delete'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('delete')}}
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
                  <th>Url</th>
                  <th>Action</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->post_name }}</td>
                  <td><a href="{{url('delete_post/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
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