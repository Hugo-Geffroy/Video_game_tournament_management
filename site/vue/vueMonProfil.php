<?php

$results = [
    ['place' => '4e', 'sur' => 11, 'event' => 'Ultimate Double — LANterrement'],
    ['place' => '33e', 'sur' => 35, 'event' => 'Ultimate singles — LANterrement'],
    ['place' => '65e', 'sur' => 90, 'event' => 'Ultimate Singles — STAR K.O.']
];

$events = []; // Aucun événement
?>

<section class="profile-header">
    <img src="<?= $util['pdp_ref'] ?>" alt="Avatar">
    <h2><?= htmlspecialchars($util['pseudoU']) ?></h2>
    <p>ID : <?= $util['idU'] ?></p>
</section>

<section class="profile-content">
    <div class="card">
        <div class="card-header">Résultats</div>
        <ul>
            <?php foreach ($results as $result): ?>
                <li><?= $result['place'] ?> sur <?= $result['sur'] ?> — <?= htmlspecialchars($result['event']) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="card">
        <div class="card-header">Événements à venir</div>
        <?php if (empty($events)): ?>
            <p>Aucun événement à venir</p>
        <?php else: ?>
            <ul>
                <?php foreach ($events as $event): ?>
                    <li><?= htmlspecialchars($event) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
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


