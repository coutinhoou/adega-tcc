<!DOCTYPE html>
<html>
<head>
<title style="font-family: 'Garamond', sans-serif;">Adega Militros</title>
  <link href="https://fonts.googleapis.com/css2?family=Garamond&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin: 0;
      padding: 0;
      font-family: 'Garamond', sans-serif;
    }

    header {
      width: 100%;
      padding: 20px 0;
      background-color: #f1f1f1;
    }

    h1 {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 20px 0;
    }

    nav ul li {
      display: inline-block;
      margin-right: 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
    }

    .search-bar {
      margin-top: 20px;
    }

    .search-bar input[type="text"] {
      padding: 5px;
    }

    .search-bar input[type="submit"] {
      padding: 5px 10px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <header>
    <h1 style="font-size: 50px;">ADEGA MILITROS</h1>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="produtos.php">Cervejas</a></li>
        <li><a href="carrinho.php">Combos</a></li>
        <li><a href="contato.php">Comentários</a></li>
      </ul>
      <form class="search-bar" action="pesquisa.php" method="GET">
        <input type="text" name="pesquisa" placeholder="Pesquisar...">
        <input type="submit" value="Buscar">
      </form>
    </nav>
  </header> 

  <section>
    <h2>Produtos</h2>
    <div class="product-card">
      <img src="/img/vinho1.png" alt="Vinho 1">
      <h3>Vinho 1</h3>
      <p>Descrição do vinho 1.</p>
      <a href="detalhes.php?id=1">Ver detalhes</a>
    </div>
    <div class="product-card">
      <img src="vinho1.png" alt="Vinho 1">
      <h3>Vinho 2</h3>
      <p>Descrição do vinho 2.</p>
      <a href="detalhes.php?id=2">Ver detalhes</a>
    </div>
  </section>

  <footer>
    <p>© 2023 Adega Online. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
