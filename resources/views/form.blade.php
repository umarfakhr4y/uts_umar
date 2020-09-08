<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="proses" method="post">
        @csrf
        <input type="text" name="angka1" placeholder="angka1">
        <select name="operasi" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value=":">:</option>
            <option value="X">x</option>
          </select>
        <input type="text" name="angka2" placeholder="angka2">
        <input type="submit" value="Submit">
    </form>
</body>
</html>