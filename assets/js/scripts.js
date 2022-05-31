window.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector('input'); 

    search.addEventListener('keyup', function() {

        let form = document.querySelector('#form');
        let data = new FormData(form);

        fetch("../traitement/traitement-citiesFirstLetter.php", {
            method: "POST", 
            body: data,
        }) 
        .then((resp) => resp.json())
        .then((resp) => {

            const citiesFirstLetter = resp;
            const input = search.value;

            const resCityByFirstLetters = citiesFirstLetter.filter(city => city.titre.toLocaleLowerCase().includes(input.toLocaleLowerCase()));

            let suggest = '';

            if(input !='')
            {
                // if(suggest != '')
                // {
                    resCityByFirstLetters.forEach(res =>

                        suggest +=`

                        <p class="suggestion"><a href="element.php?id=${res.id}">${res.titre}</a></p>
                        `
                    )
                // }
                // else 
                // {
                //     suggest = '<p class="suggestion">Aucune suggestion n\'a été trouvé.</p>';
                // }
            }  

            document.querySelector('#suggestionsFirstLetter').innerHTML = suggest;
        }) 

        // let formulaire = document.querySelector('#form');
        // let info = new FormData(formulaire);

        fetch("../traitement/traitement-regionsFirstLetter.php", {
            method: "POST", 
            body: data,
        })
        .then((response) => response.json())
        .then((response) => {

            const regionsFirstLetter = response;  
            const input2 = search.value;

            const resRegionByFirstLetters = regionsFirstLetter.filter(region => region.regions.toLocaleLowerCase().includes(input2.toLocaleLowerCase()));

            let suggestion = '';


            if(input2 !='')
            {
                resRegionByFirstLetters.forEach(result =>

                    suggestion +=`

                    <p class="suggestion"><a href="recherche.php?search=${result.regions}">${result.regions}</a></p>
                    `
                )
            }

            // document.querySelector('#suggestionsFirstLetter').insertAdjacentHTML('afterbegin', suggestion);

            document.querySelector('#suggestFirstLetter').innerHTML = suggestion;
        })


// RECHERCHE LETTRE DANS LE MOT

        fetch("../traitement/traitement-citiesBetweenLetter.php", {
            method: "POST", 
            body: data,
        })
        .then((resp) => resp.json())
        .then((resp) => {

            const citiesFirstLetter = resp;
            const input = search.value;

            const resCityByFirstLetters = citiesFirstLetter.filter(city => city.titre.toLocaleLowerCase().includes(input.toLocaleLowerCase()));

            let suggest = '';

            if(input !='')
            {
                resCityByFirstLetters.forEach(res =>

                    suggest +=`

                    <p class="suggestion"><a href="element.php?id=${res.id}">${res.titre}</a></p>
                    `
                )

            }  
            document.querySelector('#suggestionsBetweenLetter').innerHTML = suggest;
        }) 

        fetch("../traitement/traitement-regionsBetweenLetter.php", {
            method: "POST", 
            body: data,
        })
        .then((response) => response.json())
        .then((response) => {

            const regionsFirstLetter = response;  
            const input2 = search.value;

            const resRegionByFirstLetters = regionsFirstLetter.filter(region => region.regions.toLocaleLowerCase().includes(input2.toLocaleLowerCase()));

            let suggestion = '';


            if(input2 !='')
            {
                resRegionByFirstLetters.forEach(result =>

                    suggestion +=`

                    <p class="suggestion"><a href="recherche.php?search=${result.regions}">${result.regions}</a></p>
                    `
                )
            }

            document.querySelector('#suggestBetweenLetter').innerHTML = suggestion;
        })
    })  
})
  