<?php #Head 
$nomePagina = "Cliente";
include_once('includes/head.inc.php');
include_once('../mvc/validation-cookie.php')
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
                        Cadastrar novo cliente
                    </div>

                </div>
            </div>
        </div>

        <div class="row me-1 myTable">
            <div class="col-md-12">

                <table class="table myBorderTable">
                    <thead>
                        <tr>
                            <th class="col-md-2">Lista de Clientes</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
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
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row new_user_form">
                                
                            
                              

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                               
                            <div class="col-sm-10">
                                        <select name="tipo-pessoa" id="minhaLista" onchange="alimentarcampo();">
                                            <option value="--" selected disabled>Escolha</option>
                                            <option value="pf">Pessoa Física</option>
                                            <option value="pj">Pessoa Júridica</option>
                                        </select>
                                    </div>
                                <div class="col">
                                    <br>
                                    <input type="text" class="form-control disabled" placeholder="" aria-label="Nome" id="nome-razao">
                                </div>
                                <div class="col">
                                    <br>
                                    <input type="text" class="form-control disabled" placeholder="" aria-label="Sobrenome" id="sobrenome">
                                </div>
                                <div class="col">
                                    <br>
                                    <input type="email" class="form-control disabled" placeholder="" aria-label="email" id="email">
                                </div>
                                <div class="col">
                                    <br>
                                    <div class="col-sm-10">
                                        <select name="genero" id="idGenero">
                                            <option value="-">Gênero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">Cisgênero</option>
                                            <option value="4">Transgênero</option>
                                            <option value="5">Agênero</option>
                                            <option value="6">Não-Binario</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="col disabled">
                                    <label id="labelDataNasc">Data de nascimento</label>
                                    <input type="date" name="dataNasc" id="dataNasc" class="disabled">
                                </div>
                            

                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control disabled" placeholder="" aria-label="rg" id="rg">
                                        <select name="IE" id="isentoIE">
                                            <option value="--" selected disabled>Isento IE?</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control disabled" placeholder="" aria-label="cpf" id="cpf">
                                </div>
                           
                            </div> 
                                        
                            <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="criaUsuario" onclick="criarUsuario()">Cadastrar</button>
                            </div>
                        </div>
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
                                    <button type="button" class="btn btn-primary btnIncluir" id="incluirContato" onclick="criarContato()">Incluir</button>
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
                
            </div>
        </div>
    </div>

    <!-- Biblioteca de Alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Criando Usuário -->
    <script>
        function alimentarcampo() {
            var minhaLista = document.getElementById("minhaLista");
            var tipoPessoa = minhaLista.options[minhaLista.selectedIndex].value;
            if(tipoPessoa == "pf"){
                document.getElementById("nome-razao").placeholder = "Digite o Nome";
                document.getElementById("email").placeholder = "Digite o Email de Contato";
                document.getElementById("email").style.display = "block";
                document.getElementById("nome-razao").style.display = "block";
                document.getElementById("sobrenome").placeholder = "Digite o sobrename";
                document.getElementById("sobrenome").style.display = "block";
                document.getElementById("rg").placeholder = "RG";
                document.getElementById("rg").style.display = "block";
                document.getElementById("cpf").placeholder = "CPF";
                document.getElementById("cpf").style.display = "block";
                document.getElementById("dataNasc").style.display = "block";
                document.getElementById("labelDataNasc").style.display = "block";
                document.getElementById("idGenero").style.display = "block";
                document.getElementById("isentoIE").style.display = "none";
            };
            if(tipoPessoa == "pj"){
                document.getElementById("nome-razao").placeholder = "Razão Social";
                document.getElementById("nome-razao").style.display = "block";
                document.getElementById("sobrenome").placeholder = "Fantasia";
                document.getElementById("sobrenome").style.display = "block";
                document.getElementById("email").placeholder = "Digite o Email de Contato";
                document.getElementById("email").style.display = "block";
                document.getElementById("isentoIE").style.display = "block"; 
                document.getElementById("cpf").placeholder = "CNPJ";
                document.getElementById("cpf").style.display = "block";
                document.getElementById("idGenero").style.display = "none";
                document.getElementById("dataNasc").style.display = "none";
                document.getElementById("labelDataNasc").style.display = "none";
                document.getElementById("rg").style.display = "none";
            };
        };




        function criarUsuario() {
            let nome = $('#nome').val()
            let sobrenome = $('#sobrenome').val()
            let dataNasc = $('#dataNasc').val()
            let genero = $('#idGenero option:selected').val()
            let minhaLista = $('#minhalista option:selected').val()
            let cpf = $('#cpf').val()
            let rg = $('#rg').val()

            if (nome != '' && sobrenome != '' != '' && tipoPersona != '-') {

                $.ajax({
                    url: 'api/cadastroCliente.php',
                    type: 'POST',
                    data: {
                        nome: nome,
                        minhaLista: minhaLista,
                        sobrenome: sobrenome,
                        dataNasc: dataNasc,
                        genero: genero,
                        cpf: cpf,
                        rg: rg
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
                        $('#criaUsuario').prop("onclick", false)
                        $('#criaUsuario').prop("disabled", true)



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

        function criarContato() {
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