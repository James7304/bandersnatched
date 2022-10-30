
var data = {

    "horror":Math.floor(Math.random()*5 + 1),
    "fantasy":Math.floor(Math.random()*5 + 1),
    "time":Math.floor(Math.random()*5 + 1),
    "family":Math.floor(Math.random()*5 + 1),
    "topia":Math.floor(Math.random()*5 + 1),

}

function generate(accept){

    var http = new XMLHttpRequest();
    var url = './profiles/scripts/generator.php';
    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            alert(http.responseText);
        }
    }
    http.send('data=' + JSON.stringify(data));
}

console.log(data);