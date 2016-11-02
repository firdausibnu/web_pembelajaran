<section class="content-header">
  <?php

  function head($icon, $value){
    echo "<h1>$value</h1>
    <ol class='breadcrumb'>
      <li class='active'><a href='#'><i class='$icon'></i>$value</a></li>";
  };

  function sub($value){
    echo "
    <li class='active'>$value</li>
  </ol>";
  }

  if(isset($_GET['p'])){
    if($_GET['p']=='user'){
      head('fa fa-user','Management User');
        if($_GET['l']=='1'){
          sub('List User');
        }elseif ($_GET['l']=='2') {
          sub('List Admin');
      }
    }

    elseif($_GET['p']=='mk') {
        head('fa fa-book','Mata Kuliah');
        if($_GET['l']=='1'){
          sub('List MK');
        }elseif ($_GET['l']=='2') {
          sub('dsaas');
      }
    }
  }

  else{
    echo "
    <h1>
      Home
    </h1>
    <ol class='breadcrumb'>
      <li class='active'><a href='#'><i class='fa fa-dashboard'></i>Dashboard</a></li>
    </ol>"
    ;
  }
  ?>
</section>
