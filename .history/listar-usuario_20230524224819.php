<h1>Listar Usuários</h1>
<?php

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
print "<table class='table table-hover table-striped'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Data Nascimento</th>";
    print "</tr>";
while ($row = $res->fetch_object()) {
    print "<tr>";
    print "<td>".$row->id."</td>";
    print "<td>".$row->nome."</td>";
    print "<td>".$row->email."</td>";
    print "<td>".$row->data_nasc."</td>";
    print "</tr>";
    }
    print "</table>";

}else{
    print "<p class= 'alert alert-danger'>Não encontrou resultados!</p>";
}

?>