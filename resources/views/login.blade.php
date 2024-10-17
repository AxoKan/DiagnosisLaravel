<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('assets/') }}" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Diagnosis</title>
    <meta name="description" content="" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Corrected Asset Paths -->
    <link href="{{ asset('assets/vendor/fonts/boxicons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/core.css') }}" rel="stylesheet" class="template-customizer-core-css">
    <link href="{{ asset('assets/vendor/css/theme-default.css') }}" rel="stylesheet" class="template-customizer-theme-css">
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Google reCAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function validateForm() {
            var backupCaptchaField = document.querySelector('input[name="backup_captcha"]');

            if (navigator.onLine) {
                var response = grecaptcha.getResponse();
                if (response.length === 0) {
                    alert('Please complete the CAPTCHA.');
                    return false;
                }
                backupCaptchaField.removeAttribute('required');
            } else {
                backupCaptchaField.setAttribute('required', 'required');
                var backupCaptcha = backupCaptchaField.value;
                if (backupCaptcha === '') {
                    alert('Please complete the offline CAPTCHA.');
                    return false;
                }
            }

            return true;
        }

        function checkInternet() {
            var backupCaptchaField = document.querySelector('input[name="backup_captcha"]');
            if (!navigator.onLine) {
                document.getElementById('offline-captcha').style.display = 'block';
                document.querySelector('.g-recaptcha').style.display = 'none';
                backupCaptchaField.removeAttribute('disabled');
            } else {
                document.getElementById('offline-captcha').style.display = 'none';
                document.querySelector('.g-recaptcha').style.display = 'block';
                backupCaptchaField.setAttribute('disabled', 'disabled');
            }
        }

        window.addEventListener('load', checkInternet);
        window.addEventListener('online', checkInternet);
        window.addEventListener('offline', checkInternet);
    </script>
</head>
<body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <!-- /Logo -->

                        <form class="user" novalidate action="{{ url('aksi_login') }}" method="POST" id="loginForm" onsubmit="return validateForm();">
                        @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <!-- Google reCAPTCHA -->
                          

                          

                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Corrected Script Paths -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>