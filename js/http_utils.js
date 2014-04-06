function post(path, type, data) {
    var request = new XMLHttpRequest();
    request.onreadystatechange=state_change;

    request.open(type, path, true);
    //request.setRequestHeader("Referer", "http://www.google.com");
    //request.setRequestHeader("User-Agent", "Mozilla/5.0");
    request.setRequestHeader("Accept","application/json");
    request.setRequestHeader("Content-Type","application/json");
    //request.setRequestHeader("Access-Control-Allow-Origin", "http://ideavine.co");
    //request.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    //request.setRequestHeader('X-Alt-Referer', 'http://www.google.com');
    
    request.send(data);
        function state_change()
    {
    if (request.readyState==4)
      {// 4 = "loaded"
      if (request.status==200)
        {// 200 = OK
        // ...our code here...
        //alert('ok');
        }
      else
        {
        //alert("Problem retrieving XML data");
        }
      }
    }
}