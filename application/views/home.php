<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<!--    an example how to call js to html page-->
    <script src="<?= base_url("third_party/files/jquery-3.4.1.js"); ?>"></script>
    <script src="<?= base_url("third_party/files/jquery-ui-1.12.1/jquery-ui.min.js"); ?>"></script>
   
<!--    an example of how to call css to html page-->
    <!-- Custom CSS -->
    <link href="<?= base_url("third_party/css/styles.css"); ?>" rel="stylesheet">
    <link href="<?= base_url("third_party/css/normalize.css"); ?>" rel="stylesheet">
    <title>Royal Armies</title>

  </head>
  <body>
    
          
<!--    an example of how to call files to html page-->
    <img src="<?= base_url("third_party/assets/1040465096__cgULmU2J.jpg"); ?>" alt="homepage" style="float:right" class="" />
      
      <div class="wrapper">
      <header>
        <div id="alert-bar">
          <p>
            This is the alerts bar This is the alerts bar This is the alerts bar
            This is the alerts bar This is the alerts bar This is the alerts bar
            This is the alerts bar This is the alerts bar
          </p>
          <button id="alert-close-btn" type="button">✕</button>
        </div>
        <nav id="main-nav">
          <ul>
            <li>Nav-item</li>
            <li>Nav-item</li>
            <li>Nav-item</li>
            <li>Nav-item</li>
            <li>Nav-item</li>
          </ul>
        </nav>
        <h1 id="main-title">Royal Armies</h1>
        <div id="slideshow">
          This is the slideShow area
          <img
            class="slideShow-image"
            src="images/placeholderPic.jpg"
            alt="placeholderPic"
          />
        </div>
      </header>
      <main>
        <div id="main-grid-wrapper">
          <div id="main-grid">
            <div class="main-grid-item grid-item-1">
              1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum,
              omnis. Iusto dolore, perferendis dicta dignissimos enim officia
              doloribus corporis pariatur veniam? Repellat in nihil, ad
              accusamus et nam ratione laborum?
            </div>
            <div class="main-grid-item grid-item-2">
              2 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-3">
              3 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-4">
              4 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-5">
              5 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-6">
              6 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-7">
              7 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-8">
              8 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
            <div class="main-grid-item grid-item-9">
              9 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum
              nihil iusto natus totam quibusdam, voluptatibus quam, odit enim
              eaque pariatur sed iste accusantium facilis adipisci, asperiores
              alias facere culpa accusamus.
            </div>
          </div>
        </div>
      </main>
      <footer class="footer">
        <p class="footer-text">This is the footer area</p>
        
        
        
        <script src="<?= base_url("js/common.js"); ?>"></script> 
        <script type="text/javascript">
            var date_format = "<?php echo $this->config->item('js_date_format'); ?>";
        </script>
        <?php
        if (isset($js_files) && is_array($js_files) && count($js_files) > 0) {
            $js_folder = 'js/';
            foreach ($js_files as $js_file) {
                if (file_exists($js_folder . $js_file)) {
                    ?>
                    <script type="text/javascript" src="<?php echo base_url($js_folder . $js_file); ?>"></script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">alert('File \'<?php echo $js_file; ?>\' not found in \'<?php echo $js_folder; ?>\' folder.');</script>
                    <?php
                }
            }
        }
        ?>
        
      </footer>
    </div>
  </body>
</html>
