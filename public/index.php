<?php
use TYPO3\HtmlSanitizer\Builder\CommonBuilder;

require(dirname(__DIR__) . '/vendor/autoload.php');

$payload = (string)($_POST['payload'] ?? '');
if (empty($payload)) {
    $payload = '<img src="none" onerror="alert(1)">';
}

$sanitizer = (new CommonBuilder())->build();
$sanitized = $sanitizer->sanitize($payload);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo typo3/html-sanitizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <main>
        <div class="container">
            <h1>Demo <code>typo3/html-sanitizer</code></h1>
            <div class="row">
                <form method="post">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Paste cross-site scripting payload</label>
                            <textarea class="form-control" id="payload" name="payload" rows="3"><?php echo htmlspecialchars($payload); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <hr>
            <h2>Result</h2>
            <div class="row">
                <div class="col-12"><?php echo $sanitized; ?></div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
