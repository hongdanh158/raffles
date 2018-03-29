<?php include('header.php') ?>
    <div id="slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/ex/slider/slider-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/ex/slider/slider-2.jpg" alt="Second slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <div class="appointment">
        <ul class="nav nav-tabs">
          <li data-toggle="tooltip" data-placement="top" title="Make an Appointment" ><a class="active" data-toggle="tab" href="#tab1"><span class="icon"><i class="far fa-calendar-alt"></i></span></a></li>
          <li data-toggle="tooltip" data-placement="top" title="Find a Doctor"><a data-toggle="tab" href="#tab2" ><span class="icon"><i class="fas fa-user-md"></i></span></a></li>
        </ul>
        <div class="tab-content">
          <div id="tab1" class="tab-pane active">
            <div class="content">
              <form action="" method="post" id="make-appointment">
                <div class="steps-container">
                 <div class="steps-content">
                    <div class="steps step-1">
                      <div class="row"><p class="size-18" style="margin-left: 15px;">Make an appointment</p></div>
                      <div class="row">
                        <div class="col-lg-12">All fields marked with * are required</div>
                      </div>
                        <div class="row">
                          <div class="col-lg-6 col-sm-12">
                            <select class="selectpicker">
                              <option>Preferred location*</option>
                              <option value="1">Ho Chi Minh</option>
                              <option value="2">Hanoi</option>
                              <option value="3">Vung Tau</option>
                            </select>
                          </div>
                          <div class="col-lg-6 col-sm-12">
                            <select class="selectpicker">
                              <option>Reason for visit</option>
                              <option value="1">Visa Health Check </option>
                              <option value="2">Health Check</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <select class="selectpicker">
                              <option value="Dr. Truong Hoang Phu Phi">Dr. Truong Hoang Phu Phi</option>
                              <option value="Dr. Toshihiko Takajima">Dr. Toshihiko Takajima</option>
                              <option value="Dr. Ong Kian Soon">Dr. Ong Kian Soon</option>
                              <option value="Dr. Orly Dafni Attia">Dr. Orly Dafni Attia</option>
                              <option value="Dr. Jonathan Goh">Dr. Jonathan Goh</option>
                              <option value="Dr. Nguyen Thi Hong Anh">Dr. Nguyen Thi Hong Anh</option>
                              <option value="Dr. Nguyen Hoang Thi">Dr. Nguyen Hoang Thi</option>
                              <option value="Dr. Lai Zhun Neay">Dr. Lai Zhun Neay</option>
                              <option value="Dr. Tran Lan Quyen">Dr. Tran Lan Quyen</option>
                              <option value="Dr. Huynh Chu">Dr. Huynh Chu</option>
                              <option value="Dr. Nguyen Do Nhu Quynh">Dr. Nguyen Do Nhu Quynh</option>
                              <option value="Dr. Ho Si Sach">Dr. Ho Si Sach</option>
                            </select>
                            <!-- <input type="text" class="form-control" placeholder="Preferred Doctor"> -->
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <input type="text" class="form-control datepicker" placeholder="Preferred Appointment Date">
                          </div>
                        </div>
                        <div class="row"  style="margin-top: 3rem">
                          <div class="col-lg-9 col-sm-12">
                            <p>After successful submission, our staff will contact you to confirm your appointment</p>
                          </div>
                          <div class="col-lg-3 col-sm-12 text-right">
                            <a href="#" class="btn btn-primary next">Next</a>
                          </div>
                        </div>
                    </div>
                    <div class="steps step-2">
                        <div class="row">
                          <div class="col-lg-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Full name*">
                          </div>
                          <div class="col-lg-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Email*">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-sm-12">
                            <input type="text" class="form-control" placeholder="Phone number*">
                          </div>
                          <div class="col-lg-6 col-sm-12">
                            <input type="text" class="form-control datepicker" placeholder="DOB*">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-12 col-sm-12">
                            <input type="text" class="form-control" placeholder="HAD ID Number (*) For Visa Health Check only">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                              <label class="form-check-label" for="defaultCheck1">
                                I agree with the Terms and Conditions of use.
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                              <label class="form-check-label" for="defaultCheck2">
                                 I agree that Raffles Medical Vietnam may collec, use and disclose my personal data to contact me in accordance with RM’s data protection policy.
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-6">
                            <a href="#" class="btn btn-primary prev">Prev</a>
                          </div>
                          <div class="col-lg-6 col-6 text-right">
                            <a href="#" class="btn btn-primary next">Submit</a>
                          </div>
                        </div>
                    </div>
                    <div class="steps step-3">
                        <p>Raffles Medical Viet Nam thank you for using our Online  Appointment System. After successful submission, our staff will contact you to confirm your appointment within 4 working – hour. In case of EMERGENCY , please come to our clinics or CALL:</p>
                        <p>
                          <ul>
                            <li><strong>Address:</strong> 167A Nam Ky Khoi Nghia Str.,, HCMC <br> <strong>Tel:</strong> <strong><a href="tel:02838240777" class="red">(028)38240777</a></strong></li>
                            <li><strong>Address:</strong> 51 Xuan Dieu Str., Ha Noi <br> <strong>Tel:</strong> <strong><a href="tel:02838240777" class="red">(024)39340666 </a></strong> - <strong><a href="tel:0243676222" class="red">(024)3676222</a></strong></li>
                            <li><strong>Address:</strong> 01 Le Ngoc Han Str., Vung Tau City  <br> <strong>Tel:</strong> <strong><a href="tel:02543858776" class="red">(0254)3858776</a></strong></li>
                          </ul>
                        </p>
                    </div>
                 </div>
                </div>
              </form>
              <form action="" method="post" id="agree-form">
                  <p><strong>Note:</strong></p>
                  <p>
                    <ul>
                      <li>All fields marked with * are required</li>
                      <li>Online appointment should be made 24 hours in advance. For same day appointment, please call the clinic directly</li>
                      <li>Please read our Terms and Conditions of Use (mình sẽ gắn backlink của Terms and Conditions of Use)</li>
                      <li>In case of EMERGENCY, please CALL</li>
                    </ul>
                  </p>
                  <p>
                    Raffles Medical Ho Chi Minh: <strong><a href="tel:02838240777" class="red">(028)38240777</a></strong>
                  </p>
                  <p>
                    Raffles Medical Hanoi:  <strong><a href="tel:02838240777" class="red">(024)39340666</a></strong> - <strong><a href="tel:0243676222" class="red">(024)3676222</a></strong>
                  </p>
                  <p>
                    Raffles Medical Vung Tau: <strong><a href="tel:02543858776" class="red">(0254)3858776</a></strong>
                  </p>
                  <p>
                    <a href="#" class="btn btn-primary">Agree</a>
                  </p>
              </form>
            </div>
          </div>
          <div id="tab2" class="tab-pane">
            <div class="content">
              <form action="" method="post">
                <div class="row"><p class="size-18" style="margin-left: 1.5rem;">Find a Doctor</p></div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-check">
                      <input class="form-check-input find-doctor" active="doctor-form" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Doctor
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input find-doctor" active="dentist-form" type="radio" name="exampleRadios" id="exampleRadios2" value="option1">
                      <label class="form-check-label" for="exampleRadios2">
                        Dentist
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input find-doctor" active="physician-form" type="radio" name="exampleRadios" id="exampleRadios3" value="option1">
                      <label class="form-check-label" for="exampleRadios3">
                        TCM Physician
                      </label>
                    </div>
                  </div>
                </div>
                <div class="doctor-form dcform active">
                  <div class="row">
                    <div class="col-lg-12">
                      <input type="text" class="form-control" placeholder="Search by Doctor's Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <select class="selectpicker">
                        <option value="1">Specailty</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <span class="or"> or</span>
                      <select class="selectpicker">
                        <option value="1">Centre</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <select class="selectpicker">
                        <option>Location</option>
                        <option value="1">Ho Chi Minh</option>
                        <option value="2">Hanoi</option>
                        <option value="3">Vung Tau</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="dentist-form dcform">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <input type="text" class="form-control" placeholder="Search by Dentist's Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <select class="selectpicker">
                        <option value="1">Specailty</option>
                      </select>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                      <span class="or"> or</span>
                      <select class="selectpicker">
                        <option>Location</option>
                        <option value="1">Ho Chi Minh</option>
                        <option value="2">Hanoi</option>
                        <option value="3">Vung Tau</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="physician-form dcform">
                  <div class="row">
                    <div class="col-lg-12 col-sm-12">
                      <input type="text" class="form-control" placeholder="Search by Physician's Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-sm-12">
                      <select class="selectpicker">
                        <option value="1">Clinical Interest</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <span class="or"> or</span>
                      <select class="selectpicker">
                        <option>Location</option>
                        <option value="1">Ho Chi Minh</option>
                        <option value="2">Hanoi</option>
                        <option value="3">Vung Tau</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-top: 1rem;">
                  <div class="col-lg-9">
                    <a href="#" class="blue-text" style="font-size: 1.6rem !important; display: block; line-height: 1.5;"><i class="far fa-bookmark" ></i> Notes (0 Doctors)</a>
                  </div>
                  <div class="col col-lg-3 text-right">
                    <a href="#" class="btn btn-primary">Find</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="index-three-box">
      <div class="container">
        <div class="row">
          <div class="item col-lg-4 col-sm-12">
           <div class="box">
              <h3 class="name"><a href="#">RAFFLES MEDICAL GROUP</a></h3>
              <p class="text">Raffles Medical Group (RMG) is a leading private healthcare provider in Asia, operating medical facilities across 13 cities in Singapore, China, Japan, Vietnam and Cambodia. </p>
          </div>
          </div>
          <div class="item col-lg-4 col-sm-12">
            <div class="box">
              <h3 class="name"><a href="#">Our Clinics</a></h3>
              <p class="text">Raffles Medical Group (RMG) is a leading private healthcare provider in Asia, operating medical facilities across 13 cities in Singapore, China, Japan, Vietnam and Cambodia. </p>
            </div>
          </div>
          <div class="item col-lg-4 col-sm-12">
            <div class="box">
              <h3 class="name"><a href="#">Our Services</a></h3>
              <p class="text">Raffles Medical Group (RMG) is a leading private healthcare provider in Asia, operating medical facilities across 13 cities in Singapore, China, Japan, Vietnam and Cambodia. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="healthcheck">
      <div class="container">
        <div class="heading">
          <h2>“A perfect healthcheck program could tell your “inside” story”</h2>
        </div>
        <div class="row">
          <div class="item col-lg-4 col-sm-12">
            <div class="box">
              <a href="#" class="icon"><span class="icon-heart-beat"></span></a>
              <h3 class="name"><a href="#">HEALTH CHECK <br> PROGRAMS</a></h3>
              <p class="text">Annual healthcheck screening is one of the best ways to protect your health. A healthy lifestyle means making the right choices in diet and exercise and also having regular health checks to ensure your body are on the right track and to identify any emerging health issues or problems.</p>
            </div>
          </div>
          <div class="item col-lg-4 col-sm-12">
            <div class="box">
              <a href="#" class="icon"><span class="icon-notepad"></span></a>
              <h3 class="name"><a href="#">VISA  <br> HEALTH CHECK</a></h3>
              <p class="text">Raffles Medical Ho Chi Minh Clinic provides Visa Health Check for Australian, New Zealand. Raffles Medical Hanoi provides visa check ups for Belgium and Germany.</p>
            </div>
          </div>
          <div class="item col-lg-4 col-sm-12">
            <div class="box">
              <a href="#" class="icon"><span class="icon-plus"></span></a>
              <h3 class="name"><a href="#">WORK-PERMIT <br>   HEALTH CHECK</a></h3>
              <p class="text">In order to provide the best healthcare service, please make an appointment prior to your visit.</p>
            </div>
          </div>
      </div>
      </div>
    </div>
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col col-lg-3 col-sm-12 left">
            <ul>
              <li>Specialists</li>
              <li>Vaccinations</li>
              <li>Diagnostics</li>
              <li>Fully operational emergency room</li>
              <li>Direct billing with insurance</li>
              <li>Direct billing with insurance</li>
            </ul>
            <a href="#" class="btn btn-primary">View all</a>
          </div>
          <div class="col col-lg-9 col-sm-12 right">
            <div class="heading">
              <h2>Our Services</h2>
              <div class="service-arrow">
                <a href="#" class="slick-arrow services-arrow-left"><i class="fas fa-angle-left"></i></a>
                <a href="#" class="slick-arrow services-arrow-right"><i class="fas fa-angle-right"></i></a>
              </div>
            </div>
            <div class="services-slider">
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/1.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Specialists</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/2.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Family medicine</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/3.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Direct Billing with Insurance</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/1.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Specialists</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/2.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Specialists</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
              <div class="item">
                <div class="box">
                  <a href="#" class="thumbnail">
                    <img src="images/ex/services/3.jpg" alt="">
                  </a>
                  <h3 class="name"><a href="#">Specialists</a></h3>
                  <p class="teaser">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, at!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="healthcare-team">
      <div class="container">
        <div class="heading">
          <h2>Healthcare Team</h2>
          <p>Our healthcare Team comprises of expatriate and national doctors, nurses and specialists, offering primary care, diagnostics and emergency care. Language capabilities include English, Vietnamese,Japanese, Korean, French, Chinese and Russian.</p>
        </div>
        <div class="doctors-slider">
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d1.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Dr. Huynh Chu</a></h3>
              <p class="title">General Practitioner</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d2.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">dr. nguyen thi hong anh</a></h3>
              <p class="title">General Practitioner Obstetrician and Gynecologist</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d3.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Dr. Truong Hoang Phu Phi</a></h3>
              <p class="title">Medical Director</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d4.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">dr. nguyen do nhu quynh</a></h3>
              <p class="title">General Practitioner Health Check Doctor Internal Medicine</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d2.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">dr. nguyen thi hong anh</a></h3>
              <p class="title">General Practitioner Obstetrician and Gynecologist</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d3.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Dr. Truong Hoang Phu Phi</a></h3>
              <p class="title">Medical Director</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/doctors/d4.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">dr. nguyen do nhu quynh</a></h3>
              <p class="title">General Practitioner Health Check Doctor Internal Medicine</p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="index-news">
      <div class="container">
        <div class="heading">
          <h2>Highlight</h2>
          <p>All our consultants are highly experienced in their fields and produce excellent outcomes for patients</p>
        </div>
        <div class="news-slider">
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/1.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/2.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/3.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">Lorem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/1.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">orem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/2.jpg" alt="">
              </a>
              <h3 class="name"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">orem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <a href="#" class="thumbnail">
                <img src="images/ex/news/3.jpg" alt="">
              </a>
              <h3 class="text"><a href="#">Healthy New Year’s resolutions and how to keep them</a></h3>
              <div class="meta">                    
                <span class="post-date">25 March, 2018</span>
              </div>
              <p class="text">orem ipsum dolor amet, consectetur adipiscing elit. Cras ac velit ex. Mauris mollis varius lacus ultrices </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clinics-map">
      <div class="container">
        <div class="heading">
          <h2>Our Clinics in Vietnam</h2>
        </div>
        <a href="#" class="map">
          <img src="images/map.jpg" alt="">
        </a>
      </div>
    </div>    
<?php include('footer.php') ?>
</body>
</html>