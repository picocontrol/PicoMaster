@extends('layouts.app')

@section('content')    
    
    <div class="container">
        <div class="styled-heading">
            <h3>Find your sustainable city tour!</h3>        
            Our {{ $guidecount }} guides offer {{ $tourcount }} tours in {{ $citycount }} cities. Find tours the city you want to visit.</div>
    <div class="row">
            <div class="col-md-4">
                    <div class="card bg-faded" id="city_overview_sidebar">
                            
                            <div class="styled-heading">
                                    <h3>Find a tour</h3>
                                            </div>
            <p> 
                    Rediscover cities through the eyes of a local, enjoy unique tours, the local taste & much more!<br><br>

                    Pico Tours is aimed at sustainable tourism, which means our guides will only serve small groups. We want to make a difference in the tourism industry and facilitate the change it needs for the next decades.<br><br>
                    
                    We are happy to answer any of our questions and wish you a very good stay!
            </p>      
            <img src="{{asset('img/worldmap.jpeg')}}" width=100%>
  
            <div class="styled-heading">
                    <h3>About Pico Tours</h3>
                            </div><br>
- COUNT - guides in - COUNT - cities / countries.
Learn more about Pico Tours and how we work.
            </p>
            <p> <img src="{{asset('img/social.png')}}" width=100%></p>
                    </div>
                    @show <!-- Don't know function for this show, sidebar? -->
                </div>
            <div class="col-md-8">
                    <div class="row">
    <div class="col-md-12" style="text-align:center">
                    <div class="styled-heading" >
    <h3>All City Tours</h3>
    </div>    
    <p>Check out tours at your next destination! </p>
    <!-- buttons will get other names but use classes for style purposes only now -->
        <div class="form-group">
               <br> <input type="submit" name="btnSubmit" class="btnContact" value="Become a Guide" />
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
                                        Barcelona</h4>
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
                                        Berlin</h4>
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
                                        Paris</h4>
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
                                        Groningen</h4>
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
                                        Amsterdam</h4>
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
                                        London</h4>
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