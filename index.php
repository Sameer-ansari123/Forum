<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss - coding forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head> 

<body>
    <?php include './_partials/header.php';?>
    <?php include './_partials/dbconnect.php';?>

    <!-- slider streted here  -->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://plus.unsplash.com/premium_photo-1678565999332-1cde462f7b24?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cHl0aG9uJTIwcHJvZ3JhbW1pbmd8ZW58MHx8MHx8fDA%3D" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/1413990965/photo/glowing-python-programming-language-code-on-a-blue-digital-surface-with-a-sphere-grid-design.jpg?s=612x612&w=0&k=20&c=sC5Gcktg85_J6e50P5DGngrez1MElLql5xrYKd13sA4=" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8cHl0aG9uJTIwY29kZXxlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- catogery container started here  -->
    <div class="container my-3">
        <h2 class="text-center my-3"> iDiscuss- Browse catogeries </h2>
        <div class="row">

        <!-- fetch all the catogeries and Use a loop to iterate through Categories -->
         <?php
         $sql ="SELECT * FROM `catogeries`";          
         $result = mysqli_query($conn, $sql);
         while ($row = mysqli_fetch_assoc($result)){
            // echo $row['catogery_id'];
            // echo $row['catogery_name'];
            $id = $row['catogery_id'];
            $cat = $row['catogery_name'];
            $desc = $row['catogery_desc'];
            echo' <div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://c8.alamy.com/comp/2D9N00K/python-inscription-against-laptop-and-code-background-learn-python-programming-language-computer-courses-training-2D9N00K.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./threadsList.php?catid='. $id .'">'. $cat .'</a></h5>  
                        <p class="card-text">'.substr($desc, 0, 90).'....</p>
                        <a href="./threadsList.php?catid='. $id .'" class="btn btn-primary">view threads</a>
                    </div>
                </div>
            </div>
';            
         }
         ?>
        </div>
    </div>

    <?php include '_partials/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>