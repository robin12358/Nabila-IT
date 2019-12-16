<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Welcome To MY website</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.icon----->
  <link rel="icon" href="{{env('PUBLIC_PATH')}}/public_resource/icone.jpg">
  <!-- Place favicon.ico in the root directory -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	 <!----google font link strt------>
	<link href="https://fonts.googleapis.com/css?family=Livvic|Quicksand&display=swap" rel="stylesheet">
	<!----google font link end------>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/public_resource/css/normalize.css">
  <link rel="stylesheet" href="{{env('PUBLIC_PATH')}}/public_resource/maincss.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
</head>

<body>
  <!--[if IE9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  <!----menu strt------>
  	<div class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{env('PUBLIC_PATH')}}/public_resource/img/Nabila-iT.png" style="width: auto; height:30px; margin-left:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="padding-left:inherit; margin-left:auto;">
       <li class="nav-item">
        <a class="nav-link" href="mainhtml.html">Home</a>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="DropdownMenu/appdevelophtml.html">Software Development</a>
          <a class="dropdown-item" href="DropdownMenu/websitedesignhtml.html">Website Design</a>
          <a class="dropdown-item" href="DropdownMenu/webDevelopnhtml.html">Website Development</a>
          <a class="dropdown-item"  href="DropdownMenu/appdevelophtml.html">Andriod Apps Development</a>
		  <a class="dropdown-item"  href="DropdownMenu/graphicedesignhtml.html">Graphic Design</a>
		   <a class="dropdown-item" href="DropdownMenu/webDevelopnhtml.html">Wordpress Plugin</a>
		   <a class="dropdown-item"  href="DropdownMenu/websitedesignhtml.html">Website design & Development</a>
		   <a class="dropdown-item"  href="DropdownMenu/webDevelopnhtml.html">E-Commerce Website Development</a>

        </div>
      </li>

	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		<a class="dropdown-item"  href="DropdownMenu/seonhtml.html">Search Engine Optimization(SEO)</a>
		    <a class="dropdown-item"  href="DropdownMenu/digitalfilmhtml.html">Digital Filmmaking</a>
          <a class="dropdown-item"  href="DropdownMenu/appdevelophtml.html">Software Development</a>
          <a class="dropdown-item"  href="DropdownMenu/websitedesignhtml.html">Website Design</a>
          <a class="dropdown-item"  href="DropdownMenu/webDevelopnhtml.html">Website Development</a>
          <a class="dropdown-item"  href="DropdownMenu/appdevelophtml.html">Andriod Apps Development</a>
		  <a class="dropdown-item"  href="DropdownMenu/graphicedesignhtml.html">Graphic Design</a>
		   <a class="dropdown-item"  href="DropdownMenu/webDevelopnhtml.html">Wordpress Plugin</a>
		   <a class="dropdown-item"  href="DropdownMenu/websitedesignhtml.html">Website design & Development</a>
		   <a class="dropdown-item"  href="DropdownMenu/webDevelopnhtml.html">E-Commerce Website Development</a>
        </div>
      </li>

     <li class="nav-item">
        <a class="nav-link" href="careerthtml.html">Career</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="Aboutushtml.html">About us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contacthtml.html">Contact us</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="eventhtml.html">Event</a>
      </li>
    </ul>

  </div>
