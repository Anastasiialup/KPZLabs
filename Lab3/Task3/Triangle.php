<?php
// Triangle.php
class Triangle extends Shape {
    public function draw() {
        echo "Drawing Triangle ";
        $this->renderer->render();
    }
}
?>
