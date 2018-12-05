<style>
  .site-hero {
  background-size: cover;
  background-position: center center;
  min-height: 750px;
  height: 100vh;
}

.site-hero > .container {
  position: relative;
  z-index: 2;
}

.site-hero.overlay {
  position: relative;
}

.site-hero.overlay:before {
  content: "";
  background: rgba(0, 0, 0, 0.5);
  width: 100%;
  z-index: 1;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

.site-hero.overlay h1, .site-hero.overlay p {
  color: #fff;
}

.site-hero .site-hero-inner {
  min-height: 750px;
  height: 100vh;
}

.site-hero-innerpage, .site-hero-innerpage .site-hero-inner {
  min-height: 550px;
  height: 50vh;
}

.site-section {
  padding: 7em 0;
}

#search-form .search-input {
  width: calc(100% - 160px);
  height: 55px;
  border-radius: 0;
  padding-left: 20px;
  padding-right: 20px;
  border: none;
}

#search-form .search-input:hover, #search-form .search-input:active, #search-form .search-input:focus {
  border: none;
}

#search-form button {
  height: 55px;
  width: 160px;
  border-radius: 0;
}

.img-bg {
  background-size: cover;
}

@media (max-width: 991.98px) {
  .img-md-fluid {
    max-width: 100%;
  }
}
</style>


<section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(img/slider_home.jpg);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
          <h1>Pico Tours</h1>
          <p>Enjoy sustainable tourism with local tour guides</p>
        </div>

        <form class="form-inline element-animate" id="search-form">
          <label for="s" class="sr-only">Location</label>
          <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Search Location with Google Search API" onFocus="geolocate()">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>

      </div>
    </div>
  </div>
</section>
<!-- END section -->
