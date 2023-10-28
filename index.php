<?
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "personal_data";
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	$conn = OpenCon();
	$query = "SELECT * FROM `data_list`;"
	$sql = mysqli_query($conn,$query);
	$result = mysqli_fetch_row($sql);
	echo $result[0];
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
				    	<span class="navbar-brand mb-1 h2">Bayhaqie - CRUD</span>
				  	</div>
				  </nav>
  			</div>
		</div>
	</div>
	</div>
	
	
<div class="container">
<h4>
  <h3 class="mt-4">CRUD Task Assignment <small class="text-muted">Personal Data List</small></h3>
</h4>
<div class="accordion accordion-flush" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Data Terms and Rules
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul>
	      <li>This is not a Real Data</li>
	      <li>Please use it with Consent</li>
	      <li>Any Leaks of Data will be Reported</li>
	      <li>Report to Admin if there is Any Mistaken in the Data</li>
	      <li>The List itself contains Club Members Information</li>
	    </ul>
      </div>
    </div>
  </div>
	<div class="container mt-3">
	<ul class="list-unstyled">
	  <li>Here is The List.</li>
	</ul>
	</div>
</div>
<div class="table-responsive">
  <table class="table align-middle table-secondary table-bordered table-hover">
    <thead>
      <tr>
      	<th><center>No.</center></th>
        <th>ID</th>
	    <th>Name</th>
	    <th>Gender</th>
	    <th>Religion</th>
	    <th>Address</th>
	    <th>Status</th>
	    <th>Hobby</th>
        <th>Heroes</th>
	    <th>Photo</th>
	    <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><center>1.</center></td>
        <td>1001</td>
        <td>Kurniawan Anugerah</td>
        <td>Male</td>
        <td>Islam</td>
        <td>Jln. Sungai Tanang, Pakan Sinayan</td>
        <td>Single</td>
        <td>Fishing and Boxing</td>
        <td>Moh. Ali</td>
        <td><img src="img/1.jpg" style="width : 100px"></td>

        <td>
        	<center><a href="manage.php?change=1" type="button" class="btn btn-dark btn-sm"><img src="img/8-1.png" style="width : 15px"></a></center>
        	<h6> </h6>
        	<center><a href="keep.php?del=1" class="btn btn-dark btn-sm"><img src="img/7-1.png" style="width : 15px"></a></center>
        </td>
      </tr>
      <tr class="align-bottom">
        <tr>
        <td><center>2.</center></td>
        <td>1002</td>
        <td>Fatimah Nur Fitri</td>
        <td>Female</td>
        <td>Islam</td>
        <td>Jln. Sudirman, Koto Tuo</td>
        <td>In Relationship</td>
        <td>Reading and Sewing</td>
        <td>Jeanne d'Arc</td>
        <td><img src="img/2.jpeg" style="width : 100px"></td>

        <td>
        	<center><a href="manage.php?change=2" type="button" class="btn btn-dark btn-sm"><img src="img/8-1.png" style="width : 15px"></a></center>
        	<h6> </h6>
        	<center><a href="keep.php?del=2" class="btn btn-dark btn-sm"><img src="img/7-1.png" style="width : 15px"></a></center>
        </td>
      </tr>
      </tr>
      </tbody>
  </table>
  <a href="manage.php" type="button" class="btn btn-dark"><img src="img/9-1.png" style="width : 15px">  Add Data</a>
</div>
</body>
</html>
