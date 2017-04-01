<html>
        <head>
                <title>CodeIgniter Tutorial</title>
            <link rel ="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap.min.css">
            <link rel ="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
        </head>
        <body>
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">WebSite Soon</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('about'); ?>">About</a></li>
        <li><a href="<?php echo base_url('posts'); ?>">News</a></li>  
        </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">            
              