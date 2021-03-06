<?php
    $codecss=$_SERVER['HTTP_HOST'] . '/css/code.css';
?>

        <link rel="stylesheet" href="https://<?php echo $codecss ?>">
    </head>

    <body class="graphite-gradient">


<!-- NAV -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/nav.inc.html.php'?>

        <!-- Main -->
                <div class="graphite-gradient p-3 z-depth-3 mb-0">
            <header class="container-fluid pt-4">
                <div class="jumbotron-fluid text-center text-success col-12 animated lightSpeedIn" id="upper">
                    Code
                </div>
            </header>
            <br>
            <main class="container-fluid text-center animated zoomIn p-3 mb-0">
                <a class="btn btn-amber animated bounceInUp orange darken-4 waves-effect waves-light" href="https://<?php echo $_SERVER['HTTP_HOST']?>/projects/1-web-basics/" role="button">
                    Web Basics
            </a>

                <a class="btn btn-info info-color-dark animated bounceInDown waves-effect waves-light" href="https://<?php echo $_SERVER['HTTP_HOST']?>/projects/2-front-end/" role="button">
            Front End Development
        </a>

                <a class="btn indigo animated bounceInDown waves-effect waves-light" href="https://<?php echo $_SERVER['HTTP_HOST']?>/projects/3-back-end/" role="button">
        Back End Development
    </a>

                <!-- <a class="btn btn-default animated bounceInDown waves-effect waves-light" href="https://<?php echo $_SERVER['HTTP_HOST']?>/projects/4-full-stack/" role="button">
Full Stack Projects
</a> -->
                <!-- <div class="btn-group">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hunker Up</button>
        </div> -->
                <!-- <a role="button" class="dropdown-toggle btn btn-amber animated slideInLeft pink darken-3" href="https://hunker-up-front.herokuapp.html" data-toggle="dropdown"></a>
 -->

                <!-- <div class="dropdown-menu">
            <a href="https://hunker-up-front.herokuapp.com/" class="dropdown-item">Live Link</a>
            <a href="https://bitbucket.com/hunkerup" class="dropdown-item">Source Code</a>
        </div> -->



                <!-- <a role="button" class="btn btn-primary animated slideInRight indigo darken-2" href="https://flowmar.github.io/gifs-in-a-jiffy">GIFs in a Jiffy</a> -->
                <!-- <a role="button" class="btn btn-success btn-animated slideInLeft cyan darken-3">
                Hangman Colors
                </a> -->
                <!-- <button class="btn btn-warning animated slideInRight yellow accent-4">[Project]</button> -->
                <!-- <button class="btn btn-amber animated bounceInUp orange darken-4">[Project]</button>  -->
            </main>
        </div>


        <!-- Footer -->

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/footer.html.php';?>

        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

        <script src="../js/mdb.min.js" type="text/javascript"></script>
        <script src="../js/portfolio.js"></script>
    </body>

</html>