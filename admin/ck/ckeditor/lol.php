<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">
    <title>File Manager Integration</title>
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>
<body>
    <textarea cols="10" id="editor1" name="editor1" rows="10" >
    </textarea>
    <script>
            CKEDITOR.replace( 'editor1', {
            height: 400,
            filebrowserUploadUrl: "/fileupload.php",
            } );
    </script>
</body>
</html>