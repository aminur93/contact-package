<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="your message"></textarea>
        <input type="submit" value="submit">
    </form>
</body>
</html>