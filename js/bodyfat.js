// document.addEventListener("DOMContentLoaded", function () {
//     const calculateButton = document.getElementById("calculateButton");
//     calculateButton.addEventListener("click", calculateBodyFat);

    function calculateBodyFat() {
        const weight = parseFloat(document.getElementById("weight").value);
        const triceps = parseFloat(document.getElementById("triceps").value);
        const suprailiac = parseFloat(document.getElementById("suprailiac").value);
        const abdominal = parseFloat(document.getElementById("abdominal").value);
        const age = parseFloat(document.getElementById("age").value);
        const gender = document.getElementById("gender").value;

        if (isNaN(weight) || isNaN(triceps) || isNaN(suprailiac) || isNaN(abdominal) || isNaN(age)) {
            alert("Please enter valid numerical values for all fields.");
            return;
        }

        const maleConstants = [0.29288, 0.0005, 0.15845];
        const femaleConstants = [0.29669, 0.00043, 0.02963];
        
        const constants = gender === "male" ? maleConstants : femaleConstants;
        
        const sumSkinfolds = triceps + suprailiac + abdominal;
        
        const bodyFatPercentage =
            constants[0] * sumSkinfolds -
            constants[1] * sumSkinfolds * age +
            constants[2];
        
        const resultElement = document.getElementById("result");
        resultElement.innerHTML = `Estimated Body Fat Percentage: ${bodyFatPercentage.toFixed(2)}%`;
    }
// });
