<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <!-- search bar right align -->
    <div class="search">
        <form action="search.php" method="POST">
            <input type="text" placeholder=" Search Courses" name="buscar">
            <input type="submit" class="fa fa-search" style="font-size: 18px;" >
        </form>
        <?php
            include 'buscador.php';

            while($row = mysqli_fetch_array($sql_query)){
                ?>
                    <img width="100" src="data:<?php echo $row['tipo']; ?>;base64,<?php echo base64_encode($row['imagen']); ?>">
                <?php
            } 
        ?>
    </div>
</body>
</html>