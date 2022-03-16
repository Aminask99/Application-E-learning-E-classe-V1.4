<div class="cards row gap-3 justify-content-center mt-5 caRt">
          <div class=" carditems carditems--blue col-md-3 col-sm-2 position-relative">
            <div class="cardStudents d-flex flex-column gap-2 mt-3">
              <i class="far fa-graduation-cap h3"></i>
              <span>Students</span>
            </div>
            <div class="cardnbr-Students">
              <span class="h5 fw-bold" id="nbr" ><?php echo $student; ?></span>
            </div>
          </div>


          <div class=" carditems carditems--rose col-md-3 col-sm-2 position-relative">
            <div class="cardCourse d-flex flex-column gap-2 mt-3">
              <i class="fal fa-bookmark h3"></i>
              <span>Course</span>
            </div>
            <div class="cardnbr-course">
              <span class="h5 fw-bold" id="nbr"><?php echo $courss;?></span>
            </div>
          </div>

          <div class=" carditems carditems--yellow col-md-3 col-sm-2 position-relative">
            <div class="cardpayments d-flex flex-column gap-2 mt-3">
              <i class="fal fa-usd-square h3"></i>
              <span>Payments</span>
            </div>
            <div class="cardpayments">
              <span class="h5 fw-bold" id="nbr">DHS <?php echo $payment;?></span>
            </div>
          </div>

          <div class="carditems carditems--gradient col-md-3  col-sm-2 position-relative">
            <div class="card__users d-flex flex-column gap-2 mt-3">
              <i class="fal fa-user h3" ></i>
              <span>Users</span>
            </div>
            <span class="h5 fw-bold" id="nbr">3</span>
          </div>
        </div>