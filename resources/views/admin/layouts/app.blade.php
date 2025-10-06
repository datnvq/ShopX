<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.3.0
* @link https://tabler.io
* Copyright 2018-2025 The Tabler Authors
* Copyright 2018-2025 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard</title>
    <!-- BEGIN PAGE LEVEL STYLES -->
    {{--
    <link href="./dist/libs/jsvectormap/dist/jsvectormap.css" rel="stylesheet" /> --}}
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ asset('assets/admin/dist/css/tabler.css') }}" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN CUSTOM FONT -->
    <style>
        @import url("https://rsms.me/inter/inter.css");
    </style>
    <!-- END CUSTOM FONT -->
</head>

<body>
    <!-- BEGIN GLOBAL THEME SCRIPT -->
    <script src="{{ asset('assets/admin/dist/js/tabler-theme.min.js') }}"></script>
    <!-- END GLOBAL THEME SCRIPT -->
    <div class="page">
        <!--  BEGIN SIDEBAR  -->
        @include('admin.layouts.sidebar')
        <!--  END SIDEBAR  -->
        <div class="page-wrapper">
            <!-- BEGIN PAGE BODY -->
            @yield('content')
            <!-- END PAGE BODY -->
            <!--  BEGIN FOOTER  -->
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2025
                                    <a href="https://ShopXG4.com" class="link-secondary">ShopXG4</a>. All rights
                                    reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" class="link-secondary" rel="noopener"> v1.0.0 </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END FOOTER  -->
        </div>
    </div>
    <!-- BEGIN PAGE MODALS -->

    <!-- END PAGE MODALS -->

    <!-- BEGIN PAGE LIBRARIES -->
    //
    <!-- END PAGE LIBRARIES -->
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/dist/js/tabler.min.js') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN DEMO SCRIPTS -->
    //
    <!-- END DEMO SCRIPTS -->
    <!-- BEGIN PAGE SCRIPTS -->
    //
    <!-- END PAGE SCRIPTS -->
</body>

</html>
