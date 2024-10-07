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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      
    <![endif]-->
    <link href="css/app.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>

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
                
                  <a class="navbar-brand" href="{{ url('/') }}">
                  <h1 style="color: rgb(122, 22, 50); font-size:34px; font-weight: 800px; ">
<b>                            Counselling Cell</b>
                          </h1>
                  </a>
                  
      </header>
      <style>
        .table {
            padding-top: 20px; /* Adjust the value as needed */
        }
                /* Custom CSS for the table */
        .table {
            width: 100%;
        }

        .table thead th {
            background-color:rgb(122, 22, 50); /* Header background color */
            color: #fff; /* Header text color */
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f7f7f7; /* Odd row background color */
        }

        .table-hover tbody tr:hover {
            background-color: #e9ecef; /* Hover row background color */
        }
            /* Custom CSS for the small search bar and icon */
        .search-input {
          width: 150px; /* Adjust the width as needed */
          padding-right: 30px; /* Space for the icon */
      }

      .search-icon {
          position: absolute;
          top: 10px;
          right: 10px;
          cursor: pointer;
      }

          .presentable-link {
        color: rgb(122, 22, 50); /* Set the color to a desired value, such as blue */
        text-decoration: none; /* Remove underline */
        font-weight: bold; /* Make the link bold, if desired */
        /* Add more styling as needed */
    }

    .presentable-link:hover {
        color: #0056b3; /* Change the color on hover, if desired */
        /* Add more styling for hover state as needed */
    }
    </style>
    
  
      {{-- <aside class="left-sidebar" data-sidebarbg="skin5">
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
                <a href="{{ route('register') }}"
                class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu">Register</span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="{{ url('form1') }}"
                class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu">Councelling Request</span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="{{ url('screen') }}"
                class="sidebar-link"
                  ><i class="mdi mdi-all-inclusive"></i
                  ><span class="hide-menu">Councelling Screen</span></a
                >
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                 href="{{ url('reports') }}"
                  aria-expanded="false"
                  ><i class="mdi mdi-border-inside"></i
                  ><span class="hide-menu">Reports</span></a
                >
              </li>
             
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside> --}}
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <h3 align="center" style="color: rgb(122, 22, 50); font-size:34px; font-weight: 800px; ">
                            <b>Student Activity</b>
                        </h3>    
                        <div class="form-row align-items-center mb-3">
                        <div class="col-md-3">
                            <label class="mb-0" for="startDate">Start Date:</label>
                            <input type="date" id="startDate" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label class="mb-0" for="endDate">End Date:</label>
                            <input type="date" id="endDate" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-outline-success mt-4 btn-block" onclick="filterByDateRange()"><b>Apply</b></button>
                        </div>
                    </div>
                          </div>
     
                          <div class="table-responsive">
                            <div class="d-flex justify-content-end mb-3 position-relative">
                              <input type="text" id="search" class="form-control form-control-sm search-input" placeholder="Search Student">
                              <i class="fa fa-search search-icon" aria-hidden="true"></i>
                          </div>
                              <table id="stats" class="table table-bordered datatable">
                                  <thead>
                                      <tr>
                                        <th>Date</th>
                                          <th>Class ID</th>
                                          <th>Student Name</th>
                                          <th>Reason</th>
                                          <th>Counselor Name</th>
                                          <th>Year</th>
                                          <th>No of appointments</th>
                                          <th>No of HOD sessions</th>
                                          <th>No of Coordinator sessions</th>
                                          <th>No of Psychologist sessions</th>
                                          <th>No of Psychiatrist sessions</th>

                                         
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($data as $record)
                                      <tr>
                                        <td>{{ \Carbon\Carbon::parse($record['created_at'])->format('d-m-Y') }}</td>
                                        @if (Auth::check())
                                     @if (!Auth::user()->hasRole('bdscoordinator'))
                                        <td>
                                          <a href="{{ route('studentAppointments', $record->class_id) }}" class="presentable-link" >
                                              {{ $record['class_id'] }}
                                          </a>
                                      </td>   
                                      @endif
                                      @endif                       
                                         <td>{{ $record->name }}</td>
                                          <td>{{ $record->reason }}</td>
                                          <td>{{ $record->counselor }}</td>
                                          <td>{{ $record->class_name }}</td> 
                                          <td>{{ $record->requestCount }}</td>
                                        <td>{{ $totalHodSessions[$record->name] ?? 0 }}</td>
                                        <td>{{ $coordinatorSessions[$record->name] ?? 0 }}</td>
                                        <td>{{ $psychologistSessions[$record->name] ?? 0 }}</td>
                                        <td>{{ $psychiatristSessions[$record->name] ?? 0 }}</td> 
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
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
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $(document).ready(function() {
        $(".search-icon").on("click", function() {
            var searchText = $("#search").val().toLowerCase();
            $("table tbody tr").each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });
    });
    </script>
    <script>
      function filterByDateRange() {
        var startDate = $('#startDate').val();
        var endDate = $('#endDate').val();

        // Redirect to the same page with the selected date range as parameters
        window.location.href = "{{ route('getStats') }}?startDate=" + startDate + "&endDate=" + endDate;
    
    }   
    </script>
  </body>
</html>
