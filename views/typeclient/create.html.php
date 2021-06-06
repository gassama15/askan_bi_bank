<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=typeclientController&task=add" method="POST">
                <fieldset>
                    <legend>TYPE DE COMPTE</legend>
                    <div class="form-group">
                        <label for="codeType" class="form-label mt-4">codeType</label>
                        <input name="codeType" type="text" class="codeType" id="nom"
                            placeholder="Entrez le codeType de votre du client " required >
                    </div>
                    <div class="form-group">
                        <label for="libelleType" class="form-label mt-4">libelletype</label>
                        <input name="libelleType" type="text" class="form-control" id="prenom"
                            placeholder="Entrez le type de libelle  de votre client"required >
                    </div>
                    
                     <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>