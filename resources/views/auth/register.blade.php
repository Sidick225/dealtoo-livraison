<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Inscription Deli</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/x-icon">
	<!--Custom styles-->
	<style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
        background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        }

        .container{
        height: 100%;
        align-content: center;
        }

        .card{
        /* height: 370px; */
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
        font-size: 40px;
        margin-left: 10px;
        color: #FFC312;
        }

        .social_icon span:hover{
        color: white;
        cursor: pointer;
        }

        .card-header h3{
        color: white;
        }

        .social_icon{
        position: absolute;
        right: -20px;
        top: -55px;
        }

        .input-group-prepend span{
        width: 50px;
        background-color: #FFC312;
        color: black;
        border:0 !important;
        }

        input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

        }

        .remember{
        color: white;
        }

        .remember input
        {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
        }

        .login_btn{
        color: black;
        background-color: #FFC312;
        /* width: 100px; */
        }

        .login_btn:hover{
        color: black;
        background-color: white;
        }

        .links{
        color: white;
        }

        .links a{
        margin-left: 4px;
        }
    </style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">

                <a href="/"><img class="mainLogo" src="{{asset('assets/thumb-816x460-logo-6659f6148571a.png')}}" alt=""></a>
                <div class="d-flex justify-content-end social_icon">
                    <img id="profilePreview" src="" alt="" style="max-height: 100px; max-height: 100px">
                </div>
			</div>

            <h3 style="text-align: center; color:white; margin-top: 25px">Inscription</h3>
			<div class="card-body">
				<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label for="profile" class="text-white">Image de profil</label>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="file" name="profile" id="profile" class="form-control" required>
					</div>
                    @error('profile')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input type="text" name="name" class="form-control" placeholder="Nom et prénoms" required>
					</div>
                    @error('name')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div>
                    @error('email')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-mobile"></i></span>
						</div>
						<input type="text" name="contact" max="15" class="form-control" placeholder="Contact" required>
					</div>
                    @error('contact')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
					</div>
                    @error('password')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer le mot de passe" required>
					</div>
                    @error('password_confirmation')
                        <span style="color:red">{{$message}}</span>
                    @enderror
					{{-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> --}}
                    <br>
					<div class="form-group">
						<input type="submit" value="S'inscrire" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					j'ai déjà un compte ?<a href="/login">Se connnecter</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
document.getElementById('profile').addEventListener('change', function() {
    var input = document.getElementById('profile');
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('profilePreview').src = e.target.result;
            document.getElementById('profilePreview').style.display = 'block'; // Pour afficher l'élément
        }

        reader.readAsDataURL(input.files[0]);
    }
});

</script>
</body>
</html>
