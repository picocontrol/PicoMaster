<style>
    body {
  background: #fff;
  font-family: "Raleway", arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.8;
  color: #6c757d;
}

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5 {
  color: #000;
  font-family: "Playfair Display", times, serif;
}

header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 5;
}

header .navbar-brand {
  text-transform: uppercase;
  letter-spacing: .2em;
  font-weight: 400;
  color: #fff !important;
}

header .navbar {
  padding-top: 0;
  padding-bottom: 0;
  background: transparent !important;
}

@media (max-width: 991.98px) {
  header .navbar {
    background: rgba(0, 0, 0, 0.4) !important;
    padding-top: .5rem;
    padding-bottom: .5rem;
  }
}

header .navbar .nav-link {
  padding: 1.7rem 1rem;
  outline: none !important;
}

@media (max-width: 991.98px) {
  header .navbar .nav-link {
    padding: .5rem .5rem;
  }
}

header .navbar .nav-link:hover {
  color: #fff !important;
}

header .navbar .nav-link.active {
  color: #fff !important;
}

header .navbar .dropdown.show > a {
  color: #fff !important;
}

header .navbar .dropdown-menu {
  font-size: 14px;
  border-radius: 4px;
  border: none;
  -webkit-box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0 2px 30px 0px rgba(0, 0, 0, 0.2);
  min-width: 13em;
  margin-top: -10px;
}

header .navbar .dropdown-menu:before {
  bottom: 100%;
  left: 10%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #fff;
  border-width: 10px;
}

@media (max-width: 1199.98px) {
  header .navbar .dropdown-menu:before {
    display: none;
  }
}

header .navbar .dropdown-menu .dropdown-item:hover {
  background: #007bff;
  color: #fff;
}

header .navbar .dropdown-menu .dropdown-item.active {
  background: #007bff;
  color: #fff;
}

header .navbar .dropdown-menu a {
  padding-top: 7px;
  padding-bottom: 7px;
}

header .navbar.navbar-light .nav-link {
  color: #fff;
}

header .navbar.navbar-light .nav-link.active {
  color: #fff;
}
</style>

     
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
          <div class="container">
            <a class="navbar-brand" href="index.html">Listed</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="destination.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destination</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="destination.html">Places</a>
                    <a class="dropdown-item" href="destination.html">Hotels</a>
                    <a class="dropdown-item" href="destination.html">Restaurants</a>
                  </div>
  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
