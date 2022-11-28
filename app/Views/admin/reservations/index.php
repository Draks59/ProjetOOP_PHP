A FINIR
<H1>Administrer les reservations</H1>
<p>
    <a href="?p=admin.reservations.create" class="btn btn-success">Ajouter</a>
</p>
<table class="table">
    <thead>
        <tr>
            <td>Actions</td>
            <td>ID</td>
            <td>Nom</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reservations as $reservation) : ?>

            <tr>
                <td>
                    <a href="?p=admin.reservations.update&id=<?= $reservation->id ?>" class="btn btn-primary">Editer</a>
                    <form action="?p=admin.reservations.delete" method="post">
                        <input type="hidden" name="id" value="<?= $reservation->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>
                </td>
                <td><?= $reservation->id ?></td>
                <td><?= $reservation->name ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>