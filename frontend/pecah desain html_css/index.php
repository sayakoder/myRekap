<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wawan Kretek</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <?php 
         include_once('header.php');

    ?>

    <section id="hero">
    </section>

    <section id="content">
        <div class="container">
            <section id="mainbar">

                <?php 
                    include_once('wrapper.php');
                ?>

            </section>
                <?php 
                    include_once('sidebar.php');
                 ?>
            </div>
        </section>

        <div class="clearfix"></div>
            <?php 
                include_once('footer.php');
             ?>
    </body>
    </html>