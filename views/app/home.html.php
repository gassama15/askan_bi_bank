<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h3>Bienvenue dans votre espace membre <?= $session->read('auth')
                ->prenom .
                ' ' .
                $session->read('auth')->nom ?></h3>
        </div>
    </div>
</div>