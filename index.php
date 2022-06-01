<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="tea.php">
        <p>
            
            <h2>Кількість чаю в мл</h2>
                    <label>
                        <input name="water" type="range" min="50" max="1000" value="50" step="50" oninput="this.nextElementSibling.value = this.value">
                        <input step="50" oninput="this.previousElementSibling.value = this.value">
                    </label>
            <h2>Кількість sugar</h2>        
                    <label>
                        <input name="sugar" type="range" min="0" max="7" value="0" step="0.5" oninput="this.nextElementSibling.value = this.value">
                        <input step="0.5" oninput="this.previousElementSibling.value = this.value">
                    </label>
                    <label>
                        <input type="submit" value="Zakaz">
                    </label>
                    <input type="hidden" name="cup" value="0">
                    <input type="hidden" name="cupwater" value="0">
                    
                    
                </p>
            </form>    
            <?php
                
            ?>
</body>
</html>



