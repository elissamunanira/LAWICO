
<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from welly.dexignzone.com/xhtml/form-validation-jquery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 16:39:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>We LAWICO</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/dashboard/images/favicon.png">
    <!-- Custom Stylesheet -->
	<link href="/dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/dashboard/css/style.css" rel="stylesheet">
	<link href="/dashboard/https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->

   

		

     

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Welcome</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">To LAWICO</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">DASHBOARD</a></li>
					</ol>
                </div>
                <!-- row -->
                 <div class="row">
                      
                    <div class="col-lg-11">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Register New User</h4>

                                @if(Session::get('success'))
                                <div class="alert alert-success">
                                    @php
                                        Session::forget('succes')
                                    @endphp
                                    </div>
                                @endif
                                
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon" action="/users" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-label">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="val-username1" name="name" placeholder="Enter a username..">
                                            </div>
                                            @error('name')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="text-label">Email</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                </div>
                                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
                                            </div>

                                            @error('email')
                                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                             @enderror
                                    </div>
                                    
                                        <div class="form-group">
                                            <label class="text-label">Password *</label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" class="form-control" id="val-password1" name="val-password" placeholder="Choose a safe one..">
                                                <div class="input-group-append show-pass">
                                                    <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            @error('password')
                                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>

                                        


                                        <div class="form-group">
                                            <label class="text-label">Confirm Password *</label>
                                            <div class="input-group transparent-append">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                </div>
                                                <input type="password" class="form-control" id="val-password1" name="password_confirmation" placeholder="Choose a safe one..">
                                                <div class="input-group-append show-pass">
                                                    <span class="input-group-text"> <i class="fa fa-eye-slash"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            @error('password_confirmation')
                                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                            @enderror
                                        </div>








                                        <div class="form-group">
                                            <div class="form-check">
                                                <input id="checkbox1" class="form-check-input" type="checkbox">
                                                <label for="checkbox1" class="form-check-label">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn mr-2 btn-primary">Register</button>
                                        <button type="submit" class="btn btn-light">cencel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


      

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/dashboard/vendor/global/global.min.js"></script>
	<script src="/dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/dashboard/js/custom.min.js"></script>
	<script src="/dashboard/js/deznav-init.js"></script>
	
    



    <!-- Jquery Validation -->
    <script src="/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="/dashboard/js/plugins-init/jquery.validate-init.js"></script>



</body>


<!-- Mirrored from welly.dexignzone.com/xhtml/form-validation-jquery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Dec 2020 16:39:22 GMT -->
</html>