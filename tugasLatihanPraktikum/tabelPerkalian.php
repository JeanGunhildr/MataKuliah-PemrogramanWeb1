<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Perkalian</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-slate-100 flex items-center justify-center p-6">
    <main class="w-full max-w-5xl">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-slate-800">
                Tabel Perkalian
            </h1>
            <p class="mt-1 text-slate-500">
                Perkalian angka 1 sampai 10
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-center border-collapse">
                    <thead>
                        <tr class="bg-blue-600 text-white">
                            <th class="px-4 py-3 font-semibold">

                            </th>

                            <?php for ($kolom = 1; $kolom <= 10; $kolom++) { ?>
                            <th class="px-4 py-3 font-semibold">
                                <?= $kolom ?>
                            </th>
                            <?php } ?>
                        </tr>
                    </thead>

                    <tbody>
                        <?php for ($baris = 1; $baris <= 10; $baris++) { ?>
                        <tr class="border-b border-slate-100 last:border-0">
                            <th class="px-4 py-3 bg-slate-50 text-blue-600 font-bold">
                                <?= $baris ?>
                            </th>

                            <?php for ($kolom = 1; $kolom <= 10; $kolom++) { ?>
                            <td class="px-4 py-3 text-slate-700 hover:bg-blue-50 transition-colors">
                                <?= $baris * $kolom ?>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </main>
</body>

</html>