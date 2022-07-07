<?php 
        //include_once './includes/_dados.php';
        include_once './includes/_banco.php';
        include_once './includes/_head.php';
        include_once './includes/_functions.php';
        $paginaAtual='produtos';
        include_once './includes/_header.php';

        $sql = mysqli_query($conn,"SELECT * FROM produtos") or die("Erro");
    ?>
    <main class="container">
        <section id="produtos">
            <div class="row">
            <?php 
             while ($dados = mysqli_fetch_assoc($sql)){
            ?>
            <div class="card col-3" style="width: 18rem;">
            <a href="./produto-detalhe.php?id=<?php echo $key;?>">
                <img class="card-img-top" src="./produtos/<?php echo $dados['Imagem']?>" alt="<?php echo $dados['Nome']?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $dados['Nome'] ?></h4>
                    <span class="card-price"><?php echo ConverterEmMoeda($dados['Preco']); ?></span>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
        </section>
    </main>
    <?php 
        include_once './includes/_footer.php';
    ?>