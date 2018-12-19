<!doctype html>
<html lang="en">
    <?php
        // Define variables for SEO
        $pageTitle = 'Finflux | Banking Made Easy';
        $pageDescription = "Finflux is the 'one box' digital financial solution for all the needs of banks and financial institutions.";
        $pageCanonical = '/';
        // We don't want the search engines to see our website just yet
        // $pageRobots = 'all';
         
        // Include header file
        include('./common/header.php');
    ?>
	<head>
		
	</head>
    <body class=" ">
        <a id="start"></a>
        <?php include("./common/navbar.php"); ?>
        <div class="main-container">

            <section class="text-center height-50">
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-sm-8 col-md-6">
                            <h1>Let's talk about your project</h1>
                            <p class="lead">
                                Visit us in Bengaluru or make contact via the form below to talk more about your project or idea.
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="switchable ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <address>
                            <p class="lead">
                                E:<a href="mailto:info@finflux.co">info@finflux.co</a>
                                <br /> P: +91 9015 500 500
                            </p>
                            <p class="lead">
                                <strong>Conflux Technologies Pvt Ltd </strong>   <br />
                                #304, 2nd Floor (above Nilgiris Store)  <br />
                                7th Main Road, HRBR Layout 1st Block    <br />
                                Bengaluru, Karnataka 560043
                            </p>
                            </address>
                            <p class="lead">
                                We are open from 9am &mdash; 7pm week days.
                            </p>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">

                                <form id="contact-form" class="form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly." method="post" name="myemailform" action="form-to-email.php">
                                    <div class="col-sm-6 col-xs-12">
                                        <label>Your Name:</label>
                                        <input type="text" name="name" class="validate-required" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label>Email Address:</label>
                                        <input type="email" name="email" class="validate-required validate-email" />
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <label>Message:</label>
                                        <textarea rows="4" name="message" class="validate-required"></textarea>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-xs-6">
                                        <button class="btn btn--primary type--uppercase" class="g-recaptcha" data-sitekey="6LfIxnwUAAAAADl1L-VWvYowjBJJYO5So4J7uQgv" data-callback="submitContactForm"> Send Enquiry
                                        </button>
                                    </div>
									<!--<div class="col-sm-12 col-xs-6">
										<div class="g-recaptcha" data-sitekey="6LekMjwUAAAAAPVjk-zkaWaEsraSXJ-NFQdOcN0P"></div>
									</div>-->
                                </form>
								<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
                            </div>
                            <!--end of row-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="unpad ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408.5990649431247!2d77.64308022618751!3d13.018386293015261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3d9001774431%3A0x4fd11e55dc4d63bf!2sFinflux+-+Banking+Made+Easy!5e0!3m2!1sen!2sin!4v1514196227742" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>



        <?php include("./common/footer.php"); ?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script>
        function submitContactForm() {
            var name = $("input:text[name='name']").val();
             var email = $("input:text[name='email']").val();
            var message = $("input#message").val();
        var badwords = ["www", "sex", "http","hot"];

    /* do this */ 

        if($.inArray(name, badwords) !==-1 || $.inArray(email, badwords) !==-1 || $.inArray(subject, badwords) !==-1 || $.inArray(message, badwords) !==-1){
                alert("Your Message Contains Bad Words, Please Remove Them Before Proceeding");
                return false;
            }

            var form = document.getElementById("contact-form");

            form.submit();
        }
        </script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <?php include("./common/script.php"); ?>
    </body>
</html>