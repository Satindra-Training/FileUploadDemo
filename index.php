<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
</head>
<body>
     <div class="container-fluid">
     <fieldset class="card m-3 p-3">
        <legend><h4>Upload Profile Pic:</h4></legend> 
     <form method="POST" enctype="multipart/form-data" action="upload.php">
            <div class="form-group">
                Upload Profile Pic:
                <input type="file" name="avatar" required class="form-control">   

</div> 
             <div class="form-group">
                <button class="btn btn-sm btn-outline-primary">Upload</button>
             </div>


  </form>
</fieldset>
</div>



         



</body>
</html>