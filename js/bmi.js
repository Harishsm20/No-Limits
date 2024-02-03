// document.addEventListener("DOMContentLoaded", function () {
//     const calculateButton = document.getElementById("calculateButton");
//     calculateButton.addEventListener("click", calculateBodyFat);

    function calculateBMI() {
        const weight = parseFloat(document.getElementById("Weight").value);
        const height = parseFloat(document.getElementById("Height").value);

        if (isNaN(weight) || isNaN(height)) {
            alert("Please enter valid numerical values for all fields.");
            return;
        }
        const heightinm = height/100;
        const bmi=weight/(heightinm**2);
        console.log(bmi);
        const resultElement = document.getElementById("result");
        resultElement.innerHTML = `Estimated BMI Percentage: ${bmi.toFixed(2)}%`;
    }
// });
