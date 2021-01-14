<html>

<body>
<form method="post" enctype="multipart/form-data">
<input type="text" name="txteno"/>
<input type="file" name="file">
                                                 
                                             
<input type="submit" value="Upload Image" name="btnupload"/>
<input type="submit" value="Delete Image" name="btndelete"/>
<?php
if(isset($_POST['btnupload']))
{
    $dir="../Images/Events/";

        $image=$_FILES['file']['name'];
        $temp_name=$_FILES['file']['tmp_name'];
        $img=$_POST['txteno'];
        if($image!="")
        {
            $fdir= $dir.$img.".jpg";
            move_uploaded_file($temp_name, $fdir);
        }
        echo("<h4 style='color:green'><b><br> <br> <center> Uploaded Done </center> </b></h4>");
}
if(isset($_POST['btndelete']))
{
    
}
?>
</form>


</body>

</html>