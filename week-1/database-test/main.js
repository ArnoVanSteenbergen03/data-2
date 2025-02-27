const $asideClose = document.querySelector(".btn");
const $asideOpen = document.querySelector(".open-aside");
const $asideContainer = document.querySelector(".aside");
$asideOpen.addEventListener("click", clickOpen);
$asideClose.addEventListener("click", clickClose);

function clickOpen() {
    $asideContainer.className = "activator";
    $asideOpen.style.display = "none";
}
function clickClose() {
    $asideContainer.className = "";
    $asideOpen.style.display = "block";
}
