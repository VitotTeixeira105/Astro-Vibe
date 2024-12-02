// Inserir conteúdo do rodapé
const rodape = `
        <div style="background-color: #14172e; padding:5rem 15rem 0rem 15rem;">
            <h1 style="color: #EDEDED;">Links Rápidos</h1>
        </div>
        <div class="divNavFooter">
            <div class="sectionFooter">
                <div onmouseenter="mudarOpacidade(0.5, 'link_vitor_teixeira')" onmouseleave="mudarOpacidade(1, 'link_vitor_teixeira')">
                    <a id="link_vitor_teixeira" href="vitor-teixeira.html">Vitor Teixeira <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_informatica_aplicada')" onmouseleave="mudarOpacidade(1, 'link_informatica_aplicada')">
                    <a id="link_informatica_aplicada" href="https://colegiosaogoncalo.pt/ensino/ensino-secundario/cursos-com-planos-proprios/informatica-aplicada-a-web/">Informática aplicada à Web <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_colegio')" onmouseleave="mudarOpacidade(1, 'link_colegio')">
                    <a id="link_colegio" href="https://colegiosaogoncalo.pt">Colégio São Gonçalo <span class="mdi mdi-arrow-right"></span></a>
                </div>
            </div>
            <div class="sectionFooter">
                <div onmouseenter="mudarOpacidade(0.5, 'link_termos')" onmouseleave="mudarOpacidade(1, 'link_termos')">
                    <a id="link_termos" href="termoseservicos.html">Termos & Serviços <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_ajuda')" onmouseleave="mudarOpacidade(1, 'link_ajuda')">
                    <a id="link_ajuda" href="ajuda.html">Ajuda <span class="mdi mdi-arrow-right"></span></a>
                </div>
            </div>
            <div class="sectionFooter">
                <div onmouseenter="mudarOpacidade(0.5, 'link_signos')" onmouseleave="mudarOpacidade(1, 'link_signos')">
                    <a id="link_signos" href="signos.php">Signos <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_cartas_tarot')" onmouseleave="mudarOpacidade(1, 'link_cartas_tarot')">
                    <a id="link_cartas_tarot" href="cartas-tarot.php">Cartas Tarot <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_astrologia')" onmouseleave="mudarOpacidade(1, 'link_astrologia')">
                    <a id="link_astrologia" href="astrologia.php">Astrologia <span class="mdi mdi-arrow-right"></span></a>
                </div>
                <div onmouseenter="mudarOpacidade(0.5, 'link_datas')" onmouseleave="mudarOpacidade(1, 'link_datas')">
                    <a id="link_datas" href="datas.php">Datas <span class="mdi mdi-arrow-right"></span></a>
                </div>
                
            </div>
            <hr>
        </div>
        <div class="divFooter">
            <div>
                <a href="https://colegiosaogoncalo.pt/ensino/ensino-secundario/cursos-com-planos-proprios/informatica-aplicada-a-web/"><img src="IAWb.png" alt=""></a>
            </div>
            <div>
                <a href="https://colegiosaogoncalo.pt"><img src="colegiodesaogoncalo-logo-final.png" alt=""></a>
            </div>
            <div>
                <a href="https://pessoas2030.gov.pt"><img src="s_Pessoas_2030_significado.png" alt=""></a>
            </div>
        </div>
    `;

// Preencher o rodapé
document.getElementById("rodape").innerHTML = rodape;