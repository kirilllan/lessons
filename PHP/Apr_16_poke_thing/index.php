<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_poke_thing_2</title>
    <style>body{background-color: #111}</style>
</head>
<body>
    <div id="pokemon__wrapper">
        <div class="pokemon__name">test pokemon</div>
    </div>
    <button id="prev" class="navigate">Previous</button>
    <button id="next" class="navigate">Next</button>
    <script>
        const colorsXD = ["AliceBlue","AntiqueWhite","Aqua","Aquamarine","Azure","Beige","Bisque","BlanchedAlmond","Blue","BlueViolet","Brown","BurlyWood","CadetBlue","Chartreuse","Chocolate","Coral","CornflowerBlue","Cornsilk","Crimson","Cyan","DarkBlue","DarkCyan","DarkGoldenRod","DarkGray","DarkGrey","DarkGreen","DarkKhaki","DarkMagenta","DarkOliveGreen","DarkOrange","DarkOrchid","DarkRed","DarkSalmon","DarkSeaGreen","DarkSlateBlue","DarkSlateGray","DarkSlateGrey","DarkTurquoise","DarkViolet","DeepPink","DeepSkyBlue","DimGray","DimGrey","DodgerBlue","FireBrick","FloralWhite","ForestGreen","Fuchsia","Gainsboro","GhostWhite","Gold","GoldenRod","Gray","Grey","Green","GreenYellow","HoneyDew","HotPink","IndianRed","Indigo","Ivory","Khaki","Lavender","LavenderBlush","LawnGreen","LemonChiffon","LightBlue","LightCoral","LightCyan","LightGoldenRodYellow","LightGray","LightGrey","LightGreen","LightPink","LightSalmon","LightSeaGreen","LightSkyBlue","LightSlateGray","LightSlateGrey","LightSteelBlue","LightYellow","Lime","LimeGreen","Linen","Magenta","Maroon","MediumAquaMarine","MediumBlue","MediumOrchid","MediumPurple","MediumSeaGreen","MediumSlateBlue","MediumSpringGreen","MediumTurquoise","MediumVioletRed","MidnightBlue","MintCream","MistyRose","Moccasin","NavajoWhite","Navy","OldLace","Olive","OliveDrab","Orange","OrangeRed","Orchid","PaleGoldenRod","PaleGreen","PaleTurquoise","PaleVioletRed","PapayaWhip","PeachPuff","Peru","Pink","Plum","PowderBlue","Purple","RebeccaPurple","Red","RosyBrown","RoyalBlue","SaddleBrown","Salmon","SandyBrown","SeaGreen","SeaShell","Sienna","Silver","SkyBlue","SlateBlue","SlateGray","SlateGrey","Snow","SpringGreen","SteelBlue","Tan","Teal","Thistle","Tomato","Turquoise","Violet","Wheat","White","WhiteSmoke","Yellow","YellowGreen"]; //removed black
        let currentPage = 0;
        fetchNewPokemons(currentPage);
        document.querySelectorAll('.navigate').forEach(btn => {
            btn.addEventListener('click', (e) => {
                getPokemon(e.target.id);
            })
        })
        function getPokemon(direction) {
            if (direction === 'next' && currentPage !== 50) {
                currentPage++;
                fetchNewPokemons(currentPage);
            } else if (direction === 'prev' && currentPage !== 0) {
                currentPage--;
                fetchNewPokemons(currentPage);
            }
        }
        function fetchNewPokemons(pageNumber) {
            document.getElementById('pokemon__wrapper').innerHTML = '';

            fetch('contact.php', {
                method: 'GET'
            })
            .then(resp => resp.json())
            .then(pokemons => {
                pokemons.slice(pageNumber * 100, pageNumber * 100 + 100).forEach(pokemon => { //right slicing, always different next or previous 100 pokemons.
                    const newPokemon = document.createElement('div');
                    newPokemon.className = 'pokemon__name';
                    newPokemon.innerText = pokemon.name;
                    newPokemon.style.color = colorsXD[Math.floor(Math.random() * 148)]
                    document.getElementById('pokemon__wrapper').appendChild(newPokemon);
                })
            })
            .catch(err => {
                console.log(err);
            })
        }

    </script>
</body>
</html>
