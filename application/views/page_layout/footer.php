<div class="modal fade" id="registerModal" role="dialog" aria-hidden="true" tabindex="-1">
	<div class="modal-dialog cotn_principal">
		<div class="cont_centrar">
			<div class="cont_login">
			<div class="cont_info_log_sign_up">
				<!-- <button type="button" class="close close-login" data-dismiss="modal" aria-label="Close" style="opacity: 0.5;"><span aria-hidden="true" class="fa fa-times-circle-o" style="color:red"></span></button> -->
				<div class="col_md_login">
				<div class="cont_ba_opcitiy">
					<h2>LOGIN</h2>  
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
					<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
				</div>
				</div>
				<div class="col_md_sign_up">
				<div class="cont_ba_opcitiy" style="margin-top:40px;">
					<h2>SIGN UP</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
				</div>
				</div>
				<div class="col-md-12">
				<button type="button" class="close close-login" data-dismiss="modal" aria-label="Close" style="opacity: 0.5;"><span aria-hidden="true" class="fa fa-times-circle-o" style="color:white;font-size:64px;"></span></button>
				</div>
			</div>
			<div class="cont_back_info">
				<div class="cont_img_back_grey">
				<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
				</div>          
			</div>
			<div class="cont_forms" >
				<div class="cont_img_back_">
					<img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
				</div>

				<form class="cont_form_login" id="login_form" action="<?php echo site_url().'home/login'?>" method="POST">
					<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
					<h2>LOGIN</h2>
					<input type="email" placeholder="Email" id="login_email" name="login_email" required />
					<input type="password" placeholder="Password" id="login_password" name="login_password" required />
					<button class="btn_login" onclick="cambiar_login()">LOGIN</button>
					<a href="#" class="forget center-block"> Forget password ? </a>  
					<input type="text" class="forget_field" placeholder="Email" />
					<button class="reset_btn"> RESET </button>
				</form>

				<form class="cont_form_sign_up" id="signup_form" action="<?php echo site_url().'home/register'?>" method="POST">
					<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
					<h2>SIGN UP</h2>
					<input type="email" placeholder="Email" id="up_email" name="up_email" required/>
					<input type="text" placeholder="User" id="up_name" name="up_name" required/>
					<input type="password" placeholder="Password" id="up_password" name="up_password" required/>
					<input type="password" placeholder="Confirm Password" id="up_confirmpass" name="up_confirmpass" required/>
					<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

	<script src="<?php echo site_url() ?>assets/js/index.js" type="text/javascript"></script>
	<script src="<?php echo site_url() ?>assets/js/bootstrap-datetimepicker.js"></script>
	<script src="<?php echo site_url() ?>assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>assets/login_sign/index.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>assets/js/forget.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>assets/js/jquery.easy-autocomplete.min.js"></script>
	<script type="text/javascript">
		var base_url = "<?php echo site_url()?>"
		$('#signup_form').submit(function(){
			$.ajax({
				url: this.action,
				type: this.method,
				data: $(this).serialize(),
				dataType: 'json',
				success: function(response) {
					if(response.status == 'error') {
						alert(response.message);
					}else if(response.status == 'success'){
						alert('You are successfully regisetered');
						location.href = 'http://verbraucher.myservicescout.de/';
					}
				}
			});
			return false;
		});

		$('#login_form').submit(function() {
			$.ajax({
				url: this.action,
				type: this.method,
				data: $(this).serialize(),
				dataType: 'json',
				success: function(response) {
					if(response.status == 'error') {
						alert(response.message);
					}else if(response.status == 'success'){
						alert('You are successfully login');
						console.log(response.response);
						var enc_userid = response.response.user_id;
						location.href = "http://verbraucher.myservicescout.de?id="+enc_userid;
					}
				}
			});
			return false;
		})
	</script>
</body>
</html>