<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>LEADS ACADEMY - View Admin Blog</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('admin/assets/img/leads/favicon.jpg')}}"/>
    <link href="{{ asset('admin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('admin/assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/editors/quill/quill.snow.css')}}">

    <!-- END GLOBAL MANDATORY STYLES -->

   <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/custom_dt_html5.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/table/datatable/custom_dt_custom.css')}}">

    <!-- END PAGE LEVEL CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{ url('admin/index') }}"> <img alt="logo" src="{{ asset('admin/assets/img/leads/leadslogo.png')}}"> <span
                        class="navbar-brand-name"></span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                </li>
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Leads Academy</h6>
                                <p>Admin</p>
                            </div>
                            <img src="{{ asset('admin/assets/img/leads/favicon.jpg')}}" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>

                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span> Profile</span>
                            </a>
                        </div>
                        <div class="dropdown-item">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                    </path>
                                </svg> <span> Inbox</span>
                            </a>
                        </div>
                        <!-- <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>Lock Screen</span>
                            </a>
                        </div> -->
                        <div class="dropdown-item">
                            <a href="{{ url('admin/logout') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="{{ url('admin/index') }}">
                            <img src="{{ asset('admin/assets/img/leads/leadslogo.png') }}" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{ url('admin/index') }}" class="nav-link"></a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu active">
                        <a href="{{ url('admin/index') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-box">
                                    <path
                                        d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    </path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                </svg>
                                <span>Blog Manager</span>
                            </div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </li>

                    <li class="menu single-menu">
                        <a href="{{ url('admin/enquiry') }}">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-message-square">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                </svg>
                                <span>Enquiry</span>
                            </div>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg> -->
                        </a>
                    </li>

                    
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Blog Manager</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">View Admin Blog</a></li>
                        </ol>
                    </nav>
                </div>
                
                <div class="row layout-top-spacing" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Admin Blog Details</h3>
                                <form action="{{ url('update_blog/'.$blog->id) }}" method="POST" enctype="multipart/form-data" name="mainform">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlInput1">Author Name</label>
                                            <input name="author_name" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $blog->author_name }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlInput1">Blog Title</label>
                                            <input name="blog_title" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $blog->blog_title }}">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="exampleFormControlInput1">Blog Summary</label>
                                            <input name="blog_summary" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $blog->blog_summary }}">
                                        </div>
                                    </div>

                        <div id="basic" class="row layout-spacing layout-top-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Blog Content </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="quill-tooltip">
                                    </div> 
                                    <p> {!! isset($blog->blog_content) ? $blog->blog_content : '' !!} </p>
                                    <textarea name="blog_content" style="display:none" id="hiddenArea">{{ isset($blog->blog_content) ? $blog->blog_content : ''}} </textarea>
                                    {{-- <input type="hidden" name="blog_content" id="hiddenArea"> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                                    
                                    <button type="submit" class="btn btn-success mt-3">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

                </div>
        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2022 Ignite, Designed By <a target="_blank" href="https://thedaxads.com">DAXADS</a></p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    
    
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>
    <script src="{{ asset('admin/plugins/editors/quill/quill.js')}}"></script>
    <script src="{{ asset('admin/plugins/editors/quill/custom-quill.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/plugins/table/datatable/datatables.js')}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
    <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>

    <script>

// var quill = new Quill('#quill-tooltip', {
//     modules: {
//       toolbar: '#toolbar-container'
//     },
//     placeholder: 'Compose an epic...',
//     theme: 'snow'
// });
// $("#identifier").on("submit",function() {
//   $("#hiddenArea").val($("#editor-container").html());
// })

// // Enable all tooltips
// $('[data-toggle="tooltip"]').tooltip();

// // Can control programmatically too
// $('.ql-italic').mouseover();
// setTimeout(function() {
//     $('.ql-italic').mouseout();
// }, 2500);
// const editorContent = '<%=blog_content%>'
// const editor = document.getElementById('quill-tooltip');
// const hiddenInput = document.getElementById('blog_content');
// const form = document.forms.mainform;


var quill = new Quill('#quill-tooltip', {
  modules: {
    toolbar: [
      [{ header: [1, 2, false] }],
      ['bold', 'italic', 'underline'],
      ['image', ]
    ]
  },
  placeholder: 'Compose an epic...',
  theme: 'snow'  // or 'bubble'
});
$("#identifier").on("submit",function() {
$("#hiddenArea").val($("#quill-tooltip .ql-editor").html());
})
form.addEventListener('submit', function(e){
        e.preventDefault();
        hiddenInput.value = editor.firstChild.innerHTML
        this.submit();
      });


</script>

    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->

    <script src="{{ asset('admin/plugins/font-icons/feather/feather.min.js')}}"></script>
    <script type="text/javascript">
        feather.replace();
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
</body>

</html>