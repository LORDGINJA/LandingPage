<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap-theme.css.map">
    <link type="text/css" rel="stylesheet"  href="css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="css/project.css">
    <title>Maxwell Karp</title>
  </head>
  <body>
    <div id="container">
  <div class="navT">
    <div class="icon"></div>
  </div>

  <div id="menu" id="navbar-example">
    <ul class="nav nav-tabs" role="tablist">
      <li><a href="#homepg">Hom<span class="space">e</span></a></li>
      <li><a href="#Projects">Project<span class="space">s</span></a></li>
      <li><a href="#Contacts">Contac<span class="space">t</span></a></li>
    </ul>
  </div>
</div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="p">
          <div class="filler">
            <img src="../images/portfolio.jpg">
          </div>
         <div class="carousel-caption">
          <button class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
              <div class="primary-wrapper">
                  Portfolio
              </div>
          </button>
         
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Portfolio</h4>
                  </div>
                  <div class="modal-body">
                    <img class="img-responsive" id="mogulpara"  >       
                    <p id="mogulpara">
                      This is my Portfolio project. It uses HTML, CSS, and Javascript.
                    </p>
                  </div>
                </div>
              </div>
            </div> 
           </div>
        </div>

        <div class="item" id="b">
           <div class="filler">
            
          </div>

          <div class="carousel-caption">
            <button class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
              <div class="primary-wrapper">
                  Blog
              </div>
          </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Blog</h4>
                  </div>
                  <div class="modal-body">
                    <img class="img-responsive" id="mogulpara"  >       
                    <p id="mogulpara">
                      This is my Blog project. It uses a combination of PHP, CSS, Javascript, and a MYSQL database.
                     </p>
                  </div>
                </div>
              </div>
            </div> 
           </div>
          </div>

        <div class="item" id="t">
         <div class="filler">
            
          </div>
          <div class="carousel-caption">
            <button class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
              <div class="primary-wrapper">
                  Todo-List
              </div>
          </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Todo-List</h4>
                  </div>
                  <div class="modal-body">
                    <img class="img-responsive" id="mogulpara"  >       
                    <p id="mogulpara">
                       This is my Todo-List project. It uses a combination of PHP, CSS, and a MYSQL database.
                    </p>
                  </div>
                  
                </div>
              </div>
            </div> 
           </div>
          </div>

        <div class="item" id="i">
         <div class="filler">
            
          </div>

          <div class="carousel-caption">
            <button class="btn btn-primary btn-lg" class="headingbutton" data-toggle="modal" data-target="#myModal">
              <div class="primary-wrapper">
                  Instagram Api
              </div>
          </button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Instagram Api</h4>
                  </div>
                  <div class="modal-body">
                    <img class="img-responsive" id="mogulpara"  src="http://upload.wikimedia.org/wikipedia/en/1/1b/Phs-bulldog.png">       
                    <p id="mogulpara">
                      This is my Instagram Api project. It uses a combination of Javascript, CSS, PHP, and a MYSQL database
                    </p>
                  </div>
                  
                </div>
              </div>
            </div> 
           </div>
        </div>
      </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
  </body>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
</html>