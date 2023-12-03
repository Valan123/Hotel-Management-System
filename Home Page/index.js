function handleSubmit(){

    var price = document.getElementById("price").innerHTML;
    localStorage.setItem("Price", price)
    var room_type = document.getElementById("room_type").innerHTML;
    localStorage.setItem("Room Type",room_type)
    var adults = document.getElementById("adults").innerHTML;
    localStorage.setItem("Adults",adults)

}