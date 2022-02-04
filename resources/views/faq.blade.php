@include('layouts.frontend.header')
  <div class="row">
      <div class = "col-md-12" id="faqheader">
          <h1>FAQs</h1>
          <h3>You can submit feedback about Hackney right here.</h3>
  </div>
  </div>
<div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                        <form action="index.html">
                            <div class="row">
                                <div class="col-lg-6 col-md-5">
                                    <div class="name-input">
                                        <input type="text" placeholder="Full Name" id = "ft">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-5">
                                    <div class="email-input">
                                        <input type="email" placeholder="Email Address" id = "ft" >
                                    </div>
                                </div>
                            </div>
<br><br>
                            <div class="message-input">
                                <textarea name="review" cols="93" rows="5" placeholder="Ask any question" id = "fta"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit" id="ftb">Submit Question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width:50%;margin-left:340px;">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/car9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/car9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/images/car9.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br><P>

@include('layouts.frontend.footer')