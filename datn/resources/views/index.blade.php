<!DOCTYPE html>
<html lang="vn">
<!-- Head -->
@include ('index_partials.head') 
<!-- Body --> 
<body>
    <div class="containerr">
        <div class="main"> 
            <!-- Header -->
            @include ('index_partials.header') 
            <!-- Menu  -->
            @include ('index_partials.menu') 
            <!-- slide -->
            @include ('index_partials.slideshow') 
            <!-- Đối tác -->
            @include ('index_partials.partner') 
            <!-- Content -->
            @include ('index_partials.content') 
            <!-- Footer -->
            @include ('index_partials.footer')  
        </div>
    </div>
    </div>
</body>
@include ('index_partials.js')   
</html>