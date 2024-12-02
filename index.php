<!DOCTYPE html>
<html lang="pt">

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
    <title>Astro Vibe</title>
</head>
<body>
    <div id="div-header"></div>

    <div class="horoscopeDay divEspecial">
        <div style="margin-bottom: 1rem; width: 50%;">
            <h1>
                <?php
                    $signosZodiaco = array(
                        'Áries'       => ['start' => '03-21', 'end' => '04-19', 'image' => 'ariesLogo.webp', 'description' => 'Áries é conhecido pela energia intensa, coragem e impulsividade. São pessoas diretas, determinadas e gostam de desafios. Áries é um signo pioneiro e competitivo, sempre buscando novas experiências e projetos para liderar.'],
                        'Touro'       => ['start' => '04-20', 'end' => '05-20', 'image' => 'touroLogo.webp', 'description' => ' Touro é estável, confiável e aprecia conforto e segurança. São pessoas persistentes e pacientes, mas podem ser teimosas. Touro gosta das coisas boas da vida, valorizando o que é bonito e confortável.'],
                        'Gêmeos'      => ['start' => '05-21', 'end' => '06-20', 'image' => 'gemeosLogo.webp', 'description' => 'Gêmeos é comunicativo, curioso e adaptável. São pessoas intelectuais e flexíveis, que adoram aprender e conversar sobre diversos assuntos. Às vezes, podem parecer inconstantes, pois gostam de variedade e não gostam de monotonia.'],
                        'Câncer'      => ['start' => '06-21', 'end' => '07-22', 'image' => 'cancerLogo.webp', 'description' => 'Câncer é emocional, intuitivo e muito ligado à família e às raízes. São pessoas protetoras e empáticas, que se preocupam profundamente com quem amam. Podem ser reservadas e ter mudanças de humor, mas são leais e dedicadas.'],
                        'Leão'        => ['start' => '07-23', 'end' => '08-22', 'image' => 'leaoLogo.webp', 'description' => 'Leão é confiante, generoso e gosta de ser o centro das atenções. São pessoas carismáticas e criativas, que têm um forte senso de identidade e orgulho. Leão valoriza a lealdade e o respeito, e busca viver a vida de forma grandiosa.'],
                        'Virgem'      => ['start' => '08-23', 'end' => '09-22', 'image' => 'virgemLogo.webp', 'description' => ' Virgem é organizado, detalhista e prático. São pessoas analíticas e eficientes, que têm um senso crítico aguçado e buscam a perfeição. Gostam de ajudar e ser úteis aos outros, mas podem ser exigentes e meticulosos.'],
                        'Libra'       => ['start' => '09-23', 'end' => '10-22', 'image' => 'libraLogo.webp', 'description' => 'Libra é diplomático, sociável e aprecia a harmonia. São pessoas que valorizam a justiça e buscam o equilíbrio nas relações. Libra adora beleza, arte e boas conversas, mas pode ter dificuldade em tomar decisões, pois sempre considera todos os lados.'],
                        'Escorpião'   => ['start' => '10-23', 'end' => '11-21', 'image' => 'escorpiaoLogo.webp', 'description' => 'Escorpião é intenso, determinado e misterioso. São pessoas passionais e profundas, que não têm medo de explorar o lado oculto das coisas. Escorpião é leal e focado, mas pode ser possessivo e reservado.'],
                        'Sagitário'   => ['start' => '11-22', 'end' => '12-21', 'image' => 'sagitarioLogo.webp', 'description' => 'Sagitário é otimista, aventureiro e ama a liberdade. São pessoas que buscam constantemente o conhecimento e a expansão de seus horizontes. Sagitário é extrovertido e tem um grande senso de humor, mas pode ser impaciente e direto.'],
                        'Capricórnio' => ['start' => '12-22', 'end' => '01-19', 'image' => 'capricornioLogo.webp', 'description' => 'Capricórnio é disciplinado, ambicioso e focado em metas. São pessoas responsáveis e práticas, que valorizam o trabalho duro e a estabilidade. Capricórnio é reservado e confiável, mas pode ser visto como sério ou distante.'],
                        'Aquário'     => ['start' => '01-20', 'end' => '02-18', 'image' => 'aquarioLogo.webp', 'description' => 'Aquário é inovador, humanitário e independente. São pessoas que valorizam a liberdade e a individualidade, e têm uma mentalidade voltada para o futuro. Aquário é original e tem uma visão ampla, mas pode parecer distante e imprevisível.'],
                        'Peixes'      => ['start' => '02-19', 'end' => '03-20', 'image' => 'peixesLogo.webp', 'description' => 'Peixes é sensível, empático e intuitivo. São pessoas criativas e compassivas, que se conectam profundamente com as emoções e o mundo ao seu redor. Peixes tem uma imaginação rica e é muito receptivo, mas pode ser escapista e idealista.']
                    );
    
                    $dataAtual = date('m-d');
                    $signoHoje = "Signo não encontrado";
                    $imagemSignoHoje = "";
                    $descricaoSignoHoje = "";
    
                    foreach ($signosZodiaco as $signo => $dados) {
                        if (($dataAtual >= $dados['start'] && $dataAtual <= $dados['end']) ||
                            ($dados['start'] > $dados['end'] && ($dataAtual >= $dados['start'] || $dataAtual <= $dados['end']))
                        ) {
                            $signoHoje = $signo;
                            $imagemSignoHoje = $dados['image'];
                            $descricaoSignoHoje = $dados['description'];
                            
                        }
                    }
    
                    echo "O Signo de hoje é<br> <b style='color:#FF8C61;'>$signoHoje</b><br>";
                ?>

            </h1>
            <br>
            <div class="divHoroscopeDayInfor">
                <div class="divHoroscopeDayInfor-div">
                    <?php echo "<p>$descricaoSignoHoje</p>"; ?>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'saibaMais')" onmouseleave="mudarOpacidade(1, 'saibaMais')" id="saibaMais">
                    <a href="">Saiba Mais</a>
                </div>
            </div>

        </div>
        <div class="image-container-horoscopeDay">
            <?php
            if ($imagemSignoHoje) {
                echo '<img src="' . $imagemSignoHoje . '" alt="Símbolo de ' . $signoHoje . '">';
            } else {
                echo 'Imagem não disponível.';
            }
            ?>
        </div>

    </div>

    <div class="introducao divInformacao">
        <div>
            <p>A <i class="accent">astrologia</i> é um sistema de conhecimento que estuda a relação entre os movimentos e posições dos corpos celestes como planetas e estrelas e os acontecimentos e características humanas. Ela sugere que esses elementos podem influenciar ou refletir aspectos da personalidade, emoções, comportamento e até eventos da vida. Os signos do zodíaco, baseados na posição do Sol no momento do nascimento, são uma das formas mais conhecidas de se interpretar o mapa astral de uma pessoa.</p>
            <br>
            <p>
                <?php
                $signos = [
                    'Áries',
                    'Touro',
                    'Gêmeos',
                    'Câncer',
                    'Leão',
                    'Virgem',
                    'Libra',
                    'Escorpião',
                    'Sagitário',
                    'Capricórnio',
                    'Aquário',
                    'Peixes'
                ];

                foreach ($signos as $signo) {
                    if ($signo == $signoHoje) {
                        echo "<i class='accent'><span style='color: #4A90E2;'>$signo</span></i>";
                    } else {
                        echo "<i class='accent'>$signo</i>";
                    }
                    switch ($signo) {
                        case 'Áries':
                            echo ", o primeiro signo, é impulsivo e enérgico, enquanto ";
                            break;
                        case 'Touro':
                            echo " valoriza a estabilidade e o conforto, enquanto ";
                            break;
                        case 'Gêmeos':
                            echo " é conhecido por sua curiosidade e versatilidade, enquanto ";
                            break;
                        case 'Câncer':
                            echo " é sensível e protetor, enquanto ";
                            break;
                        case 'Leão':
                            echo ", com sua confiança e criatividade, contrasta com ";
                            break;
                        case 'Virgem':
                            echo ", que é prático e detalhista, enquanto ";
                            break;
                        case 'Libra':
                            echo " busca harmonia e equilíbrio, enquanto ";
                            break;
                        case 'Escorpião':
                            echo " é intenso e profundo, enquanto ";
                            break;
                        case 'Sagitário':
                            echo " é otimista e aventureiro, e ";
                            break;
                        case 'Capricórnio':
                            echo " é disciplinado e ambicioso, e ";
                            break;
                        case 'Aquário':
                            echo ", inovador e progressista, e ";
                            break;
                        case 'Peixes':
                            echo " completa o zodíaco, oferecendo uma rica tapeçaria de traços e tendências que refletem a complexidade da experiência humana.";
                            break;
                    }
                }
                ?>
            </p>
            <br>
            <a onmouseenter="mudarOpacidade(0.5, 'saibaMaisInformacao')" onmouseleave="mudarOpacidade(1, 'saibaMaisInformacao')" style="color: #F2E94E;" id="saibaMaisInformacao" href="#">Saiba Mais <span class="mdi mdi-arrow-right"></span></a>
        </div>
    </div>

    <div class="section-button-especial">
        <a href="" class="button-link">
            <h1>Descubra o seu signo hoje!</h1>
        </a>
    </div>

    <div id="rodape"></div>
</body>
<script src="script.js"></script>
<script src="scriptRodape.js"></script>
<script src="scriptHeader.js"></script>
</html>