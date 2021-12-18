<?php
  class Test {
    function compare($title,$link) {
      if($link == $title) {
        return '<li class="nav-item d-flex align-items-center active">';
      } else {
        return '<li class="nav-item d-flex align-items-center">';
      }
    }
  };

  function navbar($title) {
    $test = new Test();
    $start = <<<"EOT"
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-down mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="/static/images/download.jpeg" alt="" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            {$test->compare($title,"Course List")}
              <i class="fa fa-book" aria-hidden="true"></i>
              &nbsp;&nbsp;
              <a class="nav-link" aria-current="page" href="#">Courses</a>
            </li>
            {$test->compare($title,"Profile")}
              <i class="fa fa-user" aria-hidden="true"></i>
              &nbsp;&nbsp;
              <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <i class="fa fa-sign-out" aria-hidden="true"></i>
              &nbsp;&nbsp;
              <a class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    EOT;

    echo $start;
  }
?>