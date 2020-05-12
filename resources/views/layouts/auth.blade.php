
<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>APPI | @yield( 'title' )</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right  kt-offcanvas-panel--right kt-header--fixed
        kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed
        kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(assets/media/bg/bg-1.jpg);">
                    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__logo">
                                <a href="#" class="display-1 text-light">
                                    APPI
                                </a>
                            </div>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

    </body>

    <!-- end::Body -->
</html>
