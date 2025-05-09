<?php
$tournaments = [
    ['title' => 'Super Smash Bros Ultimate', 'location' => 'Paris, France', 'date' => '2025-05-10', 'tags' => 'smash'],
    ['title' => 'Guilty Gear Strive Tournament', 'location' => 'Lille, France', 'date' => '2025-05-15', 'tags' => 'guiltygear'],
    ['title' => 'Tekken 8 Championship', 'location' => 'Nice, France', 'date' => '2025-06-01', 'tags' => 'tekken'],
];
?>

<style> 
.filter-buttons {
    text-align: center;
    margin: 2rem 0;
}

.filter-buttons button {
    padding: 0.8rem 1.2rem;
    margin: 0 0.5rem;
    background: #600011;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    font-size: 1rem;
}

</style>


<section class="hero">
    <div class="hero-content">
        <h1>Rejoignez ou créez des tournois eSport</h1>
        <p>Des compétitions pour tous les niveaux, partout en France</p>
        <form class="search-bar" method="get" action="">
            <input type="text" name="q" placeholder="Rechercher un tournoi..." />
            <button type="submit">Rechercher</button>
            
        </form>
    </div>
</section>

<!-- Filtre Button -->
<div class="filter-buttons">
    <button onclick="filterByTag('all')">Tous</button>
    <button onclick="filterByTag('smash')">Smash Bros</button>
    <button onclick="filterByTag('guiltygear')">Guilty Gear</button>
    <button onclick="filterByTag('tekken')">Tekken</button>
</div>

<main class="tournament-section">
    <h2>Tournois à venir</h2>
    <div class="tournament-list">
        <?php foreach ($tournaments as $tournament): ?>
            <div class="tournament-card" data-tags="<?= htmlspecialchars($tournament['tags']) ?>">
                <h3><?= htmlspecialchars($tournament['title']) ?></h3>
                <p><strong>Lieu :</strong> <?= htmlspecialchars($tournament['location']) ?></p>
                <p><strong>Date :</strong> <?= htmlspecialchars($tournament['date']) ?></p>
                <a href="#" class="btn">Voir plus</a>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Script pour le menu burger et le filtre -->
<script>
    function toggleMenu() {
        const nav = document.getElementById("nav-menu");
        const burger = document.getElementById("burger");
        nav.classList.toggle("active");
        burger.classList.toggle("active");
    }

    function toggleFilter() {
        document.getElementById("filter-panel").classList.toggle("active");
    }

    function filterByTag(tag) {
        const cards = document.querySelectorAll('.tournament-card');

        cards.forEach(card => {
            const tags = card.getAttribute('data-tags');
            if (tag === 'all' || tags.includes(tag)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    }
</script>

</body>
</html>


