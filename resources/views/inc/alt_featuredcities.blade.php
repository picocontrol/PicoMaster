<!-- DISCONTINUED - Wordt niet zoals het hoort, 3 plaatjes horen over de header heen te animaten, misschien door ontbreken animate.js -->


<style>
    .feature-destination, .slider-wrap {
  position: relative;
  z-index: 10;
  margin-top: -50px;
  margin-bottom: 50px;
}

.feature-destination .img-bg, .slider-wrap .img-bg {
  margin-bottom: 30px;
  display: block;
  height: 300px;
  position: relative;
  top: 0;
  -webkit-transition: .2s all ease;
  -o-transition: .2s all ease;
  transition: .2s all ease;
}

.feature-destination .img-bg:before, .slider-wrap .img-bg:before {
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #000;
  opacity: .1;
  position: absolute;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.feature-destination .img-bg .text, .slider-wrap .img-bg .text {
  position: absolute;
  top: 50%;
  left: 50%;
  text-align: center;
  width: 80%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.feature-destination .img-bg .text .icon, .slider-wrap .img-bg .text .icon {
  color: #fff;
  font-size: 30px;
  position: relative;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  top: 0;
}

.feature-destination .img-bg .text h2, .slider-wrap .img-bg .text h2 {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  margin: 0;
  padding: 0;
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  top: 0px;
  position: relative;
}

.feature-destination .img-bg .text p, .slider-wrap .img-bg .text p {
  color: #fff;
  opacity: 0;
  top: 10px;
  visibility: hidden;
  font-size: 13px;
  position: relative;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
}

.feature-destination .img-bg:hover, .feature-destination .img-bg:focus, .slider-wrap .img-bg:hover, .slider-wrap .img-bg:focus {
  top: -10px;
  -webkit-box-shadow: 2px 0 20px 0 rgba(0, 0, 0, 0.4);
  box-shadow: 2px 0 20px 0 rgba(0, 0, 0, 0.4);
}

.feature-destination .img-bg:hover .text .icon, .feature-destination .img-bg:focus .text .icon, .slider-wrap .img-bg:hover .text .icon, .slider-wrap .img-bg:focus .text .icon {
  top: -10px;
}

.feature-destination .img-bg:hover .text h2, .feature-destination .img-bg:focus .text h2, .slider-wrap .img-bg:hover .text h2, .slider-wrap .img-bg:focus .text h2 {
  top: -10px;
}

.feature-destination .img-bg:hover .text p, .feature-destination .img-bg:focus .text p, .slider-wrap .img-bg:hover .text p, .slider-wrap .img-bg:focus .text p {
  top: 0;
  opacity: .5;
  visibility: visible;
}

.feature-destination .img-bg:hover:before, .feature-destination .img-bg:focus:before, .slider-wrap .img-bg:hover:before, .slider-wrap .img-bg:focus:before {
  opacity: .4;
}

.slider-wrap {
  margin-top: 0;
}

.slider-wrap .img-bg:hover {
  top: 0;
}
</style>

<!-- FEATURE CITIES -->
<section class="feature-destination">
        <div class="container">
          <div class="row">
            <div class="col-md-4 element-animate ">
              <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                <div class="text">
                  <span class="icon ion-ios-location"></span>
                  <h2>Stockton Beach, Austrlia</h2>
                  <p>Visit This Place</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 element-animate ">
              <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                <div class="text">
                  <span class="icon ion-ios-location"></span>
                  <h2>Trogir, Croatia</h2>
                  <p>Visit This Place</p>
                </div>
              </a>
            </div>
            <div class="col-md-4 element-animate ">
              <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                <div class="text">
                  <span class="icon ion-ios-location"></span>
                  <h2>Desert, Morocco</h2>
                  <p>Visit This Place</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- END section -->