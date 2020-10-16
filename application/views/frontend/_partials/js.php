<script src="<?=base_url('template2/');?>js/jquery.min.js"></script>
<script src="<?=base_url('template2/');?>js/plugins.js"></script>
<script src="<?=base_url('template2/');?>js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUFXBbjbdO3QWCZHn_HLR4DbTO878fT6E&libraries=places&callback=initAutocomplete"></script>            
<script src="<?=base_url('template2/');?>js/map-plugins.js"></script>
<script src="<?=base_url('template2/');?>js/map-listing.js"></script>
<script src="<?=base_url('template2/');?>front/all.js"></script>
<script src="<?=base_url('template2/');?>js/shop.js"></script>
<script src="<?=base_url('template2/');?>js/map-listing.js"></script>
<?php if(!empty($js_all)){
    echo "<script src=".base_url('template2/front/'.$js_all)."></script>";
}  ?>  

<?php if(!empty($js)){
    echo "<script src=".base_url('template2/front/'.$js)."></script>";
}  ?>  