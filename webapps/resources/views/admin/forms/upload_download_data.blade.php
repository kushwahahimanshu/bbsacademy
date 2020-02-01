@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Upload Download File
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Download</li>
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
              <h3 class="box-title">Upload File</h3>
            </div>
            <!-- /.box-header -->
            @if(Session::has('data'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('data')}}
              </div>
            @endif
            <!-- form start -->
            
            <form role="form" action="{{url('upload_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Type</label>
                  <select name="f_type" class="form-control">
                    <option value="monthly">Monthly Magazine</option>
                    <option value="newslatter">News Latter</option>
                    <option value="examcracker">Exam Cracker</option>
                    <option value="mock">Mock\Practice Test</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="G.K Capsule etc.">
                </div>
                <div class="form-group">
                  <label>Documents</label>
                  <input type="file" name="image" class="form-control">
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
              <h3 class="box-title">All Upload Files List</h3>
              @if(Session::has('files'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('files')}}
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
                  <th>Type</th>
                  <th>Title</th>
                  <th>Files</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->f_type}}</td>
                  <td>{{ $data->title}}</td>
                  <td>{{$data->files}}</td>
                  <td><a href="{{url('delete_files/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
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