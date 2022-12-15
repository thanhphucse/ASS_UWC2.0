function editVehicle(){
    let e = document.getElementsByTagName("input");
    e[0].disabled = false;
    document.getElementById("change").style.display = "block";
}

function changeInfo(){
    document.getElementById("change").style.display = "none";
}

let e = document.getElementsByTagName("td");
for (let i of e){
    if (i.innerHTML.length > 8){
        i.style.background = "lavender";
        i.style.color = "forestgreen";
    }
}

const d = new Date();
let day = d.getDay();
day = (day + 7) % 8;
let today = document.getElementsByTagName("tr");
today[day].style.color = "cornflowerblue";