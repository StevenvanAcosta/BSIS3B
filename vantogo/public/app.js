function initMap(){
    var options ={
        center: {lat: 14.9968 , lng:-121.1710 },
        zoom:8
    }
    map = new google.maps.Map(document.getElementById("map"),options)
}