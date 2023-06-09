<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <script src="./assets/js/tabs.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="./assets/js/tabs.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Lixeira</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <?php include_once './partials/scripts.php'; ?>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <?php include_once './partials/header.php';?>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="row row-cards row-deck">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Produtos excluídos</h3>		      
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap">
                      <thead>
                        <tr>
                          <th class="w-1">#</th>
                          <th>Descrição</th>
                          <th>Valor unitário</th>
                          <th>Estoque</th>                                                    
                          <th class="w-1"></th>                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $counter = 1;

                        foreach ($products as $product) {
                            $productName = json_encode($product['name']);
                            $productPrice = number_format($product['price'], 2, ',', '.');
                            $productAmount = json_decode($product['amount'], true);
                            $productActive = json_decode($product['active']);

                            if($productAmount <= 0 || $productActive == 0) {
                                echo '<tr>';
                                echo '<td><span class="text-muted">' . $counter . '</span></td>';
                                echo '<td>' . json_decode($productName, true) . '</td>';
                                echo '<td> R$ ' . $productPrice . '</td>';
                                echo '<td>' . $productAmount . '</td>';
                                echo '<td><a class="icon" href="#"><i class="fe fe-refresh-ccw"></i></a></td>';
                                echo '</tr>';

                                $counter++;
                            }
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>