<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chorus- The music guessing game</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./Images/favicon.ico">

  <!-- Font Awesome CDN  -->
  <script src="https://kit.fontawesome.com/fddf746e6f.js" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- CSS sheet link -->
  <link rel="stylesheet" href="./CSS/searchArtist.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500&family=Happy+Monkey&family=Montserrat:wght@200;400;600&family=Outfit:wght@400;700&family=Red+Hat+Display&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
  <h2>Search an Artist</h2>
  <form class="search-bar" autocomplete="off">
    <input type="text" id="search" placeholder="Search Here">
    <button onclick="ajaxSearch()"><img src="./Images/search.png" alt="search-icon" srcset=""></button>
  </form>
  <div id="output"></div>

  <script type="text/javascript">
    $(document).ready(function() {
      var textBox = document.getElementById("search");
      textBox.addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
          event.preventDefault();
          ajaxSearch();
        }
      });
    });

    function ajaxSearch() {
      event.preventDefault();
      // if(limit>0){
      $.ajax({
        type: 'POST',
        url: './app.php',
        data: {
          name: $("#search").val(),
        },
        success: function(data) {
          $("#output").html(data);
        }
      });
      // }

    }
  </script>

</body>

</html>