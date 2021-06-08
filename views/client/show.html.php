<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h3 class="text-center">Client</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 h5">#ID</div>
                        <div class="col-md-6 h5"><?= $client->idClient ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Nom</div>
                        <div class="col-md-6 h5"><?= $client->nom ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Prénom</div>
                        <div class="col-md-6 h5"><?= $client->prenom ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Adrese</div>
                        <div class="col-md-6 h5"><?= $client->adresse ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Telephone</div>
                        <div class="col-md-6 h5"><?= $client->tel ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">CNI</div>
                        <div class="col-md-6 h5"><?= $client->cni ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">email</div>
                        <div class="col-md-6 h5"><?= $client->email ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Type Client</div>
                        <div class="col-md-6 h5"><?= $client->typeClient ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-primary mb-3">
                <div class="card-header">
                    <h3 class="text-center">Compte</h3>
                </div>
                <div class="card-body">
                    <!-- <div class="row">
                        <div class="col-md-6 h5">#numéro compte</div>
                        <div class="col-md-6 h5"><?= $client->num_compte ?></div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6 h5">Date ouverture</div>
                        <div class="col-md-6 h5"><?= $client->date_ouverture ?></div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-6 h5">Solde</div>
                        <div class="col-md-6 h5"><?= $client->solde ?> F CFA</div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6 h5">Statut</div>
                        <div class="col-md-6 h5"><?= $client->statut == 1
                            ? 'Actif'
                            : 'Inactif' ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 h5">Type de compte</div>
                        <div class="col-md-6 h5"><?= $client->libelleType ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>