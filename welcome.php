<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="stylesheet.css">

    <link rel="stylesheet" href="./ionicons.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <title>micro:ci</title>
</head>
<body>
  <div id="wrapper" class="container-fluid">
      <div class="row" id="section1">
        <div class="container">
          <div class="row">
            <img id="logo" src="logo_white.png" class="img-responsive center-block" alt="micro:ci logo">
            <h2 class="text-center">Continuous integration for embedded developpers</h2>
            <p class="text-center">micro:ci lets you execute build jobs, run test suites on embedded hardware, and deploy changes at each commit.</p>

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
              <span>Detailed measures about built firmwares</span>
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
          <h2 class="text-center">Stay tuned an be notified for alpha releases</p>
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

      <div class="row" id="section3">
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
    </div>



    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script>
    function sendMail()//Use jquery to do ajax request, easier than diretly in javascript
    {
      $.post('postMail.php',{token:$("#token").val(), mail:$("#mail").val()})
      .done(function(data) {
        $('#complete').html(data);
      });
    }
    </script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
  </html>
