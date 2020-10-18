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

    <div class="row" style="padding-top: 50px;">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <div class="text-center border border-light p-5" >

            <p class="h4 mb-4">Register</p>

                <div class="row ">
                    <div class="col-md-12">
                        <input type="text" id="reg_email_address" class="form-control " placeholder="E-mail" title="Input valid email.">
                    </div>
                </div>
                <div class="row rowForm">
                    <div class="col-md-12">
                        <input type="text" id="reg_full_name" class="form-control " placeholder="Full Name">
                    </div>
                </div>
                <div class="row rowForm" >
                    <div class="col-md-12">
                        <input type="password" id="reg_password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="row " >
                    <div class="col-md-12">
                        <small id="psswordOnchangeParam" class="form-text text-muted" >
                            Enter atleast 8 characaters
                        </small>
                    </div>
                </div>

                <div class="row " >
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <input type="checkbox" id="hide_show_reg_password" > Show Password
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="password" id="reg_confirm_password" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="row " id="showHideUmatchedPasswordWaening" hidden>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <b style="color: red">*Not matched.</b>
                    </div>
                </div>

                <div class="row rowSignupRegiste">
                    <div class="col-md-12">
                        <button class="btn btn-info btn-block" id="submit_sign_up">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>

</header>



@include('footerplugins')
</body>

<script src="{{ asset('js/registration_system.js') }}"></script>
</html>