   @extends('master')

@section('main_body')
      @include('components/page_title')
       @if($flag==1)
        @include('components/cource_content')
         @elseif($flag==2)
          @include('components/video_course')
           @elseif($flag==3)
            @include('components/cource_content')
             @elseif($flag==4)
              @include('components/ebooks')
       @endif

        
@stop

       


 
