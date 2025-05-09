<section class="hero">
    <div class="hero-content">
        <h1>Créer un compte</h1>
        <p>Rejoignez notre communauté et participez à des tournois eSport</p>
    </div>
</section>

<main class="tournament-section">
    <div style="max-width: 400px; margin: auto; background: white; padding: 2rem; border-radius: 16px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
        <form method="post" action="#" style="display: flex; flex-direction: column; gap: 1rem;">
            <input type="email" name="mailU" placeholder="Adresse e-mail" required style="padding: 0.8rem; border-radius: 8px; border: 1px solid #ccc;">
            <input type="text" name="pseudoU" placeholder="Nom d'utilisateur" required style="padding: 0.8rem; border-radius: 8px; border: 1px solid #ccc;">
            <input type="password" name="mdpU" placeholder="Mot de passe" required style="padding: 0.8rem; border-radius: 8px; border: 1px solid #ccc;">
            <input type="password" name="confirm_mdpU" placeholder="Confirmer le mot de passe" required style="padding: 0.8rem; border-radius: 8px; border: 1px solid #ccc;">
            <button type="submit" class="btn" value="S'inscrire" style="width: 100%;">Créer le compte</button>
        </form>
        <p style="margin-top: 1rem; text-align: center;">Déjà inscrit ? <a href="./?action=connexion" style="color: #600011; font-weight: bold;">Se connecter</a></p>
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

