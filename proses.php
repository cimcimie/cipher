<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Cipher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $shift = $_POST["shift"];
    $action = $_POST["action"];

    function caesarCipher($text, $shift, $action) {
        $result = "";
        $shift = ($action == "encrypt") ? $shift : -$shift;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $asciiOffset = (ctype_upper($char)) ? 65 : 97;
                $result .= chr(((ord($char) + $shift - $asciiOffset + 26) % 26) + $asciiOffset);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }

    $result = caesarCipher($text, $shift, $action);
    echo '<h1>Caesar Cipher</h1>';
    echo '<div class="container">';
    echo '<h2 class="animate">Hasil:</h2>';
    echo '<p>' . $result . '</p>';
}
?>
        <button> 
            <a href="index.html">Kembali</a>
        </button>
    <div> 
 </body>
</html>

