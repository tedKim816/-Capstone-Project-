<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game View</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- canvas implementation 2 -->
	<meta name="viewport" content="width-device-width", initial-scale="1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
    
</head>

<body onload="startGame();">

	    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 d-flex justify-content-end align-items-center">
                </div>
            </div>
            <div class="nav-scroller py-1 mb-2 bg-info navbar-dark bg-dark">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-light" href="#">Stories Channel</a>
                    <a class="p-2 text-light" href="http://localhost/ci/index.php/education/show">
                    Education Channel</a>
                    <a class="p-2 text-light" href="#">News and Events Channel</a>
                    <a class="p-2 text-light" href="#">Activities Channel</a>
                    <a class="p-2 text-light" href="#">Games Channel</a>
                </nav>
            </div>
        </header>

	<div class="panel panel-default">
  		<div class="panel-body bg-danger text-white"><h1>Games will be here</h1></div>
	</div>

	<h2> Tic-Tac-toe (basic logic html + javascript) </h2>
	<div id="message"> ... </div>
	
		<table border="1" class="table"> 
			<tr class="d-flex">
				<td id = "s1" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s2" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s3" class="col-sm-1" onclick="nextMove(this);"></td>
			</tr>
			<tr class="d-flex">
				<td id = "s4" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s5" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s6" class="col-sm-1" onclick="nextMove(this);"></td>
			</tr>
			<tr class="d-flex">
				<td id = "s7" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s8" class="col-sm-1" onclick="nextMove(this);"></td>
				<td id = "s9" class="col-sm-1" onclick="nextMove(this);"></td>
			</tr>
		</table>
		<button onclick="reloadPage()">Restart Game</button>


	<!-- canvas implementation 2 -->
	<h2 id="head"> implementation 2 (canvas + javascript) </h2>
	<h2 id="result"></h2> 

	<section id="game"> 
		<div id="tictac">
			<canvas id="canvas1" width="100" height="100"></canvas>
			<canvas id="canvas2" width="100" height="100"></canvas>
			<canvas id="canvas3" width="100" height="100"></canvas><br/>

			<canvas id="canvas4" width="100" height="100"></canvas>
			<canvas id="canvas5" width="100" height="100"></canvas>
			<canvas id="canvas6" width="100" height="100"></canvas><br/>

			<canvas id="canvas7" width="100" height="100"></canvas>
			<canvas id="canvas8" width="100" height="100"></canvas>
			<canvas id="canvas9" width="100" height="100"></canvas>

			<center><button id="new">Start New Game</button></center>
		</div>

		<div id="settings">
             <div class="dropdown">
              <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Select Icon</a>
                <a class="dropdown-item" href="#">Background Colours</a>
                <a class="dropdown-item" href="#">Tile Colours</a>
                <a class="dropdown-item" href="#">...</a>
                <a class="dropdown-item" href="#">...</a>
                <a class="dropdown-item" href="#">...</a>
              </div>
            </div><br>
            
            <table class="bg-primary text-light">    
                <tr>
                    <td>
                        test icon change:<br>
                        <select name="icon" onchange = "imageChoose(this.value)">
                        <option value="<?php echo base_url(); ?>assets/images/71666491-black-cat-icon.jpg">Cat</option>
                        <option value="<?php echo base_url(); ?>assets/images/small-duck_318-42620.jpg">Duck</option>
                        <option value="<?php echo base_url(); ?>assets/images/eagle.jpg">Eagle</option>
                        <option value="<?php echo base_url(); ?>assets/images/frog.jpg">Frog</option>   
                        </select>
                    </td>
                    <td>
                        <img src="<?php echo base_url(); ?>assets/images/71666491-black-cat-icon.jpg" id="icon-show" onclick="imageChoose();" width=100>
                    </td>
                </tr>
            </table>
            
        </div>

	</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            
<!-- canvas implementation 2 -->
<script src="<?php echo base_url() . 'assets/js/script.js'; ?>"></script>

</body>

</html>