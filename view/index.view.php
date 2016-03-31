<body>
<div class="container">
	<div class="row">
		<div class="navbar text-center">
			<h2 class="main-text">Для получения доступа к Wi-Fi выберите соц. сеть для авторизации</h2>
		</div>
	</div>
</div>
<div class="container text-center">
	<div class="row">
		<div>
			<a href ="index.php?login=twitter"><img src="images/twitter-button.png" alt="twitter" style="width:auto;height:60px;"></a>
		</div>
		<div>
			<a href ="index.php?login=facebook"><img src="images/facebook-button.gif" alt="facebook" style="width:auto;height:60px;"></a> 
		</div>
		<div id="login_button" onclick="VK.Auth.login(authInfo);" style="margin: 0 auto 5px;"></div>
		<div>
			<a href ="index.php?login=odnoklassniki"><img src="images/odnoklassniki-button.png" alt="Odnoklassniki" style="width:auto;height:60px;"></a> 
		</div>
	</div>
</div>

<div class="container text-center">
	<div id="politika-conf">
		<a href="/Политика конфиденциальности.doc">Политика конфиденциальности</a>
	</div>	
</div>

<script type="text/javascript">
		querySplitter = window.location.search.split("=");
		if (querySplitter[0] == "?from") {
			document.cookie="from=" + querySplitter[1];
		};
</script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="//vk.com/js/api/openapi.js"></script>
<script src="js/cookie.js"></script>
<script src="js/vk.js"></script>
<script src="js/ok.js"></script>

	</body>
</html>