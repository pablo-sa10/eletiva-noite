<?php

class Ponto {
    private $x;  
    private $y;  
    private static $contador = 0;  

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;  
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getX() {
        return $this->x;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function getY() {
        return $this->y;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function calcularDistancia($outroPonto) {
        $dx = $outroPonto->getX() - $this->x;
        $dy = $outroPonto->getY() - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));  // Fórmula da distância
    }

    public function calcularDistanciaXY($x, $y) {
        $dx = $x - $this->x;
        $dy = $y - $this->y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public static function calcularDistanciaEntrePontos($x1, $y1, $x2, $y2) {
        $dx = $x2 - $x1;
        $dy = $y2 - $y1;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function __toString() {
        return "Ponto(" . $this->x . ", " . $this->y . ")";
    }
}

$ponto1 = new Ponto(3, 4);
$ponto2 = new Ponto(7, 1);

echo "contador de pontos: " . Ponto::getContador() . PHP_EOL;
echo "distância entre ponto1 e ponto2: " . $ponto1->calcularDistancia($ponto2) . PHP_EOL;
echo "distância entre ponto1 e coordenadas (5, 5): " . $ponto1->calcularDistanciaXY(5, 5) . PHP_EOL;
echo "distância entre (3, 4) e (7, 1): " . Ponto::calcularDistanciaEntrePontos(3, 4, 7, 1) . PHP_EOL;

?>
