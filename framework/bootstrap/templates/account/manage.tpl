<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "header.tpl" ?>

<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "manage" . DS . 'navbar.tpl' ?>

<div class="row row-centered">
<div class="col-lg-11 col-md-11 col-sm-12 col-xs-12 bhoechie-tab-container col-centered">
    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3 bhoechie-tab-menu">
      <div class="list-group">
        <a href="#" class="list-group-item active text-center">
          <h4 class="glyphicon glyphicon-user"></h4><br/>Account Data
        </a>
        <a href="#" class="list-group-item text-center">
          <h4 class="glyphicon glyphicon-shopping-cart"></h4><br/>My Orders
        </a>
        <a href="#" class="list-group-item text-center">
          <h4 class="glyphicon glyphicon-thumbs-up"></h4><br/>Wishlist
        </a>
        <a href="#" class="list-group-item text-center">
          <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Payment Details
        </a>
        <a href="#" class="list-group-item text-center">
          <h4 class="glyphicon glyphicon-envelope"></h4><br/>Messages <span class="badge">0</span>
        </a>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
        <!-- flight section -->
        <div class="bhoechie-tab-content active">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "manage" . DS . 'user-details-show.tpl';  ?>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "manage" . DS . 'user-details-change.tpl';  ?>
          </div>
        </div>
        <!-- train section -->
        <div class="bhoechie-tab-content">
            <center>
              <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
              <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
              <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
            </center>
        </div>

        <!-- hotel search -->
        <div class="bhoechie-tab-content">
            <center>
              <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
              <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
              <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
            </center>
        </div>
        <div class="bhoechie-tab-content">
            <center>
              <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
              <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
              <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
            </center>
        </div>
        <div class="bhoechie-tab-content">
            <center>
              <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
              <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
              <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
            </center>
        </div>
    </div>
</div>

<script src="/static/javascript/manage/manage-nav.js" type="text/javascript"></script>

<?php include HOME . DS . "framework" . DS . "bootstrap" . DS . "templates" . DS . "_includes" . DS . "footer.tpl" ?>