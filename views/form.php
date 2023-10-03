

<form action="api.php" method="post" class="form__container">
            <!-- <input type="text" class="form__input" id="naam" name="naam" placeholder="Naam"> -->
            <input type="text" class="form__input" id="name" name="name" placeholder="Name">
            <input type="text" class="form__input" id="email" name="email" placeholder="E-mail">
     
            <div id="password-strength"></div>
            <label  for="nieuwsbrieven">Kies een nieuwsbrief</label>
            <select class="selector__lable" name="nieuwsbrief" id="nieuwsbrief">
                <option value="nieuwsbrief1">nieuwsbrief1</option>
                <option value="nieuwsbrief2">nieuwsbrief2</option>
            
              </select>
            <button type="submit" class="form__submit">Verzenden</button>
        </form>