</nav>

			</div>
  <!---menu end------->
  <!-----slider start---->
  <section>
     <div id="slider-animation" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="{{env('PUBLIC_PATH')}}public_resource/carousel-item active">
        <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg1.png" alt="Los Angeles">
          <div class="text-box">
              <h2 class="wow slideInRight" data-wow-duration="2s">BEST TRAINING
              <br>IN BANGLADESH </h2>
              <p class="wow slideInLeft" data-wow-duration="2s">We are the only Professional Training Institute in Feni. </p>
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{env('PUBLIC_PATH')}}public_resource/img/675px.png" alt="Los Angeles">
          <div class="text-box">
              <h2 class="wow fadeInUp" data-wow-duration="4s">BEST TRAINING
              <br>IN BANGLADESH </h2>
              <p class="wow fadeInUp" data-wow-duration="2s">We are the only Professional Training Institute in Feni. </p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="{{env('PUBLIC_PATH')}}public_resource/img/04.png" alt="Los Angeles">
          <div class="text-box">
              <h2 class="wow slideInRight" data-wow-duration="4s">BEST TRAINING
              <br>IN BANGLADESH </h2>
              <p class="wow slideInLeft" data-wow-duration="2s">We are the only Professional Training Institute in Feni. </p>
          </div>
      </div>

  </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#slider-animation" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>

  </section>

  <!-----slider end------>

  <!-----marquee strt---->

  <section>
    <div class="notice sticky" style="background-color:#FF6600;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12 padding-0">
            <div class="flash-box hidden-xs">
              <p>Notice</p>
            </div>
          </div>
          <div class="col-lg-10 col-md-9 col-sm-10 col-xs-12">
            <marquee scrollamount="17" onMouseOver="this.stop();" onMouseOut="this.start();" style="text-align:center;">
              <ul class="list-inline">
                <h3> The website is Under Construction now.</h3>

              </ul>
            </marquee>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-----marquee end---->

  <!-----About us strt------>

  <section class="services pt-100 pb-50" id="services" >
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">

                     <h4>About US</h4>


                  </div>
               </div>
            </div>

			<p class="lead">Nabila iT is a global IT and Engineering solutions provider catering to a diverse customer base.and leading ICT training service center. We ensure to empower our clients with innovative solutions that add measurable value to business, while adhering to global quality standards.
      We offer an optimal blend of business processes in varied domains to enable our customers to meet their corporate goals.
    </p>

		</div>
	</section>

  <!-----About us strt------>

  <!-----service Strt------>


   <section class="services pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">

                     <h4>Our services</h4>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-laptop"></i>
                     <h4>Web Design </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-cog"></i>
                     <h4>Web Development</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-mobile"></i>
                     <h4>Responsive Design</h4>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                 <div class="single-service">
                    <i class="fa fa-magic"></i>
                     <h4>Graphic Design</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                    <i class="fa fa-mobile"></i>
                     <h4>Andriod Apps Development</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <!-- Single Service -->
                  <div class="single-service">
                     <i class="fa fa-pencil-ruler"></i>
                     <h4>Search Engine Optimization</h4>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
</body>



  <!-----service end------>

  <!-----courses strt------>

    <section class="services pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">

                     <h4>Courses</h4>
                  </div>
               </div>
            </div>

        <p class="lead">Nabila iT is a global IT and Engineering solutions provider catering to a diverse customer base.and leading ICT training service center. We ensure to empower our clients with innovative solutions that add measurable value to business, while adhering to global quality standards.
        We offer an optimal blend of business processes in varied domains to enable our customers to meet their corporate goals.
      </p>
    </div>
<br><br>
<!--Modal start -->

<!-- Apply Modal start here-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

          <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control"  placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label for="exampleInputMobile">Mobile No</label>
                  <input type="name" class="form-control"  placeholder="Enter Mobile no">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputCourse">Select your Course</label>
                    <select name="" class="form-control">
                          <option value="">Website design</option>
                          <option value="">Web development</option>
                          <option value="">Software development</option>
                          <option value="">Graphics design</option>
                          <option value="">Web design & development</option>
                          <option value="">Andriod development</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputCourse">Select your Education</label>
                    <select name="" class="form-control">
                          <option value="">SSC</option>
                          <option value="">HSC</option>
                          <option value="">Diploma</option>
                          <option value="">BSc</option>
                          <option value="">Degree</option>
                    </select>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  <button type="button" class="btn btn-secondary btn-sm align-right" data-dismiss="modal">Close</button>
                </div>
      </form>
        </div>
        </div>
    </div>
</div>

  <!-- Apply Modal End here-->

<!--Modal end-->

<!-- Cards container -->
    <div class="container text-center">
        <div class="row">

<!-- Card #1, Starter -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <!-- Indicator of subscription type -->
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Web Development</h4>
                    </div>
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; color:#FF6600; font-size: 3.5em;">
                            <span style=" color:#FF6600;  font-size: 20px;">৳</span>15,000
                        </h1>
                    </div>
                    <!-- Perks of said subscription -->
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="pl-3 pr-3">Basic to Advance</li>
                            <li class="pl-3 pr-3">6th Month course</li>
                            <li class="pl-3 pr-3">Total Hours : 94</li>

                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                      <!--  <button type="submit" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>

