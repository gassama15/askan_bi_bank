<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=operationsController&task=add" method="POST">
                <fieldset>
                <div class="row" >
                
                    <legend>Information d'operation</legend>

             <div class="form-group"></br> 
                    <select>
                     <libelle>type d'operation </libelle>
                        <option value="tpv">Versement </option>
                        <option value="clr">Retrait </option>
                        </select>
                        </div> </br> 
                    <div class="col-xs-6">
                    <div class="form-group">
                        <label for="montant" class="form-label mt-4">Montant</label>
                        <input name="montant" type="text" class="form-control" id="montant"
                            placeholder="Entrez le Montant" required>
                    </div>
                    
                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>