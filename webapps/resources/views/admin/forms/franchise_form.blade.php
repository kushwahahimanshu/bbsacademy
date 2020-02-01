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
                Franchise Page Editing Form</h3>
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
            
            <form role="form" action="{{url('franchise_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Give the menu title">
                </div>
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor7" name="content" rows="10" cols="80">Write The Notes
                  </textarea>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">  
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">
                Franchise Slider Editing</h3>
                @if(Session::has('slider'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('slider')}}
              </div>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action="{{url('franchise_slider')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <input type="hidden" name="page" value="franchise">
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="image" class="form-control"><span>Image size must be 1920 x 800</span>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Page Menu List</h3>
                @if(Session::has('sidemenu'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('sidemenu')}}
              </div>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>Sr.no</th>
                  <th>Side-Menu</th>
                </tr>
                <?php $i=1 ?>
                @foreach($info as $r)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{$r->title}}</td>
                  <td><a href="{{url('delete_content/'.$r->id)}}"><span class="btn btn-danger">Delete</span></a></td>
                </tr>
                <?php $i++ ?>
                @endforeach
              </tbody></table>
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Application List</h3>
                @if(Session::has('frenchise'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('frenchise')}}
              </div>
                @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
            
               <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Sr.no</th>
                            <th>Franchise Taken</th>
                            <th>People</th>
                            <th>City</th>
                            <th>Name</th> 
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1 ?>
                          @foreach($test as $data)
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$data->frtaken}}</td>
                            <td>{{$data->people}}</td>
                            <td>{{$data->city}}</td>
                            <td>{{$data->name}}</td>
                            
                            <td><a href="{{url('delete_frenchisee/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
                          </tr>
                          <?php $i++ ?>
                          @endforeach
                        </tbody>
               </table>
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