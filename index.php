<?php include ("header.php")?>
<?php include("connection.php") ?>

<?php
$connectionObject = new Connect();
$result = $connectionObject->query("SELECT * FROM `projects`");

?>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Welcome!</h1>
      <p class="col-md-8 fs-4">This is my private portfolio.</p>
      <button class="btn btn-primary btn-lg" type="button">More details</button>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    
    <?php foreach($result as $project){?>
      <div class="col">
        <div class="card">
          <img src="assets/<?php echo $project['image'];?>" class="card-img-top" alt="..." width="200px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $project['name']; ?></h5>
            <p class="card-text"><?php echo $project['description']; ?></p>
          </div>
        </div>
      </div>
    <?php }?>

  </div>


<?php include ("footer.php")?>


