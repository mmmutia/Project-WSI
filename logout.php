<?php  
session_start();
if (session_destroy()) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
    
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">My App</a>
          </div>
          
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
              <a href="#">Home</a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" data-toggle="modal" data-target="#logoutModal">logout</a>
            </li>
        </ul>
      </div>
      
    </div>
  </nav>


<div class="container">

<div class="text-center">
  <h1>Logout example</h1>
  <p class="lead">Bootstrap logout modal dialog example</p>
</div>

</div><!-- /.container -->

<!-- Small modal -->
<div class="modal" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4>Log Out <i class="fa fa-lock"></i></h4>
    </div>
    <div class="modal-body">
      <p><i class="fa fa-question-circle"></i> Are you sure you want to log-off? <br /></p>
      <div class="actionsBtns">
          <form action="/logout" method="post">
              <input type="hidden" name="${_csrf.parameterName}" value="${_csrf.token}"/>
              <input type="submit" class="btn btn-default btn-primary" data-dismiss="modal" value="Logout" />
                  <button class="btn btn-default" data-dismiss="modal">Cancel</button>
          </form>
      </div>
    </div>
  </div>
</div>
</div>