<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bean</title>
</head>
<body>
    <div class="phpform">
        <form method="POST" enctype="multipart/form-data">

            Title name:
            <input name="title" type="text" id="title">
            <br><br>
            Main Text:
            <input name="mainText" type="text" id="mainText">
            <br><br>
            Description:
            <input name="desc" type="text" id="desc">
            <br><br>
            Image:
            <input type="file" id="image" name="image">
            <br><br>
            <input type="submit" value="Show" name="show" id="show">

        </form>
    </div>

    <?php
    if (isset($_POST['show'])) 
    {
        $title = $_POST['title'];
        $main = $_POST['mainText'];
        $desc = $_POST['desc'];
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        echo $target_file;
        
    }
    ?>

</body>
</html>