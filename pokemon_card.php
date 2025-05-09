<?php
$nome = $_POST["nome_pokemon"];
$vida = $_POST["vida_pokemon"];
$foto = $_POST["link_foto"];
$dano = $_POST["dano_pokemon"];
$tipo = $_POST["tipo_pokemon"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .carta {
            width: 350px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: 2px solid #333;
        }

        .carta-topo {
            background-color: #ffd700;
            padding: 10px;
            font-weight: bold;
            font-size: 18px;
            border-bottom: 2px solid #333;
        }

        .carta img {
            width: 100%;
            height: auto;
        }

        .carta-info {
            padding: 12px;
            background-color: #fff;
        }

        .carta-info p {
            margin: 14px 0;
            font-size: 22px;
        }

        .carta-info span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="carta">
        <div class="carta-topo">
            <?php echo $nome; ?>
        </div>
        <img src="<?php echo $foto ?>" alt="Imagem do Pokémon">
        <div class="carta-info">
            <p><span>❤️ Vida:</span> <?php echo $vida; ?></p>
            <p><span>⚔️ Dano:</span> <?php echo $dano; ?></p>
            <p><span>🌟 Tipo:</span> <?php echo $tipo; ?></p>
        </div>
    </div>
</body>
</html>
