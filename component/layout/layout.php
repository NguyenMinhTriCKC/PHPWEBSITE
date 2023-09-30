<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once($level.'lib/metadata.php')?>
</head>

<body>
 
        <!-- Spinner Start -->
        <?php include_once($level.'component/header/spinner.php')?>
        <!-- Spinner End -->


     

        <?php 
   
   if($page == "index")
        {
        ?>

           <!-- Navbar Start -->
           <?php include_once($level.'component/content/index/navbar-index.php')?>
        <!-- Navbar End -->
 
    <!-- Carousel Start -->
    <?php include_once($level.'component/content/index/carousel.php')?>
        <!-- Carousel End -->


        <!-- Facilities Start -->
        <?php include_once($level.'component/reuse/facilities.php')?>
        <!-- Facilities End -->


        <!-- About Start -->
        <?php include_once($level.'component/reuse/about1.php')?>
        <!-- About End -->


        <!-- Call To Action Start -->
        <?php include_once($level.'component/reuse/actionstart.php')?>
        <!-- Call To Action End -->


        <!-- Classes Start -->
        <?php include_once($level.'component/reuse/classesstart.php')?>
        <!-- Classes End -->


        <!-- Appointment Start -->
       <?php include_once($level.'component/reuse/appointmentend.php')?>
        <!-- Appointment End -->


        <!-- Team Start -->
        <?php include_once($level.'component/reuse/teamstart.php')?>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php include_once($level.'component/reuse/testimonial.php')?>
        <!-- Testimonial End -->

        
        <?php
        }
         ?>

      
      <?php if($page=="404")
        {
        ?>
           <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
        
      
      <!-- Page Header End -->
        <?php include_once($level.'component/header/pageheader.php')?>
        <!-- Page Header End -->


        <!-- 404 Start -->
        <?php include_once($level.'component/content/404/404start.php')?>
        <!-- 404 End -->

        <?php 
        }
        ?>
      
      <?php if($page=="about")
        {
        ?>
           <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
  
  <!-- Page Header start -->
  <?php include_once($level.'component/header/pageheader.php')?>
        <!-- Page Header End -->

         <!-- About Start -->
         <?php include_once($level.'component/reuse/about1.php')?>
         <!-- About End -->


        <!-- Call To Action Start -->
        <?php include_once($level.'component/reuse/actionstart.php')?>
        <!-- Call To Action End -->


        <!-- Team Start -->
        <?php include_once($level.'component/reuse/teamstart.php')?>
        <!-- Team End -->
      
      <?php 
        }
        ?>
      
      <?php if($page=="appointment")
        {
        ?>
           <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->


        <!-- Page Header End -->
        <?php include_once($level.'component/header/pageheader.php')?>
        <!-- Page Header End -->


        <!-- Appointment Start -->
        <?php include_once($level.'component/reuse/appointmentend.php')?>
        <!-- Appointment End -->


        <?php 
        }
        ?>
      
      <?php if($page=="callaction")
        {
        ?>
           <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
      
      <!-- Page Header End -->
        <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->


            <!-- Call To Action Start -->
        <?php include_once($level.'component/reuse/actionstart.php')?>
            <!-- Call To Action End -->


            <?php 
            }
            ?>
        
        <?php if($page=="classes")
            {
            ?>
               <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
     
     <!-- Page Header End -->
        <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->



        
            <!-- Classes Start -->
            <?php include_once($level.'component/reuse/classesstart.php')?>
            <!-- Classes End -->


            <!-- Appointment Start -->
            <?php include_once($level.'component/reuse/appointmentend.php')?>
            <!-- Appointment End -->

        <!-- Testimonial Start -->
        <?php include_once($level.'component/reuse/testimonial.php')?>
            <!-- Testimonial End -->
        
            <?php 
            }
            ?>
  
            <?php if($page=="contact")
            {
            ?>
               <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
          
          <!-- Page Header End -->
             <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <?php include_once($level.'component/content/contact/contactstart.php')?>
            <!-- Contact End -->

            <?php 
            }
            ?>
         
         <?php if($page=="facility")
            {
            ?>
               <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->
            
            <!-- Page Header End -->
            <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->

            <!-- Facilities Start -->
            <?php include_once($level.'component/reuse/facilities.php')?>
            <!-- Facilities End -->


            <?php 
            }
            ?>
            <?php if($page=="team")
            {
            ?>
               <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->

            <!-- Page Header End -->
          <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->


            <!-- Team Start -->
            <?php include_once($level.'component/reuse/teamstart.php')?>
            <!-- Team End -->
            
            <?php 
            }
            ?>
            
            <?php if($page=="testimonial")
            {
            ?>
               <!-- Navbar Start -->
        <?php include_once($level.'component/header/navbar.php')?>
        <!-- Navbar End -->

            <!-- Page Header End -->
            <?php include_once($level.'component/header/pageheader.php')?>
            <!-- Page Header End -->


            <!-- Testimonial Start -->
            <?php include_once($level.'component/reuse/testimonial.php')?>
            <!-- Testimonial End -->
            <?php 
            }
            ?>
    

       

        <!-- Footer Start -->
        <?php include_once($level.'component/footer/footer.php')?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <?php include_once($level.'lib/backtotop.php')?>

    <!-- JavaScript Libraries -->
    <?php include_once($level.'lib/javascript.php')?>
</body>

</html>