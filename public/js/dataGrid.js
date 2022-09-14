/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/dataGrid.js ***!
  \**********************************/
var dataSource = new kendo.data.DataSource({
  data: toDayTasks,
  schema: {
    model: {
      id: "id",
      // The ID field is a unique identifier that allows the dataSource to distinguish different elements.
      fields: {
        done: {
          type: "boolean",
          editable: true
        },
        id: {
          type: "number",
          editable: false
        },
        // The ID field in this case is a number. Additionally, do not allow users to edit this field.
        title: {
          type: "string",
          editable: false
        },
        description: {
          type: "string",
          editable: false
        },
        due_date: {
          type: "date",
          editable: false
        }
      }
    }
  }
});
$("#filter").kendoFilter({
  dataSource: dataSource,
  applyButton: true,
  fields: [{
    name: "id",
    type: "number",
    label: "ID"
  }, {
    name: "title",
    type: "string",
    label: "Titre"
  }]
});
$("#tasks-grid").kendoGrid({
  // Add some basic configurations such as width and height.
  width: "100%",
  height: "400px",
  // Add toolbar buttons for creating and saving buttons.
  toolbar: ["create", "save"],
  // Enable the filtering functionality.
  filterable: true,
  // The columns configuration is an array of objects.
  columns: [// The field matches the ID property in the data array.
  {
    field: "done",
    title: "Fait",
    width: "30px"
  }, {
    field: "id",
    title: "Id tâche",
    width: "50px"
  }, {
    field: "title",
    title: "Titre",
    width: "150px"
  }, {
    field: "description",
    title: "Description",
    width: "150px"
  }, {
    field: "due_date",
    title: "Date d'échéance",
    width: "200px",
    format: "{0:dd-MM-yyyy}"
  }],
  // where the data is puting
  dataSource: dataSource
});
/******/ })()
;