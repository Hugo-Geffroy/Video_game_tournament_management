
    <section class="hero">
        <h1>Créer un tournoi eSport</h1>
    </section>

    <section class="create-tournament-section">
        <div class="form-container">
            <h2>Nouveau tournoi double élimination</h2>
            <form action="./?action=confirm-tournoi" method="post">
                <label for="title">Nom du tournoi</label>
                <input type="text" id="title" name="title" required placeholder="Ex: Tekken Masters Paris">

                <label for="game">Jeu</label>
                <input type="text" id="game" name="game" required placeholder="Ex: Tekken 8">

                <label for="typejeu">Type de jeu</label>
                    <select name="typejeu" id="typejeu" required>
                        <option value="0">Smash Bros</option>
                        <option value="1">Tekken</option>
                        <option value="2">Guilty Gear</option>
                        <option value="3">Mortal Kombat</option>
                    </select>

                <label for="location">Lieu</label>
                <input type="text" id="location" name="location" required placeholder="Ex: Lyon, France">

                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>

                <label for="max_players">Nombre max de joueurs</label>
                <input type="number" id="max_players" name="max_players" min="2" max="256" required>

                <label for="description">Description du tournoi</label>
                <textarea id="description" name="description" rows="4" placeholder="Ajoutez des détails sur les règles, format, cashprize, 230 caractères max..."></textarea>

                <button type="submit" class="btn">Créer le tournoi</button>
            </form>
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



