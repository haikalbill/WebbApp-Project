@extends('master.donationlayout')
@section('content')

   <!-- ======= Donation Section ======= -->
   <section id="donation" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br>
        <h2>Donate Now</h2>
        <p>Donate <span>Today</span> With Us</p>
      </div>

      <div class="row g-0">

        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/Five-NGOs-Fighting-World-Hunger-scaled.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <form action="forms/connect.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" >
            <div class="row gy-4">
              <div class="col-lg-12 col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-12 col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-12 col-md-6">
                <label for="phone">Phone Number</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlength:10" data-rule-required="true" data-msg="Please enter at least 10 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-12 col-md-6">
                <label for="cardName">Card Holder Name</label>
                <input type="text" name="cardName" class="form-control" id="cardName" placeholder="Card Holder Name" data-rule="minlen:2" data-msg="Please enter at least 2 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-12 col-md-6">
                <label for="cardNo">Credit Card Number</label>
                <input type="number" class="form-control" name="cardNo" id="cardNo" placeholder="Credit Card Number" data-rule="minlen:12" data-msg="Please enter at least 12 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 col-md-6">
                <label for="ccv">CCV</label>
                <input type="number" class="form-control" name="ccv" id="ccv" placeholder="CCV" data-rule="minlen:3" data-msg="Please enter 3 chars" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 col-md-6">
                <label for="expDate">Exp Date</label>
                <input type="date" class="form-control" name="expDate" id="expDate" placeholder="Exp Date" required>
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 col-md-6">
                <label for="donate">Donation Amount</label>
                <input type="number" class="form-control" name="donate" id="donate" placeholder="Enter Amount" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                <div class="validate"></div>
              </div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your donation was submited. Thank you for your kindness!</div>
            </div>
            <div class="text-center"><button type="submit">Donate</button></div>
          </form>
        </div><!-- End Reservation Form -->

      </div>

    </div>
  </section><!-- End Book A Table Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose GoodFood?</h3>
              <p>
                We are proudly non-profit, non-corporate and non-compromised. Thousands of people like you help us stand up for a healthy internet for all. We rely on donations to carry out our missions to provide food for all that need it. Will you help us today?
              </p>
              {{-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> --}}
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Non-profit</h4>
                  <p>We all do it for free, and hoping for the world peace.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Non-corporate</h4>
                  <p>We are a small organisation with a big heart</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Non-compromised</h4>
                  <p>Unyielding and absolute</p>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->




  </main><!-- End #main -->
</body>

</html>

@endsection
