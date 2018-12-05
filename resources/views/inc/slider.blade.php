<style>
    .slider {
  background: url("../public/img/slider.jpg") no-repeat;
  background-size: cover;
  min-height: 800px; }
  @media (max-width: 992px) {
    .slider {
      min-height: 700px; } }

.btn-outline-light {
  padding: 10px 16px; }
  @media (max-width: 992px) {
    .btn-outline-light {
      width: 25%; } }
  @media (max-width: 768px) {
    .btn-outline-light {
      width: 30%; } }
  @media (max-width: 576px) {
    .btn-outline-light {
      width: 40%; } }
  @media (max-width: 480px) {
    .btn-outline-light {
      width: 100%; } }
  .btn-outline-light:hover {
    color: #000; }

.slider-title_box {
  text-align: center; }

.slider-content_wrap h5 {
  color: #909090;
  font-weight: 400;
  margin: 24px 0; }

@media (max-width: 480px) {
  .form-wrap {
    margin: 0 !important; } }

.btn-group {
  width: 100%; }
  @media (max-width: 576px) {
    .btn-group {
      display: block; } }

.btn-group1 {
  padding: 24px;
  width: 40%;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border: none; }
  @media (max-width: 576px) {
    .btn-group1 {
      width: 100%;
      border-radius: 3px;
      margin: 0 0 10px;
      padding: 17px; } }

.btn-group2 {
  position: relative;
  padding: 24px;
  width: 33%;
  border-top: none;
  border-right: none;
  border-bottom: none;
  border-left: 1px solid #ccc; }
  @media (max-width: 576px) {
    .btn-group2 {
      width: 100%;
      border-radius: 3px;
      margin: 0 0 10px;
      padding: 17px; } }

.btn-form {
  font-weight: 400;
  font-size: 18px;
  padding: 17px;
  width: 27%;
  background: #ff3a6d;
  color: #ffffff;
  border: none;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px; }
  @media (max-width: 768px) {
    .btn-form {
      width: auto; } }
  @media (max-width: 576px) {
    .btn-form {
      width: 100%;
      border-radius: 3px; } }

.search-icon {
  font-size: 15px;
  padding-right: 10px; }

.slider-link {
  color: #909090;
  margin: 45px 0 0;
  font-size: 19px; }
  @media (max-width: 480px) {
    .slider-link {
      margin: 18px 0 0; }
      .slider-link a,
      .slider-link span {
        display: block; } }
  .slider-link a {
    color: #909090;
    text-decoration: underline;
    -webkit-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s; }
    .slider-link a:hover {
      color: #fff; }
  .slider-link span {
    padding: 0 18px; }
</style>

@section('content')

<!-- SLIDER -->
    <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>Discover great places around the world</h1>
                                    <h5>Let's uncover the best places to eat, drink, and shop nearest to you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-10">
                                <form class="form-wrap mt-4">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <input type="text" placeholder="What are your looking for?" class="btn-group1">
                                        <input type="text" placeholder="New york" class="btn-group2">
                                        <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>SEARCH<i class="pe-7s-angle-right"></i></button>
                                    </div>
                                </form>
                                <div class="slider-link">
                                    <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Addred</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--// SLIDER -->
