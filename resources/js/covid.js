document.queryselector('#submitBtn').addEventListener('click',loadCorona);

function loadCorona (){

	const countryName = document.getElementById('countryName').value;

	let url =  "https://covid-19-coronavirus-statistics.p.rapidapi.com/v1/stats?";

	url += `country=${countryName}`;

	var data = null;

	var xhr = new XMLHttpRequest();
	xhr.withCredentials = true;

	xhr.addEventListener("readystatechange", function () {
		if (this.readyState === this.DONE) {
			console.log(this.responseText);
		}
	});

	xhr.open("GET",url,true);
    xhr.setRequestHeader("x-rapidapi-host", "covid-19-coronavirus-statistics.p.rapidapi.com");
    xhr.setRequestHeader("x-rapidapi-key", "f251574687msha9dc39868f32088p1ee0bcjsnf219740da95a");
    
    xhr.onload = function (){
    	if(this.status===200){
    		const response = JSON.parse(this.responseText);
    		const covidList = response.data.covid19stats;
    		console.log(covidList);
    		if(countryName != ''){
    			let output = '';
    			covidList.forEach(covidInfo =>{
                     output += `

                    <div class="col-sm-4 pb-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-text">
                                <h2 class="text-center card-title">${covidInfo.country}</h2>
                                  <div>Province:<span style="float:right; color:green">${covidInfo.province}</span></div>
                                  <div>Confirmed:<span style="float:right; color:orange">${covidInfo.confirmed}</span></div>
                                  <div>Recovered:<span style="float:right; color:lightgreen">${covidInfo.recovered}</span></div>
                                  <div>Deaths:<span style="float:right; color:red">${covidInfo.deaths}</span></div>
                                </div>
                            </div>
                        </div>
                    </div>            

                     `
    			});

    			document.queryselector('#result').innerHTML = output;
    		} else{
    			printMessage('please type a country or city','alert alert-danger mt-2 text-center');
    		}
    	}
    }

    xhr.send(data);

}

// display the message

function printMessage(message, className){
	// create a div
    const div = document.createElement('div');
	div.className = className;
	// add the text
	div.appendChild(document.createTextNode(message));
	const searchDiv = document.queryselector('.card-body');
	searchDiv.appendChild(div);

	// remove message

	setTimeout(()=>{
		this.removeMessage()
	},3000);
}

function removeMessage (){
	const alert = document.queryselector('.alert');
	if(alert){
		alert.remove();
	}
}