<h1>Daftar Produk</h1>

<a href="/products/create">Tambah Produk</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>
    </tr>
    @endforeach

</table>