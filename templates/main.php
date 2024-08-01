<main>
        <section>
            <?php if (isset($poster_url)): ?>
                <img src="<?= $poster_url ?>" alt="Poster de la película" width="300"/>
                <h2>La próxima película es: <?= $title; ?></h2>
                <p>Fecha de estreno: <?= $release_date; ?></p>
                <p><?= $untilMessage; ?></p>
            <?php else: ?>
                <p>No se pudo obtener la información de la película.</p>
            <?php endif; ?>
        </section>
</main>