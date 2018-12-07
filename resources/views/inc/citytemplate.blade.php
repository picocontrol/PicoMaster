@include ('inc.videoheader')

<script>
        $(document).ready(function() {
                $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
                $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
            });
            </script>

    <div class="container">
        <div class="styled-heading">
            <h3>Find your sustainable - CITY - tour!</h3>        
Our guides offer - COUNT - tours in - CITY -. Book now for your next trip!</div>
    <div class="row">
            <div class="col-md-4">
                    <div class="card bg-faded" id="city_sidebar">
                            <div class="styled-heading">
                    <h3>Local guides in - CITY -</h3>
                            </div>
                            <div class="featured_cityguides" style="text-align:center">
                                <i>There are - COUNT - local guides<br></i>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/matthijs.png')}}" width=30%></a>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/matthijs.png')}}" width=30%></a><br>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/matthijs.png')}}" width=30%></a>
                                <a href="#"><img title="profile image" class="img-circle img-responsive" src="{{asset('img/pasfoto-sven.png')}}" width=30%></a>
                                <div class="cta" style="text-align:center">
                                        <input type="submit" name="btnSubmit" class="btnContact" value="Meet our Guides" />
                                    </div>
                            </div>
                            <div class="styled-heading">
                                    <br><h3>- CITY - Private Tours</h3>
                                            </div>
            <p> 
                    Bring your camera for an unforgettable Barcelona tour with a friendly and knowledgeable guide from ToursByLocals. Each of our local guides will be delighted to show you the splendid city that they know as only locals do, with particular focus on your unique travel interests.<br><br>

                    Your personal guide will share the true stories and quiet secrets of Barcelona with you, rambling around La Rambla's side streets and squares that seem unchanged from many centuries ago, to shops where locals go for Catalan delicacies. Discover the cultural diversity of the city behind the sights, including Antoni Gaudi's astonishing architecture, for an authentic experience of the real city. Or get out of town to some of the fascinating attractions just a short drive from Barcelona.<br><br>
                    
                    Enjoy uncovering the heartbeat of the city on your private Barcelona tour.
            </p><br>        
            <p> 
            <ul class="social-icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul></p>
                    </div>
                    @show <!-- Don't know function for this show, sidebar? -->
                </div>
            <div class="col-md-8">
                    <div class="row">
    <div class="col-md-12" style="text-align:center">
                    <div class="styled-heading" >
    <h3>- CITYNAME - City Tours</h3>
    </div>    
    <p> Slogan van de stad? </p>

@include ('inc.categorytags')

    <!-- buttons will get other names but use classes for style purposes only now -->
        <div class="form-group">
               <br> <input type="submit" name="btnSubmit" class="btnContact" value="All City Tours" />
            </div>
    </div></div>
    <br>
    <div class="container">
    
            <div id="products" class="row view-group">
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/barcelona.jpeg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Nature tour</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/berlin.jpeg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Culture tour</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/destination_4.jpg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Wine tour</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/groningen.jpg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Active tour</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/iamsterdam.jpg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Local food tour</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xs-4 col-lg-4">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <img class="group list-group-image img-fluid" src="{{asset('img/london.jpeg')}}" alt="" />
                                </div>
                                <div class="caption card-body">
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Barcrawl</h4>
                                    <p class="group inner list-group-item-text">
                                        Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                        <div class="row">
                                                <div class="col-xs-12 col-md-12" style="text-align:center">
                                                    <a class="btn btn-info" href="http://www.jquery2dotnet.com">Read more</a>
                                                </div>
                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
</div>
    
    </div>
    </div>