fetch("../api-admin-amboise/index_api.php?tuveuxquoi=tout_agenda")

.then(response=>{
    return response.json()
})

.then(data=>{
    console.log(data)
    let tout_agenda_amboise=""
    data.forEach(ligne=>{    
    tout_agenda_amboise+=`
        <div class="card-agenda">
            <div class="top-img">
                <img src="./img/${ligne.img_agenda}" alt="">
            </div>
            <div class="bottom-info">
                <h3>${ligne.titre_agenda}</h3>
                <div class="row-info">
                    <i class='bx bx-calendar'></i><p>${ligne.date_debut_agenda} - ${ligne.date_fin_agenda}</p>
                </div>
                <div class="row-info">
                    <i class='bx bx-euro'></i><p>${ligne.tarif_agenda}</p>
                </div>
                <div class="row-info">
                    <i class='bx bx-current-location' ></i><p>${ligne.lieu_agenda}</p>
                </div>
                <a href="#" class="btn-card-agenda">En savoir plus</a>
            </div>
        </div>
    `
    })
    document.querySelector("#agenda").innerHTML=tout_agenda_amboise
})
