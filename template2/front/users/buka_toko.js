var i_loc = document.getElementById("i_loc");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    i_loc.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  $('#lat').val(position.coords.latitude);
  $('#lng').val(position.coords.longitude);
}

$('#form_buka_toko').submit(function (e) { 
  e.preventDefault();
  $.ajax({
      type: "POST",
      url: "./crt_buka_toko",
      secureuri: false,
      contentType: false,
      cache: false,
      processData:false,
      data: new FormData(this),
      dataType: "json",
      // beforeSend: function() {
      //    $('#btn-save').hide();
      //    $('#btn-save-loading').show();
      // },
      success: function (r) {
          if (r.status) {
              // Swal.fire(
              //   'Berhasil',
              //   r.msg,
              //   'success'
              // );
              alert(r.msg);
              $('#form_buka_toko')[0].reset();
              location.assign(r.redirc);

              // $('#btn-save').show();
              // $('#btn-save-loading').hide();

          }else{
              // Swal.fire(
              //   'Gagal',
              //   r.msg,
              //   'error'
              // );
              alert(r.msg);

              // $('#btn-save').show();
              // $('#btn-save-loading').hide();
          } 
      },
      error: function () { 
            // Swal.fire(
            //   'Gagal',
            //   'Terjadi gangguan sistem, harap hubungi developer',
            //   'error'
            // );
            alert('Terjadi gangguan sistem, harap hubungi developer');

            // $('#btn-save').show();
            // $('#btn-save-loading').hide();
       }
  });
});