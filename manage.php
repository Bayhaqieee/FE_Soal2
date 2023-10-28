<?
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $db = "personal_data";
  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
  $conn = OpenCon();
  echo "Connected Successfully";
  CloseCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- Must Have in Code!-->
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <script src="js/bootstrap.bundle.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css" />

  <title>CodeCRUDBayhaqie</title>
</head>
<body>
  <div class="navbar navbar-dark bg-dark shadow sm">
    <div class="container-fluid">
      <nav>
        <div class="card border-dark text-bg-dark mb-3" style="max-width: 13rem;">
          <div class="card-body">
            <div class="container">
              <h6></h6>
              <span class="navbar-brand mb-1">Bayhaqie - CRUD</span>
            </div>
          </div>
        </div>
      </nav>
      <form method="POST" action="keep.php">
          <div class="container mt-3">
            <div class="mb-3 row">
              <label for="id" class="col-sm-2 col-form-label text-white">ID</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="id" placeholder="Input the Correct ID">
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="name" class="col-sm-2 col-form-label text-white">Name</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="name" placeholder="Input Your Correct Name">
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="gender" class="col-sm-2 col-form-label text-white">Gender</label>
              <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example">
                  <option selected>Choose Your Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                  <option value="3">Intersex</option>
                </select>
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="religion" class="col-sm-2 col-form-label text-white">Religion</label>
              <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example">
                  <option selected>Choose Your Religion</option>
                  <option value="1">Islam</option>
                  <option value="2">Christian</option>
                  <option value="3">Hindu</option>
                  <option value="3">Buddha</option>
                  <option value="3">Konghucu</option>
                  <option value="3">Atheist</option>
                </select>
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="address" class="col-sm-2 col-form-label text-white">Address</label>
              <div class="col-sm-10">
              <textarea class="form-control" id="address" rows="3"></textarea>
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="status" class="col-sm-2 col-form-label text-white">Status</label>
              <div class="col-sm-10">
              <select class="form-select" aria-label="Default select example">
                  <option selected>What is Your Status?</option>
                  <option value="1">Single</option>
                  <option value="2">In Relationship</option>
                  <option value="3">Married</option>
                </select>
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="hobby" class="col-sm-2 col-form-label text-white">Hobby</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="hobby" placeholder="Input Your New Hobbies">
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="heroes" class="col-sm-2 col-form-label text-white">Heroes</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" id="heroes" placeholder="Input Your New Heroes">
              </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="mb-3 row">
              <label for="foto" class="col-sm-2 col-form-label text-white">Photo</label>
              <div class="col-sm-10">
              <div class="input-group">
                  <input type="file" class="form-control" id="foto" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                  <button class="btn btn-outline-secondary" type="button" id="foto">Upload</button>
                </div>
                  <div class="mb-3 row mt-3">
                  <div class="col">
                    <?php
                      if(isset($_GET['change'])){
                      ?>
                        <button type="submit" name="act" value="edit" class="btn btn-primary">
                        Change
                        </button>
                        <?php
                      }else{
                      ?>
                      <button type="submit" name="act" value="add" class="btn btn-primary">
                        Add
                        </button>
                    <?php
                      }
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                    Cancel
                  </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>