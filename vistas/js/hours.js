$(".hours").on("click", function(){
	 var hr = $(".hr").val()
	 var date = $(".date").val()
	 var rate = $(".rate").val()
	 var user = $(".user").val()
	 
	 var data = new FormData();

	 data.append("hr", hr);
	 data.append("date", date);
	 data.append("rate", rate);
	 data.append("user", user);

	 	$.ajax({
		url: "ajax/hours.ajax.php",
		method: "POST",
		data: data,
		cache: false,
		contentType: false,
		processData: false,
		success: function(respuesta){
			
				if(respuesta == "ok"){

						swal({
						  type: "success",
						  title: "El turno ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "hours";

							}
						})
					}
		}
	})

});	