<!-- Card #2, Intermediate -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Software Development</h4>
                    </div>
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;  color:#FF6600;">
                            <span style="font-size: 20px;">৳</span>18,000
                        </h1>
                    </div>
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                             <li class="pl-3 pr-3">Basic to Advance</li>
                            <li class="pl-3 pr-3">6th Month course</li>
                            <li class="pl-3 pr-3">Total Hours : 94</li>
                        </ul>
                    </div>
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                      <!--  <button type="button" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>





			<div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <!-- Indicator of subscription type -->
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Andriod Apps Development</h4>
                    </div>
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;  color:#FF6600;">
                            <span style="   font-size: 20px;">৳</span>9000
                        </h1>
                    </div>
                    <!-- Perks of said subscription -->
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="pl-3 pr-3">Basic to Advance</li>
                            <li class="pl-3 pr-3">4th Month course</li>
                            <li class="pl-3 pr-3">Total Hours : 48</li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                      <!--  <button type="button" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>




		<div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <!-- Indicator of subscription type -->
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">

                        <h4>Web Design </h4>
                    </div>
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;  color:#FF6600;">
                            <span style="   font-size: 20px;">৳</span>7000
                        </h1>
                    </div>
                    <!-- Perks of said subscription -->
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                          <li class="pl-3 pr-3">Basic to Advance</li>
                          <li class="pl-3 pr-3">4th Month course</li>
                          <li class="pl-3 pr-3">Total Hours : 48</li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                    <!--    <button type="button" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>




		<div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <!-- Indicator of subscription type -->
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Graphic Design</h4>
                    </div>
                    <!-- Price class -->
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;  color:#FF6600;">
                            <span style="   font-size: 20px;">৳</span>5000
                        </h1>
                    </div>
                    <!-- Perks of said subscription -->
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                          <li class="pl-3 pr-3">Basic to Advance</li>
                          <li class="pl-3 pr-3">3th Month course</li>
                          <li class="pl-3 pr-3">Total Hours : 36</li>
                        </ul>
                    </div>
                    <!-- Button -->
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                      <!--  <button type="button" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>


