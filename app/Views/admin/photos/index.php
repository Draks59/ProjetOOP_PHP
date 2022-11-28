<H1>Administrer les photos</H1>
<p>
    <a href="?p=admin.photos.create" class="btn btn-success">Ajouter</a>
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
        <?php foreach ($photos as $photo) : ?>

            <tr>
                <td>
                    <form action="?p=admin.photos.delete" method="post">
                        <input type="hidden" name="id" value="<?= $photo->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</a>
                    </form>
                </td>
                <td><?= $photo->id ?></td>
                <td>
                    <p><?= $photo->name ?></p><img class="w-25" src="assets/img/biere/<?= $photo->name ?>" alt="">
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>