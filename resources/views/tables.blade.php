<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <title>Couneling Cell</title>
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
      href="../assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
    <link href="css/app.css" rel="stylesheet" media="all">
  </head>

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
                  <h1 style="color:  rgb(122, 22, 50); font-size:27px; font-weight: 800px; ">
                  <b> Counselling Cell</b>
                          </h1>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>
  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto">
                      <li class="nav-item d-md-none">
                        <a style="color: rgb(122, 22, 50);" href="{{ url('CounsellingRequest') }}" class="nav-link"><i
                                class="mdi mdi-all-inclusive"></i><span class="hide-menu">Counselling Request</span></a>
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
                                  <a style="color: rgb(122, 22, 50);" id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
  
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
      <style>
          .btn-secondary {
          color: #fff;
          background-color: #515355;
        }

        /* Style the dropdown menu items */
        .dropdown-menu {
        max-height: 150px; /* Adjust the maximum height as needed */
        overflow-y: auto;
      }
        .dropdown-item {
        padding: 5px; /* Adjust the padding as needed */
        margin: 7px 0; /* Adjust the margins as needed */
      }
        /* Style the dropdown button when it's expanded */
        .btn-secondary.dropdown-toggle:focus {
          box-shadow: none;
        }
        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        } 
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .modal-content {
            padding: 20px; /* Adjust the padding as needed */
        }
        table {
        margin-top: 20px; /* Adjust the value as needed */
        margin-bottom: 10px; /* Adjust the value as needed */
    }
    #referredCandidatesTable_info {
    display: none;
  }
    </style>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
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
               <li class="sidebar-item active">
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
        @if (Auth::user()->hasRole('hod') || Auth::user()->hasRole('bdscoordinator')|| Auth::user()->hasRole('ahscoordinator'))
        <li class="sidebar-item">
            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('stats') }}"
               aria-expanded="false">
                <i class="mdi mdi-border-inside"></i>
                <span class="hide-menu">Statistics</span>
            </a>
        </li>
    @endif
