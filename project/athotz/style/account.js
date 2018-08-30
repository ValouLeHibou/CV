function onglet(value) {

    // On stock dans var onglet la class de l'onglet du bouton de l'ID sur lequel ont a cliqué
    var onglet = document.getElementsByClassName(value);
    // on stock tous les onglet
    var hidden = document.getElementsByClassName("js");

    var active = document.getElementById(value)
    var desable = document.getElementsByClassName("case")
    var i = 0;

    // On cache tout (4 onglets)
    while (i < 4)
    {
      hidden[i].classList.add("hidden");
      desable[i].classList.remove("active" )
      i++;
    }
    onglet[0].classList.remove("hidden");
    active.classList.add("active");
  }
