<?php

require_once 'Originator.php';
require_once 'ConcreteMemento.php';
require_once 'TextDocument.php';
require_once 'TextEditor.php';

$document = new TextDocument("Hello,");
$editor = new TextEditor($document);
echo "Current content: " . $editor->getCurrentContent() . "\n";

$editor->type(" my new world!");
echo "Current after typing: " . $editor->getCurrentContent() . "\n";

$editor->undo();
echo "Content after undo: " . $editor->getCurrentContent() . "\n";
?>
