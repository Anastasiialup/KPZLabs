<?php
// Легковаговик

// Клас, що представляє легковаговий елемент розмітки
class LightweightNode
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function render(): string
    {
        return $this->content;
    }

    public function getSize(): int
    {
        // Припустимо, що кожен символ займає 1 байт пам'яті
        return strlen($this->content);
    }
}

// Легковаговий HTML елемент
class LightweightHTMLElement extends LightweightNode
{
    public function render(): string
    {
        return "<{$this->content}>";
    }
}

// Функція для створення відповідного елемента розмітки на основі умов
function createNode(string $line): LightweightNode
{
    if (strlen($line) < 20) {
        return new LightweightHTMLElement('h2');
    } elseif (preg_match('/^\s/', $line)) {
        return new LightweightHTMLElement('blockquote');
    } elseif (empty(trim($line))) {
        // Пропускаємо порожні рядки
        return new LightweightNode('');
    } else {
        return new LightweightHTMLElement('p');
    }
}

// Читаємо книгу з файлу
$bookContent = file_get_contents('book.txt');

// Розбиваємо текст на рядки
$lines = explode("\n", $bookContent);

// Створюємо вузли для кожного рядка
$nodes = [];
foreach ($lines as $line) {
    $nodes[] = createNode($line);
}

// Рендеримо кожен вузол та обчислюємо загальний розмір в байтах
$totalSize = 0;
foreach ($nodes as $node) {
    echo $node->render() . "\n";
    $totalSize += $node->getSize();
}

echo "\nTotal memory usage: $totalSize bytes\n";
?>
