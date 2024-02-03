// document.addEventListener("DOMContentLoaded", function () {
//     const calculateButton = document.getElementById("calculateButton");
//     calculateButton.addEventListener("click", calculateBodyFat);

    function calculateCalorie() {
        const weight = parseFloat(document.getElementById("weight").value);
        const myfat = parseFloat(document.getElementById("myfat").value);
        const achievefat = parseFloat(document.getElementById("achievefat").value);
        // const abdominal = parseFloat(document.getElementById("abdominal").value);
        // const age = parseFloat(document.getElementById("age").value);
        // const gender = document.getElementById("gender").value;

        let maintance_calorie = weight *2.2*14;
        let achieve_weight = ((myfat*achievefat)/100) ;
        if (myfat>achievefat){
            const result2 = document.getElementById("result2");
        result2.innerHTML = `You have to reduce ${achieve_weight.toFixed(2)}kg from ${weight}kg to achieve fat ${achievefat}%  `;
        }
        else{
            const result2 = document.getElementById("result2");
        result2.innerHTML = `You have to increase ${achieve_weight.toFixed(2)}kg from ${weight}kg to achieve fat ${achievefat}%  `;
        }
        const resultElement = document.getElementById("result1");
        resultElement.innerHTML = `Your maintance calorie is ${maintance_calorie.toFixed(2)}g`;
    }
// });
