<?php

class Originator
{
    private $state;

    public function __construct(string $state)
    {
        $this->state = $state;
        echo "Originator: My initial state is: $this->state\n";
    }

    public function doSomething(): void
    {
        echo "Originator: I'm doing something important.\n";
        $this->state = $this->generateRandomString(30);
        echo "Originator: and my state has changed to: $this->state\n";
    }

    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: $this->state\n";
    }
}

interface Memento
{
    public function getName(): string;
    public function getDate(): string;
}
