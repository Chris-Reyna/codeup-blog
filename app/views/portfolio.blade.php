@extends('layouts.master')

@section('content')

<!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: slider -->
      <div class="slider">
        <div class="container-fluid">
          <div id="heroSlider" class="carousel slide">
            <div class="carousel-inner">
              <div class="active item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>PORTFOLIO OF WEB PAGES</h1>
                      <p>
                        LAMP+J Stack Web Developer.
                        Fully functional Web pages with a Laravel framework and jQuery.
                      </p>
                      <h3>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR NATURE OF WORK</h1>
                      <p>
                        We are Bootbusiness and we design ultimate website applications.
                        We are Bootbusiness and we design ultimate website applications.
                      </p>
                      <h3>
                        <a href="service.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
              <div class="item">
                <div class="hero-unit">
                  <div class="row-fluid">
                    <div class="span7 marketting-info">
                      <h1>TELL ABOUT YOUR ANOTHER PRODUCT</h1>
                      <p>
                        Get excited about our products.We build awesome products in mobile.
                        We build awesome products in mobile.We build awesome products in mobile.
                      </p>
                      <h3>
                        <a href="#" class="btn btn-primary">Buy now</a>
                        <a href="product.html" class="btn">Learn more</a>
                      </h3>                      
                    </div>
                    <div class="span5">
                      <img src="img/placeholder.jpg" class="thumbnail">
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#heroSlider" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#heroSlider" data-slide="next">›</a>
          </div>
        </div>
      </div>
      <!-- End: slider -->
      <!-- Start: PRODUCT LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Our products</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/eat.png" alt="product name">
                  <div class="caption">
                    <h3>EatSafe-SA</h3>
                    <p>
                      Searchable map of the San Antonio area, providing actual city health inspection data to help you make more informed choices for your dining experience.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/whack.png" alt="product name">
                  <div class="caption">
                    <h3>Whack-A-Vader</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Product name</h3>
                    <p>
                      Few attractive words about your product.Few attractive words about your product.
                      Few attractive words about your product.Few attractive words about your product.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Buy now</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="page-header">
            <h2>Our Services</h2>
          </div>
          <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img src="img/placeholder-360x200.jpg" alt="product name">
                  <div class="caption">
                    <h3>Service title</h3>
                    <p>
                      Few attractive words about your service.Few attractive words about your service.
                      Few attractive words about your service.Few attractive words about your service.
                    </p>
                  </div>
                  <div class="widget-footer">
                    <p>
                      <a href="#" class="btn btn-primary">Try for free</a>&nbsp;
                      <a href="product.html" class="btn">Read more</a>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      <!-- End: PRODUCT LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
@stop
