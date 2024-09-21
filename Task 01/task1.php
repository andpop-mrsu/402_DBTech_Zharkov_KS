<?php

$readmeFile = 'README.md';

if (!file_exists($readmeFile)) {
    echo "Файл README.md не найден: $readmeFile\n";
    exit(1);
}

$readmeContent = file_get_contents($readmeFile);

$pattern = '/## Задача для первого блока\s*### Вариант 1\s*.*?Игра проходит(.*?)(?=## |$)/s';

if (preg_match($pattern, $readmeContent, $matches)) {
    $taskDescription = trim($matches[1]);

    echo "Инструкция к игре \"Крестики-нолики\" (tic-tac-toe)\n";
    echo "-------------------------------------------\n";
    echo "Игра проходит ",$taskDescription;
} else {
    echo "Описание задачи не найдено в файле README.md\n";
    exit(1);
}

exit(0);