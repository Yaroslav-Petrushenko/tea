<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>it is very hard for me, i drink coffe not TEA</title>
</head>
<body>
    
    <form action="tea.php" method="POST">
        <?php
            echo ("TEA");
            $water = $_POST['water'];
            $sugar = $_POST['sugar'];
            $cup = $_POST['cup'];
            $waterCup = 0;
            $cup = $waterCup;
            $sugarAboutCup = $sugar / $water * 50; //sugar about 50ml/water
            $sugarOfCup = 0;
            echo ("<p>Water ".$water ."</p>Sugar ".$sugar);
            
            while ($water > 0) {
                $cup++;
                for ($i = 50; $water > 0 && $i <= 250; $i += 50, $water -= 50, $sugarOfCup += $sugarAboutCup){
                    echo ("<p>Налито $i мл води</p>");
                } 
                echo ("<p>Насипано ". round($sugarOfCup) ." ч.л цукру</p>");
                $timeOfTea = (2 / 250) * $i; //time about tea
                echo ("Опускаємо чайний пакетик на $timeOfTea хв");
                echo ("<p>Чай заварюється</p>");
                echo ("<p>Розмішуємо</p>");
                if ($water == 0){
                    echo ("<p>Вoда закінчилася</p>");
                } else {
                    echo ("<p>Кружка повна</p>");
                } if ($water > 0) {
                    echo ("<p>Беремо наступну кружку</p>");
                } else{
                    echo ("<p>Смачного чаювання</p>");
                }
            }
            echo("<p>Кружок $cup</p>");
            
            
                //echo ("Налито 50мл");
                //echo ("Налито 100мл");
                //echo ("Налито 150мл");
                //echo ("Налито 200мл");
                //echo ("Налито 250мл");
                //echo ("Кружка повна");
                //echo ("Кидаємо $sugarч.л. цукру");
                //echo ("Опускаємо чайний пакетик на хв");
                //echo ("Кружка чаю готова");
                //echo ("Беремо наступну кружку");
                //echo ("Смачного чаювання");
                //echo ("Water"." ".$water." "."Sugar"." ".$sugar);
            ?>
            <input type="hidden" name="cup" value="<?php echo($cup); ?>">
            <input type="hidden" name="watercup" value="<?php echo($waterCup); ?>">
    </form>
</body>
</html>
 
        
               
        
            
            
            
            
            
            
            
            
            
                
                
    
    
    
    
    
                
            
            

    




    