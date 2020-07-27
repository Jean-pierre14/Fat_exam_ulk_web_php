
<?php
        session_start();
        if(!isset($_SESSION['user_level']) or ($_SESSION['user_level']!=1))
        {
            header('location:index.php');
            exit();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the admnistration page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/semantic/semantic.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <div class="container-fluid">
    <!-- <header>
        <div class="ui menu segment container mt-1">
                <a href="" class="item">Sign Out  <i class="icon blue sign-out"></i></a>
                <a href="#" class="item"><i class="icon blue users"></i>View Members</a>
                <a href="" class="item"><i class="icon blue map"></i>Address</a>
                <a href="search_form.php" class="item"><i class="icon blue search"></i> Search</a>
                <!-- <a href="" class="item">Change password</a> -->
        </div>
    </header> -->
  </div>

  <div class="container-fluid">
      <nav class="navbar sticky-top bg-dark m-0" style="z-index: 1;">
        <?php if(isset($_SESSION['fname'])):?>
          <a href="#" id="open" class="navbar-brand"><?php echo "Welcome Mr(Mrs) <b>{$_SESSION['fname']}</b>";?></a>
            <?php endif;?>
        <div class="navbar-right">
            <ul class="nav">
                <li class="nav-item active ui"><a href="#" class="nav-link">Admin</a></li>
                <li class="nav-item"><a href="#" class="nav-link">View members</a></li>
                <!-- <li class="nav-item" id="open"><a href="#" class="nav-link">Profile</a></li> -->
                <li class="nav-item"><a href="#" class="nav-link">Sign out</a></li>
            </ul>
        </div>
        <form action="#" method="post" class="form-search">
            <input type="text" name="search" id="txt" placeholder="Search" class="form-control">
        </form>
      </nav>

      <div class="container ui">
          <div class="ui container">
              <div class="row">
                  <div class="col-md-8">
                      <h3 class="ui white text-center">Dashboard</h3>
                      <div class="card mt-3 mb-2 bg-w transparent">
                          <div class="panel panel-default">
                              <div class="panel p-3">
                                  <p>Demo</p>
                              </div>
                              <div class="panel-body p-3">
                                  <p>
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et incidunt assumenda, tenetur delectus obcaecati in nobis sit laudantium placeat, cumque ratione officia porro, sapiente necessitatibus accusantium blanditiis voluptatum aspernatur consequatur amet voluptatibus numquam. Ut nostrum esse eveniet expedita atque magni, commodi animi neque quidem hic molestias aspernatur laboriosam tempora numquam libero accusantium suscipit maiores aperiam amet similique incidunt dolorum. Sint error numquam recusandae sed sit impedit tempore eaque harum facilis quidem neque nulla, corrupti perspiciatis labore modi eum rerum iusto tenetur quisquam voluptatibus. Reprehenderit dolorum esse fuga eos numquam ducimus incidunt, ratione neque consequuntur, veniam id rem quam ut et.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-md-4">
                      <h3 class="ui white text-center">Chartjs</h3>
                      <p>displayed here</p>
                  </div>
              </div>
          </div>
          <div class="ctn" style="width: 100%;height: 250px;overflow: hidden;background-image: url(./img/vido.jpg);background-size: cover;background-attachment: fixed;position: relative;"></div>
      <div class="container-fluid bg-w mt-2 mb-2">
        <p>
            voluptate maxime repellendus? Consequuntur dignissimos neque sequi voluptatem doloribus enim voluptas vitae debitis alias incidunt iusto atque adipisci, itaque doloremque similique! Voluptates, provident adipisci officiis facere, odit doloribus sint, laudantium at eaque hic iste nostrum tempora cupiditate quas nam quia laboriosam quidem velit reprehenderit non cumque molestiae fugiat? Ut illo libero sequi earum est cupiditate officiis, voluptas distinctio eos. Veniam nisi eius atque quo ullam fugiat eum sequi explicabo in quos vero, aperiam, dolores ad error maiores, voluptatibus officia sed cumque veritatis recusandae deleniti! Nihil ducimus libero repudiandae omnis rerum. Ullam suscipit doloribus porro nesciunt amet perspiciatis possimus corrupti esse temporibus odit molestiae velit, optio aliquid similique eaque rem modi aut. Libero unde quam aut, et hic ex est excepturi dolor, ratione pariatur corporis eum, similique saepe repudiandae itaque. Est ut debitis quibusdam quos harum. Illo vitae nesciunt voluptate ratione iusto corrupti dolorum tempore soluta assumenda alias voluptatibus quo officiis laborum voluptatem consequatur, distinctio sit repellendus aut eligendi ipsa earum totam a dolor cum. Neque sunt, rem modi nulla molestiae qui corporis laboriosam officiis illum mollitia eaque velit, iure dolores officia deserunt necessitatibus, id molestias accusamus quibusdam nobis totam. Sed velit rerum eaque error quis, nam autem assumenda, sunt ad quam quo. Voluptates possimus sed soluta totam aut debitis nesciunt accusamus ducimus, excepturi modi tenetur harum dignissimos eum fugiat consectetur quo sunt. Iure excepturi mollitia aspernatur nostrum dicta, molestias sed aperiam tempora non porro magni necessitatibus quos quidem ab repellendus ullam praesentium vel similique maiores vero, natus consequatur iusto. Dignissimos, aliquam natus amet ex dicta quibusdam asperiores tempora nihil a eum ipsam, laudantium voluptates sunt! Optio, nisi ex perspiciatis, sit nam, deleniti consequatur aliquid adipisci suscipit provident ipsam deserunt! Delectus harum nulla maiores. Expedita, aperiam modi dignissimos officiis explicabo dolorum recusandae quae quibusdam mollitia quos ullam voluptatum ipsam! Omnis ea ipsa eaque veritatis. Fuga illum sunt incidunt consequatur quasi distinctio accusamus, voluptatum dignissimos adipisci! Ducimus ipsa, asperiores corporis tempore cumque est! Ex totam sunt doloribus voluptatum excepturi ipsum provident laborum eligendi, in, nobis aperiam hic molestias? Velit, modi illum cum id architecto est laborum! Magni, quos. Aliquam, deserunt quo? Pariatur, dolorem reiciendis. Sit aliquid optio minima laboriosam sequi? Repellendus, nostrum. Dicta, minus ipsa totam ratione cum deserunt suscipit repellat repudiandae amet vitae nam ea!
        </p>
      </div>

      <div class="btn-group">
          <button class="btn btn-success"  id="open">Profile</button>
          <a href="#" class="btn btn-primary">More details</a>
          <a href="#" class="btn btn-info">Github</a>
          <a href="#" class="btn btn-secondary">Viber</a>
      </div>

      <div class="container-fluid bg-w mt-3">
        <p>
            voluptate maxime repellendus? Consequuntur dignissimos neque sequi voluptatem doloribus enim voluptas vitae debitis alias incidunt iusto atque adipisci, itaque doloremque similique! Voluptates, provident adipisci officiis facere, odit doloribus sint, laudantium at eaque hic iste nostrum tempora cupiditate quas nam quia laboriosam quidem velit reprehenderit non cumque molestiae fugiat? Ut illo libero sequi earum est cupiditate officiis, voluptas distinctio eos. Veniam nisi eius atque quo ullam fugiat eum sequi explicabo in quos vero, aperiam, dolores ad error maiores, voluptatibus officia sed cumque veritatis recusandae deleniti! Nihil ducimus libero repudiandae omnis rerum. Ullam suscipit doloribus porro nesciunt amet perspiciatis possimus corrupti esse temporibus odit molestiae velit, optio aliquid similique eaque rem modi aut. Libero unde quam aut, et hic ex est excepturi dolor, ratione pariatur corporis eum, similique saepe repudiandae itaque. Est ut debitis quibusdam quos harum. Illo vitae nesciunt voluptate ratione iusto corrupti dolorum tempore soluta assumenda alias voluptatibus quo officiis laborum voluptatem consequatur, distinctio sit repellendus aut eligendi ipsa earum totam a dolor cum. Neque sunt, rem modi nulla molestiae qui corporis laboriosam officiis illum mollitia eaque velit, iure dolores officia deserunt necessitatibus, id molestias accusamus quibusdam nobis totam. Sed velit rerum eaque error quis, nam autem assumenda, sunt ad quam quo. Voluptates possimus sed soluta totam aut debitis nesciunt accusamus ducimus, excepturi modi tenetur harum dignissimos eum fugiat consectetur quo sunt. Iure excepturi mollitia aspernatur nostrum dicta, molestias sed aperiam tempora non porro magni necessitatibus quos quidem ab repellendus ullam praesentium vel similique maiores vero, natus consequatur iusto. Dignissimos, aliquam natus amet ex dicta quibusdam asperiores tempora nihil a eum ipsam, laudantium voluptates sunt! Optio, nisi ex perspiciatis, sit nam, deleniti consequatur aliquid adipisci suscipit provident ipsam deserunt! Delectus harum nulla maiores. Expedita, aperiam modi dignissimos officiis explicabo dolorum recusandae quae quibusdam mollitia quos ullam voluptatum ipsam! Omnis ea ipsa eaque veritatis. Fuga illum sunt incidunt consequatur quasi distinctio accusamus, voluptatum dignissimos adipisci! Ducimus ipsa, asperiores corporis tempore cumque est! Ex totam sunt doloribus voluptatum excepturi ipsum provident laborum eligendi, in, nobis aperiam hic molestias? Velit, modi illum cum id architecto est laborum! Magni, quos. Aliquam, deserunt quo? Pariatur, dolorem reiciendis. Sit aliquid optio minima laboriosam sequi? Repellendus, nostrum. Dicta, minus ipsa totam ratione cum deserunt suscipit repellat repudiandae amet vitae nam ea!
        </p>
      </div>
  </div>
  </div>

  <div class="content">
    <div class="modalC">
        <div class="header">
            <label id="closebtn" title="Close the modal">&Cross;</label>
            <p>Username</p>
        </div>
        <div class="body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Profile</h3>
                        <p>Username</p>
                        <p>Full name</p>
                        <p>Password md5</p>
                    </div>

                    <div class="col-md-6">
                        <a href="#" class="btn btn-info">Edit</a>
                        <form action="#" method="post">
                            <div class="form-row mt-2">
                                <div class="form-group col-md-6">
                                    <input type="text" name="username" placeholder="Username" class="form-control ui fields">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="username" placeholder="Full name" class="form-control ui fields">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" name="pass1" placeholder="Password" class="form-control ui fields">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" name="pass1" placeholder="confirm Password" class="form-control ui fields">
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="ui labeled green button icon submit">
                                        <i class="icon refresh"></i>Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <p align="center">Copyright &copy; 2020 Genuis team </p>
            <span id="time"></span>
        </div>
    </div>
  </div>


  <script src="./js/main.js"></script>
  <script src="./js/jquery-3.4.0.min.js"></script>
  <script>
      $(document).ready(()=>{
        $('#open').click(()=>{
            $('.content').show();
        });
        $('#closebtn').click(()=>{
            $('.content').hide();
        })
      });
  </script>
  
</body>
</html>