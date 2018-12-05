<style>
    /* ==============================================================
   FIND PLACES
   ============================================================== */
.styled-heading {
  text-align: center;
  margin: 0 0 50px; }
  @media (max-width: 768px) {
    .styled-heading {
      margin: 0 0 30px; } }
  .styled-heading h3 {
    position: relative;
    padding: 0 0 23px; }
    .styled-heading h3:after {
      position: absolute;
      content: "";
      width: 60px;
      height: 3px;
      background: #ff3a6d;
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%); }

.find-img-align {
  padding: 0 0 15px; }
  @media (max-width: 768px) {
    .find-img-align {
      padding: 0; } }

      
</style>

<!--============================= FEATURED CITIES =============================-->
<section class="main-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured cities</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="find-place-img_wrap">
                        <div class="grid">
                            <figure class="effect-ruby">
                                    <img src="{{asset('img/find-place1.jpg')}}" class="img-fluid" alt="img13" />
                                <figcaption>
                                    <h5>Paris </h5>
                                    <p>385 Listings</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                            <img src="{{asset('img/find-place2.jpg')}}" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Tokyo</h5>
                                            <p>210 Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                            <img src="{{asset('img/find-place3.jpg')}}" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>New York</h5>
                                            <p>114 Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row find-img-align">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                            <img src="{{asset('img/find-place4.jpg')}}" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>London </h5>
                                            <p>577 Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="find-place-img_wrap">
                                <div class="grid">
                                    <figure class="effect-ruby">
                                            <img src="{{asset('img/find-place5.jpg')}}" class="img-fluid" alt="img13" />
                                        <figcaption>
                                            <h5>Amsterdam </h5>
                                            <p>79 Listings</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FIND PLACES -->
