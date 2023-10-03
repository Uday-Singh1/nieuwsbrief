<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/main.js" defer></script>
    <title>Nieuwsbrief</title>
</head>
<body>
    <header>
        <h1>Nieuwsbrief</h1>
    </header>

  
    <section class="form__section">

    <?php
    require('../views/form.php');
    ?>
        <!-- <form action="api.php" method="post" class="form__container">
            <input type="text" class="form__input" id="naam" name="naam" placeholder="Naam">
            <input type="text" class="form__input" id="email" name="email" placeholder="E-mail">

            <label  for="nieuwsbrieven">Kies een nieuwsbrief</label>
            <select class="selector__lable" name="nieuwsbrief" id="nieuwsbrief">
                <option value="nieuwsbrief1">nieuwsbrief1</option>
                <option value="nieuwsbrief2">nieuwsbrief2</option>
            
              </select>
            <textarea class="form__input" name="" id="" cols="30" rows="10" placeholder="Bericht"></textarea> -->
         
             <!-- <div class="form__checkbox">
                <input type="checkbox" id="toestemming" name="toestemming">
                <label for="toestemming" class="toestemming__text">Ik ga akkoord met de voorwaarden</label>
            </div>
            <button type="submit" class="form__submit">Verzenden</button>
        </form>  -->
    </section>  
    
</body>
</html>