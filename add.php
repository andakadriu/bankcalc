<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shto</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            GNTC
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        
        <div class="nav-links">
            <ul>
          <li><a href="index.php" target="">Shiko kalkulimet</a></li>
          <li><a href="add.php" target="">Shto</a></li>
         
         
            </ul>
        </div>
      </div>
    <div class="wrapper">
        <div class="title"> PLOTËSO TË DHËNAT </div>
        <div class="form">
            <form action="connect.php" method="post">
                <div class="input_field">
                    <label for="dataB">Data</label>
                    <input type="date" class="input" id="dataB" name="dataB" />
                </div>
                <div class="input_field">
                    <label for="emriBankes">Emri Bankes</label>
                    <input class="input" type="radio" name="emriBankes" value="PRO" />PRO
                    <input class="input" type="radio" name="emriBankes" value="NLB" />NLB
                    <input class="input" type="radio" name="emriBankes" value="TEB" />TEB
                    <input class="input" type="radio" name="emriBankes" value="RAI" />RAI
                    <input class="input" type="radio" name="emriBankes" value="DE" />DE
                </div>
                <div class="input_field">
                    <label for="vlera">Vlera</label>
                    <input type="text" class="input" id="vlera" name="vlera" />
                </div>
                <div class="input_field">
                    <input type="submit" class="btn" value="SHTO">
                </div>
            </form>
        </div>
    </div>
</body>
</html>