<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfolio</title>
</head>
<body>
    <?php
        $nome = "Luis";
        $saudacao = "Oi";
        $titulo = $saudacao . " Portfolio do " . $nome;
        $subitulo = "Seja bem vindo ao meu Portfolio!!";
        $ano = 2025;

        $projeto = "Meu Portfolio";
        $finalizado = true;
        $dataDoProjeto = "2025-09-22";
        $descricaco = "Meu primeiro Portfolio. Escrito em PHP e HTML";
        $projetos = [
            [
                "titulo" => "Meu Portfolio",
                "finalizado" => false,
                "ano" => 2022,
                "descricao" =>"Meu primeiro Portfolio. Escrito em PHP e HTML"
            ],
            [
                "titulo" => "Lista de Tarefas",
                "finalizado" => true,
                "ano" => 2023,
                "descricao" =>"Lista de tarefas. Escrito em PHP e HTML"
            ],
            [
                "titulo" => "Controle de Leitura de Livros",
                "finalizado" => true,
                "ano" => 2025,
                "descricao" =>"Lista de livros. Escrito em PHP e HTML"
            ],
            [
                "titulo" => "Mais um Projeto",
                "finalizado" => false,
                "ano" => 2026,
                "descricao" =>"Projeto secreto em andamento. Escrito em PHP e HTML"
            ],

        ];

        function verificarSeEstaFinalizado( $projeto ) {
                if($projeto['finalizado']) {
                    return '<span style="color: green">✅ finalizado</span>';
                }
                return '<span style="color: red">❌ não finalizado</span>';  
        }

        $projetosFiltrados= array_filter($projetos, function($projeto){ return $projeto['ano'] >= 2024;});
       
    ?>  

    <h1><?=$titulo?></h1>
    <p><?=$subitulo?></p>
    <p><?php echo $ano;  ?> </p>

    <hr/>

    <ul>
        <?php foreach ($projetosFiltrados as $projeto): ?>
                <div         
        <?php if(!((2024 - $ano) > 2)):  ?>
            style="background-color: burlywood;"
        <?php endif; ?>
    >
        <h2><?=$projeto['titulo']?></h2>
        <p><?=$projeto['descricao']?></p>
        <div> 
            <div><?=$projeto['ano']?></div>
            <div> Projeto: 

                <?=verificarSeEstaFinalizado($projeto)?>
                <!-- <?php if(!$projeto['finalizado']): ?>
                    <span style="color: red">❌ não finalizado</span>
                <?php else: ?>
                    <span style="color: green">✅ finalizado</span>
                <?php endif; ?> -->

                <!-- <?php
                    if($projeto['finalizado']) {
                        echo "✅ finalizado";
                    } else {
                        echo "❌ não finalizado";
                    }
                ?>          -->
            </div>
        </div>
        </div>
        <?php endforeach; ?>
    </ul>
</body>
</html>