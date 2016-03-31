app_publ_key = "CBAFPKKFEBABABABA";

check = window.location.href;
check = decodeURIComponent(check);
if (check.indexOf('"type":"success"') > 0){
	window.open('http://192.168.88.1/login?login=pass','_self',false);
}

if (hash = window.location.hash) {
	// get get query
	hash = window.location.hash
	hash = hash.substring(1);
	vars= hash.split("&");
	pair = [];
	total = {};

	for (var i = 0; i < vars.length; i++) {
		pair= vars[i].split("=");
		total[pair[0]] = pair[1];
	};

	var access_token = total["access_token"];
	var session_secret_key = total["session_secret_key"];
	
};

if (access_token != null && session_secret_key != null) {

	sign=hex_md5("application_key="+app_publ_key+"method=users.getCurrentUser"+session_secret_key);
	sign = sign.toLowerCase();

	xmlhttp = new XMLHttpRequest();

	attachment = JSON.stringify({"media":[{"type":"text","text":message}, {"type":"link", "url":link} ]});
	//attachment = encodeURIComponent(attachment);
	returnUrl = "http://clientfrom.net/";
	//returnUrl = encodeURIComponent(returnUrl);
	signature = hex_md5("st.attachment=" + attachment + "st.return=" + returnUrl + session_secret_key).toLowerCase();
	
	query = "http://connect.ok.ru/dk?st.cmd=WidgetMediatopicPost&st.app=1151988736&st.attachment=" + attachment + "&st.signature=" + signature + "&st.access_token=" + access_token  + "&st.return=" + returnUrl;
	
	window.open(query,"_self");
	window.location.hash= "";


};