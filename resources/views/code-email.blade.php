<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <p>Este es su codigo de erificacion: <a href="{{ Storage::disk('spaces')->url($code) }}" download="$code">{{ Storage::disk('spaces')->url($code) }}</a></p>
    <p>No lo comparta con nadie</p>
</body>
</html>
