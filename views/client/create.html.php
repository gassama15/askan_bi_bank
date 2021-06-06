<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="index.php?controller=clientController&task=add" method="POST">
                <fieldset>
                <div class="row" >
                
                    <legend>Information client</legend>
                    <div class="row" >
                    <div class="col-xs-6">
                    <div class="form-group">
                        <label for="nom" class="form-label mt-4">Nom</label>
                        <input name="nom" type="text" class="form-control" id="nom"
                            placeholder="Entrez le nom de votre nouveau client" required >
                    </div>
                    </div>
                    <div class="row" >
                    <div class="col-xs-6">
                    <div class="form-group">
                        <label for="prenom" class="form-label mt-4">prenom</label>
                        <input name="prenom" type="text" class="form-control" id="prenom"
                            placeholder="Entrez le prenom de votre client"required >
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="form-label mt-4">adresse</label>
                        <input name="adresse" type="adresse" class="form-control" id="adresse"
                            placeholder="Entrez l'adresse de votre client" required >
                    </div>

                    <div class="form-group">
                        <label for="tel" class="form-label mt-4">Tél</label>
                        <input name="tel" type="tel" class="form-control" id="tel"
                            placeholder="Numero telephone "  >
                    </div>
                    <div class="form-group">
                        <label for="cni" class="form-label mt-4">cni</label>
                        <input name="cni" type="cni" class="form-control" id="cni"
                            placeholder="Numero  carte  national d'identité" required >
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label mt-4">email</label>
                        <input name="email" type="email" class="form-control" id="email"
                            placeholder="le email de votre client" required >
                            </div>   
                            <div class="form-group">
                                <label for="login" class="form-label mt-4">login</label>
                               <input name="login" type="login" class="form-control" id="login"
                            placeholder=" votre login" required >
                            </div>  
                        
                           <div class="form-group">
                        <label for="password" class="form-label mt-4">mot de passe</label>
                        <input name="password" type="password" class="form-control" id="password"
                            placeholder="votre mot de passe" required >
                            </div>  
                    <div class="form-group"></br> 
                    <select>
                     <libelle>type de client </libelle>
                        <option value="clm">client Moral </option>
                        <option value="clp">client physique </option>
                        </select>
                        </div>




                    <button type="submit" class="mt-4 mb-4 btn btn-primary btn-block">Créer</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>