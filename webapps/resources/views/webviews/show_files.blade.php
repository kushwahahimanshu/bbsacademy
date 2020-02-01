@extends('master')

@section('main_body')

	@include('components/page_title')
    <div class="publications-area">
    <div class="container">
        <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>Title</th>                           
                    <th>Magazine</th>
                    <th>Preview</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach($info as $data)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$data->title}}</td>                   
                    <td><a href="{{url('download?file='.$data->files)}}" target="_blank" class="btn btn-primary btn-md">Download</a></td>
                    <td><a href="{{url($data->files)}}" target="_blank" class="text-danger"><i class="fa fa-file-pdf-o fa-3x"></i></a></td>
                </tr>
                <?php $i++ ?>
                @endforeach
               
            </tbody>
        </table>
    </div>
    </div>
</div>
@stop