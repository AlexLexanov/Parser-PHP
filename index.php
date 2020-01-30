<!DOCTYPE html>
<html>
<head>
    <title>FASTPANEL2</title>
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-xl-12">
      <div class="row justify-content-md-center">
        <div class="col-md-6">
          <h1>Import .CSV</h1>
            <form id="uploadFile" action="json/json_csv.php" method="post" enctype="multipart/form-data">
            <hr id="line">
              <div id="selectImage">
              <label>Выберите ваш файл</label><br/>
              <input type="file" name="file" id="file" required />
              <input type="submit" value="Upload" class="submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-12">
          <div class="card">
            <h2 class="card-brand"></h2>
            <h6 class="card-description"></h6>
            <div class="card-table">
              <table class="table table-sm table-borderless text-secondary">
                <thead>
                  <tr>
                    <th class="font-weight-light" scope="col">Артикул</th>
                    <th class="font-weight-light" scope="col">Тара</th>
                    <th class="font-weight-light" scope="col">Рекоменд. цена</th>
                  </tr>
                </thead>
                <tbody class="table-body">
                  <tr>
                    <td class="table-vendor font-weight-light"></td>
                    <td class="tara font-weight-light"></td>
                    <td class="price font-weight-light"></td>
                  </tr>
                </tbody>
              </table>
              <div class="row ">
                <div class="col-md-11">
                  <div class="detailed">
                    <p class="full-product-description"></p>
                    <div class="areas-of-use">
                      <p class="areas-of-use-title"></p>
                      <p class="areas-of-use-description"></p>
                    </div>
                    <div class="water-wreeding">
                      <p class="water-wreeding-title"></p>
                      <p class="water-wreeding-description"></p>
                    </div>
                    <div class="recommendations-for-use">
                      <p class="recommendations-for-use-title"></p>
                      <p class="recommendations-for-use-description"></p>
                    </div>
                    <div class="warning">
                      <p class="warning-title"></p>
                      <p class="warning-description"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>