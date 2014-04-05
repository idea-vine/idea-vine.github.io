<html>
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="" />
		<title>IdeaVine</title>
		<link rel="stylesheet" type="text/css" href="style.css"> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$("#learn_content").hide();
				$('#add_response').hide();
			
				$('#learn_button').click(function(e) {
					e.preventDefault();
					$('#learn_button').hide();
					$('#learn_content').slideDown();
				});
				
				$('#add_idea').click(function(e) {
					e.preventDefault();
					$('#add_form').slideUp();
					$('#add_response').slideDown();
				});

			});
		</script>
	</head>
	<body style="margin:0px;">
	<div class="container">
		<br>
		<h1><b>Idea</b>Vine</h1>
		<br><br>
		<form role="form" id="add_form">
		  <div class="form-group">
		    <label for="exampleInputEmail1">What's your idea?</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Give away an extra idea you have...">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" id="add_idea">Add Idea</button>
		</form>
		<div class="panel panel-info" id="add_response"><div class="panel-heading">Nice</div><div class="panel-body">Your idea was added. Good work buddy!</div></div>
		<div id="learn_more">
			<button type="submit" class="btn btn-success" id="learn_button">Learn More</button>
			<div id="learn_content">
				Dat hidden content son.
				<h3>You ready to learn? Here is why you will use our app.</h3>
				<div class="panel panel-success">
				  <div class="panel-body">
				    Feature numba one
				  </div>
				</div>
				 <div class="panel panel-success">
				  <div class="panel-body">
				    But wait! A SECOND FEATURE
				  </div>
				  
				</div>
			</div>
		</div>
		<br>
		<h2>All the Ideas</h2>
		<table class="table table-striped">
			<tbody>
				<tr><td class="col-md-11">My first app idea does something i guess...</td><td><button type="submit" class="btn btn-info">Read More</button></td></tr>
				<tr><td class="col-md-8">Who the hell knows what idea number 2 is...</td><td><button type="submit" class="btn btn-info">Read More</button></td></tr>
				<tr><td class="col-md-8">So many ideas...</td><td><button type="submit" class="btn btn-info">Read More</button></td></tr>
				<tr><td class="col-md-8">Yup Yup Yup...</td><td><button type="submit" class="btn btn-info">Read More</button></td></tr>
			</tbody>
  		</table>
	</div>
	</body>
</html>