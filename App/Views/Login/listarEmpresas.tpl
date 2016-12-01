<form id="fileUploadForm" name="fileUploadForm" action="Login/uploadExample" method="post" enctype="multipart/form-data">
      <input type="file" id="file1" name="file1" />
<span onclick="teste()" >Save</span>
</form>

<script>

function teste()
{
     $('#fileUploadForm').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            console.log(percentVal);
        },
        complete: function(response) {
            var responseJson = $.parseJSON(response.responseText);
            alert(responseJson.message);
        }
    }).submit();
}
</script>
