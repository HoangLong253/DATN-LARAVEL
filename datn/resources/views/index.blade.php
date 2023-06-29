@extends('layouts.app')
@section('content')
<!--slide show-->
@include ('index_partials.slideshow') 
<!--partner-->
@include ('index_partials.partner') 
<!-- Sản phẩm nổi bật -->
@include('index_partials.content')
@include ('index_partials.js')   
@endsection