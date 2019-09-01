    
        <label for="Calcul"><b>Calcul du prix</b></label><br>

        <div class="form-group">
            <label for="prix_ht">Prix HT :</label>
            <input name="prix_ht" type="text" class="prix_ht" onkeyup="calcule_ht_ttc(event)" required>
        </div>
        <div class="form-group">
            <label for="quantite">Quantité :</label>
            <input id="quantite" name="quantite" type="text" class="quantite" onkeyup="calcule_ht_ttc(event)" required>
        </div>
        <div class="form-group">
            <label for="taux_tva">Taux TVA :</label>
            <input name="taux_tva" type="text" class="taux_tva" onkeyup="calcule_ht_ttc(event)" required>
        </div>
        <div class="form-group">
            <label for="remise">Remise :</label>
            <input name="remise" type="text" class="taux_remise" value="0" onkeyup="calcule_ht_ttc(event)" required>
        </div>
        <div class="form-group">
            <label for="prix_ttc">Prix TTC :</label>
            <input name="prix_ttc" type="text" class="prix_ttc" onkeyup="calcule_ht_ttc(event)">
        </div>
