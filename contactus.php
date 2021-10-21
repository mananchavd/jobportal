<?php include 'include/outerauth.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> Contact Us </title>
    <style>
         .mb-3{
            width:405px;   
            margin-left:80vh;                            
         }

         .fcontain{
             justify-content:center;
             margin-top:50px;
         }
         body{
            background-color: #F0F8FF;
         }
         
    </style>
<?php include 'include/alllink.php'; ?>

  </head>
  <body>
  
  <form action="function.php" method="post">	
<div class="fcontain ">
<h1 align="center">Contact Us</h1>

    <div class="mb-3">
    <hr>
        <label for="exampleFormControlInput1" class="form-label">Yourname</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="yourname" placeholder="Write Your FullName">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="contactemail" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
<hr>
        <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" name="contact" type="submit">Send Message</button>
    </div>
    </div>
</form>

    <?php include 'include/footer.php'; ?>
    

</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
