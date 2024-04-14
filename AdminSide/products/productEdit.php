<?php
include '../dbConn/init.php'; # credentials per databaze

class Product_Details{
    private $details_id; # details id ska nevoj me kan hiq, po pe ruj per kur te diskutojm. nven t sajna duhet me kan pid, edhe tabela products duhet me kan pa details id
    private $first_Sentence;
    private $second_Sentence;
    private $third_Sentence;
}
/* 
 *
 * e marrim ni 'objekt' prej formes me atributet qe ruhen ne variablat
 * pid,
 * productName,
 * reference_code;
 * img_url,
 * dimensions,
 * price,
 * details_id
 */
try {
  # $conn = new PDO($dsn, $username, $password);
  $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo"<script> console.log('U lidhem me databaze.')</script>";

  # sql ngjashem si me java
  $sql = "INSERT INTO Products (pid, productName, img_url, dimensions, price, details_id) VALUES (:pid, :productName, :img_url, :dimensions, :price, :details_id)"; # qito me : perpara jon placeholders, sikur me jep vlera permes references n c++
  $stmt = $conn->prepare($sql); # statement

  # jepi vlera qatyneve placeholders, tani e bon execute qata, munesh me reuse qita ma von, ju tregoj live
  $stmt->bindValue(":name", $user->name);
  $stmt->bindValue(":email", $user->email);
  $stmt->execute();
  echo"<script> console.log('Me sukses u kry insertimi.')</script>";

} catch(PDOException $e) {
  echo"<script>alert('Gabim gjate lidhjes me Databaze\n>>>".$e->getMessage()."') </script>";
}

$conn = null; #nuk osht qe e gjun n berllog direkt, po osht sikur me qit berllogun te dera, kur tvijn me mar e marin. ma mir se me lan mrena nshpi