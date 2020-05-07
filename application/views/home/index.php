  <section class="container">
       <h4 class='orange-text'>
              <?php
              echo  $this->session->flashdata('email_sent');

              ?>
            </h4>
    <center>
      <h2 style="color: #223546;
      font-size: 3.5rem;
      margin-bottom: 35px;
      font-weight: 700;
      line-height: 1.3;
      letter-spacing: -1px;">Collection of New Technonogies Build Progressive Web Apps That has Native alike <span class="orange-text">Experience</span></h2>
      <p style="max-width: 845px;
      width: 100%;
      margin: 0 auto 60px;
      font-size: 1.2rem;">PwaOptimizer builds fast, reliable and engaging progressive web apps (PWAs). We design and develop Progressive Apps with awesome experience that gets placed on user's home screens.</p>
      <div class="slider_icons" style="font-size: 50px;">

        <i class="fas fa-mobile-alt"></i>
        <i class="fas fa-laptop"></i>
        <i class="fas fa-desktop"></i>
        
      </div>
      <a href="<?= base_url('home/contact'); ?>" class="btn">Let's Build Your One :)</a>
    </center>
  </section>
  <section>
    <div class="container">
      <center>
        <h3>
          Major Benefits of Using Progressive Web App | PWA
        </h3>
        <p>
          It's important to have PWA version for every single website and we made it easy for them. Because it provide major functionality of any kind website has. And it will work without <span class="orange-text">INTERNET</span>.   
        </p>
      </center>
      <div class="row">
        <div class="col l3 m3 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?= base_url('images/offline_access.jpg'); ?>" height="200">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Access Offline<i class="material-icons right">more_vert</i></span>
              <p><a href="#">More</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Access Offline<i class="material-icons right">close</i></span>
              <p>Your customer will access all content without internet. Since we will use localStorage of their phone, the browsing exprience will be faster then normal browsing</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?= base_url('images/offline_purchase.jpg'); ?>" height="200">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Offline Purchase<i class="material-icons right">more_vert</i></span>
              <p><a href="#">More</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Offline Purchase<i class="material-icons right">close</i></span>
              <p>When customers want to make purchase you don't want to miss it anyway. They will be able to make purchase offile and the app will keep purchase information and make adjustments whenever it get the internet</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?= base_url('images/notification.jpg'); ?>" height="200">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Notifications<i class="material-icons right">more_vert</i></span>
              <p><a href="#">More</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Offline Notifications<i class="material-icons right">close</i></span>
              <p>It's great because customer/visitor get notification just like live website.</p>
            </div>
          </div>
        </div>
        <div class="col l3 m3 s12">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="<?= base_url('images/fastest_b.jpg'); ?>" height="200">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Fastest Loading<i class="material-icons right">more_vert</i></span>
              <p><a href="#">More</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Fastest Loading<i class="material-icons right">close</i></span>
              <p>They will have databases and other content inside their phone memory and this is how they have fastest browsing experience</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div style="margin: 20px 0; padding: 20px 0;" >
    <section class="container">

      <div class="row">
        <div class="col l6 m6 s12">
          <div class="digital-block d-flex">

            <center>
              <strong class="orange-text" style="font-size: 10rem; padding: 0; margin:0;">90</strong>
              <h4>days free Maintenance</h4>
              <p>
                We are here to support you post-deployment, with Free Maintenance service for 90 days.
              </p>
            </center>
          </div>
        </div>
        <div class="white-text col l6 m6 s12" style="padding: 30px;">
          <div class="row">
            <div class="col s12">
              <center><h5>Quick Contact</h5></center>
              <?= form_open('home/email_home'); ?>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Name" id="name" name="name" type="text" class="validate" required>
                  <label for="name">Name</label>
                </div>

              </div>


              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate" required>
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <textarea id="message" name="message" class="materialize-textarea" required></textarea>
                  <label for="message">Textarea</label>
                </div>
              </div>
              <button type="submit" class="btn">Send</button>
              <?= form_close(); ?>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>

  


<section id="steps" style="margin-top: 40px;">
  <div class="container">
    <div class="row">
      <div class="ser_in" style="padding: 15px;">
        <div class="mode-content-blog col m12 s12 l4" style="font-size: 1.5rem;
        line-height: 1.2;">
        <h3>Standard Process of PWA Development</h3>
        <p>
          We need to understand all your content before we develop your PWA. It's important to make a good layout of all your contents and then decide which are going to be part of PWA. Take a look on steps:
        </p>
      </div>
      <div class="col l8 m12 s12">
        <div class="row">
          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 1</h5>
                <p>Understanding and analyzing business requirements</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">
            <div class="">
              <div class="card-panel ncard">

                <span>
                  <h5>Step - 2</h5>
                  <p>Creating layout and define development technologies</p>
                </span>
              </div>

            </div>
          </div>

          

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 3</h5>
                <p>Designing & Develop using modern techonologies</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 4</h5>
                <p>Creating Databases what will be accessed offline</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 5</h5>
                <p>Testing for everything</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 6</h5>
                <p>Automated, manual and user acceptance testing</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 7</h5>
                <p>Integrating best monitoring and analytics tools</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 8</h5>
                <p>Publishing PWA</p>
              </span>
            </div>


          </div>

          <div class="col l3 m3 s6">

            <div class="card-panel ncard">

              <span>
                <h5>Step - 9</h5>
                <p>Product maintenance and support</p>
              </span>
            </div>


          </div>

        </div>
      </div>
    </div>
  </div>
</div>


</section>

<section class="#eceff1 blue-grey lighten-4" style="padding: 10px 0">
  <section class="other-services">
    <div class="container">
      <div class="other-head-blog">
        <center>
          <h3>Tools & Technologies Used in Progressive Web App Development</h3>
          <p style="max-width: 700px; padding: 25px 0; font-size: 18px;">
           Creating a progressive web app needs multiple design and development technologies. Explore the best ones we work on to deliver amazing PWAs.
         </p>
       </center>

     </div>
     <div class="row">
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-js"></i></h4>

        </div>
      </div>
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-html5"></i></h4>

        </div>

      </div>
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-python"></i></h4>

        </div>
      </div>
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-css3"></i></h4>

        </div>
      </div>
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-php"></i></h4>

        </div>
      </div>
      <div class="col l2 m2 s6">
        <div class="card-panel">
          <h4 class="center"><i class="fab fa-git"></i></h4>

        </div>
      </div>
    </div>
  </section>  
</section>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Quick Register</h4>
    <p>Register to get your order update anytime!</p>
  </div>

  <div class="row">
    
    <form action="<?= base_url().'home/register'; ?>" id="add_client">
    <div class="col s12">
      <div class="row" id="regi">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input type="text" id="name" name="name" class="autocomplete" required>
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input type="email" id="email_id" name="email_id" class="autocomplete" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input type="password" id="passv" name="passv" required>
          <label for="pass">Type Password</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input type="password" id="rpass" name="rpass" required>
          <label for="rpass">Retype Password</label>
        </div>
      </div>
      <button type="submit" class="btn orange right">Register</button>
      </form>
    </div>
  </div>

  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
  </div>
</div>