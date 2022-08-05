<!DOCTYPE html>
<html>
<head>
  <title>Flyout Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='Flyout/flyout.css'>
  <!-- JQuery must be included -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Snuffle script! -->
  <script src="Flyout/flyout.js"></script>

  <!-- These scripts should only be loaded after the document has finished loading -->
  <script>
    $(document).ready(function() {
      $("#flyoutShow").click(function(){
        flyoutShow("Flyout Header", "A very very cool description", "I'm supposed to be a cool button!");
      });
      $("#flyoutShowAlt").click(function(){
        flyoutShow("Another one", "uwu");
      });
    });
  </script>

  <style>
    html, body {
      margin: 0; padding: 0;
    }
    .buttons {
      position: fixed;
      top: 1rem;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
</head>
<body>

<div id='flyoutDim' class='flyout-dim'></div>
<div id='flyoutRoot' class='flyout'>
  <p id='flyoutHeader' class='flyout-header'>Header</p>
  <p id='flyoutDescription' class='flyout-description'>Description</p>
  <div id='flyoutActionbox' class='flyout-actionbox'></div>
  <button onclick='flyoutClose()'>Close</button>
</div>

<div class="buttons">
  <button id="flyoutShow">Show flyout!</button>
  <button id="flyoutShowAlt">Show different stuff, sus</button>
</div>

</body>
</html>
