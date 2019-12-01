#include "gestion_adresse.h"

void afficher_adresse(int nb, ADRESSE*tabadresse)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        printf("%d %s %s %d %s\n",tabadresse[i].Numero,tabadresse[i].NomRue,tabadresse[i].Ville,tabadresse[i].CodePostal,tabadresse[i].Pays);
    }
    printf("-----------\n");
}

void saisisListAdresse(int nb, ADRESSE*tabadresse)
{
    int i ;
    for(i=0; i<nb; i++)
    {
        tabadresse[i]=saisieADRESSE();
    }
}

ADRESSE saisieADRESSE()
{
    ADRESSE a;

    printf("introduire le numéro:");
    scanf("%d",&a.Numero);
    printf("introduire le Nomrue :");
    scanf("%s",&a.NomRue);
    printf("introduire la ville:");
    scanf("%s",&a.Ville);
    printf("introduire le codepostal :");
    scanf("%d",&a.CodePostal);
    printf("introduire le pays:");
    scanf("%s",&a.Pays);

    return a;

}

