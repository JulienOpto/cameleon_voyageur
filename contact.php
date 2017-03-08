<!-- formulaire de contact utilisateur à insérer dans le site -->

<form method="POST" action="traitementMessage.php">

    <div class="form-group">
        <label for="nom">Votre nom</label>
        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
    </div>

    <div class="form-group">
        <label for="prenom">Votre nom</label>
        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
    </div>

    <div class="form-group">
        <label for="email">Votre adresse email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="message">Votre message</label>
        <textarea class="form-control" rows="10" name="message" placeholder="Message"></textarea>
    </div>

    <div class="form-group">
        <p>Noter le Caméléon voyageur</p>
        <label for="note1" class="radio-inline">
            <input type="radio" name="note" id="note1" value="1"> 1
        </label>
        <label for="note2" class="radio-inline">
            <input type="radio" name="note" id="note2" value="2"> 2
        </label>
        <label for="note3" class="radio-inline">
            <input type="radio" name="note" id="note3" value="2"> 3
        </label>
        <label for="note4" class="radio-inline">
            <input type="radio" name="note" id="note4" value="2"> 4
        </label>
        <label for="note5" class="radio-inline">
            <input type="radio" name="note" id="note5" value="2"> 5
        </label>
    </div>

    <button type="submit" class="btn btn-default" name="btnSubmit">Envoyer</button>

</form>