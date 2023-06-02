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
      background-color: #f1f1f1; /* Cor de fundo igual ao h1 */
    }

    header {
      width: 100%;
      height: 80px; /* Altura do cabeçalho reduzida */
      padding: 20px 0;
      background-color: #000;
      display: flex;
      align-items: center;
    }

    .logo {
      max-width: 150px;
      margin-left: 20px;
    }

    h1 {
      font-size: 40px;
      font-weight: bold;
      margin: 0 auto;
      color: #fff;
    }

    .header-buttons {
      margin-left: auto;
      display: flex;
      align-items: center;
    }

    .header-buttons a {
      color: #fff;
      margin-left: 10px;
      text-decoration: none;
    }

    .carousel {
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px 0;
    }

    .carousel-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 0 20px;
    }

    .carousel-item img {
      width: 80px;
      height: 80px;
      margin-bottom: 10px;
      cursor: pointer;
    }

    .carousel-item span {
      font-size: 14px;
    }

    footer {
      width: 100%;
      padding: 20px 0;
      background-color: #000;
      color: #fff;
    }
  </style>
</head>
<body>
  <header>
    <img class="logo" src="logo.png" alt="Logo">
    <div style="flex: 1;">
    <h1 style="font-size: 40px; color: #fff;">ADEGA MILITROS</h1>
    </div>
    <div class="header-buttons">
      <a href="#">Contato</a>
      <a href="#">Ajuda</a>
      <a href="#">Redes Sociais</a>
    </div>
  </header>

  <section>
    <h2 style="font-size: 40px; color: #000;">Produtos</h2>
    <div class="carousel">
      <div class="carousel-item">
        <h1 style="font-size: 30px; color: #000;">cervejas</h1>
        <a href="cervejas.php">
          <img src="cerveja-icon.png" alt="Cervejas">
        </a>
      </div>
      <div class="carousel-item">
        <h1 style="font-size: 30px; color: #000;">destilados</h1>
        <a href="destilados.php">
          <img src="destilados-icon.png" alt="Destilados">   
        </a>
      </div>
      <div class="carousel-item">
        <h1 style="font-size: 30px; color: #000;">combos</h1>
        <a href="combos.php">
          <img src="combos-icon.png" alt="Combos">
        </a>
      </div>
    </div>
  </section>

  <footer>
    <p>© 2023 Adega Online. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
