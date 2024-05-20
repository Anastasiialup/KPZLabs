<?php
// Square.php
class Square extends Shape {
    public function draw() {
        echo "Drawing Square ";
        $this->renderer->render();
    }
}
?>
