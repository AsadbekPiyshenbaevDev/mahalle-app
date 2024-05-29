<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Online Máhálle</title>
    <!-- General CSS Files -->

    <link rel="stylesheet" href="/assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='/assets/img/Pass.png' />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style type="text/css">
        #map {
            height: 370px;
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn">
                                <i data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"><span
                                class="d-sm-none d-lg-inline-block" style="color: #6677ef;">{{auth()->user()->name}}</span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand" style="box-sizing: border-box;">
                        <a href="/home" >
                            <img alt="image" src="/assets/img/Pass.png"
                                class="header-logo" />
                            <span class="logo-name" style="letter-spacing: normal;">Online Máhálle</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="dropdown {{ Request::is('streets*') ? 'active' : '' }}">
                            <a href="{{ route('streets.index') }}" class="nav-link"><i
                                    class="fas fa-city"></i><span>Kósheler
                                    dizimi</span></a>
                        </li>

                        <li class="dropdown {{ Request::is('houses*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('houses.index') }}"><i class="fas fa-home"></i><span>Xojalıqlar
                                    dizimi</span></a></li>
                        <li class="dropdown {{ Request::is('families*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('families.index') }}"><i class="fas fa-users"></i><span
                                    class="icon-name">Xalıq
                                    dizimi</span></a></li>
                        <li class="dropdown {{ Request::is('neighborhoods*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('neighborhoods.index') }}"><i class="fas fa-landmark"></i><span>Máhálle
                                    jetiligi</span></a></li>
                        <li class="dropdown {{ Request::is('abroads*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('abroads.index') }}"><i class="fas fa-user-clock"></i><span>Uzaq
                                    múddetke
                                    ketkenler</span></a></li>
                        <li class="dropdown {{ Request::is('notebooks*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('notebooks.index') }}"><i class="far fa-id-card"></i><span>Dápterdegiler</span></a></li>
                        <li class="dropdown {{ Request::is('abroadwants*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('abroadwants.index') }}"><i class="fas fa-user-check"></i><span>Shet
                                    elge
                                    ketiwdi
                                    qálewshiler</span></a></li>
                        <li class="dropdown {{ Request::is('inspectors*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('inspectors.index') }}"><i
                                    class="fas fa-calendar-alt"></i><span>Profilaktika
                                    qadaǵalawında</span></a></li>
                        <li class="dropdown {{ Request::is('wars*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('wars.index') }}"><i class="fas fa-user-shield"></i><span>Ekinshi
                                    jahan urısı
                                    qatnasıwshıları </span></a></li>
                        <li class="dropdown {{ Request::is('greats*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('greats.index') }}"><i class="fas fa-blind"style="font-size: 22px;"></i><span>Jalǵız
                                    nuraniyler</span></a></li>
                        <li class="dropdown {{ Request::is('empoyments*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('empoyments.index') }}"><i class="fas fa-id-card-alt"></i><span>Xalıq
                                    bántligi</span></a></li>
                        <li class="dropdown {{ Request::is('diseases*') ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('diseases.index') }}"><i class="fas fa-wheelchair"
                                    style="font-size: 18px;"></i><span>Nágranlıǵı bar
                                    shaxslar</span></a></li>

                    </ul>

                </aside>
                <div style="padding-left: 24px;margin-top: 180px;">
                    <b>Texnik qollap-quwatlaw</b>
                    <p style="color: #6677ef;">+998933680414</p>
                </div>
            </div>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="row">
                        {{ $slot }}
                    </div>

                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Fondı saylań</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Aq</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Qara</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar reńi</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Header reńi</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Kishi sidebar</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="/assets/js/app.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="/assets/bundles/datatables/datatables.min.js"></script>
    <script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
    <script src="/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
    <script src="/assets/bundles/datatables/export-tables/jszip.min.js"></script>
    <script src="/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
    <script src="/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
    <script src="/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
    <script src="/assets/js/page/datatables.js"></script>

    <!-- JS Libraies -->
    <script src="/assets/bundles/apexcharts/apexcharts.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="/assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="/assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
