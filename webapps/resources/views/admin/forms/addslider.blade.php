@extends('master1')
@section('main_body')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home Page
        <small>Slider Editing to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Page</a></li>
        <li class="active">Slider</li>
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
              <h3 class="box-title">Update Slider Page Content</h3>
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
            
            <form role="form" action="{{url('home_slider_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" placeholder="Enter Title" class="form-control">
                </div>
                <div class="form-group">
                  <label>Sub-Title</label>
                  <input type="text" class="form-control" placeholder="Enter Sub-Title" name="sub_title">
                </div>
                <div class="form-group">
                  <label>Title-color</label>
                  <input type="color" class="form-control" placeholder="Enter Title color" name="title_clr">
                </div>
                <div class="form-group">
                  <label>Sub-Title-color</label>
                  <input type="color" class="form-control" placeholder="Enter Sub-Title color" name="sub_title_clr">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" placeholder="Give  Image" name="image">
                </div>
                <div class="form-group">
                  <label>Button Link</label>
                  <input type="text" placeholder="https:\\bbsacademy.com" class="form-control" name="link">
                </div>
                <div class="form-group">
                  <label>Button Text</label>
                  <input type="text" placeholder="Enter Button Text" class="form-control" name="btn_txt">
                </div>
                <div class="form-group">
                  <label>Order</label>
                  <input type="text" placeholder="Enter Order" class="form-control" name="order">
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
              <h3 class="box-title">All Slider List</h3>
              @if(Session::has('slider'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('slider')}}
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
                  <th>Title</th>
                  <th>Image</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->title}}</td>
                  <td>
                  @php
                   if(!empty($data->image))
                  { @endphp
                    <img src="{{ url('assets/pics/'.$data->image)}}" style="height: 100px; width: 100px;">
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
                  <td><a href="{{url('delete_slider/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
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