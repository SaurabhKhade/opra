<?php 
  function end_document() {
    $end = <<<"EOT"
          <script src="/static/bootstrap/bootstrap.bundle.min.js"></script>
        </body>
      </html>
    EOT;

    echo $end;
  }
?>