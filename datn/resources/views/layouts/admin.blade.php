<!DOCTYPE html> 
<html lang="en"> 
<!-- Head -->
@include ('index_partials.head')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('adm_partials.header')
        @include('adm_partials.sliderbar')
        @yield('content')
        @include('adm_partials.footer')
    </div> 
    <!-- REQUIRED SCRIPTS --> 
    @include('adm_partials.js')
</body> 
</html>