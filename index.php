<?php
?>

<!DOCTYPE html>
<html>
    <!--BEGIN HEAD -->
    <head>
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <!--END HEAD-->
    
    <!--BEGIN BODY-->
    <body>   
    <!--LANDING PANEL-->
        <div class="wrapper">
            <div class="container">
                <!--PANEL HEADING-->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h3 class="login-panel text-center text-muted">
                            It is now
                        </h3>
                    </div>
                </div>
                <!--END PANEL HEADING-->

                <!--NEW POST BUTTON-->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn-default" data-toggle="modal" data-target="#newPost">New Post</button>
                        <hr>
                    </div>
                </div>
                <!--END NEW POST BUTTON-->

                <!--TEMPLATE POST-->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-info">
                            
                            <div class="panel-heading">
                                <span>
                                    First Post!
                                </span>
                                <span class="pull-right text-muted">
                                    <?php echo "test";?>
                                </span>
                            </div>
                            
                            <div class="panel-body">
                                <p class="text-muted">
                                    Posted on 
                                </p>
                                <p>
                                    <?php echo "content";?>
                                </p>
                                <div class="image-box">
                                    <img class="img-thumbnail img-responsive">
                                </div>
                            </div>
                            
                            <div class="panel-footer">  
                                <p>
                                    Posted by : <?php echo "john doe";?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <!--END TEMPLATE POST-->
            </div>
        </div>
        <!--END LANDING PANEL-->

        <!--NEW POST PANEL-->
        

        <!--END NEW POST FORM-->
    </body>
    <!--END BODY-->       

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</html>
