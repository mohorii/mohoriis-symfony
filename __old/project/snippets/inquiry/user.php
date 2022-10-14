<h3 class="tagline">Persönliche Angaben</h3>

<div class="row mb-2">
    <div class="col-12">
        <div class="inquiry__group is--floating">
            <select id="salutation" name="salutation" class="user__input" required="">
                <option value="" selected="">Bitte wählen...</option>
                <option value="Herr">Herr</option>
                <option value="Frau">Frau</option>
                <option value="keine Angabe">keine Angabe
                </option>
            </select>
            <label class="user__label" for="salutation">Anrede</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="inquiry__group is--floating">
            <input id="firstName" name="firstName" type="text" class="user__input"
                   placeholder="Vorname" value="" required>
            <label class="user__label" for="firstName">Vorname</label>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="inquiry__group is--floating">
            <input id="lastName" name="lastName" type="text" class="user__input"
                   placeholder="Nachname" value="" required>
            <label class="user__label" for="lastName">Nachname</label>
        </div>
    </div>
    <div class="col-12">
        <div class="inquiry__group is--floating">
            <input id="eMail" name="eMail" type="email" class="user__input"
                   placeholder="E-Mail" value="" required>
            <label class="user__label" for="eMail">E-Mail Adresse</label>
        </div>
    </div>
</div>