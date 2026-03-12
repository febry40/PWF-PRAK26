<h1>Tambah Produk</h1>

<form action="/products" method="POST">
    @csrf

    Nama Produk <br>
    <input type="text" name="name"><br><br>

    Harga <br>
    <input type="number" name="price"><br><br>

    Deskripsi <br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Simpan</button>

</form>