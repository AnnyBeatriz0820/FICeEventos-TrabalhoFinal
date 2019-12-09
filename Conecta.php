<!--Conecta!-->
        <?php
        $conexao = new mysqli("localhost", "root", "","siteeventosefic");
        if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
        echo "Erro de conexao!";
        } else {

        $sql = "INSERT INTO Usuario ();

        VALUES (    3, '$_POST[Nome]',
                    '$_POST[CPF]',
                    '$_POST[E_mail]',
                    '$_POST[Endereco]',
                    '$_POST[Curso/Evento]',
                    )";
        if ($conexao ->query($sql) === TRUE) {
        echo "inserido com sucesso";
        } else {
        echo "Error: " . $sql . "<br>" . $conexao->error;
        }


        $sql = "SELECT Nome Salario, Endereco, Cidade, Estado, Bairro, Tipo_sangue, Etnia, Peso, Altura FROM siteeventosefic";
            $result = $conexao->query($sql);
            if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
            echo "Nome_completo: " . $row["Nome_completo"] . "<br>";
            echo "Sexo: " . $row["Sexo"] . "<br>";    
            echo "Telefone: " . $row["Telefone"] . "<br>";
            echo "Data_nascimento: " . $row["Data_nascimento"] . "<br>";
            echo "Email: " . $row["Email"] . "<br>";
            echo "Salario: " . $row["Salario"] . "<br>";
            echo "Endereco: " . $row["Endereco"] . "<br>";
            echo "Cidade: " . $row["Cidade"] . "<br>";
            echo "Estado: " . $row["Estado"] . "<br>";
            echo "Bairro: " . $row["Bairro"] . "<br>";
            echo "Tipo_sangue: " . $row["Tipo_sangue"] . "<br>";
            echo "Etnia: " . $row["Etnia"] . "<br>";
            echo "Peso: " . $row["Peso"] . "<br>";
            echo "Altura: " . $row["Altura"] . "<br><br>";
            }
        }

            else { echo "0 results";}
            $conexao->close();
            echo "OK";
        }
?>
