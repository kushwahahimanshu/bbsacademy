<!DOCTYPE html>
<html class="no-js" lang="">

        @include('admin.csslinks')
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
           @include('admin.topbar')
           @include('admin.sidebar')
    
            @yield('main_body')
          
           @include('admin.footer')
        </div>
        @include('admin.scriptlinks')
    </body>
</html>
