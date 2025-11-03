<!DOCTYPE html>

<html lang="pt-BR">

    <head>
        <title>TGCF World FanPage</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/gerenciar.css">
    </head>

    <body>
    
    	<button id="listaLogin">
      		<a href="listar.php">Lista das contas</a>
		</button>
        
        <?php include "pages/header.php"?>

        <div id="imagemTopo">
            <img src="imagens/TGCFimg2.jpg" alt="">
        </div>
        
        <div id="Sobre">
                    <h3>Sobre a obra</h3>

                    <i>Resumo da trama</i>

                    <p>TGCF conta a história de Xie Lian, um deus imortal que após seu reino sucumbir, foi expulso
                        dos céus e forçado a viver como um mortal por 800, quando, após sua terceira ascenção, é 
                        novamente colocado em sua posição nos céus e volta a viver uma vida de missões e situações diversas.
                        Após conhecer um misterioso fantasma temido por todos os deuses, sua vida vira de cabeça para baixo. 
                        Durante a trama nós conhecemos a história de Xie Lian e seu reino, juntamente intrelaçando Hua Cheng,
                        Mu Qing e Fen Xin diretamente com seu passado obscuro, e com o desenrolar da história, conhecemos
                        o vilão por trás de todas as desgraças causadas na vida de Xie Lian.

                    </p>
                </div>

        <div>

            <button onclick><a href="sobre.php">Saiba mais</a></button>
        </div>
                
        <div id="personagens">
            <h3>Personagens da Obra</h3>

            <ul>
                <li><strong>Xie Lian</strong></li>
                <li><strong>Hua Cheng</strong></li>
                <li><strong>Shi QingXuan</strong></li>
                <li><strong>Mu Qing</strong></li>
                <li><strong>Feng Xin</strong></li>
                <li><strong>Ling Wen</strong></li>
                <li><strong>Pei Ming</strong></li>
            </ul>

            <button onclick><a href="pp.php">Mais informações</a></button>
        </div>

        <div id="autora">
            <h3>Sobre a Autora e a Obra</h3>

            <p><i>Mò Xiāng Tóng Xiù</i>, também conhecida apenas como MXTX, originalmente
                escreveu TGCF como uma fanfic. Após um tempo,
                sua obra começou a ficar muito conhecida, então ela publicou TGCF como uma triologioa 
                de livros, dividindo seus capítulos em 5 livros na versão chinesa e 8 livros na em inglês.
            </p>

            <p>Além disso, a autora já possuía outras obras, sendo elas:</p>

            <ul style="list-style-type:square" >
                <li><i><strong>Scums Villain's Self Saving System(SVSSS)</strong></i></li>
                <img id="svsssImg" src="imagens/SVSSSimg.jpg" alt="" width="300">
                <li><i><strong>Mo Dao Zu Shi(MDZS)</strong></i></li>
                <img id="mdzsImg" src="imagens/MDZSimg.jpg" alt="" width="300">
            </ul>

            <p>Apesar de apenas três obras, MXTX conseguiu conquistar um enorme público, principalmente com TGCF,
                que é sua obra mais famosa.
            </p>
        </div>

        <div id="compraLivro">
            <h2>Compra dos livros</h2>

            <table>
                <p>Ultima atualização 15/09/2025</p>
                <tr> 
                    <th>Site</th>
                    <th>Volúme</th>
                    <th>Preço</th>
                </tr>
                <tr>
                    <td>Amazon</td>
                    <td>1 à 8</td>
                    <td>R$801,66</td>
                </tr>
                <tr>
                    <td>Mercado <br> Livre</td>
                    <td>1 à 8</td>
                    <td>R$1121,47</td>
                </tr>
            </table>


            <h4>Abaixo veja os links para comprar os livros de TGCF(Disonível apenas em inglês)</h4>

            <a href="https://www.amazon.com.br/Heaven-Officials-Blessing-Books-Collection/dp/B0CLMFM4LH/ref=sr_1_10?crid=3RVU7VT6Q5KZH&dib=eyJ2IjoiMSJ9.XtK4y1a5VE7F46PwGq4QbPcfAgV6mz7g7q1tpTH3DKPORDqX6e8NRKV3rT0251xZ_8-GkMzuWvDYWcZJlWxgtKvSGJz-tuXuAJ8Pu_lqBWDl-we5m2r2Jo6fNGVHREv32RCdaqCBY58m5vNzryw7UC2_xAifBZE4JtwZm96FGjoAg6in1DsNpR8e3uhWUUKXmoLfCZ3nWhUtYGEN3RLGCyWkC1A9gnR4gKN5lZGmoVbhlEEBqmjmNWIUXVA0aQLzoPn9C86ajiaxYj3flirov6otxuhGOn1igS6T-Dzys2Y.uClnm9_15XuBbsVun_XrG6zf270b_uN7Iceo4u-E8gU&dib_tag=se&keywords=heaven+official+%27s+blessing&qid=1754435544&sprefix=heaven%2Caps%2C221&sr=8-10&ufe=app_do%3Aamzn1.fos.25548f35-0de7-44b3-b28e-0f56f3f96147" target="_blank"
            >Amazon (Cap.1 à 8)</a> 
            <br>
            <br>
            <a href="https://produto.mercadolivre.com.br/MLB-3924967231-bnco-oficial-do-ceu-tian-guan-ci-fu-coleco-de-8-_JM#polycard_client=search-nordic&position=37&search_layout=stack&type=item&tracking_id=fcea6445-9f34-49a6-8bb5-a2a5bbb58e46" target="_blank"
            >Mercado Livre (Cap.1 à 8)</a>
        </div>

        <br>

        <?php include "pages/footer.php"?>
    </body>

    <script>
        
    </script>

</html>