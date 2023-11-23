<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Perlombaan Sains Antar SMA</title>
    <link rel="stylesheet" href="./gaya.css">

</head>

<body>
    <div class="box">
        <h1>Perlombaan Sains</h1>
        <form action="./proses_input.php" method="post">
            <label for="nama">nama</label>
            <input type="text" name="nama" maxlength="100" class="form-input" required>

            <label for="no_hp">Nomor HP:</label>
            <input type="tel" id="no_hp" name="no_hp" required>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required>

            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" class="form-input" rows="3" required></textarea>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required>

            <div class="mb-3">
                <label for="jenis_perlombaan" class="form-label">Jenis Perlombaan</label>
                <select class="form-control" id="jenis_perlombaan" name="jenis_perlombaan" required>
                    <option value="">-- Pilih jenis Perlombaan --</option>
                    <option value="matematika">Matematika </option>
                    <option value="fisika">fisika </option>
                    <option value="kimia">Kimia </option>
                    <option value="biologi">Biologi </option>
                </select>
            </div>

            <div class="mb-3 col-6">
                <label for="waktu" class="form-label">waktu</label>
                <select class="form-control" id="waktu" name="waktu" required>
                    <option value="">-- Pilih Waktu --</option>
                    <option value="2024-01-06">2024-01-06 </option>
                    <option value="2024-01-07">2024-01-07 </option>
                    <option value="2024-01-08">2024-01-08 </option>
                    <option value="2024-01-09">2024-01-09 </option>
                </select>
            </div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" id="btn-kirim">kirim</button>
        </form>
    </div>
</body>

</html>