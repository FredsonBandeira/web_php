
    // Faz a requisição para o arquivo JSON
    
    fetch('js/server.json')
        .then(response => response.json()) // Converte a resposta em um objeto JSON
        .then((produts)=>showInfoTra(produts));
        function showInfoTra(produts){
          const listb =document.getElementsByClassName("Grupscard_ultimosprojetos_flex")[0];

          produts.forEach((trabalho) => {
            listb.innerHTML += `
            <div class="cardT1_ultimosprojetos_div CardsUltimoProjeto">
                      <div class="cardT1Left">
                          <p class="card_ultimosprojetos_title">${trabalho.title}</p>
                          
                          <p class="card_ultimosprojetos_typeUrgent">${trabalho.type}</p>
                          <div class="card_ultimosprojetos_detalhes">
                              <i class="fa fa-car" style="font-size:16px;"></i>
                              <p class="card_ultimosprojetos_quantlances">${trabalho.qtyLances}</p>
                              <i class="fa fa-car" style="font-size:16px;"></i>
                              <p class="card_ultimosprojetos_lancemedios">${trabalho.avgLance}</p>
                              <i class="fa fa-car" style="font-size:16px;"></i>
                              <p class="card_ultimosprojetos_meses">${trabalho.meses}</p>
                          </div>
      
                          <div class="card_ultimosprojetos_atributos_div">
                          ${trabalho.attributes.map(attr => `<p class="card_ultimosprojetos_atributos">${attr}</p>`).join('')}
                        </div>
                      </div>
                      <div class="cardT1right">
                          <p class="card_ultimosprojetos_price">${trabalho.price}</p>
                          <p class="card_ultimosprojetos_priceDescription">${trabalho.priceDescription}</p>
                          <button class="card_ultimosprojetos_buttonSubmit">lance agora</button>
                      </div>
                  </div>`

          });
        }
        

