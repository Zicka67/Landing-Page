<?php
session_start();
?>


<!DOCTYPE html> 
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Upgrade</title>

</head>

<body>
  <div class="container" style="display: flex;">
    <h1>Update pricing</h1>
    <?php
    // Connection à la DB
    require_once('db-functions.php');
    $store = findAll();

    //Afficher DB + update button
    ?>

      <?php foreach ($store as $product) { ?>

<form action="update-pricing.php" method="post">
    <div class="card-container">
      <div class="card">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <!-- <?php var_dump($product); ?> FONCTIONNE -->
        <h3><?php echo $product['name']; ?></h3>
        <p>Price: <input type="text" name="price" value="<?php echo $product['price']; ?>"></p>
        <!-- sale a créer, varchar ?-->
        <p>Sale: <input type="text" name="sale" value="<?php echo $product['sale']; ?>"></p> 

        <p>Bandwidth: <input type="text" name="bandwidth" value="<?php echo $product['bandwidth']; ?>"></p>

        <p>OnlineSpace: <input type="text" name="onlinespace" value="<?php echo $product['onlinespace']; ?>"></p>

        <p>Support: <input type="text" name="support" value="<?php echo $product['support']; ?>"></p>

        <p>Domain: <input type="text" name="domain" value="<?php echo $product['domain']; ?>"></p>

        <p>Hidden Fees: <input type="text" name="fees" value="<?php echo $product['fees']; ?>"></p>
      </div>
    </div>
    <input type="submit" value="Update" style="position: absolute">
</form>
  <?php } ?>

  </div>
</body>

    <!-- <input type="submit" value="Update" style="position: absolute"> -->
  <!-- </div>
</body> -->

</html>