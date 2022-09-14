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
$(".test").click({
  param1: "Hello",
  param2: "World"
}, cool_function); // in your function, just grab the event object and go crazy...

function cool_function(event) {
  alert(event.data.param1);
  alert(event.data.param2);
} // function test(id) {
//     alert(id);
//     // $.ajax({
//     //     type: "POST",
//     //     url: "someurl.php",
//     //     data: "id=" + id + "&name=" + name,
//     //     success: function (msg) {
//     //         alert("Data Saved: " + msg);
//     //     },
//     // });
// }
// show Edit Dialog
// $(".test").on("click", function () {
//     const dialog = $(".dialog-edit-task").html(
//         `<form id="form-add-task" method="POST" class="p-6 w-2/3 ml-auto mr-auto border border-gray rounded-md">
//             <div class="flex flex-col">
//             <input type="text" name="title" placeholder="ex : Acheter un cadeau"
//                 class="rounded border-none focus:bg-gray-100 mb-1">
//             <textarea name="description" cols="30" rows="2" placeholder="Description"
//                 class="rounded border-none focus:bg-gray-100"></textarea>
//             <input type="date" name="due_date">
//             </div>
//             <div class="p-3 flex justify-end">
//             <button class="flex flex-row p-1 rounded-md bg-red-500 text-white pr-4 hover:bg-red-400">
//                 <span class="material-symbols-outlined">add</span>
//                 <span class="items-center">Ajouter une tâche</span>
//             </button>
//             </div>
//         </form>`
//     );
//     $.ajax({
//         type: "PUT",
//         headers: {
//             "Content-Type": "application/json",
//             Accept: "application/json, text-plain, */*",
//             "X-Requested-With": "XMLHttpRequest",
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//         url: "task/",
//         data: JSON.stringify(values),
//         success: async function (response) {
//             // display notification
//             DevExpress.ui.notify(response.message, "success");
//             await new Promise((resolve) => {
//                 let dataSource = dataGrid.getDataSource();
//                 dataSource.store().push([
//                     {
//                         type: "update",
//                         key: response.data.id,
//                         data: response.data,
//                     },
//                 ]);
//                 return resolve();
//             });
//             // repaint only the updated row in datagrid
//             dataGrid.saveEditData();
//             $(".loading").hide();
//         },
//         error: function (error) {
//             let obj = error.responseJSON.errors;
//             let errorMessages = "";
//             Object.keys(obj).forEach((key) => {
//                 errorMessages += obj[key][0] + "\n";
//             });
//             DevExpress.ui.notify(errorMessages, "error", 6000);
//             $(".loading").hide();
//         },
//     });
//     // $("input#title", dialog).val(selectedParticipant.id);
// });
/******/ })()
;