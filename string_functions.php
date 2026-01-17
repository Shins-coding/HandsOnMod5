<?php
$school   = "HOLY ANGEL UNIVERSITY";
$fullname = "Franshin Mendoza";
$messy    = "   Holy Angel University Labs   ";
$text     = "PHP String Processing and Manipulation Techniques";
$number   = "0955252536";
?>

<?php include("header.php"); ?>
<link rel="stylesheet" href="styles.css">

<table>
    <tbody>
    <tr>
        <th colspan="2">CHANGING THE CASE OF CHARACTERS</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?= strtolower($school) ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?= strtoupper($school) ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?= ucwords(strtolower($school)) ?></td>
    </tr>

    <tr>
        <th colspan="2">COUNTING CHARACTERS AND WORDS</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?= strlen($fullname) ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($fullname) ?></td>
    </tr>

    <tr>
        <th colspan="2">REMOVING AND REPLACING CHARACTERS</th>
    </tr>
    <tr>
        <td>Remove whitespaces from left</td>
        <td>"<?= ltrim($messy) ?>"</td>
    </tr>
    <tr>
        <td>Remove whitespaces from right</td>
        <td>"<?= rtrim($messy) ?>"</td>
    </tr>
    <tr>
        <td>Remove whitespace from left and right</td>
        <td>"<?= trim($messy) ?>"</td>
    </tr>
    <tr>
        <td>String replace</td>
        <td><?= str_replace("PHP", "PHP8", $text) ?></td>
    </tr>
    <tr>
        <td>String ireplace</td>
        <td><?= str_ireplace("php", "PHP", $text) ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?= str_repeat("HAU ", 3) ?></td>
    </tr>

    <tr>
        <th colspan="2">OTHER USEFUL BUILT-IN FUNCTIONS</th>
    </tr>
    <tr>
        <td>Is numeric (<?= $number ?>)</td>
        <td><?= is_numeric($number) ? "True" : "False" ?></td>
    </tr>
    <tr>
        <td>Number format (<?= $number ?>)</td>
        <td><?= number_format($number) ?></td>
    </tr>
    <tr>
        <td>Integer value (<?= $number ?>)</td>
        <td><?= intval($number) ?></td>
    </tr>
    <tr>
        <td>Length of string ("PHP")</td>
        <td><?= strlen("PHP") ?></td>
    </tr>
    <tr>
        <td>Find position of "P" in PHP</td>
        <td><?= strpos("PHP", "P") ?></td>
    </tr>
    <tr>
        <td>Get substring</td>
        <td><?= substr($text, 0, 15) ?></td>
    </tr>
    <tr>
        <td>Reverse string</td>
        <td><?= strrev("HAU") ?></td>
    </tr>
    <tr>
        <td>Pad string</td>
        <td><?= str_pad("HAU", 8, "*") ?></td>
    </tr>
    <tr>
        <td>Uppercase first letter</td>
        <td><?= ucfirst("holy angel") ?></td>
    </tr>
    <tr>
        <td>Count vowels in "HAU"</td>
        <td><?= substr_count("HAU", "A") + substr_count("HAU", "U") ?></td>
    </tr>
    </tbody>
</table>

<?php include("footer.php"); ?>
