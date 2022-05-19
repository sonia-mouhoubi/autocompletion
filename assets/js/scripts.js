window.addEventListener("DOMContentLoaded", () => {

    fetch("traitement/traitement-cities.php")
        .then((response) => response.json())
        .then((response) => {
           
        const villes = response;
     
        // console.log(villes);

        fetch("traitement/traitement-regions.php")
            .then((res) => res.json())
            .then((res) => {
            
            const regions = res;
               
            // On récupère l'évenement grâce à son ID
            const search = document.getElementById('search'); 

            // Permet de récupérer à l'écoute de l'évènement (lorsque on relève la touche du clavier) la lettre saisie.
            search.addEventListener('keyup', function() {

                // On récupère le résultat dans une constante. 
                const input = search.value;

                // On filtre pour récupérer le mot qui comporte la lettre saisie ds l'input et avec toLocaleLowerCase on lui dit qu'il récupère la même chose que se soit en majuscule ou en minuscule.

                const resultCity = villes.filter(ville => ville.titre.toLocaleLowerCase().includes(input.toLocaleLowerCase()));

                const resultRegion = regions.filter(region => region.regions.toLocaleLowerCase().includes(input.toLocaleLowerCase()));

                let suggestion = '';
                // let lien = '';

                if(input !='')
                {
                    resultCity.forEach(resultItem =>

                        suggestion +=`

                        <p class="suggestion"><a href="views/element.php?id=${resultItem.id}">${resultItem.titre}</a></p>
                        `
                        // lien +=`

                        // <a href="views/recherche.php?id=${resultItem.id}">
                        // `
                    )
                    resultRegion.forEach(resItem =>

                        suggestion +=`
    
                        <p class="suggestion"><a href="views/recherche.php?search=${resItem.regions}">${resItem.regions}</a></p>
                        `
                    ) 
                }

                document.querySelector('#suggestions').innerHTML = suggestion;  
            })
        })
    })

    fetch("traitement/traitement-orderLetter.php")
        .then((respons) => respons.json())
        .then((respons) => {

            const letter = respons;
     
            console.log(letter);

    })
    
 });