<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="/file/storage"  mathod = "POST"  enctype = "multipart/form-data">
        @csrf
        <h2> File Upload</h2>
        <input type="file" name = "logo">
        <br><br>
        <hr>
        <input type="submit" name = "Upload">
    </form>
</body>
</html>