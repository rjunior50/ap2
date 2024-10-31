<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form id="imc-form">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" required><br>
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" step="0.01" required><br>
        <button type="button" onclick="calcularIMC()">Calcular IMC</button>
    </form>
    <p id="resultado" aria-required="true"></p>

    <script>
        function calcularIMC() {
            const peso = document.getElementById('peso').value;
            const altura = document.getElementById('altura').value;

            if (!peso || !altura) {
                document.getElementById('resultado').innerText = "Por favor, insira peso e altura para calcular o IMC.";
                return;
            }

            const imc = (peso / (altura * altura)).toFixed(2);
            let mensagem = "";

            if (imc < 18.5) {
                mensagem = "Abaixo do peso.";
            } else if (imc >= 18.5 && imc <= 24.9) {
                mensagem = "Peso normal.";
            } else if (imc > 24.9) {
                mensagem = "Acima do peso.";
            }

            document.getElementById('resultado').innerText = `Seu IMC é ${imc}. ${mensagem}`;
        }
    </script>
</body>
</html>
