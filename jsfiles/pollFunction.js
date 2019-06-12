function getVote(int,number,tip) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  var poll=tip;
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById(poll).innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","phpfiles/poll_vote.php?vote="+int+"&number="+number,true);
  xmlhttp.send();
}