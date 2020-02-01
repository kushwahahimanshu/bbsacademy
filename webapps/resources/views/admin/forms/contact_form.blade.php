@extends('master1')
@section('main_body')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Settings Page
        <small>Contact us page fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contact</li>
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
              <h3 class="box-title">Settings Form</h3>
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
            <form role="form" action="{{url('details_update')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
               @foreach($result as $r)
                <div class="form-group">
                @if($r->name == 'phone1')
                  <label>Phone1</label>
                  <input type="text" name="phone1" placeholder="Enter Phone 1 " class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'phone2')
                  <label>Phone2</label>
                  <input type="text" name="phone2" placeholder="Enter phone 2" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'email')
                  <label>Email</label>
                  <input type="email" name="email" placeholder="Enter Email " class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'address1')
                  <label>Address 1</label>
                  <input type="text" name="address1" placeholder="Enter Address 1" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'address2')
                  <label>Address 2</label>
                  <input type="text" name="address2" placeholder="Enter Address 2" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'description')
                  <label>Description</label>
                  <input type="text" name="description" placeholder="Enter Description" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'facebook-link')                  
                  <label>Facebook Link</label>
                  <input type="text" name="fb" placeholder="Enter Facebook Link" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'twitter')
                  <label>Twitter</label>
                  <input type="text" name="twitter" placeholder="Enter Twitter Link" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @elseif($r->name == 'instagram')
                  <label>Instagram link</label>
                  <input type="text" name="insta" placeholder="Enter Instagram Link" class="form-control" value="{{$r->value}}">
                </div>
                <div class="form-group">
                @else($r->name == 'youtube')
                  <label>Youtube Link</label>
                  <input type="text" name="youtube" placeholder="Enter Youtube Link" class="form-control" value="{{$r->value}}">
                </div>@endif
                @endforeach
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </section> 
    <!-- /.content -->
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Contact people List</h3>
              @if(Session::has('contact'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('contact')}}
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
                <tbody>
                <tr>
                  <th>Sr.No.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->phone }}</td> 
                  <td>{{ $data->subject }}</td>  
                  <td>{{ $data->message }}</td>   
                  <td><a href="{{url('delete_center/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
                </tr>
                <?php $i++ ?>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>  
        </div>
    </div>
</div>   
@endsection