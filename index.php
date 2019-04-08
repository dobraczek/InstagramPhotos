<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Instagram Photo</title>
	
	<meta content="" name="keywords">
	<meta content="" name="author">
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

<div class="container">

	<h1>Instagram Photo</h1>

    <div class="row">
        <?php
        /**
         * Instagram Photo
         * @author Martin Dobry
         * @link http://webscript.cz
         * @version 1.0
         */
        
        include "Instagram.php";
        $Instagram = new InstagramPhotos\Photos();
        $json = $Instagram->Images();
        
        $array = json_decode($json, 1);
        
        foreach ($array as $data)
            echo '<div class="col-md-2 margin-bottom-30">'.$data.'</div>';
        
        ?>
    </div>
</div>

</body>
</html>