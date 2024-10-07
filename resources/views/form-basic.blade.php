<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Counselling Cell</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/quill/dist/quill.snow.css"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <script>
    $(document).ready(function() {    
        $('#class_id').on('change', function() {
            var id = $(this).val();
            console.log("hello");
            if (id) {
                $.ajax({
                    type: "GET",
                    url: "/get-user-details/" + id,
                    success: function(data) {
                        console.log(data); // Check the response in the browser console
                        if (data) {
                            $('#name').val(data.Name);
                            $('#dob').val(data.DOB);
                            $('#phone').val(data.Phone);
                            $('#Email').val(data.Email);
                            $('#program').val(data.des);
                            $('#counselor').val(data.couns);
                            $('#class_name').val(data.year);

                        } else {
                            // Handle empty response or errors here
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); // Log any errors
                    }
                });
            } else {
                $('#name').val('');
                $('#dob').val('');
                $('#phone').val('');
                $('#Email').val('');
                $('#program').val('');
                $('#counselor').val('');
                $('#class_name').val('');

            }
        });
    });
</script>


  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="../assets/images/favicon.png" alt="Your Logo" class="light-logo" />

                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1 style="color: rgb(122, 22, 50); font-size: 27px; font-weight: 800;">
                        <b> Counselling Cell</b>
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item d-md-none">
                        <a style="color: rgb(122, 22, 50);" href="{{ url('CounsellingAssistance') }}" class="nav-link"><i
                                class="mdi mdi-all-inclusive "></i><span class="hide-menu">Counselling Assistance</span></a>
                    </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li> -->
                            <!-- @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif -->
                        @else
                        
                            <li class="nav-item dropdown">
                                <a style="color: rgb(122, 22, 50);" id="navbarDropdown" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
      <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav" class="pt-4">
              <li class="sidebar-item">
                <a href="{{ route('login') }}" class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu"> Login </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="{{ url('CounsellingRequest') }}"
                class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu">Counselling Request</span></a
                >
              </li>
              @if (Auth::check())
              @if (!Auth::user()->hasRole('exam')&& !Auth::user()->hasRole('studentafair'))    
              <li class="sidebar-item">
                <a href="{{ url('CounsellingAssistance') }}"
                class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu">Counselling Assistance</span></a
                >
              </li>
              @endif
              @endif
              @if (Auth::check())
              @if (Auth::user()->hasRole('hod')&& Auth::user()->hasRole('bdscoordinator'))
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                 href="{{ url('stats') }}"

                  aria-expanded="false"
                  ><i class="mdi mdi-border-inside"></i
                  ><span class="hide-menu">Statistics</span></a
                >
              </li>
              @endif
              @endif
            </ul>
          </nav>
        </div>
      </aside>
      <div class="page-wrapper">
        <div class="page-breadcrumb">
         </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                
                <form action="{{url('/')}}/CounsellingRequest" method="post" id="signup-form" class="signup-form" enctype="multipart/form-data">
                  @csrf
                  <div class="row p-4 justify-content-center" id="successMessage">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        <i class="fa fa-check-circle"></i>
                        {{ session()->get('success') }}
                    </div>
                    @endif
                
                    @if(session()->has('error'))
                    <div class="alert alert-danger">
                        <i class="fa fa-exclamation-circle"></i>
                        {{ session()->get('error') }}
                    </div>
                    @endif
                  </div>
                    <div class="card-body">
                    {{-- <h3 align="center" class="card-title"  style="padding-bottom: 10px;"><b>Counselling Request</b></h3> --}}
                    <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-1 text-end control-label col-form-label"
                        ><b>Class ID </b></label>
                        <div class="col-sm-11">
                          <input
                          type="text"
                          class="form-control"
                          name="class_id" id="class_id"
                          placeholder="Class ID Here"
                          required
                        
                        />
                        </div>
                </div>
                    <div class="form-group row">
                    
                      <label
                      for="cono1"
                      class="col-sm-1 text-end control-label col-form-label"
                      ><b>Program</b></label>
                      <div class="col-sm-5">
                        <input
                        type="text"
                        class="form-control"
                        name="program" id="program"
                        placeholder="Program Here"
                        required>
                      </div>
                      <label
                        for="cono1"
                        class="col-sm-1 text-end control-label col-form-label"
                        ><b>Session </b></label>
                        <div class="col-sm-5">
                          <input
                          type="text"
                          class="form-control"
                          name="class_name" id="class_name"
                          placeholder="Session Here"
                          required
                          {{-- pattern="^\d+\syear$"
  title="Please enter a valid format (e.g., 1 year)" --}}
                        />
                        </div>
                      </div>
            
                    <div class="form-group row">
                      <label
                        for="fname"
                        class="col-sm-1 text-end control-label col-form-label"
                        ><b>Name</b></label
                      >
                      <div class="col-sm-5">
                        <input
                          type="text"
                          class="form-control"
                          name="name" id="name"
                          placeholder="Name Here"
                          required
                        />
                      </div>
                      <label
                      for="lname"
                      class="col-sm-1 text-end control-label col-form-label"
                      ><b>DOB</b></label
                    >
                    <div class="col-sm-5">
                      <input
                        type="text"
                        class="form-control"
                        name="dob" id="dob"
                        placeholder="DOB Here"
                        required
                      />
                    </div>
                    </div>
                   
                    <div class="form-group row">
                      <label
                      for="cono1"
                      class="col-sm-1 text-end control-label col-form-label"
                      ><b>Gender</b></label>
                      <div class="col-sm-5">
                        <select
                        class="select2 form-select shadow-none mt-3"
                        {{-- multiple="multiple"  --}}
                        name="gender" id="gender"
                        style="height: 36px; width: 100%"  required>
                        <option value="" disabled selected>Choose Gender</option>

                        <optgroup label="Gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </optgroup> 
                        </select>
                      </div>
                      <label
                      for="email1"
                      class="col-sm-1 text-end control-label col-form-label"
                      ><b>Contact</b></label
                    >
                    <div class="col-sm-5">
                      <input
                        type="text"
                        class="form-control"
                        name="phone" id="phone"
                        placeholder="Contact Number Here"
                        required
                      />
                    </div>
                      </div>
                     <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-1 text-end control-label col-form-label"
                        ><b>Email</b></label
                      >
                      <div class="col-sm-5">
                        <input
                          type="text"
                          class="form-control"
                          name="Email" id="Email"
                          placeholder="Email Here"
                          required
                        />
                      </div>
                      <label
                      for="cono1"
                      class="col-sm-1 text-end control-label col-form-label"
                      ><b>Reason</b></label>
                      <div class="col-sm-5">
                        <select
                        class="select2 form-select shadow-none mt-3"
                        name="reason" id="reason"

                        style="height: 36px; width: 100%"   required >
                        <optgroup label="Reason for referral">
                          <option value="Short Attendence">Short Attendence</option>
                          <option value="Low Grades">Low Grades</option>
                          <option value="Other Factor">Other Factor</option>

                        </optgroup> 
                        </select>
                      </div>
                    </div>
                    {{-- <div class="form-group row">
                      <label
                        for="cono1"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Contact No</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="cono1"
                          placeholder="Contact No Here"
                        />
                      </div>
                    </div> --}}
                   
                      <div class="form-group row">
                        <label
                          for="cono1"
                          class="col-sm-1 text-end control-label col-form-label"
                          ><b>Counselor</b></label
                        >
                        <div class="col-sm-5">
                          <input
                            type="text"
                            class="form-control"
                            id="counselor" name="counselor"
                            placeholder="Counselor"
                            required
                          />
                        </div>
                        <label
                        for="cono1"
                        class="col-sm-1 text-end control-label col-form-label"
                        ><b>Candidate history</b></label
                      >
                      <div class="col-sm-5">
                        <textarea class="form-control"  placeholder="Candidate's history" id="history" name="history" maxlength="5000" required
                        ></textarea>                       
                      </div>
                      </div>
                      
                      <div class="form-group row">
                        <label
                          for="cono1"
                          class="col-sm-1 text-end control-label col-form-label"
                          ><b>Comment</b></label
                        >
                        <div class="col-sm-11">
                          <textarea class="form-control" placeholder="Comments"  id="comments" name="comments"  maxlength="5000" required></textarea>                       
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="card-body">
                          <button type="submit"  class="btn btn-danger" name="submit" id="submit" class="form-submit" value="Submit" >Submit</button>

                        </div>
                      </div>

                    </div>
                    
                  </div>
                </form>
              </div>

            </div>
            <div class="col-md-3"></div>
        
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{-- <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
   

   
      $(".select2").select2();
      /*colorpicker*/
      $(".demo").each(function () {
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
</html>
