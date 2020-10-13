function exibirCategorias(categoria){
    //alert(categoria);
    
    let caixaDeProdutos = document.getElementsByClassName('box-produto');
    // console.log(caixaDeProdutos);

    for(let i=0; i<caixaDeProdutos.length; i++){
        //console.log(caixaDeProdutos[i].id);
        if(categoria == caixaDeProdutos[i].id){ // Estou comparando se a string que a função recebe é igual a ID de cada produto.
            caixaDeProdutos[i].style = "display:inline-block";
        }else{
            caixaDeProdutos[i].style = "display:none";
        }
    }
}

function exibirTodos(){
        let caixaDeProdutos = document.getElementsByClassName('box-produto');
    
        for(let i=0; i<caixaDeProdutos.length; i++){
        caixaDeProdutos[i].style = "display:inline-block";
    }
}

function destacar(imagem){
    console.log(imagem);
    if(imagem.height == 120){
        imagem.style = "height: 150px;";
    }else{
        imagem.style = "height: 120px;";
    }
}

function checkFrom(){
    let nome = document.getElementById('nome');
    let msg = document.getElementById('msg');

    if(nome.value.length != 0 && msg.value.length != 0){
        alert("Obrigado(a) " + nome.value + " pela mensagem, logo entraremos em contato!");
    }else{
        alert("Por favor, preencha os campos Nome e Mensagem!");
    }
}