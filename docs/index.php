<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./swagger-files/swagger-ui.css" />
<title>OpenAPI Petstore</title>
<body>
<div id="openapi">
<script src="./swagger-files/swagger-ui-bundle.js" charset="UTF-8"> </script>
<script src="./swagger-files/swagger-ui-standalone-preset.js" charset="UTF-8"> </script>
<script src="./swagger-files/swagger-initializer.js" charset="UTF-8"> </script>
<script>
window.onload = function () {
    const ui = SwaggerUIBundle({
        url: "./yaml-files/sunsetAndSunrise.yaml",
        dom_id: "#openapi"
    })
}
</script>
</body>