<!DOCTYPE html> 
<html lang="en"> 
<!-- Head -->
@include ('adm_partials.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('adm_partials.header')
        @include('adm_partials.sliderbar')
        <div class="content-wrapper">
            <div class="content-header">
                @yield('header_content')
            </div>
            @yield('main_content')
        </div>
        @include('adm_partials.footer')
    </div> 
    <!-- REQUIRED SCRIPTS --> 
    @include('adm_partials.js')
</body> 
</html>