	jQuery(function())
	{
		function getALL()
		{
				$.ajax({
					url : 'DataController.php',
					data: 'action=show-all',
					cache: false,
					success: function(response){
						//jika berhasil
						$("#show-tb_ikan").html(response);
					}
				});
		}

		getALL(); //load jika data ready

		//ketika ada event change
		$("#gettb_ikan").change(function()
		{
			var i = $(this.)fint(":selected").val();
			var dataString = 'action'+i;

				$.ajax({
					url: 'DataController.php',
					data: dataString,
					cache: false,
					success:function(response){
						$("#show-tb_ikan").html(response);
					}
				});
		})
	});