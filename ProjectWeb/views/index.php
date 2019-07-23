<!-- Player Information Page -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Poet Information</title>
	<!--<link rel='icon' href='../resources/img/favicon.ico' type='image/x-icon'/>-->
    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="../resources/css/my_style.css" rel="stylesheet">
  </head>

  <body class="page_bg">
  <?php echo "beefcake"; ?>
  </body>

  <body>
	<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark ">
	  <a class="navbar-brand" href="home.html">
		<img class="rounded-circle" src="../resources/img/slamcodelogo.png" alt="" width="30" height="30">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
		 <li class="nav-item">
			<a class="nav-link" href="home.html">Home</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="stats.html">Stats <span class="sr-only">(current)</span></a>
		  </li>
      <li class="nav-item">
      <a class="nav-link" href="host.html">Host</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="judge.html">Judge</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="poetinfo.html">Poet Information</a>
      </li>
		</ul>

		<div class="form-inline my-2 my-lg-0">
			<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
		</div>
	  </div>
	</nav>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-4">
				  <div class="card">
    					<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    					<div class="card-body">
      						<h5 class="card-title"> <span id="poetName_1"> </h5>
      						<ul class="card-text list" >
      							<li> Poem Title: -- </li>
      							<li> Birthdate: -- </li>
      							<li> Wins: --</li>
      						</ul>
    					</div>
    				</div>
    		</div>
			<div class="col-4">
  					<div class="card">
    					<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    					<div class="card-body">
                    <h5 class="card-title"> John Doe </h5>
                  <ul class="card-text list" >
                    <li> Poem Title: -- </li>
                    <li> Birthdate: -- </li>
                    <li> Wins: --</li>
                  </ul>
   						 </div>
  					</div>
  			</div>
			<div class="col-4">
  					<div class="card">
    						<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    						<div class="card-body">
                  <h5 class="card-title"> John Doe </h5>
                  <ul class="card-text list" >
                    <li> Poem Title: -- </li>
                    <li> Birthdate: -- </li>
                    <li> Wins: --</li>
                  </ul>
   						 	</div>
  					</div>
  			</div>
  			<div class="col-4">
  					<div class="card">
    					<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    						<div class="card-body">
                  <h5 class="card-title"> John Doe </h5>
                  <ul class="card-text list" >
                    <li> Poem Title: -- </li>
                    <li> Birthdate: -- </li>
                    <li> Wins: --</li>
                  </ul>
   						 	</div>
  					</div>
  			</div>
 			<div class="col-4">
  					<div class="card">
    					<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    						<div class="card-body">
                  <h5 class="card-title"> John Doe </h5>
                  <ul class="card-text list" >
                    <li> Poem Title: -- </li>
                    <li> Birthdate: -- </li>
                    <li> Wins: --</li>
                  </ul>
   						 	</div>
  						</div>
  				</div>
  			<div class="col-4">
  					<div class="card">
    					<img class="card-img-top" src="../resources/img/default_avatar.png" alt="Card image cap">
    						<div class="card-body">
                  <h5 class="card-title"> John Doe </h5>
                  <ul class="card-text list" >
                    <li> Poem Title: -- </li>
                    <li> Birthdate: -- </li>
                    <li> Wins: --</li>
                  </ul>
   						 	</div>
  						</div>
		</div>

	</div>

  <?php
  try {$dbuser = 'postgres';
  $dbpass = 'csci3308';
  $host = 'localhost';
  $dbname='project_db';
  $connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
  }catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "<br/>";
  die();
  }
  $sql = 'SELECT poet_name FROM poet_info';
  foreach ($connec->query($sql) as $row)
  {
  print $row['poet_name'] . "<br>";
  }
  ?>

  <script>
        //  $db_connection = pg_connect("host=localhost dbname=project_db user=postgres password=csci3308");

          /*var express = require('express');
          var flash

          var pg = require('pg'); //include postgres dependancy
          var connectionString = "postgres://postgres:csci3308@localhost:5432/project_db"; //connection string in format: "postgres://userName:password@serverName/ip:port/nameOfDatabase"
          var pgThing = new pg.Thing(connectionString); //instantiate the thing for postgres database
          pgThing.connect(); //connect to database
          var query = pgThing.query("SELECT poet_name from poet_info");  //execute query*/

          //Create Database Connection
          /*var pgp = req('pg-promise')();

          const dbConfig = {
          	host: 'localhost',
          	port: 5432,
          	database: 'project_db',
          	user: 'postgres',
          	password: 'csci3308'
          };

          var db = pgp(dbConfig);

          // set the view engine to js??
          app.set('view engine', 'js');
          app.use(express.static(__dirname + '/'));//This line is necessary for us to use relative paths and access our resources directory

          var query = "select poet_name from poet_info;";*/


          document.getElementById("poetName_1").innerHTML = "fugg";

  </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
