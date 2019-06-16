<?php
include('functions.php');
session_start();
$message = "";
if(!isset($_SESSION['verified']))
{
    header("Location: login.php");
    exit();
}
if(count($_POST) > 0)
{
    $tmp = [];
    $tmp['title'] = $_POST['title'];
    $tmp['caption'] = $_POST['caption'];
    $tmp['color'] = $_POST['color'];
    $tmp['image'] = $_FILES['image']['name'];
    $tmp['postedTime'] = time();
    if(checkPost($tmp))
    {
        echo 'good';
        if($_FILES['image']['type'] == 'image/jpeg' || $_FILES['image']['type'] == 'image/png')
        {
            $targetDirectory = 'uploads/';
            $savedLocation = $targetDirectory . $tmp['image'];
            move_uploaded_file($_FILES['image']['tmp_name'], $savedLocation);
        }
        else
        {
            $message = errorMessage('File must be type jpeg ');
        }
    }
    else
    {
        $message = errorMessage("Please complete all fields");
    }
}
?>

<!DOCTYPE html>
<html>
    <!--BEGIN HEAD -->
    <head>
        <title>Noob Book</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <?php echo $message; ?>
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
                        <a href="login.php">
                        <button class="btn btn-sm" value="log off">LogoFF</button>
                        </a>
                    </div>
                </div>
                <!--END TEMPLATE POST-->
            </div>
        </div>
        <!--END LANDING PANEL-->

    <!--NEW POST FORM-->
    <div id="newPost" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <form role="form" action="index.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        <h4 class="modal-title">New Post</h4>
                    </div>
                    
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label>Caption</label>
                            <textarea class="form-control" rows="3" name="caption"></textarea>
                        </div>
                        <div class="form-group"> 
                            <label>Color</label>
                            <select class="form-control" name="color"> 
                                <option value="1">Blue</option>
                                <option value="2">Red</option>
                                <option value="3">Yellow</option>
                            </select>
                        </div>
                        <div class="form-group"> 
                            <label>Image</label>
                            <input type="file" name="image">
                        </div>
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default" value="Close" data-dismiss="modal">Close</button>
                        <input type="submit"  class="btn btn-primary" value="Submit">
                    </div>
                </div>
            </form>    
        </div>
    </div> 
 


    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <!--END NEW POST FORM-->
    </body>
    <!--END BODY-->       

   
</html>
