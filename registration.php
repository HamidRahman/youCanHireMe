<?php
    require 'db_conect.php';
$query="SELECT * FROM user";
if($query_run=mysql_query($query)){
   while($query_row=mysql_fetch_assoc($query_run))
   {
       $name=$query_row['fName'];
       $email=$query_row['email'];
       echo $name. "   ". $email;
       
   }
}else{
    echo "query failed";
}
    
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <link href="css/bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap3.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-toggle.min.css" type="text/css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/registration.css" rel="stylesheet" type="text/css">
        <script src="js/registration.js" type="text/javascript"></script>
        <script src="js/bootstrap-toggle.min.js"></script>
    </head>

    <body>

        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 card text-center">
            <form action="page.php" method="POST" role="form" enctype="multipart/form-data">
                <h2 class="text-center font-weight-bold"> Register Yourself</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="fName" placeholder="Fast Name" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="lName" placeholder="Last Name" required>
                        </fieldset>
                    </div>
                </div>
                <fieldset class="form-group">
                    <input type="email" class="form-control" id="Email1" placeholder="Enter email" required>
                    <small class="text-muted">Well never share your email with anyone</small>
                </fieldset>
                <fieldset class="form-group">
                    <input type="date" class="form-control" id="dob" placeholder="Date of Birth" required>
                </fieldset>
                <fieldset class="form-group">
                    <input type="password" class="form-control" id="Password1" placeholder="Password" required>
                </fieldset>
                <div class="row">
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="city" placeholder="City" required>
                        </fieldset>
                    </div>
                    <div class="col-lg-6">
                        <fieldset class="form-group">
                            <input type="text" class="form-control" id="country" placeholder="Country" required>
                        </fieldset>
                    </div>
                </div>
                <hr>
                <span class="text-center" title="Which type of job you are doing. Select more if you have.">Job Description</span>
                <div class="row"> 
                    <div class="col-lg-4">
                        <input type="checkbox" name="partTime" data-toggle="toggle" data-off="Part time" data-on="Part time" data-onstyle="success" data-offstyle="danger" />
                    </div>
                    <div class="col-lg-4">
                        <input type="checkbox" name="remote" data-toggle="toggle" data-off="Remote" data-on="Remote" data-onstyle="success" data-offstyle="danger" />
                    </div>
                    <div class="col-lg-4">
                        <input type="checkbox" name="freelancer" data-toggle="toggle" data-off="Freelancer" data-on="Freelancer" data-onstyle="success" data-offstyle="danger" />
                    </div>
                    <div class="col-lg-4">
                        <input type="checkbox" name="fullTime" data-toggle="toggle" data-off="Full time" data-on="Full time" data-onstyle="success" data-offstyle="danger" />
                    </div>
                    <div class="col-lg-4">
                        <input type="checkbox" name="fullTime" data-toggle="toggle" data-off="Intern" data-on="Intern" data-onstyle="success" data-offstyle="danger" />
                    </div>

                </div>
                <hr>
                <fieldset class="form-group">
                    <input type='file' id="imgInp" onchange="readURL(this);" accept="image/*" required/>
                    <img id="blah" src="" class="img-circle" width="200" height="200" />
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
    </body>

    </html>