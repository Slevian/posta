@include ('_header')
<!-- Content -->    
<div class="space40"></div>

<div class="container">
    <div class="row"> 
        <div class="col-md-12">
            <h1>Get In Touch!</h1>
        </div>
    </div>    
</div>    

<div class="space20"></div>  

<div class="container">
    <div class="row"> 
        <div class="col-md-6">  

            <div class="row contact-data">
                <div class="col-md-6">
                    <h4>Address</h4>
                    Moi Avenue<br>
                    Nairobi,  913 20<br>
                    Kenya
                    <div class="space40"></div>
                </div>  
                <div class="col-md-6">
                    <h4>Office Hours</h4>  
                    <strong>Monday - Friday:</strong> 09:00 - 17:00<br>
                    <strong>Saturday:</strong> 09:00 - 13:00<br>
                    <strong>Sunday:</strong> Closed<br>
                    <div class="space40"></div>
                </div>  
                <div class="col-md-6">
                    <h4>Contact Info</h4>  
                    <i class="fa fa-phone"></i> +48 880 440 110<br>
                    <i class="fa fa-envelope"></i> <a href="mailto:support@example.com">info@posta.co.ke</a><br>
                    <i class="fa fa-globe"></i> <a href="www.example.html" rel="external">www.posta.co.ke</a><br>
                    <div class="space40"></div>
                </div>  
                <div class="col-md-6 social-4">
                    <h4>Social Media</h4>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>  
                <div class="space40"></div>
            </div>

        </div> 
        <div class="col-md-6">  

            <h4>Contact Form</h4>    
            <!-- Form -->
            <form role="form" name="ajax-form" id="ajax-form" action="#" method="post" class="contact-form">
                <div class="row">            
                    <div class="form-group col-sm-6">
                        <label for="name2">Name</label>
                        <input class="form-control" id="name2" name="name" onblur="if (this.value == '')
                                    this.value = 'Name'" onfocus="if (this.value == 'Name')
                                                this.value = ''" type="text" value="Name">
                        <div class="error" id="err-name">Please enter name</div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email2">E-mail</label>
                        <input  class="form-control" id="email2" name="email"  type="text"  onfocus="if (this.value == 'E-mail')
                                    this.value = '';" onblur="if (this.value == '')
                                                this.value = 'E-mail';" value="E-mail">
                        <div class="error" id="err-emailvld">E-mail is not a valid format</div> 
                    </div>
                </div>                
                <div class="row">            
                    <div class="form-group col-md-12">
                        <label for="message2">Message</label>
                        <textarea class="form-control" id="message2" name="message" onblur="if (this.value == '')
                                    this.value = 'Message'" onfocus="if (this.value == 'Message')
                                                this.value = ''">Message</textarea>
                        <div class="error" id="err-message">Please enter message</div>     
                    </div>
                </div> 
                <div class="row spacer30"></div>
                <div class="row">            
                    <div class="col-md-12 text-center">
                        <div id="ajaxsuccess">E-mail was successfully sent.</div>
                        <div class="error" id="err-form">There was a problem validating the form please check!</div>
                        <div class="error" id="err-timedout">The connection to the server timed out!</div>
                        <div class="error" id="err-state"></div>                 
                        <button type="submit" class="btn btn-primary" id="send">Submit</button>
                    </div>
                </div>
            </form>   
            <!-- Form End -->

        </div>    

    </div> 
</div> 

<div class="space30"></div>  

<div class="container">
    <div class="row">
        <div class="col-md-12">                                                                                                                                                                                      
            <iframe id="map" src="https://maps.google.sk/maps/ms?msa=0&amp;msid=210946297010027755543.0004c74af772bb9276d33&amp;ie=UTF8&amp;ll=48.576981,19.13117&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe>
        </div>
    </div>
</div> 

<div class="space60"></div>

<!-- Partners -->
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <ul class="partners-6">  
                <li> 
                    <img src="img/partners/01.png" alt="">
                </li> 
                <li> 
                    <img src="img/partners/02.png" alt="">
                </li> 
                <li> 
                    <img src="img/partners/03.png" alt="">
                </li> 
                <li> 
                    <img src="img/partners/04.png" alt="">
                </li> 
                <li> 
                    <img src="img/partners/05.png" alt="">
                </li> 
                <li> 
                    <img src="img/partners/06.png" alt="">
                </li> 
            </ul>

        </div>
    </div>
</div>      

<div class="space60"></div>

@include ('_footer')