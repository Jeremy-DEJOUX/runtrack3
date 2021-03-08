
function Bissextile(annee)
{
    if ((annee %4 ==0) && ((annee %100 != 0) || (annee % 400 == 0))) 
        return true + alert(annee  + " est bissextile");
    else 
        return false + alert(annee + " n'est pas bissextile");
}

Bissextile(2017);