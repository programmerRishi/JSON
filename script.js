function jsonCall() {
  var xmlhttp= new XMLHttpRequest();
  console.log(xmlhttp);
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState===4 && xmlhttp.status===200) {
      myObj = JSON.parse(xmlhttp.responseText);
      console.log(myObj);
      document.getElementById('demo').innerHTML = myObj.array[0] + "," +myObj.array[1];
    }
  };
  xmlhttp.open("GET","demo.txt",true);
  xmlhttp.send();
}
