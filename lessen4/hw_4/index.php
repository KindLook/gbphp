<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   
   <?php  
   $a = ['<a href="img/champignon.jpg"><img src="img/champignon.jpg" 
   width="189" alt="#"></a>', '<a href="img/chanterelle.jpg"><img src="img/chanterelle.jpg" 
   width="189" alt="#"></a>', '<a href="img/Saffron.jpg"><img src="img/Saffron.jpg" 
   width="189" alt="#"></a>','<a href="img/White.jpg"><img src="img/White.jpg" 
   width="189" alt="#"></a>',];
    
    echo $a[0];

    foreach ($a as $value) {
        echo $value;
        
    };

   ?>
    

</body>
</html>
