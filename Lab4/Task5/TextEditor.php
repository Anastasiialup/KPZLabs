<?php
require_once 'TextDocument.php';

class TextEditor
{
    private $document;
    private $history = [];

    public function __construct(TextDocument $document)
    {
        $this->document = $document;
    }

    public function type(string $text): void
    {
        $this->history[] = clone $this->document;
        $this->document->setContent($this->document->getContent() . $text);
    }

    public function undo(): void
    {
        if (!empty($this->history)) {
            $this->document = array_pop($this->history);
        }
    }

    public function getCurrentContent(): string
    {
        return $this->document->getContent();
    }
}
