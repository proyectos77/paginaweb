<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Token CSRF necesario -->
    <title>Chatbox</title>
</head>
<body>
    <div id="chatbox">
        <div id="messages">
            <!-- Aquí aparecerán los mensajes -->
        </div>
        <form id="chatForm">
            @csrf <!-- Esto genera el token CSRF necesario en el formulario -->
            <input type="text" id="message" placeholder="Escribe tu mensaje...">
            <button type="submit">Enviar</button>
        </form>
    </div>

    <script>
        document.getElementById('chatForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Evita que la página se recargue

            var message = document.getElementById('message').value;

            fetch('{{ route('chat.send') }}', { // Usa el nombre de la ruta aquí
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    message: message
                })
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('messages').innerHTML += '<p>' + data.reply + '</p>';
                document.getElementById('message').value = '';
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
