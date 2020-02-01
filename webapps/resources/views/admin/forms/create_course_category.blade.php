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
                Course Page Editing Form</h3>
                @if(Session::has('msg'))
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{Session('msg')}}
              </div>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" method="post" action="{{url('category-submit')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label>Course Category</label>
                  <input type="text" name="course_category" class="form-control" placeholder="Give the course  category">
                </div>
                <?php $count; ?>
                @if($category->count()>=1)
                <div class="form-group">
                  <label>Parent Category</label>
                  <select name="course_parent" class="form-control">Parent Category
                  <option value="">none</option>
                  @foreach($category as $r)
                  <option>{{$r->course_category}}</option>
                  @endforeach
                  </select>
                </div>
                @endif
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
  
</section>
    <!-- /.content -->
  </div>   
@endsection