<?php

namespace App\Controllers;
use App\models\ProductosModel;

class Productos extends BaseController
{
    public function index()
    {
       /*$db =\Config\Database::connect();
        $query = $db->query("SELECT codigo,nombre,stock FROM productos");
        $resultado =$query->getResultArray();*/

        $productoModel = new ProductosModel();

        $data = ['titulo' => 'Catalogo de productos', 'productos' =>$resultado];
        return view('productos/index', $data);
        /*return view('plantilla/header', $data)
        . view('productos/index', $data)
        . view('plantilla/footer', ['copy' => "2024"]);*/
        //return view('productos/index', $data);
    }

    public function show($id)
    {
        $data = [
            'titulo' => 'Catalogo de productos',
            'id' => $id,
        ];

        return view("productos/show", $data);
        /*return view('plantilla/header', $data)
    . view('productos/show', $data)
    . view('plantilla/footer', ['copy' => "2024"]);*/
    }

    public function cat($categoria, $id)
    {
        echo "<h2>Categoria : $categoria <br>Producto : $id</h2>";
    }
}
