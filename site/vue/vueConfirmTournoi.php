

    <div class="header">
        <h1><?php echo $titre; ?></h1>
        <p>Un tournoi organisé sur Gestion Tournament</p>
    </div>
    <section class="container">
        <h2>Tournoi créé avec succès ! 🎉</h2>
        <p>Le tournoi <strong><?= htmlspecialchars($titre) ?></strong> a été enregistré.</p>
        <p>Date : <?= htmlspecialchars($date) ?></p>
        <p>Lieu : <?= htmlspecialchars($ville) ?>, <?= htmlspecialchars($pays) ?></p>
        <p>Type de jeu : <?= htmlspecialchars($libelle_typejeu) ?></p>
        <a href="./?action=liste-tournois" class="btn">Voir tous les tournois</a>
    </section>

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
