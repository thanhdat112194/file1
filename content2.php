<?php
if(!empty($_POST["f"])){
    $dir_file=$_POST["f"];
  
   if (exif_imagetype($dir_file) != IMAGETYPE_JPEG) {
    $open_file = fopen($dir_file,"r");

    while (!feof($open_file )) {
        $line = fgets($open_file );
        echo $line;
    }
    fclose($open_file);
    die;
   }else{
    echo "<div class='container'>";
    echo  "<img src='$dir_file' alt='' width='200px' heigth='auto' >";
    echo "</div>";
}
  

   exit;    


    // if(exif_imagetype($dir_file) != IMAGETYPE_JPEG){
    //     echo "This is not image";
      
    // }else{
     
    //     // $im = imagecreatefromjpeg($dir_file);
    //     // imagejpeg($im);
      
    
      
    // }

//         if(mime_content_type( $dir_file)){
  
        // $open_file = fopen( $dir_file,"r");

        // while (!feof($open_file )) {
        //     $line = fgets($open_file );
        //     echo $line;
        // }
        // fclose($open_file);

// }

// if(mime_content_type( $dir_file)){
        
// // var_dump($im);
// //         // echo "done";
// // endif;   
// }
}


?>

