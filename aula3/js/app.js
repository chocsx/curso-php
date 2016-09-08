$(document).ready(function(){


	$('body').on('submit','.formTarefa', function(){
		$self = $(this);
		
		var callback = function(resp){


			if(resp.success = "true"){
				swal({
					title:'Bom Trabalho!',
					text: resp.msg,
					type: "success",

				},
				function(isConfirm){
					$('body').load(resp.location);	
				});
				
			}

			if(resp.success){
				$self[0].reset();
			}		
		}

		$.ajax({
			url: $self.attr('action'),
			type: 'post',
			dataType: 'json',
			data: $self.serializeArray(),
			success: callback,
			error: function(){
				callback({success:false,msg:"Não foi possivel enviar o formulário"});
			}
		});
		return false;
	})

	// $('.addTarefa').click(function(){
	// 	swal("Bom Trabalho!", "Sua Tarefa foi adicionada com sucesso!", "success");
	// 	return false;
	// });
})