<h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") 
  {
    // Check if the checkbox is checked
    $isChecked = isset($_POST["testCheck"]) ? 1 : 0;
    echo "is checked = " . $isChecked;
  }
?>
</h1>