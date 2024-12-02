const navMenu = `
        <div>
            <span class="title-header">Astro Vibe</span>
        </div>

        <div id="navMenu">
        <div onmouseenter="mudarOpacidade(0.5, 'casaAn')" onmouseleave="mudarOpacidade(1, 'casaAn')" id="casaAn">
                <a href="index.php">Casa</a>
            </div>
            <div onmouseenter="mudarOpacidade(0.5, 'signosAn')" onmouseleave="mudarOpacidade(1, 'signosAn')" id="signosAn">
                <a href="signos.php">Signos</a>
            </div>
            <div onmouseenter="mudarOpacidade(0.5, 'cartastarotAn')" onmouseleave="mudarOpacidade(1, 'cartastarotAn')" id="cartastarotAn">
                <a href="cartas-tarot.php">Cartas Tarot</a>
            </div>
            <div onmouseenter="mudarOpacidade(0.5, 'astrologiaAn')" onmouseleave="mudarOpacidade(1, 'astrologiaAn')" id="astrologiaAn">
                <a href="astrologia.php">Astrologia</a>
            </div>
            
         
        </div>`;

document.getElementById("div-header").innerHTML = navMenu;

