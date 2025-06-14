<?php
include("header.php");
if(!isset($_SESSION["librarian_id"]))
{
echo "<script>window.location='login.php';</script>";	
}
?>


     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Dashboard <small>Librarian Account</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/bookrecord.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM book";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Books record</li></center>
                              </ul>
                         </div>
                    </div>
					
					
					<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/librarybranch.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM bookcategory";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Book category record</li></center>
                              </ul>
                         </div>
                    </div>
					
					<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/slider-image5.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM book_stock";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Book_stock record</li></center>
                              </ul>
                         </div>
                    </div>
                  
				  <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/librarybranch.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM branch";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Branch records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 
				  <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/course.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM course";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> course records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/fines2.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM finesettings";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> fine settings records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/libr.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM librarian";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>librarian records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/pen.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM penalty";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>penalty records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/People.jpeg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM student";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> student records</li></center>
                              </ul>
                         </div>
                    </div>
                 
				  <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/trans.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
								   $sql ="SELECT * FROM transaction";
								   $qsql= mysqli_query($con,$sql);
								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> Transaction records</li></center>
                              </ul>
                         </div>
                    </div>
             




					
					

               </div>
          </div>
     </section>

<?php
include("footer.php");
?>