<?php
// Circle.php
class Circle extends Shape {
    public function draw() {
        echo "Drawing Circle ";
        $this->renderer->render();
    }
}
?>
