<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= 'Hola Mundo' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?= Yii::app()->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.1/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />  
  
  <script>
    axios.defaults.baseURL = "http://localhost/yii-master/CursosProyectados/holaMundo/";
    axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
  </script>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light2">
      <div class="container-fluid">        
        <?= CHtml::link('Hola Mundo', array('/empresa/index'), array('class' => 'navbar-brand')) ?>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <?= CHtml::link('Inicio', array('/empresa/index'), array('class' => 'nav-link')) ?>
            </li>
            <li class="nav-item">
              <?= CHtml::link('Entrar', array('/site/login'), array('class' => 'nav-link'), array('visible' => Yii::app()->user->isGuest)) ?>
            </li>
            <li class="nav-item">
              <?= CHtml::link('Cerrar Sesión', array('/site/logout'), array('class' => 'nav-link'), array('visible' => !Yii::app()->user->isGuest)) ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <?= $content ?>

  
  
</body>
  <script src="<?= Yii::app()->theme->baseUrl ?>/js/jquery.js"></script>
  <script src="<?= Yii::app()->theme->baseUrl ?>/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
</html>