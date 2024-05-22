<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="box-container"> 
        <form action="<?= ROOT ?>/admin/insert_van" method="POST" enctype="multipart/form-data">
            <div class="box-details">
                <h3>Add New Van</h3>
                <input type ="text" placeholder="Name of van" name="van_name" class="namevan" required><br>
                <input type ="number" placeholder="Price" name="van_price" class="price" required><br>
                <input type ="color" placeholder="Color" name="van_color" class="color" required><br>
                <input type ="text" placeholder="Transmision" name="van_transmission" class="transmission" required><br><br> 
                <input type="file" placeholder="Choose File" name="van_img" class="Choose File" required><br><br>
                <input type="submit" value="Add">
            </div>
        </form>
    </div>
</body>
</html>