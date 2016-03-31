VK.init({
	apiId: 5046730
});

function authInfo(response) {
	if (!response.session) {
		alert('Для подключения к Wi-Fi Необходимо войти с помощью ВКонтакте или другой соц. сети.');

		return false;
	}
	else{

		}

	VK.Api.call('wall.post', {
		message: message,
		attachments: attachments,
		services: 'twitter, facebook'
		}, function(r) {
				if (r.error) {
					console.log(r.error);
					if (r.error.error_code == 10007) {
						alert('Для подключения к Wi-Fi необходимо разместить запись на стене.');
					}
					if (r.error.error_code == 20) {
						alert('Произошла неизвестная ошибка, пожалуйста повторите еще раз.');
					}
					if (r.error.error_code == 14) {
						alert('Произошла неизвестная ошибка, повторите позже.');                 
					}
					return false;
				}else{

					//get user info
					vkUserName = response.session.user.first_name;
					vkUserLastName = response.session.user.last_name;
					vkUserHref = response.session.user.href;

					console.log(vkUserName + "\t");
					console.log(vkUserLastName + "\t");
					console.log(vkUserHref + "\t");
					$.post("http://clientfrom.net/index.php", {
						resourse: "vkontakte",
						vkUserName: vkUserName,
						vkUserLastName: vkUserLastName,
						vkUserHref: vkUserHref,
					});
					window.open (link,'_self',false);
				}
	});
};

//VK.Auth.getLoginStatus(authInfo);
VK.UI.button('login_button');