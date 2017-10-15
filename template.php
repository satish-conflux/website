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
        <!-- 
                
                Your page content goes here


        -->
        <?php include("./common/footer.php"); ?>
        </div>
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <?php include("./common/script.php"); ?>
    </body>
</html>