<!-- Card #3, Professional -->
            <div class="col-lg-4 col-md-6 col-sm-10 pb-4 d-block m-auto">
                <div class="pricing-item" style="box-shadow: 0px 0px 30px -7px rgba(0,0,0,0.29);">
                    <div class="pt-4 pb-3" style="letter-spacing: 2px">
                        <h4>Web design & Development </h4>
                    </div>
                    <div class="pricing-price pb-1 text-primary color-primary-text ">
                        <h1 style="font-weight: 1000; font-size: 3.5em;  color:#FF6600;">
                            <span style="font-size: 20px;">৳</span>20,000
                        </h1>
                    </div>
                    <div class="pricing-description">
                        <ul class="list-unstyled mt-3 mb-4">
                          <li class="pl-3 pr-3">Basic to Advance</li>
                          <li class="pl-3 pr-3">6th Month course</li>
                          <li class="pl-3 pr-3">Total Hours : 94</li>
                    </div>
                    <div class="pricing-button pb-4">
                      <a href="#" class="btn btn-lg btn-primary w-75" style="background-color:#FF6600;" data-toggle="modal" data-target="#exampleModal">Apply Now</a>
                      <!--  <button type="button" class="btn btn-lg btn-primary w-75" style=" background-color:#FF6600;">Apply Now</button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-----courses end------>


	<!--- PORTFOLIO strt------>


  <section class="services pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">

                     <h4>Our PORTFOLIO</h4>
                  </div>
               </div>
            </div>

        <p class="lead">Nabila iT is a global IT and Engineering solutions provider catering to a diverse customer base.and leading ICT training service center. We ensure to empower our clients with innovative solutions that add measurable value to business, while adhering to global quality standards.
        We offer an optimal blend of business processes in varied domains to enable our customers to meet their corporate goals.
      </p>
    </div>



			<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: transparent;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btnt {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btnt:hover {
  background-color: #ddd;
}

.btnt.active {
  background-color: #666;
  color: white;
}
</style>


<!-- MAIN (Center website) -->
<div class="main">

<center>
<div id="myBtnContainer">
  <button class="btnt active" onClick="filterSelection('all')"> Show all</button>
  <button class="btnt" onClick="filterSelection('nature')"> Nature</button>
  <button class="btnt" onClick="filterSelection('cars')"> Cars</button>
  <button class="btnt" onClick="filterSelection('people')"> People</button>
</div>
</center>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="{{env('PUBLIC_PATH')}}public_resource/img/dfgddfg.jpg" alt="Mountains" style="width:100%">

	  <h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Graphic Design</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/img/computers.png" alt="Lights" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Pograming</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg.jpg" alt="Nature" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Web Design</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>

  <div class="column cars">
    <div class="content">
      <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg1.jpg" alt="Car" style="width:100%">
	  <h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Software Development</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg2.jpg" alt="Car" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Web Development</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/img/bgg.jpg" alt="Car" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">OOP</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg4.jpg" alt="Car" style="width:100%">
	  <h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">PHP & Laravel</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/img/bg5.jpg" alt="Car" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">SEO</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="{{env('PUBLIC_PATH')}}public_resource/{{env('PUBLIC_PATH')}}public_resource/img/bg6.jpg" alt="Car" style="width:100%">
	<h4 style="text-align:center;font-family: 'Quicksand', sans-serif;">Domain & Hosting</h4>
      <p>NIT is global IT and Engineering solutions.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>



	</div>
  </section>
 <!--- PORTFOLIO end------>



 <!---MY Team Strt------>
 <section class="services pt-100 pb-50" id="services">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">

                     <h4>Our Team</h4>
                  </div>
               </div>
            </div>

        <p class="lead">Nabila iT is a global IT and Engineering solutions provider catering to a diverse customer base.and leading ICT training service center. We ensure to empower our clients with innovative solutions that add measurable value to business, while adhering to global quality standards.
        We offer an optimal blend of business processes in varied domains to enable our customers to meet their corporate goals.
      </p>
    </div>


 <br><br>

 <div class="container">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/jahid.jpg">
        </div>
        <div class="team-content">
          <h3 class="name">Md.Jahid</h3>
          <h4 class="title">Fullstack Developer</h4>
          <h4 class="title">CEO of NiT</h4>
        </div>
        <ul class="social">
          <li><a href="#" class="fab fa-facebook-square" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-twitter" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-gofore" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-instagram" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/team2.jpg">
        </div>
        <div class="team-content">
          <h3 class="name">Patricia Knott</h3>
          <h4 class="title">Web Designer</h4>
          <br>
        </div>
        <ul class="social">
          <li><a href="#" class="fab fa-facebook-square" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-twitter" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-gofore" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-instagram" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/team3.jpg">
        </div>
        <div class="team-content">
          <h3 class="name">Justin Ramos</h3>
          <h4 class="title">Web Developer</h4>
          <br>
        </div>
        <ul class="social">
         <li><a href="#" class="fab fa-facebook-square" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-twitter" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-gofore" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-instagram" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
      <div class="our-team">
        <div class="picture">
          <img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/team4.png">
        </div>
        <div class="team-content">
          <h3 class="name">Mary Huntley</h3>
          <h4 class="title">Web Developer</h4>
          <br>
        </div>
        <ul class="social">
          <li><a href="#" class="fab fa-facebook-square" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-twitter" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-gofore" aria-hidden="true"></a></li>
          <li><a href="#" class="fab fa-instagram" aria-hidden="true"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>




 <!--- MY Team end------>











  <!-----fOOTER strt------>


    <footer class="kilimanjaro_area">
        <!-- Top Footer Area Start -->
        <div class="foo_top_header_one section_padding_100_70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>About Us</h5>
                            <p> Nabila iT is a global IT and Engineering solutions provider catering to a diverse customer base.and leading ICT training service center. We ensure to empower our clients with innovative solutions that add measurable value to business, while adhering to global quality standards.
                            We offer an optimal blend of business processes in varied domains to enable our customers to meet their corporate goals.
                          </p>
                        </div>
                        <div class="kilimanjaro_part m-top-15">
                            <h5>Social Links</h5>
                            <ul class="kilimanjaro_social_links">
                                <li><a href="#"><i class="fab fa-facebook-square" aria-hidden="true"></i> Facebook</a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                                <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                                <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
								<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>instagram</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Courses</h5>
                            <ul class=" kilimanjaro_widget">
                               <li><a href="DropdownMenu/webDevelopnhtml.html">Web Development</a></li>
                                <li><a  href="DropdownMenu/appdevelophtml.html">Software Development</a></li>
                                <li><a  href="DropdownMenu/appdevelophtml.html">Andriod Apps Development</a></li>
                                <li><a href="DropdownMenu/websitedesignhtml.html">Web Design</a></li>
                                <li><a  href="DropdownMenu/graphicedesignhtml.html">Graphic Design</a></li>
                                <li><a  href="DropdownMenu/webDevelopnhtml.html">Pograming</a></li>
                                <li><a  href="DropdownMenu/seonhtml.html">SEO</a></li>
                                <li><a  href="DropdownMenu/webDevelopnhtml.html">PHP Laravel</a></li>
                            </ul>
                        </div>

                        <div class="kilimanjaro_part m-top-15">
                            <h5>Our Services</h5>

                            <ul class="kilimanjaro_links">

  <li><a href="DropdownMenu/websitedesignhtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Web Design</a></li>
<li><a href="DropdownMenu/webDevelopnhtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Web Development</a></li>
 <li><a href="DropdownMenu/appdevelophtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Andriod Apps Development</a></li>
<li><a href="DropdownMenu/webDevelopnhtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Pograming</a></li>
 <li><a href="DropdownMenu/seonhtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>SEO</a></li>
 <li><a  href="DropdownMenu/graphicedesignhtml.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Graphic Design</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Latest Event</h5>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/ft1.jpg"alt="">

                                </div>
                                <a href="eventhtml.html">Web Development Offers</a>
                                <p class="kilimanjaro_date">21 Sep 2019</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/ft3.jpg" alt="">
                                </div>
                                <a href="eventhtml.html">Software Development Offers</a>
                                <p class="kilimanjaro_date">21 Sep 2019</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="kilimanjaro_blog_area">
                                <div class="kilimanjaro_thumb">
								<img class="img-fluid" src="{{env('PUBLIC_PATH')}}public_resource/img/ft2.jpg" alt="">
                                </div>
                                <a href="eventhtml.html">Web design Offers</a>
                                <p class="kilimanjaro_date">21 Sep 2019</p>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="kilimanjaro_part">
                            <h5>Contact US</h5>
                            <div class="kilimanjaro_single_contact_info">
                                <h5>Phone:</h5>
                                <p>+88 01815-12 41 29 <br> +88 01719-33 10 57</p>
                            </div>

							<div class="kilimanjaro_single_contact_info">
                                <h5>Address:</h5>
                                <p>Academy Road Feni <br> Feni Bangladesh</p>
                            </div>

                            <div class="kilimanjaro_single_contact_info">
                                <h5>Email:</h5>
                                <p>jahid68582@gmail.com<br>jahidcsharp@gmail.com</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Start -->
        <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>© All Rights Reserved by <a href="#">NIT</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




  <!-----Footer end------>











  <!--- PORTFOLIO strt js------>

  <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}





</script>


  <!--- PORTFOLIO end js------>







   <!---bCK TO TOP END JS----->












  <!----js link strt------>
  <script src="{{env('PUBLIC_PATH')}}/public_resource/js/jquray.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{env('PUBLIC_PATH')}}/public_resource/js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="{{env('PUBLIC_PATH')}}/public_resource/js/vendor/jquery-3.3.1.min.js"></script>')</script>
  <script src="{{env('PUBLIC_PATH')}}/public_resource/js/plugins.js"></script>
  <script src="{{env('PUBLIC_PATH')}}/public_resource/js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <!-----js link end----->


</body>

</html>
