<?php
$projetos = [
    [
        "titulo" => "Meu Portfolio",
        "finalizado" => false,
        "ano" => 2022,
        "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "/assets/portfolio.png"
    ],
    [
        "titulo" => "Lista de Tarefas",
        "finalizado" => true,
        "ano" => 2023,
        "descricao" => "Lista de tarefas. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],
    [
        "titulo" => "Controle de Leitura de Livros",
        "finalizado" => true,
        "ano" => 2025,
        "descricao" => "Lista de livros. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],
    [
        "titulo" => "Mais um Projeto",
        "finalizado" => false,
        "ano" => 2026,
        "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => ""
    ],

];

?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
        <div class="w-1/5 flex items-center justify-middle">
            <img src="<?= $projeto['img'] ?>" class="h-30 rounded-md shadow-xl shadow-slate-900" alt="">
        </div>
        <div class="w-4/5 space-y-3">
            <div class="flex gap-3 justify-between">
                <h3 class="font-semibold text-xl">
                    <?php if ($projeto['finalizado']): ?>✅<?php endif; ?>
                    <?= $projeto['titulo'] ?>
                    <?php if ($projeto['finalizado']): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $projeto['ano'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
                    <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php
                    $color =  ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'teal', 'purple'];
                    foreach ($projeto['stack'] as $position => $language):
                    ?>
                        <span class="bg-<?= $color[$position] ?>-400 text-<?= $color[$position] ?>-900 rounded-md px-2 py-1 font-semibold text-xs ">
                            <?= $language ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>
            <p class="leading-6">
                <?= $projeto['descricao'] ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>