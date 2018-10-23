<?php
$topics = [
1 => 'Charity'
,2 => 'Faith'
];

try
{
  $dbUrl = getenv('DATABASE_URL');
  $dbOpts = parse_url($dbUrl);
  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
} 
$id = htmlspecialchars($_GET['id']);
$stmt = $db->prepare('SELECT topic, id FROM Topic');
$stmt->execute(array());
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>insert scripture</title>
 </head>
 <body>
 <form action="" method="post">
 Book: <input type="text" name="book"><br/>
 Chapter: <input type="text" name="chapter"><br/>
 Verse: <input type="text" name="verse"><br/>
 Content: <textarea name="content"></textarea><br/>
 <?php foreach ($rows as $row) : ?>
	 <?php echo $row['topic']; ?>: <input type="checkbox" name="topic[]" value="<?= $row['id']; ?>" />
 <?php endforeach; ?>
 <input type="submit">
 </form>
 <?php echo '<p>Hello World</p>'; ?> 
 </body>
</html>