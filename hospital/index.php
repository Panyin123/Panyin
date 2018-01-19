<?php include('inc/header.php') ?>

   
   
          <div class="banner">
            <div class="bg-color">
              <div class="container">
                <div class="row">
                  <div class="banner-text text-center">
                    <div class="text-border">
                      <h2 class="text-dec">Quotable quotes</h2>
                    </div>
                    <div class="intro-para text-center quote">
                      <p class="big-text">Learning Today . . . Leading Tomorrow.</p>
                      <p class="small-text">stop feeling sorry for yourself and your will be happy</p>
                      <p>Stephen Fry</p>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>

          </div>
 
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Features</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Our Services</h4>
                    <div class="services">
                      <ul>
                        <li><p>Cardiology</p></li>
                        <li><p>Consulttation</p></li>
                        <li><p>Paedetrick care</p></li>
                        <li><p>Vertinarry</p></li>
                        <li><p>Cybernetics</p></li>
                      </ul>
                    </div>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-css3"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Health Tips</h4>
                  <ul>
                    <li><p>Dont drink drive</p></li>
                    <li><p>don't text and drive</p></li>
                    <li><p>Eat more veggies and fruits</p></li>
                    <li><p>cut down on proccessed foods</p></li>
                  </ul>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-drupal"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Our Awards</h4>
                  <ul>
                    <li><p>The Liverpool awards</p></li>
                    <li><p>The Panyin Health awards</p></li>
                    <li><p>The Gerrard Sports awards</p></li>
                  </ul>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-trophy"></i>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>

    <!--/ Organisations-->
    <!--Cta-->
    <section id="cta-2">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Subscribe Now</h2>
              <p class="cta-2-txt">Sign up for our free weekly health tips, we’ll send them right to your inbox.</p>
             <div class="cta-2-form text-center">
              <form action="#" method="post" id="workshop-newsletter-form">
                    <input name="" placeholder="Enter Your Email Address" type="email">
                    <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                </form>
             </div>   
            </div>
        </div>
      </div>
    </section>
    <!--/ Cta-->
    <!--work-shop-->
    <div class="container">
      <div class="row">
      
      </div>
    </div>

    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="center">
          <h1>OUR LOCATION</h1>
          </div>
          <div class="header-section text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15880.844771610335!2d-0.17291084999999998!3d5.6825867!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sgh!4v1495024281735" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h2 id="contact">Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="#" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
              </div>
          </form>
          <?php 
            $email  = "panyinpokudankwa3@gmail.com"; 
            $title   = "subject"; 
            $message = "Text message !"; 
            mail($email, $title, $message); 
          ?>
        </div>
      </div>
    </section>

<?php include('inc/footer.php'); ?>