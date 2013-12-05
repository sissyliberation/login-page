<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Sign In</title>

<?php 
  $numDark = 0; 
  $dir = 'img/dark/';
  if ($handle = opendir($dir)) {
    while (($file = readdir($handle)) !== false){
      if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
        $numDark++;
    }
  }
?>
<?php 
  $numLight = 0; 
  $dir = 'img/light/';
  if ($handle = opendir($dir)) {
    while (($file = readdir($handle)) !== false){
      if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
        $numLight++;
    }
  }
?>

<link href="bootstrap-3.0.0-dist/css/bootstrap.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <form class="form-signin">
      <h2 class="form-signin-heading">Please sign in</h2>
      <input class="form-control" placeholder="Email address" autofocus="" type="text">
      <input class="form-control" placeholder="Password" type="password">
      <label class="checkbox">
        <input value="remember-me" type="checkbox"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p style="padding-top: 10px">Not a member? <a href="signup.php">Sign up here!</a></p>
    </form>
  </div>
  <script type="text/javascript">
  var countDark=<?php echo json_encode($numDark); ?>;console.log("dark "+countDark);
  var countLight=<?php echo json_encode($numLight); ?>;console.log("light "+ countLight);
  </script>
    <script src="jquery.min.js"></script>
  <script src="bootstrap-3.0.0-dist/js/bootstrap.min.js"></script>

  <script src="background.js"></script>
</body>
</html>