
<?php
// Start the session
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['name'])){
    $_SESSION['name'][] = $_POST['name'];
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap.min.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h1 class="text-center">Todo List</h1>
                    <form action="" method="POST" class="">

                    <div class="form-inline my-5 my-lg-0">
                    
                    <input type="text" class="form-control my-0 mx-0" name="name" value="" aria-describedby="emailHelpId" placeholder="Enter List Below">
                    <button type="submit" class="btn btn-success  my-3 my-sm-3 " btn-lg btn-block">Add To List</button>
                    </div>

                    </form>

                <table class="table">
                    <?php  if (!empty($_SESSION['name'])):?>
                        <?php  foreach ($_SESSION['name'] as $key => $value):?>
                            <tr>
                                <th>
                                    <?php echo $value ?> 
                                </th>
                                <th>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $key + 1 ?> ">DELETE</a>
                                </th>
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </table>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>

 