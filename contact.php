<!-- formulaire de contact utilisateur à insérer dans le site -->

<form method="POST" action="index.php">

    <div class="form-group">
        <label for="nom">Votre nom</label>
        <input type="text" class="form-control" id="nom" placeholder="Nom">
    </div>

    <div class="form-group">
        <label for="prenom">Votre nom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Prénom">
    </div>

    <div class="form-group">
        <label for="email">Votre adresse email</label>
        <input type="email" class="form-control" id="email" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="message">Votre message</label>
        <textarea class="form-control" rows="10" placeholder="Message"></textarea>
    </div>

    <div class="form-group">
        <p>Noter le Caméléon voyageur</p>
        <label for="rate1" class="radio-inline">
            <input type="radio" name="rate" id="rate1" value="rate1"> 1
        </label>
        <label for="rate2" class="radio-inline">
            <input type="radio" name="rate" id="rate1" value="rate2"> 2
        </label>
        <label for="rate3" class="radio-inline">
            <input type="radio" name="rate" id="rate1" value="rate3"> 3
        </label>
        <label for="rate4" class="radio-inline">
            <input type="radio" name="rate" id="rate1" value="rate4"> 4
        </label>
        <label for="rate5" class="radio-inline">
            <input type="radio" name="rate" id="rate1" value="rate5"> 5
        </label>
    </div>

    <button type="submit" class="btn btn-default">Envoyer</button>

</form>