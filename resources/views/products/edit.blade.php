<h1>Edit Produk</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @csrf
    @method('PUT')

    Nama Produk <br>
    <input type="text" name="name" value="{{ $product->name }}"><br><br>

    Harga <br>
    <input type="number" name="price" value="{{ $product->price }}"><br><br>

    Deskripsi <br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>

    <button type="submit">Update</button>

</form>