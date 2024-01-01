<?php
    
    if($_SERVER['REQUEST_URI']=='/gowme'){
                $load_message="Use your LAPTOP!❤️"; 

    }else{
        $load_message="Oops URI Not Found!";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="center.css">
    <title>404</title></head>
<body bgcolor="#1f2937">
    <div class="container" >
        <h1 align="center" style="color:white;font-family:Courier New">404!</h1> 
        <h2 align='center'style='color:white;font-family:Courier New'>
                <?php echo $load_message?>
            </h2>
        <a href="/"><h3 align="center" style="color:#6366f1;font-family:Courier New">Home Page</h3></a> 
    </div>

</body>
</html>