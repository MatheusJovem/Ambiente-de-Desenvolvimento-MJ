showData()
function showData(){
    const url = "http://localhost/3daw-av2-matheus-jovem/listarUnidades.php";
    fetch(url,{
        method:"GET",
    }).then(response => response.text()).then(response =>{
        results.innerHTML = response;
    }).catch(err => console.log(err));
}

function showData2(){

    const busca = document.getElementById('busca').value
    const form = new FormData()

    //console.log(busca);

    form.append('busca', busca);

    const url = "http://localhost/3daw-av2-matheus-jovem/mostrarBusca.php";

    fetch(url,{
        method:'POST',
        body:form
    }).then(response => response.text()).then(response =>{
        result.innerHTML = response;
    }).catch(err => console.log(err));
}

function incluirUnidade(){
    const marca = document.getElementById('marca').value
    const modelo = document.getElementById('modelo').value
    const qtdAssentos = document.getElementById('qtdAssentos').value
    const temBanheiro = document.getElementById('temBanheiro').value
    const temArCondicionado = document.getElementById('temArCondicionado').value
    const chassis = document.getElementById('chassis').value
    const placa = document.getElementById('placa').value
    const form = new FormData()
    
    form.append('marca', marca);
    form.append('modelo', modelo);
    form.append('qtdAssentos', qtdAssentos);
    form.append('temBanheiro', temBanheiro);
    form.append('temArCondicionado', temArCondicionado);
    form.append('chassis', chassis);
    form.append('placa', placa);

    const url = 'http://localhost/3daw-av2-matheus-jovem/incluirUnidade.php';

   fetch(url, {
        method:'POST',
        body:form
    }).then(response =>{
       response.json().then(result =>{
        //console.log(result)
        Swal.fire(result.message);
      
       }).catch(err => console.log(err)) 
    })
}

function deletarUnidade(id) {
    const form = new FormData();
    form.append('id', id);
    const url = 'http://localhost/3daw-av2-matheus-jovem/deletarUnidade.php';

    Swal.fire({
        title: 'Você tem certeza?',
        text: "Não pode ser desfeito",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText:"Cancelar",
        confirmButtonText: 'Sim, excluir'
      }).then((result) => {
        if (result.isConfirmed) {
            fetch(url, {
                method:"POST",
                body:form
            }).then(response =>{
                response.json().then(data =>{
                    Swal.fire(data.message);
                    showData();
                })
            }).catch(err => console.log(err))
        }
      })
}

function getId(id){
    const form = new FormData();
     form.append('id', id);
     const url = "http://localhost/3daw-av2-matheus-jovem/get_id.php";

     fetch(url, {
         method:"POST",
         body:form
     }).then(response =>{
         response.json().then(data =>{
            window.localStorage.setItem('unidade',JSON.stringify(data[0]));
             window.location.href = 'alterarUnidade.html';
         })
     })
}

showUserData()
function showUserData(){
    const unidade = JSON.parse(window.localStorage.getItem('unidade'));
    if(unidade!= null){
        console.log(unidade.marca)
        document.getElementById("id").value = unidade.id;
        document.getElementById("marca-1").value = unidade.marca;
        document.getElementById('modelo-1').value = unidade.modelo;
        document.getElementById('qtdAssentos-1').value = unidade.qtdAssentos;
        document.getElementById('temBanheiro-1').value = unidade.temBanheiro;
        document.getElementById('temArCondicionado-1').value = unidade.temArCondicionado;
        document.getElementById("chassis-1").value = unidade.chassis;
        document.getElementById("placa-1").value = unidade.placa;
    }else{
        console.log("")
    }
}

function alterarUnidade(){
    const id = document.getElementById("id").value;
    const marca = document.getElementById('marca-1').value
    const modelo = document.getElementById('modelo-1').value
    const qtdAssentos = document.getElementById('qtdAssentos-1').value
    const temBanheiro = document.getElementById('temBanheiro-1').value
    const temArCondicionado = document.getElementById('temArCondicionado-1').value
    const chassis = document.getElementById('chassis-1').value
    const placa = document.getElementById('placa-1').value
    const form = new FormData();

    form.append('id',id);
    form.append('marca', marca);
    form.append('modelo', modelo);
    form.append('qtdAssentos', qtdAssentos);
    form.append('temBanheiro', temBanheiro);
    form.append('temArCondicionado', temArCondicionado);
    form.append('chassis', chassis);
    form.append('placa', placa);

    const url = "http://localhost/3daw-av2-matheus-jovem/alterarUnidade.php";

    fetch(url,{
        method:"POST",
        body:form
    }).then(response=>{
        response.json().then(data =>{
            Swal.fire(data.message).then(result =>{
                if(result.isConfirmed){
                    window.location.href = "listarUnidades.html";
                    window.localStorage.removeItem('unidade');
                }
            });
        })
    })
}





