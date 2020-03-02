<?php require_once 'parts/head.php'; ?>

<title>Main Page</title>

</head>
<body>
<?php require_once 'parts/header.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="card-deck m-auto">

        <a class="card btn btn-lg  btn-outline-primary" href="/static">
          <span class="m-auto">Static Content</span>
        </a>

        <a class="card btn btn-lg  btn-outline-primary" href="/dynamic">
          <span class="m-auto">Dynamic Content</span>
        </a>

      </div>
    </div>
  </div>

<?php require_once 'parts/footer.php'; ?>
</body>
</html>