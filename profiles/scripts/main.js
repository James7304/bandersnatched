
var data = {

    "horror":Math.floor(Math.random()*5 + 1),
    "fantasy":Math.floor(Math.random()*5 + 1),
    "time":Math.floor(Math.random()*5 + 1),
    "family":Math.floor(Math.random()*5 + 1),
    "topia":Math.floor(Math.random()*5 + 1),

}
var currentProfile = data;

function populate(info){

}

function generate(accept, recalc=true){

    if(recalc){

        if(accept){
            for(let p in data){
                if(data[p] > currentProfile[p]){
                    data[p]++;
                }
                else if(data[p] < currentProfile[p]){
                    data[p]--;
                }
                else if(data[p] != 1 && data[p] != 5){
                    data[p] += Math.random() < 0.5 ? 1 : -1
                }
            }
        }
        else{
            for(let p in data){
                if(data[p] < currentProfile[p]){
                    data[p]++;
                }
                else if(data[p] > currentProfile[p]){
                    data[p]--;
                }
                else if(data[p] != 1 && data[p] != 5){
                    data[p] += Math.random() < 0.5 ? 1 : -1
                }
            }
        }
    }

    var http = new XMLHttpRequest();
    var url = './profiles/scripts/generator.php';
    http.open('POST', url, true);

    //Send the proper header information along with the request
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            populate(http.responseText);
        }
    }
    http.send('data=' + JSON.stringify(data));
}

generate(true, false);