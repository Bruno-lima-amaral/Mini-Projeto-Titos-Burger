<?php #Head 
$nomePagina = "Fornecedor";
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
                        Cadastrar novo Fornecedor
                    </div>

                </div>
            </div>
        </div>

        <div class="row me-1 myTable">
            <div class="col-md-12">

                <table class="table myBorderTable">
                    <thead>
                        <tr>
                            <th class="col-md-2">Lista de Fornecedores</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Fornecedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Dados do Cliente</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="contato-tab" data-bs-toggle="tab" data-bs-target="#formContato" type="button" role="tab" aria-controls="contato" aria-selected="false" disable>Dados de Contato</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link disabled" id="endereco-tab" data-bs-toggle="tab" data-bs-target="#formEndereco" type="button" role="tab" aria-controls="endereco" aria-selected="false" disable>Dados de Endereço</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row new_user_form">
                                
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nome do responsável" aria-label="Nome" name="nome" id="nome">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Sobrenome do responsável" aria-label="Sobrenome" name="sobrenome" id="sobrenome">
                                </div>
                                <div class="col">
                                    Data de Fundação
                                    <input type="date" id="dataFundacao">
                                </div>
                            </div>

                            <div class="row md-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Razão Social" aria-label="razaoSocial" name="razaoSocial" id="razaoSocial">
                                </div>
                                <div class="col md-3">
                                    <input type="text" class="form-control" placeholder="Nome Fantasia" aria-label="nomeFantasia" name="nomeFantasia" id="nomeFantasia">
                                </div>
                            </div>
                            <div class="row new_user_form">
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="CNPJ" aria-label="CNPJ" name="cnpj" id="cnpj">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Inscrição Estadual" aria-label="Inscricao Estadual" name="inscricaoEstadual" id="inscricaoEstadual">
                                </div>
                                <div class="col-3">
                                    <input type="text" class="form-control" placeholder="Inscrição Municipal" aria-label="Inscrição Municipal" name="inscricaoMunicipal" id="inscricaoMunicipal">
                                </div>
                                <div class="col-3">
                                    Isento Inscrição Municipal
                                    <select name="isInMunicipal" id="isInMunicipal">
                                            <option value="-">Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="0">Não</option>
                                        </select>
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
                        <div class="tab-pane fade" id="formEndereco" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row g-3 new_user_form">
                                <div class="col-md-6">
                                    <label for="cep" class="form-label">CEP</label>
                                    <input type="email" class="form-control" name="cep" id="cep">
                                </div>
                                <select name="mainEndereco" id="mainEndereco">
                                    <option value="-" selected>Endereço Principal</option>
                                    <option value="1">Sim</option>
                                    <option value="0">Não</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="logradouro" class="form-label">Logradouro</label>
                                    <input type="email" class="form-control" name="logradouro" id="logradouro">
                                </div>
                                <div class="col-md-4">
                                    <label for="numero" class="form-label">Nº</label>
                                    <input type="number" class="form-control" name="numero" id="numero">
                                </div>
                                <div class="col-md-4">
                                    <label for="complemento" class="form-label">Complemento</label>
                                    <input type="text" class="form-control" name="complemento" id="complemento">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="bairro" class="form-label">Bairro</label>
                                    <input type="email" class="form-control" name="bairro" id="bairro">
                                </div>
                                <div class="col-md-3">
                                    <label for="cidade" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="cidade">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputPassword4" class="form-label">UF</label>
                                    <input type="text" class="form-control" name="uf" id="uf">
                                </div>
                                <div class="col-md-1 mt-4">
                                    <button class="btn btn-primary btnIncluir" type="button" id="incluirEndereco" onclick="incluirEndereco()">Incluir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="criarUsuario" onclick="criarFornecedor()">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Biblioteca de Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Criando Usuário -->
    <script>
        function criarFornecedor() {
            let nome = $('#nome').val()
            let sobrenome = $('#sobrenome').val()
            let genero = $('#idGenero option:selected').val()
            let dataFun = $('#dataFundacao').val()
            let razaoSocial = $('#razaoSocial').val()
            let nomeFantasia = $('#nomeFantasia').val()
            let cnpj = $('#cnpj').val()
            let inscricaoEstadual = $('#inscricaoEstadual').val()
            let inscricaoMunicipal = $('#inscricaoMunicipal').val()
            let isInMunicipal = $('#isInMunicipal option:selected').val()


            if (nome != '' && sobrenome != '' && genero != '-' && dataFun != '-' && razaoSocial != '' && nomeFantasia != '' && nomeFantasia != ''
            && cnpj != '' && inscricaoEstadual != '' && inscricaoMunicipal != '' && isInMunicipal != '-') {

                $.ajax({
                    url: 'api/cadastroFornecedor.php',
                    type: 'POST',
                    data: {
                        nome: nome,
                        sobrenome: sobrenome,
                        genero: genero,
                        dataFun: dataFun,
                        razaoSocial: razaoSocial,
                        nomeFantasia: nomeFantasia,
                        cnpj: cnpj,
                        inscricaoEstadual: inscricaoEstadual,
                        inscricaoMunicipal: inscricaoMunicipal,
                        isInMunicipal: isInMunicipal
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
                        $('#endereco-tab').removeClass('disabled')

                        $('#contato-tab').prop("disabled", false)
                        $('#endereco-tab').prop("disabled", false)
                        $('#criarUsuario').prop("onclick", false)
                        $('#criarUsuario').prop("disabled", true)



                        Swal.fire(
                            'Dados Enviados!',
                            '',
                            'success'
                        )


                    }
                })

            } else  {
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

            function incluirEndereco() {
                let cep = $('#cep').val()
                let mainEndereco = $('#mainEndereco option:selected').val()
                let logradouro = $('#logradouro').val()
                let numero = $('#numero').val()
                let complemento = $('#complemento').val()
                let bairro = $('#bairro').val()
                let cidade = $('#cidade').val()
                let uf = $('#uf').val()

                $.ajax({
                    url: 'api/cadastroEndereco.php',
                    type: 'POST',
                    data: {
                        cep: cep,
                        mainEndereco: mainEndereco,
                        logradouro: logradouro,
                        numero: numero,
                        complemento: complemento,
                        bairro: bairro,
                        cidade: cidade,
                        uf: uf


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

                        $('#incluirEndereco').prop("disabled", true)




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