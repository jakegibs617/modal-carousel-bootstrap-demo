<?php include 'header.php'; ?>
  <body>

    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" data-local="#myCarousel">
      <span>Read More / see pop up</span>
    </button>
    <br>

    <div id="myCarousel" class="carousel slide carousel-fit" data-ride="carousel" data-interval="3000">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
       
        <div class="item active">
          <img src="images/ready_stage_0.png" alt="First slide">
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item">
          <img src="images/ready_stage_1.png" alt="Second slide">          
          <div class="carousel-caption">
          </div>
        </div>
        <div class="item active">
          <img src="images/ready_stage_2.png" alt="Third slide">
          <div class="carousel-caption">
          </div>
        </div>
      
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      </a>
      
    </div>
    <hr>

    <!-- below is the modal -->
    <div class="modal" id="myModal" aria-labelledby="myModalLabel" ><!-- modal binds the images to the modal-->
      <div class="modal-dialog"> <!-- modal-dialogue controls how wide (basically) the modal is-->
        <div class="modal-content"> <!-- modal-content is the box the modal sits in-->
          <div class="modal-header">
            
            <!-- x button top right of modal -->
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          
            <h4 class="modal-title">Project title</h4>
            
          </div>

          <div class="modal-body"></div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">visit Website</button>
          </div>
          
        </div>
      </div>
    </div>

<?php include 'footer.php'; ?>


