<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .two {
            width:900px;
        }
        .three{
            float:left;
            width:85px;
            margin-top:10px;
           
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <div id="one">
        <?php for ($j=1;$j<10;$j++){ ?>
            <div class="two">
                <?php for ($i=1;$i<=$j; $i++) { ?>
                    <div class="three"><?php printf("%d*%d=%d",$i,$j,$i*$j); ?></div>
                <?php } ?>
                <div class="clear"></div>
            </div>
       <?php } ?>
    </div>
</body>
</html>