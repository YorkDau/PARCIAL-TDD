<?php


namespace test;


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

    public function test_Cantidad_Entrada_Negativa_Cero ():void {
        $producto = new ProductoSimple('gaseosa litro',5000,2,5000,'VENTA DIRECTA');
        $resultado = $producto->Entrada('0');
        $this->assertEquals('Cantidad de productos que intenta registrar es incorrecta, bebe ser mayor que cero',$resultado);
    }
}