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

                <p class="h4 mb-4">Validate </p>
                <div class="row rowForm" >
                    <div class="col-md-12">
                        <input type="email" id="validation_code_to_pass" class="form-control " placeholder="Enter validation code">
                    </div>
                </div>
                <div class="row" id="show_hide_valid_code" style="display: none">
                    <div class="col-md-12">
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </div>


                <div class="row rowSignupRegiste">
                    <div class="col-md-12">
                        <button class="btn btn-info btn-block" type="submit" id="submit_validation_code">Validate account</button>
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