<?php
$itens = [
    ['href' => 'https://x.com', 'src' => 'assets/twitter.png', 'alt' => 'Twitter logo'],
    ['href' => 'https://facebook.com', 'src' => 'assets/facebook.png', 'alt' => 'Facebook logo'],
    ['href' => 'https://linkedin.com', 'src' => 'assets/linkedin.png', 'alt' => 'Linkedin logo'],
    ['href' => 'https://youtube.com', 'src' => 'assets/youtube.png', 'alt' => 'Youtube logo'],
];
?>

<section class="flex gax-x-3">
    <!-- Titulo e Descrição -->
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Luis.</h1>
        <p class="text-xl leading-6 mt-6">
            Falando um pouco sobre mim, sou um desenvolvor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP e HTML, mas também tenho conhecimento em outras linguagens como Python e Java.
        </p>
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['src'] ?>">
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>

    </div>

    <!-- Imagem -->
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img class="h-60 -mt-4 hover:animate-pulse" src="/assets/avatar.svg" alt="Foto Luis Carlos Jardim Pereira">
        </div>
    </div>
</section>