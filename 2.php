<script>
var NuevoEvento;
$('#Agregar').click(function(){
 RecolectarDatosGUI();
  EnviarInformacion('agregar'NuevoEvento);


});
function RecolectarDatosGUI(){
  NuevoEvento= {
     id:$('#txtID').val(),
     title:$('#txtTitulo').val(),
     start:$('#txtFecha').val()+" "+$('#txtHora').val(),
     color:$('#txtColor').val(),
     descripcion:$('#txtDescripcion').val(),
     textColor:"#FFFFFF",
     endd:$('#txtFecha').val()+" "+$('#txtHora').val()
};
 }
function EnviarInformacion(accion,objEvento){
      $.ajax({
      type:'POST',
      url:'eventos.php?accion='+accion,
      data:objEvento,
      succes:function(msg){
        if(msg){
          $('#Calendariow').fullCalendar('refetchEvents');
          $("#Modaleventos").modal('toggle');
        }
      },
    error: function(){
      alert("Hay un error ..");
    }

  )};
