// gets a reference to the mainContent section of 
// the equipment page on the IT-DEPT web page
const mainContent = document.getElementById("main-content--Display--area");
// Select the various equipment links
const opScan = document.querySelectorAll(".Scan");
const omr = document.querySelectorAll(".OMR");
const eliteDesk = document.querySelectorAll(".EliteDesk");
const windows = document.querySelectorAll(".Windows");
const opScan1 = opScan[0];
const opScan2 = opScan[1];
const omr1 = omr[0];
const omr2 = omr[1];
const eliteDesk1 = eliteDesk[0];
const eliteDesk2 = eliteDesk[1];
const windows1 = windows[0];
const windows2 = windows[1];
const image = document.createElement("img");
image.className = "dynamic-image equipment-image";

// Add on click event listeners to each of the equipment links
opScan1.addEventListener("click", (event) => {
    image.src = "https://www.scantron.com/wp-content/uploads/2018/08/OpScan-6.jpg";
    image.alt = "Scantron Opscan6";
    mainContent.appendChild(image);
});

opScan2.addEventListener("click", (event) => {
    image.src = "https://www.scantron.com/wp-content/uploads/2018/08/OpScan-6.jpg";
    image.alt = "Scantron Opscan6";
    mainContent.appendChild(image);
});


omr1.addEventListener("click", (event) => {
    image.src = "https://cdn0.capterra-static.com/screenshots/2024562/19424.png";
    image.alt = "Remark Classic OMR";
    mainContent.appendChild(image);
});

omr2.addEventListener("click", (event) => {
    image.src = "https://cdn0.capterra-static.com/screenshots/2024562/19424.png";
    image.alt = "Remark Classic OMR";
    mainContent.appendChild(image);
});

eliteDesk1.addEventListener("click", (event) => {
    image.src = "https://images-na.ssl-images-amazon.com/images/I/71J61IOgdJL._SX425_.jpg";
    image.alt = "HP EliteDesk 8080 GL";
    mainContent.appendChild(image);
});

eliteDesk2.addEventListener("click", (event) => {
    image.src = "https://images-na.ssl-images-amazon.com/images/I/71J61IOgdJL._SX425_.jpg";
    image.alt = "HP EliteDesk 8080 GL";
    mainContent.appendChild(image);
});

windows1.addEventListener("click", (event) => {
    image.src = "https://mysoftwarekeys.com/wp-content/uploads/2018/12/Windows-10-Education-Product-Key.jpg";
    image.alt = "Microsoft Windows 10 Education";
    mainContent.appendChild(image);
});

windows2.addEventListener("click", (event) => {
    image.src = "https://mysoftwarekeys.com/wp-content/uploads/2018/12/Windows-10-Education-Product-Key.jpg";
    image.alt = "Microsoft Windows 10 Education";
    mainContent.appendChild(image);
});