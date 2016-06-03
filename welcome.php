<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./ionicons.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="stylesheet.css">
  <title>micro:ci</title>
</head>
<body>
  <div class="row" id="section1">
    <div class="container">
      <div class="row">
        <img id="logo" src="logo_v3.svg" class="img-responsive center-block svg" alt="micro-ci logo" >
        <p class="text-center" id="subtitle">Continuous integration for embedded development</p>
        <h3 class="text-center">micro-ci lets you execute build jobs, run test suites on embedded hardware, and deploy changes at each commit.</h3>

        <!-- Double column bullet points -->

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-gear-a" aria-hidden="true"></i>
          <span>Embedded code builds for any platform</span>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-bug" aria-hidden="true"></i>
          <span>Test your code on real hardware</span>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-social-github" aria-hidden="true"></i>
          <span>Seamless integration with version control systems</span>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-monitor" aria-hidden="true"></i>
          <span>Test your code on virtual embedded machines</span>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-stats-bars" aria-hidden="true"></i>
          <span>Detailed metrics about built firmwares</span>
        </div>

        <div class="col-md-5 col-md-offset-1">
          <i class="ion-paper-airplane" aria-hidden="true"></i>
          <span>Deploy embedded code with confidence</span>
        </div>

      </div>
    </div>
  </div> <!-- end of section 1 -->

  <div class="row" id="section2">
    <div class="container">

      <div class="row">
        <h2 class="text-center">Stay tuned an be notified for alpha releases</h2>
      </div>

      <div class="row">

        <div class="col-md-6">
          <a href="https://twitter.com/micro_ci">
            <i class="ion-social-twitter" ></i>
            @micro-ci
          </a>
        </div>

        <div class="col-md-6">
          <form  class="form-inline">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
            <input type="hidden" id="token" name="token" value="<?php echo $token ?>" />
            <input type="button" value="submit" onClick="sendMail();" class="btn btn-primary" />
            <p id="complete"> </p>
          </form>
        </div>
      </div>

    </div>
  </div> <!-- end of section 2 -->

  <div id="description">
  <div class="row" id="build_test">
    <div class="container">

      <div class="col-md-6">
        <div class="row"><h3 class="text-center"> <i class="ion-gear-a" aria-hidden="true"></i>
          <span>Embedded code builds for any platform</span></h3></div>

          <div class="row">
            <p>
              Automatically build your code on each version (commit, tag, release) and immediately know when the build is failing.
              Build your code in parallel for multiple platforms.
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row"><h3 class="text-center"> <i class="ion-bug" aria-hidden="true"></i>
            <span>Test your code on real hardware</span></h3></div>
            <div class="row">
              <p>
                Run your test suites on actual embedded hardware hosted on our premises.
                Validate your code in near-production conditions while enjoying the comfort of a continuous integration environment.
              </p>
            </div>
          </div>
        </div>

      </div> <!-- end of build_test -->



      <div class="row" id="version_virtual">
        <div class="container">

          <div class="col-md-6">
            <div class="row"><h3><i class="ion-social-github" aria-hidden="true"></i>
            <span>Seamless integration with version control systems</span></h3></div>

              <div class="row">
                <p>
                  Add easily a code repository hosted on github or bitbucket under continuous integration. Micro-ci is notified each time you commit, and re-runs the build and tests for you, automatically. Be notified only when something went bad.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row"><h3>   <i class="ion-monitor" aria-hidden="true"></i>
                <span>Test your code on virtual embedded machines</span></h3></h3></div>
                <div class="row">
                  <p>
                    Run and test code in virtual embedded environments. Stimulate input pins, write checks for output pins and test embedded functionalities that are hard to validate otherwise.
                  </p>
                </div>
              </div>
            </div>

          </div> <!-- end of version_virtual -->


          <div class="row" id="metrics_deploy">
            <div class="container">

              <div class="col-md-6">
                <div class="row"><h3>  <i class="ion-stats-bars" aria-hidden="true"></i>
                  <span>Detailed metrics about built firmwares</span></h3></div>

                  <div class="row">
                    <p>
                      Metrics are recorded for each build such as memory usage, stack usage, code performance and many more.
Check the evolution of all these metrics during the development and life of your product.
                    </p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="row"><h3> <i class="ion-paper-airplane" aria-hidden="true"></i>
                    <span>Deploy embedded code with confidence</span></h3></div>
                    <div class="row">
                      <p>
Once your code is building and all your tests are passing, deploy with confidence the new firmware to a fleet of devices.
                      </p>
                    </div>
                  </div>
                </div>

              </div> <!-- end of version_virtual -->
            </div>





      <div class="row" id="milestones">
        <div class="container">
          <div class="row">
            <h2>Milestones</h2>
            <p>First build platform prototype</p>
            <p>Production testing</p>
            <p>Beta - Virtualized jobs</p>
            <p>Alpha - Virtualized jobs</p>
            <p>First release</p>
            <p>Beta - True hardware jobs</p>
            <p>Alpha - True hardware jobs</p>
            <p>Full release !</p>
          </div>
        </div>
      </div>
      <!-- end of master container -->




      <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
      <script>
      function sendMail()//Use jquery to do ajax request, easier than diretly in javascript
      {
        $.post('postMail.php',{token:$("#token").val(), mail:$("#mail").val()})
        .done(function(data) {
          $('#complete').html(data);
        });
      }

      jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
      </script>
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
    </html>
