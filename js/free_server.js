
   // Faz a requisição para o arquivo JSON
    
    fetch('js/free_server.json')
        .then(response => response.json()) // Converte a resposta em um objeto JSON
        .then((free)=>showInfoFree(free));
        function showInfoFree(free){
          const listb =document.getElementsByClassName("Grupscard_freelancersavaliable")[0];

          free.forEach((trabalho) => {
            listb.innerHTML += `
            <div class="card_freelanceravaliable">
            <i class="fa fa-car" style="font-size:80px;"></i>
                                <p class="Grupscard_freelancersavaliable_title">${trabalho.title1}</p>
                                ${console.log(trabalho.title1)}
                                <p class="Grupscard_freelancersavaliable_subtitle">${trabalho.type2}</p>
                                <i class="fa fa-car" style="font-size:16px;"></i>
                                <div class="card_freelancer_details">
                                    <div class="card_freelancer_details_taxahoraria">
                                        <p class="card_freelancer_details__p">${trabalho.taxa}</p>
                                        <p class="card_freelancer_details__number"> $ 12</p>
                                    </div>
                                    <div class="card_freelancer_details_lanceganho">
                                        <p class="card_freelancer_details__p">${trabalho.lance}</p>
                                        <p class="card_freelancer_details__number">31</p>
                                    </div>
                                    <div class="card_freelancer_details_recontratado">
                                        <p class="card_freelancer_details__p">${trabalho.recont}</p>
                                        <p class="card_freelancer_details__number">28</p>
                                    </div>
                                </div>
                                <button class="card_freelancer_button">Ver perfil</button>
                                </div`

          });
        }
        

