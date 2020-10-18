<!DOCTYPE html>
<html>

@include('headerplugins')

<body>

<header>
    <!--Navbar -->

    <!--Navbar-->
    <nav class="navbar navbar-dark default-color">
        <a class="navbar-brand" href="#">User Registration System</a>
    </nav>

    <div class="row" style="padding-top: 70px;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- Default form login -->
            <div class="text-center deep-purple lighten-5 p-5" >

                <p class="h3 mb-4">Login successful! </p>

            </div>
            <!-- Default form login -->
        </div>
        <div class="col-md-4"></div>
    </div>

</header>



@include('footerplugins')
</body>

<script src="{{ asset('js/registration_system.js') }}"></script>
</html>