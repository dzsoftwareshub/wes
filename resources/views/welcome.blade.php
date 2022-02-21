@extends("template.default")

@section("title")
  WAP ERP SOLUTION
@endsection


@section("custom-css")
  <link rel="stylesheet" href="lang/css/welcome.css?cache=<?php echo time(); ?>">
@endsection


@section("custom-js")
  <script src="lang/js/welcome.js?cache=<?php echo time(); ?>"></script>
@endsection


@section("content")
<div class="contanier bg-white shadow-lg">
  <div class="row m-0">
    <div class="col-md-6 p-0 welcome-images">

    </div>
    <div class="col-md-6 pt-2">

      <!-- start branding coding -->
      <div class="branding">
        <h1>WES</h1>
        <p>WAP ERP SOLUTION</p>
      </div>
      <!-- end branding coding -->


      <!-- start signup form coding -->
      <div class="welcome-form pt-2 px-2">
        <form class="signup-form" autocomplete="off">
          <!-- start step 1 -->
          <div class="step-1">
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Company Name</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="company-name" placeholder="COMPANY NAME" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Tagline</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="tagline" placeholder="TAGLINE" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Website</label>
              <input type="website" class="form-control welcome-form-input rounded-0" name="website" placeholder="WEBSITE" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Email</label>
              <input type="email" class="form-control welcome-form-input rounded-0" name="company-email" placeholder="EMAIL" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Founder</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="founder" placeholder="FOUNDER" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Founder Email</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="fpunder-email" placeholder="FOUNDER EMAIL" />
            </div>

            <div class="form-group overflow-hidden">
              <button type="submit" class="btn btn-info float-right next-btn step-1-next-btn">
                NEXT <i class="fa fa-angle-double-right"></i>
              </button>
            </div>
          </div>
          <!-- end step 1 -->


          <!-- start step 2 -->
          <div class="step-2 d-none ">
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Contact Number</label>
              <input type="number" class="form-control welcome-form-input rounded-0" name="contact-number" placeholder="CONTACT NUMBER" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Street Address</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="street-address" placeholder="STREET ADDRESS" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">City</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="city" placeholder="CITY" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">State</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="state" placeholder="STATE" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Country</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="contry" placeholder="COUNTRY" />
            </div>

            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Pincode</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="pincode" placeholder="PINCODE" />
            </div>

            <div class="form-group overflow-hidden">
              <button type="submit" class="btn btn-info float-left back-btn step-2-back-btn">
                <i class="fa fa-angle-double-left"></i> BACK
              </button>

              <button type="submit" class="btn btn-info float-right next-btn step-2-next-btn">
                NEXT <i class="fa fa-angle-double-right"></i>
              </button>
            </div>


          </div>
          <!-- end step 2 -->

          <!-- start step 3 --->
          <div class="step-3 d-none">
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">GSTIN</label>
              <input type="text" class="form-control welcome-form-input rounded-0" name="gstin" placeholder="GSTIN" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Office Start at</label>
              <input type="time" class="form-control welcome-form-input rounded-0" name="start-at" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Office End at</label>
              <input type="time" class="form-control welcome-form-input rounded-0" name="end-at" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">Established in</label>
              <input type="date" class="form-control welcome-form-input rounded-0" name="est-in" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">FACEBOOK URL</label>
              <input type="url" class="form-control welcome-form-input rounded-0" name="facebook" placeholder="Facebook Url" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">TWITTER URL</label>
              <input type="url" class="form-control welcome-form-input rounded-0" name="twitter" placeholder="Twitter Url" />
            </div>
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">INSTAGRAM URL</label>
              <input type="url" class="form-control welcome-form-input rounded-0" name="instagram" placeholder="Instagram Url" />
            </div>
            <div class="form-group overflow-hidden">
              <button type="submit" class="btn btn-info float-left back-btn step-3-back-btn">
                <i class="fa fa-angle-double-left"></i> BACK
              </button>

              <button type="submit" class="btn btn-info float-right next-btn step-3-next-btn">
                NEXT <i class="fa fa-angle-double-right"></i>
              </button>
            </div>


          </div>
          <!-- end step 3 --->

          <!-- start step 4 -->
          <div class="step-4 d-none">
            <div class="form-group mb-3 overflow-hidden">
              <label class="d-none">WHATSAPP NUMBER</label>
              <input type="number" class="form-control welcome-form-input rounded-0" name="whatsapp-number" placeholder="WhatsApp Number" />
            </div>
            <div class="form-group mb-4 overflow-hidden">
              <label>CATEGORY</label>
              <select class="form-control" name-category>
                <option value="education">Education</option>
              </select>
            </div>
            <div class="form-group overflow-hidden">
              <button type="submit" class="btn btn-info float-left back-btn step-4-back-btn">
                <i class="fa fa-angle-double-left"></i> BACK
              </button>

              <button type="submit" class="btn submit-btn float-right rounded-0">
              SUBMIT
              </button>
            </div>

          </div>
          <!-- end step 4 --->

        </form>
      </div>
      <!-- end signup form coding -->

    </div>
  </div>
</div>
@endsection
