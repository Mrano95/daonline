<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
         integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
        <title>Home</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/global.css" rel="stylesheet">
    </head>

  <body>
    <?php
        include 'components/menu_en.html';
        include 'components/header_en.html';
    ?>
    <div class="seperator col-12"></div>
    <main role="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="content-title">
                            <p><h1 id="pageTitle">Welcome to the Drentse Academie</h1></p>
                        </div>
                        <p>The Drentse Academie is a young and fresh academy where students, teachers, researchers and professionals in their field of work, work together to find solutions to problems in the society. At the Drentse Academie there is a focus on Informatics and mechanical engineering studies. Within these studies the Drentse Academie offers a variety of specializations. The Drentse Academie is a small-scale studies who prides itself in transferring knowledge in a unique way. Thanks to the small scale of this studies Drentse Academie excels in individual assistance for their students. At the Drentse Academie you are not just a number you are an important individual.</p>
                    </div>
                    <div class="col-sm-12 col-md-7 mt-auto mb-auto">
                        <div class="content-img">
                            <img src="images/school.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="content-subtitle">
                            <p><h2>Informatics</h2></p>
                        </div>
                        <p>The informtics programme at the Drentse Academy makes use of the Internet of Things Laboratory (IoT Lab). It has the latest innovative devices available, including a Microsoft Surface Hub, Virtual Reality equipment, and robots. In addition to this lab, there is also MyConcept, a Fabrication Laboratory where students can use 3D printers to print their designs.</p>
                        <p>The Drentse Academie offers, within the Informatics studies, a selection of different specialization. These consist of: ICT management, software engineering, technical informatics and front end development.</p>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="content-subtitle">
                            <p><h2>Mechanical engineering</h2></p>
                        </div>
                        <p>At the studies Mechanical engineering you will learn everything about applied mechanical engineering. The challenge is to design new products or production systems. The studies mostly focusses on your creativity and your organising and technical skills. You will also learn to design, develop and produce new products and production systems.</p>
                        <p>The Drentse Academie offers, within the Mechanical engineering studies, a selection of different specializations. These consist of: off-shore, ship-building, machine-building and steel and construction.</p>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12">
                <?php include 'components/rssfeed.php'; ?>
              </div>
            </div>
        </div>
    </main><!-- /.container -->
    <?php include 'components/footer.html'; ?>
  </body>
</html>
