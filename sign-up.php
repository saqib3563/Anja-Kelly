<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="assets/style/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <main>
        <section class="login-section">
            <div class="login-section-flex">
                <div class="login-section-left">
                    <div class="">
                        <h1 class="login-title mb-5">welcome to</h1>
                        <img class="img-fluid" src="assets/images/logo.png" alt="">
                    </div>
                </div>
                <div class="login-section-right">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="login-right-logo-area text-center mb-4">
                                    <h1 class="login-title text-black mb-1">welcome to</h1>
                                    <h1 class="login-title login-title2  mb-4">Egypt Padel Tour</h1>
                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="login-sb-title text-center text-lg-start text-md-center">Sign Up</h2>
                                <p class="login-para text-center text-lg-start text-md-center">Your Elite Mentor Dating Account
                                </p>
                            </div>
                            <div class="col-12 col-lg-12 col-xl-9 col-xx-10">
                                <form action="">
                                    <div class="login-fields-area">
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">First Name</label>
                                            <input class="form-control" placeholder="First Name" type="text" required="">
                                        </div>
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Last Name</label>
                                            <input class="form-control" placeholder="Last Name" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="login-fields-area">
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Email Address</label>
                                            <input class="form-control" placeholder="Email Address" type="text" required="">
                                        </div>
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Gender</label>
                                            <select name="" id="">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="login-fields-area">
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Country</label>
                                            <input class="form-control" placeholder="Country" type="text" required="">
                                        </div>
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">City</label>
                                            <input class="form-control" placeholder="City" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="login-fields-area">
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Address</label>
                                            <input class="form-control" placeholder="Address" type="text" required="">
                                        </div>
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Zip Code</label>
                                            <input class="form-control" placeholder="Zip Code" type="number" required="">
                                        </div>
                                    </div>
                                    <div class="login-fields-area">
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Address</label>
                                            <select id="multiple2" class="js-states form-control" multiple>
                                                <option>David Warner</option>
                                                <option>Jane Smith</option>
                                                <option>John Doe</option>
                                                <option>Emily Clarke</option>
                                            </select>
                                        </div>
                                        <div class="field-wrapper w-100">
                                            <label for="" class="form-label">Zip Code</label>
                                            <input class="form-control" placeholder="Zip Code" type="number" required="">
                                        </div>
                                    </div>
                                    <!-- <div class="login-fields-area">
                                    <div class="form-floating">
                                        <div class="field-icon-area"></div>
                                        <i class="fa-regular fa-eye toggle-password" toggle="#password-field"></i>
                                        <input type="password" name="password" id="password-field" class="form-control"
                                            placeholder="" required="">
                                        <label for="password-field">PASSWORD</label>
                                    </div>
                                </div> -->
                                    <div class="login-btn-area">
                                        <input type="submit" class="secondary-btn" name="" id="" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script>
        $("#multiple2").select2({
            placeholder: "hh",
            allowClear: true
        });
    </script>

</body>

</html>