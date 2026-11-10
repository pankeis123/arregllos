<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>numerois ultra pro max aleatiorois infinito hyper</title>
    <style>
        .jamon {
            font-family: sans-serif;
            font-size: 18px;
            color: #fff8f8;
            background-color: #007ac6;
            font-family: Arial, sans-serif;

            flex-direction: column-reverse;
            justify-content: center;
            height: 100vh;
            margin: 0;            
        }
    </style>
</head>
<body>
    <div id="nuneroosselessionados" class="jamon"></div>
    
    <button id="btnMayores">Muestrame la santa trinidad </button>
    <div id="resultadoMayores"></div>

    <script>
    const numerosrandomultra = [];
    for (let i = 0; i < 50; i++) {
            numerosrandomultra.push(Math.floor(Math.random() * 100) + 1); }
    document.getElementById("nuneroosselessionados").textContent = numerosrandomultra.join(", ");
    document.getElementById("btnMayores").addEventListener("click", () => {
        const lasantatrinidad = [...numerosrandomultra].sort((a, b) => b - a).slice(0, 3);
        document.getElementById("resultadoMayores").textContent = "Los 3 más grandes: " + lasantatrinidad.join(", ");
    });
    </script>

</body>
</html>
