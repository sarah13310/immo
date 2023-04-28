let months = ["Jan.", "Fév.", "Mar.", "Avr.", "Mai", "Jui.", "Jul.", "Aou.", "Sep.", "Oct.", "Nov.", "Déc."];

        function fillday() {
            for (let i = 1; i <= 31; i++) {
                day.innerHTML += `<option value="${i}">${i}</option>`;
            }
        }

        function fillmonth() {
            let i = 0;
            months.forEach(m => {
                i++;
                month.innerHTML += `<option value="${i}">${m}</option>`;
            });
        }

        function fillyear() {
            for (let i = 1980; i <= 2030; i++) {
                year.innerHTML += `<option value="${i}">${i}</option>`;
            }
        }

        async function fillTelInter(el, file, country) {
            el.innerHTML = ``;
            let response = await fetch(file);
            let data = await response.json();
            data.forEach(item => {
                el.innerHTML += `<option value='${item.pays}'>${item.pays} (${item.code_telephone})</option>`;
            });
            el.value=country;
        }