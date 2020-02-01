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
              <h3 class="box-title"></h3>
                Testimonial Page Content
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
            
            <form role="form" action="{{url('testimonial_data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Review Content</label>
                  <textarea id="editor6" name="content" rows="10" cols="80">Write Your Reviews
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" id="" placeholder="Write your name" name="name">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                  <label>Rating</label>
                  <input type="hidden" class="form-control rating"  placeholder="Give Rating" name="rating" >
                  <!-- <div class="simple-rating star-rating">
                     <i class="fa fa-star" data-rating="1"></i>
                     <i class="fa fa-star" data-rating="2"></i>
                     <i class="fa fa-star" data-rating="3"></i>
                     <i class="fa fa-star-o" data-rating="4"></i>
                     <i class="fa fa-star-o" data-rating="5"></i>
                  </div> -->
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
              <h3 class="box-title">All testimonial List</h3>
              @if(Session::has('testimonial'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('testimonial')}}
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
                  <th>Name</th>
                  <th>Image</th>
                </tr>
                <?php $i=1 ?>
                @foreach($test as $data)
                <tr>
                  <td>{{$i}}</td>
                  <td>{{ $data->name}}</td>
                  <td>
                  @php
                   if(!empty($data->image))
                  { @endphp
                    <img src="{{asset($data->image)}}" style="height: 100px; width: 100px;">
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
                  <td><a href="{{url('delete_testimonial/'.$data->id)}}"><span class="btn btn-danger">Delete</span></a></td>
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