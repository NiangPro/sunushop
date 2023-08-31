<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="col-md-8 card-title mb-0">
                                <h2 style="color:black;">Clients</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-arrow-none">
                    <div class="mt-2">
                        <h4>La liste des clients</h4>
                        <table class="table table-bordered mt-3">
                            <thead class="card-header">
                                <tr>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Tel</th>
                                    <th>adresse</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($clients as $client): ?>
                                <?php if($client->role=="client"): ?>
                                <tr>
                                    <td><?= $client->prenom ?></td>
                                    <td><?= $client->nom ?></td>
                                    <td><?= $client->tel ?></td>
                                    <td><?= $client->adresse ?></td>
                                    <td><?= $client->email ?></td>
                                </tr>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>