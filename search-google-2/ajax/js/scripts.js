$(document).ready(function () {


    $("form").submit(function (e) {
        //prevent submit form
        e.preventDefault();
        
        //get data form contact
        var contact = {
            id: 1,//TODO: create hidden field in form
            name: $('#name').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val(),
        };
        
         $.ajax({
            type: "GET",
            data: contact,
            url: "http://dev.root/demo/contact.php"
        }).done(function (msg) {
            alert("Data Saved: " + msg);
        });
        
    });
});
