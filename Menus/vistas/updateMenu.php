<div class="container">
    <div class="jumbotron">
        <h2>ACTUALIZAR MENÚ</h2>

    </div>
    <div class="col-md-6 col-md-offset-3">
        <div class="form-horizontal" style="">
            <form action="index.php?m=get_datosAct&id=<?php echo $data['id'];?>" method="post">

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_padre">MENÚ PADRE:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="txt_padre">
                        <option value="">Seleccionar Menu Padre</option></label>
                            <?php foreach($query as $data): ?>
                            <option value="<?php echo $data['descripcion']; ?>"><?php echo $data['descripcion']; ?></option>
                            <?php endforeach; ?>
                        </select>

                    </div>
                    
                </div>
                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="txt_nombre">NOMBRE:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txt_nombre" value="<?php echo $data['nombre']; ?>">
                    </div>
                    
                </div>

                <div class="form-group">
                    <label class=" col-sm-2 control-label" for="text_descrp">DESCRIPCIÓN:</label>
                    <div class="col-sm-10">
                         <textarea type="text" class="form-control" name="text_descrp"><?php echo $data['descripcion']; ?></textarea>
                    </div>
                    
                </div>
                
                <div class="form-group">
                        <input type="submit" class="btn btn-primary form-control" name="" value="Actualiza">
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>