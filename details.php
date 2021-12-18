<?php 
  $document_title = "Course Details";

  include './templates/start_document.php';
  include_once './templates/navbar.php';
?>

<section class="border px-2 py-3 tile bold course-details mb-5">
  <h1>PHP Development</h1>
  <p>
    This Web Application is very useful in e-learning sector. Nowadays, in the pandemic situation, everything is moving online including schools and colleges. Using this application, faculties can launch their online courses and can also track the progress of students per course. Meanwhile students can register and can enroll to the courses launched by faculties and can get the course completion certificate by completing all the sessions of the course.
  </p>
  <h3>Total Sessions: 3</h3>
  <div class="my-3">
    <p class="my-0">Hours required: 3.2</p>
    <p class="my-0">Total Students Enrolled: 83</p>
    <p class="my-0">Total Students Completed Course: 34</p>
  </div>
  <div class="ms-4 my-3">
    <h5>Session 1 - Basics of PHP</h5>
    <div class="ms-3">
      <p>
        This Web Application is very useful in e-learning sector. Nowadays, in the pandemic situation, everything is moving online including schools and colleges.
      </p>
      <h6>Hours: 0.7</h6>
      <h6>Completed by 54 students</h6>
      
      <?php 
        $total = 83;
        $value = 62;
        include './templates/progress-bar.php'; 
      ?>
    </div>
  </div>
  <div class="ms-4 my-3">
    <h5>Session 2 - Intermediate PHP</h5>
    <div class="ms-3">
      <p>
        This Web Application is very useful in e-learning sector. Nowadays, in the pandemic situation, everything is moving online including schools and colleges.
      </p>
      <h6>Hours: 0.9</h6>
      <h6>Completed by 42 students</h6>
      
      <?php 
        $total = 83;
        $value = 38;
        include './templates/progress-bar.php'; 
      ?>
    </div>
  </div>
  <div class="ms-4 my-3">
    <h5>Session 3 - Advanced PHP</h5>
    <div class="ms-3">
      <p>
        This Web Application is very useful in e-learning sector. Nowadays, in the pandemic situation, everything is moving online including schools and colleges.
      </p>
      <h6>Hours: 1.6</h6>
      <h6>Completed by 34 students</h6>
      
      <?php 
        $total = 83;
        $value = 23;
        include './templates/progress-bar.php'; 
      ?>
    </div>
  </div>
</section>

<?php 
  include './templates/end_document.php';
?>