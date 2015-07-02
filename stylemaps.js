window.onload = function(){

    var styles = [
      {
        stylers: [
          { hue: "#1E4F66" },
          { saturation: -20 }
        ]
      }
      var options = {
    mapTypeControlOptions: {
        mapTypeIds: ['Styled']
    },
        center: new google.maps.LatLng(-7.245217594087794, 112.74455556869509),
        zoom: 16,
        disableDefaultUI: true, 
        mapTypeId: 'Styled'
    };
    var div = document.getElementById('map-canvas');
    var map = new google.maps.Map(div, options);
    var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
    map.mapTypes.set('Styled', styledMapType);
    ];

    map.setOptions({styles: styles});
    
}