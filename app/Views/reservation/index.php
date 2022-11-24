A FAIRE

<div class="reservation">
    <h4>Réservation</h4>
    <form class="form-resa" method="post" action="">
        <div class="cont1 resa">
            <input type="text" name="NOM" id="Nom" placeholder="Nom" size="40" required />
            <br>
            <input type="text" name="PRENOM" id="Prenom" placeholder="Prénom" size="40" required />
            <br>
            <input type="tel" name="TELEPHONE" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" id="TELEPHONE" placeholder="N° Téléphone 0000000000" size="10" required />
            <br>
            <input type="email" name="EMAIL" id="Email" placeholder="Email" size="40" required />
        </div>
        <div class="cont2 resa">
            <input type="datetime-local" name="DATES" id="DATES" required />
            <br>
            <input type="number" name="NOMBRE_PERS" min="1" max="2" id="NOMBRE_PERS" placeholder="Nombre de personnes" size="1" required />
            <br>
            <textarea type="text" name="MESSAGES" id="MESSAGES" placeholder="Message" rows="4" cols=40></textarea>
            <br>
        </div>
        <div class="btn resa">
            <input type="submit" name="submit-form-resa" id="formulaire" class="reserver" value="Réserver" />
        </div>
    </form>
</div>