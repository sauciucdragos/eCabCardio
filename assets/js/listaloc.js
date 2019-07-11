//document.querySelector("#county").onchange = function(){
      //e.preventDefault();
//document.querySelector("#first_name").onclick = function () {
//document.querySelector("#loc").onclick = function () {
 
 document.querySelector('input[name="county"]').onchange  = function () {

      //alert('Incarcare listaloc.js!');

      
        judet=document.querySelector('input[name="county"]').value;
        //console.log(judet);
        var hr = new XMLHttpRequest();

        var lista = '<option value=" ">(Input city)</option>'; 
        // lista va contine in final elementele <option>
//  Construiesc prototipul unui element <option>
       var prototip = '<option value={city}>{city}</option>';

// Create some variables we need to send to our PHP file
       var url = "php/listaloc.php";


var vars = "county="+judet;
console.log(vars);
hr.open("POST", url, true);
hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
hr.onreadystatechange = function() {            //88
    if(hr.readyState == 4 && hr.status == 200) {  //99


//primesc raspunsul


          var     return_data = hr.responseText;
          var sirobiecte = JSON.parse(hr.responseText);

      //  console.log("returndata finl:" +return_data);
        //console.log("returndata finl2:" +sirobiecte);

//var sirobiecte = JSON.parse(this.responseText);
           var combo = document.querySelector("#city");  // elem. <select>
          sirobiecte.forEach(function(cat) {
               var rind = prototip.replace('{city}', cat.city);
        //rind = rind.replace('{county}', cat.county);
       console.log(cat.dic_city_id+" " + cat.city);
             lista += rind;
           });
           combo.innerHTML = lista;

      
             //document.getElementById("status").innerHTML = return_data;
    }  //99
} //88


// S-a produs o eroare
    hr.onerror = function () {
    alert('Hopa! Ceva n-a mers!');
    };

// Send the data to PHP now... and wait for response to update the status div
hr.send(vars); // Actually execute the request
//document.getElementById("status").innerHTML = "processing...";


};