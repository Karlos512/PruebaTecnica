<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Catálogo de Menús</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Menú Padre</th>
                    <th>Nombre</th>
                    <th>Descrpción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['menu_padre']; ?></th>
                        <th><?php echo $data['nombre']; ?></th>
                        <th><?php echo $data['descripcion']; ?></th>
                        <th>
                            <a href="index.php?m=updateMenu&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>