<!doctype html>
<html lang="en">

    
<head>        
<meta charset="utf-8" />
<meta name="csrf-token" content="<?php echo csrf_token(); ?>" />
<title>Willkommen im Kundenbereich</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
<meta content="Themesbrand" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="/assets/images/favicon.ico">
<!-- Bootstrap Css -->
<link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- IziToat-->
<link href="/assets/css/iziToast.min.css" rel="stylesheet" type="text/css" />


</head>
    

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="alert alert-danger" role="alert" class="text"style="display: none">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">

                                <div class="row">
                                    
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Willkommen zurück !</h5>
                                            <p>Bitte loggen Sie sich ein</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form id="loginform"class="form-horizontal">
                                    
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input class="form-control" placeholder="Ihre E-Mailadresse" type="email"id="email"name="email"required>
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                
                                                <input type="password" class="form-control" placeholder="Ihr Password" id="passwort"aria-label="Password"  name="password"required>
                                               
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        
                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Einloggen</button>
                                        </div>
            
                                        

                                        <div class="mt-4 text-center">
                                            <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Passwort vergessen?</a>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->


<script src="/assets/libs/jquery.min.js"></script>
<script src="/assets/js/iziToast.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        
        <!-- App js -->
        
        <script src="/assets/js/core.js"></script>
<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#loginform').submit(function (e) {
        e.preventDefault();
        $('#error_message').html("")
        const password = $("input[name=password]").val();
        const email = $("input[name=email]").val();
        const remember = $("input[name=remember]").val();
        $('#btn-submit').html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>')
        $.ajax({
            type: 'POST',
            url: '/login',
            //  data: '_token = <?php echo csrf_token() ?>',
            data: {
                password: password,
                email: email,
                
                _token: '<?php echo csrf_token() ?>',
            },
            success: function (data, textStatus, xhr) {
                if (xhr.status == 200) {
                    $('#alert-message').addClass('alert alert-success').html('Logged in successfully.')
                    setTimeout(() => {
                        location.href = '/dashboard';
                    }, 500)
                }
            },
            error: function (error) {
                $('#error_message').html("These credentials don't match our records.")
            },
            complete: function () {
                $('#btn-submit').html('Login')
            }
        });
    });   
     </script>
    </body>
</html>


