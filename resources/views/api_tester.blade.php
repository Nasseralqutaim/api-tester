<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>API Tester</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Prism.js -->
  <link href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/prism.js"></script>
</head>

<body class="bg-light">
  <div class="container py-5">
    <h1 class="mb-5">API Tester</h1>

    <!-- The API test form -->
    <div class="card mb-4">
      <div class="card-body">
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
    </div>

    <!-- The API response -->
    @if (session('status'))
    <div class="card response-section">
      <div class="card-body">
        <h2 class="card-title">Response</h2>
        <p class="card-subtitle mb-2 text-muted">Status: {{ session('status') }}</p>
        <h3 class="h5 mt-4">Headers</h3>
        <pre class="headers"><code>{{ json_encode(session('headers'), JSON_PRETTY_PRINT) }}</code></pre>
        <h3 class="h5 mt-4">Body</h3>
        <pre class="body"><code>{{ json_encode(session('body'), JSON_PRETTY_PRINT) }}</code></pre>
      </div>
    </div>
    @endif
  </div>
  <script>
    // Highlight headers and body
    Prism.highlightAll();
  </script>
</body>

</html>