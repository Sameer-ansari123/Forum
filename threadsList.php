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
    <?php
    $id =$_GET['catid'];
    $sql ="SELECT * FROM `catogeries` WHERE catogery_id=$id;";          
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){

        $catname = $row['catogery_name'];
        $catdesc = $row['catogery_desc'];
    }
   
    ?>



    <!-- catogery container started here  -->
    <div class="container my-3">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> forums</h1>
            <p class="lead"><?php echo $catdesc; ?> 
            </p>
            <hr class="my-4">
            <p>This is a peer to peer forum from sharing knowledge with each other .<br> 
                This is a Civilized Place for Public Discussion. Please treat this discussion forum with the same respect you would a public park.<br> 
                Improve the Discussion.<br> 
                Be Agreeable, Even When You Disagree.<br> 
                Always Be Civil.
                Keep It Tidy.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h1 class="py-4">Browse Question </h1>
        <?php
    $id =$_GET['catid'];
    $sql ="SELECT * FROM `threads` WHERE thread_cat_id=$id";        
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){

        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
     
       
        echo' <div class="d-flex align-items-center">
            <div class="flex-shrink-0 my-4">
                <img src="https://www.shutterstock.com/image-vector/vector-flat-illustration-black-colors-260nw-2279039057.jpg"
                    width="54px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5> <a href="thread.php"> ' . $title . '</a></h5>
                ' . $desc . '
            </div>
        </div>';



    }
   
    ?>

         <!-- remove later; putting this just to check the HTML alignment for now      -->

<!--          
        <div class="d-flex align-items-center">
            <div class="flex-shrink-0 my-4">
                <img src="https://www.shutterstock.com/image-vector/vector-flat-illustration-black-colors-260nw-2279039057.jpg"
                    width="54px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>unable to install pyaudio error in Windows</h5>
                react is awesome Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit dignissimos
                fugiat voluptate neque, ratione ipsa
                eveniet molestiae asperiores nisi veniam qui
                commodi odit possimus a, tempore quos hic?
                Incidunt laudantium, et illum neque reiciendis.
            </div>
        </div> -->
        

    </div>
    </div>

    <?php include '_partials/footer.php';?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>