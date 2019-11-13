 <html>
    <head>
        <title>Upload Image</title>
    </head>
    <body>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        Select Image file to Upload:
        <input type="file" name="file">
        <input type="submit" name="submit" value="Upload">
        </form>
        <br>

        <!-- <?php
        include'config.php';

        $query = $db->query("SELECT file_name FROM images ORDER BY uploaded_on DESC");

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $imageURL = 'uploads/'. $row["file_name"];
                ?>
                <img height="320px" width="auto" src="<?=$imageURL;?>" />
            <?php }} ?>
            }
        }
        ?> --> 
    </body>
</html>