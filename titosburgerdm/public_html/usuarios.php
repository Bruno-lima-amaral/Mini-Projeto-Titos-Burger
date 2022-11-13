<?php #Head 
$nomePagina = "Usuarios";
include_once('includes/head.inc.php');
 include_once('../mvc/validation-cookie.php');
?>

<body class="container-fluid panel bg-white py-2">

    <main>
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 50px;">
            <h5 class="titos-title">Painel Administrativo</h5>

            <a href="#" class="nav-link nav-link-user">
                <ion-icon name="person-circle-outline"></ion-icon>
                Olá, Usuário!
            </a>
        </div>

        <div class="row me-1" style="margin-top: 35px;">

            <div class="col-md-1">
                <div class="btn-cadastrar">
                    <div class="cardCadastrarFornecedores bg-card-cadastrar" data-bs-toggle="modal" data-bs-target="#cadastrarCliente">
                        Cadastrar novo Usuário
                    </div>

                </div>
            </div>
        </div>

        <div class="row me-1 myTable">
            <div class="col-md-12">

                <table class="table myBorderTable">
                    <thead>
                        <tr>
                            <th class="col-md-2">Lista de Usuários</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color: #a3a0a0; color: #FFF;">
                            <th class="col-md-2 styleTable"><span class="myTextTable">&</span></th>
                            <td class="col-md-2 styleTable"><span class="myTextTable">Nome</span></td>
                            <td class="col-md-2 styleTable"><span class="myTextTable">Telefone-Celular</span></td>
                            <td class="col-md-2 styleTable"><span class="myTextTable">E-mail</span></td>
                            <td class="col-md-2 styleTable"><span class="myTextTable">Última Compra</span></td>
                            <td class="col-md-2 styleTable"><span class="myTextTable">Ações</span></td>
                        </tr>
                        <tr style="background-color: #d6d6d6;">
                            <th class="col-md-2 styleTable"><span class="myTextTable">&</span></th>
                            <th class="col-md-2 styleTable"><span class="myTextTable"></span></th>
                            <th class="col-md-2 styleTable"><span class="myTextTable"></span></th>
                            <th class="col-md-2 styleTable"><span class="myTextTable"></span></th>
                            <th class="col-md-2 styleTable"><span class="myTextTable"></span></th>
                            <th class="col-md-2 styleTable"><span class="myTextTable"></span></th>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </main>


    <div class="modal modal-titos" tabindex="-1" id="tables-views">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mesa 001 | Tempo 00:00</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Detalhes do consumo
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Fechar mesa</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="cadastrarCliente">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usúario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Dados do Usuário</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="contato-tab" data-bs-toggle="tab" data-bs-target="#formContato" type="button" role="tab" aria-controls="profile" aria-selected="false" disabled>Dados de Contato</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="permissao-tab" data-bs-toggle="tab" data-bs-target="#formPermissoes" type="button" role="tab" aria-controls="contact" aria-selected="false" disabled>Permissões</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row new_user_form">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" name="nome" id="nome">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Sobrenome" aria-label="Sobrenome" name="sobrenome" id="sobrenome">
                                </div>
                                <div class="col">
                                    <div class="col-sm-10">
                                        <select name="genero" id="idGenero">
                                            <option value="-">Gênero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    Data de nascimento
                                    <input type="date" name="dataNasc" id="dataNasc">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Login" aria-label="Login" name="login" id="login">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="formContato" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row new_user_form">
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Contato</label>
                                        <input type="text" class="form-control" name='contato' id="contato">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Método de
                                            contato</label>
                                        <select class="form-select" aria-label="Default select example" id="tipoContato" name="tipoContato">
                                            <option selected value="-">Tipo de contato</option>
                                            <option value="1">Whatsapp</option>
                                            <option value="2">E-mail</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 mt-4">
                                    <button type="button" class="btn btn-primary" id="incluirContato" onclick="incluirContato()">Incluir</button>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="formPermissoes" role="tabpanel" aria-labelledby="formPermissoes-tab">
                            <div class="row g-3 new_user_form">
                                <div class="col-3">
                                    Modulo
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected name="moduloUsuario" id="moduloUsuario">Módulo</option>
                                        <option value="1">Permissão 1</option>
                                        <option value="2">Permissão 2</option>
                                        <option value="3">Permissão 3</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    Tipo de permissão
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected name="typeModuloUsuario" id="typeModuloUsuario">Módulo</option>
                                        <option value="1">Leitura</option>
                                        <option value="2">Escrita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-2 mt-4">
                                <button type="button" class="btn btn-primary" id="incluirPermissao" onclick="incluirPermissao()">Incluir</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="criarUsuario" onclick="criarUsuario()">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Biblioteca de Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Criando Usuário -->
    <script>
        function criarUsuario() {
            let nome = $('#nome').val()
            let sobrenome = $('#sobrenome').val()
            let dataNasc = $('#dataNasc').val()
            let genero = $('#idGenero option:selected').val()
            let login = $('#login').val()

            if (nome != '' && sobrenome != '' && dataNasc != '' && genero != '-' && login != '') {

                $.ajax({
                    url: 'api/cadastroCliente.php',
                    type: 'POST',
                    data: {
                        nome: nome,
                        sobrenome: sobrenome,
                        dataNasc: dataNasc,
                        genero: genero,
                        cpf: login
                    },
                    beforeSend: () => {
                        let timerInterval
                        Swal.fire({
                            title: 'Auto close alert!',
                            html: 'I will close in <b></b> milliseconds.',
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    },
                    success: () => {
                        $('#contato-tab').removeClass('disabled')
                        $('#permissao-tab').removeClass('disabled')

                        $('#contato-tab').prop("disabled", false)
                        $('#permissao-tab').prop("disabled", false)
                        $('#criarUsuario').prop("onclick", false)
                        $('#criarUsuario').prop("disabled", true)



                        Swal.fire(
                            'Dados Enviados!',
                            '',
                            'success'
                        )


                    }
                })

            } else {
                alert('Preencha Todos os campos')
            }

        }

        function incluirContato() {
            let contato = $('#contato').val()
            let tipoContato = $('#tipoContato option:selected').val()

            if (contato != '' && tipoContato != '') {

                $.ajax({
                    url: 'api/cadastroContato.php',
                    type: 'POST',
                    data: {
                        tipoContato: tipoContato,
                        contato: contato

                    },
                    beforeSend: () => {
                        let timerInterval
                        Swal.fire({
                            title: 'Auto close alert!',
                            html: 'I will close in <b></b> milliseconds.',
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    },
                    success: () => {

                        $('#incluirContato').prop("disabled", true)




                        Swal.fire(
                            'Dados Enviados!',
                            '',
                            'success'
                        )


                    }
                })

            } else {
                alert("Preencha todos os dados")
            }


        }

        function incluirPermissao() {
            let moduloUsuario = $('moduloUsuario').val()
            let typeModuloUsuario = $('typeModuloUsuario').val()

            $.ajax({
                url: 'api/cadastroModulosUsuarios.php',
                type: 'POST',
                data: {
                    moduloUsuario: moduloUsuario,
                    typeModuloUsuario: typeModuloUsuario


                },
                beforeSend: () => {
                    let timerInterval
                    Swal.fire({
                        title: 'Auto close alert!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                },
                success: () => {

                    $('#incluirPermissao').prop("disabled", true)




                    Swal.fire(
                        'Dados Enviados!',
                        '',
                        'success'
                    )


                }
            })

        }
    </script>

    <?php include_once("includes/footer.inc.php"); ?>