<html>
    <body>
    <h1 style="color: #4651f0;">Iterator</h1>
    <?php
        while ($iteration->hasNext()){
            echo('<h3>'.$iteration->next().'</h3>');
        }
    ?>
    </body>
</html>

