<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>add book</title>
</head>

<body>
    <div class="conatiner">
        <h5 class="college_name">Rajiv Academy For Technology And Management, Mathura</h5 class="college_name">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="Rajiv acedemy" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav justify-content-end navbar-nav w-100">
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav_link" href="addbook.php">Add Book</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="add_book">
        <h4 class="addbook_handing">Add Book</h4>
        <div class="response"></div>
        <form id="add_form">
            <div class="mb-3">
              <label for="name" class="form-label" >Student Name</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="mb-3">
            <label for="class" class="form-label">Student Class</label>
            <input type="text" class="form-control" id="class" name="class">
          </div>

          <div class="mb-3">
            <label for="semister" class="form-label">Student Semister</label>
            <input type="text" class="form-control" id="semister" name="semister">
          </div>

          <div class="mb-3">
            <label for="mobile_no" class="form-label">Student Mobile Number</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no">
          </div>

          <div class="mb-3">
            <label for="book" class="form-label">Student Book</label>
            <input type="text" class="form-control" id="book" name="book">
          </div>
            
            <button type="submit" class="add_btn mx-auto d-block" id="add" name="add">Submit</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="index.js"></script>
</body>

</html>