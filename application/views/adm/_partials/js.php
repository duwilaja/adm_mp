<!-- Jquery js-->
<script src="<?=base_url()?>template/js/vendors/jquery-3.4.0.min.js"></script>

<!-- Bootstrap4 js-->
<script src="<?=base_url()?>template/plugins/bootstrap/popper.min.js"></script>
<script src="<?=base_url()?>template/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Othercharts js-->
<script src="<?=base_url()?>template/plugins/othercharts/jquery.sparkline.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

<!--Horizontal js-->
<script src="<?=base_url()?>template/plugins/horizontal-menu/horizontal.js"></script>


<!-- CHARTJS CHART -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<!--Chart js -->
<script src="<?=base_url()?>template/plugins/chart/chart.min.js"></script>
<script src="<?=base_url()?>template/plugins/chart/chart.extension.js"></script>


<!-- Peitychart js-->
<script src="<?=base_url()?>template/plugins/peitychart/jquery.peity.min.js"></script>
<script src="<?=base_url()?>template/plugins/peitychart/peitychart.init.js"></script>

<!-- Apexchart js-->
<script src="<?=base_url()?>template/js/apexcharts.js"></script>

<!-- Index js-->
<script src="<?=base_url()?>template/js/index10.js"></script>
<script src="<?=base_url()?>template/js/index1.js"></script>

<script src="<?= base_url('template/');?>plugins/datatable/jquery.dataTables.min.js"></script>
<script src="<?= base_url('template/');?>plugins/datatable/dataTables.bootstrap4.min.js"></script>

<!-- Custom js-->
<script src="<?=base_url()?>template/js/custom.js"></script>
<script src="<?=base_url()?>template/adm/<?=$js;?>"></script>
<script src="<?=base_url()?>template/adm/<?=$js_all;?>"></script>

<script>
 function change_mode() { 
  var ok = sessionStorage.getItem('mode');
  if (ok == 'light') {
   sessionStorage.setItem('mode','dark');
   document.querySelector("link[href='<?=base_url('template/')?>skins/hor-skin/hor-skin1.css']").href = "<?=base_url('template/')?>skins/hor-skin/horizontal-dark.css";
   console.log('mode on dark');
 }else if(ok == 'dark'){
   sessionStorage.setItem('mode','light');
   document.querySelector("link[href='<?=base_url('template/')?>skins/hor-skin/horizontal-dark.css']").href = "<?=base_url('template/')?>skins/hor-skin/hor-skin1.css";
   console.log('mode on light');
 }else{
   sessionStorage.setItem('mode','dark');
   document.querySelector("link[href='<?=base_url('template/')?>skins/hor-skin/hor-skin1.css']").href = "<?=base_url('template/')?>skins/hor-skin/horizontal-dark.css";
   console.log('mode on dark with default');
 }				
}
</script>

<script>
	function initMap() {

   var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: {lat: -6.941041, lng: 107.517584},
    styles:[
    {
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#f5f5f5"
      }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
      {
        "visibility": "off"
      }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#616161"
      }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
      {
        "color": "#f5f5f5"
      }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#bdbdbd"
      }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#eeeeee"
      }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#757575"
      }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#e5e5e5"
      }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#9e9e9e"
      }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#ffffff"
      }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#757575"
      }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#dadada"
      }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#616161"
      }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#9e9e9e"
      }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#e5e5e5"
      }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#eeeeee"
      }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
      {
        "color": "#c9c9c9"
      }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
      {
        "color": "#9e9e9e"
      }
      ]
    }
    ]
  });

	  // Create an array of alphabetical characters used to label the markers.
	  var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	  // Add some markers to the map.
	  // Note: The code uses the JavaScript Array.prototype.map() method to
	  // create an array of markers based on a given "locations" array.
	  // The map() method here has nothing to do with the Google Maps API.
	  var markers = locations.map(function(location, i) {
      return new google.maps.Marker({
        position: location,
        label: labels[i % labels.length]
      });
    });

	  // Add a marker clusterer to manage the markers.
	  var markerCluster = new MarkerClusterer(map, markers,
      {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
	}
	var locations = [
 {lat: -7.034920, lng: 107.526471},
 {lat: -7.028424, lng: 107.521091},
 {lat: -6.983111, lng: 107.436284},
 {lat: -6.885647, lng: 107.537207},
 {lat: -6.892210, lng: 107.536977},
 {lat: -6.960185, lng: 107.376799},
 ]
</script>
<!-- Replace following script src -->
<script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUFXBbjbdO3QWCZHn_HLR4DbTO878fT6E&callback=initMap"></script>