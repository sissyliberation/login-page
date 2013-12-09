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
    <div class="col-lg-6">
      <form class="form-signin">
        <h2 class="form-signin-heading">Sign in</h2>
        <input class="form-control" placeholder="Email address" autofocus="" type="text">
        <input class="form-control" placeholder="Password" type="password">
        <label class="checkbox">
          <input value="remember-me" type="checkbox"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
    <div class="col-lg-6">
    <form  class="form-signin">
      <h2 class="form-signin-heading">Sign up</h2>
      <input class="form-control" placeholder="Username" autofocus="" type="text">
      <input onchange="validate(); return false;" class="form-control" placeholder="Email address" type="email">
      <input class="form-control" placeholder="Password" type="password">
      <input class="form-control" placeholder="Confirm password" type="password">
      <p style="font-size:11px; padding-top:10px">By clicking Sign up, you agree to our <a href="TOC.html">terms and conditions and privacy policy</a> </p>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>
    </div>

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