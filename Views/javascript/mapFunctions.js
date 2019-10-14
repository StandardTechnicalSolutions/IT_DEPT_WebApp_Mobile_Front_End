/* DOM ELEMENTS */
const mainContentDisplayAreaMap = document.querySelector("#main-content--Display--area");
const mapActivation = document.querySelectorAll(".map");
const desktopMapActivation = document.querySelector("#desktop-map");
const mapActivation1 = mapActivation[0];
const mapActivation2 = mapActivation[1];
const benFrankMapActivation = document.querySelectorAll(".ben-frank-map");
const benFrankMapActivation1 = benFrankMapActivation[0];
const benFrankMapActivation2 = benFrankMapActivation[1];
const image = document.createElement("img");
image.className = "dynamic-image";
let displayMap = false;


/* Event Handlers*/
const showMap = (event) => {
    mainContentDisplayAreaMap.innerHTML = "";
    console.log(mainContentDisplayAreaMap);
    if (!displayMap) {
        console.log("adding Map");
        console.log(mainContentDisplayAreaMap);
        const latLng = { lat: 41.0069, lng: -76.4483 };
        const map = new google.maps.Map(
            mainContentDisplayAreaMap, {
                center: latLng,
                zoom: 18
            }
        )
        //const image = "https://s3.amazonaws.com/connectsports-prod/college_pics/photo-357.jpg";
        const image = "/images/Clipboard.jpg";
        const mapMarker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: "BenFrankLin Hall",
        });
    }
    displayMap = true;
};

const showBenFrankMap = (event) => {
    image.src = "images/exsslayout.png";
    image.alt="Map Of Benjamin Franklin Hall";
    mainContentDisplayArea.innerHTML = "";
    mainContentDisplayArea.appendChild(image);
}

/* Event Listeners*/
mapActivation1.addEventListener("click", showMap);
mapActivation2.addEventListener("click", showMap);
desktopMapActivation.addEventListener("click", showMap);
benFrankMapActivation1.addEventListener("click", showBenFrankMap);
benFrankMapActivation2.addEventListener("click", showBenFrankMap);