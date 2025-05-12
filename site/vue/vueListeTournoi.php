
    <div class="hero">
        <h1>Liste des tournois</h1>
        <p>Découvrez les tournois créés sur Gestion Tournament</p>
    </div>

<main class="tournament-section">
    <div class="tournament-list">
        <?php foreach ($tournois as $tournament): ?>
            <div class="tournament-card" data-tags="<?= htmlspecialchars($tournament['idJ']) ?>">
                <h3><?= htmlspecialchars($tournament['nomTournoi']) ?></h3>
                <p><strong>Lieu :</strong> <?= htmlspecialchars($tournament['ville']) . ", " . htmlspecialchars($tournament['pays']) ?></p>
                <p><strong>Date :</strong> <?= htmlspecialchars($tournament['date_deb']) ?></p>
                <a href="#" class="btn">Voir plus</a>
            </div>
        <?php endforeach; ?>
    </div>
</main>

    <script>
        function toggleMenu() {
            const nav = document.getElementById("nav-menu");
            const burger = document.getElementById("burger");
            nav.classList.toggle("active");
            burger.classList.toggle("active");
        }
    </script>
</body>
</html>