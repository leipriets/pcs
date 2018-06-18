		<footer class="lowin-footer">
			Copyright <a href="#">@ 2018</a>
		</footer>
	</div>
</body>
	<script src="<?=base_url('assets/js/auth.js')?>"></script>
     <script src="<?=base_url('assets/js/core/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
	<script>
		Auth.init({
			login_url: '#login',
			forgot_url: '#forgot'
		});

		$(document).ready(function(){

			$(".forgot-link").click(function(){
				$("#email").focus();
			});

			$(".lowin .lowin-box p").css({'color':'#fff'});


			$(".register-btn").click(function(e){

				var FormData = $(".form-register").serialize();

				$.ajax({
					url :"<?= site_url('auth/auth_register'); ?>",
					type: 'post',
					dataType:'json',
					data: FormData,
					success:function(msg){

						var notif = "<div class='alert alert-"+msg['notif'].type+" col-sm-12' role='alert'>"+msg['notif'].message+"</div>";

						if (msg) {
							$("#register-alert").html(notif);
						}


					}



				});


			});


		});


	</script>
</body>
</html>