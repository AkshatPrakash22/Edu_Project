<?php
  include('db.php');
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="/___vscode_livepreview_injected_script"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>singup</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1>WELCOME USER</h1>
    <a href="login.php">Logout</a>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css">
   
</head>
<body>
   <div class="sction">
      <div class="navbar">
         <div class="logo">
            <img src="ahaguru-logo (1).png" height="50" width="100">
         </div>
         <label for="course">
            <div class="search-bar">
               <i class="fa-solid fa-magnifying-glass"></i>
               <input class="searchtext" id="course" type="text" placeholder="Search by course name">
            </div>
         </label>
         <a href="login.php">
         <button class="button" id="myButton" type="button">Logout</button>
      </a>
         <!-- <div class="cart">
            <a href=""><i id="cart-logo" class="fa-solid fa-cart-shopping"></i></a>
         </div> -->
      </div>
      
      <!-- here nav is over -->
      <div class="nav-content">
         <ul>
            <li><a href="">Classrooms</a>
               <ul class="dropdown">
                  <li><a href="http://localhost/project-2/registration.php">Registration Form</a></li>
                  <li><a href="">JEE</a>
                     <!-- <ul class="dropdown">
                        <li><a href="">Class11th</a></li>
                        <li><a href="">Class12th</a></li>
                        <li><a href="">Class12th Pass</a></li>
                        <li><a href="">CRASH COURSE</a></li>
                     </ul> -->
                  </li>
                  <li><a href="">NEET</a>
                     <!-- <ul class="dropdown">
                        <li><a href="">Class11th</a></li>
                        <li><a href="">Class12th</a></li>
                        <li><a href="">Class12th Pass</a></li>
                        <li><a href="">CRASH COURSE</a></li>
                     </ul> -->
                  </li>
                  <li><a href="">OLYMPYIAD</a></li>
               </ul>
            </li>
            <li><a href="">Residential Program</a></li>
            <li><a href="">Online Courses</a></li>
            <li><a href="">Pay Fee</a></li>
            <li><a href="scholarship.html">Scholarship</a></li>
            <li><a href="">Result</a></li>
            
         </ul>
      </div>
   </div>
   <div class="container">
      <div class="slider-wrapper">
        <button id="prev-slide" class="slide-button material-symbols-rounded">
          chevron_left
        </button>
        <ul class="image-list">
          <img class="image-item" src="udm1.jpg" alt="img-1" />
          <img class="image-item" src="udm2.jpg" alt="img-2" />
          <img class="image-item" src="udm3.jpg" alt="img-2" />
          
        </ul>
        <button id="next-slide" class="slide-button material-symbols-rounded">
          chevron_right
        </button>
      </div>
      <div class="slider-scrollbar">
        <div class="scrollbar-track">
          <div class="scrollbar-thumb"></div>
        </div>
      </div>
    </div>
    <div class="new-heading">
      <h1 class="heading">Course & Fee</h1>
   </div>
   <!-- here we write course -->
    <div class="container-course-box">
      <div class="column-flex-wrap">
         <div class="box1">
            <div class="course1">
               <div class="card1">
                  <div class="top-section">
                     <div class="header-img">
                        <picture>
                           <img src="phy_prof1.jpg" height="295px" width="480px">
                        </picture>
                     </div>
                     <div class="eaual-box-header">
                        <div class="subject-title">Class 11</div>
                        <div class="subject-title">Physic for IIT JEE + CBSE +NEET </div>
                     </div>
                     <div class="equal-box-body">
                        <ul class="record">

                           <li class="li1">
                              <img src="tab1.png" width="75%"> 225 Concept Video Lecture
                           </li>
                           <li><img src="tab2.png" width="75%"> 497 Solved Video Examples
                           </li>
                           <li><img src="tab3.png" width="75%"> 362 Practice Question
                           </li>
                           <li><img src="tab4.png" width="75%"> Certificate of Completion
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="top-section-bottom">
                     <div class="row">
                        <div class="column1">
                           <p class="mb-0">Rs.<span class="amount">15000</span>
                              <small style="color: rgb(109, 109, 109)"> <s>Rs.<span class="strike">20000</span></s></small>
                          </p>
                           
                        </div>
                        <div class="column2">
                           <a class="view_topics_btn" id="view_topics_btn4"  href="" >View Topics</a>
                        </div>
                     </div>
                     <div class="take-course">
                        <div class="d-flex justify-content-center align-items-center mt-3">
                           <a class="btn buyBtn d-flex justify-content-center align-items-center tick">
                               <span class="main_check">
                                   <img src="btn.png" alt="buy_btn" id="myImg">
                               </span>
                               <form class="crs_batch">
                                   <input type="hidden" name="batch_id" class="batch_id" value="600">
                               </form>
                               <span class="cart select"> Take this course</span>
                           </a>
                           <!-- <button type="button" name="button">Buy Now</button> -->
                       </div>
                        
                     </div>
                  </div>

               </div>
            </div>
            <!-- box2 -->
            <div class="course1">
               <div class="card1">
                  <div class="top-section">
                     <div class="header-img">
                        <picture>
                           <img src="chem_prof2.jpg" height="295px" width="480px">
                        </picture>
                     </div>
                     <div class="eaual-box-header">
                        <div class="subject-title">Class 11</div>
                        <div class="subject-title">Chemistry for IIT JEE + CBSE +NEET </div>
                     </div>
                     <div class="equal-box-body">
                        <ul class="record">

                           <li class="li1">
                              <img src="tab1.png" width="75%"> 225 Concept Video Lecture
                           </li>
                           <li><img src="tab2.png" width="75%"> 497 Solved Video Examples
                           </li>
                           <li><img src="tab3.png" width="75%"> 362 Practice Question
                           </li>
                           <li><img src="tab4.png" width="75%"> Certificate of Completion
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="top-section-bottom">
                     <div class="row">
                        <div class="column1">
                           <p class="mb-0">Rs.<span class="amount">15000</span>
                              <small style="color: rgb(109, 109, 109)"> <s>Rs.<span class="strike">20000</span></s></small>
                          </p>
                           
                        </div>
                        <div class="column3">
                           <a class="view_topics_btn" id="view_topics_btn4" href="">View Topics</a>
                        </div>
                     </div>
                     <div class="take-course">
                        <div class="d-flex justify-content-center align-items-center mt-3">
                           <a class="btn buyBtn d-flex justify-content-center align-items-center tick">
                               <span class="main_check">
                                   <img src="btn.png" alt="buy_btn" id="myImg">
                               </span>
                               <form class="crs_batch">
                                   <input type="hidden" name="batch_id" class="batch_id" value="600">
                               </form>
                               <span class="cart select"> Take this course</span>
                           </a>
                           <!-- <button type="button" name="button">Buy Now</button> -->
                       </div>
                        
                     </div>
                  </div>

               </div>
            </div>
            <!-- box3 -->
            <div class="course1">
               <div class="card1">
                  <div class="top-section">
                     <div class="header-img">
                        <picture>
                           <img src="math_prof3.jpg" height="295px" width="480px">
                        </picture>
                     </div>
                     <div class="eaual-box-header">
                        <div class="subject-title">Class 11</div>
                        <div class="subject-title">Math for IIT JEE + CBSE +NEET </div>
                     </div>
                     <div class="equal-box-body">
                        <ul class="record">

                           <li class="li1">
                              <img src="tab1.png" width="75%"> 225 Concept Video Lecture
                           </li>
                           <li><img src="tab2.png" width="75%"> 497 Solved Video Examples
                           </li>
                           <li><img src="tab3.png" width="75%"> 362 Practice Question
                           </li>
                           <li><img src="tab4.png" width="75%"> Certificate of Completion
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="top-section-bottom">
                     <div class="row">
                        <div class="column1">
                           <p class="mb-0">Rs.<span class="amount">15000</span>
                              <small style="color: rgb(109, 109, 109)"> <s>Rs.<span class="strike">20000</span></s></small>
                          </p>
                           
                        </div>
                        <div class="column4">
                           <a class="view_topics_btn" id="view_topics_btn4" href="">View Topics</a>
                        </div>
                     </div>
                     <div class="take-course">
                        <div class="d-flex justify-content-center align-items-center mt-3">
                           <a class="btn buyBtn d-flex justify-content-center align-items-center tick " id="myLink">
                               <span class="main_check">
                                   <img src="btn.png" alt="buy_btn" id="myImg">
                               </span>
                               <form class="crs_batch">
                                   <input type="hidden" name="batch_id" class="batch_id" value="600">
                               </form>
                               <span class="cart select"> Take this course</span>
                           </a>
                           <!-- <button type="button" name="button">Buy Now</button> -->
                       </div>
                        
                     </div>
                  </div>

               </div>
            </div>
            <!-- box4 -->
            <div class="course1">
               <div class="card1">
                  <div class="top-section">
                     <div class="header-img">
                        <picture>
                           <img src="bio_prof4.jpg" height="295px" width="480px">
                        </picture>
                     </div>
                     <div class="eaual-box-header">
                        <div class="subject-title">Class 11</div>
                        <div class="subject-title">Biology for IIT JEE + CBSE +NEET </div>
                     </div>
                     <div class="equal-box-body">
                        <ul class="record">

                           <li class="li1">
                              <img src="tab1.png" width="75%"> 225 Concept Video Lecture
                           </li>
                           <li><img src="tab2.png" width="75%"> 497 Solved Video Examples
                           </li>
                           <li><img src="tab3.png" width="75%"> 362 Practice Question
                           </li>
                           <li><img src="tab4.png" width="75%"> Certificate of Completion
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="top-section-bottom">
                     <div class="row">
                        <div class="column1">
                           <p class="mb-0">Rs.<span class="amount">15000</span>
                              <small style="color: rgb(109, 109, 109)"> <s>Rs.<span class="strike">20000</span></s></small>
                          </p>
                           
                        </div>
                        <div class="column5">
                           <a class="view_topics_btn" id="view_topics_btn4" href="">View Topics</a>
                        </div>
                     </div>
                     <div class="take-course">
                        <div class="d-flex justify-content-center align-items-center mt-3">
                           <a class="btn buyBtn d-flex justify-content-center align-items-center tick">
                               <span class="main_check">
                                   <img src="btn.png" alt="buy_btn" id="myImg">
                               </span>
                               <form class="crs_batch">
                                   <input type="hidden" name="batch_id" class="batch_id" value="600">
                               </form>
                               <span class="cart select"> Take this course</span>
                           </a>
                           <!-- <button type="button" name="button">Buy Now</button> -->
                       </div>
                        
                     </div>
                  </div>

               </div>
            </div>
            <!-- end all box -->
            
         </div>
         
      </div>
    </div>
    <!-- here course is over -->

    <div class="studyMaterial">
      <div id="content2"><h1>Study Materials</h1><span3><h1>FREE</h1></span3></div>
      <div class="boxes">
         <div id="free-box1">
            <div id="free-image1">Short Notes<br><span4>Best Handwritten shortNotes JEE,NEET,Boards</span4></div>
            
        </div>
        <div id="free-box2">
            <div id="free-image2">Practice<br><span5>Accurate practice sets for JEE,NEET,Boards</span5></div>
            
        </div>
        <div id="free-box3">
            <div id="free-image3">PYQs<br><span6>Last 5 year PYQ for JEE,NEET,Boards</span6></div>
            
        </div>
     </div>
      </div>

      <!-- here notes div is over -->

      <!-- boods store -->

      <section class="books__buy">
         <div class="container-fluid py-3 py-sm-5 py-md-4 py-lg-5">
             <div class="row-2">
                 <div class="col-lg-4 d-flex justify-content-center align-items-center">
                     <div class="title"><span class="sub_name_span">SCIENCE</span> and <span class="sub_name_span">MATH</span> <br> is Fun with <br> Aha Books and Kits</div>
                 </div>
                 <div class="col-lg-8 d-flex justify-content-center align-items-center">
                     <div class="">
                         <div class="books-img text-center mt-3 mt-sm-4 mt-md-4 mt-lg-0">
                             <a href="https://www.amazon.in/ahaguru" target="_blank"><img src="book1.png" alt="ATOMS_Book_Cover_Mockup" class="book_transition"></a>
                             <a href="https://www.amazon.in/ahaguru" target="_blank"><img src="book2.png" alt="EC_Book_Cover_Mockup" class="book_transition"></a>
                             <a href="https://www.amazon.in/ahaguru" target="_blank"><img src="book3.png" alt="NEWTON's_LAWS Book_Cover_Mockup" class="book_transition"></a>
                             <a href="https://www.amazon.in/ahaguru" target="_blank"><img src="book4.png" alt="PM_Book_Cover_Mockup" class="book_transition"></a>
                         </div>
                         <div class="text-center explorebtn_top">
                             <a href="https://www.amazon.in/ahaguru" type="button" target="_blank" class="btn btn-lg btn-warning mt-4"> Buy Now </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- footer start -->

   <footer class="footer">

  	    <div class="footer-container">
  	 	<div class="footer-row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ol class="footer-list">
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ol>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ol class="footer-list">
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ol>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ol class="footer-list">
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ol>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


    

   <script src="script.js"></script>
</body>
</html>