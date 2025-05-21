<?php require('Partes/head.php'); ?>

<style>
    .perfil {
        max-width: 600px;
        margin: 30px auto;
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .perfil img {
        width: 120px;
        height: 120px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .perfil a {
        display: inline-block;
        margin: 10px;
        text-decoration: none;
        color: #ffffff;
        background-color: #5da77a;
        padding: 10px 15px;
        border-radius: 5px;
    }

    .perfil a:hover {
        background-color: #4c9468;
    }

    iframe {
        margin-top: 20px;
        width: 100%;
        height: 315px;
        border: none;
        border-radius: 10px;
    }
</style>

<div class="perfil">
    <h2>👩‍💻 Acerca de mí</h2>
    <img src="Partes/Foto 2x2 Marializ.jpg" alt="Foto de perfil"> 
    <p><strong>Nombre:</strong> Marializ Disla</p>

    <a href="https://t.me/Is_lizzy7" target="_blank">💬 Telegram</a>
    <a href="https://wa.me/18296960966" target="_blank">💬 WhatsApp</a>

    <iframe src="https://www.youtube.com/embed/TjqrualxgkI" allowfullscreen></iframe>
</div>

<?php require('Partes/foot.php'); ?>
