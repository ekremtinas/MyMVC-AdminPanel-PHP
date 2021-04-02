<script src='plugins/toastr/toastr.min.js'></script>

<script src="plugins/bvalidator/dist/jquery.bvalidator.js"></script>
<script src="plugins/bvalidator/dist/themes/presenters/default.js"></script>
<script src="plugins/bvalidator/dist/themes/gray/gray.js"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#login-form').bValidator();
$("#login-form").submit(function(e) {

    e.preventDefault();
    var form = $(this);
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           dataType:"html",
           success: function(data)
           {
                console.log(data);
               if(data.trim()=="error")
               {
                toastr.error('Login failed.');
               }
               else{
                toastr.success('Login succesful');

                window.location="?url=home";
               }
           }
         });

});



});
     </script>
