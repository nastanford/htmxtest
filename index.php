<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>htmx test</title>
  <script src="https://unpkg.com/htmx.org@1.9.8" integrity="sha384-rgjA7mptc2ETQqXoYC3/zJvkU7K/aP44Y+z7xQuJiVnB/422P/Ak+F/AqFR7E4Wr" crossorigin="anonymous"></script>
</head>

<body>

  <input type="checkbox" id="testCheck" name="testCheck" value=1 hx-post="/data/index.php" hx-trigger="click" hx-target="#test" hx-swap="innerHTML">

  <button hx-post="/data/button.php" hx-trigger="click" hx-target="#test" hx-swap="innerHTML">
    Click Me!
  </button>
  <hr>
  <div id="test"></div>

</body>

</html>