<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Rajiv Acamedy</title>
</head>

<body>
  <div class="conatiner">
    <h5 class="college_name">Rajiv Academy For Technology And Management, Mathura</h5 class="college_name">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo.jpg" alt="Rajiv acedemy" class="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" name="std_name" id="std_name" aria-label="Search">
            <button class="btn btn-outline-success" type="submit" id="search">Search</button>
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

  <div class="container">
    <h5 class="my-2 text-white text-center fs-2 fw-bold">Issue Book Table</h5><br>
    <div class="table_response text-center container"></div>
  </div>
  <div class="container d-flex insert_data justify-content-center">
        <table class="book_table">
          <thead>
            <tr>
              <th>S.No</th>
              <th>Student Name</th>
              <th>Class</th>
              <th>Semister</th>
              <th>Mobile No</th>
              <th>Book</th>
              <th>Issue Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="book_data">
          </tbody>
        </table>
      </div>

  <div class="update_form">
    <div class="remove_update_form">x</div>
    <h4 class="text-center my-2">update Book</h4>
    <div class="correction_form"></div>
    <form action="" id="update_form">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1 d-none" type="text" name="Student_id" id="Student_id"
        placeholder="Please Enter Student Id">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1" type="text" name="Student_name" id="Student_name"
        placeholder="Please Enter Student Name">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1" type="text" name="Student_class" id="Student_class"
        placeholder="Please Enter Student Class">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1" type="text" name="Student_sem" id="Student_sem"
        placeholder="Please Enter Student Semister">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1" type="text" name="Student_book" id="Student_book"
        placeholder="Please Enter Student Issue Book Name">
      <input class="form-contorl w-100 my-2 mx-auto d-block px-1" type="number" name="Student_mobile" id="Student_mobile"
        placeholder="Please Enter Student Mobile Number">
      <input type="submit" name="update" id="update" class="btn btn-primary mx-auto d-block" value="Update">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="index.js"></script>
</body>

</html>


