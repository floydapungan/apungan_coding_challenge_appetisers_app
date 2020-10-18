<!DOCTYPE html>
<html>

@include('headerplugins')

<body>

<header>
    <nav class="navbar navbar-dark default-color">
        <a class="navbar-brand" href="#">User Registration System</a>
    </nav>

    <div class="row" style="padding-top: 50px;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="text-center border border-light p-5" >
                <p class="h4 mb-4">Log in</p>
                <div class="row rowForm" >
                    <div class="col-md-12">
                        <input type="email" id="login_email_address" class="form-control " placeholder="E-mail">
                    </div>
                </div>
                <div class="row rowForm" >
                    <div class="col-md-12">
                        <input type="password" id="login_password" class="form-control " placeholder="Password">
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <input type="checkbox" id="hide_show_login_password" > Show Password
                    </div>
                </div>
                <div class="row rowSignupRegiste">
                    <div class="col-md-12">
                        <button class="btn btn-info btn-block" type="submit" id="submit_log_in">Log in</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>

</header>

@include('footerplugins')
</body>

<script src="{{ asset('js/registration_system.js') }}"></script>
</html>