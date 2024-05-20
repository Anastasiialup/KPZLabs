<?php
// Файл: HTMLVisitor.php

// Інтерфейс для відвідувача
interface HTMLVisitor {
    public function visitElement(LightNode $element);
    public function visitTextNode(LightTextNode $textNode);
}

?>
