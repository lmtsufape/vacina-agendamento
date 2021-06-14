<div >


    <div id="alerta{{$candidato->id}}" class="col-md-12" style="display: none;">
        <div class="alert " role="alert">
            <p></p>
        </div>
    </div>

    <form id="form{{$candidato->id}}" >
        @csrf
        <input type="hidden" name="id" value="{{$candidato->id}}" >
        <div class="row">
            <div class="col-md-10 pl-0">
                <h4>Informações pessoais</h4>
            </div>
            <div class="col-md-2 pl-0">
            @can('editar-candidato')
                    <button type="button" id="buttonEditar{{$candidato->id}}" style="display: block;" onclick="editar({{$candidato->id}})" class="btn btn-info">Editar</button type="button">
                    <button type="button" id="buttonAtualizar{{$candidato->id}}" style="display: none;" onclick="editar({{$candidato->id}})" class="btn btn-info">Atualizar</button type="button">
                @endcan
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="nome_{{$candidato->id}}">Nome completo</label>
                <input id="nome_{{$candidato->id}}" type="text" class="form-control" name="nome_completo" disabled value="{{ $candidato->nome_completo }}"    >
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="data_nacimento_{{$candidato->id}}">Data de nascimento</label>
                <input id="data_nacimento_{{$candidato->id}}" type="date" class="form-control" name="data_de_nascimento" disabled value="{{ $candidato->data_de_nascimento }}"  >
            </div>
            <div class="col-md-6">
                <label for="cpf_{{$candidato->id}}">CPF</label>
                <input id="cpf_{{$candidato->id}}" type="text" class="form-control"  name="cpf" disabled value="{{ $candidato->cpf }}" >
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="n_cartao_sus_{{$candidato->id}}">Número do cartão do SUS</label>
                <input id="n_cartao_sus_{{$candidato->id}}" type="text" class="form-control"  name="numero_cartao_sus" disabled value="{{ $candidato->numero_cartao_sus }}"  >
            </div>
            <div class="col-md-6">
                <label for="sexo_{{$candidato->id}}">Sexo</label>
                <input id="sexo_{{$candidato->id}}" type="text" class="form-control"  disabled value="{{$candidato->sexo}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="nome_mae_{{$candidato->id}}">Nome completo da mãe</label>
                <input id="nome_mae_{{$candidato->id}}" type="text" class="form-control"  name="nome_da_mae" disabled value="{{ $candidato->nome_da_mae }}" >
            </div>
        </div>
    </form>
    <script>

        var valueNascimento = document.getElementById("data_nacimento_"+"{{$candidato->id}}").value;
        var valueNome = document.getElementById("nome_"+"{{$candidato->id}}").value;
        var valueCpf = document.getElementById("cpf_"+"{{$candidato->id}}").value;
        var valueSus = document.getElementById("n_cartao_sus_"+"{{$candidato->id}}").value;
        var valueMae = document.getElementById("nome_mae_"+"{{$candidato->id}}").value;

        function editar(id){
            var alerta = document.getElementById("alerta"+id);
            var buttonEditar = document.getElementById("buttonEditar"+id);
            var buttonAtualizar = document.getElementById("buttonAtualizar"+id);
            var inputNome = document.getElementById("nome_"+id);
            var inputCpf = document.getElementById("cpf_"+id);
            var inputNascimento = document.getElementById("data_nacimento_"+id);
            var inputSus = document.getElementById("n_cartao_sus_"+id);
            var inputMae = document.getElementById("nome_mae_"+id);
            var alerta = document.getElementById("alerta"+id);

            if (buttonEditar.style.display == "block") {
                buttonAtualizar.style.display = "block";
                buttonEditar.style.display = "none";
                buttonEditar.classList.add("btn-success");
                inputNome.disabled = false;
                inputSus.disabled = false;
                inputCpf.disabled = false;
                inputNascimento.disabled = false;
                inputMae.disabled = false;
                // console.log(inputNome)
                buttonEditar.innerHTML = "Atualizar";
            } else {


                let dados = $('#form'+id).serialize();

                $.ajax({
                    type: 'post',
                    url: '{{ route("candidato.editar") }}',
                    data: dados,
                    dataType: 'json',
                    success: function(res){


                        console.log(res.message)
                        var p = document.createElement("p");
                        p.innerHTML = res.message ;
                        alerta.children[0].appendChild(p);
                        alerta.children[0].classList.add("alert-success");
                        alerta.children[0].classList.remove("alert-danger");
                        alerta.style.display = 'block';
                        alerta.children[0].children[0].innerText = res.message
                    },
                    error: function(err){
                        inputNome.value = valueNome;
                        inputCpf.value = valueCpf
                        inputNascimento.value = valueNascimento;
                        inputSus.value = valueSus;
                        inputMae.value = valueMae;
                        var obj = JSON.parse(err.responseText);
                        console.log(obj)
                        for (x in obj) {
                            for (y in obj[x]) {
                                var p = document.createElement("p");
                                p.innerHTML = obj[x][y]
                                alerta.children[0].appendChild(p);
                            }
                        }
                        alerta.style.display = 'block';
                        alerta.children[0].classList.remove("alert-success");
                        alerta.children[0].classList.add("alert-danger");

                    }
                });

                buttonAtualizar.style.display = "none";
                buttonEditar.style.display = "block";
                buttonEditar.classList.remove("btn-success");
                inputNome.disabled = true;
                inputSus.disabled = true;
                inputCpf.disabled = true;
                inputNascimento.disabled = true;
                inputMae.disabled = true;
                buttonEditar.innerHTML = "Editar";
            }

            for (i = 0; i < alerta.children[0].children.length; i++) {
                alerta.children[0].children[i].remove();
            }
            alerta.children[0].classList.remove("alert-success");
            alerta.children[0].classList.remove("alert-danger");

        }


    </script>
</div>
