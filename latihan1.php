
<!DOCTYPE html>
<html>
<head>
    <title>Kelipatan 3 dan 5</title>
</head>
<body>

    <h2>Angka Kelipatan 3 dan 5 dari 1-100</h2>

    <ul id="hasil"></ul>

    <script>
        let hasil = document.getElementById("hasil");

        for (let i = 1; i <= 100; i++) {
            if (i % 3 == 0 && i % 5 == 0) {
                let angka = document.createElement("li");
                angka.textContent = i;
                hasil.appendChild(angka);
            }
        }
    </script>

</body>
</html>
