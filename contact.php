<!DOCTYPE html>
<html lang="hu">
<head>
      <link rel="icon" href="assets/favYB.png" type="image/gif" sizes="16x16">
<meta name="description" content="yoursbody.com">
  <title>yoursbody.com</title>
<meta name="viewport" content="width=device-width initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="index.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include 'navbar.html'; ?>
    <div class="row">
         <div class="wrapper">
            <div class="line">
         <div class="col-md-5">
            <img style="height-min: 100vh;" class="img-responsive" src="assets/0start.jpg" alt="Teréki-Papp Ágnes" >
        </div>
          <div class="col-md-5 col-md-offset-1">
            
            <p><b>Kapcsolat:</b> <br/><br/>
                <br/>
                e-mail küldése: 
                <a data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope fa-lg" title="Küldj e-mailt!"></i></a> <br/><br/>
                Instagram: <a href='https://www.instagram.com/yoursbody_official/' ><i class="fab fa-instagram fa-lg"></i></a>
                </p>
                
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">E-mail küldés Teréki-Papp Ágnes részére</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="https://formspree.io/info@yoursbody.com" >
              <input type="hidden" name="_next" value="contact2.php">
              <input type="hidden" name="_language" value="hu" />
              <input type="email" name="email" placeholder="E-mail címed">
              <p> <br></p>
              <textarea name="message" placeholder="Üzeneted szövege"></textarea>
              <br>
              <button type="submit" >Küldés</button >
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
        </div>
      </div>
    </div>
  </div>
    <!--Modal End -->                
                
            </div>
            </div>
        </div>
       
    </div>
 <?php include 'foot.php'; ?>
</body>
</html>