<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Meu Teste de Push</title>
  <script src="pmjurisatualizacao/js/jquery.min.js"></script>
	<script>
		$(function(){
    	navigator.serviceWorker.register('serviceworker.js');
	    $("#mynotify").click(function(){
        Notification.requestPermission().then(function(permission){
        	if(permission != "granted"){
            alert("Notification failed!");
            return;
          }
          navigator.serviceWorker.ready.then(function(registration){
            registration.showNotification( "Hello world", { body:"Here is the body!" } );
          });
        });
    	});
		});
	</script>
</head>
<body>
  <input id="mynotify" type="button" value="Trigger Notification" />
</body>
</html>
<!--
<script type="text/javascript">
	navigator.serviceWorker.register('serviceworker.js');
	Notification.requestPermission(function(result){
	  if (result === 'granted') {
	    navigator.serviceWorker.ready.then(function(registration) {
	      registration.showNotification('Notification with ServiceWorker');
	    });
	  }
	});


	/*
	navigator.serviceWorker.register('serviceworker.js');
	function showNotification() {
	  Notification.requestPermission(function(result) {
	    if (result === 'granted') {
	      navigator.serviceWorker.ready.then(function(registration) {
	        registration.showNotification('Vibration Sample', {
	          body: 'Buzz! Buzz!',
	          icon: '../images/touch/chrome-touch-icon-192x192.png',
	          vibrate: [200, 100, 200, 100, 200, 100, 200],
	          tag: 'vibration-sample'
	        });
	      });
	    }
	  });
	}

	showNotification();
	
	/*
	function notifyMe() {
	  // Let's check if the browser supports notifications
	  if (!("Notification" in window)) {
	    console.log("This browser does not support desktop notification");
	  }

	  // Let's check whether notification permissions have alredy been granted
	  else if (Notification.permission === "granted") {
	    // If it's okay let's create a notification
	    var notification = new Notification("Hi there!");
	  }

	  // Otherwise, we need to ask the user for permission
	  else if (Notification.permission !== 'denied' || Notification.permission === "default") {
	    Notification.requestPermission(function (permission) {
	      // If the user accepts, let's create a notification
	      if (permission === "granted") {
	        var notification = new Notification("Hi there!");
	      }
	    });
	  }

	  // At last, if the user has denied notifications, and you 
	  // want to be respectful there is no need to bother them any more.
	}

	notifyMe();
	*/
</script>