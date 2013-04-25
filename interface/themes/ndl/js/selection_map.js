$(document).ready(function() {
    var params = {
    center: [27, 66], 
    scroll: "off",
    shift: "dragBox",
    zoom: 4,
    zoomMin: 1,
    zoomMax: 17,
    shape: function(e, geo) {
      var coordinates = '';
      if ($("#selectionMap").geomap("option", "mode") == 'drawPolygon') {
        for (var i = 0; i < geo.coordinates[0].length; i++) {
          if (coordinates) {
            coordinates += ',';
          }
          var c = geo.coordinates[0][i];
          coordinates += c[0] + ' ' + c[1];  
        }
        coordinates = 'POLYGON((' + coordinates + '))';
      } else {
        if (geo.type == 'Point') {
          coordinates = geo.coordinates[0] + ' ' + geo.coordinates[1];  
        } else {
          var c1 = geo.coordinates[0][0];
          var c2 = geo.coordinates[0][2];
          coordinates = c1[0] + ' ' + c1[1] + ' ' + c2[0] + ' ' + c2[1];
        }
      }
      $("#coordinates").attr("value", coordinates);
      $("#selectionMap").geomap("empty").geomap("append", geo);
      $("#mapPan").click();
    },
    bboxchange: function(e, geo) {
      $("#zoomPath").slider("option", "value", $("#selectionMap").geomap("option", "zoom")); 
    },          
    services: [ {
      "class": "osm",
      type: "tiled",
      src: function( view ) {
        return "http://otile" + ((view.index % 4) + 1) + ".mqcdn.com/tiles/1.0.0/osm/" + view.zoom + "/" + view.tile.column + "/" + view.tile.row + ".png";
      },
      attr: "<p>Tiles Courtesy of <a href='http://www.mapquest.com/' target='_blank'>MapQuest</a> <img src='http://developer.mapquest.com/content/osm/mq_logo.png'></p>"
    } ]
  };  
  
  if (location.protocol == "https:") {
    params["services"][0]["src"] = function( view ) {
        return "https://otile" + ((view.index % 4) + 1) + "-s.mqcdn.com/tiles/1.0.0/osm/" + view.zoom + "/" + view.tile.column + "/" + view.tile.row + ".png";
    };
    params["services"][0]["attr"] = "<p>Tiles Courtesy of <a href='http://www.mapquest.com/' target='_blank'>MapQuest</a> <img src='https://developer.mapquest.com/content/osm/mq_logo.png'></p>";
  }
  
  $("#selectionMap").geomap(params);
  $("#selectionMapTools input").bind('click touchstart', function() {
    if (!$(this).is(':checked')) $(this).attr('checked', true);
    $("#selectionMap").geomap("option", "mode", $(this).val());
    $("#selectionMapHelp").children().hide();
    switch ($(this).val()) {
      case 'pan': $("#selectionMapHelpPan").show(); break;
      case 'drawPolygon': $("#selectionMapHelpPolygon").show(); break;
      case 'dragBox': $("#selectionMapHelpRectangle").show(); break;
    }
  });
  $("#zoomControlPlus").bind('click touchstart', function() {
    $("#selectionMap").geomap("zoom", 1);
    $("#zoomPath").slider("option", "value", $("#selectionMap").geomap("option", "zoom")); 
  });
  $("#zoomControlMinus").bind('click touchstart', function() {
    $("#selectionMap").geomap("zoom", -1);
    $("#zoomPath").slider("option", "value", $("#selectionMap").geomap("option", "zoom")); 
  });
  $("#zoomSlider").bind('dblclick', function(e) {
    e.preventDefault();
  });
  
  var sliderElement = $("#zoomPath");
  sliderElement.slider({
    orientation: "vertical",
    min: parseInt($("#selectionMap").geomap("option", "zoomMin")),
    max: parseInt($("#selectionMap").geomap("option", "zoomMax")),
    value: $("#selectionMap").geomap("option", "zoom"),
    stop: function() {
      $("#selectionMap").geomap("option", "zoom", parseInt(sliderElement.slider("option", "value")));
    }
  });
});
