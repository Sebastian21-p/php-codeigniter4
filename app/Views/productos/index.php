<?php echo $this->extend('plantilla/layout'); ?>

<?php echo $this->section('contenido');?>
<h1>Productos</h1>
<table class="table">
    <thead>
        <th>Código</th>
        <th>Nombre</th>
        <th>Stock</th>
    </thead>
    <tbody>
        <?php foreach($productos as $producto):?>
            <tr>
                <td ><?php echo $producto['codigo']?></td>
                <td><?php echo $producto['nombre']?></td>
                <td><?php echo $producto['stock']?></td>
            </tr>
            <?php endforeach;?>
    </tbody>
</table>
<?php echo $this->endSection();?>
<?php echo $this->section("scripts"); ?>

<script>
    alert("Hola Js");
</script>

<?php echo $this->endSection();?>