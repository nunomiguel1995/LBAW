window.addEventListener("load", function(){
}, true);

function goingToEvent(idNotification,idEvent,idUser){
  var linkref = "../../actions/events/goingToEvent.php?idNotification=" + idNotification+"&idEvent="+ idEvent+"&idUser="+idUser;
  window.location.href = linkref;
}

function notGoingToEvent(idNotification){
  var linkref = "../../actions/events/notGoingToEvent.php?idNotification=" + idNotification;
  window.location.href = linkref;
}
