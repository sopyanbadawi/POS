<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="/user/tambah_simpan">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan Password"></td>
            </tr>
            <tr>
                <td>ID Level Pengguna</td>
                <td><input type="number" name="level_id" placeholder="Masukkan ID Level"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>

    </form>
</body>