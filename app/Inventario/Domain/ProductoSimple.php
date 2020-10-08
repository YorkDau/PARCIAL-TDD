<?php


namespace App\Inventario\Domain;
class ProductoSimple extends Producto
{
    private $tipo;

    public function __construct(string $nombre, float $costo, float $precio, int $cantidad, string $tipo)
    {
        parent::__construct($nombre, $costo, $precio, $cantidad);
        $this->tipo = $tipo;
    }

    /**
     * @return string
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function Entrada(int $cantidad): string
    {
        if ($cantidad <= 0) return 'Cantidad de productos que intenta registrar es incorrecta, bebe ser mayor que cero';
        if($cantidad>0){
            $cantidadCalculada =$cantidad + $this->getCantidad();
            $this->setCantidad($cantidadCalculada);
            new Entrada($cantidad,$this->getNombre(),$this->getPrecio(),$this->getCosto());
            return sprintf("Se ha agregado %s unidades al producto %s en el stock hay:%s",$cantidad,$this->getNombre(),$this->getCantidad());
        }
    }
}