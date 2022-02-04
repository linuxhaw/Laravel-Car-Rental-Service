@include('layouts.frontend.header')
<div class="row">
    <div class = "col-md-12" id="contactusheader">
        <h1>Contact Us</h1>
        <h3>You Can Contact Easily Right Here.</h3>
</div>
</div>

<div class="row">
    <div class="col-md-12" id="abouthead">
        <h3>Contact us</h3>
        <span class="title-line" id="icon"><i class="fa fa-car"></i></span>
    
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
                                <textarea name="review" cols="93" rows="5" placeholder="Message" id = "fta"></textarea>
                            </div>

                            <div class="input-submit">
                                <button type="submit" id="ftb">Submit Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('layouts.frontend.footer')