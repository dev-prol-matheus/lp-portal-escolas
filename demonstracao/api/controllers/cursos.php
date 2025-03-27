<?php

require_once("../config/conexao.php");
include("../models/CursosModel.php");
include("../class/Cursos.php");

$requisicao = file_get_contents("php://input");
$dados = json_decode($requisicao, true);

$acao = $dados["acao"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && $acao) {

    switch ($acao) {

        case "cadastrar":
            $img = $dados["img"];
            $descricao =  $dados["descricao"];
            $segmento = $dados["segmento"];
            $data_inicio = $dados["data_inicio"];
            $turno = $dados["turno"];
            $valor = $dados["valor"];
            $status = 1;
            
            // $inicio_turma = $dados["inicio_turma"];

            $cursos_model = new CursosModel($connection);
            $cadastrar = $cursos_model->cadastrar(new Cursos(null, $img, $descricao, $segmento, $data_inicio, $turno, $valor, $status));

            if (!$cadastrar) {
                echo json_encode([
                    "status" => false,
                    "message" => "❌ Erro ao tentar cadastrar curso."
                ]);
                break;
            };

            echo json_encode([
                "status" => true,
                "message" => "✅ Curso cadastrado com sucesso!"
            ]);
            break;

        case "listar_cursos":
            $cursos_model = new CursosModel($connection);
            $cursos = $cursos_model->ler_todos();

            echo json_encode([
                "status" => true,
                "cursos" => $cursos
            ]);
            break;

        case "filtrar_cursos":
            $curso = isset($dados["curso"]) ? $dados["curso"] : null;
            $segmento = isset($dados["segmento"]) ? $dados["segmento"] : null;

            $filtro = "";

            if ($curso) {
                $filtro .= " and curso=$curso ";
            };

            if ($segmento) {
                $filtro .= " and segmento=$segmento ";
            };

            $cursos_model = new CursosModel($connection);
            $cursos_filtrados = $cursos_model->filtrar($filtro);

            echo json_encode([
                "status" => true,
                "cursos" => $cursos_filtrados
            ]);
            break;
            
        case "desativarcursos":
            $status_curso = isset($dados["status_curso"]) ? $dados["status_curso"] : null;
            $id = isset($dados['id']) ? $dados['id']: null;
            $cursos_model = new CursosModel($connection);
            if ($status_curso == 'desativar'){
                $trocar = $cursos_model->desativar($id);
            } else {
                $trocar = $cursos_model->ativar($id);
            }
            if (!$trocar){
                echo json_encode([
                    "status" => false,
                    "message" => 'Alteração não foi realizada, tente novamente!'
                ]);
                break;
                }
                echo json_encode([
                    "status" => True,
                    "Message" => 'alteração realizada com sucesso'
                ]);
                break;
            case "listar_cursos_home":
                $cursos_model = new CursosModel($connection);
                $cursos = $cursos_model->ler_todos_home();
    
                echo json_encode([
                    "status" => true,
                    "cursos" => $cursos
                ]);
                break;
            case "deletar":
                $id_curso = isset($dados["id_curso"]) ? $dados["id_curso"] : null;
    
                $cursos_model = new CursosModel($connection);
                $deletar = $cursos_model->deletar($id_curso);
    
                if (!$deletar) {
                    echo json_encode([
                        "status" => false,
                        "message" => "Não foi possível deletar o curso."
                    ]);
                    break;
                };
    
                echo json_encode([
                    "status" => true,
                    "message" => "Curso deletado da lista."
                ]);
                break;

            case "atualizar":
                // Pegue os dados do corpo da requisição
                $curso = isset($dados["curso"]) ? $dados["curso"] : null;
                $img = isset($dados["img"]) ? $dados["img"] : null;
                $descricao = isset($dados["descricao"]) ? $dados["descricao"] : null;
                $segmento = isset($dados["segmento"]) ? $dados["segmento"] : null;
                $turno = isset($dados["turno"]) ? $dados["turno"] : null;
                $valor = isset($dados["valor"]) ? $dados["valor"] : null;
                $data_inicio = isset($dados["data_inicio"]) ? $dados["data_inicio"] : null;

                    $cursos_model = new CursosModel($connection);
                    $curso = new Cursos($curso, $img, $descricao, $segmento, $data_inicio, $turno, $valor);
                    

                    $atualizar = $cursos_model->atualizar($curso);
            
                    if (!$atualizar) {
                        echo json_encode([
                            "status" => false,
                            "message" => "❌ Erro ao tentar atualizar curso."
                        ]);
                        break;
                    }
            
                    echo json_encode([
                        "status" => true,
                        "message" => "✅ Curso atualizado com sucesso!"
                    ]);
                break;
            case "coletar":
            $curso_id = isset($dados["curso"]) ? $dados["curso"] : null;
            $cursos_model = new CursosModel($connection);
            $coletar = $cursos_model->ler_por_id($curso_id);

            if (!$coletar) {
                echo json_encode([
                    "status" => false,
                    "message" => "Não foi possível coletar o id do curso."
                ]);
                break;
            };
            echo json_encode([
                "status" => true,
                "message" => "",
                "data" => $coletar
            ]);
            break;
};
};
