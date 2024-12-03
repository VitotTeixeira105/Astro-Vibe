<!DOCTYPE html>
<html lang="en">

<head>
    <!--FONTES DE LETRAS EXTERNAS - GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Cinzel:wght@400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Cinzel:wght@400..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--FONTES DE SIMBOLOS EXTERNAS - PICTOGRAMMERS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bosignos.css">
    <title>Astro Vibe - Signos</title>
</head>
<style>
    .wallpaperInicio {
        background-image: url(wallpapersignoszodiaco2.jpg);
    }

    .imagemSignoBox {
        width: 100px;
        height: 100px;
        background-size: cover;
        background-position: center;
        margin: 0 auto 16px;
        border-radius: 50%;
    }

    .divSigno {
        height: fit-content;
    }

    .descubraMais {
        border-radius: 20px;
        background-color: #6A0DAD;
        color: white;
        padding: 15px;
        font-size: 15px;
        border: none;
    }
</style>

<body>
    <div id="div-header"></div>

    <div class="wallpaperInicio"></div>

    <div class="div-title-site">
        <h1>Signos</h1>
    </div>

    <div class="introducao divInformacao">
        <div>
            <p>Os signos do zodíaco são um sistema astrológico baseado na divisão da eclíptica, o trajeto aparente do Sol ao longo do ano, em doze partes iguais. Cada uma dessas partes corresponde a uma constelação, formando o que é conhecido como o zodíaco. Este sistema tem raízes profundas na antiga Babilónia e foi desenvolvido ao longo dos séculos por diferentes culturas, incluindo os gregos e romanos, que moldaram o sistema que conhecemos hoje.</p>
            <br>
            <p>A astrologia utiliza os signos do zodíaco como uma forma de interpretar as influências cósmicas sobre a personalidade e a vida das pessoas. Segundo a tradição astrológica, a posição dos planetas no momento do nascimento de uma pessoa pode influenciar aspetos importantes da sua personalidade, emoções e até mesmo das suas tendências e desafios. Assim, os signos funcionam como arquétipos, ou perfis simbólicos, que representam diferentes traços, atitudes e formas de interação com o mundo.</p>
            <br>
            <p>O estudo dos signos envolve também a interpretação dos chamados "elementos" (Fogo, Terra, Ar e Água) e das "modalidades" (Cardinal, Fixo e Mutável), que conferem características adicionais aos signos. Os elementos refletem a forma como cada signo expressa a sua energia: o Fogo é dinâmico e impulsivo, a Terra é prática e materialista, o Ar é intelectual e comunicativo, e a Água é emocional e intuitiva. Já as modalidades indicam como cada signo lida com as mudanças e a estabilidade: os signos cardinais iniciam ciclos, os fixos mantêm a estabilidade, e os mutáveis adaptam-se com facilidade.</p>
            <br>
            <p>Na prática, os signos do zodíaco são utilizados para ajudar as pessoas a compreenderem-se melhor, oferecendo uma espécie de "mapa" das suas características pessoais e potenciais de desenvolvimento. Para muitos, a astrologia oferece uma ferramenta de auto-reflexão e orientação, permitindo entender como responder a situações desafiantes ou como potenciar os seus talentos naturais. Além disso, é comum que as pessoas procurem os signos para analisar compatibilidades em relações, tendências profissionais e, até, influências energéticas ao longo do ano.</p>
            <br>
            <p>É importante notar que a astrologia não é uma ciência, e a sua eficácia e validade são objeto de debate. Para muitos, contudo, ela tem valor simbólico e psicológico, proporcionando uma linguagem para compreender o comportamento humano e as dinâmicas emocionais. Ao explorar os signos do zodíaco, os indivíduos podem ganhar uma maior compreensão de si mesmos e do mundo ao seu redor, promovendo uma visão mais introspectiva e ponderada das suas ações e escolhas.</p>
            <br>
            <a onmouseenter="mudarOpacidade(0.5, 'saibaMaisInformacao')" onmouseleave="mudarOpacidade(1, 'saibaMaisInformacao')" style="color: #F2E94E;" id="saibaMaisInformacao" href="astrologia.php">Saiba Mais <span class="mdi mdi-arrow-right"></span></a>
        </div>
    </div>



    <div class="boxSignosWrapper">
        <?php
        $signosZodiaco = array(
            array('nome' => 'Áries',       'nomeBox' => 'boxaries',       'planeta' => 'Marte',    'elemento' => 'Fogo',  'image' => 'ariesLogo.webp',       'qualidade' => 'Cardinal', 'mesComeca' => '21 / Março',     'mesAcaba' => '20 / Abril',     'pagina' => 'aries.php'),
            array('nome' => 'Touro',       'nomeBox' => 'boxtouro',       'planeta' => 'Vênus',    'elemento' => 'Terra', 'image' => 'touroLogo.webp',       'qualidade' => 'Fixo',     'mesComeca' => '21 / Abril',     'mesAcaba' => '20 / Maio',      'pagina' => 'touro.php'),
            array('nome' => 'Gêmeos',      'nomeBox' => 'boxgemeos',      'planeta' => 'Mercúrio', 'elemento' => 'Ar',    'image' => 'gemeosLogo.webp',      'qualidade' => 'Mutável',  'mesComeca' => '21 / Maio',      'mesAcaba' => '20 / Junho',     'pagina' => 'gemeos.php'),
            array('nome' => 'Câncer',      'nomeBox' => 'boxcancer',      'planeta' => 'Lua',      'elemento' => 'Água',  'image' => 'cancerLogo.webp',      'qualidade' => 'Cardinal', 'mesComeca' => '21 / Junho',     'mesAcaba' => '21 / Julho',     'pagina' => 'cancer.php'),
            array('nome' => 'Leão',        'nomeBox' => 'boxleao',        'planeta' => 'Sol',      'elemento' => 'Fogo',  'image' => 'leaoLogo.webp',        'qualidade' => 'Fixo',     'mesComeca' => '22 / Julho',     'mesAcaba' => '22 / Agosto',    'pagina' => 'leao.php'),
            array('nome' => 'Virgem',      'nomeBox' => 'boxvirgem',      'planeta' => 'Mercúrio', 'elemento' => 'Terra', 'image' => 'virgemLogo.webp',      'qualidade' => 'Mutável',  'mesComeca' => '23 / Agosto',    'mesAcaba' => '22 / Setembro',  'pagina' => 'virgem.php'),
            array('nome' => 'Libra',       'nomeBox' => 'boxlibra',       'planeta' => 'Vênus',    'elemento' => 'Terra', 'image' => 'libraLogo.webp',       'qualidade' => 'Cardinal', 'mesComeca' => '23 / Setembro',  'mesAcaba' => '22 / Outubro',   'pagina' => 'libra.php'),
            array('nome' => 'Escorpião',   'nomeBox' => 'boxescorpiao',   'planeta' => 'Plutão',   'elemento' => 'Água',  'image' => 'escorpiaoLogo.webp',   'qualidade' => 'Fixo',     'mesComeca' => '23 / Outubro',   'mesAcaba' => '21 / Novembro',  'pagina' => 'escorpiao.php'),
            array('nome' => 'Sagitário',   'nomeBox' => 'boxsagitario',   'planeta' => 'Júpiter',  'elemento' => 'Fogo',  'image' => 'sagitarioLogo.webp',   'qualidade' => 'Mutável',  'mesComeca' => '22 / Novembro',  'mesAcaba' => '21 / Dezembro',  'pagina' => 'sagitario.php'),
            array('nome' => 'Capricórnio', 'nomeBox' => 'boxcapricornio', 'planeta' => 'Saturno',  'elemento' => 'Terra', 'image' => 'capricornioLogo.webp', 'qualidade' => 'Cardinal', 'mesComeca' => '22 / Dezembro',  'mesAcaba' => '20 / Janeiro',   'pagina' => 'capricornio.php'),
            array('nome' => 'Aquário',     'nomeBox' => 'boxaquario',     'planeta' => 'Urano',    'elemento' => 'Ar',    'image' => 'aquarioLogo.webp',     'qualidade' => 'Fixo',     'mesComeca' => '21 / Janeiro',   'mesAcaba' => '19 / Fevereiro', 'pagina' => 'aquario.php'),
            array('nome' => 'Peixes',      'nomeBox' => 'boxpeixes',      'planeta' => 'Neptuno',  'elemento' => 'Água',  'image' => 'peixesLogo.webp',      'qualidade' => 'Mutável',  'mesComeca' => '20 / Fevereiro', 'mesAcaba' => '20 / Março',     'pagina' => 'peixes.php')
        );

        $contador = 0;
        $totalSignos = 12;

        while ($contador < $totalSignos) {

            if ($contador % 3 == 0) {
                echo '<div class="boxSignos">';
            }

            $detalhesSigno = $signosZodiaco[$contador];

            echo '<div class="divSigno ' . $detalhesSigno['nomeBox'] . '">';
            echo '<div class="imagemSignoBox" style="background-image: url(' . $detalhesSigno['image'] . ');"></div>';
            echo '<div class="descriptionSigno">';
            echo '<div class="descriptionSignoTitle">';
            echo '<h2>' . $detalhesSigno['nome'] . '</h2>';
            echo '</div>';
            echo '<div class="informationSignoBox">';
            echo '<div><p><b>Planeta: </b>' . $detalhesSigno['planeta'] . '</p></div>';
            echo '<div><p><b>Elemento: </b>' . $detalhesSigno['elemento'] . '</p></div>';
            echo '<div><p><b>Qualidade: </b>' . $detalhesSigno['qualidade'] . '</p></div>';
            echo '<div><p><b>Meses: </b>' . $detalhesSigno['mesComeca'] . ' - ' . $detalhesSigno['mesAcaba'] . '</p></div>';
            echo '<br><div><a href="' . $detalhesSigno['pagina'] . '"><button class="descubraMais">Descubra Mais</button></a></div><br>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $contador++;

            if ($contador % 3 == 0 || $contador == $totalSignos) {
                echo '</div>';
            }
        }
        ?>

    </div>

    <div id="rodape"></div>
</body>

<script src="script.js"></script>
<script src="scriptRodape.js"></script>
<script src="scriptHeader.js"></script>

</html>
