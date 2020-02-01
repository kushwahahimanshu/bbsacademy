@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Center-Locator Page
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">CMS</a></li>
        <li class="active">center_locator</li>
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
              <h3 class="box-title">Center Locator Page  Editing</h3>
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
            
            <form role="form" action="{{url('center_location_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Center-Name</label>
                  <input type="text" name="c_name" placeholder="Enter center name" class="form-control">
                </div>
                <div class="form-group">
                  <label>City</label>
                  <input type="text" name="city" placeholder="Enter city name" class="form-control">
                </div>
                <div class="form-group">
                  <label>Full-Address</label>
                  <input type="text" name="address" placeholder="Enter full address" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phone-1</label>
                  <input type="number" name="phone1" placeholder="Enter Phone-1" class="form-control">
                </div>
                <div class="form-group">
                  <label>Phone-2</label>
                  <input type="number" name="phone2" placeholder="option" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email-1</label>
                  <input type="email" name="email_1" placeholder="Enter Email Address" class="form-control">
                </div>
                <div class="form-group">
                  <label>Email-2</label>
                  <input type="email" name="email_2" placeholder="Option" class="form-control">
                </div>
                <div class="form-group">
                  <label>Region</label>
                  <select class="form-control" name="region">
                    <option value="null">--Select--</option>
                    <option value="north">North</option>
                    <option value="east">East</option>
                    <option value="south">South</option>
                    <option value="west">West</option>   
                  </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div></div>
          <div class="col-md-6">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Centers List</h3>
              @if(Session::has('center'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('center')}}
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
                  <th>Center Name</th>
                  <th>City</th>
                  <th>Region</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->center_name }}</td>
                  <td>{{ $data->city }}</td>
                  <td>{{ $data->region }}</td>  
                  <td><a href="{{url('delete_center/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
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