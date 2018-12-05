<style>
    /* ==============================================================
   FEATURED PLACES
   ============================================================== */
.featured-place-wrap {
  background: #fff;
  margin: 0 0 30px;
  -webkit-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
  position: relative; }
  .featured-place-wrap:hover {
    -webkit-transform: translateY(-2px);
    -ms-transform: translateY(-2px);
    transform: translateY(-2px);
    -webkit-box-shadow: 0px 3px 40px 0 rgba(206, 205, 205, 0.3);
    box-shadow: 0px 3px 40px 0 rgba(206, 205, 205, 0.3); }
  .featured-place-wrap a {
    display: block;
    text-decoration: none;
    color: #000; }
  .featured-place-wrap img {
    width: 100%; }

.featured-rating,
.featured-rating-orange,
.featured-rating-green {
  position: absolute;
  right: 10px;
  width: 60px;
  height: 60px;
  text-align: center;
  margin: -33px 10px 0 0;
  font-size: 23px;
  background: #ff7474;
  color: #fff;
  padding: 14px;
  border-radius: 50%; }

.featured-rating-orange {
  background: #ffae00 !important; }

.featured-rating-green {
  background: #46cd38 !important; }

.featured-title-box {
  padding: 22px 20px; }
  @media (max-width: 480px) {
    .featured-title-box {
      padding: 22px 14px; } }
  .featured-title-box h6 {
    overflow: hidden;
    white-space: nowrap;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    margin-bottom: 5px; }
  .featured-title-box p {
    color: #9fa9b9;
    display: inline-block;
    margin: 0; }
    @media (max-width: 320px) {
      .featured-title-box p {
        font-size: 13px; } }
    .featured-title-box p span {
      color: #ffb006;
      padding: 0; }
  .featured-title-box span {
    color: #9fa9b9;
    padding: 0 10px; }
    @media (max-width: 320px) {
      .featured-title-box span {
        padding: 0 4px; } }
  .featured-title-box ul {
    padding: 0;
    margin: 10px 0 0; }
    .featured-title-box ul li {
      list-style: none;
      color: #737882;
      line-height: 2; }
      .featured-title-box ul li span {
        padding: 7px 8px 0 0; }
        @media (max-width: 1200px) {
          .featured-title-box ul li span {
            padding: 0 4px 0 0; } }
        @media (max-width: 320px) {
          .featured-title-box ul li span {
            font-size: 12px;
            padding: 0 2px 0 0; } }
      .featured-title-box ul li p {
        margin: 0; }

.bottom-icons {
  padding: 15px 0 0;
  line-height: 1; }
  .bottom-icons span {
    float: right;
    line-height: 1;
    padding: 0 0 0 12px; }

.closed-now {
  color: #ff3a6d;
  font-size: 13px;
  display: block;
  font-weight: 400;
  display: inline-block; }

.open-now {
  color: #46cd38;
  font-size: 13px;
  display: block;
  font-weight: 400;
  display: inline-block; }

.featured-btn-wrap {
  text-align: center; }
  @media (max-width: 1200px) {
    .featured-btn-wrap {
      margin: 3px 0 0; } }
  .featured-btn-wrap .btn-danger {
    background: #ff3a6d;
    padding: 16px 50px;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    border: 0; }
    @media (max-width: 576px) {
      .featured-btn-wrap .btn-danger {
        width: 100%; } }
    .featured-btn-wrap .btn-danger:hover, .featured-btn-wrap .btn-danger:focus {
      background: #f34e79;
      outline: none;
      -webkit-box-shadow: none;
      box-shadow: none; }
      </style>

<!--============================= FEATURED PLACES =============================-->
<section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>Featured Guides</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured1.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-orange">6.5</span>
                            <div class="featured-title-box">
                                <h6>Burger & Lobster</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured2.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating-green">9.5</span>
                            <div class="featured-title-box">
                                <h6>Joe’s Shanghai</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        <a href="detail.html">
                            <img src="images/featured3.jpg" class="img-fluid" alt="#">
                            <span class="featured-rating">3.2</span>
                            <div class="featured-title-box">
                                <h6>Tasty Hand-Pulled Noodles</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="open-now">OPEN NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="featured-btn-wrap">
                        <a href="#" class="btn btn-danger">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END FEATURED PLACES -->
