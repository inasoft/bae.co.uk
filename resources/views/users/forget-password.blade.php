<!DOCTYPE HTML5>
<html lang="en">
<head>
<title>Reset Password | Best Assignment Experts</title>
<meta name="description" content="Best Assignment Experts | Reset your Password">

@include('layout.header')

	<main>
		<section class="fullwidth-background bg-2">
			<div class="grid-row">
				<div class="login-block">
					<div class="logo">
						<img src="https://www.hospitalityalliancetraining.edu.au/sites/1/images/Reset_password.gif" data-at2x='../theme/img/images/logo.jpg' alt="Best Assignment Experts" style="width: 250px;">
						
					</div>
					<!-- <a href="#" class="facebook cws-button border-radius half-button">Facebook</a>
					<a href="#" class="twitter cws-button border-radius half-button">Twitter</a> -->
					
                          
                            <p>Forgot your password? <br>Enter your email to retrive your password. </p>
                            <hr>
                                <div class="input-group form-group">
                                    <input type="text" class="form-control login-input" name="email" placeholder="Enter your Email: ">
                                    <span class="input-icon">
								<i class="fa fa-user"></i>
							</span>
                                </div>
                                     
                                <button type="submit" class="button-fullwidth cws-button bt-color-3 border-radius"><h1>Submit</h1></button>
                                
                            
                       
                    </div>
				</div>
			</div>
		</section>
	</main>
	@include('layout.footer')
	<script type="text/javascript">
         $("button").click(function(){
                    
        $.ajax("/retrive-forgotten-password",
        {
        name: "Donald Duck",
        city: "Duckburg"
        },
        function(data, status)
        {
        alert("Lopd");
        console.log('ANil');
        alert("Data: " + data + "\nStatus: " + status);
        });
        });


	</script>


