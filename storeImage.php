
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Imagem</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
    </style>
</head>
<body>
  
 <div class="container">
   <h1 class="text-left">Reconhecimento Facial</h1>

    <form method="POST" action="storeImage.php">
        <div class="row"> 
            <div class="col-md-6">

                <div id="results"><b>Imagem Salva:</b>
			
		<?php
    	
   			$img = $_POST['image'];
    			$folderPath = "upload/";
  
   			$image_parts = explode(";base64,", $img);
    			$image_type_aux = explode("image/", $image_parts[0]);
    			$image_type = $image_type_aux[1];
  
    			$image_base64 = base64_decode($image_parts[1]);
   			$fileName = uniqid() . '.jpg';
  
    			$file = $folderPath . $fileName;
    			file_put_contents($file, $image_base64);
  
   			print_r($fileName);
			echo '<meta http-equiv="refresh" content="2;URL=index.php" />';
  
		?>
            

		</div>
	    </div>  
        </div>
    </form>
</div>
</body>
</html>