@endif

            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      

      <div class="page-wrapper">
        <div class="container-fluid">     
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  {{-- <h5 align="right" class="card-title">Dr. Sadia Aman</h5>
                  <h5 align="right" class="card-title">Counselor</h5> --}}

                  <div class="form-group row">
                    <div class="card-body">
                      @if (Auth::check())
                      @if (Auth::user()->hasRole('hod'))
                          <button type="button" class="btn btn-success" id="toggleTableButton1">
                              Open Cases
                          </button>
                          @elseif (Auth::user()->hasRole('mbbscoordinator'))
                          <button type="button" class="btn btn-success" id="toggleTableButton1">
                              Open Cases
                          </button>
                          @elseif (Auth::user()->hasRole('bdscoordinator'))
                          <button type="button" class="btn btn-success" id="toggleTableButton1">
                              Open Cases
                          </button>
                          @elseif (Auth::user()->hasRole('ahscoordinator'))
                          <button type="button" class="btn btn-success" id="toggleTableButton1">
                              Open Cases
                          </button>
                          @else                 
                      @endif
                      @if (!Auth::user()->hasRole('mbbs1')&& !Auth::user()->hasRole('mbbs2')&& !Auth::user()->hasRole('mbbs3')&& !Auth::user()->hasRole('mbbs4')&& !Auth::user()->hasRole('mbbs5')
                      && !Auth::user()->hasRole('bds1')&& !Auth::user()->hasRole('bds2')&& !Auth::user()->hasRole('bds3')&& !Auth::user()->hasRole('bds4')&& !Auth::user()->hasRole('psychiatrist')&& !Auth::user()->hasRole('psychologist')&& !Auth::user()->hasRole('dptcounselor')
                  && !Auth::user()->hasRole('mltcounselor')&& !Auth::user()->hasRole('bsncounselor')&& !Auth::user()->hasRole('prncounselor')&& !Auth::user()->hasRole('exam')&& !Auth::user()->hasRole('studentafair')) <!-- Check if the user does not have 'mbbs' role -->
                      <button type="button" class="btn btn-secondary" id="toggleTableButtonr">
                          Assigned to Me
                      </button>
                  @endif
                  @if (!Auth::user()->hasRole('hod')&& !Auth::user()->hasRole('mbbscoordinator')&& !Auth::user()->hasRole('bdscoordinator')&& !Auth::user()->hasRole('ahscoordinator')) 
                    <button type="button" class="btn btn-success" id="toggleTableButton1">
                      Assigned to me
                  </button>
                  @endif

                      <button type="button" class="btn btn-danger" id="toggleTableButton">
                        My Appointements
                    </button>
                   
                    <button type="button" class="btn btn-info" id="toggleTableButton2">My Follow ups</button>
                  @endif
                      
                      <script>
                  $(document).ready(function() {
                $("#toggleTableButton1").click(function() {
                  $("#zero_config").toggle();
                  $("#referredCandidatesTable").hide();
                  $("#myTable").hide();
                  $("#Tablef").hide(); // Hide Tablef when other buttons are clicked
                  $("#zero_config").show();
                });

                $("#toggleTableButton").click(function() {
                  $("#myTable").toggle();
                  $("#zero_config").hide();
                  $("#referredCandidatesTable").hide();
                  $("#Tablef").hide(); // Hide Tablef when other buttons are clicked
                  $("#myTable").show();
                });

                $("#toggleTableButtonr").click(function() {
                  $("#referredCandidatesTable").toggle();
                  $("#zero_config").hide();
                  $("#myTable").hide();
                  $("#Tablef").hide(); // Hide Tablef when other buttons are clicked
                  $("#referredCandidatesTable").show();
                });

                $("#toggleTableButton2").click(function() {
                  $("#Tablef").toggle();
                  $("#zero_config").hide();
                  $("#myTable").hide();
                  $("#referredCandidatesTable").hide();
                  $("#Tablef").show();

                });

                // Add any additional click event handlers for other buttons if needed
              });

                  function openModal() {
                            var modal = document.getElementById('myModal');
                            modal.style.display = 'block';
                        }

                   function closeModal() {
                            var modal = document.getElementById('myModal');
                            modal.style.display = 'none';
                        }
                    function handleAction(action) {
                        alert("Selected Action: " + action);
                    }            
                      </script>              
                        <div class="table-responsive">
                          <table class="table table-bordered" id="referredCandidatesTable" style="display: none;">
                            <thead>
                              <tr>
                                <th><b>Class ID</b></th>
                               <th><b>Name</b></th>
                               <th><b>Date</b></th>
                               <th><b>Request ID</b></th>                      
                                <th><b>Counselor Name</b></th>                           
                               <th><b>Reason for referal</b></th>
                               <th><b>Details</b></th>
                               <th><b>Appointment</b></th>
     
                             </tr>
                            </thead>
                            <tbody>  
                              @role('bdscoordinator')       
                              @foreach ($bdsreferedCandidates as $candidate)
                              <?php
                                $desiredValue = Str::before($candidate['class_id'], '-');
                                $classParts = explode('-', Auth::user()->dep_id);
                                $mPrefix = $classParts[0];                                      
                              ?>
                                @if ((strpos($mPrefix, 'D') !== false && $mPrefix == $desiredValue && $casecloseCandidates->contains('request_id', $candidate['request_id'])) && $candidate['nonappointed'] == 0)
                                <tr>
                                    <td>{{$candidate['class_id']}}</td>
                                    <td>{{$candidate['name']}}</td>
                                    <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>

                                    <td>{{$candidate['request_id']}}</td>
                                    <td>{{ $candidate['counselor'] }}</td>
                                    <td>{{$candidate['reason']}}</td>
                                    <td>
                                      <a href="{{ route('studentAppointments', $candidate->class_id) }}" class="btn btn-secondary presentable-link">
                                          Details
                                      </a>
                                  </td>
                                  <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#myModal"
                                        data-class="{{ $candidate['class_id'] }}"
                                        data-name="{{ $candidate['name'] }}"
                                        data-request="{{ $candidate['request_id'] }}"
                                        data-counselor="{{ $candidate['counselor'] }}"
                                        data-reason="{{ $candidate['reason'] }}"
                                    >Appointment</button>
                                </td>  
                                </tr>            
                                @endif                     
                              @endforeach
                                  @elserole('mbbscoordinator')
                                  @foreach ($mbbsreferedCandidates as $candidate)
                                  <?php
                                    $desiredValue = Str::before($candidate['class_id'], '-');
                                    $classParts = explode('-', Auth::user()->dep_id);
                                    $mPrefix = $classParts[0];                                      
                                  ?>
                                @if ((strpos($mPrefix, 'M') !== false && $mPrefix == $desiredValue && $casecloseCandidates->contains('request_id', $candidate['request_id'])) && $candidate['nonappointed'] == 0)
                                <tr>
                                        <td>{{$candidate['class_id']}}</td>
                                        <td>{{$candidate['name']}}</td>
                                        <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>

                                        <td>{{$candidate['request_id']}}</td>
                                        <td>{{ $candidate['counselor'] }}</td>
                                        <td>{{$candidate['reason']}}</td>
                                        <td>
                                          <a href="{{ route('studentAppointments', $candidate->class_id) }}" class="btn btn-secondary presentable-link">
                                              Details
                                          </a>
                                      </td>
                                      <td>
                                        <button type="button" class="btn btn-secondary appointment-button"
                                            data-toggle="modal" data-target="#myModal"
                                            data-class="{{ $candidate['class_id'] }}"
                                            data-name="{{ $candidate['name'] }}"
                                            data-request="{{ $candidate['request_id'] }}"
                                            data-counselor="{{ $candidate['counselor'] }}"
                                            data-reason="{{ $candidate['reason'] }}"
                                        >Appointment</button>
                                    </td>  
                                    </tr>            
                                    @endif                     
                                  @endforeach
                                  @elserole('ahscoordinator')
                                @foreach ($ahsreferedCandidates as $candidate)
                                @if ( Illuminate\Support\Str::startsWith($candidate['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-'])&& $candidate['nonappointed'] == 0)

                                <tr data-request="{{$candidate['request_id'] }}">
                                            <td>{{ $candidate['class_id'] }}</td>
                                            <td>{{ $candidate['name'] }}</td>
                                            <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>

                                            <td>{{$candidate['request_id'] }}</td>
                                            @if (Auth::user()->name !== $candidate['counselor'])
                                                <td>{{ $candidate['counselor'] }}</td>
                                            @endif  
                                            <td>{{ $candidate['reason'] }}</td>
                                            <td>
                                              <a href="{{ route('studentAppointments', $candidate->class_id) }}" class="btn btn-secondary presentable-link" >
                                                  Details
                                              </a>
                                          </td>
                                          <td>
                                            <button type="button" class="btn btn-secondary appointment-button"
                                                data-toggle="modal" data-target="#myModal"
                                                data-class="{{ $candidate['class_id'] }}"
                                                data-name="{{ $candidate['name'] }}"
                                                data-request="{{ $candidate['request_id'] }}"
                                                data-counselor="{{ $candidate['counselor'] }}"
                                                data-reason="{{ $candidate['reason'] }}"
                                            >Appointment</button>
                                        </td>                                
                                        </tr>
                                        @endif
                                @endforeach
                                  @elserole('hod')
                                  @foreach ($referedCandidates as $candidate)
                                  @if ($candidate['nonappointed'] == 0)
                                  <tr>
                                        <td>{{$candidate['class_id']}}</td>
                                        <td>{{$candidate['name']}}</td>
                                        <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                        <td>{{$candidate['request_id']}}</td>
                                        <td>{{$candidate['counselor']}}</td>
                                        <td>{{$candidate['reason']}}</td>
                                        <td>
                                          <a href="{{ route('studentAppointments', $candidate->class_id) }}" class="btn btn-secondary presentable-link">
                                              Details
                                          </a>
                                      </td>
                                        <td>
                                            <button type="button" class="btn btn-secondary appointment-button"
                                                data-toggle="modal" data-target="#myModal"
                                                data-class="{{ $candidate['class_id'] }}"
                                                data-name="{{ $candidate['name'] }}"
                                                data-request="{{ $candidate['request_id'] }}"
                                                data-counselor="{{ $candidate['counselor'] }}"
                                                data-reason="{{ $candidate['reason'] }}"
                                            >Appointment</button>
                                        </td>  
                                      </tr>
                                      @endif
                                  @endforeach                                 
                                @endrole
                            </tbody>
                        </table>
                      </div>                
                    {{-- rolesofappointedcandidatesbutton --}}
                      <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="myTable" style="display: none;">
                          <thead>
                            <tr>
                              <th><b>Class ID</b></th>
                             <th><b>Name</b></th>
                             <th><b>Date</b></th>
                             <th><b>Request ID</b></th>
                             @php
                             $hideCounselorColumn = false; // Initialize the variable
                         @endphp           
                         @foreach ($emp as $e)
                             @if (Auth::user()->name === $e['counselor'])
                                 @php
                                     $hideCounselorColumn = true; // Set the variable to true
                                 @endphp
                             @endif
                         @endforeach
                             @if (!$hideCounselorColumn)
                                     <th><b>Counselor Name</b></th>
                                 @endif
                             <th><b>Reason for referal</b></th>
                             <th><b>Actions</b></th>
   
                           </tr>
                          </thead>
                          <tbody>
                            <!-- role1mbbs1 -->
                            @role('mbbs1')
                            @php
                            $uniqueClassIds = [];
                          @endphp
                              @foreach ($appointedCandidates as $candidate)
                              <?php
                                $parts = explode('-', $candidate['class_id']);
                                $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                              ?>
                               @if (strpos($desiredValue, 'M-24') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                               @if (!in_array($candidate['class_id'], $uniqueClassIds))
                               @php
                                 $uniqueClassIds[] = $candidate['class_id'];
                               @endphp
                                  <tr>
                                    <td>{{$candidate['class_id']}}</td>
                                    <td>{{$candidate['name']}}</td>
                                    <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                    <td>{{$candidate['request_id']}}</td> 
                                    @if (!$hideCounselorColumn)
                                    <td>{{ $candidate['counselor'] }}</td>
                                   @endif 
                                    <td>{{$candidate['reason']}}</td>
                                    <!-- formshereee -->
                                    <div class="modal fade" id="myModalhod">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Remarks</h2>
                                              <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf           
                                                <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                               <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                               <div class="form-group">
                                                  <label for="message">HOD:</label>
                                                  <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                              </div>
                                                <div class="form-group">
                                                  <label for="message">Assessment:</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                  <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                    @csrf
                  
                                    <div class="modal fade" id="myModalre">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">ReAppointment</h2>
                                                <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                    <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                <div class="form-group">
                                                    <label for="date">Date:</label>
                                                    <input type="date" class="form-control" id="date" name="date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="time">Time:</label>
                                                    <input type="time" class="form-control" id="time" name="time" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comments">Assessment:</label>
                                                    <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-danger" >Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                        <div class="modal fade" id="myModalcor">
                                        <div class="modal-dialog modal-dialog-centered">
                                         <div class="modal-content">
                                          <span class="close" data-dismiss="modal">&times;</span>
                                          <h2 class="text-center">Remarks</h2>
                                          <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                          @csrf   '
                                          <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                          <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                           <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                          <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                          <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                           <div class="form-group">
                                          <label for="message">Coordinator:</label>
                                          <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                          {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                           </div>
                                            <div class="form-group">
                                           <label for="message">Assessment:</label>
                                             <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                          </div>            
                                           <button type="submit" class="btn btn-danger">Submit</button>
                                          </form>
                                            </div>
                                           </div>
                                          </div>
                                          {{-- psychologist --}}
                                        <div class="modal fade" id="myModalpcho">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Remarks</h2>
                                                  <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf           
                                                    <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                    <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                    <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                      <label for="message">Psychologist:</label>
                                                      <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                      {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="message">Assessment:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div> 
                                    {{--pyschiatristcode --}}
                                    <div class="modal fade" id="myModalpchia">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Remarks</h2>
                                              <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf  
                                                <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                 <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                              <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                              <div class="form-group">
                                                  <label for="message">Psychiatrist:</label>
                                                  <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                  {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                </div>
                                                <div class="form-group">
                                                  <label for="message">Assessment:</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                      {{-- followupformm --}}
                                      <div class="modal fade" id="myModalfollow">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Follow up</h2>
                                                <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf     
                                                  <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                 <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                  <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Follow up:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- casecloseform --}}
                                    <div class="modal fade" id="myModalclose">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Case Close</h2>
                                              <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf   
                                                <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                              <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                  <label for="message">Message</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                    <td>
                                      <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Action
                                        </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                            <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                             data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                            <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                            <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                            <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                            <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                            <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                            <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                            <!-- Add similar onclick handlers for other actions -->
                                        </div>
                                      </div>
                                    </td>        
                                  </tr>
                                  @endif     
                                @endif     
                                                
                              @endforeach
                            @elserole('mbbs2')
                            @php
                            $uniqueClassIds = [];
                          @endphp
                              @foreach ($appointedCandidates as $candidate)
                              <?php
                                $parts = explode('-', $candidate['class_id']);
                                $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                              ?>
                               @if (strpos($desiredValue, 'M-23') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                               @if (!in_array($candidate['class_id'], $uniqueClassIds))
                               @php
                                 $uniqueClassIds[] = $candidate['class_id'];
                               @endphp
                                  <tr>
                                    <td>{{$candidate['class_id']}}</td>
                                    <td>{{$candidate['name']}}</td>
                                    <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                    <td>{{$candidate['request_id']}}</td> 
                                    @if (!$hideCounselorColumn)
                                    <td>{{ $candidate['counselor'] }}</td>
                                   @endif 
                                    <td>{{$candidate['reason']}}</td>
                                    <!-- formshereee -->
                                    <div class="modal fade" id="myModalhod">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Remarks</h2>
                                              <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf           
                                                <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                               <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                               <div class="form-group">
                                                  <label for="message">HOD:</label>
                                                  <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                              </div>
                                                <div class="form-group">
                                                  <label for="message">Assessment:</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                  <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                    @csrf
                  
                                    <div class="modal fade" id="myModalre">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">ReAppointment</h2>
                                                <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                    <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                    <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                <div class="form-group">
                                                    <label for="date">Date:</label>
                                                    <input type="date" class="form-control" id="date" name="date" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="time">Time:</label>
                                                    <input type="time" class="form-control" id="time" name="time" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="comments">Assessment:</label>
                                                    <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-danger" >Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                        <div class="modal fade" id="myModalcor">
                                        <div class="modal-dialog modal-dialog-centered">
                                         <div class="modal-content">
                                          <span class="close" data-dismiss="modal">&times;</span>
                                          <h2 class="text-center">Remarks</h2>
                                          <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                          @csrf   '
                                          <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                          <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                           <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                          <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                          <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                           <div class="form-group">
                                          <label for="message">Coordinator:</label>
                                          <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                          {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                           </div>
                                            <div class="form-group">
                                           <label for="message">Assessment:</label>
                                             <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                          </div>            
                                           <button type="submit" class="btn btn-danger">Submit</button>
                                          </form>
                                            </div>
                                           </div>
                                          </div>
                                          {{-- psychologist --}}
                                        <div class="modal fade" id="myModalpcho">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Remarks</h2>
                                                  <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf           
                                                    <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                    <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                    <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                      <label for="message">Psychologist:</label>
                                                      <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                      {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="message">Assessment:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div> 
                                    {{--pyschiatristcode --}}
                                    <div class="modal fade" id="myModalpchia">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Remarks</h2>
                                              <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf  
                                                <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                 <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                              <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                              <div class="form-group">
                                                  <label for="message">Psychiatrist:</label>
                                                  <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                  {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                </div>
                                                <div class="form-group">
                                                  <label for="message">Assessment:</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                      {{-- followupformm --}}
                                      <div class="modal fade" id="myModalfollow">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Follow up</h2>
                                                <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf     
                                                  <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                 <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                  <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Follow up:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- casecloseform --}}
                                    <div class="modal fade" id="myModalclose">
                                      <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                              <span class="close" data-dismiss="modal">&times;</span>
                                              <h2 class="text-center">Case Close</h2>
                                              <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                @csrf   
                                                <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                              <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                  <label for="message">Message</label>
                                                  <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                              </div>            
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                    <td>
                                      <div class="btn-group">
                                        <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Action
                                        </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                            <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                             data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                            <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                            <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                            <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                            <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                            <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                            <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                            data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                            <!-- Add similar onclick handlers for other actions -->
                                        </div>
                                      </div>
                                    </td>        
                                  </tr>
                                  @endif     
                                @endif     
                                                
                              @endforeach
                              {{-- role3 --}}
                              @elserole('mbbs3')
                              @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desired = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                  ?>
                                  @if (strpos($desired, 'M-22') !== false && Auth::user()->dep_id == $desired && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif                     

                                  @endif                     
                                @endforeach
                              @elserole('mbbs4')
                              @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                  ?>
                                  @if (strpos($desiredValue, 'M-21') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr> 
                                    @endif
 
                                  @endif
                                @endforeach
                              @elserole('mbbs5')
                              @php
                                $uniqueClassIds = [];
                              @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                  ?>
                                  @if (strpos($desiredValue, 'M-20') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                            
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr>  
                                    @endif

                                  @endif
                                @endforeach
                                @elserole('mbbs5')
                                @php
                            $uniqueClassIds = [];
                          @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                  ?>
                                  @if ( Illuminate\Support\Str::startsWith($candidate['class_id'], ['M-19', 'M-18'])&& $referals->contains('request_id', $candidate['request_id'])  && $candidate['nonappointed'] == 0)
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                  <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr> 
                                    @endif
 
                                  @endif
                                @endforeach
                                <!-- bds1ccounselorrolehere -->
                                @elserole('bds1')
                                @php
                              $uniqueClassIds = [];
                              @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                    $value = Auth::user()->dep_id;
                                  
                                  ?>
                                  @if (strpos($desiredValue, 'D-24') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr>  
                                    @endif
                                  @endif
                                @endforeach
                                @elserole('bds2')
                                @php
                              $uniqueClassIds = [];
                              @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                    $value = Auth::user()->dep_id;
                                  
                                  ?>
                                  @if (strpos($desiredValue, 'D-23') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr>  
                                    @endif
                                  @endif
                                @endforeach
                                @elserole('bds3')
                                @php
                                $uniqueClassIds = [];
                              @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                    $value = Auth::user()->dep_id;
                                  ?>
                                  @if (strpos($desiredValue, 'D-22') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr> 
                                    @endif 
                                  @endif
                                @endforeach
                                @elserole('bds4')
                                @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                    $depPrefix = Str::before(Auth::user()->dep_id, '-');
                                    
                                  ?>
                                  @if (($depPrefix == 'D' && ($desiredValue == 'D-21' ||$desiredValue == 'D-20' || $desiredValue == 'M-18'))  && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                    @php
                                      $uniqueClassIds[] = $candidate['class_id'];
                                    @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr>  
                                    @endif

                                  @endif
                                @endforeach
                                @elserole('bds4')
                                @php
  $uniqueClassIds = [];
@endphp
                                @foreach ($appointedCandidates as $candidate)
                                  <?php
                                    $parts = explode('-', $candidate['class_id']);
                                    $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                                    $value = Auth::user()->dep_id;
                                   
                                  ?>
                                  @if (strpos($desiredValue, 'D-20') !== false && Auth::user()->dep_id == $desiredValue && $referals->contains('request_id', $candidate['request_id']))
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                   
                                    </tr>  
                                    @endif

                                  @endif
                                @endforeach
                                @elserole('mbbscoordinator')
                                @php
                                $uniqueClassIds = [];
                              @endphp
                                @foreach ($mbbsCorappointed as $candidate)
                                <?php
                                  $desiredValue = Str::before($candidate['class_id'], '-');
                                  // echo " desired ";
                                  // echo $desiredValue;
                                  $classParts = explode('-', Auth::user()->dep_id);
                                  $mPrefix = $classParts[0];
                                  // echo " first-part ";
                                  // echo $mPrefix;
                                  // $value = Auth::user()->dep_id;
                                  // echo " auth-dep_id ";
                                  // echo $value;
                                  
                                ?>
                                  @if (strpos($mPrefix, 'M') !== false && $mPrefix == $desiredValue && $referals->contains('request_id', $candidate['request_id']) )
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                            
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                     @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Counselor:</label>
                                            <input class="form-control" id="coordinator" placeholder="Enter Counselor name">
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            <!-- referbacktocounselorform -->
                                            <div class="modal fade" id="myModalcounselor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('counselor') }}" method="post"  id="counselor-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcounselor" name="class_idcounselor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecounselor" name="namecounselor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcounselor" name="request_idcounselor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <!-- <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" readonly> -->
                                            <input type="text" id="reasoncounselor" name="reasoncounselor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Refer Back to Counselor:</label>
                                            <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                             <a class="dropdown-item counselor-link" href="#" data-toggle="modal" data-target="#myModalcounselor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to counselor</a> 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif                     

                                  @endif                     
                                @endforeach
                               @elserole('bdscoordinator')
                               @php
  $uniqueClassIds = [];
@endphp
                                @foreach ($bdsCorappointed as $candidate)
                                <?php
                                  $desiredValue = Str::before($candidate['class_id'], '-');
                                  $classParts = explode('-', Auth::user()->dep_id);
                                  $mPrefix = $classParts[0];                                                  
                                ?>
                                  @if (strpos($mPrefix, 'D') !== false && $mPrefix == $desiredValue && $referals->contains('request_id', $candidate['request_id']) )
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                     @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Counselor:</label>
                                            <input class="form-control" id="coordinator" placeholder="Enter Counselor name">
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                               <!-- referbacktocounselorform -->
                                               <div class="modal fade" id="myModalcounselor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('counselor') }}" method="post"  id="counselorappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcounselor" name="class_idcounselor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecounselor" name="namecounselor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcounselor" name="request_idcounselor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <!-- <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" readonly> -->
                                            <input type="text" id="reasoncounselor" name="reasoncounselor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Refer Back to Counselor:</label>
                                            <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item counselor-link" href="#" data-toggle="modal" data-target="#myModalcounselor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to counselor</a>
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif                     

                                  @endif                     
                                @endforeach
                                
                                @elserole('dptcounselor')
                                @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($appointedCandidates as $candidate)
                                <?php
                                  $desiredValue = Str::before($candidate['class_id'], '-');
                                  // echo " desired ";
                                  // echo $desiredValue;
                                  $classParts = explode('-', Auth::user()->dep_id);
                                  $mPrefix = $classParts[0];
                                  // echo " first-part ";
                                  // echo $mPrefix;
                                  // $value = Auth::user()->dep_id;
                                  // echo " auth-dep_id ";
                                  // echo $value;
                                  
                                ?>
                                  @if ( Illuminate\Support\Str::startsWith($candidate['class_id'], ['DPT-', 'MLT-'])&& $referals->contains('request_id', $candidate['request_id'])  && $candidate['nonappointed'] == 0)
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                    @php
                                      $uniqueClassIds[] = $candidate['class_id'];
                                    @endphp


                                  {{-- @if (strpos($mPrefix, 'DPT') !== false && $mPrefix == $desiredValue && $casecloseCandidates->contains('request_id', $candidate['request_id']) ) --}}
                                    <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" placeholder="Dr. Sadaf Jafar" value="Dr. Sadaf Jafar" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif                     
                                  @endif                     
                                @endforeach
                           
                                @elserole('bsncounselor')
                                @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($appointedCandidates as $candidate)
                                <?php
                                  $desiredValue = Str::before($candidate['class_id'], '-');
                                  // echo " desired ";
                                  // echo $desiredValue;
                                  $classParts = explode('-', Auth::user()->dep_id);
                                  $mPrefix = $classParts[0];
                                  // echo " first-part ";
                                  // echo $mPrefix;
                                  // $value = Auth::user()->dep_id;
                                  // echo " auth-dep_id ";
                                  // echo $value;
                                  
                                ?>
                                  @if ( Illuminate\Support\Str::startsWith($candidate['class_id'], ['PRN-', 'BSN-'])&& $referals->contains('request_id', $candidate['request_id']) && $candidate['nonappointed'] == 0)
                                  @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                  @php
                                    $uniqueClassIds[] = $candidate['class_id'];
                                  @endphp
                                  <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      @if (!$hideCounselorColumn)
                                      <td>{{ $candidate['counselor'] }}</td>
                                   @endif
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" placeholder="Dr. Sadaf Jafar" value="Dr. Sadaf Jafar" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif                     
                                  @endif                     
                                @endforeach
                           
                                @elserole('psychologist')
                                @foreach ($pchoappointed as $candidate)
                                <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      <td>{{$candidate['counselor']}}</td>
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              {{-- <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a> --}}
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                                    
                                @endforeach
                                @elserole('psychiatrist')
                                @foreach ($pchiappointed as $candidate)
                                <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>

                                      <td>{{$candidate['request_id']}}</td>
                                      <td>{{$candidate['counselor']}}</td>
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a>                                 
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              {{-- <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a> --}}
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                                    
                                @endforeach
                                @elserole('hod')
                                @php
                              $uniqueClassIds = [];
                            @endphp
                                @foreach ($hodappointed as $candidate )
                                @if ($referals->contains('request_id', $candidate['request_id']))
                                @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                @php
                                  $uniqueClassIds[] = $candidate['class_id'];
                                @endphp
                                <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      <td>{{$candidate['counselor']}}</td>
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                          <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" name="coordinator" value="{{ $coordinatorDName }}" readonly>
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                               <!-- referbacktocounselorform -->
                                               <div class="modal fade" id="myModalcounselor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('counselor') }}" method="post"  id="counselorappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcounselor" name="class_idcounselor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecounselor" name="namecounselor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcounselor" name="request_idcounselor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <!-- <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" readonly> -->
                                            <input type="text" id="reasoncounselor" name="reasoncounselor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Refer Back to Counselor:</label>
                                            <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                              <a class="dropdown-item cor-link" href="#" data-toggle="modal" data-target="#myModalcor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to coordinator</a> 
                                                 <a class="dropdown-item counselor-link" href="#" data-toggle="modal" data-target="#myModalcounselor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to counselor</a>                                  -->
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              {{-- <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a> --}}
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>                       
                                    </tr>
                                    @endif
                                    @endif
                                @endforeach
                                @elserole('ahscoordinator')
                                @php
                                  $uniqueClassIds = [];
                                @endphp
                                @foreach ($ahsCorappointed as $candidate)
                                @if (Illuminate\Support\Str::startsWith($candidate['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-'])&& $referals->contains('request_id', $candidate['request_id']))
                                @if (!in_array($candidate['class_id'], $uniqueClassIds))
                                @php
                                  $uniqueClassIds[] = $candidate['class_id'];
                                @endphp
                                <tr>
                                      <td>{{$candidate['class_id']}}</td>
                                      <td>{{$candidate['name']}}</td>
                                      <td>{{ \Carbon\Carbon::parse($candidate['created_at'])->format('d-m-Y') }}</td>
                                      <td>{{$candidate['request_id']}}</td>
                                      <td>{{$candidate['counselor']}}</td>
                                      <td>{{$candidate['reason']}}</td>
                                      <div class="modal fade" id="myModalhod">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('hod') }}" method="post" id="hod-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf           
                                                  <input type="text" id="class_idhod" name="class_idhod" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="namehod" name="namehod" class="form-control" value="{{$candidate['name']}}" readonly>
                                                  <input type="text" id="request_idhod" name="request_idhod" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorhod" name="counselorhod" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                 <input type="text" id="reasonhod" name="reasonhod" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                 <div class="form-group">
                                                    <label for="message">HOD:</label>
                                                    <input class="form-control" id="hod" name="hod" placeholder="Dr Saffia Shaukhat" value="Dr Saffia Shaukhat" readonly >
                                                </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="{{ route('reappointment') }}" method="post" id="reappointment-form" class="signup-form" enctype="multipart/form-data">
                                      @csrf
                    
                                      <div class="modal fade" id="myModalre">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">ReAppointment</h2>
                                                  <input type="text" id="class_idre" name="class_idre" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                                  <input type="text" id="namere" name="namere" class="form-control" value="{{ $candidate['name'] }}"  readonly>
                                                  <input type="text" id="request_idre" name="request_idre" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorre" name="counselorre" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  {{-- <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                                      <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly> --}}
                                                      <input type="text" id="reasonre" name="reasonre" class="form-control" value="{{ $candidate['reason'] }}" readonly>
                                                  <div class="form-group">
                                                      <label for="date">Date:</label>
                                                      <input type="date" class="form-control" id="date" name="date" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="time">Time:</label>
                                                      <input type="time" class="form-control" id="time" name="time" required>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="comments">Assessment:</label>
                                                      <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                                  </div>
                                                  <button type="submit" class="btn btn-danger" >Submit</button>
                                              </div>
                                          </div>
                                      </div>
                                  </form>
                                  <div class="modal fade" id="myModalcor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('coordinator') }}" method="post"  id="corappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcor" name="class_idcor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecor" name="namecor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcor" name="request_idcor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <input type="text" id="counselorcor" name="counselorcor" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                            <input type="text" id="reasoncor" name="reasoncor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Coordinator:</label>
                                            <input class="form-control" id="coordinator" placeholder="Enter Counselor name">
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div> 
                                                  <!-- referbacktocounselorform -->
                                                  <div class="modal fade" id="myModalcounselor">
                                          <div class="modal-dialog modal-dialog-centered">
                                           <div class="modal-content">
                                            <span class="close" data-dismiss="modal">&times;</span>
                                            <h2 class="text-center">Remarks</h2>
                                            <form action="{{ route('counselor') }}" method="post"  id="counselorappointment-form" class="signup-form" enctype="multipart/form-data">
                                            @csrf   '
                                            <input type="text" id="class_idcounselor" name="class_idcounselor" class="form-control" value="{{ $candidate['class_id'] }}" readonly>
                                            <input type="text" id="namecounselor" name="namecounselor" class="form-control" value="{{ $candidate['name'] }}"  readonly>        
                                             <input type="text" id="request_idcounselor" name="request_idcounselor" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                            <!-- <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" readonly> -->
                                            <input type="text" id="reasoncounselor" name="reasoncounselor" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                             <div class="form-group">
                                            <label for="message">Refer Back to Counselor:</label>
                                            <input type="text" id="counselorc" name="counselorc" class="form-control" value="{{$candidate['counselor']}}" >
                                            {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                             </div>
                                              <div class="form-group">
                                             <label for="message">Assessment:</label>
                                               <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            </div>            
                                             <button type="submit" class="btn btn-danger">Submit</button>
                                            </form>
                                              </div>
                                             </div>
                                            </div>
                                            {{-- psychologist --}}
                                          <div class="modal fade" id="myModalpcho">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <span class="close" data-dismiss="modal">&times;</span>
                                                    <h2 class="text-center">Remarks</h2>
                                                    <form action="{{ route('pcho') }}" method="post"  id="pcho-form" class="signup-form" enctype="multipart/form-data">
                                                      @csrf           
                                                      <input type="text" id="class_idpcho" name="class_idpcho" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                      <input type="text" id="namepcho" name="namepcho" class="form-control" value="{{$candidate['name']}}" readonly>
                                                      <input type="text" id="request_idpcho" name="request_idpcho" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                      <input type="text" id="counselorpcho" name="counselorpcho" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                    <input type="text" id="reasonpcho" name="reasonpcho" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                        <label for="message">Psychologist:</label>
                                                        <input class="form-control" id="psychologist" name="psychologist" value="Miss.Azmat Shaheen" readonly>
                                                        {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="message">Assessment:</label>
                                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                    </div>            
                                                      <button type="submit" class="btn btn-danger">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> 
                                      {{--pyschiatristcode --}}
                                      <div class="modal fade" id="myModalpchia">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Remarks</h2>
                                                <form action="{{ route('pchia') }}" method="post"  id="pchia-form" class="signup-form" enctype="multipart/form-data">
                                                  @csrf  
                                                  <input type="text" id="class_idpchia" name="class_idpchia" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namepchia" name="namepchia" class="form-control" value="{{$candidate['name']}}" readonly>         
                                                  <input type="text" id="request_idpchia" name="request_idpchia" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorpchia" name="counselorpchia" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonpchia" name="reasonpchia" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                <div class="form-group">
                                                    <label for="message">Psychiatrist:</label>
                                                    <input class="form-control" id="psychiatrist" name="psychiatrist" value="Dr.Benish" readonly>
                                                    {{-- <input class="form-control" id="coordinator" name="coordinator" value="{{ Auth::check() ? Auth::user()->name : '' }}"  required> --}}
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="message">Assessment:</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        {{-- followupformm --}}
                                        <div class="modal fade" id="myModalfollow">
                                          <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                  <span class="close" data-dismiss="modal">&times;</span>
                                                  <h2 class="text-center">Follow up</h2>
                                                  <form action="{{ route('followup') }}" method="post"  id="follow-form" class="signup-form" enctype="multipart/form-data">
                                                    @csrf     
                                                    <input type="text" id="class_idfollow" name="class_idfollow" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                   <input type="text" id="namefollow" name="namefollow" class="form-control" value="{{$candidate['name']}}" readonly>          
                                                    <input type="text" id="request_idfollow" name="request_idfollow" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                    <input type="text" id="counselorfollow" name="counselorfollow" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                  <input type="text" id="reasonfollow" name="reasonfollow" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                    <div class="form-group">
                                                      <label for="message">Follow up:</label>
                                                      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                  </div>            
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                      {{-- casecloseform --}}
                                      <div id="case-container" class="modal fade" id="myModalclose">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <span class="close" data-dismiss="modal">&times;</span>
                                                <h2 class="text-center">Case Close</h2>
                                                <form action="{{ route('close') }}" method="post"  id="close-form" class="signup-form" enctype="multipart/form-data" onsubmit="submitForm()">
                                                  @csrf   
                                                  <input type="text" id="class_idclose" name="class_idclose" class="form-control" value="{{$candidate['class_id']}}" readonly>
                                                  <input type="text" id="nameclose" name="nameclose" class="form-control" value="{{$candidate['name']}}" readonly>             
                                                  <input type="text" id="request_idclose" name="request_idclose" class="form-control" value="{{$candidate['request_id']}}" readonly>
                                                  <input type="text" id="counselorclose" name="counselorclose" class="form-control" value="{{$candidate['counselor']}}" readonly>
                                                <input type="text" id="reasonclose" name="reasonclose" class="form-control" value="{{ $candidate['reason'] }}" readonly>                
                                                  <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                                </div>            
                                                  <button type="submit" class="btn btn-danger">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                      <td>
                                        <div class="btn-group">
                                          <button class="btn btn-secondary dropdown-toggle dropup" type="button" id="dropdownButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                          </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownButton1">
                                              <a class="dropdown-item reappointment-link" href="#" data-toggle="modal" data-target="#myModalre"  data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                               data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Reappoint</a>                           
                                             <a class="dropdown-item counselor-link" href="#" data-toggle="modal" data-target="#myModalcounselor" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                                 data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to counselor</a>                             
                                              <a class="dropdown-item pcho-link" href="#" data-toggle="modal" data-target="#myModalpcho" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychologist</a>
                                              <a class="dropdown-item pchia-link" href="#" data-toggle="modal" data-target="#myModalpchia" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to Psychiatrist</a>
                                              <a class="dropdown-item hod-link" href="#" data-toggle="modal" data-target="#myModalhod" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Refer to HOD</a>
                                              <a class="dropdown-item follow-link" href="#" data-toggle="modal" data-target="#myModalfollow" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Follow up</a>               
                                              <a class="dropdown-item close-link" href="#" data-toggle="modal" data-target="#myModalclose" data-class="{{$candidate['class_id']}}"data-name="{{$candidate['name']}}" data-request="{{$candidate['request_id']}}"
                                              data-counselor="{{$candidate['counselor']}}" data-reason="{{ $candidate['reason'] }}">Case Close</a>
                                              <!-- Add similar onclick handlers for other actions -->
                                          </div>
                                        </div>
                                      </td>             
                                    </tr>
                                    @endif
                                    @endif
                                @endforeach
                              @endrole
                          </tbody>
                      </table>
                    </div>

                    </div>
                  </div>            
                  <script>
                    $(document).ready(function () {
                      const appointmentButtons = document.querySelectorAll(".appointment-button");
                      appointmentButtons.forEach(button => {
                        button.addEventListener("click", function () {
                          const classId = this.getAttribute('data-class');
                          const name = this.getAttribute('data-name');
                          const requestId = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');

                          document.getElementById('class_id').value = classId;
                          document.getElementById('name').value = name;
                          document.getElementById('request_id').value = requestId;
                          document.getElementById('counselor').value = counselor;
                          document.getElementById('reason').value = reason;
                        });
                      });
                    
                      const reappointmentLinks = document.querySelectorAll(".reappointment-link");
                      reappointmentLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId2 = this.getAttribute('data-class');
                          const name2 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idre').value = classId2;
                          document.getElementById('namere').value = name2;
                          document.getElementById('request_idre').value = request;
                          document.getElementById('counselorre').value = counselor;
                          document.getElementById('reasonre').value = reason;
                        });
                      });
                      // forrefertocoordinatorr
                      const corLinks = document.querySelectorAll(".cor-link");
                     corLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId3 = this.getAttribute('data-class');
                          const name3 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idcor').value = classId3;
                          document.getElementById('namecor').value = name3;
                          document.getElementById('request_idcor').value = request;
                          document.getElementById('counselorcor').value = counselor;
                          document.getElementById('reasoncor').value = reason;
                        });
                      });
                      // forrefertocounselor
                      const counselorLinks = document.querySelectorAll(".counselor-link");
                      counselorLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId9 = this.getAttribute('data-class');
                          const name9 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idcounselor').value = classId9;
                          document.getElementById('namecounselor').value = name9;
                          document.getElementById('request_idcounselor').value = request;
                          document.getElementById('counselorc').value = counselor;
                          document.getElementById('reasoncounselor').value = reason;
                        });
                      });
                      // hodreferrtooo
                      const hodLinks = document.querySelectorAll(".hod-link");
                     hodLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId4 = this.getAttribute('data-class');
                          const name4 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idhod').value = classId4;
                          document.getElementById('namehod').value = name4;
                          document.getElementById('request_idhod').value = request;
                          document.getElementById('counselorhod').value = counselor;
                          document.getElementById('reasonhod').value = reason;
                        });
                      });
                      // pchorefertooo
                       const pchoLinks = document.querySelectorAll(".pcho-link");
                       pchoLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId5 = this.getAttribute('data-class');
                          const name5 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idpcho').value = classId5;
                          document.getElementById('namepcho').value = name5;
                          document.getElementById('request_idpcho').value = request;
                          document.getElementById('counselorpcho').value = counselor;
                          document.getElementById('reasonpcho').value = reason;
                        });
                      });
                    // pchiarefertooo
                    const pchiaLinks = document.querySelectorAll(".pchia-link");
                    pchiaLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId6 = this.getAttribute('data-class');
                          const name6 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          
                          document.getElementById('class_idpchia').value = classId6;
                          document.getElementById('namepchia').value = name6;
                          document.getElementById('request_idpchia').value = request;
                          document.getElementById('counselorpchia').value = counselor;
                          document.getElementById('reasonpchia').value = reason;
                        });
                      });
                    // followuprefertocode
                    const followLinks = document.querySelectorAll(".follow-link");
                    followLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId7 = this.getAttribute('data-class');
                          const name7 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idfollow').value = classId7;
                          document.getElementById('namefollow').value = name7;
                          document.getElementById('request_idfollow').value = request;
                          document.getElementById('counselorfollow').value = counselor;
                          document.getElementById('reasonfollow').value = reason;
                        });
                      });
                      // casecloseee
                      const closeLinks = document.querySelectorAll(".close-link");
                      closeLinks.forEach(link => {
                        link.addEventListener("click", function (event) {
                          event.preventDefault();
                          const classId8 = this.getAttribute('data-class');
                          const name8 = this.getAttribute('data-name');
                          const request = this.getAttribute('data-request');
                          const counselor = this.getAttribute('data-counselor');
                          const reason = this.getAttribute('data-reason');
                  
                          document.getElementById('class_idclose').value = classId8;
                          document.getElementById('nameclose').value = name8;
                          document.getElementById('request_idclose').value = request;
                          document.getElementById('counselorclose').value = counselor;
                          document.getElementById('reasonclose').value = reason;
                        });
                      });
                      
                      const detailButtons = document.querySelectorAll(".detail-button");
                      detailButtons.forEach(button => {
                        button.addEventListener("click", function (event) {
                          event.preventDefault();
                          const history = this.getAttribute('data-history'); 
                          const comments = this.getAttribute('data-comments');
                  
                          document.getElementById('shistory').value = history; 
                          document.getElementById('scomments').value = comments;
                        });                    
                      });             
                    });
                  </script>
                  
                  @if($e)
                  <form action="{{ route('appointment') }}" method="post" id="appointment-form" class="signup-form" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <span class="close" data-dismiss="modal">&times;</span>
                                <h2 class="text-center">Appointment</h2>
                                      <input type="text" id="class_id" name="class_id" class="form-control" value="{{ $e['class_id'] }}" readonly>
                                    <input type="text" id="name" name="name" class="form-control" value="{{ $e['name'] }}"  readonly>
                                <input type="text" id="request_id" name="request_id" class="form-control" value="{{ $e['request_id'] }}" readonly>
                                <input type="text" id="counselor" name="counselor" class="form-control" value="{{ $e['counselor'] }}" readonly>
                          
                                    <input type="text" id="reason" name="reason" class="form-control" value="{{ $e['reason'] }}" readonly>
                                <div class="form-group">
                                    <label for="date">Date:</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time:</label>
                                    <input type="time" class="form-control" id="time" name="time" required>
                                </div>
                                <div class="form-group">
                                    <label for="comments">Message:</label>
                                    <textarea class="form-control" id="comments" name="comments" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>  
                                                
                      {{-- endshereee --}}
                      {{-- detailssmodal --}}
                      <div class="modal fade" id="myModal2">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <span class="close" data-dismiss="modal">&times;</span>
                              <h2 class="text-center">Candidate History and Comments</h2>
                                  <div class="form-group">
                                      <label for="history">Candidate History:</label>
                                      <textarea class="form-control" id="shistory" name="history" rows="4" value="{{ $e['history'] }}" readonly></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="comments">Comments:</label>
                                      <textarea class="form-control" id="scomments" name="comments" rows="4"  value="{{ $e['comments'] }}" readonly></textarea>
                                  </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal fade" id="restrict">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <span class="close" data-dismiss="modal">&times;</span>
                            <h2 class="text-center">Appointment</h2>
                            <div class="modal-body">
                                <p class="text-center">You can't appoint open cases candidates.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="restrict1">
                  <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                          <span class="close" data-dismiss="modal">&times;</span>
                          <h2 class="text-center">Appointed Students</h2>
                          <div class="modal-body">
                              <p class="text-center">You can't take actions against any candidate.</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>
                              {{-- appointmentbuttontableee              --}}
                              @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                  <div class="table-responsive ">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered">
                      <thead>
                        <tr>
                            <th><b>Class ID</b></th>
                            <th><b>Name</b></th>
                            <th><b>Date</b></th>
                            <th><b>Request ID</b></th>
                
                            @php
                                $hideCounselorColumn = false; // Initialize the variable
                                $hideAppointmentColumn = false; // Initialize the variable
                            @endphp
                
                            @foreach ($emp as $e)
                                @if (Auth::user()->name === $e['counselor'])
                                    @php
                                        $hideCounselorColumn = true; // Set the variable to true
                                    @endphp
                                @endif
                            @endforeach
                
                            @if (Auth::user()->hasRole('hod') ||Auth::user()->hasRole('mbbscoordinator') || Auth::user()->hasRole('bdscoordinator') || Auth::user()->hasRole('ahscoordinator'))
                                @php
                                    $hideAppointmentColumn = true; // Set the variable to true for specified roles
                                @endphp
                            @endif              
                            @if (!$hideCounselorColumn)
                                <th><b>Counselor Name</b></th>
                            @endif             
                            <th><b>Reason for Referral</b></th>
                            <th><b>Details</b></th>
                            @if (Auth::user()->hasRole('hod') ||Auth::user()->hasRole('mbbscoordinator') || Auth::user()->hasRole('bdscoordinator') || Auth::user()->hasRole('ahscoordinator'))
                            <th><b>Comprehensive Details</b></th>
                            @endif
                            @if (!$hideAppointmentColumn)
                                <th><b>Appointment</b></th>
                            @endif
                            
                        </tr>
                    </thead>
                      <tbody>    
                        <!-- mbbs1role  -->
                        {{-- mbbs1councelorrrr --}}
                        @role('mbbs1')
                        @foreach ($emp as $e)
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-24') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2" data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}" >Details</button>
                        </td> 
                        {{-- <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                   
                        </tr>
                        @endif 
                        @endforeach  
                        
                        {{-- referbackdata --}}
                        @foreach ($referback as $e)
                   
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-24') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                      
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        {{-- <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2" data-history="{{ $e1['history'] }}"
                          data-comments="{{ $e1['comments'] }}" >Details</button>
                        </td>  --}}
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                   
                        </tr>
                        @endif 

                       @endforeach           
         
                        @elserole('mbbs2')
                        @foreach ($emp as $e)
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-23') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2" data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}" >Details</button>
                        </td> 
                        {{-- <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                   
                        </tr>
                        @endif 
                        @endforeach  

                        {{-- referbackdata --}}
                        @foreach ($referback as $e)
                   
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-23') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                      
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        {{-- <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2" data-history="{{ $e1['history'] }}"
                          data-comments="{{ $e1['comments'] }}" >Details</button>
                        </td>  --}}
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                   
                        </tr>
                        @endif 

                       @endforeach           
         
                       {{-- mbbs3councelorrrr --}}
                       @elserole('mbbs3')
                       @foreach ($emp as $e)
                           <?php
                           $parts = explode('-', $e['class_id']);
                           $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                           ?>
                       @if (strpos($desiredValue, 'M-22') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                       <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                        
                        <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        {{-- <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                              Details
                          </a>
                      </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                     
                       </tr>
                           @endif 
                       @endforeach
                       @foreach ($referback as $e)
                           <?php
                           $parts = explode('-', $e['class_id']);
                           $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                           ?>
                       @if (strpos($desiredValue, 'M-22') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                       <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                        
                        <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        {{-- <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                              Details
                          </a>
                      </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                     
                       </tr>
                           @endif 
                       @endforeach
                        {{-- mbbs4councelorrrr --}}
                        @elserole('mbbs4')
                        @foreach ($emp as $e)
                            <?php
                            $parts = explode('-', $e['class_id']);
                            $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                            ?>
                        
                        @if (strpos($desiredValue, 'M-21') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                          <td>{{ $e['request_id'] }}</td>
                          @if (Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                          <td>{{ $e['reason'] }}</td>
                          <td><button type="button" class="btn btn-secondary detail-button" 
                            data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                            data-comments="{{ $e['comments'] }}">Details</button>
                          </td> 
                          {{-- <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                Details
                            </a>
                        </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                    
                                </tr>
                            @endif 
                        @endforeach
                        @foreach ($referback as $e)
                            <?php
                            $parts = explode('-', $e['class_id']);
                            $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                            ?>
                        
                        @if (strpos($desiredValue, 'M-21') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                          <td>{{ $e['request_id'] }}</td>
                          @if (Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                          <td>{{ $e['reason'] }}</td>
                          <td><button type="button" class="btn btn-secondary detail-button" 
                            data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                            data-comments="{{ $e['comments'] }}">Details</button>
                          </td> 
                          {{-- <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                Details
                            </a>
                        </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                    
                                </tr>
                            @endif 
                        @endforeach
                        
                        {{-- mbbs5councelorrrr --}}
                        @elserole('mbbs5')
                        @foreach ($emp as $e)
                        <?php
                        $parts = explode('-', $e['class_id']);
                        $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        $depPrefix = Str::before(Auth::user()->dep_id, '-');
                        ?>

                        @if (($depPrefix == 'M' && ($desiredValue == 'M-20' ||$desiredValue == 'M-19' || $desiredValue == 'M-18')) && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                          <td>{{ $e['request_id'] }}</td>
                          @if ($desiredValue != 'M-18' && Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                          @endif       
                          <td>{{ $e['reason'] }}</td>
                          <td><button type="button" class="btn btn-secondary detail-button" 
                            data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                            data-comments="{{ $e['comments'] }}">Details</button>
                          </td>
                          {{-- <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                Details
                            </a>
                        </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td> 
                         </tr>
                            @endif 
                        @endforeach
                        @foreach ($referback as $e)
                        <?php
                        $parts = explode('-', $e['class_id']);
                        $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        $depPrefix = Str::before(Auth::user()->dep_id, '-');
                        ?>

                        @if (($depPrefix == 'M' && ($desiredValue == 'M-20' ||$desiredValue == 'M-19' || $desiredValue == 'M-18')) && $e['nonappointed'] == 0  )
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                          <td>{{ $e['request_id'] }}</td>
                          @if ($desiredValue != 'M-18' && Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                          @endif       
                          <td>{{ $e['reason'] }}</td>
                          <td><button type="button" class="btn btn-secondary detail-button" 
                            data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                            data-comments="{{ $e['comments'] }}">Details</button>
                          </td>
                          {{-- <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                Details
                            </a>
                        </td> --}}
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td> 
                         </tr>
                            @endif 
                        @endforeach
                      {{-- coordinatoroleee --}}
                      <!-- form1tabledata -->
                      @elserole('mbbscoordinator')
                      @php
                            $uniqueClassIds = [];
                          @endphp
                      @foreach ($emp as $e)
                        <?php
                          $desiredValue = Str::before($e['class_id'], '-');
                          $classParts = explode('-', Auth::user()->dep_id);
                          $mPrefix = $classParts[0];
                        ?>

                        @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                        @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                         <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                        {{-- <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#restrict"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                    
                     --}}
                        </tr>
                      </tr>
                      @endif 
                      @endif 
                      @endforeach
                      <!-- appointmenttabledata -->
                      @foreach ($appointedCandidates as $e)
                        <?php
                          $desiredValue = Str::before($e['class_id'], '-');
                          $classParts = explode('-', Auth::user()->dep_id);
                          $mPrefix = $classParts[0];
                        ?>

                        @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                        @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                         <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                        {{-- <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#restrict"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                    
                     --}}
                        </tr>
                      </tr>
                      @endif 
                      @endif 
                      @endforeach
                        <!-- mbbsreferredtabledata -->
                        @foreach ($mbbsreferedCandidates as $e)
                        <?php
                          $desiredValue = Str::before($e['class_id'], '-');
                          $classParts = explode('-', Auth::user()->dep_id);
                          $mPrefix = $classParts[0];
                        ?>

                        @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                        @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                         <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                        {{-- <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#restrict"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                    
                     --}}
                        </tr>
                      </tr>
                      @endif 
                      @endif 
                      @endforeach
                          <!-- followupCandidatestabledata -->
                          @foreach ($followupCandidates as $e)
                        <?php
                          $desiredValue = Str::before($e['class_id'], '-');
                          $classParts = explode('-', Auth::user()->dep_id);
                          $mPrefix = $classParts[0];
                        ?>

                        @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                        @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                         <td><button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}">Details</button>
                        </td> 
                        <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                        {{-- <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#restrict"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                    
                     --}}
                        </tr>
                      </tr>
                      @endif 
                      @endif 
                      @endforeach
                      @elserole('bds1')
                      @foreach ($emp as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-24') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td> 
                              {{-- <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td> --}}
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                           
                           </tr>
                         @endif 
                       @endforeach
                       @foreach ($referback as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-24') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td>  -->
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td> 
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                           
                           </tr>
                         @endif 
                       @endforeach
                      @elserole('bds2')
                      @foreach ($emp as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-23') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td> 
                              {{-- <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td> --}}
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                           
                           </tr>
                         @endif 
                       @endforeach
                       @foreach ($referback as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-23') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td>  -->
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td> 
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                           
                           </tr>
                         @endif 
                       @endforeach
                       @elserole('bds3')
                      @foreach ($emp as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-22') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td>
                              {{-- <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                    Details
                                </a>
                            </td> --}}
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"

                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                             
                           </tr>
                         @endif 
                       @endforeach
                       @foreach ($referback as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-22') !== false && Auth::user()->dep_id == $desValue && $e['nonappointed'] == 0 )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td> -->
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                    Details
                                </a>
                            </td> 
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"

                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>  
                           </tr>
                         @endif 
                       @endforeach
                       @elserole('bds4')
                      @foreach ($emp as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          $depPrefix = Str::before(Auth::user()->dep_id, '-');
                          ?>
                           @if (($depPrefix == 'D' && ($desValue == 'D-21' || $desValue == 'D-20'))  && $e['nonappointed'] == 0  )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                            @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td> 
                              {{-- <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                    Details
                                </a>
                            </td> --}}
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                            
                           </tr>
                         @endif 
                       @endforeach
                       @foreach ($referback as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          $depPrefix = Str::before(Auth::user()->dep_id, '-');
                          ?>
                           @if (($depPrefix == 'D' && ($desValue == 'D-21' ||$desValue== 'D-20'))  && $e['nonappointed'] == 0  )
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                            @endif  
                             <td>{{ $e['reason'] }}</td>
                             <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                              data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                              data-comments="{{ $e['comments'] }}">Details</button>
                              </td> 
                              <td> -->
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                    Details
                                </a>
                            </td> 
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>      
                           </tr>
                         @endif 
                       @endforeach
                    
                      {{-- bdscoordinatorrolee --}}
                      @elserole('bdscoordinator')
                      @foreach ($emp as $e)
                      @php
                            $uniqueClassIds = [];
                          @endphp

                      <?php
                        $desiredValue = Str::before($e['class_id'], '-');            
                        $classParts = explode('-', Auth::user()->dep_id);
                        $mPrefix = $classParts[0];
                      ?>
                      @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                      @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                      <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                      <td>{{ $e['name'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                      <td>{{ $e['request_id'] }}</td>
                      @if (Auth::user()->name !== $e['counselor'])
                      <td>{{ $e['counselor'] }}</td>
                      @endif  
                      <td>{{ $e['reason'] }}</td>
                      <td><button type="button" class="btn btn-secondary detail-button" 
                        data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                        data-comments="{{ $e['comments'] }}">Details</button>
                      </td>  
                      <td>
                        <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                            Details
                        </a>
                    </td>
                      {{-- <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                        data-toggle="modal" data-target="#restrict"
                        data-class="{{ $e['class_id'] }}"
                        data-name="{{ $e['name'] }}"
                        data-request="{{ $e['request_id'] }}"
                        data-counselor="{{ $e['counselor'] }}"
                        data-reason="{{ $e['reason'] }}"
                    >Appointment</button>
                    </td>                     --}}
                  
                      </tr>
                    </tr>
                    @endif 

                    @endif 
                    @endforeach
                    <!-- appointmenttabledata -->
                    @foreach ($appointedCandidates as $e)
                      <?php
                        $desiredValue = Str::before($e['class_id'], '-');            
                        $classParts = explode('-', Auth::user()->dep_id);
                        $mPrefix = $classParts[0];
                      ?>
                      @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                      @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] =$e['class_id'];
                      @endphp
                      <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                      <td>{{ $e['name'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                      <td>{{ $e['request_id'] }}</td>
                      @if (Auth::user()->name !== $e['counselor'])
                      <td>{{ $e['counselor'] }}</td>
                      @endif  
                      <td>{{ $e['reason'] }}</td>
                      <td><button type="button" class="btn btn-secondary detail-button" 
                        data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                        data-comments="{{ $e['comments'] }}">Details</button>
                      </td>  
                      <td>
                        <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                            Details
                        </a>
                    </td>
                      {{-- <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                        data-toggle="modal" data-target="#restrict"
                        data-class="{{ $e['class_id'] }}"
                        data-name="{{ $e['name'] }}"
                        data-request="{{ $e['request_id'] }}"
                        data-counselor="{{ $e['counselor'] }}"
                        data-reason="{{ $e['reason'] }}"
                    >Appointment</button>
                    </td>                     --}}
                  
                      </tr>
                    </tr>
                    @endif
                    @endif 
                    @endforeach
                         <!-- bdstabledata -->
                         @foreach ($bdsCorappointed as $e)
                      <?php
                        $desiredValue = Str::before($e['class_id'], '-');            
                        $classParts = explode('-', Auth::user()->dep_id);
                        $mPrefix = $classParts[0];
                      ?>
                      @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                      @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                      <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                      <td>{{ $e['name'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                      <td>{{ $e['request_id'] }}</td>
                      @if (Auth::user()->name !== $e['counselor'])
                      <td>{{ $e['counselor'] }}</td>
                      @endif  
                      <td>{{ $e['reason'] }}</td>
                      <td><button type="button" class="btn btn-secondary detail-button" 
                        data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                        data-comments="{{ $e['comments'] }}">Details</button>
                      </td>  
                      <td>
                        <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                            Details
                        </a>
                    </td>
                      {{-- <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                        data-toggle="modal" data-target="#restrict"
                        data-class="{{ $e['class_id'] }}"
                        data-name="{{ $e['name'] }}"
                        data-request="{{ $e['request_id'] }}"
                        data-counselor="{{ $e['counselor'] }}"
                        data-reason="{{ $e['reason'] }}"
                    >Appointment</button>
                    </td>                     --}}
                  
                      </tr>
                    </tr>
                    @endif
                    @endif 
                    @endforeach
                        <!-- followuptabledata -->
                        @foreach ($followupCandidates as $e)
                      <?php
                        $desiredValue = Str::before($e['class_id'], '-');            
                        $classParts = explode('-', Auth::user()->dep_id);
                        $mPrefix = $classParts[0];
                      ?>
                      @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0)
                      @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                      <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                      <td>{{ $e['name'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                      <td>{{ $e['request_id'] }}</td>
                      @if (Auth::user()->name !== $e['counselor'])
                      <td>{{ $e['counselor'] }}</td>
                      @endif  
                      <td>{{ $e['reason'] }}</td>
                      <td><button type="button" class="btn btn-secondary detail-button" 
                        data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                        data-comments="{{ $e['comments'] }}">Details</button>
                      </td>  
                      <td>
                        <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                            Details
                        </a>
                    </td>
                      {{-- <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                        data-toggle="modal" data-target="#restrict"
                        data-class="{{ $e['class_id'] }}"
                        data-name="{{ $e['name'] }}"
                        data-request="{{ $e['request_id'] }}"
                        data-counselor="{{ $e['counselor'] }}"
                        data-reason="{{ $e['reason'] }}"
                    >Appointment</button>
                    </td>                     --}}
                  
                      </tr>
                    </tr>
                    @endif
                    @endif 
                    @endforeach
                    @elserole('dptcounselor')
                    @foreach ($emp as $e)
                    <?php
                      $desiredValue = Str::before($e['class_id'], '-');
                      $classParts = explode('-', Auth::user()->dep_id);
                      $mPrefix = $classParts[0];
                    ?>
                      @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-']) )
                      <tr data-request="{{ $e['request_id'] }}">
                      <td>{{ $e['class_id'] }}</td>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                    <td>{{ $e['request_id'] }}</td>
                    @if (Auth::user()->name !== $e['counselor'])
                    <td>{{ $e['counselor'] }}</td>
                    @endif  
                    <td>{{ $e['reason'] }}</td>
                    <td><button type="button" class="btn btn-secondary detail-button" 
                      data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                      data-comments="{{ $e['comments'] }}">Details</button>
                    </td>
                    {{-- <td>
                      <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                          Details
                      </a>
                  </td> --}}
                    <td>
                      <button type="button" class="btn btn-secondary appointment-button"
                      data-toggle="modal" data-target="#myModal"
                      data-class="{{ $e['class_id'] }}"
                      data-name="{{ $e['name'] }}"
                      data-request="{{ $e['request_id'] }}"
                      data-counselor="{{ $e['counselor'] }}"
                      data-reason="{{ $e['reason'] }}"
                  >Appointment</button>
                  </td>                    
                
                    </tr>
                  </tr>
                  @endif 
                  @endforeach
                  @foreach ($referback as $e)
                    <?php
                      $desiredValue = Str::before($e['class_id'], '-');
                      $classParts = explode('-', Auth::user()->dep_id);
                      $mPrefix = $classParts[0];
                    ?>
                      @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-']) )
                      <tr data-request="{{ $e['request_id'] }}">
                      <td>{{ $e['class_id'] }}</td>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                    <td>{{ $e['request_id'] }}</td>
                    @if (Auth::user()->name !== $e['counselor'])
                    <td>{{ $e['counselor'] }}</td>
                    @endif  
                    <td>{{ $e['reason'] }}</td>
                    <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                      data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                      data-comments="{{ $e['comments'] }}">Details</button>
                    </td> -->
                     <td>
                      <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                          Details
                      </a>
                  </td> 
                    <td>
                      <button type="button" class="btn btn-secondary appointment-button"
                      data-toggle="modal" data-target="#myModal"
                      data-class="{{ $e['class_id'] }}"
                      data-name="{{ $e['name'] }}"
                      data-request="{{ $e['request_id'] }}"
                      data-counselor="{{ $e['counselor'] }}"
                      data-reason="{{ $e['reason'] }}"
                  >Appointment</button>
                  </td>                    
                
                    </tr>
                  </tr>
                  @endif 
                  @endforeach
                  @elserole('mltcounselor')
                  @foreach ($emp as $e)
                  <?php
                    $desiredValue = Str::before($e['class_id'], '-');
                    $classParts = explode('-', Auth::user()->dep_id);
                    $mPrefix = $classParts[0];
                  ?>

                  @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0  )
                  <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                  <td>{{ $e['name'] }}</td>
                  <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                  <td>{{ $e['request_id'] }}</td>
                  @if (Auth::user()->name !== $e['counselor'])
                  <td>{{ $e['counselor'] }}</td>
                  @endif  
                  <td>{{ $e['reason'] }}</td>
                  <td><button type="button" class="btn btn-secondary detail-button" 
                    data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                    data-comments="{{ $e['comments'] }}">Details</button>
                  </td> 
                  {{-- <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                        Details
                    </a>
                </td> --}}
                  <td>
                    <button type="button" class="btn btn-secondary appointment-button"
                    data-toggle="modal" data-target="#myModal"
                    data-class="{{ $e['class_id'] }}"
                    data-name="{{ $e['name'] }}"
                    data-request="{{ $e['request_id'] }}"
                    data-counselor="{{ $e['counselor'] }}"
                    data-reason="{{ $e['reason'] }}"
                >Appointment</button>
                </td>                    
               
                  </tr>
                </tr>
                @endif 
                @endforeach
                @elserole('bsncounselor')
                  @foreach ($emp as $e)
                  <?php
                    $desiredValue = Str::before($e['class_id'], '-');
                    $classParts = explode('-', Auth::user()->dep_id);
                    $mPrefix = $classParts[0];
                  ?>

                  @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['PRN-', 'BSN-']) )
                  <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                  <td>{{ $e['name'] }}</td>
                  <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                  <td>{{ $e['request_id'] }}</td>
                  @if (Auth::user()->name !== $e['counselor'])
                  <td>{{ $e['counselor'] }}</td>
                  @endif  
                  <td>{{ $e['reason'] }}</td>
                  <td><button type="button" class="btn btn-secondary detail-button" 
                    data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                    data-comments="{{ $e['comments'] }}">Details</button>
                  </td> 
                  {{-- <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                        Details
                    </a>
                </td> --}}
                  <td>
                    <button type="button" class="btn btn-secondary appointment-button"
                    data-toggle="modal" data-target="#myModal"
                    data-class="{{ $e['class_id'] }}"
                    data-name="{{ $e['name'] }}"
                    data-request="{{ $e['request_id'] }}"
                    data-counselor="{{ $e['counselor'] }}"
                    data-reason="{{ $e['reason'] }}"
                >Appointment</button>
                </td>                 
                  </tr>
                </tr>
                @endif 
                @endforeach
                @foreach ($referback as $e)
                  <?php
                    $desiredValue = Str::before($e['class_id'], '-');
                    $classParts = explode('-', Auth::user()->dep_id);
                    $mPrefix = $classParts[0];
                  ?>

                  @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['PRN-', 'BSN-']) )
                  <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                  <td>{{ $e['name'] }}</td>
                  <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                  <td>{{ $e['request_id'] }}</td>
                  @if (Auth::user()->name !== $e['counselor'])
                  <td>{{ $e['counselor'] }}</td>
                  @endif  
                  <td>{{ $e['reason'] }}</td>
                  <!-- <td><button type="button" class="btn btn-secondary detail-button" 
                    data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                    data-comments="{{ $e['comments'] }}">Details</button>
                  </td>  -->
                  <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                        Details
                    </a>
                </td> 
                  <td>
                    <button type="button" class="btn btn-secondary appointment-button"
                    data-toggle="modal" data-target="#myModal"
                    data-class="{{ $e['class_id'] }}"
                    data-name="{{ $e['name'] }}"
                    data-request="{{ $e['request_id'] }}"
                    data-counselor="{{ $e['counselor'] }}"
                    data-reason="{{ $e['reason'] }}"
                >Appointment</button>
                </td>                 
                  </tr>
                </tr>
                @endif 
                @endforeach
                @elserole('prncounselor')
                @foreach ($emp as $e)
                <?php
                  $desiredValue = Str::before($e['class_id'], '-');
                  $classParts = explode('-', Auth::user()->dep_id);
                  $mPrefix = $classParts[0];
                ?>
                @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0  )
                <tr data-request="{{ $e['request_id'] }}">
                  <td>{{ $e['class_id'] }}</td>
                <td>{{ $e['name'] }}</td>
                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                <td>{{ $e['request_id'] }}</td>
                @if (Auth::user()->name !== $e['counselor'])
                <td>{{ $e['counselor'] }}</td>
                @endif  
                <td>{{ $e['reason'] }}</td>
                <td><button type="button" class="btn btn-secondary detail-button" 
                  data-toggle="modal" data-target="#myModal2"    data-history="{{ $e['history'] }}"
                  data-comments="{{ $e['comments'] }}">Details</button>
                </td> 
                {{-- <td>
                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                      Details
                  </a>
              </td> --}}
                <td>
                  <button type="button" class="btn btn-secondary appointment-button"
                  data-toggle="modal" data-target="#myModal"
                  data-class="{{ $e['class_id'] }}"
                  data-name="{{ $e['name'] }}"
                  data-request="{{ $e['request_id'] }}"
                  data-counselor="{{ $e['counselor'] }}"
                  data-reason="{{ $e['reason'] }}"
              >Appointment</button>
              </td> 
                </tr>
              </tr>
              @endif 
              @endforeach
              {{-- psychologistassignedtome --}}
              @elserole('psychologist')
                @foreach ($pchoCandidates as $e)
                @if ($e['nonappointed'] == 0)
                <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                    <td>{{ $e['request_id'] }}</td>
                    @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                    @endif  
                    <td>{{ $e['reason'] }}</td>
                    <td>
                      <button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"
                          data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}"
                      >Details</button>
                  </td> 
                  {{-- <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                        Details
                    </a>
                </td> --}}
                    <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                            data-toggle="modal" data-target="#myModal"
                            data-class="{{ $e['class_id'] }}"
                            data-name="{{ $e['name'] }}"
                            data-request="{{ $e['request_id'] }}"
                            data-counselor="{{ $e['counselor'] }}"
                            data-reason="{{ $e['reason'] }}"
                        >Appointment</button>
                    </td>                   
                   
                </tr>
            @endif 
              @endforeach
                {{-- psychiatristassignedtome --}}
                @elserole('psychiatrist')
                @foreach ($pchiaCandidates as $e)
                @if ($e['nonappointed'] == 0)
                <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                    <td>{{ $e['request_id'] }}</td>
                    @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                    @endif  
                    <td>{{ $e['reason'] }}</td>
                    <td>
                      <button type="button" class="btn btn-secondary detail-button" 
                          data-toggle="modal" data-target="#myModal2"
                          data-history="{{ $e['history'] }}"
                          data-comments="{{ $e['comments'] }}"
                      >Details</button>
                  </td> 
                  {{-- <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                        Details
                    </a>
                </td> --}}
                    <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                            data-toggle="modal" data-target="#myModal"
                            data-class="{{ $e['class_id'] }}"
                            data-name="{{ $e['name'] }}"
                            data-request="{{ $e['request_id'] }}"
                            data-counselor="{{ $e['counselor'] }}"
                            data-reason="{{ $e['reason'] }}"
                        >Appointment</button>
                    </td>                   
                   
                </tr>
            @endif 
              @endforeach
                    @elserole('hod')
                    <!-- form1tabledata -->
                    @php
                      $uniqueClassIds = [];
                      @endphp
                    @foreach ($emp as $e)
                      @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                  <!-- appointmenttabledata -->
                    @foreach ($appointedCandidates as $e)
                    @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                     <!-- bdsreferalstabledataallrefereddata -->
                     @foreach ($bdsreferedCandidates as $e)
                     @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                    <!-- forallcoordinatortabledata -->
                    @foreach ( $mbbsCorappointed as $e)
                     @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                    <!-- forpchia -->
                    @foreach ( $pchiaCandidates as $e)
                     @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                     <!-- forpchia -->
                     @foreach ( $pchoCandidates as $e)
                     @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                    <!-- forreferaldata -->
                    @foreach ( $referback as $e)
                       @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                       <!-- $followupCandidatestabledata -->
                       @foreach ($followupCandidates as $e)
                       @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                              <td>
                                <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                    Details
                                </a>
                            </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                    --}}
                               
                            </tr>
                            @endif
                    @endforeach 
                    @elserole('ahscoordinator')
                    @php
                            $uniqueClassIds = [];
                          @endphp
                    @foreach ($emp  as $e)
                    @if (Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-']))
                    @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp


                    <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                      Details
                                  </a>
                              </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                 --}}
                            </tr>
                            @endif 
                        @endif 
                    @endforeach
                    <!-- appointedcandidatestabledata -->
                    @foreach ($appointedCandidates  as $e)
                    @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-']))
                    @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp


                    <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                      Details
                                  </a>
                              </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                 --}}
                            </tr>
                            @endif 

                        @endif 
                    @endforeach
                    <!-- ahsreferredcandidates -->
                       @foreach ($ahsreferedCandidates  as $e)
                    @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-']))
                    @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp

                    <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                      Details
                                  </a>
                              </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                 --}}
                            </tr>
                            @endif 
                        @endif 
                    @endforeach
                        <!-- followupcandidates -->
                        @foreach ($followupCandidates  as $e)
                    @if ($e['nonappointed'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-']))
                    @if (!in_array($e['class_id'], $uniqueClassIds))
                      @php
                      $uniqueClassIds[] = $e['class_id'];
                      @endphp
                    <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <button type="button" class="btn btn-secondary detail-button" 
                                      data-toggle="modal" data-target="#myModal2"
                                      data-history="{{ $e['history'] }}"
                                      data-comments="{{ $e['comments'] }}"
                                  >Details</button>
                              </td> 
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                      Details
                                  </a>
                              </td>
                                {{-- <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#restrict"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                 --}}
                            </tr>
                        @endif 
                        @endif 

                    @endforeach
                @endrole
                @else
                    <p>No Counseling Request Initiated Yet</p>
                @endrole
                      </tbody>         
                      {{-- <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                        </tr>
                      </tfoot> --}}
                    </table>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="Tablef" style="display: none;">
                      <thead>
                        <tr>
                           <th><b>Class ID</b></th>
                          <th><b>Name</b></th>
                          <th><b>Date</b></th>
                          <th><b>Request ID</b></th>
                          @php
                          $hideCounselorColumn = false; // Initialize the variable
                      @endphp
        
                      @foreach ($emp as $e)
                          @if (Auth::user()->name === $e['counselor'])
                              @php
                                  $hideCounselorColumn = true; // Set the variable to true
                              @endphp
                          @endif
                      @endforeach       
                         @if (!$hideCounselorColumn)
                                  <th><b>Counselor Name</b></th>
                              @endif
                         <th><b>Reason for referal</b></th> 
                         <th><b>Details</b></th>
                         <th><b>Appointment</b></th>     
                        </tr>
                      </thead>
                      <tbody>     

                        {{-- mbbs1councelorrrr --}}
                        @role('mbbs1')
                        @foreach ($followupCandidates as $e)
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-24') !== false && Auth::user()->dep_id == $desiredValue && $e['followup'] == 0)
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                      
                        </tr>
                        @endif 
                       @endforeach
                  
                        @elserole('mbbs2')
                        @foreach ($followupCandidates as $e)
                        <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                        ?>
                       @if (strpos($desiredValue, 'M-23') !== false && Auth::user()->dep_id == $desiredValue && $e['followup'] == 0)
                        <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif             
                        <td>{{ $e['reason'] }}</td>
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                          >Appointment</button>
                      </td>                                      
                        </tr>
                        @endif 
                       @endforeach
                  
                       {{-- mbbs3councelorrrr --}}
                       @elserole('mbbs3')
                       @foreach ($followupCandidates as $e)
                           <?php
                           $parts = explode('-', $e['class_id']);
                           $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                           ?>
                       @if (strpos($desiredValue, 'M-22') !== false && Auth::user()->dep_id == $desiredValue && $e['followup'] == 0)
                       <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                     
                       </tr>
                           @endif 
                       @endforeach
                        {{-- mbbs4councelorrrr --}}
                        @elserole('mbbs4')
                        @foreach ($followupCandidates as $e)
                            <?php
                            $parts = explode('-', $e['class_id']);
                            $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                            ?>
                        
                        @if (strpos($desiredValue, 'M-21') !== false && Auth::user()->dep_id == $desiredValue && $e['followup'] == 0)
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                          <td>{{ $e['request_id'] }}</td>
                          @if (Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                        @endif  
                          <td>{{ $e['reason'] }}</td>
                          <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                Details
                            </a>
                        </td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                     
                                </tr>
                            @endif 
                        @endforeach
                         {{-- mbbs4councelorrrr --}}
                         @elserole('mbbs5')
                         @foreach ($followupCandidates as $e)
                             <?php
                             $parts = explode('-', $e['class_id']);
                             $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                             ?>
                         
                         @if (strpos($desiredValue, 'M-20') !== false && Auth::user()->dep_id == $desiredValue && $e['followup'] == 0)
                         <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                          <td>{{ $e['request_id'] }}</td>
                          @if (Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                          @endif  
                            <td>{{ $e['reason'] }}</td>
                            <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                  Details
                              </a>
                          </td> 
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                   
                    
                                 </tr>
                             @endif 
                         @endforeach
                        {{-- mbbs5councelorrrr --}}
                        @elserole('mbbs5')
                        @foreach ($followupCandidates as $e)
                            <?php
                            $parts = explode('-', $e['class_id']);
                            $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                            $depPrefix = Str::before(Auth::user()->dep_id, '-');
                            ?>
                     @if (($depPrefix == 'M' && ($desiredValue == 'M-19' || $desiredValue == 'M-18')) && $e['followup'] == 0)
                        {{-- @if (strpos($desiredValue, 'M-19') !== false && Auth::user()->dep_id == $desiredValue && $e['nonappointed'] == 0) --}}
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                          <td>{{ $e['name'] }}</td>
                          <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                          <td>{{ $e['request_id'] }}</td>
                          @if ($desiredValue != 'M-18' && Auth::user()->name !== $e['counselor'])
                          <td class="counselor-data">{{ $e['counselor'] }}</td>
                          @endif  
                          <td>{{ $e['reason'] }}</td>
                          <td>
                            <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                Details
                            </a>
                        </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                 
                      
                                </tr>
                            @endif 
                        @endforeach
                      {{-- coordinatoroleee --}}
                      @elserole('mbbscoordinator')        
                      @foreach ($Corfollow as $e)
                        <?php
                          $desiredValue = Str::before($e['class_id'], '-');
                          $classParts = explode('-', Auth::user()->dep_id);
                          $mPrefix = $classParts[0];
                        ?>

                        @if ($mPrefix == $desiredValue && $e['followup'] == 0)
                        <tr data-request="{{ $e['request_id'] }}">
                          <td>{{ $e['class_id'] }}</td>
                        <td>{{ $e['name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                        <td>{{ $e['request_id'] }}</td>
                        @if (Auth::user()->name !== $e['counselor'])
                        <td>{{ $e['counselor'] }}</td>
                        @endif  
                        <td>{{ $e['reason'] }}</td>
                        <td>
                          <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                              Details
                          </a>
                      </td>
                        <td>
                          <button type="button" class="btn btn-secondary appointment-button"
                          data-toggle="modal" data-target="#myModal"
                          data-class="{{ $e['class_id'] }}"
                          data-name="{{ $e['name'] }}"
                          data-request="{{ $e['request_id'] }}"
                          data-counselor="{{ $e['counselor'] }}"
                          data-reason="{{ $e['reason'] }}"
                      >Appointment</button>
                      </td>                                        
                        </tr>
                      </tr>
                      @endif 
                      @endforeach
                      @elserole('bds1')
                      @foreach ($followupCandidates as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-24') !== false && Auth::user()->dep_id == $desValue && $e['followup'] == 0)
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                  Details
                              </a>
                          </td>
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                             
                           </tr>
                         @endif 
                       @endforeach
                      @elserole('bds2')
                      @foreach ($followupCandidates as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-23') !== false && Auth::user()->dep_id == $desValue && $e['followup'] == 0)
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                  Details
                              </a>
                          </td>
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                             
                           </tr>
                         @endif 
                       @endforeach
                       @elserole('bds3')
                      @foreach ($followupCandidates as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-22') !== false && Auth::user()->dep_id == $desValue && $e['followup'] == 0)
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                  Details
                              </a>
                          </td>
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                             
                           </tr>
                         @endif 
                       @endforeach
                       @elserole('bds4')
                      @foreach ($followupCandidates as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desiredValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          $depPrefix = Str::before(Auth::user()->dep_id, '-');
                          ?>
                     @if (($depPrefix == 'D' && ($desiredValue == 'D-21' || $desiredValue == 'D-20')) && $e['followup'] == 0)                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                            @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                                  Details
                              </a>
                          </td>
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   

                           </tr>
                         @endif  
                       @endforeach
                       <!-- @elserole('bds4')
                      @foreach ($followupCandidates as $e)
                          <?php
                          $parts = explode('-', $e['class_id']);
                          $desValue = count($parts) >= 2 ? $parts[0] . '-' . $parts[1] : 'Invalid Format';
                          ?>
                         @if (strpos($desValue, 'D-20') !== false && Auth::user()->dep_id == $desValue && $e['followup'] == 0)
                           <tr data-request="{{ $e['request_id'] }}">
                             <td>{{ $e['class_id'] }}</td>
                             <td>{{ $e['name'] }}</td>
                             <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                             <td>{{ $e['request_id'] }}</td>
                             @if (Auth::user()->name !== $e['counselor'])
                             <td class="counselor-data">{{ $e['counselor'] }}</td>
                             @endif  
                             <td>{{ $e['reason'] }}</td>
                             <td>
                              <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                  Details
                              </a>
                          </td>
                             <td>
                               <button type="button" class="btn btn-secondary appointment-button"
                               data-toggle="modal" data-target="#myModal"
                               data-class="{{ $e['class_id'] }}"
                               data-name="{{ $e['name'] }}"
                               data-request="{{ $e['request_id'] }}"
                               data-counselor="{{ $e['counselor'] }}"
                               data-reason="{{ $e['reason'] }}"
                               >Appointment</button>
                             </td>                                   
                        
                           </tr>
                         @endif 
                       @endforeach -->
                      {{-- hodrolee --}}
                      @elserole('bdscoordinator')
                      @foreach ($Corfollow as $e)
                      <?php
                        $desiredValue = Str::before($e['class_id'], '-');
                       
                        $classParts = explode('-', Auth::user()->dep_id);
                        $mPrefix = $classParts[0];
                       
                      ?>
                      @if ($mPrefix == $desiredValue && $e['followup'] == 0)
                      <tr data-request="{{ $e['request_id'] }}">
                        <td>{{ $e['class_id'] }}</td>
                      <td>{{ $e['name'] }}</td>
                      <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                      <td>{{ $e['request_id'] }}</td>
                      @if (Auth::user()->name !== $e['counselor'])
                      <td>{{ $e['counselor'] }}</td>
                      @endif  
                      <td>{{ $e['reason'] }}</td>
                      <td>
                        <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                            Details
                        </a>
                    </td>
                      <td>
                        <button type="button" class="btn btn-secondary appointment-button"
                        data-toggle="modal" data-target="#myModal"
                        data-class="{{ $e['class_id'] }}"
                        data-name="{{ $e['name'] }}"
                        data-request="{{ $e['request_id'] }}"
                        data-counselor="{{ $e['counselor'] }}"
                        data-reason="{{ $e['reason'] }}"
                    >Appointment</button>
                    </td>                    
                 
                      </tr>
                    </tr>
                    @endif 
                    @endforeach

                    @elserole('dptcounselor')
                    @foreach ($followupCandidates as $e)
                    <?php
                      $desiredValue = Str::before($e['class_id'], '-');
                      $classParts = explode('-', Auth::user()->dep_id);
                      $mPrefix = $classParts[0];
                    ?>
                    @if ($e['followup'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-']))

                    {{-- @if ($mPrefix == $desiredValue && $e['nonappointed'] == 0) --}}
                    <tr data-request="{{ $e['request_id'] }}">
                      <td>{{ $e['class_id'] }}</td>
                    <td>{{ $e['name'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                    <td>{{ $e['request_id'] }}</td>
                    @if (Auth::user()->name !== $e['counselor'])
                    <td>{{ $e['counselor'] }}</td>
                    @endif  
                    <td>{{ $e['reason'] }}</td>
                    <td>
                      <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                          Details
                      </a>
                  </td>
                    <td>
                      <button type="button" class="btn btn-secondary appointment-button"
                      data-toggle="modal" data-target="#myModal"
                      data-class="{{ $e['class_id'] }}"
                      data-name="{{ $e['name'] }}"
                      data-request="{{ $e['request_id'] }}"
                      data-counselor="{{ $e['counselor'] }}"
                      data-reason="{{ $e['reason'] }}"
                  >Appointment</button>
                  </td>                    
               
                    </tr>
                  </tr>
                  @endif 
                  @endforeach
                @elserole('bsncounselor')
                  @foreach ($followupCandidates as $e)
                  <?php
                    $desiredValue = Str::before($e['class_id'], '-');
                    $classParts = explode('-', Auth::user()->dep_id);
                    $mPrefix = $classParts[0];
                  ?>

                    @if ($e['followup'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['PRN-', 'BSN-']))
                    <tr data-request="{{ $e['request_id'] }}">
                    <td>{{ $e['class_id'] }}</td>
                  <td>{{ $e['name'] }}</td>
                  <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                  <td>{{ $e['request_id'] }}</td>
                  @if (Auth::user()->name !== $e['counselor'])
                  <td>{{ $e['counselor'] }}</td>
                  @endif  
                  <td>{{ $e['reason'] }}</td>
                  <td>
                    <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                        Details
                    </a>
                </td>
                  <td>
                    <button type="button" class="btn btn-secondary appointment-button"
                    data-toggle="modal" data-target="#myModal"
                    data-class="{{ $e['class_id'] }}"
                    data-name="{{ $e['name'] }}"
                    data-request="{{ $e['request_id'] }}"
                    data-counselor="{{ $e['counselor'] }}"
                    data-reason="{{ $e['reason'] }}"
                >Appointment</button>
                </td>                    
                
                  </tr>
                </tr>
                @endif 
                @endforeach
                 {{-- psychologistassignedtome --}}
                 @elserole('psychologist')
                 @foreach ($pchofollow  as $e)
                 @if ($e['followup'] == 0)
                 <tr data-request="{{ $e['request_id'] }}">
                     <td>{{ $e['class_id'] }}</td>
                     <td>{{ $e['name'] }}</td>
                     <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                     <td>{{ $e['request_id'] }}</td>
                     @if (Auth::user()->name !== $e['counselor'])
                         <td>{{ $e['counselor'] }}</td>
                     @endif  
                     <td>{{ $e['reason'] }}</td>
                     {{-- <td>
                       <button type="button" class="btn btn-secondary detail-button" 
                           data-toggle="modal" data-target="#myModal2"
                           data-history="{{ $e['history'] }}"
                           data-comments="{{ $e['comments'] }}"
                       >Details</button>
                   </td>  --}}
                   <td>
                     <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                         Details
                     </a>
                 </td>
                     <td>
                         <button type="button" class="btn btn-secondary appointment-button"
                             data-toggle="modal" data-target="#myModal"
                             data-class="{{ $e['class_id'] }}"
                             data-name="{{ $e['name'] }}"
                             data-request="{{ $e['request_id'] }}"
                             data-counselor="{{ $e['counselor'] }}"
                             data-reason="{{ $e['reason'] }}"
                         >Appointment</button>
                     </td>                   
                    @endif
                 </tr>
               @endforeach
                 {{-- psychiatristtassignedtome --}}
                 @elserole('psychiatrist')
                 @foreach ($pchiafollow as $e)
                 @if ($e['followup'] == 0)
                 <tr data-request="{{ $e['request_id'] }}">
                     <td>{{ $e['class_id'] }}</td>
                     <td>{{ $e['name'] }}</td>
                     <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>
                     <td>{{ $e['request_id'] }}</td>
                     @if (Auth::user()->name !== $e['counselor'])
                         <td>{{ $e['counselor'] }}</td>
                     @endif  
                     <td>{{ $e['reason'] }}</td>
                     {{-- <td>
                       <button type="button" class="btn btn-secondary detail-button" 
                           data-toggle="modal" data-target="#myModal2"
                           data-history="{{ $e['history'] }}"
                           data-comments="{{ $e['comments'] }}"
                       >Details</button>
                   </td>  --}}
                   <td>
                     <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" >
                         Details
                     </a>
                 </td>
                     <td>
                         <button type="button" class="btn btn-secondary appointment-button"
                             data-toggle="modal" data-target="#myModal"
                             data-class="{{ $e['class_id'] }}"
                             data-name="{{ $e['name'] }}"
                             data-request="{{ $e['request_id'] }}"
                             data-counselor="{{ $e['counselor'] }}"
                             data-reason="{{ $e['reason'] }}"
                         >Appointment</button>
                     </td>                   
                    @endif
                 </tr>
               @endforeach
                    @elserole('hod')
                    @foreach ($hodfollow as $e)
                        @if ($e['followup'] == 0)
                        {{-- @if (!in_array($e['name'], $displayedNames)) --}}
                        <?php $displayedNames[] = $e['name']; ?>
                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link">
                                      Details
                                  </a>
                              </td>
                                <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#myModal"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                
                            </tr>
                            @endif 

                        {{-- @endif  --}}
                    @endforeach
                    @elserole('ahscoordinator')
                    @foreach ($Corfollow as $e)
                    @if ($e['followup'] == 0 && Illuminate\Support\Str::startsWith($e['class_id'], ['DPT-', 'MLT-', 'PRN-', 'BSN-']))
                            <tr data-request="{{ $e['request_id'] }}">
                                <td>{{ $e['class_id'] }}</td>
                                <td>{{ $e['name'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($e['created_at'])->format('d-m-Y') }}</td>

                                <td>{{ $e['request_id'] }}</td>
                                @if (Auth::user()->name !== $e['counselor'])
                                    <td>{{ $e['counselor'] }}</td>
                                @endif  
                                <td>{{ $e['reason'] }}</td>
                                <td>
                                  <a href="{{ route('studentAppointments', $e->class_id) }}" class="btn btn-secondary presentable-link" target="_blank">
                                      Details
                                  </a>
                              </td>
                                <td>
                                    <button type="button" class="btn btn-secondary appointment-button"
                                        data-toggle="modal" data-target="#myModal"
                                        data-class="{{ $e['class_id'] }}"
                                        data-name="{{ $e['name'] }}"
                                        data-request="{{ $e['request_id'] }}"
                                        data-counselor="{{ $e['counselor'] }}"
                                        data-reason="{{ $e['reason'] }}"
                                    >Appointment</button>
                                </td>                   
                                
                            </tr>
                        @endif 
                    @endforeach
                @endrole
                      </tbody>         
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
      </div>   
    </div>  
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
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      $("#zero_config").DataTable();
      // $("#myTable").DataTable();
      // $("#Tablef").DataTable();
      // $("#referredCandidatesTable").DataTable();    
    </script>
  </body>
</html>
