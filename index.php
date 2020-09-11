<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
    <?php $str = "hello";
    echo strlen($str);
    ?>
    <?php 
    $name = "hoyeon";
    echo "<h1>my name is ".$name." call me</h1>"; ?>
    
  <a href="index.php?id=html">html</a>
  <a href="index.php?id=css">css</a>
  <a href="index.php?id=javascript">javascript</a>
  <h2><?php echo $_GET['id'] ?></h2>
  <?php
  echo file_get_contents("data/".$_GET['id']);

  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "welcome! <br>";
  }

  $pet = array('dog', 'cat', 'bird', 'snake');

  $i =0;
  while($i < count($pet)){
    echo $pet[$i].'<br>';
    $i = $i + 1;
  };

  foreach ($pet as $value) {
    echo "<li>$value</li>";
  }

  $student = [
    'name' => 'John Doe',
    'age' => 20,
    'isRegistered' => true
  ];

  echo $student[age].'<br>';
  $student['age'] = 25;

  foreach($student as $key => $value) {
    echo "$key = $value<br>";
  };

  ?>


  </body>
</html>
