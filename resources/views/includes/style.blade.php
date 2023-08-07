<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.cs') }}s">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/components.css') }}">

<!-- Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon') }}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon') }}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon') }}/favicon-16x16.png">
<link rel="manifest" href="{{ asset('assets/img/favicon') }}/site.webmanifest">

<!-- Fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS -->
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    .img-height{
        height:300px !important;
    }
    .profile-pic{
        width: 35px !important;
        height: 35px !important;
    }
    .navbar .dropdown-item.has-icon i{
        line-height: inherit;
    }
    .body{
        font-family: 'Montserrat', sans-serif !important;
    }
    .bg-primary{
        background-color: #2b2463 !important;
    }
    .text-primary{
        color:#2b2463 !important;
    }
    .bg-warning{
        background-color: #eb6b24 !important;
    }
    .text-warning{
        color: #eb6b24 !important;
    }
    .btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus, .show>.btn-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgb(235,107,36,5);
    }
    .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active, .show>.btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #bc4302;
        border-color: #ac3d02;
    }

    .btn-warning:focus:active, .btn-warning.disabled:focus:active {
        background-color: #eb6b24 !important;
    }
    .btn-warning:active, .btn-warning:hover, .btn-warning.disabled:active, .btn-warning.disabled:hover {
        background-color: #eb6b24 !important;
    }
    .btn-warning:focus, .btn-warning.disabled:focus {
        background-color: #eb6b24 !important;
    }
    .btn-warning.focus, .btn-warning:focus {
        box-shadow: 0 0 0 0.2rem rgb(235,107,36,5);
    }
    .btn-warning:hover {
        color: #fff;
        background-color: #d84c00;
        border-color: #bc4302;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }
    .btn-warning, .btn-warning.disabled {
        box-shadow: 0 2px 6px #ebbba2;
        background-color: #eb9161;
        border-color: #eb9161;
    }
    .btn-warning {
        color: #fff;
        background-color: #ff5900;
        border-color: #ff5900;
    }
    .btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus, .show>.btn-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgb(235,107,36,5);
    }
    .btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #1500b5;
        border-color: #1300a2;
    }

    .btn-primary:focus:active, .btn-primary.disabled:focus:active {
        background-color: #2b2463 !important;
    }
    .btn-primary:active, .btn-primary:hover, .btn-primary.disabled:active, .btn-primary.disabled:hover {
        background-color: #2b2463 !important;
    }
    .btn-primary:focus, .btn-primary.disabled:focus {
        background-color: #2b2463 !important;
    }
    .btn-primary.focus, .btn-primary:focus {
        box-shadow: 0 0 0 0.2rem rgb(43, 36, 99,5);
    }
    .btn-primary:hover {
        color: #fff;
        background-color: #1900d2;
        border-color: #1500b5;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
    }
    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }
    .btn-primary, .btn-primary.disabled {
        box-shadow: 0 2px 6px #b2abe2;
        background-color: #6858e4;
        border-color: #6858e4;
    }
    .btn-primary {
        color: #fff;
        background-color: #2b2463;
        border-color: #2b2463;
    }
    .dt-button{
        color: #fff !important;
        background-color: #2b2463 !important;
        background-image: -webkit-linear-gradient(top, #2b2463 0%, #2b2463 100%) !important;
        border-color: #2b2463 !important;
    }
    .main-sidebar .sidebar-menu li.active a {
        color: #2b2463;
        font-weight: 600;
        background-color: #f8fafb;
    }
    body:not(.sidebar-mini) .sidebar-style-2 .sidebar-menu > li.active > a:before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: 25px;
        width: 4px;
        background-color: #2b2463;
    }
    body.sidebar-mini .main-sidebar .sidebar-menu > li.active > a {
        box-shadow: 0 4px 8px #aea5f0;
        background-color: #2b2463;
        color: #fff;
    }
    .section .section-title:before {
        content: " ";
        border-radius: 5px;
        height: 8px;
        width: 30px;
        background-color: #2b2463;
        display: inline-block;
        float: left;
        margin-top: 6px;
        margin-right: 15px;
    }
</style>


