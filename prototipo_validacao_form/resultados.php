<?php  
    $user_name = $_POST['name'];
    $user_cpf_pass = $_POST['cpf_pass'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_cnh = $_POST['cnh'];
    $user_vali_cnh = $_POST['vali_cnh'];
    $user_cep = $_POST['cep'];
    $user_nome_rua = $_POST['nome_rua'];
    $user_num_end = $_POST['num_end'];
    $user_nome_bairro = $_POST['nome_bairro'];
    $user_complemento = $_POST['complemento'];
    $user_nome_cidade = $_POST['nome_cidade'];
    $user_nome_estado = $_POST['nome_estado'];
    $user_nome_pais = $_POST['nome_pais'];

    if(empty($user_name)){
        $name_error = 'Por favor insira seu nome';
    }
    if(empty($user_cpf_pass)){
        $cpf_pass_error = 'Por favor insira seu CPF';
    }
    if(empty($user_email)){
        $email_error = 'Por favor insira seu Email';
    }
    if(empty($user_phone)){
        $phone_error = 'Por favor insira seu telefone';
    }
    if(empty($user_cnh)){
        $cnh_error = 'Por favor insira seu CNH';
    }
    if(empty($user_vali_cnh)){
        $_error = 'Por favor insira a validade do CNH';
    }
    if(empty($user_cep)){
        $cep_error = 'Por favor insira o CEP';
    }
    if(empty($user_nome_rua)){
        $nome_rua_error = 'Por favor insira o nome da rua';
    }
    if(empty($user_num_end)){
        $num_end_error = 'Por favor insira o número do endereço';
    }
    if(empty($user_nome_bairro)){
        $nome_bairro_error = 'Por favor insira o nome do bairro';
    }
    if(empty($user_nome_cidade)){
        $nome_cidade_error = 'Por favor insira o nome da cidade';
    }
    if(empty($user_nome_estado)){
        $nome_estado_error = 'Por favor insira o nome do estado';
    }
    if(empty($user_nome_pais)){
        $nome_pais_error = 'Por favor insira o nome do país';
    }
    
?>