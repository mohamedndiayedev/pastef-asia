      <?php 
      session_start();
    include('includes/header.php');
      ?>
        <!-- SECTION 1 -->
        <section class="grid margin-bottom-20">
          <div class="m-12 l-7 center">
            <!-- Contact Information-->
            <div class="s-12 padding-2x background-white text-center">                  
              <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase text-dark">PASTEF ASIA - SONKO FOR PRESIDENT</h2>                
              <p>Join the team from anywhere in Asia</p>
                           
                  <div class="styled-form register-form">
                        <form action="code.php" method="POST">
                            <div class="form-group">
                              <label>Full Name</label>
                                <span class="adon-icon"><span class=""></span></span><br/>
                              <input class="form-control" type="text" name="name" placeholder="Full Name *" required>
                            </div>
                            <div class="form-group">
                              <label>Email</label>
                                <span class="adon-icon"><span class=""></span></span><br/>
                                <input class="form-control check_email" type="email" name="email" placeholder="Email *" required>
                                 
                            </div>

                            <div class="form-group">
                              <label>Country</label>
                                <span class="adon-icon"><span class=""></span></span><br/>
                                <input class="form-control" type="text" name="country" placeholder="Country *" required>
                            </div>

                            <div class="form-group">
                               <label>Phone Number</label>
                                <span class="adon-icon"><span class=""></span></span><br/>
                                <input class="form-control" type="text" name="phone" placeholder="Phone Number *" required>
                            </div>
                                                       <div class="form-group"><br/>
                                  <label>Date</label>
                                  <span class="adon-icon"><span class=""></span></span><br/>
                                  <input class="form-control" type="date" name="date" placeholder="Date *">
                           </div>
                           <div class="form-group"><br/>
                                  <label>Upload Picture</label>
                                  <span class="adon-icon"><span class=""></span></span><br/>
                                  <input class="form-control" type="file" name="photo" placeholder="Upload photo *">
                           </div>

                            <div class="clearfix"><br/>
                                <div class="form-group pull-left">
                            <button type="submit" name="pastef" class="theme-btn btn-style-one">Team Up with Pastef now!</button>
                                </div>
                                <div class="form-group padd-top-15 pull-right">
                                   Thank you for subscribing! 
                                </div>
                            </div>
                            
                        </form>
                    </div>
              <p></p>               
            </div>  
          </div>                  

        </section>
      </main>
      
       
      <?php 
    include('includes/footer.php');
      ?>