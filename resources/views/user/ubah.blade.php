<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="/user/ubah_simpan/{{ $users->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" placeholder="Masukkan username" value="{{ $users->username }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $users->nama }}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan Password" value="{{ $users->password }}"></td>
            </tr>
            <tr>
                <td>ID Level Pengguna</td>
                <td><input type="number" name="level_id" placeholder="Masukkan ID Level" value="{{ $users->level_id }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>

    </form>
</body>