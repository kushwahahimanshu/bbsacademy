@extends('master1')
@section('content','Dashboard / About-Content')
@section('main_body')

 <div class="col-md-6">
    @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-info') }}"><span class="badge badge-pill badge-success">Success</span>{{ Session::get('message') }}</p>
    @endif
           <form action="{{url('/main')}}" method="post"  enctype="multipart/form-data">
                {{csrf_field()}}
                        <div class="card">
                            <div class="card-header">
                                <strong>Add About Content</strong>
                            </div>
                            <div class="card-body card-block">
                                    <div class="form-group">
                                        <label  class=" form-control-label">page-name</label>
                                        <input type="text" placeholder="Enter page-name" class="form-control" name="p_name">
                                    </div>
                                    <div class="form-group">
                                        <label  class=" form-control-label">Content</label>
                                        <textarea rows="4" cols="60" name="content" placeholder="Enter Content" id="editor1"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label  class=" form-control-label">Video Link</label>
                                        <input type="text" placeholder="Enter Video Link" class="form-control" name="video_link">
                                    </div>
                                     <div class="form-group">
                                        <label  class=" form-control-label">Image</label>
                                        <input type="file" placeholder="Enter image" class="form-control" name="img">
                                    </div>
                                            <button type="submit" class="btn btn-primary" name="submit" value="submit"> <i class="fa fa-lock">&nbsp;</i>Submit
                                            </button>
                            </div>
                        </div>
                    </form>
                </div>
                            
@endsection