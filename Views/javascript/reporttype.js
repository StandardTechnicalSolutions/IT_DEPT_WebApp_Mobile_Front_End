/* Gather References to elements of the DOM */
const reportContentArea = document.getElementById("main-content--Display--area");

const studentS = document.querySelectorAll(".r101");
const studentS1 = studentS[0];
const studentS2 = studentS[1];

const classFD = document.querySelectorAll(".r103");
const classFD1 = classFD[0];
const classFD2 = classFD[2];

const studentR = document.querySelectorAll(".r105");
const studentR1 = studentR[0];
const studentR2 = studentR[2];

const studentG = document.querySelectorAll(".r150");
const studentG1 = studentG[0];
const studentG2 = studentG[2];

const detailedIA = document.querySelectorAll(".r201");
const detailedIA1 = detailedIA[0];
const detailedIA2 = detailedIA[2];

const condensedIA = document.querySelectorAll(".r204");
const condensedIA1 = condensedIA[0];
const condensedIA2 = condensedIA[2];

const testS = document.querySelectorAll(".r310");
const testS1 = testS[0];
const testS2 = testS[2];

const testIS = document.querySelectorAll(".r320");
const testIS1 = testIS[0];
const testIS2 = testIS[2];

const image = document.createElement("img");
image.className = "dynamic-image equipment-image";
image.id = "report-image"

/*  EVENT HANDLERS */
const addReportImage1 = (event) => {
    image.src = "/images/101_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
};
const addReportImage2 = (event) => {
    image.src = "/images/103_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
};
const addReportImage3 = (event) => {
    image.src = "/images/105_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}
const addReportImage4 = (event) => {
    image.src = "/images/150_report.jpg";
    image.className = `${image.className} restrict-height`
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}
const addReportImage5 = (event) => {
    image.src = "/images/201_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}
const addReportImage6 = (event) => {
    image.src = "/images/204_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}
const addReportImage7 = (event) => {
    image.src = "/images/310_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}
const addReportImage8 = (event) => {
    image.src = "images/320_report.jpg";
    reportContentArea.innerHTML = "";
    reportContentArea.appendChild(image);
}

/*   EVENT LISTENERS */
studentS1.addEventListener("click", addReportImage1);
studentS2.addEventListener("click", addReportImage1);

classFD1.addEventListener("click", addReportImage2);
classFD2.addEventListener("click", addReportImage2);

studentR1.addEventListener("click", addReportImage3);
studentR2.addEventListener("click", addReportImage3);

studentG1.addEventListener("click", addReportImage4);
studentG2.addEventListener("click", addReportImage4);

detailedIA1.addEventListener("click", addReportImage5);
detailedIA2.addEventListener("click", addReportImage5);

condensedIA1.addEventListener("click", addReportImage6);
condensedIA2.addEventListener("click", addReportImage6);

testS1.addEventListener("click", addReportImage7);
testS2.addEventListener("click", addReportImage7);

testIS1.addEventListener("click", addReportImage8);
testIS2.addEventListener("click", addReportImage8);