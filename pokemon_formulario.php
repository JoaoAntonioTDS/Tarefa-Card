<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            padding-top: 40px;
        }

        form {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 320px;
        }

        div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="pokemon_card.php" method="post">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Pokebola-pokeball-png-0.png" width="300" height="auto"/>
        <br> <br> <br>
        <div>
            <label for="nome">Nome do Pokémon:</label>
            <input type="text" id="nome" name="nome_pokemon" required/>
        </div>
        <div>
            <label for="vida">Vida do Pokémon 80 - 3200:</label>
            <input type="number" min="80" max="3200" id="vida" name="vida_pokemon" required/>
        </div>
        <div>
            <label for="link">Link da foto do Pokémon:</label>
            <input type="text" id="link" name="link_foto" required/>
        </div>
        <div>
            <label for="dano">Dano do Pokémon 30 - 7000:</label>
            <input type="number" min="30" max="7000" id="dano" name="dano_pokemon" required/>
        </div>
        <div>
            <label for="tipo">Tipo do Pokémon:</label>
            <select id="tipo" name="tipo_pokemon">
                <option value="Água" style="background-color: blue;" >Água</option>
                <option value="Fogo" style="background-color: red;" >Fogo</option>
                <option value="Terra" style="background-color: brown;" >Terra</option>
                <option value="Voador" style="background-color: gray;" >Voador</option>
                <option value="Elétrico" style="background-color: yellow;" >Elétrico</option>
                <option value="Psíquico" style="background-color: purple;" >Psíquico</option>
            </select>
        </div>
        <div>
            <button type="submit" style="background-color: red;">Enviar</button>
        </div>
    </form>
</body>
</html>
