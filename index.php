<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>NMT Belly Dance</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="index.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="header">
            <div class="upper-title">
                new mexico tech
            </div>
            <div class="lower-title">
                Belly Dance Club
            </div>
        </div>

        <div class="hero">
            <div class="video"><iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allowfullscreen></iframe></div>
            <div class="slant"></div>
        </div>

        <div class="slant-content">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <i class="fa fa-clock-o fa-3x"></i>
                        <h3>meeting time</h3>
                        <div class="time-container">
                            <div class="text-right">
                                DAY
                            </div>
                            <div class="text-left">
                                SUNDAY
                            </div>
                        </div>
                        <div class="time-container">
                            <div class="text-right">
                                TIME
                            </div>
                            <div class="text-left">
                                6 PM
                            </div>
                        </div>
                        <div class="time-container">
                            <div class="text-right">
                                LOCATION
                            </div>
                            <div class="text-left">
                                GYM 1
                            </div>
                        </div>

                    </div>
                    <div class="six columns">
                        <i class="fa fa-phone fa-3x"></i>
                        <h3>contact info</h3>
                        <div class="person">
                            <h4>Nekeisha Johnson <span>Officer</span></h4>
                            <p>978 727 3833</p>
                            <p>njohnson@student.nmt.edu</p>
                        </div>
                        <div class="person">
                            <h4>John Smith <span>Member</span></h4>
                            <p>978 727 3533</p>
                            <p>jjdawg@student.nmt.edu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider">
              <?php
                $images = scandir("imgs");
                $images = array_slice($images, 2);
                foreach($images as $image)
                {
                  echo "<div class=\"panel\">";
                  echo "<img src=\"imgs/" . $image . "\"/>";
                  echo "</div>";
                }
              ?>
            </div>
        </div>

        <div class="handouts">
            <div class="container">
                <h1>HANDOUTS</h1>
            </div>

            <ul>
              <?php
                function endsWith( $str, $sub ) {
                  return ( substr( $str, strlen( $str ) - strlen( $sub ) ) === $sub );
                }

                $files = scandir("files");
                $files = array_slice($files, 2);
                foreach($files as $file)
                {
                  $iconType = endsWith($file, ".mp3") || endsWith($file, ".wav") ? "fa-music" : "fa-file-o";
                  echo "<li><a href='files/". $file ."'><i class='fa ". $iconType ."'></i>". $file ."</a></li>";
                }
              ?>
            </ul>
        </div>

        <div class="footer">
            <p>
                &copy; New Mexico Tech Belly Dance Club | All Rights Reserved
            </p>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
    </body>
</html>
