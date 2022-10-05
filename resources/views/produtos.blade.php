<h1>Aqui tem produtos</h1>
<hr>

<!-- para criar um formulario no Laravel precisa por o Csrf -->
<form method="post">
    @csrf

    <b>Produto</b><br>
    <input type="produto" name="produto"><br>

    <b>Preço</b><br>
    <input type="preco" name="preco"><br>

    <b>Categoria</b><br>
    <input type="categoria" name="categoria"><br>

    <button type="submit">Salvar</button>

</form>

<hr>

<label>Produto: {{ $produto }}</label> <br>
<label>Preco: {{ $preco }}</label> <br>
<label>Categoria: {{ $categoria }}</label> <br>
