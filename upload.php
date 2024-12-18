<?php
  // echo "<pre>";
   #incoming form text based request
  // print_r($_POST);
   #incoming file as binary input or request
  // print_r($_FILES);

   function checkImage($imageType){
       $isImage  = ($imageType =='image/jpg' 
                  ||$imageType=='image/jpeg'
                  ||$imageType=='image/png'
                  ||$imageType=='image/gif') ? true : false;
                  return $isImage;
   }

   function checkImageSize($imageSize){
        $isValid = ($imageSize<=600*1024) ? true : false;
        return $isValid;
   }

                 //creating unique name for uploading file for avoiding naming collision
     $fileName   = time()."-". $_FILES['avatar']['name'];
     $fileType   = $_FILES['avatar']['type'];
     $fileSize   = $_FILES['avatar']['size'];
     $fileTmp    = $_FILES['avatar']['tmp_name'];
     $destination= './uploads/';
     $imagePath  = $destination.$fileName;

     if(checkImage($fileType)){
        if(checkImageSize($fileSize)){
                       //tmp    , original file name
     move_uploaded_file($fileTmp,$imagePath);

     echo "Image successfully Uploaded...";
        }else{
            die("Image is too large to upload");
        }
     }else{
        die("Only *.jpg | *.png | *.gif extensions are allowed to upload");
     }




?>