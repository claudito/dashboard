function loadData_barra(){
    var parametros = {"action":"ajax"};
    $("#loading_barra").fadeIn('slow');
    $.ajax({
      url:'reportes/top-compras-barras.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loading_barra").html("cargando...");
      },
      success:function(data){
        $("#data_externa_barra").html(data).fadeIn('slow');
        $("#loading_barra").html("");
      }
    })
  }