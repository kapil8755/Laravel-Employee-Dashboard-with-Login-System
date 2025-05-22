<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background: white;
            padding: 40px 50px;
            border-radius: 10px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        button {
            width: 100%;
            background: #3490dc;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #2779bd;
        }
    </style>
</head>
<body>

<div class="register-box">
    <h2>Update here</h2>
    <form action="/update" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="<?php echo $coll['id'];?>">
        <input type="text" name="name" placeholder="Name" required value="<?php echo $coll['name'];?>">
        <input type="text" name="age" placeholder="Age" required value="<?php echo $coll['age'];?>">
        <input type="text" name="salary" placeholder="salary" required value="<?php echo $coll['salary'];?>">
        <input type="file" name="image">
        <img src="{{url('storage/public/' . $coll->image)}}" alt="Image" width="100px" height="100px"></td>



        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>
