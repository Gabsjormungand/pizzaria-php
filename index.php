<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<?php include("cabecalho.php")?>
<?php include("menu.php")?>
        <main class="bg-light row pe-3 ps-3">
            <div class="row">
                <h2 class="mt-4 h1"> A melhor Pizza da região</h2>
                <hr>
                <?php
                $servidor = "127.0.0.1";
                $usuario = "root";
                $senha = "";
                $bd = "bd_pizza_novo";

                $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, 3306);

                $sql = "select * from pizzas_novo order by qtd_venda desc limit 3";

                $todasAsPizzas = mysqli_query($conexao, $sql);
                while($umaPizza = mysqli_fetch_assoc($todasAsPizzas)){
                ?>
                
                
                <div class="col text-center">
                    <img src="<?php echo $umaPizza["foto"];?>" alt="<?php echo $umaPizza["nome"];?>" class="img-fluid">
                    <?php
                    $estrelas = $umaPizza["classificacao"];
                    for ($i=0; $i < $estrelas ; $i++){
                        echo "⭐";
                    }
                    ?>
                    <p><?php echo $umaPizza["nome"];?></p>
                </div>
                <?php
                }
                mysqli_close($conexao);
                ?>
                <hr>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Nossos Sabores</h3>
                    <p class="sabores">Á Moda da Casa <br>
                    <?php
                    $servidor = "127.0.0.1";
                    $usuario = "root";
                    $senha = "";
                    $bd = "bd_pizza_novo";

                    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, 3306);

                    $sql = "select nome from pizzas_novo order by nome";

                    $todasAsPizzas = mysqli_query($conexao, $sql);

                    while($umaPizza = mysqli_fetch_assoc($todasAsPizzas)){
                        echo $umaPizza["nome"] . "<br>";
                    }

                    mysqli_close($conexao);
                    ?>
                    </p>
                </div>
                <div class="col">
                    <h3>Uma casa com história</h3>
                    <div class="row">
                        <div class="col-4">
                            <img src="historia.png" class="img-fluid" alt="historia">
                        </div>
                        <div class="col">
                            <p>Muito famosa em toda a região por sua excelêcia na qualidade, a nossa pizzaria tem mais de 25 anos de história</p>
                            <p>
                                <a href="quem-somos" class="link-destaque">Conheça</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include("rodape.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>