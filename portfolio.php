<?php include("header.php") ?>
<?php include("connection.php") ?>

<?php
    if($_POST){
        
        // print_r($_POST);

        $name = $_POST['name'];
        $description = $_POST['description'];
        
        /*Asignar la fecha al nombre dle archivo */
        $date_file = new DateTime();
        $file = $date_file->getTimestamp()."_".$_FILES['file']['name'];

        /* Copiar el archivo a la carpeta assets creando un archivo temporal */
        $temp_file = $_FILES['file']['tmp_name'];
        move_uploaded_file($temp_file, "assets/".$file);




        $connectionObject = new Connect;
        $sql = "INSERT INTO `projects` (`id`, `name`, `image`, `description`) VALUES (NULL, '$name', '$file', '$description');";

        $connectionObject->execute($sql);

        /* Redireccionar para no repetir la inserción al recargar */
        header("location:portfolio.php");
    }
    $connectionObject = new Connect();
    $result = $connectionObject->query("SELECT * FROM `projects`");
    // print_r($result);
    
    if($_GET){
        
        $id = $_GET['delete'];
        
        /* Obtener el nombre de la imagen usando el ID desde get */
        $connectionObject = new Connect();
        $image_to_delete = $connectionObject->query("SELECT image FROM `projects` WHERE id =".$id);

        /* Localizando el archivo en assets y borrarlo */
        unlink("assets/".$image_to_delete[0]['image']);
        print_r($image_to_delete[0]['image']);
        
        /* Borra el registro de la base de datos */
        $sql = "DELETE FROM `projects` WHERE `projects`.`id` =".$id;
        $connectionObject->execute($sql);

        header("location:portfolio.php");

    }


?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Project information
                </div>
                <div class="card-body">
                    <form action="portfolio.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Project name</label>
                            <input class="form-control" type="text" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="file">Project image</label>
                            <input class="form-control" type="file" name="file" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success" type="submit" value="Send project">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $project) {?>
                            <tr class="">
                                <td scope="row"><?php echo $project['id'];?></td>
                                <td><?php echo $project['name'];?></td>
                                <td><img src="assets/<?php echo $project['image'];?>" alt="" width="100px"></td>
                                <td><?php echo $project['description'];?></td>
                                <td>
                                    <a class="btn btn-danger" href="?delete=<?php echo $project['id'];?>" role="button">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>







<?php include("footer.php") ?>