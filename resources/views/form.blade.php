<!DOCTYPE html>
<html>
<head>
    <title>Form App</title>
</head>
<body>
    <form method="POST" action="/store">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
