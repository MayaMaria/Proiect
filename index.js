// ajax call
$("#subscribe-submit").on('click', function() {
    var formData = $("#subscribe-form").serializeArray(); // get data from form
    var postData = {};
    postData[formData[0].name] = formData[0].value;
    postData[formData[1].name] = formData[1].value;
    $.ajax({
        type: "POST",
        url: "./phpfiles/send_email.php",
        data: postData
      }).done(function( msg ) {
        $("#subscribedFeedback").show();
      });
});