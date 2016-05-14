<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Home | Camerata de Violões Brasilis</title>
	
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>

    <!-- CSS local -->
    <link rel="stylesheet" type="text/css" href="../css/principal.css"/>

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style>
    	h2{
    		margin-top: 20%;
    	}
    	.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin {
		  margin-bottom: 10px;
		}
		.form-signin .form-control {
		  position: relative;
		  height: auto;
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		  padding: 10px;
		  font-size: 16px;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="email"] {
		  margin-bottom: -1px;
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 5%;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
    </style>
</head>

<body>

	<div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading text-center">Login Camerata</h2>
        <label for="inputEmail" class="sr-only">usuario</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="usuario" required autofocus>
        <label for="inputPassword" class="sr-only">senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">entrar</button>
      </form>

    </div> <!-- /container -->

</body>
</html>