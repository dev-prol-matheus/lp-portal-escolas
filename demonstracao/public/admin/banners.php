<?php

require_once("../../api/config/conexao.php");
include("../../api/models/BannersModel.php");

$bannersModel = new BannersModel($connection);

// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['img'])) {
//     // Verifica se foi enviado um arquivo e se não houve erro no upload
//     if ($_FILES['img']['error'] == 0) {
//         $diretorio = 'uploads/'; // Diretório onde as imagens serão salvas
//         $arquivoTmp = $_FILES['img']['tmp_name']; // Caminho temporário do arquivo
//         $nomeArquivo = basename($_FILES['img']['name']); // Nome original do arquivo

//         // Valida a extensão do arquivo (permitindo apenas imagens)
//         $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
//         $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

//         if (!in_array($extensao, $extensoesPermitidas)) {
//             $_SESSION['mensagem'] = "Erro: Apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
//             $_SESSION['tipo_mensagem'] = "erro";
//         } else {
//             // Gera um nome único para o arquivo
//             $nomeUnico = $_FILES['img']['name'];
//             $caminhoImagem = $diretorio . $nomeUnico;

//             // Move o arquivo para o diretório de uploads
//             if (move_uploaded_file($arquivoTmp, $caminhoImagem)) {
//                 // Insere o caminho da imagem no banco de dados
//                 try {
//                     $stmt = $connection->prepare("INSERT INTO banner (imagem, indice) VALUES (:imagem, 0)");
//                     $stmt->bindParam(':imagem', $caminhoImagem);
//                     $stmt->execute();

//                     $_SESSION['mensagem'] = "Imagem salva com sucesso!";
//                     $_SESSION['tipo_mensagem'] = "sucesso";
//                 } catch (PDOException $e) {
//                     $_SESSION['mensagem'] = "Erro ao salvar no banco de dados: " . $e->getMessage();
//                     $_SESSION['tipo_mensagem'] = "erro";
//                 }
//             } else {
//                 $_SESSION['mensagem'] = "Erro ao mover o arquivo para o diretório de uploads.";
//                 $_SESSION['tipo_mensagem'] = "erro";
//             }
//         }
//     } else {
//         $_SESSION['mensagem'] = "Erro: Nenhum arquivo enviado ou erro no upload.";
//         $_SESSION['tipo_mensagem'] = "erro";
//     }

//     header("Location: banners.php");
//     exit();
// }

// Processa a alteração do índice para 1 (definir como principal)
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['definir_principal'])) {
//     if (isset($_POST['id_banner'])) {
//         $idBanner = $_POST['id_banner']; // ID do banner a ser atualizado

//         try {
//             $connection->beginTransaction();

//             // Define todas as imagens como secundárias
//             $stmt = $connection->prepare("UPDATE banner SET indice = 0");
//             $stmt->execute();

//             // Define a imagem selecionada como principal
//             $stmt = $connection->prepare("UPDATE banner SET indice = 1 WHERE id = :id");
//             $stmt->bindParam(':id', $idBanner);
//             $stmt->execute();

//             $connection->commit();
//             $_SESSION['mensagem'] = "Banner definido como principal com sucesso!";
//             $_SESSION['tipo_mensagem'] = "sucesso";
//         } catch (PDOException $e) {
//             $connection->rollBack();
//             $_SESSION['mensagem'] = "Erro ao atualizar o índice: " . $e->getMessage();
//             $_SESSION['tipo_mensagem'] = "erro";
//         }

//         // Recarrega a página
//         header("Location: banners.php");
//         exit();
//     } else {
//         echo "Erro: ID do banner não foi enviado.";
//     }
// }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Escola de Enfermagem Israel | Gerenciamento de Banners</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/banner.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

    <?php include "includes/header_admin.php"; ?>

    <div class="container mt-5">
        <h2 class="mb-3" style="color: #29166F;">Cadastro de Banner</h2>
        <p class="mb-4" style="color: #29166F; font-size: 1.1rem;">Nesta área, você pode visualizar os banners cadastrados e escolher o banner principal. Utilize a busca para encontrar banners específicos e o botão para cadastrar novos banners.</p>

        <div class="row mb-3">
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0" style="justify-content: flex-end; display: flex; width: 100%">
            <!-- Botão que abre a modal -->
                <button class="btn-p" style="background-color: #FEB21F; color: #FFF;" data-bs-toggle="modal" data-bs-target="#addBlogModal">Cadastrar Novo banner</button>
            </div>
        </div>

        <table class="table table-bordered table-striped table-hover" id="BlogsList">
            <thead style="background-color: #29166F; color: #FFF;">
                <tr>
                    <th>Banner</th>
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $banners = $bannersModel->listar_todos();
                if ($banners) {
                    foreach ($banners as $row) {;
                    ?>
                <tr>
                    <td><img src="<?php echo "./uploads/" . $row['imagem']; ?>" style='max-width: 400px;'></td>
                    <td><?php echo $row['indice'] == 1 ? 'Principal' : 'Secundário'; ?></td>
                    <td>
                        <button class="btn-p" style="background-color: #FEB21F; color: #FFF;" onclick="definirBannerPrincipal(<?php echo $row['id']; ?>)">Definir como Principal</button>
                        <button class='btn btn-danger' style="width: 45%; margin: 5px" onclick="deletarBanner(<?php echo $row['id']; ?>)">Apagar</button>
                    </td>
                </tr>

                <?php }} else { ?>
                <tr>
                    <td>Nenhum banner encontrado no momento...</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
                

    <script src="./assets/js/banners.js"></script>

    <?php
    include "includes/modals/feedback_admin.php"; 
    include "includes/modals/cadastrar_banners.php";
    include "includes/footer_admin.php";
    ?>

</body>
<!-- // Consulta os banners no banco de dados
    // $sql = "SELECT id, imagem, indice FROM banner";
    // $stmt = $connection->query($sql);

    // // Verifica se há resultados
    // if ($stmt->rowCount() > 0) {
    //     echo '<table border="1" cellpadding="10" cellspacing="0">';
    //     echo '<tr>
    //             <th>Banner</th>
    //             <th>Status</th>
    //             <th>Ação</th>
    //           </tr>';
    //     while ($row = $stmt->fetch()) {
    //         echo '<tr>';
    //         echo '<td><img class="img-banner"src="' . $row['imagem'] . '" alt="Banner"></td>';
    //         echo '<td>' . ($row['indice'] == 1 ? 'Principal' : 'Secundário') . '</td>';
    //         echo '<td>
    //                 <form action="banners.php" method="POST" class="form_principal"style="display:inline;">
    //                     <input type="hidden" name="id_banner" value="' . $row['id'] . '">
    //                     <button type="submit" name="definir_principal" class="botao_principal">Definir como Principal</button>
    //                 </form>
    //               </td>';
    //         echo '</tr>';
    //     }
    //     echo '</table>';
    // } else {
    //     echo "Nenhum banner encontrado.";
    // } -->
</html>