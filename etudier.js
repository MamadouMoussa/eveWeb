document.addEventListener("DOMContentLoaded", function () {
  const regionSelect = document.getElementById("region");
  const paysSelect = document.getElementById("pays");

  const paysParRegion = {
    afrique: ["Maroc", "Tunisie", "Guinée"],
    europe: [
      "Allemagne",
      "France",
      "Italie",
      "Roumanie",
      "Luxembourg",
      "Pologne",
      "Russie",
    ],
    amerique: ["Canada", "États-Unis"],
  };

  regionSelect.addEventListener("change", function () {
    const selectedRegion = this.value;
    paysSelect.innerHTML = '<option value="">Sélectionnez un pays</option>';

    if (selectedRegion && paysParRegion[selectedRegion]) {
      paysParRegion[selectedRegion].forEach(function (pays) {
        const option = document.createElement("option");
        option.textContent = pays;
        option.value = pays;
        paysSelect.appendChild(option);
      });

      paysSelect.disabled = false;
    } else {
      paysSelect.disabled = true;
    }
  });
});
