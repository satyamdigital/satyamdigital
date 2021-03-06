<?php 
  include("simpleform.php");
  error_reporting(0);
 ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../js/chart-js-config.js"></script>
    <title>Satyam Digital Online Seva</title>
</head>

<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><i class="fas fa-bolt"></i> <span>Satyam Digital</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="index.html" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div id="down" class="dash-nav-dropdown">
                    <a href="#!" id="down" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fab fa-servicestack" ></i> Service </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="student.html" class="dash-nav-dropdown-item">Students serv..</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="common.html" class="dash-nav-dropdown-item">Common serv..</a>
                    </div>
                    <div class="dash-nav-dropdown-menu">
                        <a href="other.html" class="dash-nav-dropdown-item">Other serv..</a>
                    </div>
                </div>
                <div id="down-1" class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Business Ser.. </a>
                     <div class="dash-nav-dropdown-menu">
                <a href="online.html" class="dash-nav-dropdown-item">Online serv..</a>
                <a href="offline.html" class="dash-nav-dropdown-item">Offline serv..</a>
                
                        
                    </div>
                </div>
                <div id="down-2" class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-link"></i> Other links </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html"  target="_blank"  class="dash-nav-dropdown-item">Sarkari result</a>
                        <a href="content.html"  target="_blank"  class="dash-nav-dropdown-item">Satyam digital</a>
                        <a href="login.html"  target="_blank"  class="dash-nav-dropdown-item">Log in</a>
                        <a href="signup.html"  target="_blank"  class="dash-nav-dropdown-item">Sign up</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About Us</a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="ourteam.html" class="dash-nav-dropdown-item">Our Teams</a>
                        <a href="detail.html" class="dash-nav-dropdown-item">Company Details</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#notifi" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fab fa-cc-amazon-pay"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">paytm</a>
                            <a class="dropdown-item" href="login.html">Google pay</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                          <a onclick="myFuncti()" style="text-decoration: none;" href="#">
                            <div class="stats stats-primary">
                                <h3 class="stats-title"> Services </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fab fa-servicestack"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">100+</div>
                                        <div class="stats-change">
                                            <span class="stats-percentage">Services</span>
                                            <span class="stats-timeframe">welcome</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </a>
                        </div>
                        <script>
function myFuncti() {
  document.getElementById("down").classList.toggle("show");
}
</script>
                        <div class="col-xl-4"> 
                            <a onclick="myFunctio()" style="text-decoration: none;" href="#">
                            <div class="stats stats-success ">
                                <h3 class="stats-title">Business service</h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-business-time"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">154</div>
                                        <div class="stats-change">
                                            <span class="stats-percentage">All Business</span>
                                            <span class="stats-timeframe">Service</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <script>
