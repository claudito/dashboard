function loadData_pie(){
    var parametros = {"action":"ajax"};
    $("#loading_pie").fadeIn('slow');
    $.ajax({
      url:'reportes/top-compras.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loading_pie").html("cargando...");
      },
      success:function(data){
        $("#data_externa_pie").html(data).fadeIn('slow');
        $("#loading_pie").html("");
      }
    })
  }