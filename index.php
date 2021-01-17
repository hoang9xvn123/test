<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nhận diên ảnh bằng Google Cloud Vision API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="bg" style="background-image: url('bg.jpg');">
    <div class="container">
        <br><br><br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">
                <div class="panel-heading">
                    <h2>Bài tập nhận diện ảnh bằng Google Cloud Vision</h2>
                    <p style="font-style: italic;">Nhóm 5 - Cloud Computing</p>
                </div>
                <hr>
                <form action="check.php" method="post" enctype="multipart/form-data">
                    <label for="anh">Ảnh cần nhận diện</label>
                    <input type="file" name="image" accept="image/*" class="form-control" id="anh">
                    <br>
                    <button type="submit" style="border-radius: 0px;" class="btn btn-lg btn-block btn-outline-success">Phân tích ảnh</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>