function myFunctio() {
  document.getElementById("down-1").classList.toggle("show");
}
</script>
                        <div class="col-xl-4"> 
                            <a onclick="myFunction()" style="text-decoration: none; " href="#">
                            <div class="stats stats-danger">
                                <h3 class="stats-title"> Other links </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-link"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number">5</div>
                                        
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <script>
function myFunction() {
  document.getElementById("down-2").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
                    </div>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="spur-card-title"> Bar Chart </div>
                                    <div class="spur-card-menu">
                                        <div class="dropdown show">
                                            <a class="spur-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" onclick="spurChartjsBar;" href="">Student Date Chart</a>
                                                <a class="dropdown-item" onclick="spurChartjsBa;" href="">Farmer Date Chart</a>
                                                <a class="dropdown-item" onclick="spurChartjsB;" href="">Teacher Data </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body spur-card-body-chart">
                                    <canvas id="spurChartjsBar"></canvas>
                                    <script>
                                        var ctx = document.getElementById("spurChartjsBar").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [12, 19, 3, 5, 2],
                                                    backgroundColor: window.chartColors.primary,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                       
                                    <script id="spurChartjsBa">
                                        var ctx = document.getElementById("spurChartjsBa").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [10, 5, 9, 5, 2],
                                                    backgroundColor: window.chartColors.primary,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>

                                    <script id="spurChartjsB">
                                        var ctx = document.getElementById("spurChartjsB").getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                                                datasets: [{
                                                    label: 'Blue',
                                                    data: [30, 19, 3, 10, 2],
                                                    backgroundColor: window.chartColors.primary,
                                                    borderColor: 'transparent'
                                                }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false
                                                },
                                                scales: {
                                                    yAxes: [{
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                    }]
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div id="notifi" class="col-xl-6" >
                            <div class="card spur-card"  data-spy="scroll" style="position: relative; height: 325px; margin-top: 0rem; overflow: auto;">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="spur-card-title"> Notifications </div>
                                </div>
                                <div class="card-body " >
                                    <div class="notifications">
                                        <a href="forms.html" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a><a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a><a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <div class="notifications-show-all">
                                            <a href="#!">Show all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <div class="spur-card-title"> Suscribe me </div>
                                </div>
                                <div class="card-body ">
                                    <form method="GET" action="">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name</label>
                                                <input type="text" name="Entername" class="form-control" id="name" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="Email" name="Emailid" class="form-control" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                                            </div>
                                        </div>
                                        <button type="submit" value="Submit" name="submit" class="btn btn-primary">Suscribe Me</button>
                                        <?php 
                                             $Entername = $_GET['Entername'];
                                             $Emailid = $_GET['Emailid'];
                                            
                                            $query = "INSERT INTO php VALUES('$Entername','$Emailid')";
                                           $data = mysqli_query($conn,$query);
                                              if ($data) {
                                                             echo "Data Inserted in Database";
                                                     } 
                                        ?>
                                   </form>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-xl-12">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="far fa-newspaper"></i>
                                    </div>
                                    <div class="spur-card-title"> Latest news </div>
                                </div>
                                <div>
                               <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://wallpapershome.com/images/pages/pic_h/21250.jpg" alt="Card image cap-1">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                     
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://wallpapershome.com/images/wallpapers/night-sky-2560x1440-5k-4k-wallpaper-stars-mountains-bridge-new-zealand-547.jpg" alt="Card image cap-2">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                     
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg" alt="Card image cap-3">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
                               </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">More news</button>
                            </div>
                        </div>
                    </div>
           <div><!-- Section: Team v.4 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Our amazing team</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur
    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
    nostrum quisquam eum porro a pariatur veniam.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-1" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <div class="card-up">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/19.jpg" alt="Team member card image">
            </div>
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/shiva.jpg?raw=true" class="rounded-circle img-fluid" alt="First sample avatar image">
            </div>
            <!-- Content -->
            <div class="card-body">
              <h4 class="font-weight-bold mt-1 mb-3">shivam kumar singh</h4>
              <p class="font-weight-bold dark-grey-text">Business man, Design ,Developer</p>
              <!-- Triggering button -->
              
            </div>
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
          <div class="face back">
            <!-- Content -->
            <div class="card-body">
              <!-- Content -->
            
              
              <!-- Social Icons -->
              <ul class="list-inline list-unstyled">
                <li class="list-inline-item">
                  <a class="p-2 fa-lg fb-ic" href="">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg pin-ic" href="">
                    <i class="fab fa-pinterest"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg ins-ic" href="">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg tw-ic" href="">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
              </ul>
              <!-- Triggering button -->
              
            </div>
          </div>
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-2" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <div class="card-up">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" alt="Team member card image">
            </div>
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/sushil.jpg?raw=true" class="rounded-circle" alt="Second sample avatar image">
            </div>
            <!-- Content -->
            <div class="card-body">
              <h4 class="font-weight-bold mt-1 mb-3">Sushil Kumar Singh</h4>
              <p class="font-weight-bold dark-grey-text">Team Leader & Business manager</p>
              <!-- Triggering button -->
         
            </div>
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
          <div class="face back">
            <!-- Content -->
            <div class="card-body">
              <!-- Content -->
              
              
              <!-- Social Icons -->
              <ul class="list-inline list-unstyled">
                <li class="list-inline-item">
                  <a class="p-2 fa-lg fb-ic" href="">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg pin-ic" href="">
                    <i class="fab fa-pinterest"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg ins-ic" href="">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg tw-ic" href="">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
              </ul>
              <!-- Triggering button -->
             
            </div>
          </div>
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">
      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-3" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <div class="card-up">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg"
                alt="Team member card image">
            </div>
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/satyashil.jpg?raw=true" class="rounded-circle img-fluid"
                alt="Third sample avatar image">
            </div>
            <!-- Content -->
            <div class="card-body">
              <h4 class="font-weight-bold mt-1 mb-3">Satyashil Sharma</h4>
              <p class="font-weight-bold dark-grey-text">Business man & Consultant</p>
              <!-- Triggering button -->
              
            </div>
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
          <div class="face back">
            <!-- Content -->
            <div class="card-body">
              <!-- Content -->
             
              <!-- Social Icons -->
              <ul class="list-inline list-unstyled">
                <li class="list-inline-item">
                  <a class="p-2 fa-lg fb-ic" href="">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg pin-ic" href="">
                    <i class="fab fa-pinterest"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg ins-ic" href="">
                    <i class="fab fa-instagram"> </i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="p-2 fa-lg tw-ic" href="">
                    <i class="fab fa-twitter"> </i>
                  </a>
                </li>
              </ul>
              <!-- Triggering button -->
              
            </div>
          </div>
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Team v.4 -->
</div>
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Our Other Company</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Satyam Digital service other company logo to show other company links to go watch and understand services and work.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-1" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/shiva.jpg?raw=true" class="rounded-circle img-fluid" alt="First sample avatar image">
            </div>
            <!-- Content -->
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-2" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/sushil.jpg?raw=true" class="rounded-circle" alt="Second sample avatar image">
            </div>
            <!-- Content -->
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-4 col-md-12">
      <!-- Rotating card -->
      <div class="card-wrapper">
        <div id="card-3" class="card card-rotating text-center">
          <!-- Front Side -->
          <div class="face front">
            <!-- Image -->
            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="https://github.com/satyamdigital/satyamdigital/blob/master/New%20folder/satyashil.jpg?raw=true" class="rounded-circle img-fluid"
                alt="Third sample avatar image">
            </div>
            <!-- Content -->
          </div>
          <!-- Front Side -->
          <!-- Back Side -->
          
          <!-- Back Side -->
        </div>
      </div>
      <!-- Rotating card -->
    </div>
    <!-- Grid column -->

  </div>
</section>
  <!-- Grid row -->
        <a class="prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="next" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/spur.js"></script>
</body>

</html>