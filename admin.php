<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Upgrade</title>

</head>

<body>
  <div class="container">
    <h1>Update pricing</h1>
    <?php
    // Connection à la DB
    require_once('db-functions.php');
    $store = findAll();

    //Afficher DB + update button
    ?>
    <form action="update-pricing.php" method="post" style="display:flex">
      <?php foreach ($store as $product) { ?>
        <div class="card-container">
          <div class="card">
            <h3><?php echo $product['name']; ?></h3>
            <p>Price: <input type="text" name="price[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['price']; ?>"></p>
            <!-- sale a créer, varchar ?-->
            <p>Sale: <input type="text" name="sale[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['sale']; ?>"></p> 

            <p>Bandwidth: <input type="text" name="bandwidth[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['bandwidth']; ?>"></p>

            <p>OnlineSpace: <input type="text" name="onlinespace[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['onlinespace']; ?>"></p>

            <p>Support: <input type="text" name="support[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['support']; ?>"></p>

            <p>Domain: <input type="text" name="domain[
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['domain']; ?>"></p>

            <p>Hidden Fees: <input type="text" name="fees[  
                <?php echo $product['id']; ?>]" value="
                <?php echo $product['fees']; ?>"></p>
          </div>
        </div>
      <?php } ?>
      <input type="submit" value="Update" style="position: absolute">
    </form>
    <!-- <input type="submit" value="Update" style="position: absolute"> -->
  </div>
</body>

</html>