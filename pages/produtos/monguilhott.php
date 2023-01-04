<?php include('../../config.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Monguilhott</title>
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>perfil.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

    <header>
        <div class="logo">
            <a href="<?php echo INCLUDE_PATH; ?>"><img src="images/logo.png" /></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
            </ul>
        </div>
        <div class="botaomenu">
            <a href="https://api.whatsapp.com/send/?phone=5533998023970&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank">Iniciar projeto.</a>
        </div>
    </header>

    <section class="home">
        <div class="container">
            <div class="title">
                <h2><x>Consultorio</x> <z>Monguilhott</z>.</h2>
                <p>Website Consultório Odontolôgico</p>
            </div>
            <div class="homeimg">
                <img src="images/monguilhott.jpg" />
            </div>
            <div class="homefooter">
                <div class="homefootertext">
                    <h2><x>E ai,</x> <z>Gostou?</z></h2>
                    <p>Entre em contato comigo.</p>
                </div>
                <div class="homefooterbotao">
                    <a href="https://api.whatsapp.com/send/?phone=5533998023970&text=Olá%2C+poderia+me+ajudar%3F&type=phone_number&app_absent=0" target="_blank"><button>Iniciar projeto.</button></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer1">
                <h2>Hx Info</h2>
                <div class="footermenu">
                    <ul>
                        <li><a href="<?php echo INCLUDE_PATH; ?>projetos">Projetos</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                        <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
                    </ul>
                </div>
                <a href=""><i class="fa fa-arrow-up">Voltar ao topo</i></a>
            </div>
            <div class="footer2">
                <h2>Copyright © 2023 - Todos os direitos reservados. Hx Info | "A excelência não é um ato, mas sim um hábito."</h2>
            </div>
        </div>
    </footer>

</body>
</html>