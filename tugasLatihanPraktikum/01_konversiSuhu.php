<?php

$output = "";

function ConvertCtoF($input)
{
    $Fahrenheit = ($input * 9 / 5) + 32;
    return $Fahrenheit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $output = ConvertCtoF($_POST["inputNumber"]);
}
?>
<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Suhu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center px-4">
    <main class="w-full max-w-md">
        <form action="" method="post" class="bg-white rounded-3xl shadow-xl p-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-slate-800">
                    Kalkulator Suhu
                </h1>

                <p class="text-slate-500 mt-2">
                    Konversi suhu Celcius ke Fahrenheit
                </p>
            </div>

            <div class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">
                        Nilai Suhu (°C)
                    </label>

                    <input name="inputNumber" required type="number" placeholder="Contoh: 25" class="w-full px-4 py-3.5 rounded-xl border border-slate-200
                           bg-slate-50 text-slate-800
                           outline-none focus:border-blue-500
                           focus:ring-4 focus:ring-blue-100 transition">
                </div>
                <button type="submit" class="w-full py-3.5 rounded-xl
                       bg-blue-600 hover:bg-blue-700
                       text-white font-semibold
                       shadow-lg shadow-blue-200
                       transition duration-200">
                    Hitung Suhu
                </button>
            </div>

            <?= $output != "" ? '
                <div class="mt-7 p-5 rounded-2xl bg-slate-50 border border-slate-100">
                    <p class="text-sm text-slate-500 mb-1">
                        Hasil dari konversi ' . $_POST["inputNumber"] . ' derajat Celcius ke Fahrenheit adalah :
            </p>

            <div class="flex items-end gap-2">
                <span class="text-4xl font-bold text-slate-800">
                    ' . $output . '
                </span>

                <span class="text-lg font-medium text-slate-500 mb-1">
                    °F
                </span>
            </div>
            </div>
            ' : '' ?>
        </form>
    </main>
</body>

</html>