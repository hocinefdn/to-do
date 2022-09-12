/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/components.js ***!
  \************************************/
// dropdown menu desktop
$("#user-menu-button").on("click", function () {
  if ($(".dropdown-menu").first().is(":hidden")) {
    $(".dropdown-menu").slideDown("slow");
  } else {
    $(".dropdown-menu").slideUp("slow");
  }
}); // dropdown menu mobile

$(".btn-dropdown-menu").on("click", function () {
  if ($(".main-menu").first().is(":hidden")) {
    $(".main-menu").slideDown("slow");
  } else {
    $(".main-menu").slideUp("slow");
  }
}); // button add task

$("#btn-add-task").on("click", function () {
  if ($("#form-add-task").is(":hidden")) {
    $("#form-add-task").slideDown("slow");
    $("#btn-add-task").html('<button class="p-1 rounded-md" id="btn-add-task"><span class="items-center text-gray-500 hover:text-red-500">Annuler</span></button>');
  } else {
    $("#form-add-task").slideUp("slow");
    $("#btn-add-task").html(' <button class="flex flex-row p-1 rounded-md" id="btn-add-task"><span class="material-symbols-outlined text-red-500">add</span><span class="items-center text-gray-500 hover:text-red-500">Ajouter une tâche</span></button>');
  }
});
/******/ })()
;