<!-- the main page -->
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>project web</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/small-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Nearby Shops
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pshop.php">My preferred Shops</a>
            </li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0"></p>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        
        <!-- /.col-md-4 -->
         <?php
         require '../model/model.php';

         $shops = getShop();
        $shopd = getShopD();

          foreach ( $shopd as  $value) { //parcourir la liste des shops en fonction de distance 
        foreach ($shops as $key1 => $value1) { //parcourir la liste des shops
              if($value['distance']==$value1['distance']){ 
           if($value1['jaime']=='0' && $value1['deslike']<time()){//afficher les shops 
      echo'<div class="col-md-4 mb-4">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title"> shop : '.$value1['name'].'  </h2>
              <p> distance is :'.$value1['distance'].'</p>

              <img src="../views/shop.png" class="img-fluid" alt="Responsive image">
            </div>
            <div class="card-footer">
              <a href="../controller/controller3.php?t=0&id='.$value1['id_shop'].'" class="btn btn-danger" >deslike</a>  
              <a href="../controller/controller3.php?t=1&id='.$value1['id_shop'].'" class="btn btn-success" >like</a>
            </div>
          </div>
        </div>  ';} }}}
        
        ?>
        
      
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
