<!DOCTYPE html>
<html>
  <head>
    <title>How To: Style Google Maps</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
var map;
function initialize() {
  map = new google.maps.Map(document.getElementById('map-canvas'), {
    zoom: 8,
    center: {lat: -34.397, lng: 150.644}
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
      <h1>How To: Style Google Maps</h1>
      <h2>Intro:</h2>
      <p>In these instructions you will be able to utilize the Google Maps API,
          and style the map to suit your needs. You should be familiar with basic code editors, CSS, HTML and Javascript.
      This isn't going to be hard!</p>
      <h2>Set up a basic page and get Google Maps:</h2>
      <p>Google makes it really easy to get a map on your page quickly. 
          They provide the HTML, some styling and Javascript right out of the box.
          Go <a href='https://developers.google.com/maps/documentation/javascript/examples/map-simple'>here</a>
      to grab the code,(click on the 'Javascript + HTML' button) and paste it into your editor.</p>
      <p>If this works, you will see Google Maps taking up your entire browser window, congratulations.</p>
      <h2>Targeting your "map-canvas" div in CSS:</h2>
      <p>Create a CSS file and link it to your page. Once you have your CSS file linked correctly you will be 
          able to start manipulating style attributes. Start with the width by typing <span>#map-canvas { width: 80vw; }.</span></p>
      <p>If the width of your map div changes, you have linked the CSS correctly; you can now use other CSS attributes.</p>
    <div id="map-canvas"></div>
  </body>
</html>