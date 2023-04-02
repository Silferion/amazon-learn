<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="horizontal-menu-template"
>
  <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/horizontal-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Mar 2022 09:30:12 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login</title>

    <meta
      name="description"
      content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!"
    />
    <meta
      name="keywords"
      content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
    />
    <!-- Canonical SEO -->
    <link
      rel="canonical"
      href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
    />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/assets/img/favicon/favicon.ico"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Core CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/css/rtl/core.css') }}"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}"
      class="template-customizer-theme-css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}"
    />
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}"
    />
    <!-- Vendor -->
    <link
      rel="stylesheet"
      href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}"
    />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body style="background: linear-gradient(to bottom right, #3fd0c9, #2eaf7d)">
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="">
          <!-- Register -->
          <div class="card shadow-none">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="{{ route('welcome') }}" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <!-- logo here-->
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder"
                    >Amazon Learn</span
                  >
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2 mt-3">Welcome to Amazon Learn!</h4>

              {{-- Errors --}}

              {{-- <x-validation-errors class="mb-4" /> --}}
              @if($errors->has('email'))
                  <div class="alert alert-success d-flex align-items-center">{{ $errors->first('email') }}</div>
              @endif
              <form
                id="formAuthentication"
                class="mb-3"
                action="{{ route('login') }}"
                method="POST"
              >
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email "
                    autofocus
                    :value="old(email)"
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"
                      ><i class="bx bx-hide"></i
                    ></span>
                  </div>
                </div>

                @if(Route::has('password.request'))
                    <div class="mb-3 text-end">
                      <a href="{{ Route('password.request') }}">
                        <small class="text-warning">Forgot Password?</small>
                      </a>
                    </div>
                @endif
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">
                    Sign In
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/pages-auth.js') }}"></script>
  </body>

  <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/horizontal-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Mar 2022 09:30:12 GMT -->
</html>
