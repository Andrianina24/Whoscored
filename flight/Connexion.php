<?

$bdd = mysqli_connect('localhost', 'root', 'root');

if ($bdd->connect_error) {
    echo "error";
}
echo "connected";
