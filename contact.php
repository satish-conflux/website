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
                                E:
                                <a href="#">binny@finflux.co</a>
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
                                <form class="form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly." >
                                    <div class="col-sm-6 col-xs-12">
                                        <label>Your Name:</label>
                                        <input type="text" name="Name" class="validate-required" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label>Email Address:</label>
                                        <input type="email" name="email" class="validate-required validate-email" />
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <label>Message:</label>
                                        <textarea rows="4" name="Message" class="validate-required"></textarea>
                                    </div>
                                    <div class="col-sm-5 col-md-4 col-xs-6">
                                        <button type="submit" class="btn btn--primary type--uppercase">Send Enquiry</button>
                                    </div>
                                </form>
                            </div>
                            <!--end of row-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="unpad ">
                <div class="map-container border--round" data-maps-api-key="AIzaSyCq0QFE0Mn_1aZwGajJVFxN4IkIDtNZeVs" data-address="123 Rathdowne street, Carlton Victoria" data-marker-title="Stack" data-map-style="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFBB00&quot;},{&quot;saturation&quot;:43.400000000000006},{&quot;lightness&quot;:37.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FFC200&quot;},{&quot;saturation&quot;:-61.8},{&quot;lightness&quot;:45.599999999999994},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:51.19999999999999},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#FF0300&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:52},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#0078FF&quot;},{&quot;saturation&quot;:-13.200000000000003},{&quot;lightness&quot;:2.4000000000000057},{&quot;gamma&quot;:1}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#00FF6A&quot;},{&quot;saturation&quot;:-1.0989010989011234},{&quot;lightness&quot;:11.200000000000017},{&quot;gamma&quot;:1}]}]" data-map-zoom="15"></div>
            </section>



        <?php include("./common/footer.php"); ?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <?php include("./common/script.php"); ?>
    </body>
</html>