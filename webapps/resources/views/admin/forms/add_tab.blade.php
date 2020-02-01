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
            
            <form role="form" action="{{url('tab-data')}}" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
                <input type="hidden" name="course_id" value="{{$tabname->id}}">
                <div class="form-group">
                  <label>Tab Name</label>
                  <input type="text" name="tab_name" class="form-control" placeholder="Give the tab name title">
                </div>
                 <div class="form-group">
                  <label>Content</label>
                  <textarea id="editor7" name="content" rows="10" cols="80">Write The Notes
                  </textarea>
                </div>
               <!-- <div class="form-group">
                  <label>activity/category etc</label>
                  <input type="text" name="activity" class="form-control" placeholder="Give the menu title">
                </div>
                <div class="form-group">
                  <label>Age/Date etc</label>
                  <input type="text" name="age" class="form-control" placeholder="Give the menu title">
                </div> -->
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
  </div>   
@endsection