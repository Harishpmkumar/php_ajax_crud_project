$(document).ready(function () {
  $("#email").val("");
  $("#password").val("");
  $("#update").hide();

  function reloadTableData() {
    $.ajax({
      type: "GET",
      url: "table_data.php",
      success: function (data) {
        $("#myTable tbody").html(data);
      },
      error: function (xhr, status, error) {
        console.error("Error reloading table data:", error);
      },
    });
  }

  // when submit button clicks
  $("#submit").on("click", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "insert.php",
      data: $("#submitForm").serialize(),
      success: function (data) {
        alert("successfully inserted");
        $("#email").val("");
        $("#password").val("");
        reloadTableData();
      },
      error: function (xhr, status, error) {
        console.error("Insertion error:", error);
      },
    });
  });

  //when edit button clicks
  $(document).on("click", ".edit", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "GET",
      url: "edit.php",
      data: { id: id },
      success: function (data) {
        var editData = JSON.parse(data);
        $("#id").val(editData.id);
        $("#email").val(editData.email);
        $("#password").val(editData.password);
        $("#update").show();
        $("#submit").hide();
      },
      error: function (xhr, status, error) {
        console.error("Edit error:", error);
      },
    });
  });

  // when update button clicks
  $("#update").on("click", function (e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "update.php",
      data: $("#submitForm").serialize(),
      success: function (data) {
        alert("updated successfully");
        $("#email").val("");
        $("#password").val("");
        $("#update").hide();
        $("#submit").show();
        reloadTableData();
      },
      error: function (xhr, status, error) {
        console.error("Update error:", error);
      },
    });
  });

  //when delete button clicks
  $(document).on("click", ".delete", function (e) {
    e.preventDefault();
    var id = $(this).data("id");
    if (confirm("Are you sure you want to delete this record ?")) {
      $.ajax({
        type: "GET",
        url: "delete.php",
        data: { id: id },
        success: function (data) {
          alert("Deleted successfully");
          reloadTableData();
        },
        error: function (xhr, status, error) {
          console.error("Delete error:", error);
        },
      });
    }
  });
});
