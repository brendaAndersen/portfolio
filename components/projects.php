<?php
    $projects = [
        [
            "title" => "Physis project",
            "finished" => false,
            "date" => "2024",
            "description" => "A project about the subject of physics",
            "stack" => ["React", "Tailwind"],
            "img" => "/img/physis.png",
            "status" => "in progress",
            "href" => "https://github.com/brendaAndersen/physics"
        ],
        [
            "title" => "CarcinoAI project",
            "finished" => false,
            "date" => "2025",
            "description" => "A project to PIPAC. This is an AI that helps with carcinomatosis questions",
            "stack" => ["Next.js", "Tailwind", "Dify"],
            "img" => "/img/carcinoai.png",
            "status" => "in progress",
            "href" => "https://github.com/brendaAndersen/carcino-ai"
        ],
        [
            "title" => "Info Drops",
            "finished" => true,
            "date" => "2024",
            "description" => "Platform project to post something",
            "stack" => ["React", "Tailwind"],
            "img" => "/img/infodrop.png",
            "status" => "finished",
            "href" => "https://github.com/brendaAndersen/info-drop"
        ],
        [
            "title" => "Front-end portfolio project",
            "finished" => false,
            "date" => "2024",
            "description" => "This project is my front-end portfolio",
            "stack" => ["React", "Tailwind"],
            "img" => "/img/portfolio.png",
            "status" => "finished",
            "href" => "https://github.com/brendaAndersen/portifolio-front"
        ],
    ];
?>

<?php foreach($projects as $project): ?>
<div id="projects" onclick="window.location.href='<?= $project['href'] ?>'" class="flex justify-between items-center space-x-3 bg-slate-800 rounded-lg p-3 gap-5 hover:scale-105 hover:transition hover:duration-450 cursor-pointer">
    <div class="w-1/4 flex items-center justify-middle border border-2 border-sky-500 border-dashed">
        <img class="rounded-lg" src="<?= $project['img']?>" alt="">
    </div>
    <div class="w-4/5">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl"> 
                <?= 
                $project["title"] 
                ?>
                <span class="text-xs text-gray-400 opacity-50 italic">
                <?= 
                $project["status"] 
                ?>
                </span>
            </h3>
            <div>
                <?php foreach($project['stack'] as $language): ?>
                <span class="bg-sky-900 text-sky-500 rounded-md px-2 py-1 font-semibold text-xs"><?= $language ?></span>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="leading-6 text-justify">
        <?= 
            $project["description"] 
        ?>
        </p>
    </div>
</div>
<?php endforeach; ?>