@csrf
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text">Client</span>
    </div>
    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom">
    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom">
</div>
<div class="form-group">
    <label for="dateNaissance">Date de naissance</label>
    <input type="date" name="dateNaissance" id="dateNaissance" class="form-control">
    @error('dateNaissance')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" id="adresse" class="form-control">
    @error('adresse')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="tel">Téléphone</label>
    <input type="text" name="tel" id="tel" class="form-control">
    @error('tel')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <input type="submit" value="Enregistrer" class="btn btn-success">
    <input type="reset" value="Annuler" class="btn btn-warning">
</div>