<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>API Tester</title>
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container py-5">
    <h1 class="mb-5">API Tester</h1>

    <!-- The API test form -->
    <form method="POST" action="{{ route('testApi') }}">
      @csrf
      <div class="mb-3">
        <label for="method" class="form-label">HTTP Method</label>
        <select class="form-select" id="method" name="method">
          <option>GET</option>
          <option>POST</option>
          <option>PUT</option>
          <option>DELETE</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="url" class="form-label">URL</label>
        <input type="url" class="form-control" id="url" name="url" required>
      </div>
      <button type="submit" class="btn btn-primary">Test API</button>
    </form>
  </div>
</body>

</html>