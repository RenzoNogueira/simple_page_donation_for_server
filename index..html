<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Bros Server</title>
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main id="app">
        <div class="main-div row">
            <div class="col-md-6 col-lg-6 position-relative" id="container-wallpaper-left">
                <div id="wallpaper-left"></div>
                <div class="position-absolute top-50 start-50 translate-middle d-none d-sm-none d-md-block wallpaper-left-text" id="wallpaper-left-text">
                    <h1 class="text-light">World Bros Server</h1>
                    <h2 class="text-light">Seja bem vindo</h2>
                    <!-- Minecraft icon -->
                    <div class="position-relative">
                        <img id="minecraft-pickaxe" src="images/pickaxe.png" alt="Minecraft Icon" class="img-fluid">
                        <!-- Icone de baú desktop -->
                        <div style="top: 280px;" role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Total de doações da rodada." class="d-flex align-items-center position-absolute text-light start-50 translate-middle">
                            <img id="minecraft-chest" src="images/chest.png" alt="Minecraft chest" class="img-fluid">
                            <h1 class="px-4" style="transform: translateY(0.2em);">R${{totalSavings}}</h1>
                        </div>
                    </div>
                </div>
                <!-- Icone de baú mobile -->
                <div role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Total de doações da rodada." class="d-flex align-items-center position-absolute text-light top-50 start-50 translate-middle d-block d-md-none wallpaper-left-text">
                    <img id="minecraft-chest" src="images/chest.png" alt="Minecraft chest" class="img-fluid">
                    <h1 class="px-4" style="transform: translateY(0.2em);">R${{totalSavings}}</h1>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 py-4 p-md-0">
                <div class="container pt-4">
                    <div>
                        <h1 class="text-uppercase">Em busca de diamantes</h1>
                        <h2 class="text-center">Ajude manter o servidor.</h2>
                        <div class="d-flex align-items-center">
                            <img id="emerald" src="images/emerald.png" alt="Smerald" class="img-fluid">
                            <h4 style="transform: translateY(0.2em);" class="mx-3">Preencha o formulário abaixo para efetuar a doação.</h4>
                        </div>
                        <div class="container">
                            <!-- Formulário simples de identificação -->
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Digite seu nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nick-name</label>
                                    <input type="text" name="nikename" id="nikename" class="form-control" placeholder="Digite seu Nike-name do jogo" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Mensagem</label>
                                    <textarea name="message" id="message" class="form-control" placeholder="Que tal uma mensagem?" required></textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="framework/jquery/jquery-3.6.0.min.js"></script>
    <script src="framework/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                totalSavings: 0
            },
            methods: {
                getTotalSavings() {
                    $.post('api/savings.php', {
                        action: 'getTotalSavings'
                    }, (response) => {
                        this.totalSavings = response.totalSavings
                    })
                },

                // Anima o icone do baú
                animateChest: function() {
                    let tickets = 0
                    setInterval(() => {
                        tickets++
                        if (tickets >= 8) {
                            $('#minecraft-chest').addClass('animated shake');
                        }
                        setTimeout(() => {
                            if (tickets >= 16) {
                                $('#minecraft-chest').removeClass('animated shake');
                                tickets = 0
                            }
                        }, 8000);
                    }, 1000);
                }
            },
            mounted: function() {
                // this.getTotalSavings();
                this.animateChest() // Anima o icone do baú
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip(); // Inicia o tooltip
        });
    </script>
</body>

</html>