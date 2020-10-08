<?php


namespace test;

use App\Inventario\Domain\ProductoSimple;
use PHPUnit\Framework\TestCase;


class ProductoSimpleTest extends TestCase
{
    /**
     *
     * Escenario:  Registro de Valor de la cantidad negativa o cero en la entrada.
     * HU 1. COMO USUARIO QUIERO REGISTRAR LA ENTRADA PRODUCTOS
     * Criterio de Aceptación:
     * 1 La cantidad de la entrada debe ser mayor a 0.
     * Dado
     * El usuario tiene un  un producto registrado con el: nombre:”gaseosa litro”, precio:”5000”, cantidad:”2”, costo:”5000”, tipo:”VENTA DIRECTA”.
     * Cuando
     * realiza una entrada con un valor menor o igual a cero.
     * Entonces
     * el sistema de informacion le mostrara un mensaje de alerta “Cantidad de productos que intenta registrar es incorrecta, bebe ser mayor que cero”
     * @test
     */

    public function testCantidadEntradaNegativaCero(): void
    {
        $producto = new ProductoSimple('gaseosa litro', 5000, 5000, 2, 'VENTA DIRECTA');
        $resultado = $producto->Entrada(0);
        $this->assertEquals('Cantidad de productos que intenta registrar es incorrecta, bebe ser mayor que cero', $resultado);
    }

    /**
     *
     * Escenario: Registro del valor de la cantidad correcto en la entrada.
     * HU 1. COMO USUARIO QUIERO REGISTRAR LA ENTRADA PRODUCTOS
     * Criterio de Aceptación:
     * 1. La cantidad de la entrada debe ser mayor a 0.
     * 2. La cantidad de la entrada se le aumentará a la cantidad existente del producto
     * Dado

     * El usuario tiene un  un producto registrado con el: nombre:”gaseosa litro”, precio:”5000”, cantidad:”2”, costo:”5000”, tipo:”VENTA DIRECTA”.
     * Cuando
     * registre una nueva entrada al valor de la cantidad correcta es decir mayor a cero,cantidad = “7”
     * Entonces
     * El sistema de informacion registrara y mostrara un mensaje de exito como : “Se ha agregado 7 unidades al producto gaseosa litro en el stock hay:9";
     * @test
     */
    public function testCantidadCorrectaEntrada():void {
        $producto = new ProductoSimple('gaseosa litro', 5000, 5000, 2, 'VENTA DIRECTA');
        $resultado = $producto->Entrada(7);
        $this->assertEquals('Se ha agregado 7 unidades al producto gaseosa litro en el stock hay:9',$resultado);
    }
}