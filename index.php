<?php 

if(isset($_GET['msg'])){
    echo "<script>alert('" . $_GET['msg'] . "');</script>";
} else {
    
}




?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ellos Design</title>
    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;700;800&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Style -->
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header class="navBar">
        <nav id="navBar">
            <a href="#">Logotipo</a>
            <a href="tel:+55 48 9 9999-9999">(48) 9 9999-9999</a>
        </nav>
    </header>
    <main>
        <section class="mainContent">
            <div class="colorBackground">
                <div class="contentText" id="leftAnimation">
                    <h1>Aqui vai sua headline. Foque na transformação que seu produto gera.</h1>
                    <h2>Utilize esse subtítulo para complementar a sua headline com informações que facilitem o entendimento
                        do produto ou serviço que você está oferecendo. O que você irá entregar</h2>
                </div>
                <form action="./php/main.php" method="POST" id="form" name="form">
                    <h2>Chamada para ação</h2>
                    <input type="text" id="txt_name" name="name" placeholder="NOME:" required>
                    <input type="email" id="txt_email" name="email" placeholder="E-MAIL:" required>
                    <input type="tel" id="txt_telefone" name="telefone" placeholder="DDD + TELEFONE:" required>
                    <textarea type="text" id="txt_description" name="description" placeholder="COMO PODEMOS TE AJUDAR?" rows="5" required></textarea>
                    <button type="submit" name="btn_enviar">Chamada para ação</button>
                </form>
            </div>
        </section>
        <section class="aboutUs">
            <div class="about" id="leftAnimation">
                <img src="./img/imgEmpty.PNG" alt="Icone de imagem">
                <div class="descriptionAboutUs">
                    <h2>Quem somos?</h2>
                    <p>Conte aqui quem você é e como você ajuda as pessoas com seus produtos ou serviços. Ao lado, use uma foto sua ou da sua empresa. Conte aqui quem você é e como você ajuda as pessoas com seus produtos ou serviço</p>
                </div>
            </div>
            <div class="service" id="leftAnimation">
                <h2>Com este serviço você</h2>
                <ul>
                    <li id="leftAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                    <li id="rightAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                    <li id="leftAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                    <li id="rightAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                    <li id="leftAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                    <li id="rightAnimation">
                        <i class="fa-solid fa-shop"></i>
                        <div class="text">
                            <h2>Benefício do serviço</h2>
                            <p>Insira aqui a descrição do benefício que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
                        </div>
                    </li>
                </ul>
                <a href="#form">Chamada para ação</a>
            </div>
        </section>
        <section class="commonQuestions">
            <h2>Perguntas Frequentes</h2>
            <button type="button" id="leftAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
            <button type="button" id="rightAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
            <button type="button" id="leftAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
            <button type="button" id="rightAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
            <button type="button" id="leftAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
            <button type="button" id="rightAnimation">Quando vou começar a ver os resultado das minhas campanhas</button>
        </section>
        <section class="footerPreview">
            <div class="finalCall animateCardShortBottom">
                <div class="finalCallText">
                    <h2>Faça uma chamada final</h2>
                    <p>Essa é uma chamada para ação final. Chegou até aqui e ainda não cadastrou? Aproveite...</p>
                </div>
                <div class="finalCallTextCard">
                    <h2>Descrição chamando para uma última ação. Converse com nossa equipe sem compromisso. Não perca a chance de...</h2>
                    <a href="#form" class="finalCallButton">Chamada para ação</a>
                    <small><p>Nossos especialistas vão entrar em contato com você ainda hoje</p></small>
                </div>
            </div>
        </section>
    </main>
    <footer>
            <h3>Nome da empresa &copy; Todos os Direitos Reservados - 2020</h3>
            <p>CNPJ 99.999.999 - 0009-99 TERMOS DE USO</p>
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/main.js"></script>
</body>
</html>